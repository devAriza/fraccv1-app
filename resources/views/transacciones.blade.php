@extends('main')

@section('content')

<div class="d-flex justify-content-between align-items-center row ms-0 ps-0 me-0 mb-5">
    <h3 class="text-dark col-xl-3">Transacciones</h3><button class="btn col-xl-3 mb-0 btn-secondary col-lg-3 col-md-3" type="button" onclick="openModalCreatTransaction()"><i class="fas fa-plus-circle"></i>&nbsp; Nueva transacción</button>
</div>
<div class="card shadow">
    <div class="card-body"></div>
</div>

@endsection

@section('modals')

<div class="modal fade" role="dialog" tabindex="-1" id="modalCreatTransaction">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="justify-content-between row">
                    <h4 class="modal-title fw-bold col-xl-5 h5 mb-1">Nueva transacción</h4><button class="btn-close me-2" type="button" aria-label="Close" data-bs-dismiss="modal"></button><label class="form-label">Complete los detalles para crear una nueva transacción.</label>
                    <div class="row gap-3 py-3">
                        <div class="form-floating col-xl-5"><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Selecciona nombre de residente</label></div>
                        <div class="col form-floating"><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Selecciona dirección</label></div>
                    </div>
                    <div class="row gap-3 py-3">
                        <div class="col input-group"><span class="input-group-text">$</span>
                            <div class="form-floating"><input type="number" class="form-control" placeholder="Cantidad" step="0.01"><label class="form-label">Cantidad</label></div>
                        </div>
                        <div class="col">
                            <div class="form-floating"><textarea class="form-control no-resize" placeholder="Descripcion"></textarea><label class="form-label">Descripción</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cerrar</button><button class="btn btn-secondary" type="button"><i class="fas fa-save"></i>&nbsp; Crear transacción</button></div>
            <div class="modal fade" role="dialog" tabindex="-1" id="modalCreatTransaction-1">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="justify-content-between row">
                                <h4 class="modal-title fw-bold col-xl-5 h5 mb-1">Nueva transacción</h4><button class="btn-close me-2" type="button" aria-label="Close" data-bs-dismiss="modal"></button><label class="form-label">Complete los detalles para crear una nueva transacción.</label>
                                <div class="row gap-3 py-3">
                                    <div class="form-floating col-xl-5"><select class="form-select">
                                            <optgroup label="This is a group">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                        </select><label class="form-label">Selecciona nombre de residente</label></div>
                                    <div class="col form-floating"><select class="form-select">
                                            <optgroup label="This is a group">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                        </select><label class="form-label">Selecciona dirección</label></div>
                                </div>
                                <div class="row gap-3 py-3">
                                    <div class="col input-group"><span class="input-group-text">$</span>
                                        <div class="form-floating"><input type="number" class="form-control" placeholder="Cantidad" step="0.01"><label class="form-label">Cantidad</label></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating"><textarea class="form-control no-resize" placeholder="Descripcion"></textarea><label class="form-label">Descripción</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cerrar</button><button class="btn btn-secondary" type="button"><i class="fas fa-save"></i>&nbsp; Crear transacción</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="modalUpdateTransaction">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="justify-content-between row">
                    <h4 class="modal-title fw-bold col-xl-5 h5 mb-1">Editar transacción</h4><button class="btn-close me-2" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                    <div class="row gap-3 py-3">
                        <div class="form-floating col-xl-5"><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Selecciona nombre de residente</label></div>
                        <div class="col form-floating"><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Selecciona dirección</label></div>
                    </div>
                    <div class="row gap-3 py-3">
                        <div class="col input-group"><span class="input-group-text">$</span>
                            <div class="form-floating"><input type="number" class="form-control" placeholder="Cantidad" step="0.01"><label class="form-label">Cantidad</label></div>
                        </div>
                        <div class="col">
                            <div class="form-floating"><textarea class="form-control no-resize" placeholder="Descripcion"></textarea><label class="form-label">Descripción</label></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cerrar</button><button class="btn btn-secondary" type="button"><i class="fas fa-save"></i>&nbsp; Guardar cambios</button></div>
            <div class="modal fade" role="dialog" tabindex="-1" id="modalCreatTransaction-3">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="justify-content-between row">
                                <h4 class="modal-title fw-bold col-xl-5 h5 mb-1">Nueva transacción</h4><button class="btn-close me-2" type="button" aria-label="Close" data-bs-dismiss="modal"></button><label class="form-label">Complete los detalles para crear una nueva transacción.</label>
                                <div class="row gap-3 py-3">
                                    <div class="form-floating col-xl-5"><select class="form-select">
                                            <optgroup label="This is a group">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                        </select><label class="form-label">Selecciona nombre de residente</label></div>
                                    <div class="col form-floating"><select class="form-select">
                                            <optgroup label="This is a group">
                                                <option value="12" selected="">This is item 1</option>
                                                <option value="13">This is item 2</option>
                                                <option value="14">This is item 3</option>
                                            </optgroup>
                                        </select><label class="form-label">Selecciona dirección</label></div>
                                </div>
                                <div class="row gap-3 py-3">
                                    <div class="col input-group"><span class="input-group-text">$</span>
                                        <div class="form-floating"><input type="number" class="form-control" placeholder="Cantidad" step="0.01"><label class="form-label">Cantidad</label></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-floating"><textarea class="form-control no-resize" placeholder="Descripcion"></textarea><label class="form-label">Descripción</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cerrar</button><button class="btn btn-secondary" type="button"><i class="fas fa-save"></i>&nbsp; Crear transacción</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="modalDeleteTransaction">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="justify-content-between row">
                    <h4 class="modal-title fw-bold col-xl-5 h5 mb-1">¿Estás seguro?</h4><button class="btn-close me-2" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                    <div class="row gap-3 py-3">
                        <div class="col"><label class="form-label">Está acción no se puede deshacer. Eliminará permanentemente la transacción del sistema.</label></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cerrar</button><button class="btn btn-danger" type="button"><i class="fas fa-trash"></i>&nbsp; Eliminar</button></div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script src="{{ asset('js/transacciones.js')}}"></script>

@endpush