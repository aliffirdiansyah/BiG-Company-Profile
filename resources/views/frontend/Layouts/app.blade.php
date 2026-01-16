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

    <link rel="icon" href="{{ asset('Icon.ico') }}">

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
document.addEventListener("DOMContentLoaded", () => {

    /* ======================
       CSS SPEED VARIABLE
    ====================== */
    document.documentElement.style.setProperty('--speed-right', '35s');
    document.documentElement.style.setProperty('--speed-left', '30s');


    /* ======================
       REVEAL ANIMATION
    ====================== */
    const reveals = document.querySelectorAll(".reveal");

    if (reveals.length) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("active");
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15 });

        reveals.forEach(el => observer.observe(el));
    }


    /* ======================
       WHATSAPP FLOAT
    ====================== */
    const waMulti = document.querySelector('.wa-multi');
    const waMain = document.querySelector('.wa-main');

    if (waMulti && waMain) {
        waMain.addEventListener('click', (e) => {
            e.stopPropagation();
            waMulti.classList.toggle('active');
        });

        document.addEventListener('click', (e) => {
            if (!waMulti.contains(e.target)) {
                waMulti.classList.remove('active');
            }
        });
    }


    /* ======================
       BACK TO TOP
    ====================== */
    const backToTop = document.getElementById('backToTop');

    if (backToTop) {
        window.addEventListener('scroll', () => {
            backToTop.classList.toggle('show', window.scrollY > 300);
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }


    /* ======================
       LIGHTBOX (FINAL & BENAR)
    ====================== */
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const closeBtn = document.querySelector('.lightbox-close');
    const triggers = document.querySelectorAll('.lightbox-trigger');

    if (lightbox && lightboxImg && closeBtn && triggers.length) {

        triggers.forEach(img => {
            img.addEventListener('click', () => {
                lightbox.classList.add('active');
                lightboxImg.src = img.src;
                lightboxImg.alt = img.alt;
            });
        });

        closeBtn.addEventListener('click', () => {
            lightbox.classList.remove('active');
        });

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                lightbox.classList.remove('active');
            }
        });

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                lightbox.classList.remove('active');
            }
        });
    }

});
</script>


</body>
</html>
