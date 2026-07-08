@extends('layouts.app')

@section('title', 'AIR JERNIH BELUM TENTU AMAN')

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
       class="inline-flex items-center gap-2 text-[#146032] font-medium hover:underline mb-6">
        ← Kembali ke News
    </a>

    <div
        class="max-w-4xl mx-auto"
        data-aos="fade-up"
    >

        <span class="bg-[#2B9048]/10 text-[#2B9048] px-4 py-2 rounded-full text-sm font-medium">
            Air Jernih Belum Tentu Aman
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            AIR JERNIH BELUM TENTU AMAN
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
            src="{{ asset('images/assets-news/news8.jpeg') }}"
            alt="Air Jernih Belum Tentu Aman"
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
                Tahukah Kamu?
            </h2>
            
            <p class="mb-2">
                Menurut World Health Organization: Lebih dari 1,7 miliar orang di dunia masih menggunakan air yang terkontaminasi.
            </p>

            <p class="mb-2">
                Menurut <strong> Permenkes No. 2 Tahun 2023 </strong>, air memiliki baku mutu atau standar tertentu agar dapat digunakan dengan aman. Penilaian kualitas air tersebut didasarkan pada tiga parameter utama, yaitu parameter fisik, kimia, dan mikrobiolog
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Parameter Fisik
            </h2>

            <div class="overflow-x-auto mt-5 mb-8">
                <table class="w-full border border-gray-200 rounded-xl overflow-hidden text-sm md:text-base">
                    <thead class="bg-[#2B9048] text-gray-900">
                        <tr>
                            <th class="border border-gray-200 px-4 py-3 text-center font-semibold">
                                Parameter
                            </th>
                            <th class="border border-gray-200 px-4 py-3 text-center font-semibold">
                                Penjelasan
                            </th>
                            <th class="border border-gray-200 px-4 py-3 text-center font-semibold">
                                Kadar Maksimum
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white text-gray-700">
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                Suhu
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                Mempengaruhi aktivitas organisme air
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                Suhu Udara ± 30°C
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                Kekeruhan
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                Menunjukkan banyaknya partikel tersuspensi
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                < 3 NTU
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                Warna
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                Dapat menunjukkan adanya bahan organik atau logam
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                10 TCU
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                Bau
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                 Indikasi adanya kontaminasi
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                Tidak Berbau
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Parameter Kimia
            </h2>
            
            <p class="text-gray-600 leading-7 mt-5 mb-4">
                Parameter kimia menunjukkan kandungan zat kimia yang terlarut dalam air.
            </p>
            
            <div class="overflow-x-auto mt-5 mb-8">
                <table class="w-full border border-gray-200 rounded-xl overflow-hidden text-sm md:text-base">
                    <thead class="bg-[#2B9048] text-gray-900">
                        <tr>
                            <th class="border border-gray-200 px-4 py-3 text-center font-semibold">
                                Senyawa
                            </th>
                            <th class="border border-gray-200 px-4 py-3 text-center font-semibold">
                                Kadar Maksimum
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody class="bg-white text-gray-700">
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                pH
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                6,5 - 8,5
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                Nitrat (Sebagai NO3)
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                20 mg/L
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                Nitrit (Sebagai NO2)
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                3 mg/L
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                Besi (Fe)
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                0,2 mg/L
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                Mangan (Mn)
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                0,1 mg/L
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                Arsen (As)
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                0,01 mg/L
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                Kadmium (Cd)
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                0,003 mg/L
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                Tirnbal (Pb)
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                0,01 mg/L
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                Flotrride (F)
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                1,5 mg/L
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                Aluminium (Al)
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                0,2 mg/L
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Parameter Mikrobiologi
            </h2>
            
            <p class="text-gray-600 leading-7 mt-5 mb-4">
                Ini yang paling berbahaya karena tidak terlihat sama sekali.
            </p>

            <div class="overflow-x-auto mt-5 mb-8">
                <table class="w-full border border-gray-200 rounded-xl overflow-hidden text-sm md:text-base">
                    <thead class="bg-[#2B9048] text-gray-900">
                        <tr>
                            <th class="border border-gray-200 px-4 py-3 text-center font-semibold">
                                Parameter
                            </th>
                            <th class="border border-gray-200 px-4 py-3 text-center font-semibold">
                                Penjelasan
                            </th>
                            <th class="border border-gray-200 px-4 py-3 text-center font-semibold">
                                Kadar Maksimum
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white text-gray-700">
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                Escherichia coli (E. coli)
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                 Indikator
                                 spesifik pencemaran tinja yang patogen.

                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                0 CFU/100ml
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                Total Coliform
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                Indikator adanya kontaminasi kotoran atau bakteri patogen
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                0 CFU/100ml
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium text-center">
                                Plankton
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                Keberadaan plankton (fitoplankton/zooplankton) sebagai indikator kesuburan perairan.
                            </td>
                            <td class="border border-gray-200 px-4 py-3 text-center">
                                -
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <p class="text-gray-600 leading-7 mt-5 mb-4">
                Kehadiran bakteri ini dapat menjadi indikator pencemaran dari limbah domestik atau kotoran manusia/hewan.
            </p>

    <!-- CTA -->
    <div
        class="max-w-4xl mx-auto mt-10"
        data-aos="fade-up"
        data-aos-delay="200"
    >

        <div class="bg-gradient-to-r from-[#9ACA40] to-[#146032] rounded-3xl p-6 md:p-10 text-white transition duration-500 hover:shadow-2xl">

            <h3 class="text-2xl md:text-3xl font-bold mb-2">
                Pastikan Air yang Digunakan Benar-Benar Aman
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Air yang tampak jernih belum tentu memenuhi standar kualitas air. Melalui pengujian parameter fisik, kimia, dan mikrobiologi, kualitas air dapat dinilai secara menyeluruh sehingga aman digunakan sesuai kebutuhan dan memenuhi ketentuan yang berlaku.
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
