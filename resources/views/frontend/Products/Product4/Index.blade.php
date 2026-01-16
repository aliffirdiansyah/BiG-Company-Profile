@extends('frontend.layouts.app')

@section('title', 'Dryer, Filter & Receiver Tank | BiG Airtech')

@section('content')

<section class="hero-section reveal">
    <img
        src="{{ asset('Images/Hero.jpg') }}"
        alt="BiG Airtech Technician"
        class="hero-bg"
    >

    <div class="hero-card-wrapper">
        <div class="hero-card text-center">
           <h2>DRYER, FILTER & RECEIVER TANK</h2>
        </div>
    </div>
</section>

<section class="produk-shop-section after-hero reveal">
    <div class="container">
        <div class="produk-grid">

            <!-- CARD 1 -->
            <div class="produk-card">
                <div class="produk-image">
                    <img src="{{ asset('Images/Product 4/Air.webp') }}"
                         alt="Air Dryer Compressor"
                         class="lightbox-trigger">
                </div>
                <div class="produk-body">
                    <h3>Air Dryer</h3>
                    <p>Pengering udara untuk menjaga kualitas udara terkompresi tetap bersih dan kering.</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="produk-card">
                <div class="produk-image">
                    <img src="{{ asset('Images/Product 4/Pre.webp') }}"
                         alt="Pre & After Filter Compressor"
                         class="lightbox-trigger">
                </div>
                <div class="produk-body">
                    <h3>Pre & After Filter</h3>
                    <p>Filter udara untuk menyaring air, oli, dan partikel sebelum masuk ke sistem.</p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="produk-card">
                <div class="produk-image">
                    <img src="{{ asset('Images/Product 4/Tangki Kompresor.webp') }}"
                         alt="Air Receiver Tank"
                         class="lightbox-trigger">
                </div>
                <div class="produk-body">
                    <h3>Air Receiver Tank</h3>
                    <p>Tangki udara untuk menyimpan tekanan dan menjaga kestabilan sistem.</p>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="produk-card">
                <div class="produk-image">
                    <img src="{{ asset('Images/Product 4/Autodrain.webp') }}"
                         alt="Compressor Accessories"
                         class="lightbox-trigger">
                </div>
                <div class="produk-body">
                    <h3>Accessories</h3>
                    <p>
                        Kami menyediakan berbagai komponen pendukung sistem udara terkompresi seperti
                        autodrain, water separator, pressure gauge, safety valve, dan regulator yang
                        dirancang untuk menjaga performa dan keamanan operasional industri Anda.
                    </p>
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
