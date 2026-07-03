@extends('layouts.app')

@section('title', 'Tanaman Hias di Kantor Bisa Meningkatkan Produktivitas')

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
            Tanaman Hias di Kantor Bisa Meningkatkan Produktivitas

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
            src="{{ asset('images/assets-news/news10.jpeg') }}"
            alt="Tanaman Hias"
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
                Tanaman Hias di Kantor Bisa Meningkatkan Produktivitas 🌿
            </h2>

            <p class="mb-2">
                Bukan hanya mempercantik ruangan,
                tanaman hijau di kantor ternyata bisa mempengaruhi kinerja dan kenyamanan kerja.
            </p>

            <div
                class="bg-gray-50 border border-gray-100 rounded-2xl p-5 my-8 transition duration-300 hover:shadow-md"
                data-aos="fade-up">

            <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                Manfaat
            </h3>

            <p class="mb-2">
                🌿 Mengurangi Stres di Tempat Kerja
            </p>

            <p class="mb-2 mt-2">
                Lingkungan kerja dengan tanaman hijau dapat membantu:
            </p>

                <ul class="list-disc pl-5 space-y-0">
                    <li>Menciptakan suasana lebih tenang</li>
                    <li>Mengurangi stres</li>
                    <li>Meningkatkan kenyamanan saat bekerja</li>
                </ul>

            <p class="mb-2 mt-2">
                🌿 Membantu Meningkatkan Kualitas Udara
            </p>

            <p class="mb-2 mt-2">
                Tanaman dapat membantu:
            </p>

                <ul class="list-disc pl-5 space-y-0">
                        <li>Menyerap polutan tertentu</li>
                        <li>Meningkatkan kelembaban udara</li>
                        <li>Membuat ruangan terasa lebih segar</li>
                </ul>

            <p class="mb-2 mt-2">
                🌿 Meningkatkan Konsentrasi dan Kreativitas
            </p>

            <p class="mb-2 mt-2">
                Lingkungan kerja yang memiliki unsur alam dapat membantu:
            </p>

                <ul class="list-disc pl-5 space-y-0">
                        <li>Meningkatkan konsentrasi</li>
                        <li>Merangsang kreativitas</li>
                        <li>Meningkatkan mood saat bekerja</li>
                </ul>

            <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                Contoh - contoh tanaman hijau yang cocok ada dikantormu
            </h3>

            <p class="mb-2 mt-2">
                Indoor:
            </p>

                <div class="overflow-x-auto">
                <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
                    <thead class="bg-green-600 text-white">
                        <tr>
                            <th class="px-6 py-3 text-center">Tanaman</th>
                            <th class="px-6 py-3 text-center">Keunggulan</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200 bg-white">

                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold">
                                Lidah Mertua <br>
                                <span class="text-sm text-gray-500 italic">(Sansevieria)</span>
                            </td>

                            <td class="px-6 py-4">
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>Tahan di ruangan dengan cahaya minim.</li>
                                    <li>Perawatan mudah dan jarang disiram.</li>
                                    <li>Membantu menyaring beberapa polutan udara.</li>
                                </ul>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold">
                                Sirih Gading <br>
                                <span class="text-sm text-gray-500 italic">(Epipremnum aureum)</span>
                            </td>

                            <td class="px-6 py-4">
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>Tanaman rambat yang mudah tumbuh.</li>
                                    <li>Cocok digantung atau diletakkan di rak kantor.</li>
                                    <li>Perawatan sederhana dan tahan di berbagai kondisi.</li>
                                </ul>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold">
                                Peace Lily
                            </td>

                            <td class="px-6 py-4">
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>Memiliki bunga putih yang elegan.</li>
                                    <li>Cocok untuk ruang kerja ber-AC.</li>
                                    <li>Membantu meningkatkan kualitas udara dalam ruangan.</li>
                                </ul>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold">
                                ZZ Plant <br>
                                <span class="text-sm text-gray-500 italic">(Zamioculcas)</span>
                            </td>

                            <td class="px-6 py-4">
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>Tahan di ruangan dengan cahaya rendah.</li>
                                    <li>Tidak perlu sering disiram.</li>
                                    <li>Cocok untuk kantor yang sibuk.</li>
                                </ul>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold">
                                Kaktus atau Sukulen
                            </td>

                            <td class="px-6 py-4">
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>Ukuran kecil, cocok untuk meja kerja.</li>
                                    <li>Minim perawatan dan tidak perlu sering disiram.</li>
                                </ul>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <p class="mb-2 mt-2">
                Outdoor:
            </p>

                <div class="overflow-x-auto">
                <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
                    <thead class="bg-green-600 text-white">
                        <tr>
                            <th class="px-6 py-3 text-center">Tanaman</th>
                            <th class="px-6 py-3 text-center">Keunggulan</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200 bg-white">

                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold">
                                Palem Kuning<br>
                                <span class="text-sm text-gray-500 italic">(Dypsis Lutescens)</span>
                            </td>

                            <td class="px-6 py-4">
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>Memberikan kesan tropis dan segar.</li>
                                    <li>Bisa membantu menyerap beberapa polutan udara.</li>
                                </ul>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold">
                                 Bougenville <br>
                                <span class="text-sm text-gray-500 italic">(Bunga Kertas)</span>
                            </td>

                            <td class="px-6 py-4">
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>Tahan panas dan cocok untuk area terbuka.</li>
                                    <li>Warna bunga cerah mempercantik halaman kantor.</li>
                                </ul>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold">
                                Monstera <br>
                                <span class="text-sm text-gray-500 italic">(Janda Bolong)</span>
                            </td>

                            <td class="px-6 py-4">
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>Daun besar dan estetik.</li>
                                    <li>Cocok untuk taman minimalis atau area semi-outdoor.</li>
                                </ul>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 font-semibold">
                                Paku Tanduk Rusa<br>
                            </td>

                            <td class="px-6 py-4">
                                <ul class="list-disc pl-5 space-y-1">
                                    <li>Bisa digantung di dinding taman.</li>
                                    <li>Memberikan kesan alami dan tropis.</li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            </div>

            <h2 class="text-2xl font-bold text-gray-900 mb-2">
                🌿 Kantor yang Sehat = Produktivitas Meningkat
            </h2>

            <p class="mb-2">
                Lingkungan kerja yang nyaman dan sehat menjadi salah satu faktor penting dalam mendukung kinerja karyawan.
            </p>
            <p class="mb-2 mt-2">
                Mulai dari hal sederhana seperti menambahkan tanaman hijau di kantor dapat memberikan dampak positif bagi lingkungan kerja.
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
                Sudahkah Kantormu Menjadi Lingkungan Kerja yang Lebih Sehat?
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Ciptakan suasana kerja yang lebih asri dan mendukung produktivitas dengan pemilihan tanaman yang sesuai, bersama Envirokualita.
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
