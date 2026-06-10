@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<style>
    body {
        font-family: Arial, sans-serif;
        scroll-behavior: smooth;
    }

    /* FLOATING */
    .floating {
        animation: floating 4s ease-in-out infinite;
    }

    @keyframes floating {
        0%,100% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
    }

    /* PULSE */
    .pulse-slow {
        animation: pulseSlow 3s infinite;
    }

    @keyframes pulseSlow {
        0%,100% { transform: scale(1); }
        50% { transform: scale(1.05); }
    }

    /* HOVER CARD */
    .hover-lift {
        transition: all 0.4s ease;
    }

    .hover-lift:hover {
        transform: translateY(-10px) scale(1.03);
        box-shadow: 0 20px 35px rgba(0,0,0,0.15);
    }

    /* FADE UP */
    .fade-up {
        animation: fadeUp 1.2s ease forwards;
        opacity: 0;
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ZOOM IN */
    .zoom-in {
        animation: zoomIn 1.2s ease forwards;
        opacity: 0;
    }

    @keyframes zoomIn {
        from {
            opacity: 0;
            transform: scale(0.85);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* GLOW TEXT */
    .glow-text {
        text-shadow:
            0 0 8px rgba(34,197,94,0.5),
            0 0 20px rgba(34,197,94,0.3);
    }

    /* ANIMATED BACKGROUND */
    .animated-bg {
        background: linear-gradient(
            270deg,
            rgba(34,197,94,0.15),
            rgba(255,255,255,0.05),
            rgba(34,197,94,0.15)
        );
        background-size: 600% 600%;
        animation: gradientMove 12s ease infinite;
    }

    .testimonial-wrapper {
        position: relative;
    }

    .testimonial-carousel {
        display: flex;
        gap: 1.5rem;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        padding-bottom: 1rem;
        padding-inline: calc(50% - 210px);
    }

    .testimonial-carousel::-webkit-scrollbar {
        display: none;
    }

    .testimonial-card {
        scroll-snap-align: center;
        min-width: 320px;
        max-width: 420px;
        flex: 0 0 auto;
        background: #ffffff;
        border-radius: 28px;
        padding: 1.75rem;
        border: 1px solid rgba(34,197,94,0.12);
        box-shadow: 0 18px 40px rgba(15,23,42,0.08);
        transition: transform 0.35s ease, box-shadow 0.35s ease;
    }

    .testimonial-card.active-card {
        transform: translateY(-10px) scale(1.04);
        box-shadow: 0 26px 52px rgba(15,23,42,0.16);
    }

    .testimonial-card .avatar {
        width: 64px;
        height: 64px;
        border-radius: 9999px;
        overflow: hidden;
        background: #e6f5ea;
        border: 2px solid rgba(34,197,94,0.18);
        margin-bottom: 1rem;
    }

    .testimonial-card .avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .testimonial-card .quote {
        font-size: 1rem;
        color: #0f172a;
        line-height: 1.85;
        margin-bottom: 1rem;
    }

    .testimonial-card .card-text h3 {
        font-size: 1.05rem;
        margin-bottom: 0.35rem;
        font-weight: 700;
    }

    .testimonial-card .card-text p.role {
        margin: 0;
        color: #6b7280;
        font-size: 0.88rem;
    }

    .testimonial-controls {
        display: flex;
        justify-content: center;
        gap: 0.75rem;
        margin-top: 1.25rem;
    }

    .testimonial-dot {
        width: 12px;
        height: 12px;
        border-radius: 9999px;
        background: #d1d5db;
        transition: background 0.3s ease;
    }

    .testimonial-dot.active {
        background: #16a34a;
    }

    .testimonial-nav-button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        display: grid;
        place-items: center;
        width: 52px;
        height: 52px;
        border-radius: 9999px;
        background: #ffffff;
        border: 0;
        box-shadow: 0 10px 28px rgba(2,6,23,0.09);
        cursor: pointer;
        transition: transform 0.18s ease, box-shadow 0.18s ease;
        z-index: 10;
    }

    .testimonial-nav-button:hover {
        transform: translateY(-50%) scale(1.06);
        box-shadow: 0 18px 44px rgba(2,6,23,0.12);
    }

    .testimonial-nav-button.left {
        left: -20px;
    }

    .testimonial-nav-button.right {
        right: -20px;
    }

    @media (max-width: 640px) {
        .testimonial-carousel { padding-inline: 1rem; }
        .testimonial-nav-button.left { left: 6px; }
        .testimonial-nav-button.right { right: 6px; }
    }

    @keyframes gradientMove {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    /* BUTTON SHINE */
    .btn-shine {
        position: relative;
        overflow: hidden;
    }

    .btn-shine::before {
        content: '';
        position: absolute;
        top: 0;
        left: -120%;
        width: 50%;
        height: 100%;
        background: rgba(255,255,255,0.35);
        transform: skewX(-25deg);
    }

    .btn-shine:hover::before {
        animation: shine 0.9s forwards;
    }

    @keyframes shine {
        100% {
            left: 150%;
        }
    }

    /* ROTATE BLOB */
    .rotate-slow {
        animation: rotateSlow 20s linear infinite;
    }

    @keyframes rotateSlow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
        duration: 1000,
        once: true,
        offset: 100
    });
    initTestimonialCarousel();
});

