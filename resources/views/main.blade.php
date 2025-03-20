


<!DOCTYPE html>
<html data-bs-theme="light" lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome-all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body id="page-top" class="sidebar-toggled">
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-secondary p-0 navbar-dark toggled">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>FRACC</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="/index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/residentes.html"><i class="fas fa-users"></i><span>Residentes</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/transacciones.html"><i class="fas fa-donate"></i><span>Transacciones</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/incidencias.html"><i class="fas fa-exclamation-triangle"></i><span>Incidencias</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/eventos_admin.html"><i class="fas fa-calendar-alt"></i><span>Eventos</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/visitantes_admin.html"><i class="fas fa-walking"></i><span>Visitantes</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="/login.html"><i class="fas fa-sign-out-alt"></i><span>Cerrar sesión</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand bg-white shadow mb-4 topbar">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><i class="far fa-user d-lg-none"></i></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="index.html"><i class="fas fa-tachometer-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Dashboard</a><a class="dropdown-item" href="residentes.html"><i class="fas fa-users fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Residentes</a><a class="dropdown-item" href="transacciones.html"><i class="fas fa-donate fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Transacciones</a><a class="dropdown-item" href="incidencias.html"><i class="fas fa-exclamation-triangle fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Incidencias</a><a class="dropdown-item" href="eventos_admin.html"><i class="fas fa-calendar-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Eventos</a><a class="dropdown-item" href="visitantes_admin.html"><i class="fas fa-walking fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Visitantes</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Cerrar sesión</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>                    
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
    @yield('scripts')
</body> 
</html>