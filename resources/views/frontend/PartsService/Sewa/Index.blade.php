@extends('frontend.layouts.app')

@section('title', 'Rental / Sewa Kompresor Screw | BiG Airtech')

@section('content')

<section class="hero-section reveal">
    <img
        src="{{ asset('Images/Hero.jpg') }}"
        alt="BiG Airtech Technician"
        class="hero-bg"
    >

    <div class="hero-card-wrapper">
        <div class="hero-card text-center">
            <h2>RENTAL / SEWA KOMPRESOR SCREW</h2>
            <p>Solusi lengkap untuk kebutuhan rental kompresor screw Anda dengan <strong>layanan profesional dan terpercaya.</strong></p>

        </div>
    </div>
</section>

<div class="container after-hero">

    <!-- WHY RENT -->
    <section class="about-zigzag reveal">
        <div class="container">
            <div class="zigzag-row">

                <div class="zigzag-content">
                    <h3>Mengapa Memilih Rental Kompresor Screw?</h3>
                    <p>
                        Rental kompresor screw sangat ideal untuk kondisi darurat,
                        peningkatan kapasitas produksi, proyek sementara,
                        atau saat unit utama sedang dalam perawatan.
                    </p>

                    <ul class="produk-list">
                        <li>Tidak perlu investasi pembelian unit</li>
                        <li>Siap pakai dan cepat dioperasikan</li>
                        <li>Biaya lebih terkontrol dan fleksibel</li>
                        <li>Didukung teknisi berpengalaman</li>
                    </ul>
                </div>

                <div class="zigzag-image">
                    <img
                        src="{{ asset('Images/Sewa/rental.webp') }}"
                        alt="Unit Rental Kompresor Screw"
                    >
                </div>

            </div>
        </div>
    </section>

    <!-- SPECIFICATION -->
    <section class="about-zigzag alt reveal">
        <div class="container">
            <div class="zigzag-row">

                <div class="zigzag-image">
                    <img
                        src="{{ asset('Images/sewa/Sewa.webp') }}"
                        alt="Kompresor Screw Operasional"
                    >
                </div>

                <div class="zigzag-content">
                    <h3>Spesifikasi Unit Rental</h3>
                    <p>
                        Kami menyediakan berbagai kapasitas kompresor screw
                        yang dapat disesuaikan dengan kebutuhan industri Anda.
                    </p>

                    <ul class="produk-list">
                        <li>Kapasitas: mulai dari 10 HP hingga >100 HP</li>
                        <li>Tipe: Oil Injected Screw Compressor</li>
                        <li>Sistem pendingin: Air Cooled & Water Cooled</li>
                        <li>Tekanan kerja stabil & efisien</li>
                        <li>Unit terawat dan layak operasional</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <!-- SERVICE INCLUDED -->
    <section class="why-us-section reveal">
        <div class="container text-center">
            <h3 class="section-title">Layanan Rental Termasuk</h3>

            <div class="why-grid">
                <div class="why-card">Survey & Konsultasi Teknis</div>
                <div class="why-card">Pengiriman & Instalasi Unit</div>
                <div class="why-card">Commissioning & Testing</div>
                <div class="why-card">Perawatan Selama Masa Sewa</div>
                <div class="why-card">Dukungan Teknisi Respons Cepat</div>
                <div class="why-card">Unit Pengganti (jika diperlukan)</div>
            </div>
        </div>
    </section>

</div>

<div class="container">

    <!-- DURATION -->
    <section class="about-section reveal text-center">
        <h3 class="section-title">Durasi Sewa Fleksibel</h3>
        <p>
            BiG Airtech menyediakan opsi sewa
            <strong>harian, mingguan, bulanan</strong>
            sesuai kebutuhan operasional industri Anda.
        </p>
    </section>

    <!-- CTA -->
    <section class="about-section reveal text-center">
        <h3 class="section-title">Butuh Rental Kompresor Screw?</h3>
        <p>
            Konsultasikan kebutuhan kapasitas dan durasi sewa Anda
            bersama tim teknis BiG Airtech.
        </p>

        <a href="{{ url('/contact') }}" class="btn btn-primary">
            Hubungi Kami
        </a>
    </section>

</div>

@endsection
