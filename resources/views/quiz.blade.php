@extends('themes/lte3/layout')

@section('title')Concurso Navideño @endsection

@section('breadcrumb')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Concurso Navideño 2021</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">OK COMPUTER</li>
                    <li class="breadcrumb-item active">Concurso Navideño</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
    @if ($vote > 0)
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Gracias por participar</h3>
            </div>
            <div class="card-body">Ud. ya realizó una votación, de no ser así comuníquese con los organizadores del concurso</div>
        </div>
    @else
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Lista de opciones (Tu eres el jurado, escoja los 3 videos que más te gustaron)</h3>
                </div>
                <div class="card-body">
                    <form id="formulario" method="POST">
                        @csrf
                        <div class="form-row">
                            @foreach ($competitor as $item)
                            <div class="col-md-6 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="options[]" id="check-{{ $item->id }}" value="{{ $item->id }}">
                                    <label class="form-check-label" for="check-{{ $item->id }}">{{ $item->title }}</label>
                                </div>
                                <small style="margin-left: 20px;">Link del video: <a href="{{ $item->link }}" target="_blank">{{ $item->link }}</a></small>
                            </div>
                            @endforeach
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 offset-3">
                                <button type="submit" class="btn btn-sm btn-block btn-success" id="btn">Grabar votación</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif
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
                        notify("warning", "Solo puede votar por 3 opciones");
                        $(this).prop('checked', false);
                        contador -= 1;
                    }
                } else {
                    contador -= 1;
                }
            });

            $("#formulario").on("submit", function() {
                if (contador == 3) {
                    if (contador <= 3) {
                        var data = $(this).serializeArray();
                        data.push({_token: csrf_token});
                        data.push({_method: 'POST'});

                        $.ajax({
                            type: "POST",
                            url : route("save-vote"),
                            data: data,
                            dataType: "JSON",
                            beforeSend: function(){
                                $(document.body).append('<span class="loading"><div></div></span>');
                            },
                            success: function (response) {
                                $('.loading').remove();
                                $("#btn").attr('disabled', true);
                                if (response.response == 'ok') {
                                    notify(response.alert, response.message);
                                    var routeLink = route('home');
                                    setTimeout(function(){
                                        window.location.href = routeLink
                                    }, 1000);
                                } else {
                                    notify(response.alert, response.message);
                                }
                            }
                        }).fail( function(jqXHR, textStatus, errorThrown) {
                            console.log(jqXHR);
                            console.log(textStatus);
                            console.log(errorThrown);
                        });
                        return false;
                    } else {
                        notify("error", "No puede guardar su votación por que excedió de opciones seleccionadas");
                        return false;
                    }
                } else {
                    notify("info", "Debe seleccionar las 3 opciones");
                    return false;
                }
            });
        });
    </script>
@endsection