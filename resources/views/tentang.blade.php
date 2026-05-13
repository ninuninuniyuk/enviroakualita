@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<style>
    body {
        scroll-behavior: smooth;
        font-family: Arial, sans-serif;
    }

    /* floating */
    .floating {
        animation: floating 4s ease-in-out infinite;
    }

    @keyframes floating {
        0%,100% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
    }

    /* fade up */
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

    /* glow */
    .glow-text {
        text-shadow:
            0 0 10px rgba(34,197,94,0.35),
            0 0 20px rgba(34,197,94,0.15);
    }

    /* hover card */
    .hover-card {
        transition: all 0.4s ease;
    }

    .hover-card:hover {
        transform: translateY(-10px) scale(1.03);
        box-shadow: 0 20px 35px rgba(0,0,0,0.15);
    }

    /* animated button shine */
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
        animation: shine 0.8s forwards;
    }

    @keyframes shine {
        100% {
            left: 150%;
        }
    }

    /* rotating blob */
    .rotate-slow {
        animation: rotateSlow 18s linear infinite;
    }

    @keyframes rotateSlow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    /* gradient bg */
    .animated-bg {
        background: linear-gradient(
            270deg,
            rgba(34,197,94,0.08),
            rgba(255,255,255,0.04),
            rgba(34,197,94,0.08)
        );
        background-size: 500% 500%;
        animation: gradientMove 10s ease infinite;
    }

    @keyframes gradientMove {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
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

<!-- Navbar -->
<nav class="shadow-sm bg-white sticky top-0 z-50">
    <div class="container-custom py-5">
        <div class="flex items-center justify-between">

            <a href="/"
               class="text-xl md:text-2xl font-bold text-green-700 hover:scale-105 transition duration-300">
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

            <button onclick="toggleMenu()" class="md:hidden text-green-700 text-2xl">
                ☰
            </button>
        </div>

        <div id="mobileMenu" class="hidden md:hidden mt-5">
            <ul class="flex flex-col gap-4 font-medium">
                <li><a href="/tentang-kami">Tentang Kami</a></li>
                <li><a href="/layanan">Layanan</a></li>
                <li><a href="/gallery">Media</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="relative overflow-hidden animated-bg">
    <div class="absolute top-20 left-10 w-44 h-44 bg-green-300/20 rounded-full blur-3xl rotate-slow"></div>
    <div class="absolute bottom-10 right-10 w-56 h-56 bg-emerald-300/20 rounded-full blur-3xl rotate-slow"></div>

    <div class="container-custom py-24">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <div class="fade-up">
                <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-8 glow-text">
                    Tentang Enviroakualita
                </h1>

                <p class="text-gray-600 leading-8 mb-6">
                    Enviro Akualita adalah platform edukasi dan pelatihan yang
                    berfokus pada peningkatan kesadaran serta kompetensi di bidang
                    lingkungan hidup.
                </p>

                <p class="text-gray-600 leading-8 mb-6">
                    Kami hadir untuk membantu individu dan organisasi dalam
                    memahami pentingnya pengelolaan lingkungan secara berkelanjutan.
                </p>

                <p class="text-gray-600 leading-8">
                    Kami percaya bahwa perubahan dimulai dari individu.
                    Oleh karena itu, kami menyediakan program pelatihan yang
                    relevan, aplikatif, dan sesuai kebutuhan saat ini.
                </p>
            </div>

            <div data-aos="zoom-in">
                <img
                    src="https://images.unsplash.com/photo-1511497584788-876760111969?q=80&w=1200&auto=format&fit=crop"
                    class="rounded-3xl shadow-xl w-full floating"
                >
            </div>
        </div>
    </div>
</section>

<!-- BENEFIT -->
<section class="bg-gray-100">
    <div class="container-custom py-24">

        <div class="text-center mb-14" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Edukasi yang Berdampak
            </h2>

            <p class="text-gray-600">
                Enviroakualita Trusted and Curated by The Media
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <div class="bg-white p-8 rounded-3xl shadow hover-card" data-aos="fade-up">
                <h3 class="text-xl md:text-2xl font-bold mb-4 text-green-700">
                    Edukasi Relevan
                </h3>
                <p class="text-gray-600 leading-7">
                    Materi disusun berdasarkan isu lingkungan terkini.
                </p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow hover-card" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl md:text-2xl font-bold mb-4 text-green-700">
                    Praktis & Aplikatif
                </h3>
                <p class="text-gray-600 leading-7">
                    Menggunakan studi kasus nyata agar mudah diterapkan.
                </p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow hover-card" data-aos="fade-up" data-aos-delay="400">
                <h3 class="text-xl md:text-2xl font-bold mb-4 text-green-700">
                    Berdampak Nyata
                </h3>
                <p class="text-gray-600 leading-7">
                    Mendorong perubahan perilaku ramah lingkungan.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="container-custom py-24 text-center" data-aos="zoom-in">

    <h2 class="text-3xl md:text-5xl font-bold mb-6 glow-text">
        Siap Jadi Bagian dari Perubahan?
    </h2>

    <p class="text-gray-600 max-w-3xl mx-auto leading-8 mb-10">
        Temukan pelatihan yang sesuai dengan kebutuhan Anda dan mulai
        berkontribusi dalam menjaga lingkungan hari ini.
    </p>

    <a href="/pendaftaran">
        <button class="bg-green-700 text-white px-8 py-4 rounded-xl text-lg btn-shine">
            Mulai Sekarang
        </button>
    </a>
</section>

<!-- CONTACT -->
<section class="bg-gray-100">
    <div class="container-custom py-24">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">

            <div data-aos="fade-right">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">
                    Support
                </h2>

                <p class="text-gray-600 leading-7">
                    Lokasi Environesia
                </p>
            </div>

            <form class="space-y-5" data-aos="fade-left">
                <input type="text" placeholder="Nama"
                    class="w-full p-4 rounded-xl border border-gray-300">

                <input type="email" placeholder="Email"
                    class="w-full p-4 rounded-xl border border-gray-300">

                <textarea rows="5" placeholder="Pesan"
                    class="w-full p-4 rounded-xl border border-gray-300"></textarea>

                <button class="bg-green-700 text-white px-8 py-3 rounded-xl btn-shine">
                    Kirim
                </button>
            </form>

        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-green-900 text-white text-center py-8">
    <p>© 2026 Enviroakualita. All Rights Reserved.</p>
</footer>

@endsection