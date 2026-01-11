@extends('frontend.layouts.app')

@section('title', 'Galeri | BiG Airtech')

@section('content')
<section class="hero-katalog-section reveal">
    <img
        src="{{ asset('Images/hero-galeri.jpg') }}"
        alt="BiG Airtech Technician"
        class="hero-galeri-bg"
    >

    <div class="hero-katalog-card-wrapper">
        <div class="hero-katalog-card text-center">
            <h2>GALERI</h2>
            <p>
                DOKUMENTASI <strong>PROYEK</strong>, <strong>KEGIATAN</strong>, DAN <strong>LAYANAN</strong> YANG KAMI TANGANI.
            </p>
        </div>
    </div>
</section>

<div class="container">
    <section class="gallery reveal after-hero">

  <div class="gallery-masonry">
    <div class="gallery-item">
       <img loading="lazy"
        src="{{ asset('Images/galeri/Bengkel Kompresor Screw dan Piston.webp') }}"
        alt="BiG Airtech Technician"
    >
    </div>

        <div class="gallery-item">
       <img loading="lazy"
        src="{{ asset('Images/galeri/distributor kompresor boge indonesia.webp') }}"
        alt="BiG Airtech Technician"
    >
    </div>

        <div class="gallery-item">
       <img loading="lazy"
        src="{{ asset('Images/galeri/Kompresor Screw Murah Berkualitas Surabaya Bekasi Jakarta.webp') }}"
        alt="BiG Airtech Technician"
    >
    </div>

        <div class="gallery-item">
       <img loading="lazy"
        src="{{ asset('Images/galeri/Spesialis Kompresor Bogor.webp') }}"
        alt="BiG Airtech Technician"
    >
    </div>

     <div class="gallery-item">
       <img loading="lazy"
        src="{{ asset('Images/galeri/Overhaul Kompresor Screw.webp') }}"
        alt="BiG Airtech Technician"
    >
    </div>

        <div class="gallery-item">
       <img loading="lazy"
        src="{{ asset('Images/galeri/distributor kompresor boge indonesia.webp') }}"
        alt="BiG Airtech Technician"
    >
    </div>

        <div class="gallery-item">
       <img loading="lazy"
        src="{{ asset('Images/galeri/Spesialis Kompresor Surabaya.webp') }}"
        alt="BiG Airtech Technician"
    >
    </div>

        <div class="gallery-item">
       <img loading="lazy"
        src="{{ asset('Images/galeri/Spesialis Kompresor Tangerang.webp') }}"
        alt="BiG Airtech Technician"
    >
    </div>
  </div>
</section>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox">
  <span class="lightbox-close">&times;</span>
  <img class="lightbox-img" id="lightboxImg">
</div>




</div>

@endsection
