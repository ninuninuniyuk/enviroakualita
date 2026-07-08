@extends('layouts.app')

@section('title', 'Perbedaan Auditor Lingkungan vs Konsultan Lingkungan')

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
            Perbedaan Auditor Lingkungan vs Konsultan Lingkungan
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            Perbedaan Auditor Lingkungan vs Konsultan Lingkungan
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
            src="{{ asset('images/assets-news/news16.jpeg') }}"
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
                Dua profesi penting, tapi sering disamakan! 
            </h2>    

            <p class="mb-2">
               Auditor Lingkungan Hidup menurut Peraturan Menteri Lingkungan Hidup (PermenLH) Nomor 3 Tahun 2013 adalah 
               seseorang yang memenuhi syarat-syarat kompetensi tertentu untuk melaksanakan audit lingkungan hidup pada suatu kegiatan atau usaha.
            </p>
            
            <p class="mb-2">
               Audit Lingkungan Hidup adalah proses evaluasi secara sistematis, terdokumentasi, dan objektif terhadap suatu usaha atau kegiatan yang memiliki potensi dampak terhadap lingkungan.
            </p>

            <p class="mb-2">
              Fokus utama: evaluasi & kepatuhan (compliance) 
            </p>
            

        <div class="bg-gray-50 border border-gray-100 rounded-2xl p-5 my-8 transition duration-300 hover:shadow-md"
            data-aos="fade-up">

            <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                Tujuan
            </h3>

            <p class="mb-2">
              Auditor lingkungan adalah profesional yang melakukan:
            </p>

            <ul class="list-disc pl-5 space-y-0">
                <li>Menilai apakah perusahaan sudah memenuhi regulasi lingkungan</li>
                <li>Mengidentifikasi ketidaksesuaian (non-compliance)</li>
                <li>Menilai efektivitas sistem pengelolaan lingkungan</li>
                <li>Mengurangi resiko pencemaran dan sanksi hukum</li>
            </ul>

            <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                Tugas Auditor Lingkungan
            </h3>

            <ul class="list-disc pl-5 space-y-0">
                    <li>Melakukan audit lingkungan (internal/eksternal)</li>
                    <li>Memeriksa dokumen lingkungan (AMDAL, UKL-UPL, izin)</li>
                    <li>Mengevaluasi data pemantauan (air, udara, limbah)</li>
                    <li>Melakukan inspeksi lapangan</li>
                    <li>Mengidentifikasi potensi pelanggaran</li>
                    <li>Menyusun laporan audit</li>
                    <li>Memberikan rekomendasi perbaikan</li>
            </ul>
            

            <p class="mb-2 mt-2">
                Auditor tidak menjalankan solusi, hanya menilai
            </p>    

            <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                Konsultan Lingkungan 
            </h3>

            <p class="mb-2 mt-2">
                Konsultan lingkungan adalah profesional yang membantu perusahaan dalam merencanakan, mengelola, dan meningkatkan kinerja lingkungan melalui solusi teknis dan strategis. 
            </p>

            <blockquote class="border-l-4 border-[#2B9048] pl-4 italic text-gray-700 my-4">
                Fokus Utama: solusi & perbaikan
            </blockquote>

            <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                Tujuan Konsultan
            </h3>

            <ul class="list-disc pl-5 space-y-0">
                    <li>Membantu perusahaan memenuhi regulasi</li>
                    <li>Mengoptimalkan pengelolaan lingkungan</li>
                    <li>Mengurangi dampak negatif terhadap lingkungan</li>
                    <li>Meningkatkan efisiensi dan sustainability</li>
            </ul>

            <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                Tugas Konsultan Lingkungan
            </h3>

            <ul class="list-decimal pl-5">
                    <li>Menyusun dokumen lingkungan (AMDAL, UKL-UPL)</li>
                    <li>Melakukan studi dampak lingkungan</li>
                    <li>Melakukan analisis data lingkungan</li>
                    <li>Memberikan rekomendasi solusi</li>
                    <li>Membuat program pengelolaan lingkungan</li>
                    <li>Mendampingi implementasi di lapangan</li>
                    <li>Memberikan pelatihan/edukasi ke perusahaan</li>
            </ul> 

            <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                Perbedaan Auditor Lingkungan dan Konsultan Lingkungan secara singkat
            </h3>
            
            <div class="overflow-x-auto my-6">
                <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-[#2B9048] text-white">
            <tr>
                <th class="px-6 py-4 text-center font-semibold">Aspek</th>
                <th class="px-6 py-4 text-center font-semibold">Auditor Lingkungan</th>
                <th class="px-6 py-4 text-center font-semibold">Konsultan Lingkungan</th>
            </tr>
            </thead>

            <tbody class="divide-y divide-gray-200 bg-white">

            <tr class="hover:bg-[#4DB451]/10 transition">
                <td class="px-6 py-4 font-semibold">Fokus</td>
                <td class="px-6 py-4">Penilaian &amp; evaluasi</td>
                <td class="px-6 py-4">Solusi &amp; perbaikan</td>
            </tr>

            <tr class="hover:bg-[#4DB451]/10 transition">
                <td class="px-6 py-4 font-semibold">Peran</td>
                <td class="px-6 py-4">Mengaudit &amp; menilai</td>
                <td class="px-6 py-4">Membantu &amp; merancang</td>
            </tr>

            <tr class="hover:bg-[#4DB451]/10 transition">
                <td class="px-6 py-4 font-semibold">Sifat</td>
                <td class="px-6 py-4">Independen</td>
                <td class="px-6 py-4">Kolaboratif</td>
            </tr>

            <tr class="hover:bg-[#4DB451]/10 transition">
                <td class="px-6 py-4 font-semibold">Keterlibatan</td>
                <td class="px-6 py-4">Tidak terlibat operasional</td>
                <td class="px-6 py-4">Terlibat langsung</td>
            </tr>

            <tr class="hover:bg-[#4DB451]/10 transition">
                <td class="px-6 py-4 font-semibold">Tujuan</td>
                <td class="px-6 py-4">Kepatuhan regulasi</td>
                <td class="px-6 py-4">Peningkatan kinerja</td>
            </tr>

            <tr class="hover:bg-[#4DB451]/10 transition">
                <td class="px-6 py-4 font-semibold">Output</td>
                <td class="px-6 py-4">Laporan audit &amp; temuan</td>
                <td class="px-6 py-4">Solusi &amp; program</td>
            </tr>

                </tbody>
              </table>
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
                Tertarik menjadi Auditor Lingkungan? 🌱
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Saatnya upgrade skill kamu bersama Envirokualita melalui pelatihan sertifikasi yang aplikatif & terpercaya
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
