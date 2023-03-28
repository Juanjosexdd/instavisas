@extends('adminlte::page')

@section('title', 'Inicio InstaVisa')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <a href="{{ route('clientes.index') }}">
                    <div class="info-box elevation-4">
                        <span class="info-box-icon bg-blue"><i class="fas fa-fw fa-user-shield"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Clientes</span>
                            <span class="info-box-number">{{ App\Models\Cliente::count() }}</span>
                        </div>

                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <a href="{{ route('admin.roles.index') }}">
                    <div class="info-box elevation-4">
                        <span class="info-box-icon bg-success"><i class="fas fa-code-branch"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Roles</span>
                            <span class="info-box-number">{{ Spatie\Permission\Models\Role::count() }}</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <a href="{{ route('admin.logs.index') }}">

                    <div class="info-box elevation-4">
                        <span class="info-box-icon bg-warning"><i class="fas fa-clipboard-list text-white"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Registros</span>
                            <span class="info-box-number">{{ App\Models\Log\LogSistema::count() }}</span>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 col-sm-6 col-12">
                <a href="{{ route('admin.users.index') }}">
                    <div class="info-box elevation-4">
                        <span class="info-box-icon bg-navy"><i class="fas fa-fw fa-users-cog"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Usuarios</span>
                            <span class="info-box-number">{{ App\Models\User::count() }}</span>
                        </div>
                    </div>
                </a>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card elevation-4">

                    <div class="card-body" bis_skin_checked="1">
                        <div class="chart" bis_skin_checked="1">
                            <div class="chartjs-size-monitor" bis_skin_checked="1">
                                <div class="chartjs-size-monitor-expand" bis_skin_checked="1">
                                    <div class="" bis_skin_checked="1"></div>
                                </div>
                                <div class="chartjs-size-monitor-shrink" bis_skin_checked="1">
                                    <div class="" bis_skin_checked="1"></div>
                                </div>
                            </div>
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop




@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src=" {{ asset('vendor/session-timeout.js') }}  "></script>
    <script src=" {{ asset('vendor/time.js') }}  "></script>

    <script src="session-timeout.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Renovación', 'Seguimiento', 'Adelanto', 'Prioridad', 'Estudiantes', 'Canada',
                    'Cita Pasaporte'
                ],
                datasets: [{
                    label: "{{ App\Models\Cliente::count() }} clientes",
                    data: [
                        "{{ App\Models\Cliente::where('tipotramite_id', 2)->count() }}",
                        "{{ App\Models\Cliente::where('tipotramite_id', 1)->count() }}",
                        "{{ App\Models\Cliente::where('tipotramite_id', 3)->count() }}",
                        "{{ App\Models\Cliente::where('tipotramite_id', 4)->count() }}",
                        "{{ App\Models\Cliente::where('tipotramite_id', 5)->count() }}",
                        "{{ App\Models\Cliente::where('tipotramite_id', 6)->count() }}",
                        "{{ App\Models\Cliente::where('tipotramite_id', 7)->count() }}",
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(201, 203, 207, 0.2)'
                    ],
                    borderColor: [
                        'rgb(255, 99, 132)',
                        'rgb(255, 159, 64)',
                        'rgb(255, 205, 86)',
                        'rgb(75, 192, 192)',
                        'rgb(54, 162, 235)',
                        'rgb(153, 102, 255)',
                        'rgb(201, 203, 207)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

@stop



@section('css')
    <style>
        .card-custom {
            overflow: hidden;
            min-height: 300px;
            box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
        }

        .card-custom-img {
            height: 50px;
            min-height: 10px;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            border-color: inherit;
        }

        /* First border-left-width setting is a fallback */
        .card-custom-img::after {
            position: absolute;
            content: '';
            top: 161px;
            left: 0;
            width: 0;
            height: 0;
            border-style: solid;
            border-top-width: 40px;
            border-right-width: 0;
            border-bottom-width: 0;
            border-left-width: 545px;
            border-left-width: calc(575px - 5vw);
            border-top-color: transparent;
            border-right-color: transparent;
            border-bottom-color: transparent;
            border-left-color: inherit;
        }

        .card-custom-avatar img {
            border-radius: 50%;
            box-shadow: 0 0 15px rgba(10, 10, 10, 0.3);
            position: absolute;
            top: 10px;
            left: 1.25rem;
            width: 50px;
            height: 50px;
        }
    </style>
@stop
