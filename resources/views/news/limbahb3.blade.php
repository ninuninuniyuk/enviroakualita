@extends('layouts.app')

@section('title', 'MENGAPA OLI BEKAS TERMASUK LIMBAH B3?')

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
            Limbah B3
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            MENGAPA OLI BEKAS TERMASUK LIMBAH B3?
        </h1>

        <div class="flex flex-wrap items-center gap-3 text-gray-500 mt-4 text-sm">
            <span>Enviroakualita</span>
            <span>•</span>
            <span>29 Juni 2026</span>
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
            src="{{ asset('images/assets-news/news4.jpeg') }}"
            alt="Life Cycle Assessment"
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
                Bukan Sekarar Oli "KOTOR"
            </h2>

            <p class="mb-2">
                Oli bekas bukan lagi pelumas biasa. Selama digunakan di dalam mesin, zat ini telah mengalami perubahan total akibat:
            </p>
            
            <ol class="list-decimal pl-5">
                <li>Suhu Tinggi Ekstrem dari pembakaran mesin.</li>
                <li>Gesekan Kuat antar komponen logam.</li>
                <li>Kontaminasi Zat Luar seperti sisa bahan bakar, air, dan debu.</li>
                </ol>
                
            <p class="mb-2">
                Perubahan fisik dan kimia inilah yang melahirkan senyawa baru yang sangat beracun.
            </p>
                
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-2">
                Apa Saja di Dalam Oli Bekas?
            </h2>
                
            <p class="mb-2">
                Analisis laboratorium menunjukkan oli bekas sarat akan zat berbahaya:
            </p>
                
            <ol class="list-decimal pl-5">
                <li>Logam Berat: Mengandung Timbal (Pb), Merkuri (Hg), Kromium (Cr), dan Arsenik (As) hasil erosi komponen mesin.</li>
                <li>Senyawa PAHs: Polyaromatic Hydrocarbons, senyawa organik beracun sisa pembakaran yang sulit terurai.</li>
                <li>Aditif Kimia Terdegradasi: Sisa deterjen dan zat anti-karat yang telah rusak dan bersifat korosif/toksik </li>
            </ol>
                
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-2">
                Rasio Kerusakan 1 : 1.000.000!
            </h2>
                
            <p class="mb-2">
                Tahukah Anda? Hanya 1 LITER oli bekas mampu merusak kualitas 1.000.000 LITER air tawar (setara kebutuhan air bersih untuk 50 orang selama setahun!).
            </p>
                
            <p class="mb-2">
                Lembaga Perlindungan Lingkungan Amerika Serikat (US EPA) adalah salah satu sumber utama yang mempublikasikan data ini dalam program edukasi pengelolaan minyak bekas mereka (Used Oil Management Program) menyatakan bahwa minyak bumi atau oli bekas dalam jumlah kecil dapat menyebar membentuk lapisan tipis di atas permukaan air dengan radius yang sangat luas. Satu galon oli bekas (sekitar 3,78 liter) dapat mencemari hingga 1 juta galon air bersih (atau secara ekuivalen: 1 liter oli bekas mengkontaminasi sekitar 1 juta liter air).
            </p>
                
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-2">
                Dampak Infiltrasi yang Merusak
            </h2>
                
            <ol class="list-decimal pl-5">
                <li>Bagi Tanah: Tumpahan oli bekas menyumbat pori-pori tanah, mematikan mikroorganisme esensial, dan membuat tanah menjadi tidak produktif (tandus).</li>
                <li>Bagi perairan : Oli bekas tidak larut dalam air, melainkan mengapung dan membentuk lapisan film (oil slick). Lapisan tipis ini menghalangi difusi oksigen dari udara ke dalam air dan memblokir sinar matahari, sehingga menurunkan kadar Dissolved Oxygen (DO) secara drastis dan mematikan biota air </li>
                <li>Bagi Manusia: Logam berat dari oli bekas yang merembes ke air tanah akan masuk ke dalam rantai makanan dan bersifat akumulatif di tubuh manusia.</li>
            </ol>
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-2">
                Bahaya Kesehatan Jangka Panjang
            </h2>
            
            <p class="mb-2">
                Paparan oli bekas tanpa APD yang sesuai dapat memicu:
            </p>
            
            <ol class="list-decimal pl-5">
                <li>Efek Karsinogenik: Senyawa PAHs terbukti meningkatkan risiko kanker kulit, kanker paru-paru, dan kandung kemih.</li>
                <li>Kerusakan Organ: Akumulasi logam berat seperti Timbal (Pb) dapat merusak sistem saraf pusat dan mengganggu fungsi ginjal.</li>
            </ol>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-2">
                STOP! Jangan Lakukan 3 Hal Ini:
            </h2>
                
            <ol class="list-decimal pl-5">
                <li>Membuang ke Drainase: Menyebabkan pencemaran air permukaan secara masif.</li>
                <li>Membakar Secara Terbuka: Pelepasan gas beracun (dioksin & furan) langsung ke udara yang berbahaya jika terhirup.</li>
                <li>Menyimpan Tanpa Label/Simbol: Melanggar hukum regulasi dan berisiko memicu kecelakaan kerja di area storage.</li>
            </ol>
                
            </div>

        </article>

    </div>

    <!-- CTA -->
    <div
        class="max-w-4xl mx-auto mt-10"
        data-aos="fade-up"
        data-aos-delay="200"
    >

        <div class="bg-gradient-to-r from-[#9ACA40] to-[#146032] rounded-3xl p-6 md:p-10 text-white transition duration-500 hover:shadow-2xl">

            <h3 class="text-2xl md:text-3xl font-bold mb-2">
                Butuh Pendampingan Limbah B3?
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Tim Enviroakualita siap membantu pelaksanaan kajian, analisis data, hingga penyusunan laporan sesuai standar ISO 14040 dan ISO 14044.
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