function toggleMenu() {
    document.getElementById('mobileMenu').classList.toggle('hidden');
}

function initTestimonialCarousel() {
    const carousel = document.querySelector('.testimonial-carousel');
    if (!carousel) return;

    const dots = document.querySelectorAll('.testimonial-dot');
    let currentIndex = 0;
    let autoSlide = null;
    let isDragging = false;
    let startX = 0;
    let scrollStart = 0;

    const updateActiveDot = index => {
        dots.forEach((dot, idx) => dot.classList.toggle('active', idx === index));
    };

    const scrollToIndex = index => {
        const cards = carousel.querySelectorAll('.testimonial-card');
        if (!cards.length) return;
        currentIndex = (index + cards.length) % cards.length;
        const card = cards[currentIndex];
        const targetLeft = Math.max(0, card.offsetLeft - (carousel.offsetWidth / 2 - card.offsetWidth / 2));
        carousel.scrollTo({ left: targetLeft, behavior: 'smooth' });
        updateActiveDot(currentIndex);
    };

    const updateCentered = () => {
        const cards = carousel.querySelectorAll('.testimonial-card');
        if (!cards.length) return;
        const center = carousel.scrollLeft + carousel.offsetWidth / 2;
        let closest = 0;
        let closestDist = Infinity;
        cards.forEach((card, idx) => {
            const cardCenter = card.offsetLeft + card.offsetWidth / 2;
            const dist = Math.abs(center - cardCenter);
            if (dist < closestDist) {
                closestDist = dist;
                closest = idx;
            }
            card.classList.remove('active-card');
        });
        cards[closest].classList.add('active-card');
        currentIndex = closest;
        updateActiveDot(currentIndex);
    };

    let scrollTimeout;
    carousel.addEventListener('scroll', () => {
        updateCentered();
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
            scrollToIndex(currentIndex);
        }, 120);
    });

    const startAutoSlide = () => {
        clearInterval(autoSlide);
        autoSlide = setInterval(() => scrollToIndex(currentIndex + 1), 3800);
    };

    carousel.addEventListener('pointerdown', e => {
        isDragging = true;
        carousel.setPointerCapture(e.pointerId);
        startX = e.pageX;
        scrollStart = carousel.scrollLeft;
        clearInterval(autoSlide);
    });

    carousel.addEventListener('pointermove', e => {
        if (!isDragging) return;
        const delta = startX - e.pageX;
        carousel.scrollLeft = scrollStart + delta;
    });

    carousel.addEventListener('pointerup', () => {
        isDragging = false;
        startAutoSlide();
    });

    carousel.addEventListener('pointerleave', () => {
        if (isDragging) {
            isDragging = false;
            startAutoSlide();
        }
    });

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => scrollToIndex(index));
    });

    const prevButton = document.querySelector('.testimonial-prev');
    const nextButton = document.querySelector('.testimonial-next');

    if (prevButton) {
        prevButton.addEventListener('click', () => scrollToIndex(currentIndex - 1));
    }

    if (nextButton) {
        nextButton.addEventListener('click', () => scrollToIndex(currentIndex + 1));
    }

    updateCentered();
    startAutoSlide();
}
</script>

