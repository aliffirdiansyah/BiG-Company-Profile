@extends('frontend.layouts.app')

@section('title', 'BOGE Air Compressor | BiG Airtech')

@section('content')

<section class="hero-katalog-section reveal">
    <img src="{{ asset('Images/Boge/Distributor Kompresor BOGE Indonesia.webp') }}" alt="BiG Airtech Technician" class="hero-katalog-bg">
    <div class="hero-katalog-card-wrapper">
        <div class="hero-katalog-card text-center">
            <h2>BOGE Air Compressor</h2>
        </div>
    </div>
</section>

<div class="container">
<section class="produk-section reveal after-hero">

    <!-- ITEM 1 -->
    <div class="produk-row">
        <div class="produk-card">
            <div class="produk-col image">
                <img src="{{ asset('Images/Boge/S22Eco Resize2.webp') }}" alt="CPM & CPF Series">
            </div>
            <div class="produk-col text">
                <h3>S Eco & SE Series</h3>
                <p>• deskripsi</p>
                <a href="#" class="btn-produk">Lebih Lanjut</a>
            </div>
        </div>
    </div>

    <!-- ITEM 2 -->
    <div class="produk-row reverse">
        <div class="produk-card">
            <div class="produk-col image">
                <img src="{{ asset('Images/Boge/Aftersales Sparepart kompresor BOGE Indonesia Distributor Ometraco.webp') }}" alt="WisAir Oil Free Compressor">
            </div>
            <div class="produk-col text">
                <h3>Spare Parts</h3>
                <ul class="produk-list">
                    <li>Oil Filter</li>
                    <li>Air Filter</li>
                    <li>Oil Separator</li>
                    <li>Oil Screw Compressor</li>
                    <li>Element Filter</li>
                    <li>Solenoid Valve</li>
                    <li>Wearing Part</li>
                    <li>Controller</li>
                    <li>Cooler</li>
                    <li>Oil Seal</li>
                </ul>

                <a href="#" class="btn-produk">Lebih Lanjut</a>
            </div>
        </div>
    </div>

    <!-- ITEM 3 -->
    <div class="produk-row">
        <div class="produk-card">
            <div class="produk-col image">
                <img src="{{ asset('Images/Boge/Teknisi kompresor BOGE Indonesia Distributor Ometraco 6.webp') }}" alt="bstAir Booster Compressor">
            </div>
            <div class="produk-col text">
                <h3>Service</h3>
                <p>• Jasa Pengecekan, Perbaikan, Perawatan & Overhaul Kompresor</p>
                <a href="#" class="btn-produk">Lebih Lanjut</a>
            </div>
        </div>
    </div>

</section>
</div>

@endsection
