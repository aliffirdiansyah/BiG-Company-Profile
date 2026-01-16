@extends('frontend.layouts.app')

@section('title', 'BOGE Air Compressor | BiG Airtech')

@section('content')

<section class="hero-section reveal">
    <img
        src="{{ asset('Images/Hero.jpg') }}"
        alt="BiG Airtech Technician"
        class="hero-bg"
    >

    <div class="hero-card-wrapper">
        <div class="hero-card text-center">
            <h2>BOGE Air Compressor</h2>
            <p>
                <strong>Distributor BOGE Air Compressor.</strong>
            </p>
        </div>
    </div>
</section>

<section class="produk-shop-section after-hero reveal">
    <div class="container">

        <div class="produk-grid">

            <!-- CARD 1 -->
            <div class="produk-card">
                <div class="produk-image">
                    <img src="{{ asset('Images/Boge/S22Eco Resize2.webp') }}"
                         alt="BOGE S Eco & SE Series" class="lightbox-trigger">
                </div>
                <div class="produk-body">
                    <h3>S Eco & SE Series</h3>
                    <p>Kompresor screw BOGE dengan efisiensi tinggi dan performa stabil.</p>
                    {{-- <a href="#" class="btn-produk">Lebih Lanjut</a> --}}
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="produk-card">
                <div class="produk-image">
                    <img src="{{ asset('Images/Boge/Aftersales Sparepart kompresor BOGE Indonesia Distributor Ometraco.webp') }}"
                         alt="BOGE Spare Parts" class="lightbox-trigger">
                </div>
                <div class="produk-body">
                    <h3>Spare Parts</h3>

                   <p>
                        Sebagai penyedia spare part screw compressor terpercaya, kami menghadirkan
                        oil filter, air filter, oil separator, element filter, solenoid valve, controller,
                        cooler, oil seal, wearing part, hingga oil screw compressor berkualitas tinggi
                        untuk kebutuhan perawatan dan perbaikan kompresor udara industri.
                    </p>


                    {{-- <a href="#" class="btn-produk">Lebih Lanjut</a> --}}
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="produk-card">
                <div class="produk-image">
                    <img src="{{ asset('Images/Boge/Service.jpg') }}"
                         alt="BOGE Compressor Service" class="lightbox-trigger">
                </div>
                <div class="produk-body">
                    <h3>Service</h3>
                    <p>Jasa pengecekan, perawatan, perbaikan hingga overhaul kompresor BOGE.</p>
                    {{-- <a href="#" class="btn-produk">Lebih Lanjut</a> --}}
                </div>
            </div>

        </div>
    </div>
</section>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox">
    <span class="lightbox-close">&times;</span>
    <img class="lightbox-img" id="lightbox-img" alt="">
</div>

@endsection
