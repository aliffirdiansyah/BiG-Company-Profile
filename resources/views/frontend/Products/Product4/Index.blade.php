@extends('frontend.layouts.app')

@section('title', 'Dryer, Filter & Receiver Tank | BiG Airtech')

@section('content')

<section class="hero-katalog-section reveal">
    <img src="{{ asset('Images/Product 4/Kompresor.webp') }}" alt="BiG Airtech Technician" class="hero-katalog-bg">
    <div class="hero-katalog-card-wrapper">
        <div class="hero-katalog-card text-center">
            <h2>Dryer, Filter & Receiver Tank</h2>
        </div>
    </div>
</section>

<div class="container">
<section class="produk-section reveal after-hero">

    <!-- ITEM 1 -->
    <div class="produk-row">
        <div class="produk-card">
            <div class="produk-col image">
                <img src="{{ asset('Images/Product 4/Refrigerant Dryer Murah.webp') }}" alt="CPM & CPF Series">
            </div>
            <div class="produk-col text">
                <h3>Refrigerated Dryer & Dessicant Dryer</h3>
                <p>• deskripsi</p>
                <a href="#" class="btn-produk">Lebih Lanjut</a>
            </div>
        </div>
    </div>

    <!-- ITEM 2 -->
    <div class="produk-row reverse">
        <div class="produk-card">
            <div class="produk-col image">
                <img src="{{ asset('Images/Product 4/Pre After Filter.webp') }}" alt="WisAir Oil Free Compressor">
            </div>
            <div class="produk-col text">
                <h3>Pre & After Filter</h3>
                <p>• deskripsi</p>
                <a href="#" class="btn-produk">Lebih Lanjut</a>
            </div>
        </div>
    </div>

    <!-- ITEM 3 -->
    <div class="produk-row">
        <div class="produk-card">
            <div class="produk-col image">
                <img src="{{ asset('Images/Product 4/Tangki Kompresor.webp') }}" alt="bstAir Booster Compressor">
            </div>
            <div class="produk-col text">
                <h3>Air Receiver Tank</h3>
                <p>• deskripsi</p>
                <a href="#" class="btn-produk">Lebih Lanjut</a>
            </div>
        </div>
    </div>

    <div class="produk-row reverse">
        <div class="produk-card">
            <div class="produk-col image">
                <img src="{{ asset('Images/Product 4/Autodrain.webp') }}" alt="WisAir Oil Free Compressor">
            </div>
            <div class="produk-col text">
                <h3>Accessories</h3>
                <ul class="produk-list">
                    <li>Autodrain</li>
                    <li>Water Separator</li>
                    <li>Pressure Gauge</li>
                    <li>Safety Valve</li>
                    <li>Regulator</li>
                </ul>
                <a href="#" class="btn-produk">Lebih Lanjut</a>
            </div>
        </div>
    </div>

</section>
</div>

@endsection
