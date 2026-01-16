@extends('frontend.layouts.app')

@section('title', 'Galeri | BiG Airtech')

@section('content')

<section class="hero-section reveal">
    <img
        src="{{ asset('Images/Hero.jpg') }}"
        alt="BiG Airtech Technician"
        class="hero-bg"
    >

    <div class="hero-card-wrapper">
        <div class="hero-card text-center">
            <h2>GALERI</h2>
            <p>
                Galeri Foto <strong>Kegiatan & Layanan Kami.</strong>
            </p>
        </div>
    </div>
</section>

<div class="container">
    <section class="gallery reveal after-hero">
        <div class="gallery-masonry">

            <div class="gallery-item">
                <img loading="lazy"
                     src="{{ asset('Images/galeri/Jasa Servis Kompresor Screw.webp') }}"
                     alt="Jasa Servis Kompresor Screw"
                     class="lightbox-trigger">
            </div>

            <div class="gallery-item">
                <img loading="lazy"
                     src="{{ asset('Images/galeri/Kompresor Screw Cina.webp') }}"
                     alt="Kompresor Screw Cina"
                     class="lightbox-trigger">
            </div>

            <div class="gallery-item">
                <img loading="lazy"
                     src="{{ asset('Images/galeri/Overhaul Kompresor Screw.webp') }}"
                     alt="Overhaul Kompresor Screw"
                     class="lightbox-trigger">
            </div>

            <div class="gallery-item">
                <img loading="lazy"
                     src="{{ asset('Images/galeri/Perawatan Kompresor Screw.webp') }}"
                     alt="Perawatan Kompresor Screw"
                     class="lightbox-trigger">
            </div>

            <div class="gallery-item">
                <img loading="lazy"
                     src="{{ asset('Images/galeri/Servis Kompresor Screw Surabaya.webp') }}"
                     alt="Servis Kompresor Screw Surabaya"
                     class="lightbox-trigger">
            </div>

            <div class="gallery-item">
                <img loading="lazy"
                     src="{{ asset('Images/galeri/Servis Kompresor Screw.webp') }}"
                     alt="Servis Kompresor Screw"
                     class="lightbox-trigger">
            </div>

            <div class="gallery-item">
                <img loading="lazy"
                     src="{{ asset('Images/galeri/Spare Part Kompresor Screw.webp') }}"
                     alt="Spare Part Kompresor Screw"
                     class="lightbox-trigger">
            </div>

            <div class="gallery-item">
                <img loading="lazy"
                     src="{{ asset('Images/galeri/Spesialis Kompresor Screw.webp') }}"
                     alt="Spesialis Kompresor Screw"
                     class="lightbox-trigger">
            </div>

        </div>
    </section>

    <!-- LIGHTBOX -->
    <div class="lightbox" id="lightbox">
        <span class="lightbox-close">&times;</span>
        <img class="lightbox-img" id="lightbox-img" alt="">
    </div>
</div>

@endsection
