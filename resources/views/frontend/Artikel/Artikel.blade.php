@extends('frontend.layouts.app')

@section('title', 'Artikel | BiG Airtech')

@section('content')

<!-- HERO -->
<section class="hero-katalog-section reveal">
    <img
        src="{{ asset('Images/hero-galeri.jpg') }}"
        alt="BiG Airtech Articles"
        class="hero-galeri-bg"
    >

    <div class="hero-katalog-card-wrapper">
        <div class="hero-katalog-card text-center">
            <h2>ARTIKEL</h2>
            <strong>INSIGHT & EDUKASI AIR COMPRESSOR</strong>
        </div>
    </div>
</section>

<div class="container after-hero">

    <section class="article-section reveal">
        <div class="article-grid">

            <!-- CARD -->
            <div class="article-card">
                <div class="article-thumb">
                    <img src="{{ asset('Images/article-1.jpg') }}" alt="Perawatan Air Compressor">
                </div>

                <div class="article-body">
                    <span class="article-date">12 Jan 2026</span>

                    <h3 class="article-title">
                        Pentingnya Perawatan Rutin Air Compressor
                    </h3>

                    <p class="article-excerpt">
                        Perawatan rutin air compressor membantu menjaga performa,
                        efisiensi energi, dan memperpanjang umur mesin industri Anda.
                    </p>

                    <a href="#" class="article-link">
                        Baca Selengkapnya →
                    </a>
                </div>
            </div>

            <!-- CARD -->
            <div class="article-card">
                <div class="article-thumb">
                    <img src="{{ asset('Images/article-2.jpg') }}" alt="Screw Compressor">
                </div>

                <div class="article-body">
                    <span class="article-date">05 Jan 2026</span>

                    <h3 class="article-title">
                        Screw vs Piston Compressor: Mana yang Tepat?
                    </h3>

                    <p class="article-excerpt">
                        Kenali perbedaan screw dan piston compressor agar Anda
                        dapat memilih solusi terbaik sesuai kebutuhan industri.
                    </p>

                    <a href="#" class="article-link">
                        Baca Selengkapnya →
                    </a>
                </div>
            </div>

            <!-- CARD -->
            <div class="article-card">
                <div class="article-thumb">
                    <img src="{{ asset('Images/article-3.jpg') }}" alt="Efisiensi Energi">
                </div>

                <div class="article-body">
                    <span class="article-date">28 Des 2025</span>

                    <h3 class="article-title">
                        Cara Menghemat Energi pada Sistem Udara Bertekanan
                    </h3>

                    <p class="article-excerpt">
                        Sistem udara bertekanan yang efisien dapat mengurangi
                        biaya operasional dan meningkatkan produktivitas.
                    </p>

                    <a href="#" class="article-link">
                        Baca Selengkapnya →
                    </a>
                </div>
            </div>

        </div>
    </section>

</div>

@endsection
