@extends('main')

@section('content')

<div class="d-flex justify-content-between align-items-center row ms-0 ps-0 me-0 mb-5">
    <h3 class="text-dark col-xl-4">Administración de comunicados</h3><button class="btn col-xl-2 mb-0 btn-secondary col-lg-2 col-md-2" type="button" onclick="openModalCreatEvent()"><i class="fas fa-plus-circle"></i>&nbsp; Nuevo comunicado</button>
</div>
<div class="card shadow">
    <div class="card-body"></div>
</div>

@endsection

@section('modals')

<div class="modal fade" role="dialog" tabindex="-1" id="modalCreatEvent">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="justify-content-between row">
                    <h4 class="modal-title fw-bold col-xl-5 h5 mb-1">Nuevo comunicado</h4><button class="btn-close me-2" type="button" aria-label="Close" data-bs-dismiss="modal"></button><label class="form-label">Complete los detalles para crear una nueva alerta | evento | noticia | reglamento.</label>
                    <div class="row gap-3 py-3">
                        <div class="form-floating col-xl-8"><input type="text" class="form-control" placeholder="Ingresa título"><label class="form-label">Ingresa título</label></div>
                        <div class="col form-floating"><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Selecciona categoría</label></div>
                    </div>
                    <div class="row gap-3 py-3 div-alert" hidden="">
                        <div class="form-floating"><textarea class="form-control no-resize" placeholder="Descripcion de incidencia"></textarea><label class="form-label">Descripción de alerta</label></div>
                    </div>
                    <div class="row gap-3 py-3 div-document" hidden="">
                        <div><label class="form-label mb-0" for="fileEvento">Seleccione archivo para compartir</label><input type="file" id="fileEvento" class="form-control" name="fileEvento"></div>
                    </div>
                    <div class="row gap-3 py-3 div-alert" hidden="">
                        <div class="form-floating"><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Selecciona dirección</label></div>
                        <div class="form-floating col-xl-5"><input class="form-control" type="date"><label class="form-label">Selecciona día del evento</label></div>
                        <div class="col form-floating"><input class="form-control" type="time"><label class="form-label">Hora de inicio</label></div>
                        <div class="col form-floating"><input class="form-control" type="time"><label class="form-label">Hora de termino</label></div>
                    </div>
                    <div class="row gap-3 py-3 ms-0"><label class="form-label pb-0 mb-0">Selecciona prioridad</label>
                        <div class="form-check form-check-inline col-xl-1 pe-0 me-4"><input type="radio" id="radioNormal" class="form-check-input" name="radioPrioridad" value="Normal"><label class="form-label form-check-label" for="radioPrioridad">Normal</label></div>
                        <div class="form-check form-check-inline col-xl-3"><input type="radio" id="radioUrgente" class="form-check-input" name="radioPrioridad" value="Urgente"><label class="form-label form-check-label" for="radioPrioridad">Urgente</label></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cerrar</button><button class="btn btn-secondary" type="button"><i class="fas fa-save"></i>&nbsp; Crear comunicado</button></div>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="modalUpdateEvent">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="justify-content-between row">
                    <h4 class="modal-title fw-bold col-xl-5 h5 mb-1">Editar comunicado</h4><button class="btn-close me-2" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                    <div class="row gap-3 py-3">
                        <div class="form-floating col-xl-8"><input type="text" class="form-control" placeholder="Ingresa título"><label class="form-label">Ingresa título</label></div>
                        <div class="col form-floating"><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Selecciona categoría</label></div>
                    </div>
                    <div class="row gap-3 py-3 div-alert" hidden="">
                        <div class="form-floating"><textarea class="form-control no-resize" placeholder="Descripcion de incidencia"></textarea><label class="form-label">Descripción de alerta</label></div>
                    </div>
                    <div class="row gap-3 py-3 div-document" hidden="">
                        <div><label class="form-label mb-0" for="fileEvento">Seleccione archivo para compartir</label><input type="file" id="fileEvento-1" class="form-control" name="fileEvento"></div>
                    </div>
                    <div class="row gap-3 py-3 div-alert" hidden="">
                        <div class="form-floating"><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Selecciona dirección</label></div>
                        <div class="form-floating col-xl-5"><input class="form-control" type="date"><label class="form-label">Selecciona día del evento</label></div>
                        <div class="col form-floating"><input class="form-control" type="time"><label class="form-label">Hora de inicio</label></div>
                        <div class="col form-floating"><input class="form-control" type="time"><label class="form-label">Hora de termino</label></div>
                    </div>
                    <div class="row gap-3 py-3 ms-0"><label class="form-label pb-0 mb-0">Selecciona prioridad</label>
                        <div class="form-check form-check-inline col-xl-1 pe-0 me-4"><input type="radio" id="radioNormal-1" class="form-check-input" name="radioPrioridad" value="Normal"><label class="form-label form-check-label" for="radioPrioridad">Normal</label></div>
                        <div class="form-check form-check-inline col-xl-3"><input type="radio" id="radioUrgente-1" class="form-check-input" name="radioPrioridad" value="Urgente"><label class="form-label form-check-label" for="radioPrioridad">Urgente</label></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cerrar</button><button class="btn btn-secondary" type="button"><i class="fas fa-save"></i>&nbsp; Crear comunicado</button></div>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="modalDeleteEvent">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="justify-content-between row">
                    <h4 class="modal-title fw-bold col-xl-5 h5 mb-1">¿Estás seguro?</h4><button class="btn-close me-2" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                    <div class="row gap-3 py-3">
                        <div class="col"><label class="form-label">Está acción no se puede deshacer. Eliminará permanentemente el comunicado del sistema y los residentes no podrán visualizarlo.</label></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cerrar</button><button class="btn btn-danger" type="button"><i class="fas fa-trash"></i>&nbsp; Eliminar</button></div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script src="{{ asset('js/eventos_admin.js')}}"></script>

@endpush