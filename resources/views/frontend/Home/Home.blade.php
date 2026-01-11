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
                SOLUSI LENGKAP KOMPRESOR INDUSTRI—<strong>UNIT BARU</strong>, <strong>SPARE PART</strong>,
                <strong>SERVIS</strong>, HINGGA <strong>RENTAL</strong> UNTUK BERBAGAI <strong>BRAND GLOBAL,</strong>
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

    <!-- ROW ATAS (KANAN) -->
    <div class="carousel">
        <div class="carousel-track track-right">

            <!-- ORIGINAL -->
            <div class="brand-card"><img src="{{ asset('Images/brands/boge.WEBP') }}" alt="BOGE"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/atlas copco.webp') }}" alt="Atlas Copco"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/chicago pneumatic.webp') }}" alt="Chicago Pneumatic"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/ingersoll rand.webp') }}" alt="Ingersoll Rand"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/kaeser.webp') }}" alt="Kaeser"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/sullair.webp') }}" alt="Sullair"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/gardner denver.webp') }}" alt="Gardner Denver"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/compair.webp') }}" alt="CompAir"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/elgi.webp') }}" alt="ELGi"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/quincy.webp') }}" alt="Quincy"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/fs curtis.webp') }}" alt="FS-Curtis"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/hertz.webp') }}" alt="Hertz"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/fusheng.webp') }}" alt="Fusheng"></div>

            <!-- DUPLIKASI -->
            <div class="brand-card"><img src="{{ asset('Images/brands/boge.WEBP') }}" alt="BOGE"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/atlas copco.webp') }}" alt="Atlas Copco"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/chicago pneumatic.webp') }}" alt="Chicago Pneumatic"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/ingersoll rand.webp') }}" alt="Ingersoll Rand"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/kaeser.webp') }}" alt="Kaeser"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/sullair.webp') }}" alt="Sullair"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/gardner denver.webp') }}" alt="Gardner Denver"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/compair.webp') }}" alt="CompAir"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/elgi.webp') }}" alt="ELGi"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/quincy.webp') }}" alt="Quincy"></div>

        </div>
    </div>

    <!-- ROW BAWAH (KIRI) -->
    <div class="carousel">
        <div class="carousel-track track-left">

            <!-- ORIGINAL -->
            <div class="brand-card"><img src="{{ asset('Images/brands/kobelco.webp') }}" alt="Kobelco"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/hitachi.webp') }}" alt="Hitachi"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/mitsui seiki.webp') }}" alt="Mitsui Seiki"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/ceccato.webp') }}" alt="Ceccato"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/mark.webp') }}" alt="Mark"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/abac.webp') }}" alt="ABAC"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/champion.webp') }}" alt="Champion"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/airman.webp') }}" alt="Airman"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/almig.webp') }}" alt="Almig"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/ekomak.webp') }}" alt="Ekomak"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/rotorcomp.webp') }}" alt="Rotorcomp"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/aerzen.webp') }}" alt="Aerzen"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/mattei.webp') }}" alt="Mattei"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/mann filter.webp') }}" alt="MANN Filter"></div>

            <!-- DUPLIKASI -->
            <div class="brand-card"><img src="{{ asset('Images/brands/kobelco.webp') }}" alt="Kobelco"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/hitachi.webp') }}" alt="Hitachi"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/mitsui seiki.webp') }}" alt="Mitsui Seiki"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/ceccato.webp') }}" alt="Ceccato"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/mark.webp') }}" alt="Mark"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/abac.webp') }}" alt="ABAC"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/champion.webp') }}" alt="Champion"></div>
            <div class="brand-card"><img src="{{ asset('Images/brands/airman.webp') }}" alt="Airman"></div>

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

        <div class="customer-logo" data-tooltip="Aneka Kakao" >
            <img src="{{ asset('Images/customers/aneka kakao.webp') }}" alt="Aneka Kakao">
        </div>

        <div class="customer-logo" data-tooltip="BEC">
            <img src="{{ asset('Images/customers/bec.webp') }}" alt="BEC">
        </div>

        <div class="customer-logo" data-tooltip="Dharma Nyata Press">
            <img src="{{ asset('Images/customers/dharma nyata press.webp') }}" alt="Dharma Nyata Press">
        </div>

        <div class="customer-logo" data-tooltip="DLM">
            <img src="{{ asset('Images/customers/dlm.webp') }}" alt="DLM">
        </div>

        <div class="customer-logo" data-tooltip="Dunia Kimia Jaya">
            <img src="{{ asset('Images/customers/dunia kimia jaya.webp') }}" alt="Dunia Kimia Jaya">
        </div>

        <div class="customer-logo" data-tooltip="Fairpack">
            <img src="{{ asset('Images/customers/fairpack.webp') }}" alt="Fairpack">
        </div>

        <div class="customer-logo" data-tooltip="Frankwins">
            <img src="{{ asset('Images/customers/frankwins.webp') }}" alt="Frankwins">
        </div>

        <div class="customer-logo" data-tooltip="Fujisei Plastik">
            <img src="{{ asset('Images/customers/fujisei plastik.webp') }}" alt="Fujisei Plastik">
        </div>

        <div class="customer-logo" data-tooltip="Indoceria">
            <img src="{{ asset('Images/customers/indoceria.webp') }}" alt="Indoceria">
        </div>

        <div class="customer-logo" data-tooltip="Indokemika Group">
            <img src="{{ asset('Images/customers/indokemika.webp') }}" alt="Indokemika Group">
        </div>

        <div class="customer-logo" data-tooltip="Indonesia Marina Shipyard">
            <img src="{{ asset('Images/customers/indonesia marina shipyard.webp') }}" alt="Indonesia Marina Shipyard">
        </div>

        <div class="customer-logo" data-tooltip="Japfa Aquaculture">
            <img src="{{ asset('Images/customers/japfa aquaculture.webp') }}" alt="Japfa Aquaculture">
        </div>

        <div class="customer-logo" data-tooltip="Japfa">
            <img src="{{ asset('Images/customers/japfa.webp') }}" alt="Japfa">
        </div>

        <div class="customer-logo" data-tooltip="Karyamas Plantation">
            <img src="{{ asset('Images/customers/karyamas.webp') }}" alt="Karyamas Plantation">
        </div>

        <div class="customer-logo" data-tooltip="Lesaffre">
            <img src="{{ asset('Images/customers/lesaffre.webp') }}" alt="Lesaffre">
        </div>

        <div class="customer-logo" data-tooltip="Narumi">
            <img src="{{ asset('Images/customers/narumi.webp') }}" alt="Narumi">
        </div>

        <div class="customer-logo" data-tooltip="Palma Serasih Group">
            <img src="{{ asset('Images/customers/palma serasih.webp') }}" alt="Palma Serasih Group">
        </div>

        <div class="customer-logo" data-tooltip="PDAM Surya Sembada">
            <img src="{{ asset('Images/customers/pdam surya sembada.webp') }}" alt="PDAM Surya Sembada">
        </div>

        <div class="customer-logo" data-tooltip="Perhutani">
            <img src="{{ asset('Images/customers/perhutani.webp') }}" alt="Perhutani">
        </div>

        <div class="customer-logo" data-tooltip="Saueressig">
            <img src="{{ asset('Images/customers/saueressig.webp') }}" alt="Saueressig">
        </div>

        <div class="customer-logo" data-tooltip="Sinar Wijaya Group">
            <img src="{{ asset('Images/customers/sinar wijaya.webp') }}" alt="Sinar Wijaya Group">
        </div>

        <div class="customer-logo" data-tooltip="Sinarmas">
            <img src="{{ asset('Images/customers/sinarmas.webp') }}" alt="Sinarmas">
        </div>

        <div class="customer-logo" data-tooltip="So Good Food">
            <img src="{{ asset('Images/customers/so good food.webp') }}" alt="So Good Food">
        </div>

        <div class="customer-logo" data-tooltip="Suparma">
            <img src="{{ asset('Images/customers/suparma.webp') }}" alt="Suparma">
        </div>

        <div class="customer-logo" data-tooltip="Suryasukses Abadi Prima">
            <img src="{{ asset('Images/customers/suryasukses abadi prima.webp') }}" alt="Suryasukses Abadi Prima">
        </div>

        <div class="customer-logo" data-tooltip="Temprina">
            <img src="{{ asset('Images/customers/temprina.webp') }}" alt="Temprina">
        </div>

        <div class="customer-logo" data-tooltip="Thai Union">
            <img src="{{ asset('Images/customers/thai union.webp') }}" alt="Thai Union">
        </div>

        <div class="customer-logo" data-tooltip="Trass Anugrah Makmur">
            <img src="{{ asset('Images/customers/trass anugrah makmur.webp') }}" alt="Trass Anugrah Makmur">
        </div>

        <div class="customer-logo" data-tooltip="Trisensa Ceramics">
            <img src="{{ asset('Images/customers/trisensa.webp') }}" alt="Trisensa Ceramics">
        </div>

        <div class="customer-logo" data-tooltip="Ustegra">
            <img src="{{ asset('Images/customers/ustegra.webp') }}" alt="Ustegra">
        </div>

    </div>
</section>


<section id="contact" class="contact-section reveal">

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
