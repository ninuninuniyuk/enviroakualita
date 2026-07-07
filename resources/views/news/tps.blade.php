@extends('layouts.app')

@section('title', 'TPS Limbah B3 Perusahaanmu Sudah Siap Nilai PROPER?')

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
            TPS Limbah B3 Perusahaanmu Sudah Siap Nilai PROPER?
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            TPS LIMBAH B3 PERUSAHAANMU SUDAH SIAP NILAI PROPER?
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
            src="{{ asset('images/assets-news/news29.jpeg') }}"
            alt="TPS Limbah B3 Perusahaanmu Sudah Siap Nilai PROPER?"
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
                Mengapa TPS Limbah Penting dalam PROPER?
            </h2>
            
            <p class="mb-2">
                Dalam penilaian PROPER, pengelolaan limbah menjadi salah satu aspek kepatuhan yang diperiksa.
            </p>

            <p>
                TPS yang tidak sesuai dapat menunjukkan:
            </p>

            <ul class="space-y-3 mb-2">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>pengelolaan limbah yang kurang baik</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>risiko pencemaran lingkungan</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>lemahnya sistem pengendalian perusahaan</span>
                </li>
            </ul>
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Aspek Legalitas (The Foundation)
            </h2>

            <p>
                Sebelum bicara fisik bangunan, auditor PROPER akan melihat dokumennya dulu.
            </p>

            <ul class="space-y-3 mb-2">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Memiliki Persetujuan Teknis (Pertek) atau rincian teknis penyimpanan Limbah B3 yang terintegrasi dalam Persetujuan Lingkungan (AMDAL/UKL-UPL).</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Titik Koordinat TPS harus sesuai dengan yang tertera di dokumen lingkungan.</span>
                </li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Desain & Bangunan Fisik (Kriteria Teknis)
            </h2>

            <p class="mb-2">
                Bangunan fisik TPS wajib memenuhi standar keselamatan untuk mencegah pencemaran:
            </p>

            <ul class="space-y-3 mb-2">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span><b> Atap Kedap Air:</b> Melindungi limbah dari hujan dan paparan sinar matahari langsung.</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span><b> Lantai Kedap Air:</b> Biasanya dilapisi epoksi atau semen khusus agar limbah cairan tidak meresap ke tanah.</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span><b> Sistem Drainase & Bak Penampung (Sump Pit):</b> Jika ada tumpahan cairan, harus mengalir ke bak penampung, bukan ke saluran air hujan umum (drainase domestik).</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span><b> Ventilasi & Penerangan:</b> Cukup untuk sirkulasi udara dan pencahayaan saat aktivitas bongkar muat.</span>
                </li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Tata Cara Penyimpanan (Kriteria Operasional)
            </h2>

            <p class="mb-2">
                Bagian dalam TPS tidak boleh berantakan. Aturannya:
            </p>

            <ul class="space-y-3 mb-2">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span><b> Simbol dan Label:</b> Setiap kemasan (drum/Ibc tank) wajib ditempel simbol Limbah B3 sesuai karakteristiknya (misal: mudah menyala, beracun, korosif) dan label identitas limbah.</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span><b> Sistem Palet:</b> Kemasan tidak boleh menyentuh lantai langsung, harus dialasi palet (kayu/plastik).</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span><b> Gunakan Sill Pallet/Spill Deck:</b> Khusus untuk limbah cair, untuk menampung ceceran.</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span><b> Pemisahan Karakteristik:</b> Limbah yang saling bereaksi (misal: asam dan basa) tidak boleh didekatkan, harus diberi sekat.</span>
                </li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Pencatatan (Kriteria Administrasi)
            </h2>

            <p class="mb-2">
                Peluang pengurangan poin PROPER paling sering terjadi di sini akibat kelalaian pencatatan.
            </p>

            <ul class="space-y-3 mb-2">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span><b> Logbook Masa Simpan:</b>  Catat kapan limbah masuk dan kapan keluar (ingat batas waktu penyimpanan sesuai aturan, misal 90, 180, atau 365 hari tergantung kategori limbah).</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span><b> Neraca Limbah B3:</b> Kesesuaian antara limbah yang dihasilkan, disimpan, dan yang diserahkan ke pihak ketiga berizin (terintegrasi dengan Festronik/Siraja).</span>
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
