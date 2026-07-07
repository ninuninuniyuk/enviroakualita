@extends('layouts.app')

@section('title', 'Kenapa Limbah Rumah Tangga Juga Berbahaya')

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

<!-- Hero -->

<section class="py-10 md:py-16">
    <div class="container-custom">

    <a href="/news"
       class="inline-flex items-center gap-2 text-green-700 font-medium hover:underline mb-6">
        ← Kembali ke News
    </a>

    <div
        class="max-w-4xl mx-auto"
        data-aos="fade-up"
    >

        <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-medium">
            Kenapa Limbah Rumah Tangga Juga Berbahaya
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            Kenapa Limbah Rumah Tangga Juga Berbahaya
        </h1>

        <div class="flex flex-wrap items-center gap-3 text-gray-500 mt-4 text-sm">
            <span>Envirokualita</span>
        </div>

    </div>

</div>

</section>

<!-- Featured Image -->

<section class="pb-8 md:pb-12">
    <div class="container-custom">

    <div
        class="max-w-4xl mx-auto overflow-hidden rounded-3xl"
        data-aos="zoom-in"
    >
        <img
            src="{{ asset('images/assets-news/news21.jpeg') }}"
            alt="Limbah B3"
            class="w-full h-[250px] md:h-[380px] object-cover rounded-3xl shadow-md transition duration-700 hover:scale-105"
        >
    </div>

</div>

</section>

<!-- Artikel -->

