@extends('layouts.app')

@section('title', 'Simpel')

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
            Simpel
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            SIMPEL
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
            src="{{ asset('images/assets-news/news28.jpeg') }}"
            alt="Simpel"
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
                Apa Itu SIMPEL?
            </h2>
            
            <p class="mb-2">
                SIMPEL adalah sistem elektronik satu pintu yang dikembangkan oleh Kementerian Lingkungan Hidup dan Kehutanan (KLHK) untuk memfasilitasi perusahaan dalam melaporkan pelaksanaan rencana pengelolaan dan pemantauan lingkungan hidup (RKL-RPL/UKL-UPL).
            </p>

            <p class="mb-2">
                https://simpel.kemenlh.go.id/
            </p>
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Mengapa SIMPEL Dibutuhkan?
            </h2>

            <p class="mb-2">
                Sebelumnya pelaporan perigelolaan lingkungan dilakukan secara manual (cetak/hardcopy) yang rentan hilang dan sulit direkap. Kini pelaporan dilakukan lebih terintegrasi melalui sistem digital yang disebut dengan SIMPEL (Sistem Informasi Pelaporan Elektronik Lingkungan)
            </p>
            
            <!-- Tujuan SIMPEL -->
            <div class="my-12" data-aos="fade-up">

                <h2 class="text-2xl font-bold text-gray-900 mb-8">
                    Tujuan SIMPEL
                </h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <!-- Card 1 -->
                    <div class="group bg-white rounded-2xl border border-gray-200 p-6 shadow-sm
                                hover:shadow-xl hover:-translate-y-2 hover:border-[#2B9048]
                                transition-all duration-300">

                        <div class="w-14 h-14 rounded-xl bg-green-100
                                    flex items-center justify-center
                                    group-hover:bg-[#2B9048]
                                    transition">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-7 h-7 text-[#2B9048] group-hover:text-white"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 12h6m-6 4h6M7 4h10a2 2 0 012 2v12a2 2 0 01-2 2H7a2 2 0 01-2-2V6a2 2 0 012-2z"/>
                            </svg>

                        </div>

                        <h3 class="text-lg font-bold mt-5 mb-2">
                            Mempermudah Pelaporan
                        </h3>

                        <p class="text-gray-600 leading-7">
                            Proses pelaporan dokumen lingkungan menjadi lebih cepat,
                            praktis, dan dapat dilakukan secara online.
                        </p>

                    </div>

                    <!-- Card 2 -->
                    <div class="group bg-white rounded-2xl border border-gray-200 p-6 shadow-sm
                                hover:shadow-xl hover:-translate-y-2 hover:border-[#2B9048]
                                transition-all duration-300">

                        <div class="w-14 h-14 rounded-xl bg-green-100 flex items-center justify-center
                                    group-hover:bg-[#2B9048] transition">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-7 h-7 text-[#2B9048] group-hover:text-white"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M3 13l4-4 4 4m6-6h4v4m0-4l-6 6"/>
                            </svg>

                        </div>

                        <h3 class="text-lg font-bold mt-5 mb-2">
                            Meningkatkan Transparansi
                        </h3>

                        <p class="text-gray-600 leading-7">
                            Seluruh laporan tersimpan secara digital sehingga mudah
                            dipantau oleh perusahaan maupun pemerintah.
                        </p>

                    </div>

                    <!-- Card 3 -->
                    <div class="group bg-white rounded-2xl border border-gray-200 p-6 shadow-sm
                                hover:shadow-xl hover:-translate-y-2 hover:border-[#2B9048]
                                transition-all duration-300">

                        <div class="w-14 h-14 rounded-xl bg-green-100 flex items-center justify-center
                                    group-hover:bg-[#2B9048] transition">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-7 h-7 text-[#2B9048] group-hover:text-white"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 13l4 4L19 7"/>
                            </svg>

                        </div>

                        <h3 class="text-lg font-bold mt-5 mb-2">
                            Memudahkan Validasi
                        </h3>

                        <p class="text-gray-600 leading-7">
                            Membantu proses pemeriksaan dan evaluasi dokumen lingkungan
                            menjadi lebih efektif dan akurat.
                        </p>

                    </div>

                    <!-- Card 4 -->
                    <div class="group bg-white rounded-2xl border border-gray-200 p-6 shadow-sm
                                hover:shadow-xl hover:-translate-y-2 hover:border-[#2B9048]
                                transition-all duration-300">

                        <div class="w-14 h-14 rounded-xl bg-green-100 flex items-center justify-center
                                    group-hover:bg-[#2B9048] transition">

                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-7 h-7 text-[#2B9048] group-hover:text-white"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M9 17v-2a4 4 0 014-4h6"/>
                            </svg>

                        </div>

                        <h3 class="text-lg font-bold mt-5 mb-2">
                            Mendukung Pengawasan
                        </h3>

                        <p class="text-gray-600 leading-7">
                            Memudahkan pemantauan kepatuhan perusahaan terhadap kewajiban
                            pengelolaan lingkungan hidup.
                        </p>

                    </div>

                </div>

            </div>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                SIMPEL dalam PROPER
            </h2>

            <p class="mb-2">
                SIMPEL menjadi instrumen utama dalam evaluasi PROPER.
            </p>

            <ul class="space-y-3 mb-2">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span> <b> Ketaatan Administratif: </b> Jika perusahaan tidak atau terlambat melapor di SIMPEL, otomatis nilai ketaatannya akan turun (bisa langsung masuk zona Merah atau Hitam).</span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span> <b> Validitas Data: </b> Data emisi, limbah B3, dan air limbah yang diunggah secara digital akan langsung diverifikasi oleh sistem dan tim evaluator PROPER.</span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span> <b> Basis Data PROPER Hijau/Emas: </b> Integrasi data di SIMPEL memudahkan perusahaan membuktikan pemenuhan ketaatan (Beyond Compliance) untuk melaju ke peringkat Hijau atau Emas.</span>
                </li>
            </ul>
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Cakupan Modul Pelaporan di SIMPEL
            </h2>

            <p class="mb-2">
                Dalam penilaian PROPER, evaluator akan memeriksa konsistensi laporan perusahaan pada modul-modul utama di SIMPEL berikut:
            </p>

            <div class="grid gap-5">

                <!-- Card 1 -->
                <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-green-300 hover:shadow-lg transition-all duration-300">

                    <div>
                        <span class="inline-block bg-[#2B9048] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                            Modul PPA (Pengendalian Pencemaran Air)
                        </span>

                        <p class="text-gray-600 leading-7">
                            Data Dilaporkan: Persetujuan teknis (IPLC), debit harian, parameter kualitas air bulanan, dan bukti uji laboratorium terakreditasi KAN.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-green-300 hover:shadow-lg transition-all duration-300">

                    <div>
                        <span class="inline-block bg-[#2B9048] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                            Modul PPU (Pengendalian Pencemaran Udara)
                        </span>

                        <p class="text-gray-600 leading-7">
                            Data Dilaporkan: Spesifikasi cerobong, kapasitas produksi, hasil uji emisi (manual per semester/kontinu via CEMS-SISPEK), dan beban emisi.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-green-300 hover:shadow-lg transition-all duration-300">

                    <div>
                        <span class="inline-block bg-[#2B9048] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                            Modul PLB3 (Pengelolaan Limbah B3)
                        </span>

                        <p class="text-gray-600 leading-7">
                            Data Dilaporkan: Logbook harian TPS, neraca limbah triwulanan, manifes elektronik (Festronik/Silacak), dan izin/operator TPS Limbah B3.
                        </p>
                    </div>
                </div>
                
            </div>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Alur Pelaporan SIMPEL untuk Evaluasi PROPER
            </h2>

            <ul class="space-y-3 mt-4">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">✔</span>
                    <span>Registrasi Akun/ID Digital</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">✔</span>
                    <span>Input Data Teknis & Administratif</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">✔</span>
                    <span>Submit Laporan Periodik</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">✔</span>
                    <span>Validasi & Verifikasi oleh KLHK/DLH</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">✔</span>
                    <span>Penilaian Ketaatan (E-PROPER)</span>
                </li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Tantangan Utama & Solusi dalam Penggunaan SIMPEL
            </h2>

            <div class="overflow-x-auto mt-5 mb-8">
                <table class="w-full border border-gray-200 rounded-xl overflow-hidden text-sm md:text-base">
                    <thead class="bg-[#2B9048] text-white">
                        <tr>
                            <th class="border border-gray-200 px-4 py-3 text-center font-semibold w-16">
                                No
                            </th>
                            <th class="border border-gray-200 px-4 py-3 text-left font-semibold">
                                Tantangan Lapangan
                            </th>
                            <th class="border border-gray-200 px-4 py-3 text-left font-semibold">
                                Strategi / Solusi Terbaik
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white text-gray-700">

                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-4 text-center font-semibold">
                                1
                            </td>

                            <td class="border border-gray-200 px-4 py-4">
                                Data <strong>"Crash"</strong> atau Server Down sehingga terjadi aksi pelaporan.
                            </td>

                            <td class="border border-gray-200 px-4 py-4">
                                Jangan menunda. Budayakan input data secara berkala
                                (misalnya seminggu sekali) daripada SKS
                                (Sistem Kebut Semalam) di akhir bulan.
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-4 text-center font-semibold">
                                2
                            </td>

                            <td class="border border-gray-200 px-4 py-4">
                                Ketidaksesuaian data antara logbook internal dan manifes pihak ketiga.
                            </td>

                            <td class="border border-gray-200 px-4 py-4">
                                Lakukan rekonsiliasi data internal sebelum submit.
                                Pastikan nomor Festronik sudah dicocokkan dan valid.
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-4 text-center font-semibold">
                                3
                            </td>

                            <td class="border border-gray-200 px-4 py-4">
                                Perubahan regulasi teknis baru atau fitur terbaru setelah update di sistem internal.
                            </td>

                            <td class="border border-gray-200 px-4 py-4">
                                Rutin mengikuti sosialisasi dari KLHK dan memeriksa menu
                                pengumuman/panduan terbaru di dashboard SIMPEL.
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <p class="mb-2">
                SIMPEL (Sistem Informasi Pelaporan Elektronik Lingkungan Hidup) adalah platform yang membantu perusahaan
            </p>

            <ul class="space-y-3 mt-4 mb-2">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Mengelola data lingkungan</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Mendukung kepatuhan lingkungan</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Mempersiapkan evaluasi PROPER</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Meningkatkan kualitas pelaporan</span>
                </li>
            </ul>

            <p class="mb-2">
                Data yang lengkap dan akurat melalui platform ini berfungsi untuk menunjukkan bukti nyata implementasi pengelolaan lingkungan oleh perusahaan.
            </p>

    <!-- CTA -->
    <div
        class="max-w-4xl mx-auto mt-10"
        data-aos="fade-up"
        data-aos-delay="200"
    >

        <div class="bg-gradient-to-r from-[#9ACA40] to-[#146032] rounded-3xl p-6 md:p-10 text-white transition duration-500 hover:shadow-2xl">

            <h3 class="text-2xl md:text-3xl font-bold mb-2">
                Sudah Waktunya!
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Persiapkan kompetensi SDM perusahaanmu bersama Envirokualita 
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
