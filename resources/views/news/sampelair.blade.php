@extends('layouts.app')

@section('title', 'Mengambil Sampel Air Itu Tidak Sesederhana Mengisi Botol')

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
            Sample Air
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            Mengambil Sampel Air Itu Tidak Sesederhana Mengisi Botol
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
            src="{{ asset('images/assets-news/news9.jpeg') }}"
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
                Kenapa sampling penting?
            </h2>    

            <p class="mb-2">
                Sampling Menentukan Akurasi Data.
                Dalam pengujian kualitas air, hasil analisis sangat bergantung pada proses pengambilan sampel.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Jika sampel tidak representatif:
            </h2>

            <ul class="pl-5 space-y-0">
                    <li> ❌ data kualitas air bisa salah</li>
                    <li> ❌ tingkat pencemaran tidak terdeteksi</li>
                    <li> ❌ keputusan lingkungan menjadi keliru</li>
                </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Hal yang Harus Diperhatikan Saat Sampling Air
            </h2>

            <ul class="pl-5 space-y-0">
                    <li> 📍 Lokasi sampling
                        harus mewakili kondisi badan air</li>
                    <li> 🧴 Botol sampel yang sesuai
                        berbeda untuk tiap parameter</li>
                    <li> ⏱ Waktu pengambilan sampel
                        mempengaruhi hasil analisis</li>
                    <li> 🌡 Penyimpanan sampel
                        harus dijaga agar tidak berubah</li>
                </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Siapa yang Melakukan Sampling?
            </h2>

                <ul class="list-decimal pl-5">
                    <li>Fisika</li>
                    <li>Kimia</li>
                    <li>Biologi</li>
                </ul>
                
            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Parameter yang Biasanya Dianalisis?
            </h2>

            <p class="mb-2 mt-2">
                Sampling Harus Dilakukan oleh Tenaga Kompeten, 
                Pengambilan contoh air bukan hanya pekerjaan teknis biasa.
            </p>

            <p class="mb-2 mt-2">
                Diperlukan pengetahuan, metode, 
                dan standar yang tepat agar hasil pengujian dapat dipertanggungjawabkan.
            </p>

            <p class="mb-2 mt-2">
                Karena itu banyak perusahaan membutuhkan tenaga sampling yang kompeten dan tersertifikasi.
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
                Ingin Memahami Sampling Air Secara Profesional?
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Tingkatkan Kompetensimu di Bidang Lingkungan Bersama Envirokualita
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
