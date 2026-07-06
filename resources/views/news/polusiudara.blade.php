@extends('layouts.app')

@section('title', 'Udah Tau Sumber Polusi Udara Terbesar?')

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
            Udah Tau Sumber Polusi Udara Terbesar?
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
            src="{{ asset('images/assets-news/news12.jpeg') }}"
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
                Udah Tau Sumber Polusi Udara Terbesar?
            </h2>    

            <p class="mb-2">
                Banyak yang mikir cuma dari pabrik…
                Padahal, aktivitas sehari-hari juga jadi penyumbang utama!

            </p>
            

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Sumber Utama Polusi Udara
            </h2>

            <p class="mb-2">
                Beberapa sumber terbesar yang sering kita temui:
            </p>

            <ul class="pl-5 space-y-0">
                    <li> 🚗 Transportasi → kendaraan bermotor berbahan bakar fosil</li>
                    <li> 🏭 Industri & Pabrik → emisi dari proses produksi</li>
                    <li> 🔥 Pembakaran terbuka → sampah & lahan</li>
                    <li> 🏠 Rumah tangga → penggunaan kayu, arang, atau bahan bakar tradisional</li>
            </ul>

            <p class="mb-2">
                ➡ Di perkotaan, transportasi sering jadi penyumbang terbesar
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Apa yang Dihasilkan?
            </h2>

            <p class="mb-2">
                Sumber tersebut menghasilkan polutan berbahaya:
            </p>

            <ul class="list-disc pl-5 space-y-0">
                    <li>CO (Karbon Monoksida) → mengganggu oksigen dalam tubuh</li>
                    <li>NOx (Nitrogen Oksida) → memicu iritasi & hujan asam</li>
                    <li>SO₂ (Sulfur Dioksida) → berdampak pada paru-paru</li>
                    <li>PM2.5 (Partikel halus) → bisa masuk hingga ke paru-paru</li>
            </ul>

            <p class="mb-2">
                ⚠ Tidak terlihat, tapi sangat berbahaya!
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Langkah Sederhana untuk Mengurangi Dampak Lingkungan
            </h2>

            <p class="mb-2">
                Mulai dari hal sederhana:
            </p>

            <ul class="pl-5 space-y-0">
                <li> ✔ Gunakan transportasi umum / carpool</li>
                <li> ✔ Hindari membakar sampah</li>
                <li> ✔ Gunakan energi yang lebih bersih</li>
                <li> ✔ Tingkatkan awareness lingkungan</li>
            </ul>
                
            <p class="mb-2 mt-2">
                Udara bersih = investasi kesehatan kita 🌱
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
                Mau lebih paham tentang pengelolaan lingkungan & polusi?
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Yuk, upgrade skill kamu lewat pelatihan & sertifikasi bersama Envirokualita!
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
