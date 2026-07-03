@extends('layouts.app')

@section('title', 'Limbah B3:Diam-Diam Bisa Jadi Ancaman')

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
            Limbah B3: Diam-Diam Bisa Jadi Ancaman
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
            src="{{ asset('images/assets-news/news6.jpeg') }}"
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
                Pengertian
            </h2>    

            <p class="mb-2">
                Bahan berbahaya dan beracun yang selanjutnya disingkat B3 adalah zat, energi, dan/atau komponen lain yang karena sifat, konsentrasi, dan/atau jumlahnya, baik secara langsung maupun tidak langsung, dapat mencemarkan dan/atau merusak lingkungan hidup, dan/atau membahayakan lingkungan hidup, kesehatan, serta kelangsungan hidup manusia dan makhluk hidup lain.
                Limbah B3, adalah sisa suatu usaha dan/atau kegiatan yang mengandung B3.
            </p>

            <p class="mb-2">
                Pengelolaan limbah B3 adalah kegiatan yang meliputi pengurangan, penyimpanan, pengumpulan, pengangkutan, pemanfaatan, pengolahan, dan/atau penimbunan. 
            </p>

            <p class="mb-2">
                Kewajiban untuk melakukan pengelolaan B3 merupakan upaya untuk mengurangi terjadinya kemungkinan risiko terhadap lingkungan hidup yang berupa terjadinya pencemaran dan/atau kerusakan lingkungan hidup, mengingat B3 mempunyai potensi yang cukup besar untuk menimbulkan dampak negatif.
                Contohnya bisa berasal dari industri, rumah sakit, laboratorium, hingga bengkel.
            </p>

            <div
                class="bg-gray-50 border border-gray-100 rounded-2xl p-5 my-8 transition duration-300 hover:shadow-md"
                data-aos="fade-up">

            <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                Karakteristik Limbah B3 yaitu:
            </h3>

                <ul class="list-decimal pl-5">
                    <li>Cairan mudah terbakar</li>
                    <li>Padatan mudah terbakar.</li>
                    <li>Reaktif</li>
                    <li>Mudah meledak</li>
                    <li>Beracun</li>
                    <li>Cairan mudah korosif</li>
                    <li>Infeksius</li>
                    <li>Berbahaya terhadap lingkungan</li>
                </ul>

            <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                Contoh Limbah B3
            </h3>

            <p class="mb-2">
                Beberapa contoh limbah B3 yang sering ditemui:
            </p>

                <ul class="list-disc pl-5 space-y-0">
                    <li>Baterai dan aki bekas</li>
                    <li>Oli dan pelumas bekas</li>
                    <li>Limbah medis (jarum suntik, infus)</li>
                    <li>Bahan kimia kadaluarsa</li>
                    <li>Cat dan pelarut</li>
                </ul>

            </div>

            <h2 class="text-2xl font-bold text-gray-900 mb-2">
                Bahayanya Bagi Lingkungan
            </h2>

            <p class="mb-2">
                Pengelolaan yang tidak sesuai standar dapat menyebabkan
            </p>

            <ul class="list-disc pl-5 space-y-0">
                    <li>Pencemaran tanah dan air tanah</li>
                    <li>Penurunan kualitas air permukaan</li>
                    <li>Pencemaran udara akibat emisi berbahaya</li>
                    <li>Kerusakan ekosistem dan gangguan keanekaragaman hayati</li>
                </ul>
            
            <p class="mb-2 mt-2">
                Dampaknya dapat bersifat jangka panjang dan sulit dipulihkan.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
              Bahayanya Bagi Kesehatan
            </h2>

            <p class="mb-2">
                Paparan limbah B3 berpotensi menimbulkan:
            </p>

            <ul class="list-disc pl-5 space-y-0">
                    <li>Keracunan akut maupun kronis</li>
                    <li>Gangguan sistem pernapasan</li>
                    <li>Kerusakan organ vital</li>
                    <li>Kerusakan organ vital</li>
                </ul>
            
           <p class="mb-2 mt-2">
                Tingkat risiko bergantung pada jenis zat, durasi, dan jalur paparan.
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
                Ingin Memastikan Pengelolaan Limbah B3 Sudah Sesuai Regulasi?
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Pastikan pengelolaan Limbah B3 di tempatmu sudah sesuai regulasi dan didukung SDM yang kompeten. Bersama Envirokualita
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
