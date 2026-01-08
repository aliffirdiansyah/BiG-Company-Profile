<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'BiG Airtech – Air Compressor Specialist')</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

    {{-- Navbar --}}
    @include('frontend.partials.navbar')

    {{-- Content --}}
    <main class="py-4">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('frontend.partials.footer')

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

    <script>
    document.documentElement.style.setProperty('--speed-right', '35s'); // atas
    document.documentElement.style.setProperty('--speed-left', '30s');  // bawah
</script>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const reveals = document.querySelectorAll(".reveal");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                    observer.unobserve(entry.target); // animasi sekali
                }
            });
        },
        { threshold: 0.15 }
    );

    reveals.forEach(el => observer.observe(el));
});
</script>
<div class="wa-multi">

    <!-- MAIN BUTTON -->
    <button class="wa-main" aria-label="WhatsApp Contacts">
        <i class="fa-brands fa-whatsapp"></i>
    </button>

    <!-- CONTACT LIST -->
    <div class="wa-list">
        <a href="https://wa.me/6285643432084" target="_blank">
            <span>Head Office (Surabaya)</span>
        </a>
        <a href="https://wa.me/6285646434767" target="_blank">
            <span>Representative (Jabodetabek)</span>
        </a>
        <a href="https://wa.me/6285643432084" target="_blank">
            <span>Representative (Jawa Tengah)</span>
        </a>
    </div>

</div>

<!-- BACK TO TOP -->
<button id="backToTop" aria-label="Back to top">
    <i class="fa-solid fa-chevron-up"></i>
</button>

<script>
const waMulti = document.querySelector('.wa-multi');
const waMain = document.querySelector('.wa-main');

waMain.addEventListener('click', () => {
    waMulti.classList.toggle('active');
});

/* Tutup kalau klik luar */
document.addEventListener('click', (e) => {
    if (!waMulti.contains(e.target)) {
        waMulti.classList.remove('active');
    }
});
</script>

<script>
const backToTop = document.getElementById('backToTop');

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        backToTop.classList.add('show');
    } else {
        backToTop.classList.remove('show');
    }
});

backToTop.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});
</script>

</body>
</html>
