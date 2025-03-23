<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contract;
use App\Models\HouseResident;
use Illuminate\Support\Facades\Session;

class ContractsTable extends Component
{
    use WithPagination;
    
    public $search = '';
    public $sortField = 'start_date';
    public $sortDirection = 'desc';
    protected $queryString = ['search', 'sortField', 'sortDirection'];

    protected $listeners = ['contractUpdated' => '$refresh'];

    public function sortBy($field)
    {
        $this->sortDirection = $this->sortField === $field 
            ? $this->reverseSort()
            : 'asc';

        $this->sortField = $field;
    }

    public function reverseSort()
    {
        return $this->sortDirection === 'asc' ? 'desc' : 'asc';
    }

    private function getBaseQuery()
    {
        
        if(Session::get('sessiontipo') != 1) {

            $query = Contract::whereHas('houseResident', function($q) {
                $q->where('resident_id', Session::get('sessionid'));
            })->get();


        }else{
            $query = Contract::all();
        }

        return $query;
    }

    public function render()
    {
        return view('livewire.contracts-table', [
            'contracts' => $this->getBaseQuery()
                ->when($this->search, function($query) {
                    $query->where(function($q) {
                        $q->whereHas('houseResident.resident', function($subQ) {
                            $subQ->where('name', 'like', '%'.$this->search.'%');
                        })
                        ->orWhereHas('houseResident.house', function($subQ) {
                            $subQ->where('address', 'like', '%'.$this->search.'%');
                        });
                    });
                })
                //->orderBy($this->sortField, $this->sortDirection)
                ->paginate(10)
        ]);
    }
    
    public function deleteContract($id)
    {
        $contract = Contract::findOrFail($id);
        
        // Verificar permisos
        if(Session::get('sessiontipo') != 1 && 
           $contract->houseResident->resident_id != Session::get('sessionid')) {
            abort(403);
        }

        $contract->delete();
        $this->emit('contractUpdated');
        session()->flash('message', 'Contrato eliminado exitosamente');
    }
    
    public function renewContract($id)
    {
        $contract = Contract::findOrFail($id);
        // Lógica de renovación aquí
    }
}