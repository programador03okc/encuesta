<nav class="main-header navbar navbar-expand navbar-light navbar-white">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown user-menu">
            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                <span class="hidden-xs">Usuario: {{ Auth::user()->name_short }}</span>
            </a>
            <ul class="dropdown-menu">
                <li class="user-header">
                    <p>{{ Auth::user()->name_short }}</p>
                    <medium>{{ Auth::user()->user }}</medium><br>
                </li>
                <li class="user-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <a href="{{ route('logout') }}" class="btn btn-danger btn-xs btn-block btn-flat">Cerrar sesion</a>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</nav>