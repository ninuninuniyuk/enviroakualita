@extends('layouts.app')

@section('title', 'Mengapa Sebagian Besar Sampah Tidak Pernah Didaur Ulang? ')

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
            Mengapa Sebagian Besar Sampah Tidak Pernah Didaur Ulang? 
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            Fakta Pahit: Mengapa Sebagian Besar Sampah Tidak Pernah Didaur Ulang? 
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
            src="{{ asset('images/assets-news/news19.jpeg') }}"
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

            <h2 class="text-2xl font-bold text-gray-900 mb-2">
                Masalah Utama
            </h2>    

            <p class="mb-2">
                Di tingkat nasional, data Sistem Informasi Pengelolaan Sampah Nasional (SIPSN) 2025 mencatat timbulan sampah Indonesia mencapai 24,8 juta ton per tahun. Dari jumlah tersebut, baru 34,55 persen atau 8,5 juta ton yang terkelola, sementara 65,45 persen atau 16,3 juta ton belum tertangani dengan baik.
            </p>
            <p class="mb-2">
                Selain itu, hanya 36,24 persen sampah yang diproses di TPA dengan sistem sanitary landfill atau controlled landfill, sedangkan 63,76 persen masih menggunakan metode open dumping. Sektor rumah tangga menjadi penyumbang terbesar dengan porsi 56,7 persen atau 7,2 juta ton per tahun.
            </p>

            <div class="overflow-x-auto my-6">
    <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
        <thead class="bg-green-600 text-white">
            <tr>
                <th class="px-6 py-4 text-center font-semibold">Kategori</th>
                <th class="px-6 py-4 text-center font-semibold">Data</th>
                <th class="px-6 py-4 text-center font-semibold">Keterangan</th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200 bg-white">

            <tr class="hover:bg-green-50 transition">
                <td class="px-6 py-4 font-semibold">Total Timbulan Sampah</td>
                <td class="px-6 py-4">24,8 juta ton/tahun</td>
                <td class="px-6 py-4">Total sampah yang dihasilkan di Indonesia.</td>
            </tr>

            <tr class="hover:bg-green-50 transition">
                <td class="px-6 py-4 font-semibold">Sampah Terkelola</td>
                <td class="px-6 py-4">8,5 juta ton (34,55%)</td>
                <td class="px-6 py-4">Sampah yang sudah ditangani dengan baik.</td>
            </tr>

            <tr class="hover:bg-green-50 transition">
                <td class="px-6 py-4 font-semibold">Sampah Belum Terkelola</td>
                <td class="px-6 py-4">16,3 juta ton (65,45%)</td>
                <td class="px-6 py-4">Sampah yang belum tertangani secara optimal.</td>
            </tr>

            <tr class="hover:bg-green-50 transition">
                <td class="px-6 py-4 font-semibold">Sistem Sanitary / Controlled Landfill</td>
                <td class="px-6 py-4">36,24%</td>
                <td class="px-6 py-4">TPA dengan sistem pengelolaan yang lebih aman.</td>
            </tr>

            <tr class="hover:bg-green-50 transition">
                <td class="px-6 py-4 font-semibold">Open Dumping</td>
                <td class="px-6 py-4">63,76%</td>
                <td class="px-6 py-4">TPA masih menggunakan metode pembuangan terbuka.</td>
            </tr>

            <tr class="hover:bg-green-50 transition">
                <td class="px-6 py-4 font-semibold">Sumber Rumah Tangga</td>
                <td class="px-6 py-4">7,2 juta ton (56,7%)</td>
                <td class="px-6 py-4">Penyumbang sampah terbesar berasal dari rumah tangga.</td>
            </tr>

                </tbody>
            </table>
        </div>
            
            <div
                class="bg-gray-50 border border-gray-100 rounded-2xl p-5 my-8 transition duration-300 hover:shadow-md"
                data-aos="fade-up">
                
                <h2 class="text-2xl font-bold text-gray-900 mt-6 mb-3">
                Faktor - Faktor
                </h3>

            <div class="bg-red-50 border-l-4 border-red-500 rounded-r-lg p-5 my-6">

                <h3 class="text-lg font-bold text-red-700">
                    1. Masalah Kontaminasi (The Dirty Reality)
                </h3>

                <p class="mt-2 text-gray-700">
                    Daur ulang bukan sekadar memasukkan barang ke mesin. Kualitas bahan sangat menentukan.
                </p>

                <ul class="list-disc pl-6 mt-4 space-y-3 text-gray-700">
                    <li>
                        <span class="font-semibold">Sisa Makanan &amp; Minuman:</span>
                        Wadah plastik yang masih mengandung minyak atau sisa makanan sering dianggap
                        <em>"terkontaminasi"</em>. Satu botol yang kotor dapat menurunkan kualitas hingga satu ton plastik siap olah.
                    </li>

                    <li>
                        <span class="font-semibold">Pencampuran Jenis Material:</span>
                        Plastik PET sering tercampur dengan jenis plastik lain sehingga proses pemisahan menjadi lebih sulit, memerlukan biaya dan tenaga kerja yang besar.
                    </li>
                </ul>

                <h3 class="text-lg font-bold text-red-700 mt-6">
                    2. Desain Produk yang Kompleks (Multi-Layer Plastic)
                </h3>

                <p class="mt-2 text-gray-700">
                    Banyak kemasan modern didesain untuk kenyamanan, bukan untuk didaur ulang.
                </p>

                <ul class="list-disc pl-6 mt-4 space-y-3 text-gray-700">
                    <li>
                        <span class="font-semibold">Kemasan Sachet &amp; & Pouch:</span>
                        Seringkali terdiri dari lapisan tipis plastik, aluminium foil, dan kertas yang direkatkan menjadi satu. Memisahkan lapisan-lapisan ini secara teknis sangat sulit dan tidak efisien secara biaya.
                    </li>

                    <li>
                        <span class="font-semibold">Warna Plastik:</span>
                        Plastik transparan memiliki nilai jual tinggi karena bisa diwarnai ulang. Sebaliknya, plastik berwarna gelap atau hitam seringkali tidak bisa dideteksi oleh sensor optik di pabrik daur ulang modern, sehingga berakhir di pembuangan.
                    </li>
                </ul>

                <h3 class="text-lg font-bold text-red-700 mt-6">
                    3. Faktor Ekonomi: "Virgin Plastic" Lebih Murah
                </h3>

                <p class="mt-2 text-gray-700">
                    Ini adalah hambatan terbesar dalam industri.
                </p>

                <ul class="list-disc pl-6 mt-4 space-y-3 text-gray-700">
                    <li>
                        <span class="font-semibold">Harga Minyak Bumi:</span>
                        Plastik baru (virgin plastic) dibuat dari minyak bumi. Ketika harga minyak dunia rendah, memproduksi plastik baru jauh lebih murah daripada mengumpulkan, mencuci, dan mengolah plastik bekas.
                    </li>

                    <li>
                        <span class="font-semibold">Kurangnya Permintaan Pasar:</span>
                        Tidak banyak industri yang mau menggunakan bahan daur ulang jika kualitasnya tidak stabil atau harganya lebih mahal dari bahan baku baru.
                    </li>
                </ul>

                <h3 class="text-lg font-bold text-red-700 mt-6">
                    4. Keterbatasan Infrastruktur
                </h3>

                <p class="mt-2 text-gray-700">
                    Banyak negara, terutama negara berkembang, tidak memiliki sistem manajemen sampah yang terintegrasi.
                </p>

                <ul class="list-disc pl-5 space-y-0">
                    <li>
                        <span class="font-semibold">Sistem Pemilahan di Hulu:</span>
                        Tanpa adanya kewajiban memilah sampah dari level rumah tangga, semua jenis limbah (organik, kertas, plastik, hingga limbah berbahaya/B3) bercampur menjadi satu.
                    </li>
                    <li>
                        <span class="font-semibold">Biaya Logistik:</span>
                        Biaya mengangkut sampah dari pulau-pulau atau daerah terpencil ke pusat daur ulang seringkali tidak sebanding dengan nilai material sampah itu sendiri.
                    </li>
            </ul>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                 Dampak Jika Terus Dibiarkan
            </h2>

            <p class="mb-2">
                Apa Akibatnya Jika Angka Daur Ulang Tetap Rendah?
            </p>

            <ul class="list-disc pl-5 space-y-0">
                    <li>
                        <span class="font-semibold">Krisis Lahan TPA:</span>
                        TPA dengan sistem Open Dumping akan semakin penuh dan berisiko longsor atau terbakar (seperti kasus TPA Sarimukti/Leuwigajah).
                    </li>
                    <li>
                        <span class="font-semibold">Pencemaran Mikroplastik:</span>
                        Sampah yang tidak terkelola akan hancur menjadi partikel mikro yang masuk ke rantai makanan manusia melalui ikan dan air.
                    </li>
                    <li>
                        <span class="font-semibold">Emisi Gas Rumah Kaca:</span>
                        Sampah organik yang tertumpuk di TPA tanpa oksigen menghasilkan gas metana, yang 25x lebih berbahaya dari CO2 dalam memicu pemanasan global.
                    </li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Solusi Strategis (Hirarki Pengelolaan) 
            </h2>

            <p class="mb-2">
                Gunakan konsep piramida terbalik untuk menjelaskan bahwa Recycle adalah langkah terakhir:
            </p>

            <ol class="list-decimal pl-5">
                    <li>Refuse (Menolak): Hindari produk sekali pakai & kemasan sachet (Multi-layer).</li>
                    <li>Reduce (Mengurangi): Pilih produk dengan kemasan yang lebih besar atau tanpa kemasan.</li>
                    <li>Reuse (Gunakan Kembali): Maksimalkan umur barang sebelum menjadi sampah.</li>
                    <li>Rot (Kompos): Olah sampah rumah tangga (56,7%) menjadi kompos agar tidak membebani TPA.</li>
                    <li>Recycle (Daur Ulang): Hanya untuk material yang benar-benar tidak bisa dihindari.</li>
            </ol>

            <p class="mb-2 mt-4">
                Mengubah kebiasaan memang tidak mudah, tapi melihat bumi yang tertimbun sampah jauh lebih sulit.
            </p>

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
                Siap Memulai Perubahan untuk Lingkungan yang Lebih Baik?
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Mulailah dari langkah kecil hari ini dan wujudkan lingkungan yang lebih bersih bersama EnviroKualita. 
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
