@extends('layouts.app')

@section('title', 'PERBEDAAN SAMPAH DAN LIMBAH PADAT NON-B3')

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
            Sampah & Non-B3
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            PERBEDAAN SAMPAH DAN LIMBAH PADAT NON-B3
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
            src="{{ asset('images/assets-news/news3.jpeg') }}"
            alt="Sampah & Non-B3"
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
                Apa Itu Sampah?
            </h2>
            
            <p class="mb-2">
                Menurut Undang-Undang Nomor 18 Tahun 2008 tentang Pengelolaan Sampah, sampah adalah sisa kegiatan sehari-hari manusia dan/atau proses alam yang berbentuk padat.
            </p>

            <h4 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Karakteristik Sampah:
            </h4>
            
            <ol class="list-decimal pl-5">
                <li>Berasal dari rumah tangga atau sejenis rumah tangga. </li>
                <li>Umumnya dihasilkan secara rutin setiap hari.</li>
                <li>Dikelola melalui sistem persampahan daerah.</li>
            </ol>

            <h4 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Contoh Sampah:
            </h4>
            
            <ol class="list-decimal pl-5">
                <li>Sisa makanan </li>
                <li>Daun dan ranting </li>
                <li>DBotol plastik minuman </li>
                <li>Kertas bekas </li>
                <li>Kaleng bekas </li>
                <li>Kemasan makanan </li>
            </ol>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Apa Itu Limbah Padat Non-B3?
            </h2>
            
            <p class="mb-2">
                Limbah padat non-B3 adalah sisa suatu usaha dan/atau kegiatan berbentuk padat yang tidak mengandung Bahan Berbahaya dan Beracun (B3) serta tidak memiliki karakteristik limbah B3.
            </p>
            
            <p class="mb-2">
                Limbah ini umumnya berasal dari kegiatan industri, perdagangan, perkantoran, maupun fasilitas pelayanan.
            </p>

            <h4 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Karakteristik Limbah Padat Non-B3:
            </h4>
            
            <ol class="list-decimal pl-5">
                <li>Berasal dari kegiatan usaha atau industri </li>
                <li>Tidak memiliki sifat mudah meledak, mudah terbakar, beracun, korosif, atau infeksius </li>
                <li>Dapat dimanfaatkan kembali apabila memenuhi persyaratan </li>
            </ol>

            <h4 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Contoh Limbah Padat Non-B3:
            </h4>
            
            <ol class="list-decimal pl-5">
                <li>Kardus bekas kemasan bahan baku </li>
                <li>Scrap logam </li>
                <li>Palet kayu </li>
                <li>Potongan plastik produksi </li>
                <li>Karung bekas </li>
                <li>Kertas administrasi perkantoran </li>
                <li>Sisa kain produksi </li>
            </ol>
                
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-2">
                Mengapa Klasifikasi yang Tepat Penting?
            </h2>
            
            <ol class="list-decimal pl-5">
                <li> Memastikan kepatuhan terhadap regulasi </li>
                <li> Menentukan metode pengelolaan yang sesuai </li>
                <li> Mengoptimalkan potensi pemanfaatan kembali </li>
                <li> Mencegah terjadinya pencemaran lingkungan. </li>
            </ol>
            
            <div class="overflow-x-auto mt-5 mb-8">
                <table class="w-full border border-gray-200 rounded-xl overflow-hidden text-sm md:text-base">
                    <thead class="bg-green-100 text-gray-900">
                        <tr>
                            <th class="border border-gray-200 px-4 py-3 text-left font-semibold">
                                Aspek
                            </th>
                            <th class="border border-gray-200 px-4 py-3 text-left font-semibold">
                                Sampah
                            </th>
                            <th class="border border-gray-200 px-4 py-3 text-left font-semibold">
                                Limbah Padat Non-B3
                            </th>
                        </tr>
                    </thead>

                    <tbody class="bg-white text-gray-700">
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium">
                                Sumber
                            </td>
                            <td class="border border-gray-200 px-4 py-3">
                                Rumah tangga/sejenis rumah tangga
                            </td>
                            <td class="border border-gray-200 px-4 py-3">
                                Kegiatan usaha atau industri
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium">
                                Dasar Pengaturan
                            </td>
                            <td class="border border-gray-200 px-4 py-3">
                                UU No. 18 Tahun 2008
                            </td>
                            <td class="border border-gray-200 px-4 py-3">
                                Peraturan lingkungan hidup terkait limbah non-B3
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium">
                                Pengelola
                            </td>
                            <td class="border border-gray-200 px-4 py-3">
                                Pemerintah daerah dan masyarakat
                            </td>
                            <td class="border border-gray-200 px-4 py-3">
                                Pelaku usaha/penghasil limbah
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium">
                                Tujuan Pengelolaan
                            </td>
                            <td class="border border-gray-200 px-4 py-3">
                                Mengurangi timbulan sampah
                            </td>
                            <td class="border border-gray-200 px-4 py-3">
                                Mencegah pencemaran dan meningkatkan pemanfaatan
                            </td>
                        </tr>
                        
                        <tr class="hover:bg-gray-50 transition">
                            <td class="border border-gray-200 px-4 py-3 font-medium">
                                Contoh
                            </td>
                            <td class="border border-gray-200 px-4 py-3">
                                Sisa makanan, botol minuman
                            </td>
                            <td class="border border-gray-200 px-4 py-3">
                                Scrap logam, kardus produksi
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Kesimpulan
            </h2>
            
            <p class="mb-2">
                Sampah dan limbah padat non-B3 merupakan dua istilah yang berbeda. Perbedaan utamanya terletak pada sumber penghasilnya. Sampah berasal dari aktivitas sehari-hari masyarakat, sedangkan limbah padat non-B3 berasal dari kegiatan usaha atau industri yang tidak mengandung B3. Pemahaman yang baik mengenai klasifikasi ini menjadi dasar penting dalam pelaksanaan pengelolaan lingkungan yang efektif, efisien, dan sesuai regulasi.
            </p>

    <!-- CTA -->
    <div
        class="max-w-4xl mx-auto mt-10"
        data-aos="fade-up"
        data-aos-delay="200"
    >

        <div class="bg-gradient-to-r from-[#9ACA40] to-[#146032] rounded-3xl p-6 md:p-10 text-white transition duration-500 hover:shadow-2xl">

            <h3 class="text-2xl md:text-3xl font-bold mb-2">
                Butuh Pendampingan Sampah & Limbah Non-B3?
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Tim Envirokualita siap membantu pelaksanaan kajian, analisis data, hingga penyusunan laporan sesuai standar ISO 14040 dan ISO 14044.
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
