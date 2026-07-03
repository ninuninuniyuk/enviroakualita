@extends('layouts.app')

@section('title', 'PUASA PLASTIK')

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
            Puasa Plastik, Yuk!
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            PUASA PLASTIK, YUK!
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
            src="{{ asset('images/assets-news/news7.jpeg') }}"
            alt="Puasa Plastik, Yuk!"
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
                Sampah Saat Ramadhan Meningkat
            </h2>
            
            <p class="mb-2">
                Selama Ramadhan, volume sampah sering meningkat karena konsumsi makanan dan kemasan sekali pakai. Data dari Kementerian Lingkungan Hidup menunjukkan bahwa: Produksi sampah selama Ramadhan di tahun 2023 meningkat sekitar 20% dibanding hari biasa.
            </p>

            <p class="mb-2">
                Banyak sampah berasal dari kemasan makanan dan minuman sekali pakai
            </p>

            <ul class="space-y-3 mt-4">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">✔</span>
                    <span>Kantong plastik </span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">✔</span>
                    <span>Gelas plastik minuman</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">✔</span>
                    <span>Sendok plastik</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">✔</span>
                    <span>Bungkus makanan</span>
                </li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Kenapa Harus Mengurangi Plastik?
            </h2>

            <div class="grid gap-5">

                <!-- Card 1 -->
                <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-green-300 hover:shadow-lg transition-all duration-300">

                    <div>
                        <span class="inline-block bg-[#2B9048] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                            Mencemari sungai dan laut
                        </span>

                        <p class="text-gray-600 leading-7">
                            Setiap tahun sekitar 9–14 juta ton plastik masuk ke laut dunia.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-green-300 hover:shadow-lg transition-all duration-300">

                    <div>
                        <span class="inline-block bg-[#2B9048] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                            Sulit terurai
                        </span>

                        <p class="text-gray-600 leading-7">
                            Plastik membutuhkan puluhan hingga ratusan tahun untuk terurai di alam tergantung jenisnya.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-green-300 hover:shadow-lg transition-all duration-300">

                    <div>
                        <span class="inline-block bg-[#2B9048] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                            Membahayakan ekosistem
                        </span>

                        <p class="text-gray-600 leading-7">
                            Sampah plastik dapat berubah menjadi mikroplastik yang masuk ke tubuh hewan dan manusia.
                        </p>
                    </div>
                </div>
                
            </div>

            <p class="text-gray-600 leading-7 mt-5 mb-4">
                Akibatnya, pencemaran plastik tidak hanya merusak lingkungan, tetapi juga berdampak pada kesehatan manusia.
            </p>
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Solusi Terbaik!
            </h2>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
                
                <!-- Item 1 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-5 text-center hover:border-green-400 hover:shadow-lg transition-all duration-300">
                    <p class="text-gray-700 font-medium leading-6">
                        Membawa tumbler
                        untuk minum
                    </p>
                </div>
                
                <!-- Item 2 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-5 text-center hover:border-green-400 hover:shadow-lg transition-all duration-300">
                    <p class="text-gray-700 font-medium leading-6">
                        Membawa wadah<br>
                        makanan sendiri
                    </p>
                </div>
                
                <!-- Item 3 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-5 text-center hover:border-green-400 hover:shadow-lg transition-all duration-300">
                    <p class="text-gray-700 font-medium leading-6">
                        Menolak pemberian<br>
                        alat makan sekali pakai
                    </p>
                </div>
                
                <!-- Item 4 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-5 text-center hover:border-green-400 hover:shadow-lg transition-all duration-300">
                    <p class="text-gray-700 font-medium leading-6">
                        Menggunakan tas<br>
                        belanja reusable
                    </p>
                </div>
                
            </div>

            <p class="text-gray-600 leading-7 mt-5 mb-4">
                Langkah kecil ini dapat mengurangi banyak sampah plastik selama Ramadhan.
            </p>

    <!-- CTA -->
    <div
        class="max-w-4xl mx-auto mt-10"
        data-aos="fade-up"
        data-aos-delay="200"
    >

        <div class="bg-gradient-to-r from-[#9ACA40] to-[#146032] rounded-3xl p-6 md:p-10 text-white transition duration-500 hover:shadow-2xl">

            <h3 class="text-2xl md:text-3xl font-bold mb-2">
                Kurangi Plastik, Selamatkan Bumi
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Tidak perlu menunggu orang lain. Mulailah dari diri sendiri dengan mengurangi plastik sekali pakai dalam aktivitas sehari-hari.
            </p>

            <a href="/kontak">
                <button class="bg-white text-[#146032] px-6 py-3 rounded-xl font-semibold transition-all duration-300 hover:scale-105 hover:shadow-lg">
                    Ayo Mulai
                </button>
            </a>

        </div>

    </div>

</div>

</section>

@endsection
