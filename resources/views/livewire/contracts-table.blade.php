<div>
    @if(session('message'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container-fluid">

        
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