@extends('themes/lte3/layout_login')

@section('content')
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">INICIAR SESION</p>
            <form action="{{ route('login') }}" method="post" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="input-group input-group-sm mb-3 has-feedback">
                    <input class="form-control @error('user') is-invalid @enderror"
                        type="email" name="user" value="{{ old('user') }}"
                        placeholder="Ingrese su correo corporativo" autofocus disabled>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                    @error('user')
                        <span class="error invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="input-group input-group-sm mb-3 has-feedback d-none">
                    <input class="form-control @error('password') is-invalid @enderror"
                        type="password" name="password"
                        placeholder="Ingrese su contraseña" value="@encuesta123">
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                    @error('password')
                        <span class="error invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-danger btn-block btn-flat" disabled>Ingresar</button>
                </div>
            </form>
            <br>
            <div class="login-footer text-center">
                <code class="text-danger">Encuesta Navideña OKC <br> 2021</code>
                <br>
                <code class="text-primary" id="timer"></code>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function () {
            setInterval(timer(), 100);
        });

        function timer() {
            $.ajax({
                type: "POST",
                url : route("initial-timer"),
                data: {
                    _token: csrf_token_login,
                    _method: "POST"
                },
                dataType: "JSON",
                success: function (response) {
                    $("#timer").text("El evento acabó " + response);
                }
            }).fail( function(jqXHR, textStatus, errorThrown) {
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            });
            return false;
        }
    </script>
@endsection