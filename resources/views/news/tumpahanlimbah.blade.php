@extends('layouts.app')

@section('title', 'Mengatasi Tumpahan Limbah B3')

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
            Apa yang Harus Dilakukan Jika Terjadi Tumpahan Limbah B3?

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
            src="{{ asset('images/assets-news/news2.jpeg') }}"
            alt="Tumpahan Limbah B3"
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

            <p class="mb-2">
                TERJADI TUMPAHAN LIMBAH B3 DI PABRIK? Siapa yang Bertanggung Jawab Menanganinya? Bukan sekadar asal lap, penanganan tumpahan B3 di industri diatur oleh 
                regulasi ketat dan wajib dipimpin oleh personel kompeten!
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-2">
                WAKTU ADALAH KUNCI
            </h2>

            <p class="mb-2">
                Waktu Adalah Kunci: 24 Jam Maksimal!
                Berdasarkan PP No. 22 Tahun 2021, perusahaan wajib melakukan tindakan
                penanggulangan (isolasi & penghentian sumber) maksimal dalam waktu 24 jam sejak
                tumpahan diketahui. Kegagalan dalam merespons cepat dapat memicu sanksi pidana
                dan denda administratif yang berat.
            </p>

            <div
                class="bg-gray-50 border border-gray-100 rounded-2xl p-5 my-8 transition duration-300 hover:shadow-md"
                data-aos="fade-up">

            <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                DAMPAK & BAHAYA TUMPAHAN B3
            </h3>

            <p class="mb-2">
                Dampak & Bahaya Tumpahan B3
            </p>

                <ul class="list-disc pl-5 space-y-0">
                    <li>Kesehatan & Lingkungan: Paparan akut dapat menyebabkan iritasi pernapasan,
                        luka bakar kimia, hingga kematian. Merusak kesuburan tanah dan mematikan biota
                        air secara permanen.</li>
                    <li>Hukum & Finansial: Risiko denda hingga 3 Miliar Rupiah, pembekuan izin usaha,
                        serta tuntutan ganti rugi pemulihan lingkungan yang sangat mahal.</li>
                </ul>

            <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                LANDASAN HUKUM TANGGAP DARURAT
            </h3>

            <p class="mb-2">
                Tanggap Darurat Terikat Regulasi!
                Setiap industri wajib siap menghadapi insiden lingkungan. Pahami dasar
                hukum utamanya:
            </p>

                <ul class="list-disc pl-5 space-y-0">
                    <li>PP No. 22 Tahun 2021 (Pasal 276): Kewajiban melakukan isolasi, penghentian
                        sumber, dan penanggulangan pencemaran tumpahan maksimal 24 jam sejak
                        diketahui.</li>
                    <li>Permen LHK No. 74 Tahun 2019 (Pasal 3): Kewajiban bagi industri penghasil
                        limbah B3 untuk memiliki Dokumen Program Kedaruratan, sarana mitigasi (Spill
                        Kit), serta personel terlatih di industri.</li>
                </ul>

                <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                    DETAIL KEWAJIBAN PP NO. 22 TAHUN 2021
                </h3>
    
                <p class="mb-2">
                    Kewajiban Menurut PP No. 22 Tahun 2021
                </p>
    
                    <ul class="list-disc pl-5 space-y-0">
                        <li>Pasal 276 Ayat (1): Setiap orang yang melakukan pencemaran wajib melakukan
                            penanggulangan seketika.</li>
                        <li>Pengisolasian: Tindakan menutup area tumpahan agar tidak menyebar ke saluran
                            drainase atau tanah terbuka.</li>
                        <li>Penghentian Sumber: Menghentikan kebocoran pada pipa, tangki, atau wadah
                            limbah B3 secara teknis dan aman.</li>
                        <li>Pemulihan: Kewajiban melakukan remediasi atau pembersihan lahan yang
                            terkontaminasi pasca tumpahan.</li>
                    </ul>

                <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                    Prosedur Mitigasi: The 4S Method
                </h3>
    
                    <ul class="list-decimal pl-5">
                        <li>STOP (Hentikan): Hentikan sumber kebocoran dari wadah/drum segera jika aman
                            dilakukan.</li>
                        <li>SHUT (Isolasi): Lokalisir area tumpahan menggunakan sosis penyerap (absorbent
                            boom) agar tidak meluas.</li>
                        <li>SORB (Serap): Serap cairan limbah menggunakan absorbent pad/serbuk hingga
                            bersih.</li>
                        <li>STORAGE (Wadahi): Wadahi residu ke drum B3, beri simbol manifes limbah, dan
                            catat dalam logbook.</li>
                    </ul>

            </div>

            <h2 class="text-2xl font-bold text-gray-900 mb-2">
                Peran Vital Personel Bersertifikasi
            </h2>

            <p class="mb-2">
                Siapa Penanggung Jawabnya?
                Penanganan tumpahan bukan sekadar urusan teknis, tapi urusan regulasi. PLB3 (Penanggung Jawab Pengelolaan Limbah B3) adalah sosok yang memastikan:

                SOP Penanganan sesuai peraturan LHK terbaru.
                Pelaporan manifest dan logbook limbah pasca tumpahan sah.
                Perusahaan terhindar dari jeratan denda miliaran rupiah
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
                Sudahkah Anda siap mengelola limbah B3 secara legal dan aman?
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Jangan tunggu insiden terjadi. Bekali dirimu dan tim dengan kompetensi pengelolaan limbah B3 yang legal dan aman
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
