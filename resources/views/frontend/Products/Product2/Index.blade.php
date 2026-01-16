@extends('frontend.layouts.app')

@section('title', 'BiG Air Screw Compressor | BiG Airtech')

@section('content')

<section class="hero-section reveal">
    <img
        src="{{ asset('Images/Hero.jpg') }}"
        alt="BiG Airtech Technician"
        class="hero-bg"
    >

    <div class="hero-card-wrapper">
        <div class="hero-card text-center">
            <h2>BiG AIR SCREW COMPRESSOR</h2>
            <p>
                <strong>Distributor BiG Air Screw Compressor.</strong>
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
                    <img src="{{ asset('Images/BiG/Fixed.webp') }}"
                         alt="Fixed Speed Screw Compressor" class="lightbox-trigger">
                </div>
                <div class="produk-body">
                    <h3>Fixed Speed Screw Compressor</h3>
                    <p>Kompresor screw fixed speed dengan performa stabil untuk operasional industri.</p>
                    {{-- <a href="#" class="btn-produk">Lebih Lanjut</a> --}}
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="produk-card">
                <div class="produk-image">
                    <img src="{{ asset('Images/BiG/Variable.webp') }}"
                         alt="Variable Speed Screw Compressor" class="lightbox-trigger">
                </div>
                <div class="produk-body">
                    <h3>Variable Speed Screw Compressor</h3>
                    <p>Kompresor screw inverter hemat energi dengan kontrol tekanan presisi.</p>
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
