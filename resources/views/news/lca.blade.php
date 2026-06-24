@extends('layouts.app')

@section('title', 'Mengenal 4 Langkah Standar ISO dalam Life Cycle Assessment')

@section('content')

<!-- Hero -->
<section class="bg-gray-50 py-16">
    <div class="container-custom">

        <a href="/news"
           class="inline-flex items-center gap-2 text-green-700 font-medium hover:underline mb-8">
            ← Kembali ke News
        </a>

        <div class="max-w-5xl mx-auto">

            <span class="bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-medium">
                Life Cycle Assessment
            </span>

            <h1 class="text-4xl md:text-5xl font-bold mt-6 leading-tight">
                Mengenal 4 Langkah Standar ISO dalam Life Cycle Assessment
            </h1>

            <div class="flex items-center gap-4 text-gray-500 mt-5">
                <span>Enviroakualita</span>
                <span>•</span>
                <span>24 Juni 2026</span>
            </div>

        </div>

    </div>
</section>

<!-- Featured Image -->
<section class="pb-12">
    <div class="container-custom">

        <div class="max-w-5xl mx-auto">
            <img
                src="{{ asset('images/assets-news/news1.jpeg') }}"
                alt="Life Cycle Assessment"
                class="w-full h-[380px] object-cover rounded-3xl shadow-lg"
            >
        </div>

    </div>
</section>

<!-- Artikel -->
<section class="pb-20">
    <div class="container-custom">

        <div class="max-w-5xl mx-auto bg-white rounded-3xl shadow-sm p-8 md:p-12">

            <div class="text-gray-700 text-[16px] leading-8">

                <h3 class="text-2xl font-bold text-gray-900 mb-4">
                    Apa Itu Life Cycle Assessment?
                </h3>

                <p class="mb-6">
                    Life Cycle Assessment (LCA) adalah suatu metodologi ilmiah yang digunakan untuk mengevaluasi dampak lingkungan dari suatu produk, proses, atau sistem sepanjang seluruh siklus hidupnya, mulai dari pengambilan bahan mentah, proses produksi, distribusi, penggunaan, hingga akhir masa pakai atau pembuangan (cradle to grave) (KLHK, 2021).
                </p>

                <p class="mb-6">
                    LCA menjadi alat penting untuk strategis perencanaan mitigasi dampak lingkungan, pengembangan produk yang lebih berkelanjutan, dan pengambilan keputusan berbasis bukti dalam industri dan kebijakan lingkungan.
                </p>

                <h3 class="text-lg font-semibold text-gray-900 mb-2">
                    Empat tahapan dalam kajian LCA
                </h3>

                <ol class="list-decimal pl-5 space-y-2 text-gray-700">
                    <li>Penentuan tujuan dan ruang lingkup (Goal and Scope Definition)</li>
                    <li>Analisis inventori (Inventory Analysis)</li>
                    <li>Penilaian dampak lingkungan (Life Cycle Impact Assessment)</li>
                    <li>Interpretasi (Interpretation)</li>
                </ol>

                <h3 class="text-lg font-semibold text-[#146032] mb-2">
                    2. Life Cycle Inventory (LCI)
                </h3>

                <p class="mb-6">
                    Pengumpulan data terkait penggunaan energi, bahan baku,
                    air, emisi, dan limbah yang dihasilkan.
                </p>

                <h3 class="text-lg font-semibold text-[#146032] mb-2">
                    3. Life Cycle Impact Assessment (LCIA)
                </h3>

                <p class="mb-6">
                    Mengukur dan mengevaluasi dampak lingkungan berdasarkan
                    data yang telah dikumpulkan.
                </p>

                <h3 class="text-lg font-semibold text-[#146032] mb-2">
                    4. Interpretation
                </h3>

                <p>
                    Menarik kesimpulan dan menyusun rekomendasi perbaikan
                    berdasarkan hasil analisis.
                </p>

            </div>

        </div>

        <!-- CTA -->
        <div class="max-w-4xl mx-auto mt-12">

            <div class="bg-gradient-to-r from-[#9ACA40] to-[#146032] rounded-3xl p-10 text-white">

                <h3 class="text-3xl font-bold mb-4">
                    Butuh Pendampingan Life Cycle Assessment?
                </h3>

                <p class="text-lg opacity-90 mb-6">
                    Tim Enviroakualita siap membantu pelaksanaan kajian,
                    analisis data, hingga penyusunan laporan sesuai standar ISO.
                </p>

                <a href="/kontak">
                    <button class="bg-white text-[#146032] px-6 py-3 rounded-xl font-semibold hover:scale-105 transition">
                        Hubungi Kami
                    </button>
                </a>

            </div>

        </div>

    </div>
</section>

@endsection