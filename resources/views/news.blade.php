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
        'excerpt' => 'Life Cycle Assessment (LCA) merupakan metode untuk mengevaluasi dampak lingkungan suatu produk, proses, atau sistem sepanjang siklus hidupnya, mulai dari bahan baku hingga tahap akhir penggunaannya.'
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
        'excerpt' => 'Kesalahan dalam membedakan sampah dan limbah padat non-B3 dapat menyebabkan pengelolaan yang tidak tepat serta ketidaksesuaian dengan regulasi lingkungan.'
    ],
    [
        'slug' => 'auditor-lingkungan',
        'image' => 'news5.jpeg',
        'title' => 'Auditor Lingkungan',
        'excerpt' => 'Di balik perusahaan yang patuh terhadap regulasi lingkungan, terdapat peran auditor lingkungan yang memastikan setiap kegiatan berjalan sesuai standar dan prinsip keberlanjutan.'
    ],
    [
        'slug' => 'definisi-limbahb3',
        'image' => 'news6.jpeg',
        'title' => 'Limbah B3',
        'excerpt' => 'Kenali apa itu limbah B3, karakteristiknya, serta pentingnya pengelolaan yang tepat sesuai dengan peraturan untuk mengurangi risiko terhadap lingkungan dan kesehatan.'
    ],
    [
        'slug' => 'puasaplastik',
        'image' => 'news7.jpeg',
        'title' => 'Puasa Plastik, Yuk!',
        'excerpt' => 'Tahukah Anda? Sebagian besar plastik sekali pakai hanya digunakan dalam hitungan menit, tetapi dapat bertahan di lingkungan selama ratusan tahun. Saatnya mulai mengurangi penggunaannya.'
    ],
    [
        'slug' => 'airjernih',
        'image' => 'news8.jpeg',
        'title' => 'Air Jernih Belum Tentu Aman',
        'excerpt' => 'Air yang tampak jernih belum tentu memenuhi standar kualitas air. Kenali parameter penting yang menentukan keamanan air agar tetap layak digunakan dan tidak membahayakan kesehatan.'
    ],
    [
        'slug' => 'sampelair',
        'image' => 'news9.jpeg',
        'title' => 'STOP! Mengambil Sampel Air Itu Tidak Sesederhana Mengisi Botol',
        'excerpt' => 'Kenapa sampling penting? Sampling Menentukan Akurasi Data.
                    Dalam pengujian kualitas air, hasil analisis sangat bergantung pada proses pengambilan sampel.'
    ],
    [
        'slug' => 'tanamanhias',
        'image' => 'news10.jpeg',
        'title' => 'Tanaman Hias = Produktivitas Naik!',
        'excerpt' => 'Tanaman Hias di Kantor Bisa Meningkatkan Produktivitas 🌿
        Bukan hanya mempercantik ruangan, tanaman hijau di kantor ternyata bisa mempengaruhi kinerja dan kenyamanan kerja.'
    ],
    [
        'slug' => 'polusiudara',
        'image' => 'news12.jpeg',
        'title' => 'Udah Tau Sumber Polusi Udara Terbesar?',
        'excerpt' => 'Banyak yang mikir cuma dari pabrik…
                    Padahal, aktivitas sehari-hari juga jadi penyumbang utama!'
    ],
    [
        'slug' => 'ambienemisi',
        'image' => 'news13.jpeg',
        'title' => 'Udara Ambien vs Udara Emisi',
        'excerpt' => 'Keduanya sama-sama “udara”… Tapi yang satu kita hirup, yang satu lagi jadi sumber pencemar! Kamu udah tau bedanya?
        Pahami perbedaannya agar pengendalian pencemaran udara dapat dilakukan secara tepat.'
    ],
    [
        'slug' => 'definisilca',
        'image' => 'news14.jpeg',
        'title' => 'Definisi LCA (Life Cycle Assessment)',
        'excerpt' => 'Life Cycle Assessment (LCA) adalah metode untuk mengevaluasi dampak lingkungan dari suatu produk atau layanan selama seluruh siklus hidupnya.'
    ],
    [
        'slug' => 'proper',
        'image' => 'news15.jpeg',
        'title' => 'Kompetensi SDM untuk PROPER',
        'excerpt' => 'PROPER (Prosedur Operasional untuk Pengelolaan Limbah) memerlukan kompetensi khusus dari sumber daya manusia. Pelatihan dan pengembangan kapasitas SDM menjadi penting untuk implementasi yang efektif.'
    ],
    [
        'slug' => 'auditor-konsultan',
        'image' => 'news16.jpeg',
        'title' => 'Perbedaan Auditor Lingkungan vs Konsultan Lingkungan',
        'excerpt' => 'PROPER (Prosedur Operasional untuk Pengelolaan Limbah) memerlukan kompetensi khusus dari sumber daya manusia. Pelatihan dan pengembangan kapasitas SDM menjadi penting untuk implementasi yang efektif.'
    ],
    [
        'slug' => 'greenwashing',
        'image' => 'news17.jpeg',
        'title' => 'Greenwashing',
        'excerpt' => 'PROPER (Prosedur Operasional untuk Pengelolaan Limbah) memerlukan kompetensi khusus dari sumber daya manusia. Pelatihan dan pengembangan kapasitas SDM menjadi penting untuk implementasi yang efektif.'
    ],
    [
        'slug' => 'sertifikasi',
        'image' => 'news18.jpeg',
        'title' => 'Kenapa Sertifikasi Bisa Naikin Value Perusahaan?',
        'excerpt' => 'PROPER (Prosedur Operasional untuk Pengelolaan Limbah) memerlukan kompetensi khusus dari sumber daya manusia. Pelatihan dan pengembangan kapasitas SDM menjadi penting untuk implementasi yang efektif.'
    ],
];

