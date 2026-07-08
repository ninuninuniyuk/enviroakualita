@extends('layouts.app')

@section('title', 'LIFE CYCLE ASSESSMENT (LCA)')

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
            Life Cycle Assessment (LCA)
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            LIFE CYCLE ASSESSMENT (LCA)
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
            src="{{ asset('images/assets-news/news14.jpeg') }}"
            alt="Definisi LCA (Life Cycle Assessment)"
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
                Definisi LCA
            </h2>
            
            <p class="mb-2">
                Life Cycle Assessment (LCA) atau Kajian Daur Hidup adalah metode untuk mengevaluasi dampak lingkungan dari suatu produk, proses, atau layanan di seluruh siklus hidupnya.
            </p>

            <h4 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Life Cycle Assessment (LCA) digunakan untuk:
            </h4>

            <ul class="space-y-3 mt-4">
                <li class="flex gap-3">
                    <span class="text-[#146032] font-bold">.</span>
                    <span>mengidentifikasi penggunaan sumber daya (input) </span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-[#146032] font-bold">.</span>
                    <span>menghitung emisi dan limbah (output)</span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-[#146032] font-bold">.</span>
                    <span>mengevaluasi dampak lingkungan</span>
                </li>
            </ul>
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Tujuan LCA
            </h2>

            <p class="mb-2">
                Life Cycle Assessment (LCA) bertujuan untuk memberikan gambaran menyeluruh tentang dampak lingkungan suatu produk atau proses.
            </p>

            <p class="mb-2">
                Secara spesifik, LCA digunakan untuk:
            </p>
            
            <ul class="space-y-4 mt-4 mb-6">
                <li class="flex gap-3">
                    <span class="text-[#146032] font-bold">✔</span>
                    <span>Mengidentifikasi tahap dengan dampak terbesar (hotspot) </span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-[#146032] font-bold">✔</span>
                    <span>Membandingkan beberapa alternatif produk/proses</span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-[#146032] font-bold">✔</span>
                    <span>Membantu pengambilan keputusan berbasis lingkungan</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-[#146032] font-bold">✔</span>
                    <span>Meningkatkan efisiensi penggunaan energi dan sumber daya</span>
                </li>
            </ul>

            <p class="mb-2">
                Dengan LCA, keputusan tidak lagi berdasarkan asumsi, tetapi berdasarkan data.
            </p>
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Ruang Lingkup LCA
            </h2>
            
            <p class="text-gray-600 leading-7 mt-5 mb-4">
                Ruang lingkup (scope) dalam LCA adalah batasan dan aturan yang ditetapkan untuk menentukan seberapa luas dan detail analisis dilakukan.
            </p>

            <p class="text-gray-600 leading-7 mt-5 mb-4 font-bold">
                Batasan Sistem (System Boundaries):
            </p>

            <div class="space-y-5">

                <div class="flex gap-4 p-5 rounded-2xl border border-gray-200">
                    <div class="w-10 h-10 flex-shrink-0 bg-[#2B9048] text-white rounded-full flex items-center justify-center font-bold">
                        1
                    </div>

                    <p class="text-gray-600 leading-7">
                        Cradle-to-Grave: Dari ekstraksi bahan baku hingga pembuangan akhir.
                    </p>
                </div>

                <div class="flex gap-4 p-5 rounded-2xl border border-gray-200">
                    <div class="w-10 h-10 flex-shrink-0 bg-[#2B9048] text-white rounded-full flex items-center justify-center font-bold">
                        2
                    </div>

                    <p class="text-gray-600 leading-7">
                        Cradle-to-Gate: Dari ekstraksi bahan baku hingga produk keluar pintu pabrik.
                    </p>
                </div>

                <div class="flex gap-4 p-5 rounded-2xl border border-gray-200">
                    <div class="w-10 h-10 flex-shrink-0 bg-[#2B9048] text-white rounded-full flex items-center justify-center font-bold">
                        3
                    </div>

                    <p class="text-gray-600 leading-7">
                        Gate-to-Gate: Hanya mencakup satu tahapan proses di dalam pabrik.
                    </p>
                </div>

                <div class="flex gap-4 p-5 rounded-2xl border border-gray-200">
                    <div class="w-10 h-10 flex-shrink-0 bg-[#2B9048] text-white rounded-full flex items-center justify-center font-bold">
                        4
                    </div>

                    <p class="text-gray-600 leading-7">
                        Cradle-to-Cradle: Siklus tertutup di mana produk didaur ulang.
                    </p>
                </div>

            </div>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Tahapan LCA
            </h2>
            
            <p class="text-gray-600 leading-7 mt-5 mb-4">
                LCA terdiri dari empat tahapan utama yang saling terhubung:
            </p>

            <ul class="space-y-3 mt-4">
                <li class="flex gap-3">
                    <span class="text-[#146032] font-bold">✔</span>
                    <span>Goal & Scope Definition menentukan tujuan dan ruang lingkup studi </span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-[#146032] font-bold">✔</span>
                    <span>Life Cycle Inventory (LCI) Tahap pengumpulan dan perhitungan data input dan output </span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-[#146032] font-bold">✔</span>
                    <span>Life Cycle Impact Assessment (LCIA) melihat dampak lingkungan. </span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-[#146032] font-bold">✔</span>
                    <span>Interpretation menganalisis hasil LCA dan menarik kesimpulan.</span>
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
                Bangun Masa Depan yang Lebih Berkelanjutan
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Life Cycle Assessment (LCA) memberikan gambaran menyeluruh mengenai dampak lingkungan dari suatu produk atau proses. Dengan pendekatan berbasis data, LCA membantu menghasilkan keputusan yang lebih efektif, efisien, dan mendukung praktik pembangunan berkelanjutan.
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
