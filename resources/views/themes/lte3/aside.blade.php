<aside class="main-sidebar elevation-2 sidebar-light-danger">
    <a href="{{ route('home') }}" class="brand-link navbar-white">
        <img src="{{ asset('images/okc_square.png') }}" alt="logo_okc" class="brand-image" style="opacity: .8">
        <span class="brand-text font-weight-bold">OK COMPUTER</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">MENU PRINCIPAL</li>
                <li class="nav-item">
                    <a href="{{ route('quiz') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i> <p>Concurso Navideño</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>