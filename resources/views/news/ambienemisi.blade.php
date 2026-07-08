@extends('layouts.app')

@section('title', 'UDARA AMBIEN VS UDARA EMISI')

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
            Udara Ambien vs Udara Emisi
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            UDARA AMBIEN VS UDARA EMISI
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
            src="{{ asset('images/assets-news/news13.jpeg') }}"
            alt="Udara Ambien vs Udara Emisi"
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
                Udara Ambien
            </h2>
            
            <p class="mb-2">
                Udara Ambien adalah udara bebas di permukaan bumi pada lapisan troposfer yang berada di dalam wilayah yurisdiksi Republik Indonesia yang dibutuhkan dan mempengaruhi kesehatan manusia, makhluk hidup, dan unsur lingkungan hidup lain (Menurut PP No. 22 Tahun 2021)
            </p>

            <p class="mb-2">
                <span class="bg-gradient-to-t from-[#9ACA40] to-transparent px-1">
                    Udara ambien = udara bebas di lingkungan yang kita hirup setiap hari
                </span>
            </p>
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Karakteristik:
            </h2>
            
            <ul class="space-y-3 mt-4">
                <li class="flex gap-3">
                    <span class="text-[#2B9048] font-bold">✔</span>
                    <span>Berada di luar ruangan (outdoor) </span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-[#2B9048] font-bold">✔</span>
                    <span>Mencerminkan kualitas udara suatu wilayah</span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-[#2B9048] font-bold">✔</span>
                    <span>Dipengaruhi oleh banyak sumber emisi</span>
                </li>
            </ul>
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Udara Emisi
            </h2>
            
            <p class="text-gray-600 leading-7 mt-5 mb-4">
                Emisi adalah zat, energi, dan/atau komponen lain yang dihasilkan dari suatu kegiatan yang masuk dan/atau dimasukkannya ke dalam udara ambien yang mempunyai dan/atau tidak mempunyai potensi sebagai unsur pencemar (Menurut UU No. 32 Tahun 2009).
            </p>

            <p class="mb-2">
                <span class="bg-gradient-to-t from-[#9ACA40] to-transparent px-1">
                    Udara emisi = gas/partikel pencemar yang dilepaskan dari sumber tertentu.
                </span>
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Karakteristik:
            </h2>
            
            <ul class="space-y-3 mt-4">
                <li class="flex gap-3">
                    <span class="text-[#2B9048] font-bold">✔</span>
                    <span>Kendaraan bermotor </span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-[#2B9048] font-bold">✔</span>
                    <span>Cerobong industri </span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-[#2B9048] font-bold">✔</span>
                    <span>Pembakaran terbuka (sampah/lahan)</span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-[#2B9048] font-bold">✔</span>
                    <span>Pembangkit listrik berbahan fosil </span>
                </li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Lalu... Bagaimana hubungan keduanya?
            </h2>

            <p class="text-gray-600 leading-7 mt-5 mb-4 font-bold text-[#146032]">
                Udara emisi adalah penyebab, udara ambien adalah penerima
            </p>

            <p class="text-gray-600 leading-7 mt-5 mb-4">
                Kualitas udara ambien akan menurun (menjadi tidak sehat) apabila jumlah udara emisi yang masuk ke lingkungan melebihi kemampuan alam untuk menetralisirnya.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Tujuan Pemantauan (Baku Mutu)
            </h2>

            <ul class="space-y-3 mt-4">
                <li class="flex gap-3">
                    <span class="text-[#2B9048] font-bold">.</span>
                    <span>Baku Mutu Ambien, digunakan untuk memantau seberapa sehat kualitas lingkungan di suatu wilayah (apakah layak huni). </span>
                </li>
                
                <li class="flex gap-3">
                    <span class="text-[#2B9048] font-bold">.</span>
                    <span>Baku Mutu Emisi, digunakan untuk mengendalikan polusi dari sumbernya (apakah pabrik/kendaraan sudah memenuhi standar buang). </span>
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
                Wujudkan Udara yang Lebih Bersih dan Sehat
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Memahami perbedaan antara udara ambien dan udara emisi merupakan langkah penting dalam menjaga kualitas lingkungan. Dengan pemantauan dan pengelolaan emisi yang tepat, setiap aktivitas dapat berkontribusi menciptakan udara yang lebih bersih, aman, dan sesuai dengan standar lingkungan.
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
