<?php
/**
 * Created by PhpStorm.
 * User: Fernando
 * Date: 10/03/2025
 */
$sessionusuario = session('sessionusuario');
$sessiontipo = session('sessiontipo');
$sessionid = session('sessionid');

?>


<!DOCTYPE html>
<html data-bs-theme="light" lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Fraccionamiento UPPue</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome-all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    @livewireStyles
</head>

<body id="page-top" class="sidebar-toggled">
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-secondary p-0 navbar-dark toggled">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>UPPue</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="{{route('dashboard')}}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('residentesAdmin')}}"><i class="fas fa-users"></i><span>Residentes</span></a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-donate"></i><span>Transacciones</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contratosAdmin')}}"><i class="fas fa-book"></i><span>Contratos</span></a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-exclamation-triangle"></i><span>Incidencias</span></a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-calendar-alt"></i><span>Eventos</span></a></li>
                    <li class="nav-item"><a class="nav-link" href=""><i class="fas fa-walking"></i><span>Visitantes</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('login')}}"><i class="fas fa-sign-out-alt"></i><span>Cerrar sesión</span></a></li>
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
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small"><?php echo $sessionusuario ?></span><i class="far fa-user d-lg-none"></i></a>
                                    
                                <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="{{route('dashboard')}}"><i class="fas fa-tachometer-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Dashboard</a><a class="dropdown-item" href="{{route('residentesAdmin')}}"><i class="fas fa-users fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Residentes</a><a class="dropdown-item" href=""><i class="fas fa-donate fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Transacciones</a><a class="dropdown-item" href="{{route('contratosAdmin')}}"><i class="fas fa-book fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Contratos</a><a class="dropdown-item" href=""><i class="fas fa-exclamation-triangle fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Incidencias</a><a class="dropdown-item" href=""><i class="fas fa-calendar-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Eventos</a><a class="dropdown-item" href=""><i class="fas fa-walking fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Visitantes</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="{{route('login')}}"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Cerrar sesión</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="container-fluid">                    
                    @yield('content')
                </div>                
            @include('footer')
        </div>
    </div>

    @yield('modals')
    @include('scripts')

</body> 
</html>