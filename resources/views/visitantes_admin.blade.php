@extends('main')

@section('content')

<div class="d-flex justify-content-between align-items-center row ms-0 ps-0 me-0 mb-5">
    <h3 class="text-dark col-xl-3">Visitantes de fracc.</h3>
</div>
<div class="card shadow">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Visitante</th>
                        <th>Información de contacto</th>
                        <th>Residente a quien visita</th>
                        <th>Horario de acceso</th>
                        <th>Fecha de registro</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de fila 1 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-user me-2 text-muted"></i>
                                Carlos Rodríguez
                            </div>
                        </td>
                        <td>
                            <i class="fas fa-phone me-2 text-muted"></i>
                            555-123-4567
                        </td>
                        <td>
                            <span class="badge bg-primary">
                                <i class="fas fa-home me-1"></i>
                                Juan Pérez (Casa #45)
                            </span>
                        </td>
                        <td>
                            <div class="text-nowrap">
                                <span class="text-success">Entrada:</span> 2024-03-15 15:30<br>
                                <span class="text-danger">Salida:</span> 2024-03-15 18:45
                            </div>
                        </td>

                        <td>2024-03-15 10:00</td>
                    </tr>

                    <!-- Ejemplo de fila 2 -->
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-user me-2 text-muted"></i>
                                Ana Martínez
                            </div>
                        </td>
                        <td>
                            <i class="fas fa-envelope me-2 text-muted"></i>
                            ana.mtz@mail.com
                        </td>
                        <td>
                            <span class="badge bg-warning text-dark">
                                <i class="fas fa-building me-1"></i>
                                María Gómez (Dpto. #12)
                            </span>
                        </td>
                        <td>
                            <div class="text-nowrap">
                                <span class="text-success">Entrada:</span> 2024-03-16 09:15<br>
                                <span class="text-muted">(En instalaciones)</span>
                            </div>
                        </td>

                        <td>2024-03-16 08:45</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('modals')

@endsection



@push('scripts')


@endpush