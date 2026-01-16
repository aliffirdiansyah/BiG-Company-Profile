@extends('frontend.layouts.app')

@section('title', 'Layanan Servis & Perawatan Screw Compressor | BiG Airtech')

@section('content')

<section class="hero-section reveal">
    <img
        src="{{ asset('Images/Hero.jpg') }}"
        alt="BiG Airtech Technician"
        class="hero-bg"
    >

    <div class="hero-card-wrapper">
        <div class="hero-card text-center">
            <h2>LAYANAN SERVIS & PERAWATAN SCREW COMPRESSOR</h2>
            <p><strong>Menjaga Performa Optimal</strong> Screw Compressor Anda Dengan Layanan Servis dan Perawatan <strong>Profesional</strong>.</p>
        </div>
    </div>
</section>

<div class="container after-hero">

    <!-- WHY SERVICE -->
    <section class="about-zigzag reveal">
        <div class="container">
            <div class="zigzag-row">

                <div class="zigzag-content">
                    <h3>Mengapa Servis & Perawatan Screw Compressor Itu Penting?</h3>
                    <p>
                        Screw compressor yang tidak dirawat secara rutin
                        berisiko mengalami penurunan performa, konsumsi energi berlebih,
                        hingga downtime produksi.
                    </p>

                    <ul class="produk-list">
                        <li>Mencegah kerusakan besar & biaya mahal</li>
                        <li>Menjaga tekanan udara tetap stabil</li>
                        <li>Meningkatkan efisiensi energi</li>
                        <li>Memperpanjang umur pakai mesin</li>
                    </ul>
                </div>

                 <div class="image-wrapper">
                    <img width="90%"
                        src="{{ asset('Images/Layanan/repair.svg') }}"
                        alt="BiG Airtech Professional Service"
                    >
                </div>

            </div>
        </div>
    </section>

    <!-- SERVICE TYPE -->
    <section class="why-us-section reveal">
        <div class="container text-center">
            <h3 class="section-title">Jenis Layanan Kami</h3>

            <div class="sparepart-grid"> <div class="sparepart-box" data-tooltip="Jasa Pengecekan"> <img src="{{ asset('Images/Layanan/Jasa Pengecekan Kompresor Screw.webp') }}" alt="Oil Filter Screw Compressor"> </div> <div class="sparepart-box" data-tooltip="Jasa Perbaikan"> <img src="{{ asset('Images/Layanan/Jasa Perbaikan Kompresor Screw.webp') }}" alt="Air Filter Screw Compressor"> </div> <div class="sparepart-box" data-tooltip="Jasa Perawatan"> <img src="{{ asset('Images/Layanan/Jasa Perawatan Kompresor Screw.webp') }}" alt="Oil Separator"> </div> <div class="sparepart-box" data-tooltip="Jasa Overhaul Compressor"> <img src="{{ asset('Images/Layanan/Jasa Overhaul Kompresor Screw.webp') }}" alt="Oil Compressor"> </div> </div>
        </div>
    </section>

</div>
@endsection
