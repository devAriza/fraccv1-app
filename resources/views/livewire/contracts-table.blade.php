<div>
    @if(session('message'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container-fluid">
        <div class="d-flex justify-content-end align-items-center row ms-0 ps-0 me-0 mb-3">
            <div class="col-xl-4">
                <input 
                    type="search" 
                    class="form-control" 
                    placeholder="Buscar por dirección o residente"
                    wire:model.debounce.300ms="search"
                >
            </div>
        </div>
        
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th wire:click="sortBy('start_date')" style="cursor: pointer;">
                                    Fecha Inicio 
                                    @include('partials.sort-icon', ['field' => 'start_date'])
                                </th>
                                <th>Residente</th>
                                <th>Dirección</th>
                                <th>Documento</th>
                                @if(Session::get('sessiontipo') == 1)
                                <th>Acciones</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($contracts as $contract)
                                <tr>
                                    <td>
                                        {{ $contract->start_date->format('d/m/Y') }} - 
                                        {{ $contract->end_date->format('d/m/Y') }}
                                    </td>
                                    <td>
                                        {{ $contract->houseResident->resident->name }}
                                        <span class="badge bg-{{ $contract->end_date > now() ? 'success' : 'danger' }}">
                                            {{ $contract->end_date > now() ? 'VIGENTE' : 'VENCIDO' }}
                                        </span>
                                    </td>
                                    <td>{{ $contract->houseResident->house->address }}</td>
                                    <td>
                                        <a href="{{ asset($contract->path_contract) }}" 
                                           target="_blank" 
                                           class="btn btn-sm btn-link">
                                            <i class="fas fa-file-pdf"></i> Ver PDF
                                        </a>
                                    </td>
                                    <td>
                                        @if(Session::get('sessiontipo') == 1)
                                            <button class="btn btn-sm btn-danger"
                                                    wire:click="deleteContract({{ $contract->contract_id }})">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">
                                        <div class="py-4 text-muted">
                                            No se encontraron contratos
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>

    <div wire:loading.delay class="loading-overlay">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>