<!-- NAVBAR -->
<nav class="shadow-sm bg-white sticky top-0 z-50">
    <div class="container-custom py-5">
        <div class="flex items-center justify-between">

            <a href="/" class="flex items-center hover:scale-105 transition duration-300">
            <img
                src="{{ asset('images/logo enviro.png') }}"
                alt="Enviroakualita Logo"
                class="w-48 h-auto object-contain"
            >
        </a>

            <div class="hidden md:flex items-center gap-8">
                <ul class="flex gap-8 font-medium">
                    <li><a href="/tentang-kami" class="hover:text-green-700">Tentang Kami</a></li>
                    <li><a href="/layanan" class="hover:text-green-700">Layanan</a></li>
                    <li><a href="/gallery" class="hover:text-green-700">Media</a></li>
                </ul>

                <a href="/pendaftaran">
                    <button class="bg-green-700 text-white px-5 py-2 rounded-lg btn-shine">
                        Daftar Sekarang
                    </button>
                </a>
            </div>

            <button onclick="toggleMenu()" class="md:hidden text-green-700">
                ☰
            </button>
        </div>

        <div id="mobileMenu" class="hidden md:hidden mt-5">
            <ul class="flex flex-col gap-4">
                <li><a href="/tentang-kami">Tentang Kami</a></li>
                <li><a href="/layanan">Layanan</a></li>
                <li><a href="/gallery">Media</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="relative min-h-screen overflow-hidden">

    <img
        src="https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?q=80&w=2070&auto=format&fit=crop"
        class="absolute inset-0 w-full h-full object-cover"
    >

    <div class="absolute inset-0 bg-black/50 animated-bg"></div>

    <!-- blob -->
    <div class="absolute top-20 left-10 w-40 h-40 bg-green-400/20 rounded-full blur-3xl rotate-slow"></div>
    <div class="absolute bottom-20 right-10 w-56 h-56 bg-emerald-300/20 rounded-full blur-3xl rotate-slow"></div>

    <div class="relative z-10 container-custom min-h-screen flex flex-col justify-center items-center text-center py-20">

        <p class="uppercase tracking-[4px] text-green-300 mb-5 fade-up">
            Energy • Environment • Sustainability
        </p>

        <h1 class="text-4xl md:text-7xl font-bold text-white max-w-5xl mb-8 fade-up glow-text">
            Belajar Peduli Lingkungan
            dengan Cara yang Tepat
        </h1>

        <p class="text-lg text-gray-200 max-w-3xl mb-10 fade-up">
            Kami menyediakan pelatihan lingkungan untuk membantu Anda memahami
            prinsip keberlanjutan dalam kehidupan sehari-hari maupun dunia kerja.
        </p>

        <!-- search -->
        <div class="bg-white/15 backdrop-blur-md border border-white/20 rounded-full p-3 w-full max-w-2xl shadow-2xl floating zoom-in">
            <div class="flex flex-col md:flex-row gap-3">
                <input
                    type="text"
                    placeholder="Cari pelatihan atau layanan..."
                    class="flex-1 bg-transparent outline-none text-white placeholder-gray-200 px-4 py-3"
                >

                <button class="bg-green-600 text-white px-8 py-3 rounded-full btn-shine">
                    Search
                </button>
            </div>
        </div>

        <div class="mt-8">
            <a href="/pendaftaran">
                <button class="border border-white text-white px-8 py-4 rounded-full hover:bg-white hover:text-black transition btn-shine">
                    Daftar Sekarang
                </button>
            </a>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section class="container-custom py-24">
    <div class="grid md:grid-cols-2 gap-10 items-center">

        <div data-aos="fade-right">
            <h2 class="text-4xl font-bold mb-6">
                Belajar Peduli Lingkungan dengan Cara yang Tepat
            </h2>
            <p class="text-gray-600 mb-6">
                Kami menyediakan pelatihan lingkungan untuk memahami prinsip keberlanjutan.
            </p>
            <button class="bg-green-700 text-white px-6 py-3 rounded-lg btn-shine">
                See Details
            </button>
        </div>

        <div data-aos="zoom-in">
            <img
                src="https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?q=80&w=1200"
                class="rounded-2xl shadow-lg floating"
            >
        </div>
    </div>
</section>

