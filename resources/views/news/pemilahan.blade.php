@extends('layouts.app')

@section('title', 'Pentingnya Pemilahan')

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
       class="inline-flex items-center gap-2 text-[#2B9048] font-medium hover:underline mb-6">
        ← Kembali ke News
    </a>

    <div
        class="max-w-4xl mx-auto"
        data-aos="fade-up"
    >

        <span class="bg-[#2B9048]/10 text-[#2B9048] px-4 py-2 rounded-full text-sm font-medium">
            Pentingnya Pemilahan
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            STOP CAMPUR! TERNYATA BANYAK MASALAH LIMBAH BERAWAL DARI SINI
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
            src="{{ asset('images/assets-news/news30.jpeg') }}"
            alt="Pemilahan Limbah"
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

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Mengapa Pemilahan Limbah Menjadi Langkah Pertama yang Penting?
            </h2>
            
            <p class="mb-2">
                Pengelolaan limbah yang baik selalu dimulai dari pemilahan yang tepat. Pemilahan limbah adalah proses mernisahkan limbah berdasarkan:
            </p>

            <ul class="mb-2">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Jenis limbah</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Karakteristik bahaya</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Potensi pemanfaatan kembali</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Sumber limbah</span>
                </li>
            </ul>

            <p class="mb-2">
                Tujuannya agar setiap limbah mendapatkan penanganan yang sesuai
            </p>
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Mengapa Harus Dipilah?
            </h2>

            <p>
                Bayangkan jika semua limbah dicampur menjadi satu.
                <br>Akibatnya:
            </p>

            <ul class="mb-2">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Sulit didaur ulang</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Biaya pengelolaan meningkat</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Risiko pencemaran lebih besar</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Potensi pemanfaatan limbah berkurang</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Membahayakan pekerja</span>
                </li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Pemilahan Membantu Mencegah Pencemaran
            </h2>

            <p class="mb-2">
                Contohnya:
                
                <br>Kemasan bahan kimia dicampur dengan Kertas bekas, Akibatnya:
            </p>

            <ul class="mb-2">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Kertas yang sebenarnya masih bisa didaur ulang menjadi terkontaminasi.Kertas yang sebenarnya masih bisa didaur ulang menjadi terkontaminasi.</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Volume limbah yang harus dikelola khusus menjadi lebih banyak.</span>
                </li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Pemilahan Membantu Efisiensi Pengelolaan
            </h2>

            <p>
                Dengan pemilahan yang benar:
            </p>

            <ul class="mb-2">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Limbah yang masih bernilai dapat dimanfaatkan kembali</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Pengangkutan menjadi lebih mudah</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Biaya pengelolaan dapat ditekan</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Data limbah menjadi lebih akurat</span>
                </li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Pemilahan yang Baik Mendukung Kepatuhan Lingkungan
            </h2>

            <p>
                Pemilahan limbah membantu perusahaan:
            </p>

            <ul class="mb-2">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Memenuhi regulasi lingkungan</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Mendukung pengelolaan TPS yang baik</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Mengurangi risiko temuan audit</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Mendukung penilaian PROPER</span>
                </li>
            </ul>

    <!-- CTA -->
    <div
        class="max-w-4xl mx-auto mt-10"
        data-aos="fade-up"
        data-aos-delay="200"
    >

        <div class="bg-gradient-to-r from-[#9ACA40] to-[#146032] rounded-3xl p-6 md:p-10 text-white transition duration-500 hover:shadow-2xl">

            <h3 class="text-2xl md:text-3xl font-bold mb-2">
                Sudah waktunya action!
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
               Jadi Auditor Bersertifikat BNSP Sekarang bersama Envirokualita
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
