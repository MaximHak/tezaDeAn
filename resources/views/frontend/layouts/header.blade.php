<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand logo_h" href="{{route('home')}}"><img src="{{asset('frontend/assets/img/logo.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
                        <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}"><a class="nav-link" href="{{route('home')}}">Pagina principală</a></li>
                        <li class="nav-item {{ (request()->is('products')) ? 'active' : '' }}"><a class="nav-link" href="{{route('products')}}">Magazin</a></li>
                        <li class="nav-item submenu dropdown  {{ (request()->is('login' || 'register')) ? 'active' : '' }}">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                               aria-expanded="false">Păgini</a>
                            <ul class="dropdown-menu">
                                @auth()
                                    <li class="nav-item"><a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Ieși din cont</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                @else


                                    <li class="nav-item "><a class="nav-link" href="{{route('login')}}">Contul meu</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{route('register')}}">Înregistrează-te</a></li>
                                @endauth
                                <li class="nav-item"><a class="nav-link" href="tracking-order.html">Tracking</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                    </ul>

                    <ul class="nav-shop">

                        <li class="nav-item"><button onclick="window.location.href='{{route('cart')}}'"><i class="ti-shopping-cart"></i><span class="nav-shop__circle">{{ count((array) session('cart')) }}</span></button> </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
