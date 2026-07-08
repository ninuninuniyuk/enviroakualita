@extends('layouts.app')

@section('title', 'Mengenal 4 Langkah Standar ISO dalam Life Cycle Assessment')

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
            Life Cycle Assessment
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            Mengenal 4 Langkah Standar ISO dalam Life Cycle Assessment
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
            src="{{ asset('images/assets-news/news1.jpeg') }}"
            alt="Life Cycle Assessment"
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
                
            </h2>

            <p class="mb-2">
                Life Cycle Assessment (LCA) adalah suatu metodologi ilmiah yang digunakan untuk mengevaluasi dampak lingkungan dari suatu produk, proses, atau sistem sepanjang seluruh siklus hidupnya, mulai dari pengambilan bahan mentah, proses produksi, distribusi, penggunaan, hingga akhir masa pakai atau pembuangan (cradle to grave) (KLHK, 2021).
                LCA menjadi alat penting untuk strategis perencanaan mitigasi dampak lingkungan, pengembangan produk yang lebih berkelanjutan, dan pengambilan keputusan berbasis bukti dalam industri dan kebijakan lingkungan (Chitaka & Goga, 2023).
            </p>

            <p class="mb-2">
                Berdasarkan Principles and Framework LCA pada SNI ISO 14040: 2016 ada empat tahapan dalam kajian LCA yaitu penentuan tujuan dan ruang lingkup (Goal and scope definition), analisis inventori (inventory analysis), penilaian dampak lingkungan (Life cycle impact assessment) dan interpretasi (interpretation) (Badan Standarisasi Nasional, 2016)..
            </p>

            <div
                class="bg-gray-50 border border-gray-100 rounded-2xl p-5 my-8 transition duration-300 hover:shadow-md"
                data-aos="fade-up"
            >

                <h3 class="text-base font-semibold text-gray-900 mb-3">
                    Goal and scope definition
                </h3>

                <p class="mb-2">
                    bertujuan untuk menetapkan tujuan penelitian serta menentukan ruang lingkup sistem yang akan dianalisis secara jelas dan sistematis. Ada 4 jenis batas sistem yang digunakan:
                </p>

                <ol class="list-decimal pl-5">
                    <li>Cradle to grave : ekstraksi bahan baku hingga produk akhir</li>
                    <li>Cradle to gate :  ekstraksi bahan baku hingga produk akhir</li>
                    <li>Gate to grave : mencakup tahapan setelah proses produksi selesai, yaitu distribusi, penggunaan produk tahu oleh konsumen</li>
                    <li>Gate to Gate : mencakup satu atau beberapa tahapan tertentu dalam proses produksi</li>
                </ol>

                <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                    Life Analysis Inventory (LCI)
                </h3>

                <p class="mb-2">
                    Mengidentifikasi proses - proses yang sesuai dalam sistem produk, sehingga dapat menggambarkan secara lengkap aliran bahan, energi, dan emisi yang terjadi sepanjang siklus hidupnya. Selanjutnya, dilakukan pengumpulan data kuantitatif terhadap setiap aliran input dan output pada masing-masing proses.
                </p>

                <ul class="pl-5 space-y-0">
                    <li>- data input meliputi penggunaan bahan baku, energi, air, dan sumber daya lainnya, </li>
                    <li>- data output mencakup produk utama, produk samping, emisi ke udara, limbah cair, dan limbah padat yang dihasilkan selama proses produksi</li>
                </ul>

                <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                    Life Cycle Impact Assessment (LCIA)
                </h3>

                <p class="mb-2">
                    Mengevaluasi dan mengukur besarnya potensi dampak lingkungan yang dihasilkan oleh suatu sistem produk berdasarkan data input dan output yang telah dikumpulkan pada tahap Life Cycle Inventory (LCI).
                    Beberapa kategori dampak lingkungan yang dapat dikaji dalam kajian LCA : Abiotic
                </p>

                <ul class="pl-5 space-y-0">
                    <li>- Abiotic Depletion: Penipisan sumber daya alam</li>
                    <li>- Abiotic Depletion (fossil fuel): Penipisan bahan bakar fosil</li>
                    <li>- Global Warming: Pemanasan bumi</li>
                    <li>- Ozone Layer Depletion: Penipisan ozon</li>
                    <li>- Photochemical Oxidation: Kabut asap (smog)</li>
                    <li>- Acidification: Peningkatan keasaman</li>
                    <li>- Eutrophication: Ledakan alga di perairan</li>
                </ul>

                <h3 class="text-base font-semibold text-gray-900 mt-6 mb-3">
                    Interpretation
                </h3>

                <p class="mb-2">
                    Tahapan ini bertujuan untuk mendapatkan hasil akhir kajian berdasarkan hasil analisis inventori dan penilaian dampak. Interpretasi hasil digunakan sebagai dasar untuk 
                </p>

                <ul class="pl-5 space-y-0">
                    <li>- Di mana titik dampak terbesar (Hotspot)?</li>
                    <li>- Apa langkah efisiensi yang bisa diambil?</li>
                    <li>- Apakah hasilnya sudah sesuai dengan tujuan awal di Tahap 1?</li>
                </ul>

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
                Ingin Menghitung Dampak Lingkungan Secara Akurat?
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                LCA adalah kunci menuju industri hijau yang transparan. Pastikan tim Anda memahami metodologi ini dengan tepat melalui pelatihan ahli di EnviroKualita.
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
