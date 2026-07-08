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
                    <li class="relative group">
                    <button class="flex items-center gap-1 hover:text-green-700 transition">
                        Media
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4 group-hover:rotate-180 transition duration-300"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown -->
                    <div class="absolute left-0 mt-3 w-48 bg-white rounded-xl shadow-xl border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-50">

                        <a href="/gallery"
                        class="block px-5 py-3 hover:bg-green-50 hover:text-green-700 rounded-t-xl">
                            Gallery
                        </a>

                        <a href="/news"
                        class="block px-5 py-3 hover:bg-green-50 hover:text-green-700 rounded-b-xl">
                            News
                        </a>

                    </div>

                </li>
                </ul>

                <a href="https://wa.me/+6289652767924">
                    <button class="bg-gradient-to-r from-[#9ACA40] to-[#146032] text-white px-5 py-2 rounded-lg btn-shine">
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
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/news">News</a></li>
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
    <div class="absolute top-20 left-10 w-40 h-40 bg-[#9ACA40]/20 rounded-full blur-3xl rotate-slow"></div>
    <div class="absolute bottom-20 right-10 w-56 h-56 bg-[#2B9048]/20 rounded-full blur-3xl rotate-slow"></div>

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

                <button class="bg-gradient-to-r from-[#9ACA40] to-[#146032] text-white px-8 py-3 rounded-full btn-shine">
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
                Apa Itu Audit Lingkungan?
            </h2>

            <p class="text-gray-600 mb-4">
                Audit lingkungan merupakan proses evaluasi yang dilakukan secara
                sistematis untuk menilai tingkat kepatuhan perusahaan terhadap
                peraturan lingkungan hidup, efektivitas pengelolaan lingkungan,
                serta potensi dampak yang ditimbulkan dari kegiatan operasional.
            </p>

            <p class="text-gray-600 mb-6">
                Melalui audit lingkungan, perusahaan dapat mengidentifikasi
                risiko, meningkatkan efisiensi penggunaan sumber daya,
                mengurangi potensi pencemaran, serta memastikan kegiatan usaha
                berjalan sesuai dengan standar dan regulasi yang berlaku.
            </p>

            <a href="/layanan">
                <button class="bg-gradient-to-r from-[#9ACA40] to-[#146032] text-white px-5 py-2 rounded-lg btn-shine">
                    Pelajari Layanan
                </button>
            </a>
        </div>

        <div data-aos="zoom-in">
            <img
                src="https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?q=80&w=1200"
                class="rounded-2xl shadow-lg floating"
            >
        </div>
    </div>
</section>

<section class="py-24 bg-gray-50">
    <div class="container-custom">

        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold">
                Bagaimana Proses Audit Lingkungan Dilakukan?
            </h2>
        </div>

        <div class="grid md:grid-cols-4 gap-8">

            <div class="text-center">
                <div class="bg-green-700 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                    1
                </div>
                <h3 class="font-semibold mb-2">Identifikasi</h3>
                <p class="text-gray-600">
                    Mengumpulkan data dan dokumen perusahaan.
                </p>
            </div>

            <div class="text-center">
                <div class="bg-green-700 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                    2
                </div>
                <h3 class="font-semibold mb-2">Evaluasi</h3>
                <p class="text-gray-600">
                    Menilai kesesuaian terhadap regulasi lingkungan.
                </p>
            </div>

            <div class="text-center">
                <div class="bg-green-700 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                    3
                </div>
                <h3 class="font-semibold mb-2">Analisis</h3>
                <p class="text-gray-600">
                    Mengidentifikasi risiko dan peluang perbaikan.
                </p>
            </div>

            <div class="text-center">
                <div class="bg-green-700 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl font-bold">
                    4
                </div>
                <h3 class="font-semibold mb-2">Rekomendasi</h3>
                <p class="text-gray-600">
                    Memberikan laporan dan solusi tindak lanjut.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- BENEFITS -->
