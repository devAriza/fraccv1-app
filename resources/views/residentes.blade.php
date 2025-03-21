@extends('main')

@section('content')

<div class="d-flex justify-content-between align-items-center row ms-0 ps-0 me-0 mb-5">
    <h3 class="text-dark col-xl-3">Residentes</h3><button class="btn col-xl-2 mb-0 btn-secondary col-lg-2 col-md-2" type="button" onclick="openModalCreatResident()"><i class="fas fa-plus-circle"></i>&nbsp; Nuevo residente</button>
</div>
<div class="card shadow">
    <div class="card-body"></div>
</div>

@endsection

@section('modals')

<div class="modal fade" role="dialog" tabindex="-1" id="modalCreatResident">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="justify-content-between row">
                    <h4 class="modal-title fw-bold col-xl-5 h5 mb-1">Crear residente</h4><button class="btn-close me-2" type="button" aria-label="Close" data-bs-dismiss="modal"></button><label class="form-label">Complete los detalles para crear un nuevo residente.</label>
                    <div class="row gap-3 py-3">
                        <div class="form-floating col"><input type="text" id="floatingNameResident" class="form-control" placeholder="Nombre completo"><label class="form-label" for="floatingNameResident">Nombre completo</label></div>
                        <div class="col form-floating"><input type="text" id="floatingPhoneResident" class="form-control" placeholder="Teléfono"><label class="form-label" for="floatingPhoneResident">Teléfono</label></div>
                        <div class="col form-floating"><input type="text" id="floatingEmailResident" class="form-control" placeholder="Email"><label class="form-label" for="floatingEmailResident">Email</label></div>
                    </div>
                    <div class="row gap-3 py-3">
                        <div class="col">
                            <div class="form-floating"><select class="form-select">
                                    <optgroup label="This is a group">
                                        <option value="12" selected="">This is item 1</option>
                                        <option value="13">This is item 2</option>
                                        <option value="14">This is item 3</option>
                                    </optgroup>
                                </select><label class="form-label">Selecciona dirección/es</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cerrar</button><button class="btn btn-secondary" type="button"><i class="fas fa-save"></i>&nbsp; Crear residente</button></div>
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
                        <div class="form-floating col"><input type="text" id="floatingNameResident-2" class="form-control" placeholder="Nombre completo"><label class="form-label" for="floatingNameResident">Nombre completo</label></div>
                        <div class="col form-floating"><input type="text" id="floatingPhoneResident-2" class="form-control" placeholder="Teléfono"><label class="form-label" for="floatingPhoneResident">Teléfono</label></div>
                        <div class="col form-floating"><input type="text" id="floatingEmailResident-2" class="form-control" placeholder="Email"><label class="form-label" for="floatingEmailResident-2">Email</label></div>
                    </div>
                    <div class="row gap-3 py-3">
                        <div class="col">
                            <div class="form-floating"><select class="form-select">
                                    <optgroup label="This is a group">
                                        <option value="12" selected="">This is item 1</option>
                                        <option value="13">This is item 2</option>
                                        <option value="14">This is item 3</option>
                                    </optgroup>
                                </select><label class="form-label">Selecciona dirección/es</label></div>
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
            <div class="modal-body">
                <div class="justify-content-between row">
                    <h4 class="modal-title fw-bold col-xl-5 h5 mb-1">¿Estás seguro?</h4><button class="btn-close me-2" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                    <div class="row gap-3 py-3">
                        <div class="col"><label class="form-label">Está acción no se puede deshacer. Eliminará permanentemente el residente del sistema.</label></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cerrar</button><button class="btn btn-danger" type="button"><i class="fas fa-trash"></i>&nbsp; Eliminar</button></div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script src="{{ asset('js/residentes.js')}}"></script>

@endpush