@extends('themes/lte3/layout')

@section('title')Dashboard @endsection

@section('breadcrumb')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">OK COMPUTER</li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">Concurso Navideño 2021</h3>
                </div>
                <div class="card-body">
                    <img class="img-fluid" src="{{ asset('images/evento.jpg') }}" alt="Evento_Navidad">
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Usuarios registrados</span>
                            <span class="info-box-number">{{ $user }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-success"><i class="far fa-star"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Concursantes</span>
                            <span class="info-box-number">{{ $competitor }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="info-box">
                        <span class="info-box-icon bg-warning"><i class="far fa-flag"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Votaciones realizadas</span>
                            <span class="info-box-number">{{ $vote }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                </div>
            </div>
            @if (Auth::user()->id == 99 || Auth::user()->id == 53 || Auth::user()->id == 72)
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-widget widget-user-2">
                            <div class="widget-user-header bg-danger">
                                <h3 class="widget-user-username">Concurso Navideño 2021</h3>
                                <h5 class="widget-user-desc">Ranking de ganadores</h5>
                            </div>
                            <div class="card-footer p-0">
                                <ul class="nav flex-column base-score">
                                    @if ($count > 0)
                                        @foreach ($list as $item)
                                            <li class="nav-item">
                                                <label class="nav-link">{{ $item->competitor->title }} <span class="float-right badge bg-primary">{{ $item->score }}</label>
                                            </li>
                                        @endforeach
                                    @else
                                        <li class="nav-item"><label class="nav-link">Aún no se registraron votaciones</label></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/util.js') }}"></script>
    <script>
        let contador = 0;
        $(function () {
            $('.form-check-input:checkbox').change(function() {
                if (this.checked) {
                    contador += 1;
                    if (contador > 3) {
                        alert('solo puedes 3');
                        $(this).prop('checked', false);
                        contador -= 1;
                    }
                } else {
                    contador -= 1;
                }
                console.log(contador);
            });
        });
    </script>
@endsection