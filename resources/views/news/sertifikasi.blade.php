@extends('layouts.app')

@section('title', 'Sertifikasi')

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
            Sertifikasi
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            KENAPA SERTIFIKASI BISA NAIKIN VALUE PERUSAHAAN?
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
            src="{{ asset('images/assets-news/news18.jpeg') }}"
            alt="Sertifikasi"
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
                Mengapa Sertifikasi Adalah Investasi, Bukan Biaya?
            </h2>
            
            <p class="mb-2">
                Banyak yang menganggap sertifikasi lingkungan hanya soal "pajangan" di dinding kantor. Padahal, di mata dunia bisnis modern, sertifikasi adalah indikator utama kesehatan dan keberlanjutan sebuah perusahaan.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Sertifikasi Bukan Sekadar Lembar Kertas
            </h2>

            <p class="mb-2">
                3 Pilar Utama Nilai Tambah Sertifikasi
            </p>

            <div class="grid gap-5">

                <!-- Card 1 -->
                <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-green-300 hover:shadow-lg transition-all duration-300">

                    <div>
                        <span class="inline-block bg-[#2B9048] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                            Kepatuhan
                        </span>

                        <p class="text-gray-600 leading-7">
                            Meminimalisir risiko hukum dan denda administratif regulasi lingkungan.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-green-300 hover:shadow-lg transition-all duration-300">

                    <div>
                        <span class="inline-block bg-[#2B9048] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                            Efisiensi
                        </span>

                        <p class="text-gray-600 leading-7">
                            Mengoptimalkan penggunaan sumber daya dan menekan biaya operasional.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-green-300 hover:shadow-lg transition-all duration-300">

                    <div>
                        <span class="inline-block bg-[#2B9048] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                            Kepercayaan
                        </span>

                        <p class="text-gray-600 leading-7">
                            Meningkatkan transparansi dan kredibilitas di mata investor & pelanggan.
                        </p>
                    </div>
                </div>
                
            </div>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Landasan Regulasi
            </h2>

            <p class="mb-2">
                <span class="bg-gradient-to-t from-[#9ACA40] to-transparent px-1">
                    PP No. 22 Tahun 2021
                </span>
            </p>

            <p class="mb-2">
                Tentang Penyelenggaraan Perlindungan dan Pengelolaan Lingkungan Hidup. Perusahaan wajib memiliki personil yang kompeten (tersertifikasi) untuk mengelola limbah B3, air limbah, dan emisi udara.
            </p>

            <p class="mb-2">
                <span class="bg-gradient-to-t from-[#9ACA40] to-transparent px-1">
                    PermenLH BPLH No.7 Tahun 2025
                </span>
            </p>

            <p class="mb-2">
                Dalam peraturan ini dijelaskan bahwa perusahaan peserta PROPER (Program Penilaian Peringkat Kinerja Perusahaan) wajib memiliki sumber daya manusia (personil) yang kompeten di bidang pengelolaan lingkungan.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Peningkatan Efisiensi Operasional (Economic Value)
            </h2>

            <p class="mb-2">
                Sertifikasi memaksa perusahaan menerapkan standar yang meminimalisir pemborosan sumber daya. Sertifikasi seperti ISO 14001 memaksa perusahaan menggunakan metode Plan-Do-Check-Act (PDCA). Implementasi ISO 14001 (Sistem Manajemen Lingkungan) rata-rata membantu perusahaan menurunkan biaya energi sebesar 10-15% dan mengurangi limbah produksi secara signifikan.
            </p>
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Akses Investasi dan Kepercayaan Pasar (Financial Value).
            </h2>

            <p class="mb-2">
                Pasar modal global kini bergerak ke arah investasi berbasis ESG (Environmental, Social, and Governance) sebagai indikator risiko.
            </p>

            <p class="mb-2">
                Menurut laporan PwC Global Investor Survey, 79% investor menyatakan bahwa pengelolaan risiko lingkungan (yang dibuktikan dengan sertifikasi) adalah faktor kunci dalam keputusan investasi mereka.
            </p>

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
