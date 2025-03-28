@extends('main')

@section('content')

<div class="d-flex justify-content-between align-items-center row ms-0 ps-0 me-0 mb-5">
    <h3 class="text-dark col-xl-3">Residentes</h3><button class="btn col-xl-2 mb-0 btn-secondary col-lg-2 col-md-2" type="button" onclick="openModalCreatResident()"><i class="fas fa-plus-circle"></i>&nbsp; Nuevo residente</button>
</div>
<div class="card shadow">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Contacto</th>
                        <th>Tipo</th>
                        <th>Dirección Asociada</th>
                        <th>QR</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customResidents as $resident)
                    <tr>
                        <td class="fw-bold" hidden>
                            {{ $resident->resident_id }}
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-user-circle me-2 text-muted"></i>
                                {{ $resident->name }}
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <span><i class="fas fa-envelope me-2"></i>{{ $resident->email }}</span>
                                <span><i class="fas fa-phone me-2"></i>{{ $resident->phone ?? 'Sin teléfono' }}</span>
                            </div>
                        </td>
                        <td>
                            @switch($resident->type_name)
                            @case('Propietario')
                            <span class="badge bg-primary">PROPIETARIO</span>
                            @break
                            @case('Arrendatario')
                            <span class="badge bg-warning text-dark">ARRENDATARIO</span>
                            @break
                            @default
                            <span class="badge bg-secondary">ADMINISTRACIÓN</span>
                            @endswitch
                        </td>
                        <td>
                            {{ $resident->address }}
                        </td>
                        <td>
                            <a href=""
                                class="btn btn-sm btn-success"
                                title="Descargar QR">
                                <i class="fas fa-download"></i>
                            </a>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <button
                                    class="btn btn-sm btn-primary"
                                    title="Editar residente"
                                    onclick="openModalUpdateResident(
                                    '{{ $resident->resident_id }}',
                                    '{{ $resident->name }}',
                                    '{{ $resident->phone }}',
                                    '{{ $resident->email }}',
                                    '{{ $resident->house_id }}',
                                    '{{ $resident->type_id }}'
                                    )"><i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" title="Eliminar residente" onclick="openModalDeleteResident('{{ $resident->resident_id }}')">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('modals')

<div class="modal fade" role="dialog" tabindex="-1" id="modalCreatResident">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="formCreateResident" action="{{ route('crearResidentes') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="justify-content-between row">
                        <h4 class="modal-title fw-bold col-xl-5 h5 mb-1">Crear residente</h4>
                        <button class="btn-close me-2" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                        <label class="form-label">Complete los detalles para crear un nuevo residente.</label>
                        <div class="row gap-3 py-3">
                            <div class="form-floating col">
                                <input type="text" name="name" id="floatingNameResident" class="form-control" placeholder="Nombre completo" required>
                                <label for="floatingNameResident">Nombre completo</label>
                            </div>
                            <div class="col form-floating">
                                <input type="tel" name="phone" id="floatingPhoneResident" class="form-control" placeholder="Teléfono">
                                <label for="floatingPhoneResident">Teléfono</label>
                            </div>
                            <div class="col form-floating">
                                <input type="email" name="email" id="floatingEmailResident" class="form-control" placeholder="Email" required>
                                <label for="floatingEmailResident">Email</label>
                            </div>
                        </div>
                        <div class="row gap-3 py-3">

                            <!-- Select de Direcciones -->
                            <div class="col form-floating">
                                <select name="house_id" class="form-select">
                                    <option value="">Seleccione una dirección</option>
                                    @foreach($houses as $house)
                                    <option value="{{ $house->house_id }}">{{ $house->address }}</option>
                                    @endforeach
                                </select>
                                <label class="form-label">Selecciona dirección</label>
                            </div>
                            <!-- Campo Tipo de Residente -->
                            <div class="col form-floating">
                                <select name="type_resident_id" class="form-select" required>
                                    <option value="">Seleccione un tipo</option>
                                    @foreach($residentTypes as $type)
                                    <option value="{{ $type->type_id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                                <label class="form-label">Tipo de residente</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-secondary">
                        <i class="fas fa-save"></i>&nbsp; Crear residente
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="modalUpdateResident">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="justify-content-between row">
                    <h4 class="modal-title fw-bold col-xl-5 h5 mb-1">Editar residente</h4><button class="btn-close me-2" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                    <div class="row gap-3 py-3">
                        <div class="form-floating col"><input type="text" id="editNameResident" class="form-control" placeholder="Nombre completo"><label class="form-label" for="floatingNameResident">Nombre completo</label></div>
                        <div class="col form-floating"><input type="text" id="editPhoneResident" class="form-control" placeholder="Teléfono"><label class="form-label" for="floatingPhoneResident">Teléfono</label></div>
                        <div class="col form-floating"><input type="text" id="editEmailResident" class="form-control" placeholder="Email"><label class="form-label" for="floatingEmailResident-2">Email</label></div>
                    </div>
                    <div class="row gap-3 py-3">
                        <div class="col">
                            <div class="form-floating">
                                <select name="address" id="editHouseResident" class="form-select" required>
                                    <option value="">Seleccione una dirección</option>
                                    @foreach($housesAll as $houseAll)
                                    <option value="{{ $houseAll->house_id }}">{{ $houseAll->address }}</option>
                                    @endforeach
                                </select>
                                <label class="form-label">Selecciona dirección</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="col form-floating">
                                <select name="type_resident_id" id="editTypeResident" class="form-select" required>
                                    <option value="">Seleccione un tipo</option>
                                    @foreach($residentTypes as $type)
                                    <option value="{{ $type->type_id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                                <label class="form-label">Tipo de residente</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cerrar</button><button class="btn btn-secondary" type="button"><i class="fas fa-save"></i>&nbsp; Guardar cambios</button></div>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="modalDeleteResident">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form id="deleteResidentForm" method="POST">
                @csrf
                @method('DELETE') 
                <div class="modal-body">
                    <div class="justify-content-between row">
                        <input type="hidden" name="residentId" id="deleteResidentId">
                        <h4 class="modal-title fw-bold col-xl-5 h5 mb-1">¿Estás seguro?</h4><button class="btn-close me-2" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                        <div class="row gap-3 py-3">
                            <div class="col"><label class="form-label">Está acción no se puede deshacer. Eliminará permanentemente el residente del sistema.</label></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-light" type="button" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
    var baseUrl = "{{ url('/') }}";  // Obtiene la URL base de Laravel
</script>
<script src="{{ asset('js/residentes.js')}}"></script>

@endpush