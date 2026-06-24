@extends('layouts.app')

@section('title', 'Mengenal 4 Langkah Standar ISO dalam Life Cycle Assessment')

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
            Life Cycle Assessment
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            Mengenal 4 Langkah Standar ISO dalam Life Cycle Assessment
        </h1>

        <div class="flex flex-wrap items-center gap-3 text-gray-500 mt-4 text-sm">
            <span>Enviroakualita</span>
            <span>•</span>
            <span>24 Juni 2026</span>
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
            src="{{ asset('images/assets-news/news1.jpeg') }}"
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

            <h2 class="text-2xl font-bold text-gray-900 mb-4">
                Apa Itu Life Cycle Assessment?
            </h2>

            <p class="mb-5">
                Life Cycle Assessment (LCA) adalah suatu metodologi ilmiah yang digunakan untuk mengevaluasi dampak lingkungan dari suatu produk, proses, atau sistem sepanjang seluruh siklus hidupnya, mulai dari pengambilan bahan mentah, proses produksi, distribusi, penggunaan, hingga akhir masa pakai atau pembuangan (cradle to grave).
            </p>

            <p class="mb-5">
                LCA menjadi alat penting dalam perencanaan mitigasi dampak lingkungan, pengembangan produk yang lebih berkelanjutan, serta pengambilan keputusan berbasis data bagi perusahaan dan organisasi.
            </p>

            <div
                class="bg-gray-50 border border-gray-100 rounded-2xl p-5 my-8 transition duration-300 hover:shadow-md"
                data-aos="fade-up"
            >

                <h3 class="text-base font-semibold text-gray-900 mb-3">
                    Empat Tahapan dalam Kajian LCA
                </h3>

                <ol class="list-decimal pl-5 space-y-2">
                    <li>Penentuan tujuan dan ruang lingkup (Goal and Scope Definition)</li>
                    <li>Analisis inventori (Inventory Analysis)</li>
                    <li>Penilaian dampak lingkungan (Life Cycle Impact Assessment)</li>
                    <li>Interpretasi (Interpretation)</li>
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

            <h3 class="text-2xl md:text-3xl font-bold mb-4">
                Butuh Pendampingan Life Cycle Assessment?
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