// =====================
// FILTER SEARCH
// =====================
$search = request('search');

if ($search) {
    $news = array_filter($news, function ($item) use ($search) {
        return str_contains(strtolower($item['title']), strtolower($search))
            || str_contains(strtolower($item['excerpt']), strtolower($search));
    });

    // Reset index array
    $news = array_values($news);
}

@endphp

<!-- SEARCH -->
<section class="container-custom pt-10 pb-4">
    <form action="{{ url('/news') }}" method="GET">
        <div class="flex items-center gap-3 max-w-2xl mx-auto">

            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Cari berita..."
                class="flex-1 px-5 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-600"
            >

            <button
                type="submit"
                class="bg-gradient-to-r from-[#9ACA40] to-[#146032] text-white px-6 py-3 rounded-xl hover:opacity-90 transition"
            >
                Search
            </button>

        </div>
    </form>
</section>

@if(!$search && count($news))

<section class="container-custom py-10">

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- HERO -->
        <div class="lg:col-span-2">

            <div class="relative rounded-3xl overflow-hidden h-[520px]">

                <img
                    id="heroImage"
                    src="{{ asset('images/assets-news/'.$news[0]['image']) }}"
                    class="absolute inset-0 w-full h-full object-cover"
                >

                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>

                <div class="absolute bottom-0 left-0 p-8 text-white">

                    <h1
                        id="heroTitle"
                        class="text-4xl font-bold mb-4"
                    >
                        {{ $news[0]['title'] }}
                    </h1>

                    <p
                        id="heroExcerpt"
                        class="text-gray-200 mb-6"
                    >
                        {{ $news[0]['excerpt'] }}
                    </p>

                    <a
                        id="heroLink"
                        href="/news/{{ $news[0]['slug'] }}"
                        class="inline-block bg-green-600 hover:bg-green-700 px-6 py-3 rounded-xl"
                    >
                        Baca Selengkapnya →
                    </a>

                </div>

            </div>

        </div>

        <!-- LIST BERITA -->
        <div class="h-[520px] flex flex-col justify-between">

            @foreach(array_slice($news,1,3) as $item)

            <div
                onclick="changeHero(this)"
                data-image="{{ asset('images/assets-news/'.$item['image']) }}"
                data-title="{{ $item['title'] }}"
                data-excerpt="{{ $item['excerpt'] }}"
                data-link="/news/{{ $item['slug'] }}"
                class="cursor-pointer flex gap-4 bg-white rounded-2xl p-4 shadow hover:shadow-lg transition h-full max-h-[165px]"
            >
                <img
                    src="{{ asset('images/assets-news/'.$item['image']) }}"
                    class="w-32 h-full rounded-xl object-cover"
                >
                <div class="flex flex-col justify-center">
                    <h3 class="font-bold line-clamp-2">{{ $item['title'] }}</h3>
                    <p class="text-sm text-gray-500 mt-2 line-clamp-3">{{ $item['excerpt'] }}</p>
                </div>
            </div>

            @endforeach

        </div>

    </div>

</section>

@endif

@if($search)
<div class="container-custom py-8">

    <div class="max-w-xl mx-auto text-center">

        <p class="inline-flex items-center gap-2 bg-green-50 text-green-700 px-4 py-2 rounded-full text-sm font-medium">
            Hasil pencarian
        </p>

        <h2 class="mt-4 text-2xl font-bold text-gray-800">
            "{{ $search }}"
        </h2>

        <p class="mt-2 text-gray-500 text-sm">
            Ditemukan <span class="font-semibold text-green-700">{{ count($news) }}</span> berita yang sesuai.
        </p>

    </div>

</div>
@endif

<section class="container-custom py-20">

    @if(count($news))

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

    @else

    <div class="text-center py-16">
        <h2 class="text-2xl font-bold">Berita tidak ditemukan.</h2>
    </div>

@endif

</section>

<script>
function toggleMenu() {
    const menu = document.getElementById('mobileMenu');
    menu.classList.toggle('hidden');
}

function changeHero(card){

    document.getElementById('heroImage').src =
        card.dataset.image;

    document.getElementById('heroTitle').innerText =
        card.dataset.title;

    document.getElementById('heroExcerpt').innerText =
        card.dataset.excerpt;

    document.getElementById('heroLink').href =
        card.dataset.link;

}
</script>

@endsection