<section class="pb-16 md:pb-20">
    <div class="container-custom">

    <div
        class="max-w-4xl mx-auto bg-white rounded-3xl shadow-sm border border-gray-100 p-6 md:p-10 transition-all duration-500 hover:shadow-xl"
        data-aos="fade-up"
    >

        <article class="text-gray-700 text-[15px] md:text-[16px] leading-7">    

            <p class="mb-2">
                Banyak orang berpikir limbah berbahaya hanya berasal dari pabrik.
                Padahal, aktivitas sehari-hari di rumah juga menghasilkan limbah yang dapat mencemari lingkungan dan mengganggu kesehatan.
            </p>
            
            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Kita Adalah Penyumbang Terbesar !
            </h2>

            <div class="space-y-6 my-8">

                <!-- Rumah Tangga -->
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">🏠 Rumah Tangga</span>
                        <span class="text-green-700 font-semibold">54,46%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-green-600 h-4 rounded-full" style="width:54.46%"></div>
                    </div>
                    <p class="text-sm text-gray-500 mt-1">6,96 juta ton/tahun</p>
                </div>

                <!-- Pasar -->
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">🏪 Pasar</span>
                        <span class="text-green-700 font-semibold">13,65%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-green-500 h-4 rounded-full" style="width:13.65%"></div>
                    </div>
                    <p class="text-sm text-gray-500 mt-1">1,68 juta ton/tahun</p>
                </div>

                <!-- Perdagangan -->
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">🛍️ Perdagangan</span>
                        <span class="text-green-700 font-semibold">7,8%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-green-500 h-4 rounded-full" style="width:7.8%"></div>
                    </div>
                    <p class="text-sm text-gray-500 mt-1">0,97 juta ton/tahun</p>
                </div>

                <!-- Fasilitas Publik -->
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">🏢 Fasilitas Publik</span>
                        <span class="text-green-700 font-semibold">7,2%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-green-500 h-4 rounded-full" style="width:7.2%"></div>
                    </div>
                    <p class="text-sm text-gray-500 mt-1">0,89 juta ton/tahun</p>
                </div>

                <!-- Permukiman -->
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">🏘️ Permukiman</span>
                        <span class="text-green-700 font-semibold">4,48%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-green-500 h-4 rounded-full" style="width:4.48%"></div>
                    </div>
                    <p class="text-sm text-gray-500 mt-1">0,55 juta ton/tahun</p>
                </div>

                <!-- Perkantoran -->
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">🏢 Perkantoran</span>
                        <span class="text-green-700 font-semibold">4,2%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-green-500 h-4 rounded-full" style="width:4.2%"></div>
                    </div>
                    <p class="text-sm text-gray-500 mt-1">0,52 juta ton/tahun</p>
                </div>

                <!-- Lain-lain -->
                <div>
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">📦 Lain-lain</span>
                        <span class="text-green-700 font-semibold">6,2%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-4">
                        <div class="bg-green-500 h-4 rounded-full" style="width:6.2%"></div>
                    </div>
                    <p class="text-sm text-gray-500 mt-1">0,76 juta ton/tahun</p>
                </div>

            </div>

            <p class="mb-2">
                Diagram sampah 2025
                Berdasarkan sumber SIPSN, Lebih dari 50% sampah nasional berasal dari rumah tangga dan menunjukan kebiasaan sehari-hari di rumah sangat mempengaruhi kondisi lingkungan.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Limbah Rumah Tangga Itu Apa? 
            </h2>

            <p class="mb-2">
                Apa yang termasuk limbah rumah tangga?
            </p>

            <ul class="list-disc pl-5 space-y-0">
                    <li>Sisa makanan</li>
                    <li>Plastik & kemasan sekali pakai</li>
                    <li>Air bekas mencuci & deterjen</li>
                    <li>Baterai dan limbah elektronik bekas</li>
                    <li>Minyak jelantah</li>
                    <li>Popok sekali pakai</li>
                    <li>Cairan pembersih rumah tangga</li>
            </ul>

            <p class="mb-2 mt-2">
                Meski terlihat kecil, jika dibuang sembarangan dampaknya bisa besar.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Dampak
            </h2>

            <div class="bg-red-50 border-l-4 border-red-500 rounded-r-lg p-5 my-6">

                <h3 class="text-lg font-bold text-red-700">
                    1. Krisis Lahan dan Risiko Bencana TPA
                </h3>

                <p class="mt-2 text-gray-700">
                    Timbulan sampah rumah tangga yang menumpuk memberikan beban luar biasa pada tempat pembuangan akhir.
                </p>

                <ul class="list-disc pl-6 mt-4 space-y-3 text-gray-700">
                    <li>
                        <span class="font-semibold">Kapasitas Berlebih:</span>
                        Banyak TPA di Indonesia masih menggunakan metode open dumping (63,76%) yang membuat lahan cepat penuh.
                    </li>

                    <li>
                        <span class="font-semibold">Risiko Fisik:</span>
                        Tumpukan sampah yang tidak stabil berisiko tinggi menyebabkan bencana longsor atau kebakaran hebat.
                    </li>
                </ul>

                <h3 class="text-lg font-bold text-red-700 mt-6">
                    2. Ancaman Kesehatan melalui Rantai Makanan
                </h3>

                <p class="mt-2 text-gray-700">
                    Sampah yang dibuang sembarangan atau tidak terolah di TPA akan mengalami degradasi lingkungan yang berbahaya bagi manusia.
                </p>

                <ul class="list-disc pl-6 mt-4 space-y-3 text-gray-700">
                    <li>
                        <span class="font-semibold">Kontaminasi Mikroplastik:</span>
                        Sampah plastik dari rumah tangga akan hancur menjadi partikel mikroplastik. Partikel ini masuk ke ekosistem air, dikonsumsi ikan, dan akhirnya masuk ke tubuh manusia melalui makanan dan air minum.
                    </li>

                    <li>
                        <span class="font-semibold">Limbah B3 Rumah Tangga:</span>
                        Sisa detergen, baterai, dan lampu bekas mengandung bahan kimia korosif serta logam berat seperti merkuri dan timbal yang bersifat karsinogenik (pemicu kanker).
                    </li>
                </ul>

                <h3 class="text-lg font-bold text-red-700 mt-6">
                    3. Kontaminasi Material Daur Ulang
                </h3>

                <p class="mt-2 text-gray-700">
                    Kebiasaan mencampur semua jenis sampah di tingkat rumah tangga merusak potensi ekonomi dari sampah itu sendiri.
                </p>

                <ul class="list-disc pl-6 mt-4 space-y-3 text-gray-700">
                    <li>
                        <span class="font-semibold">Kerusakan Kualitas:</span>
                        Satu botol plastik yang masih mengandung minyak atau sisa makanan dapat merusak kualitas satu ton plastik siap olah jika tercampur dalam wadah besar.
                    </li>

                    <li>
                        <span class="font-semibold">Efisiensi Rendah:</span>
                        Pemisahan material yang tercampur memerlukan biaya dan tenaga kerja yang sangat besar, sehingga banyak industri lebih memilih menggunakan virgin plastic (plastik baru) yang lebih murah.
                    </li>
                </ul>

                <h3 class="text-lg font-bold text-red-700 mt-6">
                    4. Percepatan Pemanasan Global
                </h3>

                <p class="mt-2 text-gray-700">
                    Sampah rumah tangga berkontribusi langsung terhadap perubahan iklim melalui emisi gas berbahaya.
                </p>

                <ul class="list-disc pl-5 space-y-0">
                    <li>
                        <span class="font-semibold">Gas Metana:</span>
                        Sampah organik (sisa makanan) yang tertumpuk di TPA tanpa oksigen menghasilkan gas metana (CH_4).
                    </li>
                    <li>
                        <span class="font-semibold">Daya Rusak Tinggi:</span>
                        Gas metana ini 25 kali lebih berbahaya daripada CO_2 dalam memerangkap panas di atmosfer dan memicu pemanasan global.
                    </li>
            </ul>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Solusi, Mulai Dari Dapurmu Sendiri!
            </h2>

            <p class="mb-2">
                Gunakan hirarki pengelolaan sampah (Piramida Terbalik):
            </p>

            <ul class="list-decimal pl-5">
                <li>Refuse: Tolak penggunaan plastik sekali pakai dan kemasan sachet.</li>
                <li>Reduce: Pilih produk dengan kemasan besar atau tanpa kemasan.</li>
                <li>Reuse: Gunakan kembali barang sebelum benar-benar menjadi sampah.</li>
                <li>Rot (Kompos): Olah sampah organik (sisa makanan) di rumah agar tidak membebani TPA.</li>
                <li>Recycle: Langkah terakhir untuk material yang benar-benar tidak bisa dihindari.</li>
            </ul>

        </article>

    </div>

    <!-- CTA -->
    <div
        class="max-w-4xl mx-auto mt-5"
        data-aos="fade-up"
        data-aos-delay="200"
    >

        <div class="bg-gradient-to-r from-[#9ACA40] to-[#146032] rounded-3xl p-6 md:p-10 text-white transition duration-500 hover:shadow-2xl">

            <h3 class="text-2xl md:text-3xl font-bold mb-2">
                Perubahan Besar Dimulai dari Pilah Sampah di Rumah
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Mulai pilah sampah dari rumah bersama EnviroKualita.
            </p>

            <a href="/kontak">
                <button class="bg-white text-[#146032] px-6 py-3 rounded-xl font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg">
                    Hubungi Kami
                </button>
            </a>

        </div>

    </div>

</div>

</section>

@endsection