<!-- SERVICES -->
<section class="bg-gray-100 py-24">
    <div class="container-custom">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4">Environmental Compliance</h2>
            <p class="text-gray-600">500+ Another Project</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-white p-6 rounded-2xl shadow hover-lift" data-aos="fade-up">
                <h3 class="text-2xl font-semibold mb-4 text-green-700">Sustainability</h3>
                <p class="text-gray-600">Pendekatan kami selalu mengutamakan praktik berkelanjutan yang mudah diterapkan.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow hover-lift" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-2xl font-semibold mb-4 text-green-700">Training</h3>
                <p class="text-gray-600">Materi yang disiapkan sesuai kebutuhan tim dan target lingkungan organisasi.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow hover-lift" data-aos="fade-up" data-aos-delay="400">
                <h3 class="text-2xl font-semibold mb-4 text-green-700">Consulting</h3>
                <p class="text-gray-600">Pendampingan lengkap mulai analisis hingga evaluasi implementasi.</p>
            </div>

        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="bg-green-50 py-24">
    <div class="container-custom">
        <div class="text-center mb-12" data-aos="fade-up">
            <p class="uppercase tracking-[4px] text-green-700 mb-3 font-semibold">Kenapa Memilih Kami</p>
            <h2 class="text-4xl font-bold">Layanan Lingkungan dengan Dampak Nyata</h2>
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">Kami membantu organisasi Anda bergerak lebih cepat menuju target keberlanjutan dengan metode yang mudah dipahami dan diterapkan.</p>
        </div>

        <div class="grid gap-6 md:grid-cols-4">
            <div class="bg-white rounded-3xl p-6 shadow hover-lift" data-aos="fade-up">
                <div class="flex items-center justify-center h-16 w-16 mx-auto mb-4 rounded-2xl bg-green-50 text-green-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8c0-1.38 1.61-3 4-3s4 1.62 4 3c0 1.38-1.61 3-4 3S7 9.38 7 8zM7 8c0 1.38 1.61 3 4 3s4-1.62 4-3M7 8v8.5c0 1.38 1.61 2.5 4 2.5s4-1.12 4-2.5V8" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Praktis & Efektif</h3>
                <p class="text-gray-600">Solusi kami didesain agar bisa langsung diterapkan di lapangan dan memberikan hasil cepat.</p>
            </div>
            <div class="bg-white rounded-3xl p-6 shadow hover-lift" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center justify-center h-16 w-16 mx-auto mb-4 rounded-2xl bg-green-50 text-green-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9M12 4h9M3 6h10M3 12h10M3 18h10" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Pelatihan Terstruktur</h3>
                <p class="text-gray-600">Sesi terarah dan modul lengkap untuk meningkatkan kompetensi tim Anda.</p>
            </div>
            <div class="bg-white rounded-3xl p-6 shadow hover-lift" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center justify-center h-16 w-16 mx-auto mb-4 rounded-2xl bg-green-50 text-green-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 12h6M11 16h4M11 8h2M6 20V10a1 1 0 011-1h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V20H6z" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Data dan Evaluasi</h3>
                <p class="text-gray-600">Setiap program dilengkapi laporan progress untuk pengambilan keputusan yang lebih baik.</p>
            </div>
            <div class="bg-white rounded-3xl p-6 shadow hover-lift" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center justify-center h-16 w-16 mx-auto mb-4 rounded-2xl bg-green-50 text-green-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5V9a2 2 0 00-2-2h-3m-4 13H6a2 2 0 01-2-2v-8a2 2 0 012-2h4.5l2 2H19a2 2 0 012 2v4m-7 4v-4H7" />
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3">Pendampingan Personal</h3>
                <p class="text-gray-600">Tim kami siap mendampingi dari awal hingga evaluasi berkelanjutan.</p>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="bg-white py-24">
    <div class="container-custom">
        <div class="text-center mb-12" data-aos="fade-up">
            <p class="uppercase tracking-[4px] text-green-700 mb-3 font-semibold">Testimoni</p>
            <h2 class="text-4xl font-bold">Suara Klien Kami</h2>
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">Mereka telah merasakan perubahan setelah mengikuti pelatihan dan konsultasi dari Enviroakualita.</p>
        </div>

        <div class="testimonial-wrapper" data-aos="fade-up">
            <button class="testimonial-nav-button left testimonial-prev" aria-label="Sebelumnya">‹</button>
            <div class="testimonial-carousel">
                <div class="testimonial-card">
                    <div class="avatar">
                        <img src="https://i.pravatar.cc/150?img=32" alt="Rina">
                    </div>
                    <div class="card-text">
                        <p class="quote">"Pelatihan Enviroakualita membuat tim kami lebih memahami cara kerja lingkungan. Materinya jelas dan langsung bisa kami terapkan."</p>
                        <h3>Rina Safitri</h3>
                        <p class="role">Manajer CSR</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="avatar">
                        <img src="https://i.pravatar.cc/150?img=12" alt="Aditya">
                    </div>
                    <div class="card-text">
                        <p class="quote">"Audit lingkungan dari Enviroakualita memberi kami insight yang membuat proses operasional jadi lebih ramah lingkungan dan efisien."</p>
                        <h3>Aditya Prakoso</h3>
                        <p class="role">Pemilik Usaha</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="avatar">
                        <img src="https://i.pravatar.cc/150?img=18" alt="Nadia">
                    </div>
                    <div class="card-text">
                        <p class="quote">"Pendekatan konsultasinya personal dan sangat membantu, terutama untuk tim yang baru ingin memulai program sustainability."</p>
                        <h3>Nadia Putri</h3>
                        <p class="role">Koordinator Komunitas</p>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="avatar">
                        <img src="https://i.pravatar.cc/150?img=22" alt="Bayu">
                    </div>
                    <div class="card-text">
                        <p class="quote">"Programnya lengkap, dari pelatihan hingga evaluasi, jadi kami bisa menjaga komitmen perusahaan terhadap lingkungan."</p>
                        <h3>Bayu Santoso</h3>
                        <p class="role">Supervisor Operasional</p>
                    </div>
                </div>
            </div>
            <button class="testimonial-nav-button right testimonial-next" aria-label="Selanjutnya">›</button>
        </div>

        <div class="testimonial-controls" data-aos="fade-up">
            <button class="testimonial-dot active"></button>
            <button class="testimonial-dot"></button>
            <button class="testimonial-dot"></button>
            <button class="testimonial-dot"></button>
        </div>
    </div>
</section>


@endsection