@extends('frontend.layouts.app')

@section('title', 'Layanan Servis & Perawatan Air & Water Cooled Chiller | BiG Airtech')

@section('content')
<section class="hero-section reveal">
    <img
        src="{{ asset('Images/Hero.jpg') }}"
        alt="BiG Airtech Technician"
        class="hero-bg"
    >

    <div class="hero-card-wrapper">
        <div class="hero-card text-center">
            <h2>LAYANAN SERVIS & PERAWATAN AIR & WATER COOLED CHILLER</h2>
            <p><strong>Menjaga Performa Optimal</strong> Air & Water Cooled Chiller Anda Dengan Layanan Servis dan Perawatan <strong>Profesional</strong>.</p>
        </div>
    </div>
</section>

<div class="container after-hero">

    <!-- WHY SERVICE -->
    <section class="about-zigzag-reverse reveal">
        <div class="container">
            <div class="zigzag-row">

                <div class="zigzag-content">
                    <h3>Mengapa Servis & Perawatan Air & Water Cooled Chiller Itu Penting?</h3>
                    <p>
                        Air & Water Cooled Chiller yang tidak dirawat secara rutin
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

             <div class="sparepart-grid">

            <div class="sparepart-box" data-tooltip="Servis / Perawatan Air & Water Cooled Chiller">
                <img src="{{ asset('Images/Chiller/Servis Chiller.webp') }}" alt="Oil Filter Screw Compressor">
            </div>

            <div class="sparepart-box" data-tooltip="Servis / Perawatan Air & Water Cooled Chiller">
                <img src="{{ asset('Images/Chiller/Servis Water Chiller.webp') }}" alt="Air Filter Screw Compressor">
            </div>

            <div class="sparepart-box" data-tooltip="Servis / Perawatan Air & Water Cooled Chiller">
                <img src="{{ asset('Images/Chiller/Spesialis Chiller Surabaya.webp') }}" alt="Oil Separator">
            </div>

            <div class="sparepart-box" data-tooltip="Servis / Perawatan Air & Water Cooled Chiller">
                <img src="{{ asset('Images/Chiller/Spesialis Chiller.webp') }}" alt="Oil Compressor">
            </div>

        </div>
        </div>
    </section>

</div>
@endsection
