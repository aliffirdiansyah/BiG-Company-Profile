@extends('frontend.layouts.app')

@section('title', 'Home | BiG Airtech')

@section('content')
<section class="hero-section reveal">
    <img
        src="{{ asset('Images/Hero.jpg') }}"
        alt="BiG Airtech Technician"
        class="hero-bg"
    >

    <div class="hero-card-wrapper">
        <div class="hero-card text-center">
            <h2>PT BERDAYA INDAH GUNA AIRTECH</h2>
            <p>
                SOLUSI LENGKAP KOMPRESOR INDUSTRI—UNIT BARU, SPARE PART,
                SERVIS, HINGGA RENTAL UNTUK BERBAGAI <strong>BRAND GLOBAL</strong>,
                DIDUKUNG <strong>TEKNISI BERPENGALAMAN</strong> DAN
                <strong>LAYANAN NASIONAL</strong>.
            </p>
        </div>
    </div>
</section>

<div class="container">
    <section class="services after-hero reveal">
    <h1>LAYANAN KAMI</h1>

    <!-- Row 1 : 3 item -->
    <div class="service-row">
        <div class="service-card">
            <div class="icon"><i class="fa-solid fa-cart-shopping"></i></div>
            <p>PENJUALAN<br>AIR COMPRESSORS,<br>DRYERS & CHILLERS</p>
        </div>

        <div class="service-card">
            <div class="icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
            <p>PENJUALAN<br>SPARE PART</p>
        </div>

        <div class="service-card">
            <div class="icon"><i class="fa-regular fa-clock"></i></div>
            <p>JASA RENTAL / SEWA<br>KOMPRESOR SCREW</p>
        </div>
    </div>

    <!-- Row 2 : 2 item -->
    <div class="service-row">
        <div class="service-card">
            <div class="icon"><i class="fa-solid fa-wrench"></i></div>
            <p>MAINTENANCE, REPAIR<br>& OVERHAUL</p>
        </div>

        <div class="service-card">
            <div class="icon"><i class="fa-solid fa-user-gear"></i></div>
            <p>INSTALASI</p>
        </div>
    </div>
</section>

<section class="brand-carousel after-hero reveal">
    <h1>BRAND YANG KAMI TANGANI</h1>

    <!-- ROW ATAS -->
    <div class="carousel">
        <div class="carousel-track track-right">
            <div class="brand-card"><img src="{{ asset('Images/Brand 1.png') }}" alt=""></div>
            <div class="brand-card"><img src="{{ asset('Images/Brand 2.png') }}" alt=""></div>
            <div class="brand-card"><img src="{{ asset('Images/Brand 3.png') }}" alt=""></div>
            <div class="brand-card"><img src="{{ asset('Images/Brand 4.png') }}" alt=""></div>
            <div class="brand-card"><img src="{{ asset('Images/Brand 5.png') }}" alt=""></div>
            <!-- DUPLIKASI -->
            <div class="brand-card"><img src="{{ asset('Images/Brand 1.png') }}" alt=""></div>
            <div class="brand-card"><img src="{{ asset('Images/Brand 2.png') }}" alt=""></div>
            <div class="brand-card"><img src="{{ asset('Images/Brand 3.png') }}" alt=""></div>
            <div class="brand-card"><img src="{{ asset('Images/Brand 4.png') }}" alt=""></div>
            <div class="brand-card"><img src="{{ asset('Images/Brand 5.png') }}" alt=""></div>
        </div>
    </div>

    <!-- ROW BAWAH -->
    <div class="carousel">
    <div class="carousel-track track-left">
        <div class="brand-card">
            <img
                src="{{ asset('Images/Brand 2.png') }}"
                alt="BiG Airtech Technician"
                class="hero-bg"
            >
        </div>

        <div class="brand-card">
            <img src="{{ asset('Images/Brand 2.png') }}" alt="Brand B">
        </div>

        <div class="brand-card">
            <img src="{{ asset('Images/Brand 2.png') }}" alt="Brand C">
        </div>

        <div class="brand-card">
            <img src="{{ asset('Images/Brand 2.png') }}" alt="Brand D">
        </div>

        <div class="brand-card">
            <img src="{{ asset('Images/Brand 2.png') }}" alt="Brand E">
        </div>

        <!-- DUPLIKASI (untuk infinite scroll) -->
        <div class="brand-card">
            <img src="{{ asset('Images/Brand 2.png') }}" alt="BiG Airtech Technician">
        </div>

        <div class="brand-card">
            <img src="{{ asset('Images/Brand 2.png') }}" alt="Brand B">
        </div>

        <div class="brand-card">
            <img src="{{ asset('Images/Brand 2.png') }}" alt="Brand C">
        </div>

        <div class="brand-card">
            <img src="{{ asset('Images/Brand 2.png') }}" alt="Brand D">
        </div>

        <div class="brand-card">
            <img src="{{ asset('Images/Brand 2.png') }}" alt="Brand E">
        </div>
    </div>
</div>
</section>

<section class="why-choose-us reveal">
    <div class="container">
        <div class="row align-items-center">

            <!-- KIRI -->
            <div class="col-lg-6">
                <h2 class="section-title">
                    KENAPA MEMILIH KAMI ?
                </h2>
                <p class="section-desc">
                    ✔️ Tim teknisi kompresor yang kompeten & berpengalaman <br>
                    ✔️ Suku cadang kompresor yang lengkap dan cepat tersedia <br>
                    ✔️ Bergaransi <br>
                    ✔️ Dukungan 24 jam untuk industri kritis <br>
                </p>
            </div>

            <!-- KANAN -->
            <div class="col-lg-6">
                <div class="image-wrapper">
                    <img
                        src="{{ asset('Images/choose.svg') }}"
                        alt="BiG Airtech Professional Service"
                    >
                </div>
            </div>

        </div>
    </div>
