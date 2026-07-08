@extends('layouts.app')

@section('title', 'Mengapa Community Development & Keanekaragaman Hayati Penting bagi Perusahaan?')

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
            COMDEV dan KEANEKARAGAMAN HAYATI
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            Mengapa Community Development & Keanekaragaman Hayati Penting bagi Perusahaan?
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
            src="{{ asset('images/assets-news/news25.jpeg') }}"
            alt="COMDEV dan KEANEKARAGAMAN HAYATI"
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
                Sustainability bukan cuma soal limbah dan emisi.
            </h2>    

            <p class="mb-2">
                🌱 Perusahaan sekarang juga dinilai dari:
            </p>

            <ul class="list-disc pl-5 space-y-0">
                        <li>Dampak sosial ke masyarakat</li>
                        <li>Perlindungan keanekaragaman hayati</li>
                        <li>Program pemberdayaan yang berkelanjutan</li>
            </ul>

            <p class="mb-2">
                Karena bisnis yang bertahan bukan hanya yang untung, tetapi yang memberi manfaat.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
               Apa Itu Community Development?
            </h2>

            <p class="mb-2">
                Community Development (Comdev) adalah upaya perusahaan untuk meningkatkan kualitas hidup masyarakat sekitar secara berkelanjutan.
            </p>

            <p class="mb-2">
                Bukan sekadar CSR bagi-bagi bantuan, Tetapi:
            </p>

            <ul class="pl-5 space-y-0">
                    <li>✔ pemberdayaan masyarakat</li>
                    <li>✔ peningkatan ekonomi lokal</li>
                    <li>✔ penguatan kapasitas masyarakat</li>
                    <li>✔ menciptakan kemandirian</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Kenapa Community Development Penting?
            </h2>

            <p class="mb-2">
                Karena perusahaan tidak berdiri sendiri. Program Comdev yang baik dapat:
            </p>

            <ul class="pl-5 space-y-0">
                    <li>🤝 membangun hubungan dengan masyarakat</li>
                    <li>📈 meningkatkan citra perusahaan</li>
                    <li>🌍 mendukung target ESG & PROPER</li>
                    <li>⚡ mengurangi konflik sosial</li>
                    <li>🏆 meningkatkan nilai perusahaan</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Apa Itu Keanekaragaman Hayati?
            </h2>

            <p class="mb-2">
                Keanekaragaman hayati adalah:
            </p>

            <ul class="pl-5 space-y-0">
                    <li>🌿 variasi makhluk hidup</li>
                    <li>🐝 flora dan fauna</li>
                    <li>🌳 ekosistem alami</li>
                    <li>💧 keseimbangan lingkungan</li>
            </ul>

            <p class="mb-2 mt-2">
                Mulai dari hutan, mangrove, satwa, hingga mikroorganisme memiliki peran penting bagi kehidupan.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Kenapa Perusahaan Harus Peduli Biodiversity?
            </h2>

            <p class="mb-2 mt-2">
                Karena aktivitas industri dapat memengaruhi:
            </p>

            <ul class="pl-5 space-y-0">
                    <li>⚠ habitat satwa</li>
                    <li>⚠ kualitas air dan tanah</li>
                    <li>⚠ keseimbangan ekosistem</li>
            </ul>

            <p class="mb-2 mt-2">
                Itulah sebabnya pengelolaan keanekaragaman hayati menjadi aspek penting dalam:
            </p>

            <ul class="pl-5 space-y-0">
                    <li>✔ PROPER</li>
                    <li>✔ ESG</li>
                    <li>✔ Sustainability Report</li>
                    <li>✔ Kepatuhan lingkungan</li>
            </ul>

            <div class="bg-green-50 border-l-4 border-green-500 rounded-r-lg p-5 my-6">

                <h3 class="text-lg font-bold text-green-700">
                    🌱 Aspek Penilaian dalam PROPER
                </h3>

                <p class="mt-3 text-gray-700">
                    Dalam program PROPER, perusahaan tidak hanya dinilai dari kepatuhan terhadap regulasi, tetapi juga dari upaya nyata dalam menciptakan keberlanjutan.
                </p>

                <div class="mt-5">
                    <h4 class="font-semibold text-gray-800 mb-3">
                        📋 Perusahaan dinilai berdasarkan:
                    </h4>

                    <ul class="space-y-3 text-gray-700">
                        <li>📌 Inovasi program pemberdayaan masyarakat.</li>
                        <li>🌍 Dampak program <span class="font-semibold">Community Development (Comdev)</span>.</li>
                        <li>🌳 Konservasi flora dan fauna.</li>
                        <li>🗺️ Luas area konservasi yang dikelola.</li>
                        <li>♻️ Keberlanjutan program yang dijalankan.</li>
                    </ul>
                </div>

                <div class="mt-5 bg-green-100 rounded-lg p-4">
                    <p class="text-green-800 font-medium">
                        💡 Semakin baik implementasinya, semakin tinggi nilai keberlanjutan perusahaan.
                    </p>
                </div>

            </div>

            <div class="bg-red-50 border-l-4 border-red-500 rounded-r-lg p-5 my-6">

    <h3 class="text-lg font-bold text-red-700">
        🚧 Tantangan yang Sering Terjadi
    </h3>

    <p class="mt-3 text-gray-700">
        Meningkatkan nilai keberlanjutan perusahaan membutuhkan perencanaan dan implementasi yang konsisten.
    </p>

            <div class="mt-5">
                    <h4 class="font-semibold text-gray-800 mb-3">
                        ⚠️ Beberapa tantangan yang sering ditemui:
                    </h4>

                    <ul class="space-y-3 text-gray-700">
                        <li>❌ Program CSR belum berkelanjutan.</li>
                        <li>📄 Dokumentasi PROPER belum optimal.</li>
                        <li>📉 Program belum memberikan dampak yang nyata.</li>
                        <li>🌱 Belum memiliki roadmap biodiversitas.</li>
                        <li>💡 Sulit menciptakan inovasi program yang berkelanjutan.</li>
                    </ul>
                </div>

                <div class="mt-5 bg-red-100 rounded-lg p-4">
                    <p class="text-red-800 font-medium">
                        🤝 Dengan pemahaman dan strategi yang tepat, setiap tantangan dapat dikelola dengan lebih baik.
                    </p>
                </div>

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
                Siap Meningkatkan Kinerja Lingkungan Perusahaan?
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Pahami Community Development dan strategi PROPER bersama EnviroKualita.
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
