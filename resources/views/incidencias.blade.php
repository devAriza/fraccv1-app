@extends('main')

@section('content')

<div class="d-flex justify-content-between align-items-center row ms-0 ps-0 me-0 mb-5">
    <h3 class="text-dark col-xl-3">Incidencias</h3><button class="btn col-xl-2 mb-0 btn-secondary col-lg-2 col-md-2" type="button" onclick="openModalCreatIncident()"><i class="fas fa-plus-circle"></i>&nbsp; Nueva incidencia</button>
</div>
<div class="card shadow">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Fecha Reporte</th>
                        <th>Tipo</th>
                        <th>Prioridad</th>
                        <th>Descripción</th>
                        <th>Residente</th>
                        <th>Dirección</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de incidencia 1 -->
                    <tr>
                        <td>2024-03-15 14:30</td>
                        <td>
                            <span class="badge bg-info">
                                <i class="fas fa-tint me-1"></i>PLOMERÍA
                            </span>
                        </td>
                        <td>
                            <span class="badge bg-danger">ALTA</span>
                        </td>
                        <td>Fuga en tubería principal</td>
                        <td>Juan Pérez</td>
                        <td>Calle Primavera #123</td>
                        <td>
                            <span class="badge bg-success">RESUELTO</span>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-primary" 
                                        onclick="openModalUpdateIncident(1)">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" 
                                        onclick="openModalDeleteIncident(1)">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Ejemplo de incidencia 2 -->
                    <tr>
                        <td>2024-03-18 09:15</td>
                        <td>
                            <span class="badge bg-warning text-dark">
                                <i class="fas fa-bolt me-1"></i>ELECTRICIDAD
                            </span>
                        </td>
                        <td>
                            <span class="badge bg-warning">MEDIA</span>
                        </td>
                        <td>Corto circuito en área común</td>
                        <td>-</td>
                        <td>Calle Verano #456</td>
                        <td>
                            <span class="badge bg-danger">PENDIENTE</span>
                        </td>
                        <td>
                            <div class="d-flex gap-2">
                                <button class="btn btn-sm btn-primary" 
                                        onclick="openModalUpdateIncident(2)">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-danger" 
                                        onclick="openModalDeleteIncident(2)">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('modals')

<div class="modal fade" role="dialog" tabindex="-1" id="modalCreatIncident">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="justify-content-between row">
                    <h4 class="modal-title fw-bold col-xl-5 h5 mb-1">Nueva incidencia</h4><button class="btn-close me-2" type="button" aria-label="Close" data-bs-dismiss="modal"></button><label class="form-label">Complete los detalles para crear un nueva incidencia.</label>
                    <div class="row gap-3 py-3">
                        <div class="form-floating col-xl-8"><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Selecciona nombre de residente</label></div>
                        <div class="col form-floating"><input class="form-control" type="date"><label class="form-label">Día de incidencia</label></div>
                        <div class="form-floating"><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Selecciona dirección</label></div>
                        <div class="form-floating col-xl-5"><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Selecciona tipo de incidencia</label></div>
                        <div class="col form-floating"><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Selecciona prioridad</label></div>
                        <div class="d-flex justify-content-center align-items-center col form-floating">
                            <div class="form-check form-switch border-bottom-secondary"><label class="form-label">Resuelto</label><input type="checkbox" class="form-check-input" role="switch"></div>
                        </div>
                        <div class="form-floating"><textarea class="form-control no-resize" placeholder="Descripcion de incidencia"></textarea><label class="form-label">Descripción de incidencia</label></div>
                    </div>
                    <div class="row gap-3 py-3">
                        <div class="form-floating"><textarea class="form-control no-resize" placeholder="Descripcion de incidencia" disabled=""></textarea><label class="form-label">Descripción de resolución</label></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cerrar</button><button class="btn btn-secondary" type="button"><i class="fas fa-save"></i>&nbsp; Crear incidencia</button></div>
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="modalUpdateIncident">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="justify-content-between row">
                    <h4 class="modal-title fw-bold col-xl-5 h5 mb-1">Editar incidencia</h4><button class="btn-close me-2" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                    <div class="row gap-3 py-3">
                        <div class="form-floating col-xl-8"><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Selecciona nombre de residente</label></div>
                        <div class="col form-floating"><input class="form-control" type="date"><label class="form-label">Día de incidencia</label></div>
                        <div class="form-floating"><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Selecciona dirección</label></div>
                        <div class="form-floating col-xl-5"><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Selecciona tipo de incidencia</label></div>
                        <div class="col form-floating"><select class="form-select">
                                <optgroup label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                    <option value="13">This is item 2</option>
                                    <option value="14">This is item 3</option>
                                </optgroup>
                            </select><label class="form-label">Selecciona prioridad</label></div>
                        <div class="d-flex justify-content-center align-items-center col form-floating">
                            <div class="form-check form-switch border-bottom-secondary"><label class="form-label">Resuelto</label><input type="checkbox" class="form-check-input" role="switch"></div>
                        </div>
                        <div class="form-floating"><textarea class="form-control no-resize" placeholder="Descripcion de incidencia"></textarea><label class="form-label">Descripción de incidencia</label></div>
                    </div>
                    <div class="row gap-3 py-3">
                        <div class="form-floating col-xl-8"><textarea class="form-control no-resize" placeholder="Descripcion de incidencia" disabled=""></textarea><label class="form-label">Descripción de resolución</label></div>
                        <div class="col form-floating"><input class="form-control" type="date"><label class="form-label">Día de resolución</label></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cerrar</button><button class="btn btn-secondary" type="button"><i class="fas fa-save"></i>&nbsp;Guardar cambios</button></div>
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
        </div>
    </div>
</div>
<div class="modal fade" role="dialog" tabindex="-1" id="modalDeleteIncident">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="justify-content-between row">
                    <h4 class="modal-title fw-bold col-xl-5 h5 mb-1">¿Estás seguro?</h4><button class="btn-close me-2" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                    <div class="row gap-3 py-3">
                        <div class="col"><label class="form-label">Está acción no se puede deshacer. Eliminará permanentemente el incidente del sistema.</label></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Cerrar</button><button class="btn btn-danger" type="button"><i class="fas fa-trash"></i>&nbsp; Eliminar</button></div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script src="{{ asset('js/incidencias.js')}}"></script>

@endpush