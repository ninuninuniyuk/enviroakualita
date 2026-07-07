@extends('layouts.app')

@section('title', 'Warna Proper')

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
            Warna Proper
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            KENALI MAKNA DI BALIK WARNA PENILAIAN KINERJA LINGKUNGAN PERUSAHAAN
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
            src="{{ asset('images/assets-news/news31.jpeg') }}"
            alt="Warna Proper"
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
                Program Penilaian Peringkat Kinerja Perusahaan dalam Pengelolaan Lingkungan Hidup yang selanjutnya disebut PROPER adalah evaluasi kinerja penanggung jawab usaha dan/atau kegiatan di bidang pengelolaan lingkungan hidup (KLHK, 2021).
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Dasar Pedoman PROPER
            </h2>

            <p class="mb-2">
                <span class="bg-gradient-to-t from-lime-300 to-transparent px-1">
                    PermenLH BPLH NO 07 Tahun 2025 Tentang PROPER
                </span>
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Pemeringkatan PROPER
            </h2>

            <p class="mb-2">
                Di dalam penilaian PROPER, perusahaan akan memperoleh reputasi/citra sesuai dengan pengelolaan lingkungan yang telah dilakukan oleh perusahaan tersebut.
                
                <br>Citra tersebut dinilai dengan 5 warna, yaitu emas, hijau, biru, merah, dan hitam.
            </p>

            <div class="grid gap-5">

                <!-- Card 1 -->
                <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-green-300 hover:shadow-lg transition-all duration-300">

                    <div>
                        <span class="inline-block bg-[#000000] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                            Peringkat Hitam
                        </span>

                        <p class="text-gray-600 leading-7 mb-2">
                            Merupakan peringkat terendah, diberikan kepada perusahaan yang melakukan perbuatan atau kelalaian yang menyebabkan pencemaran dan/atau kerusakan lingkungan, tidak melakukan upaya pengelolaan lingkungan yang sesuai, dan berpotensi merusak lingkungan.
                        </p>

                        <p class="text-gray-600 leading-7 font-semibold mb-2">
                            Perusahaan dengan peringkat hitam berisiko mendapatkan sanksi berat, termasuk pencabutan izin usaha.
                        </p>

                        <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-green-300 hover:shadow-lg transition-all duration-300">

                            <div>
                                <p class="text-gray-600 leading-7 mb-2">
                                    Perusahaan dengan sengaja melakukan tindakan yang menyebabkan pencemaran atau kerusakan lingkungan dan melanggar peraturan yang berlaku.
                                </p>
                                
                                <ul class="mb-2">
                                    <li class="flex gap-3">
                                        <span class="text-green-600 font-bold">.</span>
                                        <span>Tidak memenuhi ketentuan lingkungan</span>
                                    </li>

                                    <li class="flex gap-3">
                                        <span class="text-green-600 font-bold">.</span>
                                        <span>Menimbulkan dampak serius</span>
                                    </li>

                                    <li class="flex gap-3">
                                        <span class="text-green-600 font-bold">.</span>
                                        <span>Dapat dikenakan sanksi hukum</span>
                                    </li>
                                </ul>

                            </div>
                        </div> 
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-green-300 hover:shadow-lg transition-all duration-300">

                    <div>
                        <span class="inline-block bg-[#ff0000] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                            Peringkat Merah
                        </span>

                        <p class="text-gray-600 leading-7">
                            Diberikan kepada perusahaan yang upaya pengelolaan lingkungan hidupnya tidak sepenuhnya sesuai ketentuan peraturan perundang-undangan, hanya sebagian aspek yang memenuhi persyaratan.
                        </p>

                        <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-green-300 hover:shadow-lg transition-all duration-300">

                            <div>
                                <p class="text-gray-600 leading-7 mb-2">
                                    Perusahaan telah melakukan upaya pengelolaan lingkungan, tetapi belum memenuhi seluruh persyaratan yang diwajibkan.
                                </p>
                                
                                <ul class="mb-2">
                                    <li class="flex gap-3">
                                        <span class="text-green-600 font-bold">.</span>
                                        <span>Tidak memenuhi  sebagian kewajiban lingkungan hidup yang diwajibkan</span>
                                    </li>

                                    <li class="flex gap-3">
                                        <span class="text-green-600 font-bold">.</span>
                                        <span>Pengelolaan limbah atau emisi tidak sesuai dengan standar baku mutu yang berlaku</span>
                                    </li>

                                    <li class="flex gap-3">
                                        <span class="text-green-600 font-bold">.</span>
                                        <span>Terdapat temuan berupa ketidakpatuhan administratif atau teknis dalam pelaporan dan pelaksanaannya</span>
                                    </li>
                                </ul>

                            </div>
                        </div>
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
                Pemilahan Membantu Efisiensi Pengelolaan
            </h2>

            <p>
                Dengan pemilahan yang benar:
            </p>

            <ul class="mb-2">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Limbah yang masih bernilai dapat dimanfaatkan kembali</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Pengangkutan menjadi lebih mudah</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Biaya pengelolaan dapat ditekan</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Data limbah menjadi lebih akurat</span>
                </li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Pemilahan yang Baik Mendukung Kepatuhan Lingkungan
            </h2>

            <p>
                Pemilahan limbah membantu perusahaan:
            </p>

            <ul class="mb-2">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Memenuhi regulasi lingkungan</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Mendukung pengelolaan TPS yang baik</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Mengurangi risiko temuan audit</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Mendukung penilaian PROPER</span>
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
                Sudah waktunya action!
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
               Jadi Auditor Bersertifikat BNSP Sekarang bersama Envirokualita
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
