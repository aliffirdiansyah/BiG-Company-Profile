@extends('frontend.layouts.app')

@section('title', 'By Spare Parts | BiG Airtech')

@section('content')
<section class="hero-katalog-section reveal">
    <img
        src="{{ asset('Images/hero-galeri.jpg') }}"
        alt="BiG Airtech Technician"
        class="hero-galeri-bg"
    >

    <div class="hero-katalog-card-wrapper">
        <div class="hero-katalog-card text-center">
            <h2>All Spare Parts Screw Compressor</h2>
            <strong>Spare parts lengkap untuk semua merek screw compressor, dengan kualitas terjamin.</strong>
        </div>
    </div>
</section>

<div class="container after-hero">
    <section class="sparepart-section">

        <div class="sparepart-grid">

            <div class="sparepart-box" data-tooltip="Oil Filter">
                <img src="{{ asset('Images/Spare parts/Oil Filter Kaeser.webp') }}" alt="Oil Filter Screw Compressor">
            </div>

            <div class="sparepart-box" data-tooltip="Air Filter">
                <img src="{{ asset('Images/Spare parts/Filter Kompresor Sullair.webp') }}" alt="Air Filter Screw Compressor">
            </div>

            <div class="sparepart-box" data-tooltip="Oil Separator">
                <img src="{{ asset('Images/Spare parts/Separator Kompresor Atlas.webp') }}" alt="Oil Separator">
            </div>

            <div class="sparepart-box" data-tooltip="Oil Screw Compressor">
                <img src="{{ asset('Images/Spare parts/Oli Kompresor Atlas Copco.webp') }}" alt="Oil Compressor">
            </div>

            <div class="sparepart-box" data-tooltip="Element Filter">
                <img src="{{ asset('Images/Spare parts/Sparepart kompresor Atlas Copco Ingersoll Rand Sullair Surabaya Bekasi.webp') }}" alt="Element Filter">
            </div>

            <div class="sparepart-box" data-tooltip="Unloader Valve">
                <img src="{{ asset('Images/Spare parts/V Belt Kompresor Screw BOGE.webp') }}" alt="Unloader Valve">
            </div>

            <div class="sparepart-box" data-tooltip="Service Kit">
                <img src="{{ asset('Images/Spare parts/Sparepart kompresor Piston.webp') }}" alt="Service Kit">
            </div>

            <div class="sparepart-box" data-tooltip="Repair Kit">
                <img src="{{ asset('Images/Spare parts/Sparepart kompresor Sullair Surabaya Bekasi.webp') }}" alt="Repair Kit">
            </div>

            <div class="sparepart-box" data-tooltip="Controller">
                <img src="{{ asset('Images/Spare parts/Safety Valve Kompresor.webp') }}" alt="Compressor Controller">
            </div>

            <div class="sparepart-box" data-tooltip="Cooler">
                <img src="{{ asset('Images/Spare parts/Safety Valve Kompresor.webp') }}" alt="Oil Cooler">
            </div>

            <div class="sparepart-box" data-tooltip="Shaft Seal">
                <img src="{{ asset('Images/Spare parts/Sparepart kompresor Sullair Surabaya Bekasi.webp') }}" alt="Shaft Seal">
            </div>

            <div class="sparepart-box" data-tooltip="Hose Assembly">
                <img src="{{ asset('Images/Spare parts/Sparepart Sullair.webp') }}" alt="Hose Assembly">
            </div>

        </div>

    </section>
</div>
@endsection
