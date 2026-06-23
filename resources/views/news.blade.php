@extends('layouts.app')

@section('title', 'News')

@section('content')

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
        duration: 900,
        once: true
    });
});
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

<!-- FEATURED NEWS -->
<section class="container-custom py-12">

    <div class="relative overflow-hidden rounded-3xl">

        <img
            src="{{ asset('images/assets-media/contoh.png') }}"
            alt="Featured News"
            class="w-full h-[550px] object-cover"
        >

        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

        <div class="absolute bottom-0 left-0 p-8 md:p-12 text-white max-w-4xl">

            <span class="bg-green-600 px-4 py-2 rounded-full text-sm font-medium">
                Audit Lingkungan
            </span>

            <h1 class="text-4xl md:text-6xl font-bold mt-5 mb-4 leading-tight">
                Implementasi Audit Lingkungan
                untuk Meningkatkan Kepatuhan
                dan Kinerja Perusahaan
            </h1>

            <p class="text-gray-200 text-lg leading-8 mb-5">
                Audit lingkungan membantu perusahaan mengidentifikasi
                potensi risiko, meningkatkan kepatuhan regulasi,
                dan mendukung praktik bisnis yang berkelanjutan.
            </p>

            <div class="flex flex-wrap gap-6 text-sm text-gray-300">
                <span>Enviroakualita</span>
            </div>

        </div>

    </div>

</section>

<!-- FEATURED NEWS -->
<section class="container-custom py-20">
    <div class="grid md:grid-cols-2 gap-10 items-center">

        <!-- Gambar -->
        <div>
            <img
                src="{{ asset('images/assets-news/news1.jpeg') }}"
                alt="Featured News"
                class="w-full h-auto rounded-2xl shadow-lg"
            >
        </div>

        <!-- Konten -->
        <div>

            <h2 class="text-3xl md:text-4xl font-bold leading-tight mb-4">
                Polusi Udara di Kota Besar Indonesia:
                Penyebab, Dampak Kesehatan,
                dan Cara Melindungi Diri
            </h2>

            <p class="text-gray-600 leading-8 mb-6">
                Polusi udara masih menjadi salah satu tantangan lingkungan terbesar
                di Indonesia. Tingginya emisi kendaraan, aktivitas industri,
                dan pembakaran terbuka dapat memengaruhi kualitas udara serta
                kesehatan masyarakat.
            </p>

            <a href="#"
               class="text-green-700 font-semibold hover:underline">
                Baca Selengkapnya →
            </a>

        </div>

    </div>
</section>

@php
$news = [
    [
        'image' => 'news1.jpeg',
        'title' => 'Pelatihan ISO 14001 Berjalan Sukses',
        'excerpt' => 'Pelatihan sistem manajemen lingkungan yang diikuti berbagai peserta dari sektor industri.'
    ],
    [
        'image' => 'gambar2.png',
        'title' => 'Audit Lingkungan untuk Industri Manufaktur',
        'excerpt' => 'Pelaksanaan audit lingkungan guna memastikan kepatuhan terhadap regulasi yang berlaku.'
    ],
    [
        'image' => 'gambar3.jpeg',
        'title' => 'Pentingnya Pengelolaan Limbah B3',
        'excerpt' => 'Pengelolaan limbah B3 yang tepat dapat membantu perusahaan menjaga keberlanjutan lingkungan.'
    ],
];
@endphp

<section class="container-custom py-20">

    <div class="grid md:grid-cols-3 gap-8">

        @foreach($news as $item)
        <article
            class="bg-white rounded-3xl overflow-hidden shadow-lg hover:-translate-y-2 transition duration-300"
            data-aos="fade-up"
        >

            <img
                src="{{ asset('images/assets-news/' . $item['image']) }}"
                alt="{{ $item['title'] }}"
                class="w-full object-contain"
            >

            <div class="p-6">

                <h3 class="text-xl font-bold mb-3">
                    {{ $item['title'] }}
                </h3>

                <p class="text-gray-600 leading-7">
                    {{ $item['excerpt'] }}
                </p>

                <a href="#"
                   class="inline-block mt-4 text-green-700 font-semibold hover:underline">
                    Baca Selengkapnya →
                </a>

            </div>

        </article>
        @endforeach

    </div>

</section>