<section class="bg-white py-24">
    <div class="container-custom">

        <div class="text-center mb-14">
            <h2 class="text-4xl font-bold mb-4">
                Manfaat Audit Lingkungan
            </h2>
            <p class="text-gray-600 max-w-3xl mx-auto">
                Audit lingkungan membantu perusahaan meningkatkan kinerja
                lingkungan sekaligus mendukung keberlanjutan bisnis dalam
                jangka panjang.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">

            <div class="bg-[#FFF664]/15 p-8 rounded-2xl shadow hover-lift border border-[#FFF664]/30">
                <h3 class="text-xl font-semibold mb-3 text-[#2B9048]">
                    Kepatuhan Regulasi
                </h3>
                <p class="text-gray-600">
                    Memastikan perusahaan memenuhi peraturan dan standar
                    lingkungan yang berlaku.
                </p>
            </div>

            <div class="bg-[#FFF664]/15 p-8 rounded-2xl shadow hover-lift border border-[#FFF664]/30">
                <h3 class="text-xl font-semibold mb-3 text-[#2B9048]">
                    Mengurangi Risiko
                </h3>
                <p class="text-gray-600">
                    Mengidentifikasi potensi pelanggaran dan dampak lingkungan
                    sebelum menjadi masalah yang lebih besar.
                </p>
            </div>

            <div class="bg-[#FFF664]/15 p-8 rounded-2xl shadow hover-lift border border-[#FFF664]/30">
                <h3 class="text-xl font-semibold mb-3 text-[#2B9048]">
                    Efisiensi Operasional
                </h3>
                <p class="text-gray-600">
                    Membantu mengoptimalkan penggunaan energi, air, dan sumber
                    daya lainnya.
                </p>
            </div>

            <div class="bg-[#FFF664]/15 p-8 rounded-2xl shadow hover-lift border border-[#FFF664]/30">
                <h3 class="text-xl font-semibold mb-3 text-[#2B9048]">
                    Reputasi Perusahaan
                </h3>
                <p class="text-gray-600">
                    Meningkatkan kepercayaan masyarakat, pelanggan, dan investor
                    terhadap komitmen lingkungan perusahaan.
                </p>
            </div>

            <div class="bg-[#FFF664]/15 p-8 rounded-2xl shadow hover-lift border border-[#FFF664]/30">
                <h3 class="text-xl font-semibold mb-3 text-[#2B9048]">
                    Perbaikan Berkelanjutan
                </h3>
                <p class="text-gray-600">
                    Memberikan rekomendasi untuk meningkatkan sistem pengelolaan
                    lingkungan secara terus-menerus.
                </p>
            </div>

            <div class="bg-[#FFF664]/15 p-8 rounded-2xl shadow hover-lift border border-[#FFF664]/30">
                <h3 class="text-xl font-semibold mb-3 text-[#2B9048]">
                    Mendukung ESG
                </h3>
                <p class="text-gray-600">
                    Membantu perusahaan memenuhi target Environmental, Social,
                    and Governance (ESG).
                </p>
            </div>

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
<section class="bg-[#F9FDE8] py-24">
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
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">Mereka telah merasakan perubahan setelah mengikuti pelatihan dan konsultasi dari Envirokualita.</p>
        </div>

        <div class="testimonial-wrapper" data-aos="fade-up">
            <button class="testimonial-nav-button left testimonial-prev" aria-label="Sebelumnya">‹</button>
            <div class="testimonial-carousel">
                @forelse($testimonials as $t)
                <div class="testimonial-card">
                    <div class="card-text">
                        <p class="quote">"{{ $t->quote }}"</p>
                        <h3>{{ $t->name }}</h3>
                        <p class="role">{{ $t->role }}</p>
                    </div>
                </div>
                @empty
                    <p class="text-gray-500 text-center w-full">Belum ada testimoni.</p>
                @endforelse
            </div>
            <button class="testimonial-nav-button right testimonial-next" aria-label="Selanjutnya">›</button>
        </div>

        <div class="testimonial-controls">
            @foreach($testimonials as $index => $t)
                <button class="testimonial-dot {{ $index === 0 ? 'active' : '' }}"></button>
            @endforeach
        </div>
    </div>
</section>

