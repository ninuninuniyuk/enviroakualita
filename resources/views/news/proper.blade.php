@extends('layouts.app')

@section('title', 'Kompetensi SDM untuk PROPER')

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
            Kompetensi SDM untuk PROPER
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            KOMPETENSI SDM UNTUK PROPER
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
            src="{{ asset('images/assets-news/news15.jpeg') }}"
            alt="Kompetensi SDM untuk PROPER"
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
                Definisi PROPER
            </h2>
            
            <p class="mb-2">
                Program Penilaian Peringkat Kinerja Perusahaan dalam Pengelolaan Lingkungan Hidup yang selanjutnya disebut PROPER adalah evaluasi kinerja penanggung jawab usaha dan/atau kegiatan di bidang pengelolaan lingkungan hidup (Kementerian Lingkungan Hidup dan Kehutanan Republik Indonesia, 2021).
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Dasar Pedoman PROPER
            </h2>

            <p class="mb-2">
                <span class="bg-gradient-to-t from-lime-300 to-transparent px-1">
                    PerMen LH BPLH Nomor 7 Tahun 2025 tentang PROPER
                </span>
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Pelatihan dan Kompetensi
            </h2>

            <p class="mb-2">
                Menurut PerMen LH BPLH Nomor 7 Tahun 2025 tentang PROPER, SDM/staff menjadi faktor penilaian penting.
            </p>

            <p class="mb-2">
                Banyak perusahaan fokus pada:
            </p>

            <ul class="space-y-3 mb-2">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Alat pengolahan </span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Teknologi</span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Fasilitas lingkungan</span>
                </li>
            </ul>
            
            <p class="mb-2">
                Tapi ada satu hal penting yaitu, saiapa yang mengelola semua itu.
            </p>

            <div class="overflow-x-auto mt-5 mb-8">
                <table class="w-full border border-gray-200 rounded-xl overflow-hidden text-sm md:text-base">
                    <thead class="bg-[rgb(43,144,72)] text-white">
                        <tr>
                            <th class="border border-gray-200 px-4 py-3 text-center font-semibold w-1/4">
                                Pelatihan dan Kompetensi
                            </th>
                            <th class="border border-gray-200 px-4 py-3 text-center font-semibold">
                                Kualifikasi
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white text-gray-700">
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium">
                                Pelatihan dan Kompetensi
                            </td>

                            <td class="border border-gray-200 px-4 py-3">
                                Di dalam tim manajemen energi terdapat staf yang memiliki kualifikasi:
                                <ol class="list-[lower-alpha] ml-6 mt-2 space-y-1">
                                    <li>Auditor energi</li>
                                    <li>Pelatihan di bidang auditor energi</li>
                                    <li>Latar belakang pendidikan yang berkaitan dengan auditor energi</li>
                                </ol>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="overflow-x-auto mt-5 mb-8">
                <table class="w-full border border-gray-200 rounded-xl overflow-hidden text-sm md:text-base">
                    <thead class="bg-[rgb(43,144,72)] text-white">
                        <tr>
                            <th class="border border-gray-200 px-4 py-3 text-center font-semibold w-1/4">
                                Pelatihan dan Kompetensi
                            </th>
                            <th class="border border-gray-200 px-4 py-3 text-center font-semibold">
                                Kualifikasi
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white text-gray-700">
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium">
                                Pelatihan dan Kompetensi
                            </td>

                            <td class="border border-gray-200 px-4 py-3">
                                Di dalam tim pengelolaan sampah terdapat staf yang memiliki kualifikasi:
                                <ol class="list-[lower-alpha] ml-6 mt-2 space-y-1">
                                    <li>Sertifikasi profesi profesional.</li>
                                    <li>Pelatihan di bidang pengelolaan sampah atau latar belakang pendidikan yang berkaitan dengan pengelolaan sampah.</li>
                                </ol>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Beberapa Aspek dalam PROPER yang membutuhkan sertifikasi beserta contohnya
            </h2>

            <div class="space-y-5">

                <div class="flex gap-4 p-5 rounded-2xl border border-gray-200">

                    <div class="w-10 h-10 flex-shrink-0 bg-[#2B9048] text-white rounded-full flex items-center justify-center font-bold">
                        1
                    </div>

                    <div class="flex flex-col">
                        <p class="text-gray-600 leading-7 font-semibold">
                            Efisiensi Energi:
                        </p>

                        <p class="mt-2">
                            <span class="bg-gradient-to-t from-lime-300 to-transparent px-1">
                                Pelatihan & Sertifikasi Auditor Energi
                            </span>
                        </p>
                    </div>

                </div>

                <div class="flex gap-4 p-5 rounded-2xl border border-gray-200">

                    <div class="w-10 h-10 flex-shrink-0 bg-[#2B9048] text-white rounded-full flex items-center justify-center font-bold">
                        2
                    </div>

                    <div class="flex flex-col">
                        <p class="text-gray-600 leading-7 font-semibold">
                            Penurunan Emisi:
                        </p>

                        <p class="mt-2">
                            <span class="bg-gradient-to-t from-lime-300 to-transparent px-1">
                                Pelatihan & Sertifikasi Pengendalian Pencemaran Udara (PPU)
                            </span>
                        </p>
                    </div>

                </div>

                <div class="flex gap-4 p-5 rounded-2xl border border-gray-200">

                    <div class="w-10 h-10 flex-shrink-0 bg-[#2B9048] text-white rounded-full flex items-center justify-center font-bold">
                        3
                    </div>

                    <div class="flex flex-col">
                        <p class="text-gray-600 leading-7 font-semibold">
                            Efisiensi Air dan Penurunan Beban Air Limbah:
                        </p>

                        <p class="mt-2">
                            <span class="bg-gradient-to-t from-lime-300 to-transparent px-1">
                                Pelatihan & Sertifikasi Pengendalian Pencemaran Air (PPA)
                            </span>
                        </p>

                        <p class="mt-2">
                            <span class="bg-gradient-to-t from-lime-300 to-transparent px-1">
                                Pelatihan & Sertifikasi Pengambilan Contoh Uji Air (PCUA)
                            </span>
                        </p>
                    </div>

                </div>

                <div class="flex gap-4 p-5 rounded-2xl border border-gray-200">

                    <div class="w-10 h-10 flex-shrink-0 bg-[#2B9048] text-white rounded-full flex items-center justify-center font-bold">
                        4
                    </div>

                    <div class="flex flex-col">
                        <p class="text-gray-600 leading-7 font-semibold">
                            Pengurangan dan Pemanfaatan Limbah B3
                        </p>

                        <p class="mt-2">
                            <span class="bg-gradient-to-t from-lime-300 to-transparent px-1">
                                Pelatihan & Sertifikasi Pemantauan Pengolahan Limbah B3 (PLB3)
                            </span>
                        </p>
                    </div>

                </div>

                <div class="flex gap-4 p-5 rounded-2xl border border-gray-200">
                    <div class="w-10 h-10 flex-shrink-0 bg-[#2B9048] text-white rounded-full flex items-center justify-center font-bold">
                        5
                    </div>

                    <p class="text-gray-600 leading-7">
                        Pengurangan dan Pemanfaatan Limbah Non B3
                    </p>
                </div>

                <div class="flex gap-4 p-5 rounded-2xl border border-gray-200">

                    <div class="w-10 h-10 flex-shrink-0 bg-[#2B9048] text-white rounded-full flex items-center justify-center font-bold">
                        6
                    </div>

                    <div class="flex flex-col">
                        <p class="text-gray-600 leading-7 font-semibold">
                            Pengurangan dan Pemanfaatan Sampah
                        </p>

                        <p class="mt-2">
                            <span class="bg-gradient-to-t from-lime-300 to-transparent px-1">
                                Pelatihan & Sertifikasi Pemantauan & Analisis Pengolahan Sampah/Limbah Padat Non B3 (PLNB3)
                            </span>
                        </p>

                        <p class="mt-2">
                            <span class="bg-gradient-to-t from-lime-300 to-transparent px-1">
                                Pelatihan & Sertifikasi Mengoperasikan Pengolahan Sampah/Limbah Padat Non B3 SKKNI (OPLNB3)
                            </span>
                        </p>
                    </div>

                </div>

                <div class="flex gap-4 p-5 rounded-2xl border border-gray-200">

                    <div class="w-10 h-10 flex-shrink-0 bg-[#2B9048] text-white rounded-full flex items-center justify-center font-bold">
                        7
                    </div>

                    <div class="flex flex-col">
                        <p class="text-gray-600 leading-7 font-semibold">
                            Life Cycle Assessment
                        </p>

                        <p class="mt-2">
                            <span class="bg-gradient-to-t from-lime-300 to-transparent px-1">
                                Pelatihan & Sertifikasi LCA
                            </span>
                        </p>
                    </div>

                </div>

            </div>

 
    <!-- CTA -->
    <div
        class="max-w-4xl mx-auto mt-10"
        data-aos="fade-up"
        data-aos-delay="200"
    >

        <div class="bg-gradient-to-r from-[#9ACA40] to-[#146032] rounded-3xl p-6 md:p-10 text-white transition duration-500 hover:shadow-2xl">

            <h3 class="text-2xl md:text-3xl font-bold mb-2">
                Tingkatkan Kompetensi SDM untuk Mendukung Kinerja PROPER
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Keberhasilan penerapan PROPER tidak hanya bergantung pada sistem, tetapi juga pada kompetensi sumber daya manusia. Pastikan tim Anda memiliki pengetahuan dan sertifikasi yang sesuai untuk mendukung pengelolaan lingkungan yang efektif, patuh regulasi, dan berkelanjutan.
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
