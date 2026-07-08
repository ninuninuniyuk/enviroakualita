@extends('layouts.app')

@section('title', 'Tata Cara Penyimpanan Limbah B3 yang Benar')

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
            Tata Cara Penyimpanan Limbah B3 yang Benar
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            Tata Cara Penyimpanan Limbah B3 yang Benar
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
            src="{{ asset('images/assets-news/news22.jpeg') }}"
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
                Pengertian pada B3  
            </h2>    

            <p class="mb-2">
            Bahan berbahaya dan beracun (B3) adalah zat, energi, atau komponen lain yang karena sifat, konsentrasi, atau jumlahnya dapat mencemarkan, merusak lingkungan hidup, serta membahayakan kesehatan manusia dan makhluk hidup lainnya.
            </p>

            <p class="mb-2">
            Limbah B3 adalah sisa suatu usaha dan/atau kegiatan yang mengandung B3.
            </p>

            <p class="mb-2">
            Pengelolaan limbah B3 adalah kegiatan yang meliputi pengurangan, penyimpanan, pengumpulan, pengangkutan, pemanfaatan, pengolahan, dan/atau penimbunan.
            </p>
            
            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Penyimpanan Limbah B3
            </h2>

            <p class="mb-2">
                Setiap Orang yang menghasilkan Limbah B3 wajib melakukan Penyimpanan Limbah B3. Dan setiap orang yang menghasilkan Limbah B3 dilarang melakukan pencampuran Limbah B3 yang disimpannya.
            </p>

            <p class="mb-2">
                Penyimpanan Limbah B3, wajib memiliki izin Pengelolaan Limbah B3 untuk kegiatan Penyimpanan Limbah B3.
            </p>

            <ul class="list-decimal pl-5">
                <li>wajib memiliki Izin Lingkungan; dan</li>
                <li>mengajukan permohonan secara tertulis kepada bupati/wali kota dan melampirkan persyaratan izin</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Syarat - Syarat Penyimpanan Limbah B3
            </h2>

            <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                1. Lokasi penyimpanan Limbah B3
            </h3>

            <ul class="pl-5 space-y-0">
                <li>- Bebas banjir</li>
                <li>- Tidak rawan bencana alam</li>
                <li>- Berada dalam penguasaan setiap orang yang menghasilkan limbah B3</li>
            </ul>

            <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
               2. Fasilitas Penyimpanan Limbah B3 yang sesuai dengan jumlah Limbah B3
            </h3>

            <p class="mb-2">
                Fasilitas Penyimpanan Limbah B3 yang sesuai dengan jumlah Limbah B3 karakteristik Limbah B3, dan dilengkapi dengan upaya pengendalian Pencemaran Lingkungan Hidup
            </p>

            <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                3. Peralatan penanggulangan keadaan darurat paling sedikit meliputi:
            </h3>

            <ul class="pl-5 space-y-0">
                <li>- alat pemadam api; dan</li>
                <li>- alat penanggulangan keadaan darurat lain yang sesuai.</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Pengemasan Limbah B3
            </h2>

            <ul class="list-decimal pl-5">
                    <li>terbuat dari bahan yang dapat mengemas Limbah B3 sesuai dengan karakteristik Limbah B3 yang akan disimpan;</li>
                    <li>mampu mengungkung Limbah B3 untuk tetap berada dalam kemasan;</li>
                    <li>memiliki penutup yang kuat untuk mencegah terjadinya tumpahan saat dilakukan penyimpanan, pemindahan, atau pengangkutan; dan</li>
                    <li>berada dalam kondisi baik, tidak bocor, tidak berkarat, atau tidak rusak</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                 Pelabelan Limbah B3
            </h2>

            <p class="mb-2">
                Kemasan Limbah B3 wajib dilekati Label Limbah B3 dan Simbol Limbah B3 
                Label Limbah B3 paling sedikit memuat keterangan mengenai:
            </p>
            

            <ul class="pl-5 space-y-0">
                <li>- nama Limbah B3;</li>
                <li>- identitas Penghasil Limbah B3;</li>
                <li>- tanggal dihasilkannya Limbah B3; dan</li>
                <li>- tanggal Pengemasan Limbah B3.</li>
            </ul>

            <p class="mb-2 mt-2">
                Pemilihan Simbol Limbah B3 disesuaikan dengan karakteristik Limbah B3: mudah meledak, mudah menyala, reaktif, korosif dan/atau beracun.
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
                Sudahkah Penyimpanan Limbah B3 di Perusahaan Anda Sesuai Standar?
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Pastikan penyimpanan limbah B3 dilakukan dengan aman dan sesuai ketentuan bersama EnviroKualita.
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
