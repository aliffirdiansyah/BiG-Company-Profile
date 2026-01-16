<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
    <div class="container">

       <!-- LOGO -->
<a class="navbar-brand logo-wrap" href="{{ url('/') }}">
    <img
        src="{{ asset('Images/Logo.png') }}"
        alt="BiG Airtech Logo"
        class="logo-icon"
        loading="lazy"
    >
</a>


        <!-- TOGGLER -->
        <button class="navbar-toggler custom-toggler collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarMain"
        aria-label="Toggle navigation">
    <span></span>
    <span></span>
    <span></span>
</button>


        <!-- NAV -->
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">

                <li class="nav-item">
                    <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Route::is('katalog') ? 'active' : '' }}" href="{{ route('katalog') }}">
                        Katalog
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Route::is('galeri') ? 'active' : '' }}" href="{{ route('galeri') }}">
                        Galeri
                    </a>
                </li>

                <!-- DROPDOWN PRODUK -->
                <li class="nav-item dropdown">
                    <a class="nav-link d-flex align-items-center gap-1"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Produk <i class="fas fa-chevron-down arrow"></i>
                    </a>

                    <ul class="dropdown-menu shadow-sm border-0">
                        <li><a class="dropdown-item {{ Route::is('product1') ? 'active' : '' }}" href="{{ route('product1') }}">
                        Chicago Pneumatic Air Compressor
                    </a></li>
                        <li><a class="dropdown-item {{ Route::is('product2') ? 'active' : '' }}" href="{{ route('product2') }}">
                        BiG Air Screw Compressor
                    </a></li>
                        <li><a class="dropdown-item {{ Route::is('product3') ? 'active' : '' }}" href="{{ route('product3') }}">
                        BOGE Air Compressor
                    </a></li>
                        <li><a class="dropdown-item {{ Route::is('product4') ? 'active' : '' }}" href="{{ route('product4') }}">
                        Dryer, Filter & Receiver Tank
                    </a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link d-flex align-items-center gap-1"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Spare Parts & Service <i class="fas fa-chevron-down arrow"></i>
                    </a>

                    <ul class="dropdown-menu shadow-sm border-0">
                        <li><a class="dropdown-item {{ Route::is('accessories') ? 'active' : '' }}" href="{{ route('accessories') }}">
                        Spare Parts Screw Compressor
                    </a></li>
                    <li><a class="dropdown-item {{ Route::is('perbaikan') ? 'active' : '' }}" href="{{ route('perbaikan') }}">
                        Layanan Servis & Perawatan Screw Compressor
                    </a></li>
                    <li><a class="dropdown-item {{ Route::is('chiller') ? 'active' : '' }}" href="{{ route('chiller') }}">
                        Layanan Servis & Perawatan Air & Water Cooled Chiller
                    </a></li>
                    <li><a class="dropdown-item {{ Route::is('sewa') ? 'active' : '' }}" href="{{ route('sewa') }}">
                        Sewa / Rental Kompressor
                    </a></li>
                           <li><a class="dropdown-item {{ Route::is('instalasi') ? 'active' : '' }}" href="{{ route('instalasi') }}">
                        Instalasi Sistem Udara Terkompresi
                    </a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ Route::is('bybrand') ? 'active' : '' }}" href="{{ route('bybrand') }}">
                        By Brand
                    </a>
                </li>

              <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#contact">
                        Hubungi Kami
                    </a>
                </li>



               <li class="nav-item dropdown">
                    <a class="nav-link d-flex align-items-center gap-1"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Perusahaan <i class="fas fa-chevron-down arrow"></i>
                    </a>

                    <ul class="dropdown-menu shadow-sm border-0">
                        <li><a class="dropdown-item {{ Route::is('aboutUs') ? 'active' : '' }}" href="{{ route('aboutUs') }}">
                        Tentang Kami
                    </a></li>
                          <li><a class="dropdown-item {{ Route::is('artikel') ? 'active' : '' }}" href="{{ route('artikel') }}">
                        Blog & Artikel
                    </a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
