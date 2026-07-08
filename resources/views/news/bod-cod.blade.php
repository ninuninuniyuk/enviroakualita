@extends('layouts.app')

@section('title', 'Cara Mudah Memahami BOD dan COD')

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
            Cara Mudah Memahami BOD dan COD
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            Cara Mudah Memahami BOD dan COD
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
            src="{{ asset('images/assets-news/news32.jpeg') }}"
            alt="Cara Mudah Memahami BOD dan COD"
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
                BOD dan COD Itu Sama?
            </h2>

            <p class="mb-2">
                Keduanya sama-sama digunakan untuk mengukur tingkat pencemaran air limbah. Tetapi…
            </p>

            <ul class="pl-5 space-y-0">
                    <li> 📌 cara pengukurannya berbeda</li>
                    <li> 📌 parameter yang diukur berbeda</li>
                    <li> 📌 fungsi analisisnya juga berbeda</li>
            </ul>

            <div
                class="bg-gray-50 border border-gray-100 rounded-2xl p-5 my-8 transition duration-300 hover:shadow-md"
                data-aos="fade-up"
            >

                <h3 class="text-base font-semibold text-gray-900 mb-3">
                    BOD (Biological Oxygen Demand)
                </h3>

                <p class="mb-2">
                    BOD adalah jumlah oksigen yang dibutuhkan mikroorganisme untuk menguraikan bahan organik di dalam air secara biologis
                </p>

                <p class="mb-2 mt-2">
                    Saat limbah masuk ke perairan:
                </p>

                <ul class="pl-5 space-y-0">
                    <li> 🦠 mikroorganisme akan menguraikan bahan organik</li>
                    <li> ⚡ proses ini membutuhkan oksigen terlarut (DO)</li>                    
                </ul>

                <p class="mb-2 mt-2">
                    Semakin banyak bahan organik:
                </p>

                <ul class="pl-5 space-y-0">
                    <li> ➡ semakin banyak oksigen yang dibutuhkan</li>
                    <li> ➡ nilai BOD semakin tinggi</li>                    
                </ul>

                <h4 class="text-base font-semibold text-gray-900 mb-3 mt-2">
                    Fungsi Pengukuran BOD
                </h4>

                <p class="mb-2 mt-2">
                    BOD digunakan untuk mengetahui:
                </p>

                <ul class="pl-5 space-y-0">
                    <li> 💧 tingkat pencemaran organik dalam air</li>
                    <li> 🌱 kemampuan limbah terurai secara biologis</li>                    
                    <li> 🐟 potensi penurunan oksigen di perairan</li>                    
                </ul>

                <p class="mb-2 mt-2">
                    Jika BOD terlalu tinggi:
                </p>

                <ul class="pl-5 space-y-0">
                    <li> ⚠ oksigen di air menurun</li>
                    <li> ⚠ ikan dan organisme air bisa mati</li>                    
                    <li> ⚠ kualitas air memburuk</li>                    
                </ul>

                <h3 class="text-base font-semibold text-gray-900 mb-3 mt-3">
                    COD (Chemical Oxygen Demand)
                </h3>

                <p class="mb-2 mt-2">
                    COD adalah jumlah oksigen yang dibutuhkan untuk mengoksidasi bahan organik secara kimia.
                </p>

                <p class="mb-2 mt-2">
                    Pada pengujian COD:
                </p>

                <ul class="pl-5 space-y-0">
                    <li>
                        <span>🧪 digunakan bahan kimia oksidator kuat</span>
                        <p class="mb-2"> untuk menguraikan seluruh bahan organik dalam air.</p>
                    </li>                    
                </ul>

                <p class="mb-2 mt-2">
                    COD mengukur:
                </p>

                <ul class="pl-5 space-y-0">
                    <li> ✔ bahan organik biodegradable</li>
                    <li> ✔ bahan organik non-biodegradable</li>                                        
                </ul>

                <h4 class="text-base font-semibold text-gray-900 mb-3 mt-2">
                    Fungsi Pengukuran COD
                </h4>

                <p class="mb-2 mt-2">
                    COD digunakan untuk:
                </p>

                <ul class="pl-5 space-y-0">
                    <li> 📋 mengetahui total pencemar organik</li>
                    <li> ⚡ analisis cepat kualitas limbah</li>                                        
                    <li> 🏭 monitoring efektivitas IPAL</li>
                    <li> 🌍 pengendalian pencemaran lingkungan</li>                                        
                </ul>

                <ul class="pl-5 space-y-0">
                    <li>
                        <span>Karena pengujiannya menggunakan reaksi kimia:</span>
                        <p class="mb-2"> ⏳ hasil COD lebih cepat dibanding BOD</p>
                    </li>                    
                </ul>

                <h3 class="text-base font-semibold text-gray-900 mb-3 mt-3">
                    Perbedaan Utama BOD dan COD
                </h3>

                <div class="overflow-x-auto my-6">
                    <table class="w-full border border-green-200 rounded-lg overflow-hidden">
                        <thead class="bg-green-600 text-white">
                            <tr>
                                <th class="px-6 py-3 text-center font-semibold">BOD</th>
                                <th class="px-6 py-3 text-center font-semibold">COD</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white text-gray-700">

                            <tr class="border-b border-green-100">
                                <td class="px-6 py-4">🦠 Menggunakan mikroorganisme</td>
                                <td class="px-6 py-4">🧪 Menggunakan reaksi kimia</td>
                            </tr>

                            <tr class="border-b border-green-100 bg-green-50">
                                <td class="px-6 py-4">📦 Mengukur bahan organik biodegradable</td>
                                <td class="px-6 py-4">📊 Mengukur total bahan organik</td>
                            </tr>

                            <tr class="border-b border-green-100">
                                <td class="px-6 py-4">⏳ Waktu uji ±5 hari</td>
                                <td class="px-6 py-4">⚡ Waktu uji lebih cepat</td>
                            </tr>

                            <tr class="border-b border-green-100 bg-green-50">
                                <td class="px-6 py-4">🦠 Dipengaruhi aktivitas bakteri</td>
                                <td class="px-6 py-4">🚫 Tidak dipengaruhi mikroorganisme</td>
                            </tr>

                            <tr>
                                <td class="px-6 py-4">📉 Nilai biasanya lebih rendah</td>
                                <td class="px-6 py-4">📈 Nilai biasanya lebih tinggi</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <h3 class="text-base font-semibold text-gray-900 mb-3 mt-3">
                    Kenapa Nilai COD Biasanya Lebih Tinggi?
                </h3>

                <p class="mb-2 mt-2">
                    Karena COD mengukur:
                </p>

                <ul class="pl-5 space-y-0">
                    <li> ✔ bahan organik yang bisa diuraikan mikroorganisme</li>
                    <li> ✔ bahan organik yang sulit diuraikan secara biologis</li>                                       
                </ul>
                

                <p class="mb-2 mt-2">
                    Sedangkan BOD hanya mengukur:
                </p>

                <ul class="pl-5 space-y-0">
                    <li> 🦠 bahan organik yang bisa diuraikan mikroorganisme</li>                                  
                </ul>

                <p class="mb-2 mt-2">
                    Maka nilai COD hampir selalu lebih besar daripada BOD.
                </p>

            </div>

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
                Sudah Paham Perbedaan BOD dan COD?
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Kenali fungsi BOD dan COD untuk membantu memahami kualitas air limbah bersama EnviroKualita.
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
