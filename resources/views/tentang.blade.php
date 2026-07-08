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
        0 0 10px rgba(43,144,72,0.35),
        0 0 20px rgba(154,202,64,0.15);
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
        135deg,
        rgba(255,246,100,0.18) 0%,
        rgba(255,255,255,1) 45%,
        rgba(154,202,64,0.18) 75%,
        rgba(43,144,72,0.15) 100%
    );

    background-size: 250% 250%;
    animation: gradientMove 10s ease infinite;
}

    @keyframes gradientMove {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
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
                        class="{{ request()->is('tentang-kami') ? 'text-[#2B9048] font-bold' : 'hover:text-[#146032]' }}">
                            Tentang Kami
                        </a>
                    </li>

                    <li>
                        <a href="/layanan"
                        class="{{ request()->is('layanan') ? 'text-[#2B9048] font-bold' : 'hover:text-[#146032]' }}">
                            Layanan
                        </a>
                    </li>
                        <li class="relative group">

                        <button class="flex items-center gap-1 hover:text-[#146032] transition">
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
                            class="block px-5 py-3 hover:bg-green-50 hover:text-[#146032] rounded-t-xl">
                                Gallery
                            </a>

                            <a href="/news"
                            class="block px-5 py-3 hover:bg-green-50 hover:text-[#146032] rounded-b-xl">
                                News
                            </a>

                        </div>

                    </li>
                    </li>
                </ul>

                <a href="/">
                    <button class="bg-gradient-to-r from-[#9ACA40] to-[#146032] text-white px-5 py-2 rounded-lg btn-shine">
                        Daftar Sekarang
                    </button>
                </a>
            </div>

            <button onclick="toggleMenu()" class="md:hidden text-[#2B9048] text-2xl">
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
<section class="relative overflow-hidden animated-bg">
    <div class="absolute top-10 left-0 w-72 h-72 bg-[#FFF664]/20 rounded-full blur-[90px] rotate-slow"></div>
    <div class="absolute bottom-0 right-0 w-80 h-80 bg-[#2B9048]/15 rounded-full blur-[100px] rotate-slow"></div>
    <div class="container-custom py-24">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">

            <div
                class="max-w-xl mx-auto lg:mx-0"
                data-aos="fade-right"
            >
                <h1 class="text-4xl md:text-6xl font-bold leading-tight mb-8">
                    Tentang Envirokualita
                </h1>

                <p class="text-lg text-gray-600 leading-8 mb-6">
                    PT Adhikriya Kualita Utama (Envirokualita)
                    adalah lembaga terdepan yang bergerak di bidang pelatihan, sertifikasi kompetensi personel, serta layanan konsultasi dan audit lingkungan di Indonesia. Didirikan sejak tahun 2006, kami telah mengemban misi selama 20 tahun untuk menjembatani kebutuhan industri dengan pemenuhan regulasi perlindungan lingkungan hidup yang dinamis.
                </p>

                <p class="text-lg text-gray-600 leading-8 mb-6">
                    Sebagai mitra strategis, Envirokualita tidak hanya berfokus pada pengembangan kualitas sumber daya manusia, tetapi juga pada penguatan sistem manajemen lingkungan perusahaan. Kami bangga telah mendampingi ratusan individu dan korporasi dari berbagai lintas sektor, mulai dari usaha skala lokal, perusahaan nasional, hingga korporasi multinasional (MNC) dalam mencapai standar kepatuhan tertinggi dan operasional yang berkelanjutan (sustainable operations).
                </p>
            </div>

            <div data-aos="zoom-in">
                <img
                    src="{{ asset('images/tentangkami.jpg') }}"
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
                <h3 class="text-xl md:text-2xl font-bold mb-4 text-[#2B9048]">
                    Edukasi Relevan
                </h3>
                <p class="text-gray-600 leading-7">
                    Materi disusun berdasarkan isu lingkungan terkini.
                </p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow hover-card" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl md:text-2xl font-bold mb-4 text-[#2B9048]">
                    Praktis & Aplikatif
                </h3>
                <p class="text-gray-600 leading-7">
                    Menggunakan studi kasus nyata agar mudah diterapkan.
                </p>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow hover-card" data-aos="fade-up" data-aos-delay="400">
                <h3 class="text-xl md:text-2xl font-bold mb-4 text-[#2B9048]">
                    Berdampak Nyata
                </h3>
                <p class="text-gray-600 leading-7">
                    Mendorong perubahan perilaku ramah lingkungan.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- OUR APPROACH -->
<section class="bg-white py-24">
    <div class="container-custom">
        <div class="text-center mb-14" data-aos="fade-up">
            <p class="uppercase tracking-[4px] text-[#2B9048] mb-3 font-semibold">Pendekatan Kami</p>
            <h2 class="text-3xl md:text-4xl font-bold">Langkah Terstruktur untuk Dampak Berkelanjutan</h2>
            <p class="text-gray-600 max-w-2xl mx-auto mt-4">
                Enviroakualita menggabungkan edukasi, praktik langsung, dan evaluasi agar setiap program memberi hasil nyata bagi organisasi dan lingkungan.
            </p>
        </div>

        <div class="grid gap-6 md:grid-cols-3">
            <div class="bg-[#FFF664]/10 rounded-3xl p-8 shadow hover-card border border-[#9ACA40]/20" data-aos="fade-up">
                <h3 class="text-xl font-semibold mb-4 text-green-800">Riset & Analisis</h3>
                <p class="text-gray-600 leading-7">Kami memulai dengan memahami kebutuhan unik setiap peserta dan kondisi lingkungan mereka.</p>
            </div>
            <div class="bg-[#FFF664]/10 rounded-3xl p-8 shadow hover-card border border-[#9ACA40]/20" data-aos="fade-up" data-aos-delay="150">
                <h3 class="text-xl font-semibold mb-4 text-green-800">Pelatihan & Implementasi</h3>
                <p class="text-gray-600 leading-7">Materi kami dirancang agar mudah dipelajari, langsung dipraktikkan, dan relevan untuk setiap jenis organisasi.</p>
            </div>
            <div class="bg-[#FFF664]/10 rounded-3xl p-8 shadow hover-card border border-[#9ACA40]/20" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-xl font-semibold mb-4 text-green-800">Evaluasi & Tindak Lanjut</h3>
                <p class="text-gray-600 leading-7">Setiap program dilengkapi monitoring hasil dan rekomendasi perbaikan untuk jangka panjang.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="container-custom py-24 text-center" data-aos="zoom-in">

    <h2 class="text-3xl md:text-5xl font-bold mb-6">
        Siap Jadi Bagian dari Perubahan?
    </h2>

    <p class="text-gray-600 max-w-3xl mx-auto leading-8 mb-10">
        Temukan pelatihan yang sesuai dengan kebutuhan Anda dan mulai
        berkontribusi dalam menjaga lingkungan hari ini.
    </p>

    <a href="/pendaftaran">
        <button class="bg-gradient-to-r from-[#9ACA40] to-[#146032] text-white px-8 py-4 rounded-xl text-lg btn-shine">
            Mulai Sekarang
        </button>
    </a>
</section>

<!-- CONTACT -->
<section class="bg-white">
    <div class="container-custom py-24">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center" data-aos="fade-up">
            Hubungi Kami
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">

            <!-- Form Testimoni -->
            <div class="rounded-3xl bg-white p-8 shadow-lg" data-aos="fade-right">
                <form class="h-full flex flex-col justify-between space-y-4"
                    action="{{ route('testimoni.store') }}" method="POST">
                    @csrf

                    @if(session('success'))
                        <p class="text-green-700 text-sm font-medium bg-green-50 p-3 rounded-lg">
                            {{ session('success') }}
                        </p>
                    @endif

                    <div>
                        <label class="font-semibold text-gray-700 text-sm block mb-2">Nama</label>
                        <input type="text" name="name" placeholder="Masukkan nama Anda" required
                            class="w-full border border-gray-300 p-3 rounded-lg text-sm focus:outline-none focus:border-[#2B9048]">
                    </div>

                    <div class="flex-1">
                        <label class="font-semibold text-gray-700 text-sm block mb-2">Testimoni</label>
                        <textarea name="quote" placeholder="Bagikan pengalaman Anda bersama Enviroakualita..." rows="6" required
                            class="w-full h-full border border-gray-300 p-3 rounded-lg text-sm focus:outline-none focus:border-[#2B9048]"></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-[#2B9048] text-white px-4 py-2 rounded-lg font-semibold btn-shine hover:bg-[#146032] transition text-sm">
                        Kirim Testimoni
                    </button>
                </form>
            </div>

            <!-- Google Maps -->
            <div class="rounded-3xl overflow-hidden shadow-lg" data-aos="fade-left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.1116668875543!2d110.46921677403674!3d-6.996128368517415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708ce1b39ada93%3A0x38813ea0bc529c6a!2sPT%20Adhikriya%20Kualita%20Utama%20(AKUALITA)%20%7C%20Pelatihan%20dan%20Sertifikasi%20PJK3%20KEMNAKER%20RI%20%26%20TUK%20BNSP!5e0!3m2!1sid!2sid!4v1783303604677!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
            </div>

        </div>
    </div>
</section>

@include('components.footer')

@endsection