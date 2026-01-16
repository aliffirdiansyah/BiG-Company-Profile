@extends('frontend.layouts.app')

@section('title', 'Tentang Kami | BiG Airtech')

@section('content')

<section class="hero-section reveal">
    <img
        src="{{ asset('Images/Hero.jpg') }}"
        alt="BiG Airtech Technician"
        class="hero-bg"
    >

    <div class="hero-card-wrapper">
        <div class="hero-card text-center">
            <h2>TENTANG KAMI

            </h2>
            <p>
                Solusi Kompresor Angin Industri <strong>Terpercaya & Lengkap</strong> di Indonesia.
            </p>
        </div>
    </div>
</section>

<div class="container after-hero">

    <!-- ABOUT INTRO -->
    <section class="about-zigzag reveal">
    <div class="container">
        <div class="zigzag-row">
            <div class="zigzag-image">
                <img src="{{ asset('Images/About/Tentang Kami.jpg') }}"
                     alt="Industrial Air Compressor">
            </div>
            <div class="zigzag-content">
                <h3>Tentang BiG Airtech</h3>
                <p>
                    <strong>PT. Berdaya Indah Guna Airtech (BiG Airtech)</strong> merupakan
                    penyedia solusi sistem kompresor angin industri yang melayani berbagai
                    sektor industri di seluruh Indonesia.
                </p>
                <p>
                    Kami hadir sebagai mitra profesional dengan layanan teknis berstandar
                    tinggi, produk berkualitas, serta respons cepat untuk menjaga kelancaran
                    operasional industri Anda.
                </p>
            </div>
        </div>
    </div>
</section>


    <!-- WHAT WE DO -->
   <section class="about-zigzag alt reveal">
    <div class="container">
        <div class="zigzag-row">
            <div class="zigzag-content">
                <h3>Apa yang Kami Kerjakan</h3>
                <ul class="about-list">
                    <li>Penjualan unit kompresor angin industri</li>
                    <li>Servis, perawatan berkala & overhaul</li>
                    <li>Penyediaan spare part & aksesoris</li>
                    <li>Instalasi sistem udara terkompresi</li>
                    <li>Rental / sewa kompresor screw</li>
                </ul>
            </div>
            <div class="zigzag-image">
                <img src="{{ asset('Images/About/kegiatan.jpg') }}"
                     alt="Compressor Service Technician">
            </div>
        </div>
    </div>
</section>


    <!-- WHY CHOOSE US -->
    <section class="why-us-section reveal">
    <div class="container">
        <h3 class="section-title text-center">Mengapa Memilih BiG Airtech</h3>

        <div class="why-grid">
            <div class="why-card">Teknisi Berpengalaman & Profesional</div>
            <div class="why-card">Spare Part Lengkap & Bergaransi</div>
            <div class="why-card">Standar Teknis Industri</div>
            <div class="why-card">Respons Cepat & Dukungan 24 Jam</div>
            <div class="why-card">Melayani Berbagai Merek Kompresor</div>
        </div>
    </div>
</section>


</div>

<!-- VISI & MISI -->
<section class="vision-mission-section reveal">
    <div class="container">
        <div class="vision-mission-wrapper">

            <div class="vm-card">
                <h3>Visi</h3>
                <p>
                    Menjadi mitra terpercaya industri Indonesia dalam penyediaan solusi sistem
                    kompresor angin yang lengkap, profesional, dan berstandar tinggi.
                </p>
            </div>

            <div class="vm-card">
                <h3>Misi</h3>
                <p>
                    Memberikan layanan penjualan, servis, perawatan, suku cadang, instalasi, dan
                    rental kompresor dengan kualitas terbaik, respons cepat, serta dukungan teknis
                    berkelanjutan di seluruh Indonesia.
                </p>
            </div>

        </div>
    </div>
</section>

    <!-- SERVICE AREA -->
    <section class="jangkauan-section reveal">
    <img src="{{ asset('Images/About/indonesia.webp') }}"
         alt="Cakupan Layanan Indonesia">

    <div class="jangkauan-overlay">
        <h3>Cakupan Layanan Nasional</h3>
        <p>
            Melayani Jabodetabek, Jawa, Kalimantan, Sumatera, Sulawesi,
            hingga Nusa Tenggara Barat.
        </p>
    </div>
</section>

<div class="container">

    <!-- COMPANY PROFILE DOWNLOAD -->
    <section class="company-profile-section reveal text-center">
        <div class="company-profile-box">
            <i class="fas fa-file-pdf"></i>
            <h4>Company Profile</h4>
            <p>
                Unduh company profile BiG Airtech untuk mengetahui lebih lengkap mengenai
                layanan, produk, dan kapabilitas perusahaan kami.
            </p>

            <a
                href="https://drive.google.com/file/d/1vQT83gT1hHhUmf-4bld-ve9QjCXOGd8w/view"
                class="company-profile-btn"
                target="_blank"
            >
                Download Company Profile
            </a>
        </div>
    </section>

    <!-- CTA -->
    <section class="about-section reveal text-center">
        <h3 class="section-title">Butuh Solusi Kompresor Angin Industri?</h3>
        <p>
            Hubungi tim BiG Airtech untuk konsultasi teknis dan penawaran terbaik sesuai
            kebutuhan industri Anda.
        </p>
 <a class="btn btn-primary" href="{{ route('home') }}#contact">
                        Hubungi Kami
                    </a>
    </section>

</div>

@endsection
