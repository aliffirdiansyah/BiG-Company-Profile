@extends('frontend.layouts.app')

@section('title', 'CHICAGO PNEUMATIC AIR COMPRESSOR | BiG Airtech')

@section('content')

<section class="hero-section reveal">
    <img
        src="{{ asset('Images/Hero.jpg') }}"
        alt="BiG Airtech Technician"
        class="hero-bg"
    >

    <div class="hero-card-wrapper">
        <div class="hero-card text-center">
            <h2>CHICAGO PNEUMATIC AIR COMPRESSOR</h2>
            <p>
                <strong>Distributor Kompresor Chicago Pneumatic Indonesia.</strong>
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
                    <img src="{{ asset('Images/Chicago Pneumatic/Kompresor Chicago Pneumatic.webp') }}"
                         alt="CPM & CPF Series Chicago Pneumatic" class="lightbox-trigger">
                </div>
                <div class="produk-body">
                    <h3>CPM & CPF Series</h3>
                    <p>Kompresor screw industrial handal untuk kebutuhan pabrik dan manufaktur.</p>
                    {{-- <a href="#" class="btn-produk">Lebih Lanjut</a> --}}
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="produk-card">
                <div class="produk-image">
                    <img src="{{ asset('Images/Chicago Pneumatic/Kompresor Oil Free.webp') }}"
                         alt="WisAir Oil Free Compressor" class="lightbox-trigger">
                </div>
                <div class="produk-body">
                    <h3>WisAir Oil Free Compressor</h3>
                    <p>Kompresor bebas oli untuk industri makanan, farmasi, dan medis.</p>
                    {{-- <a href="#" class="btn-produk">Lebih Lanjut</a> --}}
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="produk-card">
                <div class="produk-image">
                    <img src="{{ asset('Images/Chicago Pneumatic/Kompresor Booster High Pressure 40 Bar Murah Berkualitas Surabaya Bekasi Jakarta Indonesia.webp') }}"
                         alt="bstAir Booster Compressor" class="lightbox-trigger">
                </div>
                <div class="produk-body">
                    <h3>bstAir Booster Compressor</h3>
                    <p>Kompresor tekanan tinggi hingga 40 bar untuk aplikasi khusus.</p>
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
