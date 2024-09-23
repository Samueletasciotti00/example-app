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
                <li class="nav-item">
                    <a href="#">
                        {{ Auth::user()->name }}
                    </a>
                </li>

                @endguest
            </ul>

        </div>
    </div>
</header>