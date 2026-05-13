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
});

function toggleMenu() {
    document.getElementById('mobileMenu').classList.toggle('hidden');
}
</script>

<!-- NAVBAR -->
<nav class="shadow-sm bg-white sticky top-0 z-50">
    <div class="container-custom py-5">
        <div class="flex items-center justify-between">

            <a href="/" class="text-xl md:text-2xl font-bold text-green-700 pulse-slow">
                Enviroakualita
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
                <h3 class="text-2xl font-semibold mb-4">Sustainability</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow hover-lift" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-2xl font-semibold mb-4">Training</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet.</p>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow hover-lift" data-aos="fade-up" data-aos-delay="400">
                <h3 class="text-2xl font-semibold mb-4">Consulting</h3>
                <p class="text-gray-600">Lorem ipsum dolor sit amet.</p>
            </div>

        </div>
    </div>
</section>

<!-- CONTACT -->
<section class="container-custom py-24">
    <div class="grid md:grid-cols-2 gap-10">

        <div data-aos="fade-right">
            <h2 class="text-4xl font-bold mb-6">Support</h2>
            <p class="text-gray-600">Lokasi Environesia</p>
        </div>

        <form class="space-y-5" data-aos="fade-left">
            <input type="text" placeholder="Nama" class="w-full border p-4 rounded-lg">
            <input type="email" placeholder="Email" class="w-full border p-4 rounded-lg">
            <textarea placeholder="Pesan" rows="5" class="w-full border p-4 rounded-lg"></textarea>

            <button class="bg-green-700 text-white px-6 py-3 rounded-lg btn-shine">
                Kirim
            </button>
        </form>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-green-900 text-white py-8 text-center">
    <p>© 2026 Environesia. All Rights Reserved.</p>
</footer>

@endsection