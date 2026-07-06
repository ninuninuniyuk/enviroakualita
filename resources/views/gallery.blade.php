@extends('layouts.app')

@section('title', 'Gallery')

@section('content')

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<style>
    body {
        font-family: Arial, sans-serif;
        scroll-behavior: smooth;
    }

    /* floating */
    .floating {
        animation: floating 4s ease-in-out infinite;
    }

    @keyframes floating {
        0%,100% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
    }

    /* glow text */
    .glow-text {
        text-shadow:
            0 0 10px rgba(34,197,94,0.35),
            0 0 20px rgba(34,197,94,0.15);
    }

    /* card hover */
    .card-hover {
        transition: all 0.4s ease;
    }

    .card-hover:hover {
        transform: translateY(-10px) scale(1.02);
        box-shadow: 0 20px 35px rgba(0,0,0,0.14);
    }

    /* zoom image */
    .zoom-img {
        overflow: hidden;
    }

    .zoom-img img {
        transition: transform 0.6s ease;
    }

    .zoom-img:hover img {
        transform: scale(1.08);
    }

    /* button shine */
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
        100% { left: 150%; }
    }

    /* rotating blob */
    .rotate-slow {
        animation: rotateSlow 18s linear infinite;
    }

    @keyframes rotateSlow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    /* animated bg */
    .animated-bg {
        background: linear-gradient(
            270deg,
            rgba(34,197,94,0.08),
            rgba(255,255,255,0.03),
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
        duration: 900,
        once: true
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

            <a href="/" class="flex items-center hover:scale-105 transition duration-300">
            <img
                src="{{ asset('images/logo enviro.png') }}"
                alt="Enviroakualita Logo"
                class="w-48 h-auto object-contain"
            >
        </a>

            <div class="hidden md:flex items-center gap-8">
                <ul class="flex gap-8 font-medium">
                    <li>
                        <a href="/tentang-kami"
                        class="{{ request()->is('tentang-kami') ? 'text-green-700 font-bold' : 'hover:text-green-700' }}">
                            Tentang Kami
                        </a>
                    </li>

                    <li>
                        <a href="/layanan"
                        class="{{ request()->is('layanan') ? 'text-green-700 font-bold' : 'hover:text-green-700' }}">
                            Layanan
                        </a>
                    </li>

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

                <a href="/">
                    <button class="bg-gradient-to-r from-[#9ACA40] to-[#146032] text-white px-5 py-2 rounded-lg btn-shine">
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
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/news">News</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="relative animated-bg overflow-hidden">
    <div class="absolute top-20 left-10 w-44 h-44 bg-green-300/20 rounded-full blur-3xl rotate-slow"></div>
    <div class="absolute bottom-10 right-10 w-56 h-56 bg-emerald-300/20 rounded-full blur-3xl rotate-slow"></div>

    <div class="container-custom py-24 grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

        <div data-aos="fade-right">
            <p class="uppercase tracking-[4px] text-green-700 font-semibold mb-4">
                Media & Documentation
            </p>

            <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-6 text-gray-900">
                Jejak Kegiatan &
                Dokumentasi Kami
            </h1>

            <p class="text-gray-600 leading-8 mb-8 text-lg">
                Dokumentasi berbagai pelatihan, audit lingkungan,
                konsultasi profesional, serta kegiatan keberlanjutan.
            </p>

            <div class="grid grid-cols-3 gap-6 max-w-md">
                <div>
                    <h2 class="text-3xl font-bold text-green-700">120+</h2>
                    <p class="text-gray-600">Dokumentasi</p>
                </div>

                <div>
                    <h2 class="text-3xl font-bold text-green-700">50+</h2>
                    <p class="text-gray-600">Project</p>
                </div>

                <div>
                    <h2 class="text-3xl font-bold text-green-700">30+</h2>
                    <p class="text-gray-600">Partner</p>
                </div>
            </div>
        </div>

        <div data-aos="fade-left">
            <img
                src="https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1200&auto=format&fit=crop"
                class="rounded-3xl shadow-2xl w-full h-[300px] md:h-[500px] object-cover floating"
            >
        </div>
    </div>
</section>

<!-- TITLE -->
<section class="py-20 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-3" data-aos="fade-up">
        Our Gallery
    </h2>
    <p class="text-gray-600" data-aos="fade-up">
        Aktivitas dan dokumentasi pilihan
    </p>
</section>

@php
$gallery = [
    [
        'image' => 'gambar1.png',
        'title' => 'Pelatihan ISO 14001',
        'description' => 'Kegiatan pelatihan sistem manajemen lingkungan bersama peserta dari berbagai perusahaan.'
    ],
    [
        'image' => 'gambar2.png',
        'title' => 'Audit Lingkungan',
        'description' => 'Pelaksanaan audit lingkungan untuk memastikan kepatuhan terhadap regulasi yang berlaku.'
    ],
    [
        'image' => 'gambar3.jpeg',
        'title' => 'Konsultasi Perusahaan',
        'description' => 'Sesi konsultasi terkait pengelolaan lingkungan dan keberlanjutan perusahaan.'
    ],
    [
        'image' => 'gambar5.jpeg',
        'title' => 'PPPU-POIPPU',
        'description' => 'Sesi konsultasi terkait pengelolaan lingkungan dan keberlanjutan perusahaan.'
    ],
];
@endphp

<!-- GALLERY -->
<section class="container-custom pb-20">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        @foreach ($gallery as $item)
        <div
            class="bg-white rounded-3xl overflow-hidden shadow-lg card-hover zoom-img"
            data-aos="zoom-in"
        >
            <img
                src="{{ asset('images/assets-media/' . $item['image']) }}"
                class="w-full h-64 object-cover"
                alt="{{ $item['title'] }}"
            >

            <div class="p-5">
                <h3 class="font-bold text-lg mb-2">
                    {{ $item['title'] }}
                </h3>

                <p class="text-gray-600 text-sm">
                    {{ $item['description'] }}
                </p>
            </div>
        </div>
        @endforeach

    </div>
</section>

<!-- CTA -->
<section class="container-custom mb-20">
    <div class="bg-gradient-to-r from-[#9ACA40] to-[#146032] rounded-3xl p-6 md:p-10 py-16 text-center text-white" data-aos="fade-up">

        <h2 class="text-3xl md:text-4xl font-bold mb-5">
            Ingin Menjadi Bagian dari Program Kami?
        </h2>

        <p class="max-w-3xl mx-auto leading-8 text-green-100 mb-8">
            Bergabung bersama kami dalam pelatihan, konsultasi,
            dan program lingkungan yang berdampak nyata.
        </p>

        <a href="/pendaftaran">
            <button class="bg-white text-green-700 px-8 py-4 rounded-xl font-semibold btn-shine">
                Gabung Sekarang
            </button>
        </a>
    </div>
</section>


@endsection