</section>

</div>

<section class="coverage-section reveal">
    <div class="coverage-inner">
    <h2>JANGKAUAN LAYANAN KAMI</h2>

    <div class="coverage-wrapper">
        <div class="coverage-card">
            <img
                        src="{{ asset('Images/jabodetabek.png') }}"
                        alt="BiG Airtech Professional Service"
                    >
            <h4>JABODETABEK</h4>
            <p>Jakarta, Bogor, Depok,<br>Tangerang & Bekasi</p>
        </div>

        <div class="coverage-card">
            <img
                        src="{{ asset('Images/jawa tengah.png') }}"
                        alt="BiG Airtech Professional Service"
                    >
            <h4>JAWA TENGAH</h4>
            <p>Semarang, Solo,<br>Yogyakarta, Kendal & Sekitarnya</p>
        </div>

        <div class="coverage-card">
             <img
                        src="{{ asset('Images/jawa timur.png') }}"
                        alt="BiG Airtech Professional Service"
                    >
            <h4>JAWA TIMUR</h4>
            <p>Surabaya, Sidoarjo,<br>Mojokerto, Pasuruan & Sekitarnya</p>
        </div>

        <div class="coverage-card">
             <img
                        src="{{ asset('Images/kalimantan.png') }}"
                        alt="BiG Airtech Professional Service"
                    >
            <h4>KALIMANTAN</h4>
            <p>Samarinda, Balikpapan<br>& Banjarmasin</p>
        </div>

        <div class="coverage-card">
             <img
                        src="{{ asset('Images/sumatera.png') }}"
                        alt="BiG Airtech Professional Service"
                    >
            <h4>SUMATERA</h4>
            <p>Medan, Pekanbaru,<br>Palembang, Lampung, Batam</p>
        </div>

        <div class="coverage-card">
             <img
                        src="{{ asset('Images/sulawesi.png') }}"
                        alt="BiG Airtech Professional Service"
                    >
            <h4>SULAWESI</h4>
            <p>Makassar, Kendari,<br>Manado</p>
        </div>

        <div class="coverage-card">
             <img
                        src="{{ asset('Images/ntb.png') }}"
                        alt="BiG Airtech Professional Service"
                    >
            <h4>NTB</h4>
            <p>Mataram</p>
        </div>
    </div>
    </div>
</section>

<section class="customers-section reveal">
    <h1>PELANGGAN KAMI</h1>

    <div class="customers-wrapper">
        <div class="customer-logo">
            <img src="{{ asset('Images/customer 1.png') }}" alt="Customer 1">
        </div>
        <div class="customer-logo">
            <img src="{{ asset('Images/customer2.png') }}" alt="Customer 2">
        </div>
        <div class="customer-logo">
            <img src="{{ asset('Images/customer3.png') }}" alt="Customer 3">
        </div>
        <div class="customer-logo">
            <img src="{{ asset('Images/customer4.png') }}" alt="Customer 4">
        </div>
        <div class="customer-logo">
            <img src="{{ asset('Images/customer5.png') }}" alt="Customer 5">
        </div>
    </div>
</section>

<section class="contact-section">

    <!-- TITLE -->
    <h1 class="section-title">HUBUNGI KAMI</h1>

    <!-- HEAD OFFICE -->
    <div class="head-office">
        <h2>Head Office</h2>
        <p class="contact-info">
            ☎ +62 856 4343 2084 <br> ✉ sales@bigairtech.com
        </p>
        <p class="address">
            Gedung Perkantoran SIER, Office Center Lt.2<br>
            Jl. Raya Rungkut Industri No.10,<br>
            Kota Surabaya
        </p>
    </div>

    <!-- MAP -->
    <div class="map-wrapper">
        <iframe
            src="https://maps.google.com/maps?width=600&height=400&hl=en&q=Gedung%20Perkantoran%20SIER%2C%20Office%20Center%20Lt.2%C2%A0Jl.Raya%20Rungkut%20Industri%20No.10%2C%20Kota%20Surabaya&t=&z=15&ie=UTF8&iwloc=B&output=embed"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>

    <!-- REPRESENTATIVE -->
    <h2 class="sub-title">Representative</h2>

    <div class="rep-wrapper">
        <div class="rep-card">
            <h4>JABODETABEK</h4>
            <div class="divider"></div>
            <p>☎ +62 856 4643 4767<br>✉ sales@bigairtech.com</p>
            <p>
                Bukit Tiara Blok I-5 No. 29, Cikupa,<br>
                Kabupaten Tangerang, Provinsi Banten,<br>
                Indonesia
            </p>
        </div>

        <div class="rep-card">
            <h4>JAWA TENGAH</h4>
            <div class="divider"></div>
            <p>☎ +62 856 4343 2084<br>✉ sales@bigairtech.com</p>
            <p>
                Jl. Kutoarjo – Ketawang KM. 06,<br>
                Sangubanyu, Grabag,<br>
                Purworejo, Jawa Tengah
            </p>
        </div>
    </div>

    <!-- WORKSHOP -->
    <h2 class="sub-title">Workshop</h2>

    <div class="rep-wrapper">
        <div class="rep-card">
            <h4>SURABAYA</h4>
            <div class="divider"></div>
            <p>
                Tandes Central Business District Blok TK-1 No. 3,<br>
                Jl. Raya Klakahrejo, <br>
                Benowo, <br>
                Kota Surabaya, Jawa Timur
            </p>
        </div>
    </div>

</section>


@endsection
