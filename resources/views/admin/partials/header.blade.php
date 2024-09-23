<header>
    <div class="container-fluid bg-dark d-flex justify-content-between p-3 align-items-center">

        <!-- Logo -->
        <div class="logo d-flex justify-content-around">
            <!-- <img src="https://thumbs.dreamstime.com/b/libro-macchina-104465645.jpg" alt=""> -->
            <a href="{{ route('home') }}">Vai al Sito</a>
        </div>

        <!-- USER -->
        <div class="user">
            <ul class="navbar">
                @guest
                <li class="nav-item"><a href="{{ route('login') }}">Login</a></li>
                <li class="nav-item"><a href="{{ route('register') }}">Registrati</a></li>

                @else

                <!-- Menù drop down login -->
                <li class="nav-item dropdown">

                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                        <!-- Print Dell'user name al login di esso  -->
                        {{ Auth::user()->name }}
                    </a>

                    <!-- Voci del drop-down menù -->
                    <div class="dropdown-menu dropdown-menu-right d-flex flex-column" aria-labelledby="navbarDropdown">
                        <a class="dropdown-menu-item text-danger" href="{{ route('admin.home') }}">Admin</a>
                        <a class="dropdown-menu-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                    </div>

                    <!-- Form di Log-out -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

                @endguest
            </ul>

        </div>
    </div>
</header>