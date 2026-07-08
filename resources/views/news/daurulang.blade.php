@extends('layouts.app')

@section('title', 'Kenapa Daur Ulang Tidak Selalu Menyelesaikan Masalah?')

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
            Kenapa Daur Ulang Tidak Selalu Menyelesaikan Masalah?
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            Kenapa Daur Ulang Tidak Selalu Menyelesaikan Masalah?
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
            src="{{ asset('images/assets-news/news24.jpeg') }}"
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
                Daur Ulang Bukan Solusi Tunggal
            </h2>    

            <p class="mb-2">
                Banyak orang berpikir semua sampah bisa didaur ulang. Faktanya:
                ⚠️ Tidak semua material dapat diproses kembali dengan mudah.
            </p>

            <div
                class="bg-gray-50 border border-gray-100 rounded-2xl p-5 my-8 transition duration-300 hover:shadow-md"
                data-aos="fade-up">

                <h3 class="text-base font-semibold text-gray-900 mt-4 mb-3">
                Beberapa jenis sampah:
                </h3>

            <ul class="pl-5 space-y-0">
                    <li> ❌ Sulit dipisahkan</li>
                    <li> ❌ Terkontaminasi makanan/minyak</li>
                    <li> ❌ Tidak memiliki nilai ekonomi</li>
                    <li> ❌ Sulit diproses secara teknis</li>
            </ul>

            <p class="mb-2">
                Akibatnya, sebagian besar tetap berakhir di TPA atau lingkungan. 
            </p>
            
            </div>

            <h2 class="text-2xl font-bold text-gray-900 mb-2">
                Tidak Semua Plastik Bisa Didaur Ulang
            </h2>

            <p class="mb-2">
                ♻️ Jenis plastik berbeda membutuhkan proses berbeda. 
            </p>

            <p class="mb-2">
                Contoh masalah: 
            </p>

            <ul class="list-disc pl-5 space-y-0">
                    <li>Plastik multilayer/sachet sulit dipisahkan</li>
                    <li>Plastik hitam sering tidak terbaca sensor optik</li>
                    <li>Plastik tercampur makanan menurunkan kualitas daur ulang</li>
            </ul>

            <p class="mb-2 mt-2">
                Satu plastik yang terkontaminasi dapat merusak banyak material daur ulang lainnya.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Proses Daur Ulang Tetap Membutuhkan Energi
            </h2>

            <div class="bg-green-50 border-l-4 border-green-500 rounded-r-lg p-5 my-6">

                <h3 class="text-lg font-bold text-green-700">
                    ♻️ Daur Ulang Bukan Proses "Tanpa Dampak"
                </h3>

                <p class="mt-3 text-gray-700">
                    Meskipun bermanfaat, proses daur ulang tetap memerlukan energi dan sumber daya dalam setiap tahapannya.
                </p>

            <div class="mt-5">
                    <h4 class="font-semibold text-gray-800 mb-2">
                        🔄 Tahapan Proses
                    </h4>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-3">

                        <div class="bg-white rounded-lg p-3 text-center shadow-sm border">
                            🚛
                            <p class="mt-2 font-medium">Pengangkutan</p>
                        </div>

                        <div class="bg-white rounded-lg p-3 text-center shadow-sm border">
                            🧼
                            <p class="mt-2 font-medium">Pencucian</p>
                        </div>

                        <div class="bg-white rounded-lg p-3 text-center shadow-sm border">
                            🔥
                            <p class="mt-2 font-medium">Pelelehan</p>
                        </div>

                        <div class="bg-white rounded-lg p-3 text-center shadow-sm border">
                            🏭
                            <p class="mt-2 font-medium">Pengolahan Ulang</p>
                        </div>

                    </div>
                </div>

                <div class="mt-6">
                    <h4 class="font-semibold text-gray-800 mb-2">
                        ⚡ Tetap Membutuhkan
                    </h4>

                    <ul class="list-disc pl-6 space-y-1 text-gray-700">
                        <li>Listrik</li>
                        <li>Bahan bakar</li>
                        <li>Air</li>
                        <li>Menghasilkan emisi</li>
                    </ul>
                </div>

                <div class="mt-5 bg-green-100 rounded-lg p-3">
                    <p class="text-green-800 font-medium">
                        💡 Semakin jauh proses distribusi, semakin besar pula jejak lingkungan yang dihasilkan.
                    </p>
                </div>

            </div>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Kualitas Material Bisa Menurun
            </h2>

            <div class="bg-green-50 border-l-4 border-green-500 rounded-r-lg p-5 my-6">

            <h3 class="text-lg font-bold text-green-700">
                📉 Tidak semua material dapat didaur ulang terus-menerus.
            </h3>

                <div class="mt-5">
                    <h4 class="font-semibold text-gray-800 mb-2">
                        📦 Contoh
                    </h4>

                    <ul class="list-disc pl-6 space-y-2 text-gray-700">
                        <li>
                            <span class="font-semibold">Kertas:</span>
                            Serat menjadi lebih pendek dan rapuh setelah beberapa kali didaur ulang.
                        </li>

                        <li>
                            <span class="font-semibold">Plastik:</span>
                            Sering mengalami penurunan kualitas (<em>downcycling</em>) sehingga tidak selalu dapat digunakan untuk produk yang sama.
                        </li>
                    </ul>
                </div>

                <div class="mt-5">
                    <h4 class="font-semibold text-green-600 mb-2">
                        ⚠️ Akibatnya
                    </h4>

                    <p class="text-gray-700">
                        Proses daur ulang tetap membutuhkan tambahan bahan baku baru
                        (<em>virgin material</em>) untuk menjaga kualitas produk.
                    </p>
                </div>

            </div>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Tidak Semua Daerah Memiliki Sistem Daur Ulang
            </h2>

            <p class="mb-2 mt-2">
                Karena Infrastruktur daur ulang belum merata.
                Masalah yang sering terjadi:
            </p>

            <ul class="pl-5 space-y-0">
                    <li> ❌ Sampah tidak dipilah dari rumah</li>
                    <li> ❌ Fasilitas daur ulang terbatas</li>
                    <li> ❌ Biaya pengangkutan mahal</li>
                    <li> ❌ Nilai jual material rendah</li>
            </ul>

            <p class="mb-2 mt-2">
                Akibatnya banyak sampah tetap dibuang atau dibakar.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Solusi yang Lebih Penting: Reduce & Reuse
            </h2>

            <p class="mb-2 mt-2">
                Daur ulang penting, tetapi:
                mengurangi sampah sejak awal jauh lebih efektif.
            </p>

            <p class="mb-2 mt-2">
                Mulai dari:
            </p>

            <ul class="list-disc pl-5 space-y-0">
                    <li>Mengurangi plastik sekali pakai</li>
                    <li>Menggunakan wadah pakai ulang</li>
                    <li>Belanja seperlunya</li>
                    <li>Menggunakan barang lebih lama</li>
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
                Apakah Daur Ulang Sudah Cukup untuk Menjaga Lingkungan?
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Pahami pentingnya reduce, reuse, dan daur ulang yang tepat bersama EnviroKualita.
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
