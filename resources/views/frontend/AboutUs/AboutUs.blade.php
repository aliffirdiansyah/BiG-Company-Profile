@extends('frontend.layouts.app')

@section('title', 'Tentang Kami | BiG Airtech')

@section('content')
<section class="hero-katalog-section reveal">
    <img
        src="{{ asset('Images/hero-galeri.jpg') }}"
        alt="BiG Airtech Team"
        class="hero-galeri-bg"
    >

    <div class="hero-katalog-card-wrapper">
        <div class="hero-katalog-card text-center">
            <h2>TENTANG KAMI</h2>
            <strong>MITRA ANDAL AIR COMPRESSOR ANDA</strong>
        </div>
    </div>
</section>

<div class="container after-hero">

    <!-- ABOUT INTRO -->
    <section class="about-section reveal">
        <div class="about-content text-center">
            <p>
                <strong>BiG Airtech</strong> adalah perusahaan yang bergerak di bidang
                <em>air compressor</em>, spare parts, serta layanan servis dan maintenance.
                Kami berkomitmen memberikan solusi udara bertekanan yang
                <strong>andal, efisien, dan berkelanjutan</strong> untuk berbagai kebutuhan industri.
            </p>
        </div>
    </section>

    <!-- DOWNLOAD COMPANY PROFILE -->
    <section class="company-profile-section reveal text-center">
        <div class="company-profile-box">
            <i class="fas fa-file-pdf"></i>
            <h4>Company Profile</h4>
            <p>
                Unduh company profile BiG Airtech untuk informasi lengkap
                mengenai layanan, produk, dan kapabilitas perusahaan kami.
            </p>

           <a
    href="https://drive.google.com/file/d/1vQT83gT1hHhUmf-4bld-ve9QjCXOGd8w/view"
    class="company-profile-btn"
    target="_blank"
    download
>
    Download Company Profile
</a>

        </div>
    </section>

</div>
@endsection
