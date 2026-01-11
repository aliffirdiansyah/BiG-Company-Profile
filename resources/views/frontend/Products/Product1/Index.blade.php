@extends('frontend.layouts.app')

@section('title', 'CHICAGO PNEUMATIC AIR COMPRESSOR | BiG Airtech')

@section('content')

<section class="hero-katalog-section reveal">
    <img src="{{ asset('Images/Chicago Pneumatic/Kompresor Chicago Pneumatic Indonesia.webp') }}" alt="BiG Airtech Technician" class="hero-katalog-bg">
    <div class="hero-katalog-card-wrapper">
        <div class="hero-katalog-card text-center">
            <h2>CHICAGO PNEUMATIC AIR COMPRESSOR</h2>
        </div>
    </div>
</section>

<div class="container">
<section class="produk-section reveal after-hero">

    <!-- ITEM 1 -->
    <div class="produk-row">
        <div class="produk-card">
            <div class="produk-col image">
                <img src="{{ asset('Images/Chicago Pneumatic/Kompresor Chicago Pneumatic.webp') }}" alt="CPM & CPF Series">
            </div>
            <div class="produk-col text">
                <h3>CPM & CPF Series</h3>
                <p>• deskripsi</p>
                <a href="#" class="btn-produk">Lebih Lanjut</a>
            </div>
        </div>
    </div>

    <!-- ITEM 2 -->
    <div class="produk-row reverse">
        <div class="produk-card">
            <div class="produk-col image">
                <img src="{{ asset('Images/Chicago Pneumatic/Kompresor Oil Free.webp') }}" alt="WisAir Oil Free Compressor">
            </div>
            <div class="produk-col text">
                <h3>WisAir Oil Free Compressor</h3>
                <p>• deskripsi</p>
                <a href="#" class="btn-produk">Lebih Lanjut</a>
            </div>
        </div>
    </div>

    <!-- ITEM 3 -->
    <div class="produk-row">
        <div class="produk-card">
            <div class="produk-col image">
                <img src="{{ asset('Images/Chicago Pneumatic/Kompresor Booster High Pressure 40 Bar Murah Berkualitas Surabaya Bekasi Jakarta Indonesia.webp') }}" alt="bstAir Booster Compressor">
            </div>
            <div class="produk-col text">
                <h3>bstAir Booster Compressor</h3>
                <p>• deskripsi</p>
                <a href="#" class="btn-produk">Lebih Lanjut</a>
            </div>
        </div>
    </div>

</section>
</div>

@endsection
