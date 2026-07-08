@extends('layouts.app')

@section('title', 'AUDITOR LINGKUNGAN')

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
            Auditor Lingkungan
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            AUDITOR LINGKUNGAN
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
            src="{{ asset('images/assets-news/news5.jpeg') }}"
            alt="Auditor Lingkungan"
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
                Definisi Audit Lingkungan
            </h2>
            
            <p class="mb-2">
                Menurut Pasal 1 Permen LH No.3 Tahun 2013, Auditor lingkungan hidup adalah tenaga ahli bersertifikat yang bertugas mengevaluasi ketaatan perusahaan terhadap regulasi lingkungan, baik sukarela (ISO 14001) maupun wajib (AMDAL/PROPER). 
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Tugas Auditor Lingkungan
            </h2>
            
            <div class="space-y-5">

                <div class="flex gap-4 p-5 rounded-2xl border border-gray-200">
                    <div class="w-10 h-10 flex-shrink-0 bg-[#2B9048] text-white rounded-full flex items-center justify-center font-bold">
                        1
                    </div>

                    <p class="text-gray-600 leading-7">
                        Auditor melakukan inspeksi lapangan terhadap kualitas udara, air, tanah, dan pengelolaan limbah B3/non-B3.
                    </p>
                </div>

                <div class="flex gap-4 p-5 rounded-2xl border border-gray-200">
                    <div class="w-10 h-10 flex-shrink-0 bg-[#2B9048] text-white rounded-full flex items-center justify-center font-bold">
                        2
                    </div>

                    <p class="text-gray-600 leading-7">
                        Menyusun laporan temuan dan memverifikasi kepatuhan terhadap regulasi mandatory seperti AMDAL, UKL-UPL, dan PROPER serta voluntary seperti ISO 14001. sesuai UU No.32 Tahun 2009 tentang Perlindungan dan Pengelolaan Lingkungan Hidup yang kemudian melaporkan ke KLHK/DLH.
                    </p>
                </div>

            </div>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Tujuan Auditor Lingkungan
            </h2>

        <div class="grid gap-5">

            <!-- Card 1 -->
            <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-[#4DB451] hover:shadow-lg transition-all duration-300">

                <div>
                    <span class="inline-block bg-[#2B9048] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                        Kepatuhan Hukum
                    </span>

                    <p class="text-gray-600 leading-7">
                        Memastikan perusahaan mematuhi persyaratan hukum dan ketentuan lingkungan yang berlaku.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-[#4DB451] hover:shadow-lg transition-all duration-300">

                <div>
                    <span class="inline-block bg-[#2B9048] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                        Manajemen Risiko
                    </span>

                    <p class="text-gray-600 leading-7">
                        Mengevaluasi dan mencegah risiko pencemaran maupun kerusakan lingkungan melalui pengelolaan yang tepat.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-[#4DB451] hover:shadow-lg transition-all duration-300">

                <div>
                    <span class="inline-block bg-[#2B9048] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                        Perbaikan Kinerja
                    </span>

                    <p class="text-gray-600 leading-7">
                        Menjadi dasar penyusunan strategi pengelolaan lingkungan sekaligus meningkatkan citra perusahaan.
                    </p>
                </div>
            </div>

        </div>
        
        <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
            Sertifikasi Auditor Lingkungan
        </h2>
        
        <!-- Sertifikasi -->
         <div class="flex items-start gap-4 p-5 rounded-2xl border border-gray-200 hover:border-[#2B9048] hover:shadow-lg transition-all duration-300">

             <div>
                <p class="text-gray-600 leading-7">
                    Pasal 51 Ayat (2) UU Nomor 32 Tahun 2009 tentang Perlindungan dan Pengelolaan Lingkungan Hidup menyatakan bahwa auditor lingkungan hidup wajib memiliki sertifikat kompetensi auditor lingkungan hidup yang berlaku mulai tanggal 3 Oktober 2010
                </p>
            </div>

        </div>
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Siapa Saja Yang Perlu?
            </h2>
            
            <ol class="list-decimal pl-5">
                <li>Staf K3L/HSE/Compliance Officer yang menangani pengelolaan lingkungan di perusahaan. </li>
                <li>Praktisi perusahaan yang wajib melaksanakan audit lingkungan sesuai regulasi. </li>
                <li>Auditor internal ISO 14001 atau tim sistem manajemen lingkungan. </li>
                <li>Konsultan lingkungan yang memberikan jasa audit atau pendampingan compliance. </li>
                <li>Lulusan baru atau profesional di bidang teknik lingkungan, biologi, kehutanan, kimia, atau bidang relevan lainnya. </li>
                <li>Pejabat perusahaan atau manager yang ingin memastikan penerapan manajemen lingkungan sesuai standar. </li>
            </ol>
            
    </div>

    <!-- CTA -->
    <div
        class="max-w-4xl mx-auto mt-10"
        data-aos="fade-up"
        data-aos-delay="200"
    >

        <div class="bg-gradient-to-r from-[#9ACA40] to-[#146032] rounded-3xl p-6 md:p-10 text-white transition duration-500 hover:shadow-2xl">

            <h3 class="text-2xl md:text-3xl font-bold mb-2">
                Butuh Pendampingan Audit Lingkungan?
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Tim Enviroakualita siap membantu pelaksanaan audit lingkungan, identifikasi aspek dan dampak lingkungan, evaluasi kepatuhan regulasi, hingga penyusunan rekomendasi perbaikan sesuai dengan ketentuan yang berlaku.
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
