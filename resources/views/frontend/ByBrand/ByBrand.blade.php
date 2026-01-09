@extends('frontend.layouts.app')

@section('title', 'By Brand | BiG Airtech')

@section('content')
<section class="hero-katalog-section reveal">
    <img
        src="{{ asset('Images/hero-galeri.jpg') }}"
        alt="BiG Airtech Technician"
        class="hero-galeri-bg"
    >

    <div class="hero-katalog-card-wrapper">
        <div class="hero-katalog-card text-center">
            <h2>BY BRAND</h2>
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
      <img loading="lazy" src="https://picsum.photos/500/700?1" alt="">
    </div>
    <div class="gallery-item">
      <img loading="lazy" src="https://picsum.photos/500/400?2" alt="">
    </div>
    <div class="gallery-item">
      <img loading="lazy" src="https://picsum.photos/500/600?3" alt="">
    </div>
    <div class="gallery-item">
      <img loading="lazy" src="https://picsum.photos/500/800?4" alt="">
    </div>
    <div class="gallery-item">
      <img loading="lazy" src="https://picsum.photos/500/450?5" alt="">
    </div>
    <div class="gallery-item">
      <img loading="lazy" src="https://picsum.photos/500/650?6" alt="">
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
