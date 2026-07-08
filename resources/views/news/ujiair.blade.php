@extends('layouts.app')

@section('title', 'Kenali Parameter Uji Air yang Paling Sering Digunakan Auditor Lingkungan')

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
            Kenali Parameter Uji Air yang Paling Sering Digunakan Auditor Lingkungan
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            Kenali Parameter Uji Air yang Paling Sering Digunakan Auditor Lingkungan
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
            src="{{ asset('images/assets-news/news23.jpeg') }}"
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
                Kenapa Parameter Air Penting?
            </h2>

            <p class="mb-2">
                Pengujian kualitas air dilakukan untuk:
            </p>

            <ul class="list-disc pl-5 space-y-0">
                    <li>Mengetahui tingkat pencemaran</li>
                    <li>Menilai kepatuhan terhadap regulasi</li>
                    <li>Melindungi lingkungan dan kesehatan</li>
                    <li>Menentukan efektivitas IPAL</li>
            </ul>

            <p class="mb-2 mt-2">
                Air limbah yang tidak memenuhi baku mutu dapat mencemari sungai, tanah, dan air tanah.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-4">
                Parameter
            </h2>

            <div class="bg-green-50 border-l-4 border-green-500 rounded-r-lg p-5 my-6">

    <h3 class="text-lg font-bold text-green-700">
        💧 Parameter pH (Derajat Keasaman)
    </h3>

    <p class="mt-2 text-gray-700">
        pH menunjukkan tingkat keasaman atau kebasaan air.
    </p>

            <!-- Tabel -->
            <div class="overflow-x-auto mt-4">
                    <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
                        <thead class="bg-green-100">
                            <tr>
                                <th class="border px-4 py-2 text-left">Nilai pH</th>
                                <th class="border px-4 py-2 text-left">Keterangan</th>
                            </tr>
                        </thead>

                        <tbody class="bg-white">
                            <tr>
                                <td class="border px-4 py-2">&lt; 7</td>
                                <td class="border px-4 py-2">Asam</td>
                            </tr>

                            <tr>
                                <td class="border px-4 py-2">7</td>
                                <td class="border px-4 py-2">Netral</td>
                            </tr>

                            <tr>
                                <td class="border px-4 py-2">&gt; 7</td>
                                <td class="border px-4 py-2">Basa</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h4 class="font-semibold mt-5 mb-2 text-gray-800">
                    ⚠️ Dampak pH Terlalu Rendah atau Tinggi
                </h4>

                <ul class="list-disc pl-6 space-y-1 text-gray-700">
                    <li>Membahayakan organisme air.</li>
                    <li>Menyebabkan korosi pada pipa.</li>
                    <li>Mengganggu proses biologis IPAL.</li>
                </ul>

                <p class="mt-5 text-sm text-gray-600 italic">
                    Parameter ini hampir selalu diuji dalam audit lingkungan.
                </p>

            </div>

            <div class="bg-green-50 border-l-4 border-green-500 rounded-r-lg p-5 my-6">

                <h3 class="text-lg font-bold text-green-700">
                    🧪 BOD (Biochemical Oxygen Demand)
                </h3>

                <p class="mt-3 text-gray-700">
                    BOD mengukur jumlah oksigen yang dibutuhkan mikroorganisme untuk menguraikan bahan organik dalam air.
                </p>

                <div class="mt-4">
                    <h4 class="font-semibold text-gray-800 mb-2">
                        📌 Semakin tinggi nilai BOD:
                    </h4>

                    <ul class="list-disc pl-6 space-y-1 text-gray-700">
                        <li>Semakin tinggi kebutuhan oksigen.</li>
                        <li>Semakin tinggi kandungan pencemar organik.</li>
                    </ul>
                </div>

                <div class="mt-5">
                    <h4 class="font-semibold text-red-600 mb-2">
                        ⚠️ Dampak
                    </h4>

                    <ul class="space-y-2 text-gray-700">
                        <li>❌ Menurunkan kadar oksigen di perairan.</li>
                        <li>❌ Membahayakan biota air.</li>
                    </ul>
                </div>

                <p class="mt-5 text-sm italic text-gray-500">
                    Umumnya digunakan untuk audit industri makanan, tahu, sawit, domestik, dan lainnya.
                </p>

            </div>

            <div class="bg-green-50 border-l-4 border-green-500 rounded-r-lg p-5 my-6">

                <h3 class="text-lg font-bold text-green-700">
                    🧪 COD (Chemical Oxygen Demand)
                </h3>

                <p class="mt-3 text-gray-700">
                    COD menunjukkan jumlah oksigen yang dibutuhkan untuk mengoksidasi bahan organik secara kimia. Nilai COD biasanya lebih tinggi daripada BOD karena mencakup senyawa yang sulit diuraikan secara biologis.
                </p>

                <div class="mt-5">
                    <h4 class="font-semibold text-gray-800 mb-2">
                        📌 Digunakan untuk
                    </h4>

                    <ul class="list-disc pl-6 space-y-1 text-gray-700">
                        <li>Mengetahui tingkat pencemaran air limbah.</li>
                        <li>Evaluasi efisiensi pengolahan limbah.</li>
                    </ul>
                </div>

            </div>

            <div class="bg-green-50 border-l-4 border-green-500 rounded-r-lg p-5 my-6">

                <h3 class="text-lg font-bold text-green-700">
                    🌊 TSS (Total Suspended Solid)
                </h3>

                <p class="mt-3 text-gray-700">
                    TSS adalah jumlah padatan tersuspensi yang terdapat di dalam air.
                </p>

                <div class="mt-5">
                    <h4 class="font-semibold text-gray-800 mb-2">
                        📦 Contoh
                    </h4>

                    <ul class="list-disc pl-6 space-y-1 text-gray-700">
                        <li>Lumpur</li>
                        <li>Partikel organik</li>
                        <li>Debu</li>
                        <li>Serat</li>
                    </ul>
                </div>

                <div class="mt-5">
                    <h4 class="font-semibold text-red-600 mb-2">
                        ⚠️ TSS tinggi dapat menyebabkan
                    </h4>

                    <ul class="space-y-2 text-gray-700">
                        <li>❌ Air menjadi keruh.</li>
                        <li>❌ Pendangkalan.</li>
                        <li>❌ Menghambat penetrasi cahaya di perairan.</li>
                    </ul>
                </div>

            </div>

            <div class="bg-green-50 border-l-4 border-green-500 rounded-r-lg p-5 my-6">

                <h3 class="text-lg font-bold text-green-700">
                    ☣️ Amonia (NH₃)
                </h3>

                <div class="mt-4">
                    <h4 class="font-semibold text-gray-800 mb-2">
                        📌 Berasal dari
                    </h4>

                    <ul class="list-disc pl-6 space-y-1 text-gray-700">
                        <li>Limbah domestik.</li>
                        <li>Sisa protein.</li>
                        <li>Aktivitas biologis.</li>
                    </ul>
                </div>

                <div class="mt-5">
                    <h4 class="font-semibold text-red-600 mb-2">
                        ⚠️ Kadar amonia tinggi dapat
                    </h4>

                    <ul class="space-y-2 text-gray-700">
                        <li>❌ Bersifat toksik bagi organisme air.</li>
                        <li>❌ Menimbulkan bau menyengat.</li>
                    </ul>
                </div>

            </div>

            <div class="bg-green-50 border-l-4 border-green-500 rounded-r-lg p-5 my-6">

                <h3 class="text-lg font-bold text-green-700">
                    ⚙️ Logam Berat
                </h3>

                <div class="mt-4">
                    <h4 class="font-semibold text-gray-800 mb-2">
                        📌 Contoh
                    </h4>

                    <ul class="list-disc pl-6 space-y-1 text-gray-700">
                        <li>Merkuri (Hg)</li>
                        <li>Timbal (Pb)</li>
                        <li>Kadmium (Cd)</li>
                        <li>Kromium (Cr)</li>
                    </ul>
                </div>

                <div class="mt-5">
                    <h4 class="font-semibold text-red-600 mb-2">
                        ⚠️ Mengapa berbahaya?
                    </h4>

                    <ul class="list-disc pl-6 space-y-1 text-gray-700">
                        <li>Bersifat toksik.</li>
                        <li>Sulit terurai.</li>
                        <li>Dapat terakumulasi dalam tubuh.</li>
                    </ul>
                </div>

                <p class="mt-5 text-sm italic text-gray-500">
                    Umumnya diuji pada industri manufaktur, pertambangan, electroplating, dan industri lainnya.
                </p>

            </div>

            <p class="mb-2">
                Memahami parameter kualitas air adalah langkah penting dalam menjaga lingkungan tetap aman dan sesuai regulasi.
            </p>

            <p class="mb-2 mt-2">
                Audit lingkungan bukan hanya soal dokumen, tapi juga memastikan kualitas lingkungan tetap terjaga.
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
                Kualitas Air yang Baik Dimulai dari Pengujian yang Tepat
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Pahami setiap parameter untuk mendukung pengelolaan lingkungan bersama EnviroKualita.
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
