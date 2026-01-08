<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
    <img
        src="{{ asset('Images/logo.png') }}"
        alt="BiG Airtech – Air Compressor Specialist"
        height="36"
        loading="lazy"
    >
</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Katalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Spare Parts & Service</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">By Brand</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Perusahaan</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
