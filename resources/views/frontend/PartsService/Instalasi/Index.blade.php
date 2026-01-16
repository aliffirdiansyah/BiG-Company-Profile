@extends('frontend.layouts.app')

@section('title', 'Instalasi Sistem Udara Terkompresi | BiG Airtech')

@section('content')

<!-- HERO -->
<section class="hero-section reveal">
    <img
        src="{{ asset('Images/Hero.jpg') }}"
        alt="BiG Airtech Technician"
        class="hero-bg"
    >

    <div class="hero-card-wrapper">
        <div class="hero-card text-center">
            <h2>INSTALASI SISTEM UDARA TERKOMPRESI</h2>
            <p><strong>Menjaga Performa Optimal</strong> Sistem Udara Terkompresi Anda Dengan Layanan Instalasi <strong>Profesional</strong>.</p>
        </div>
    </div>
</section>

<div class="container after-hero">

    <!-- SCOPE -->
    <section class="about-zigzag reveal">
        <div class="container">
            <div class="zigzag-row">

                <div class="zigzag-content">
                    <h3>Cakupan Pekerjaan Instalasi</h3>
                    <p>
                        Kami menangani instalasi sistem udara terkompresi
                        dari hulu hingga hilir, menyesuaikan dengan kebutuhan
                        kapasitas dan tata letak area produksi.
                    </p>

                    <ul class="produk-list">
                        <li>Instalasi kompresor screw & piston</li>
                        <li>Instalasi air receiver tank</li>
                        <li>Instalasi air dryer & line filter</li>
                        <li>Pemasangan pipa distribusi udara</li>
                        <li>Instalasi titik outlet & regulator</li>
                    </ul>
                </div>

                <div class="zigzag-image">
                    <img
                        src="{{ asset('Images/Instalasi/Instalasi.webp') }}"
                        alt="Instalasi Kompresor Udara"
                    >
                </div>

            </div>
        </div>
    </section>

    <!-- PIPE SYSTEM -->
    <section class="about-zigzag alt reveal">
        <div class="container">
            <div class="zigzag-row">

                <div class="zigzag-image">
                    <img
                        src="{{ asset('Images/Instalasi/Sistem.webp') }}"
                        alt="Instalasi Pipa Udara Terkompresi"
                    >
                </div>

                <div class="zigzag-content">
                    <h3>Sistem Perpipaan Udara</h3>
                    <p>
                        Sistem perpipaan yang baik adalah kunci efisiensi
                        dalam distribusi udara terkompresi.
                        Kami menggunakan material dan metode pemasangan
                        yang sesuai standar industri.
                    </p>

                    <ul class="produk-list">
                        <li>Pipa galvanis, aluminium, atau stainless steel</li>
                        <li>Desain jalur pipa minim pressure drop</li>
                        <li>Sistem drain & water trap terencana</li>
                        <li>Pemasangan rapi dan mudah perawatan</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="why-us-section reveal">
        <div class="container text-center">
            <h3 class="section-title">Tahapan Instalasi</h3>

            <div class="why-grid">
                <div class="why-card">Survey Lokasi & Analisa Kebutuhan</div>
                <div class="why-card">Perancangan Sistem & Layout</div>
                <div class="why-card">Pengadaan Material & Peralatan</div>
                <div class="why-card">Instalasi & Pemasangan</div>
                <div class="why-card">Testing & Commissioning</div>
                <div class="why-card">Serah Terima & Dokumentasi</div>
            </div>
        </div>
    </section>

</div>

<div class="container">

    <!-- CTA -->
    <section class="about-section reveal text-center">
        <h3 class="section-title">Butuh Instalasi Sistem Udara Terkompresi?</h3>
        <p>
            Konsultasikan kebutuhan instalasi sistem udara terkompresi Anda
            bersama tim teknis BiG Airtech.
        </p>

        <a href="{{ url('/contact') }}" class="btn btn-primary">
            Konsultasi Sekarang
        </a>
    </section>

</div>

@endsection
