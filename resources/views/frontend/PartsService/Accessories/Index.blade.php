@extends('frontend.layouts.app')

@section('title', 'Spare Parts Screw Compressor | BiG Airtech')

@section('content')
<section class="hero-section reveal">
    <img
        src="{{ asset('Images/Hero.jpg') }}"
        alt="BiG Airtech Technician"
        class="hero-bg"
    >

    <div class="hero-card-wrapper">
        <div class="hero-card text-center">
            <h2>SPARE PARTS SCREW COMPRESSOR</h2>
            <p>
                Spare parts untuk kompresor screw yang <strong>terpercaya dan berkualitas tinggi</strong>.
            </p>
        </div>
    </div>
</section>

<div class="container after-hero">
    <section class="sparepart-section">

        <div class="sparepart-grid">

            <div class="sparepart-box" data-tooltip="Oil Filter">
                <img src="{{ asset('Images/Spare parts/Oil Filter Kompresor.webp') }}" alt="Oil Filter Screw Compressor">
            </div>

            <div class="sparepart-box" data-tooltip="Air Filter">
                <img src="{{ asset('Images/Spare parts/Air Filter Kompresor.webp') }}" alt="Air Filter Screw Compressor">
            </div>

            <div class="sparepart-box" data-tooltip="Oil Separator">
                <img src="{{ asset('Images/Spare parts/Oil Separator Kompresor.webp') }}" alt="Oil Separator">
            </div>

            <div class="sparepart-box" data-tooltip="Oil Screw Compressor">
                <img src="{{ asset('Images/Spare parts/Oli Kompresor Screw.webp') }}" alt="Oil Compressor">
            </div>

            <div class="sparepart-box" data-tooltip="Element Filter">
                <img src="{{ asset('Images/Spare parts/Element Filter Kompresor.webp') }}" alt="Element Filter">
            </div>

            <div class="sparepart-box" data-tooltip="Service Repair Kit">
                <img src="{{ asset('Images/Spare parts/Service Repair Kit.webp') }}" alt="Service Repair Kit">
            </div>

            <div class="sparepart-box" data-tooltip="Control Modul Kompresor">
                <img src="{{ asset('Images/Spare parts/Control Modul Kompresor.webp') }}" alt="Control Modul Kompresor">
            </div>

            <div class="sparepart-box" data-tooltip="Oil Cooler Kompresor">
                <img src="{{ asset('Images/Spare parts/Oil Cooler Kompresor.webp') }}" alt="Oil Cooler Kompresor">
            </div>

            <div class="sparepart-box" data-tooltip="Lip Seal Kompresor">
                <img src="{{ asset('Images/Spare parts/Lip Seal Kompresor.webp') }}" alt="Shaft Seal">
            </div>

            <div class="sparepart-box" data-tooltip="Bearing Kompresor">
                <img src="{{ asset('Images/Spare parts/Bearing Kompresor.webp') }}" alt="Bearing Kompresor">
            </div>

              <div class="sparepart-box" data-tooltip="V Belt Kompresor">
                <img src="{{ asset('Images/Spare parts/V Belt Kompresor.webp') }}" alt="V Belt">
            </div>

            <div class="sparepart-box" data-tooltip="Solenoid Valve Kompresor">
                <img src="{{ asset('Images/Spare parts/Solenoid Valve Kompresor.webp') }}" alt="Solenoid Valve Kompresor">
            </div>

        </div>

    </section>
</div>
@endsection
