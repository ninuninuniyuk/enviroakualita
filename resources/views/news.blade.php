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

    <div
        class="relative overflow-hidden rounded-3xl"
        data-aos="zoom-in"
    >

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

@php
$news = [
    [
        'slug' => 'limbahb3',
        'image' => 'news4.jpeg',
        'title' => 'MENGAPA OLI BEKAS TERMASUK LIMBAH B3?',
        'excerpt' => 'Sering dianggap sekadar "minyak kotor" biasa, ternyata zat ini menyimpan bahaya luar biasa bagi lingkungan dan hukum!'
    ],
    [
        'slug' => 'langkahlca',
        'image' => 'news1.jpeg',
        'title' => 'Mengenal 4 Langkah Standar ISO dalam Life Cycle Assessment',
        'excerpt' => 'Life Cycle Assessment (LCA) adalah suatu metodologi ilmiah yang digunakan untuk mengevaluasi dampak lingkungan dari suatu produk, proses, atau sistem sepanjang seluruh siklus hidupnya, mulai dari pengambilan bahan mentah, proses produksi, distribusi, penggunaan, hingga akhir masa pakai atau pembuangan (cradle to grave) (KLHK, 2021).'
    ],
    [
        'slug' => 'tumpahanlimbah',
        'image' => 'news2.jpeg',
        'title' => 'Mengatasi Tumpahan Limbah B3',
        'excerpt' => 'Apa yang Harus Dilakukan Jika Terjadi!
                    Bukan sekadar asal lap!
                    Penanganan tumpahan B3 di industri diatur oleh
                    regulasi ketat dan wajib dipimpin oleh personel kompeten!.'
    ],
    [
        'slug' => 'sampah&nonb3',
        'image' => 'news3.jpeg',
        'title' => 'Perbedaan Sampah dan Limbah Padat Non-B3',
        'excerpt' => 'Dalam praktik di lapangan, masih banyak ditemukan kesalahan dalam mengklasifikasikan antara sampah dan limbah padat non-B3. Akibatnya, pengelolaan menjadi tidak tepat, pelaporan lingkungan menjadi keliru, bahkan dapat berpotensi menimbulkan ketidaksesuaian terhadap peraturan yang berlaku.'
    ],
    [
        'slug' => 'auditor-lingkungan',
        'image' => 'news5.jpeg',
        'title' => 'Auditor Lingkungan',
        'excerpt' => 'Garda Terdepan Kepatuhan Regulasi Lingkungan.'
    ],
    [
        'slug' => 'definisi-limbahb3',
        'image' => 'news6.jpeg',
        'title' => 'Limbah B3',
        'excerpt' => 'Diam-Diam Bisa Jadi Ancaman.'
    ],
    [
        'slug' => 'definisi-limbahb3',
        'image' => 'news7.jpeg',
        'title' => 'Puasa Plastik, Yuk!',
        'excerpt' => 'Diam-Diam Bisa Jadi Ancaman.'
    ],
    [
        'slug' => 'definisi-limbahb3',
        'image' => 'news8.jpeg',
        'title' => 'Air Jernih Belum Tentu Aman',
        'excerpt' => 'Diam-Diam Bisa Jadi Ancaman.'
    ],
    [
        'slug' => 'definisi-limbahb3',
        'image' => 'news9.jpeg',
        'title' => 'STOP! Mengambil Sampel Air Itu Tidak Sesederhana Mengisi Botol',
        'excerpt' => 'Diam-Diam Bisa Jadi Ancaman.'
    ],
    [
        'slug' => 'definisi-limbahb3',
        'image' => 'news10.jpeg',
        'title' => 'Tanaman Hias',
        'excerpt' => 'Diam-Diam Bisa Jadi Ancaman.'
    ],
];
@endphp

<section class="container-custom py-20">

    @foreach($news as $item)

    <article
        class="flex gap-8 items-center mb-12 p-6 rounded-3xl bg-white border border-gray-100 hover:border-green-200 hover:shadow-xl transition-all duration-500 hover:-translate-y-2 group"
    >

        <!-- Gambar -->
        <div
            class="w-1/4 flex-shrink-0 overflow-hidden rounded-2xl"
            data-aos="fade-right"
        >
            <img
                src="{{ asset('images/assets-news/' . $item['image']) }}"
                alt="{{ $item['title'] }}"
                class="w-full h-full object-cover transition duration-700 group-hover:scale-105"
            >
        </div>

        <!-- Konten -->
        <div
            class="w-3/4"
            data-aos="fade-left"
        >

            <h2
                class="text-2xl md:text-3xl font-bold leading-tight mb-4 transition-colors duration-300 group-hover:text-green-700"
            >
                {{ $item['title'] }}
            </h2>

            <p class="text-gray-600 leading-8 mb-6">
                {{ $item['excerpt'] }}
            </p>

            <a
                href="/news/{{ $item['slug'] }}"
                class="inline-flex items-center gap-2 text-green-700 font-semibold transition-all duration-300 hover:gap-3"
            >
                Baca Selengkapnya
                <span>→</span>
            </a>

        </div>

    </article>



    @endforeach

</section>

<script>
function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
}
</script>

@endsection