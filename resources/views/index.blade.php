@extends('scripts')

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-secondary py-2">
                            <div class="card-body">
                                <div class="row g-0 align-items-center">
                                    <div class="col me-2">
                                        <div class="text-uppercase fw-bold text-xs mb-1"><span>Total de residentes</span></div>
                                        <div class="text-dark fw-bold h5 mb-0"><span>$40,000</span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user-friends fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-secondary py-2">
                            <div class="card-body">
                                <div class="row g-0 align-items-center">
                                    <div class="col me-2">
                                        <div class="text-uppercase fw-bold text-xs mb-1"><span>propiedades</span></div>
                                        <div class="text-dark fw-bold h5 mb-0"><span>$215,000</span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-warehouse fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-secondary py-2">
                            <div class="card-body">
                                <div class="row g-0 align-items-center">
                                    <div class="col me-2">
                                        <div class="text-uppercase fw-bold text-xs mb-1"><span>pagos recibidos</span></div>
                                        <div class="text-dark fw-bold h5 mb-0"><span>18</span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-dollar-sign fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3 mb-4">
                        <div class="card shadow border-left-secondary py-2">
                            <div class="card-body">
                                <div class="row g-0 align-items-center">
                                    <div class="col me-2">
                                        <div class="text-uppercase fw-bold text-xs mb-1"><span>Eventos activos</span></div>
                                        <div class="text-dark fw-bold h5 mb-0"><span>18</span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-center align-items-center">
                                <h6 class="fw-bold text-secondary m-0 h4">Dashboard</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <h1 class="h5">Estado de pagos</h1><label class="form-label">Resumen de pagos de mantenimiento del mes actual</label>
                                </div>
                                <div class="row mt-4 pt-0"><label class="form-label">Pagos recibidos</label>
                                    <div class="progress ms-2 ps-0 col-8">
                                        <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                </div>
                                <div class="row mt-2"><label class="form-label">Pagos pendientes</label>
                                    <div class="progress ms-2 ps-0 col-8">
                                        <div class="progress-bar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">50%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-center align-items-center">
                                <h6 class="fw-bold text-secondary m-0 h4">Próximos eventos</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <h1 class="h5">Eventos programados en el fraccionamiento</h1>
                                </div>
                                <div class="row"><label class="form-label fw-bold">Junta vecinal</label><label class="form-label">Sábado, 15 de junio - 18:00</label></div>
                                <div class="row"><label class="form-label fw-bold">Junta vecinal</label><label class="form-label">Sábado, 15 de junio - 18:00</label></div>
                                <div class="row div-card"><a class="btn btn-secondary" href="/eventos_admin.html" type="button">Panel eventos</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid d-flex justify-content-center">
                <div class="d-flex row">
                    <div class="col">
                        <div class="card shadow mb-3">
                            <div class="card-header d-flex justify-content-center align-items-center">
                                <h6 class="fw-bold text-secondary m-0 h4">Residentes recientes</h6>
                            </div>
                            <div class="card-body">
                                <div class="row mb-4">
                                    <h1 class="h5">Nuevos residentes</h1>
                                </div>
                                <div class="row"><label class="form-label fw-bold">Carlos Mendoza</label><label class="form-label">Casa #28</label></div>
                                <div class="row"><label class="form-label fw-bold">Ana García</label><label class="form-label">Casa #58</label></div>
                                <div class="row div-card"><a class="btn btn-secondary" href="/residentes.html" type="button">Panel residentes</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-center align-items-center">
                                <h6 class="fw-bold text-secondary m-0 h4">Propiedades destacadas</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <h1 class="h5">Propiedades con cambios recientes</h1>
                                </div>
                                <div class="row"><label class="form-label fw-bold">Casa #23</label><label class="form-label">Renovación completada</label></div>
                                <div class="row"><label class="form-label fw-bold">Casa #56</label><label class="form-label">Cambio de propietario</label></div>
                                <div class="row div-card"><a class="btn btn-secondary" href="/contratos.html" type="button">Panel contratos</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-center align-items-center">
                                <h6 class="fw-bold text-secondary m-0 h4">Pagos recientes</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <h1 class="h5">Últimos pagos de mantenimiento</h1>
                                </div>
                                <div class="row"><label class="form-label fw-bold">Casa #12</label><label class="form-label d-flex justify-content-between">Mantenimiento Junio&nbsp;<span>$1,200</span></label></div>
                                <div class="row"><label class="form-label fw-bold">Casa #2</label><label class="form-label d-flex justify-content-between">Mantenimiento Junio&nbsp;<span>$1,200</span></label></div>
                                <div class="row div-card"><a class="btn btn-secondary" href="/incidencias.html" type="button">Panel incidencias</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © UPPue 2025</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/theme.js')}}"></script>

<!--     
    <script src="assets/js/eventos_admin.js"></script>
    <script src="assets/js/incidencias.js"></script>
    <script src="assets/js/residentes.js"></script>
    <script src="assets/js/transacciones.js"></script>
    <script src="assets/js/visitantes_residentes.js"></script>-->
</body> 

</html>