<!-- Instagram Feed -->
<section class="py-24 bg-gray-50">
    <div class="container-custom">

        <div class="text-center mb-12" data-aos="fade-up">
            <p class="uppercase tracking-[4px] text-green-700 mb-3 font-semibold">Instagram Kami</p>
            <h2 class="text-4xl font-bold">Ikuti Aktivitas Terbaru Kami</h2>
            <p class="text-gray-600 mt-3 max-w-2xl mx-auto">Dapatkan informasi dan dokumentasi kegiatan terbaru melalui Instagram resmi kami.</p>
        </div>

        <!-- Profile Header -->
        <div class="bg-white rounded-3xl p-6 md:p-8 mb-8 shadow-md flex items-center justify-between flex-wrap gap-5 transition duration-300 hover:shadow-xl hover:-translate-y-1" data-aos="fade-up">
            <div class="flex items-center gap-5">
                <div class="relative flex-shrink-0">
                    <div class="w-[72px] h-[72px] rounded-full p-[3px] bg-gradient-to-tr from-[#9ACA40] via-[#2B9048] to-[#146032]">
                        <img src="{{ asset('images/logo-ig-envirokualita.jpeg') }}"
                             class="w-full h-full rounded-full border-2 border-white object-cover">
                    </div>
                    <div class="absolute -bottom-1 -right-1 bg-white rounded-full p-1 shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#146032]" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 011.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 01-1.153 1.772 4.915 4.915 0 01-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 01-1.772-1.153 4.904 4.904 0 01-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.065.217-1.79.465-2.428a4.88 4.88 0 011.153-1.772A4.897 4.897 0 015.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 100 10 5 5 0 000-10zm0 8.25a3.25 3.25 0 110-6.5 3.25 3.25 0 010 6.5zm5.35-8.65a1.175 1.175 0 100-2.35 1.175 1.175 0 000 2.35z"/>
                        </svg>
                    </div>
                </div>

                <div>
                    <h3 class="font-bold text-lg leading-snug">Jasa Audit Lingkungan Hidup | Training & Consulting</h3>
                    <p class="text-gray-500">@envirokualita</p>

                    <!-- Statistik -->
                    <div class="flex gap-6 mt-2 text-sm">
                        <div>
                            <span class="font-bold text-gray-800">59</span>
                            <span class="text-gray-500">Postingan</span>
                        </div>

                        <div>
                            <span class="font-bold text-gray-800">1.303</span>
                            <span class="text-gray-500">Pengikut</span>
                        </div>

                        <div>
                            <span class="font-bold text-gray-800">5</span>
                            <span class="text-gray-500">Diikuti</span>
                        </div>
                    </div>
                </div>
            </div>

            <a href="https://www.instagram.com/envirokualita?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
               target="_blank"
               class="bg-gradient-to-r from-[#9ACA40] to-[#146032] text-white px-6 py-2.5 rounded-xl font-semibold btn-shine whitespace-nowrap">
                Follow
            </a>
        </div>

        <!-- Grid Postingan -->
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">

            <a href="https://www.instagram.com/p/Dacu6WhknpQ/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank"
               class="group relative block aspect-square overflow-hidden rounded-2xl shadow-lg" data-aos="fade-up">
                <img src="{{ asset('images/assets-news/news35.jpeg') }}"
                     alt="Instagram Post 1"
                     class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/0 to-black/0 opacity-0 group-hover:opacity-100 transition duration-300 flex items-end justify-center pb-5">
                    <span class="text-white font-semibold text-sm flex items-center gap-2">
                        Lihat Postingan
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </span>
                </div>
            </a>

            <a href="https://www.instagram.com/p/DaVK_NCEh4X/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank"
               class="group relative block aspect-square overflow-hidden rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="150">
                <img src="{{ asset('images/post-rekap1.jpeg') }}"
                     alt="Instagram Post 2"
                     class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/0 to-black/0 opacity-0 group-hover:opacity-100 transition duration-300 flex items-end justify-center pb-5">
                    <span class="text-white font-semibold text-sm flex items-center gap-2">
                        Lihat Postingan
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </span>
                </div>
            </a>

            <a href="https://www.instagram.com/p/DaSUoT7E3R7/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank"
               class="group relative block aspect-square overflow-hidden rounded-2xl shadow-lg col-span-2 md:col-span-1" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('images/assets-news/news34.jpeg') }}"
                     alt="Instagram Post 3"
                     class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/0 to-black/0 opacity-0 group-hover:opacity-100 transition duration-300 flex items-end justify-center pb-5">
                    <span class="text-white font-semibold text-sm flex items-center gap-2">
                        Lihat Postingan
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </span>
                </div>
            </a>

        </div>

        <div class="text-center mt-8" data-aos="fade-up">
            <a href="https://www.instagram.com/envirokualita" target="_blank"
               class="inline-flex items-center gap-2 text-[#146032] font-semibold hover:gap-3 transition-all duration-300">
                Lihat Semua di Instagram
                <span>→</span>
            </a>
        </div>

    </div>
</section>


@endsection