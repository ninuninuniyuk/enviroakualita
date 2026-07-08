@extends('layouts.app')

@section('title', 'Greenwashing: Antara Komitmen Lingkungan cuma Strategi Marketing ')

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
            Greenwashing: Antara Komitmen Lingkungan cuma Strategi Marketing 
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            Mengenal Greenwashing dan cara membedakannya dengan aksi lingkungan yang nyata. 
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
            src="{{ asset('images/assets-news/news17.jpeg') }}"
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
                Greenwashing adalah praktik memberikan kesan palsu atau klaim yang menyesatkan bahwa sebuah produk, jasa, atau kebijakan perusahaan jauh lebih ramah lingkungan daripada kenyataannya.
            </p>

            <p class="mb-2">
                Analogi: Seperti "memoles" wajah bangunan yang retak dengan cat hijau agar terlihat kokoh dan asri dari luar, tanpa memperbaiki strukturnya.
            </p>
            
            <p class="mb-2">
                Singkatnya: Lebih banyak uang yang dihabiskan untuk iklan "peduli bumi" daripada untuk benar-benar melakukan aksi lingkungan.
            </p>
            

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Kenapa Ini Berbahaya? 
            </h2>

            <ul class="list-decimal pl-5">
                    <li>Menyesatkan Konsumen: Orang berniat baik membantu bumi, tapi uangnya malah mengalir ke praktik yang merusak.</li>
                    <li>Menghambat Inovasi: Perusahaan yang benar-benar berinvestasi pada teknologi ramah lingkungan jadi kalah saing dengan yang hanya modal iklan.</li>
                    <li>Risiko Reputasi & Hukum: Di banyak negara, klaim lingkungan tanpa bukti sudah mulai terkena sanksi hukum yang berat.</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Ciri-Ciri "Red Flags" yang Harus Diwaspadai
            </h2>

            <p class="mb-2">
                Agar tidak tertipu, perhatikan tanda-tanda berikut: 
            </p>

            <ul class="list-decimal pl-5">
                    <ul class="list-decimal pl-5">
                        <li>
                            <span class="font-semibold">Bahasa yang Tidak Jelas:</span>
                            Menggunakan istilah seperti "Eco-friendly", "Natural", atau "Sustainable" tanpa penjelasan teknis atau sertifikasi yang mendukung.
                        </li>
                    
                        <li>
                            <span class="font-semibold">Warna Hijau & Elemen Alam:</span>
                            Sengaja menggunakan kemasan berwarna hijau atau gambar hutan/daun untuk menciptakan kesan "hijau" secara psikologis, padahal isinya kimia berbahaya.
                        </li>
                    
                
                        <li>
                            <span class="font-semibold">Klaim Tanpa Bukti:</span>
                            Menyatakan produknya "terbuat dari plastik daur ulang" tetapi tidak mencantumkan persentase atau badan sertifikasi resminya.
                        </li>
                    
                        <li>
                            <span class="font-semibold">Menonjolkan Satu Kebaikan, Menyembunyikan Sejuta Keburukan:</span>
                            Contoh: Sebuah perusahaan mempromosikan sedotan kertas, tetapi pabriknya membuang limbah berbahaya langsung ke sungai.
                        </li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Apakah Produk Ini Benar-Benar Ramah Lingkungan?
            </h2>

            <ul class="list-decimal pl-5">
                    <li>Fashion: Merek baju yang meluncurkan koleksi "Conscious" tapi tetap menjalankan model bisnis fast fashion yang eksploitatif dan menghasilkan limbah tekstil raksasa.</li>
                    <li>Plastik: Label "Biodegradable" pada plastik yang ternyata hanya bisa hancur di fasilitas industri khusus, bukan terurai secara alami di tanah.</li>
            </ul>
                
            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Cara Menjadi Konsumen (dan Perusahaan) yang Kritis 
            </h2>
            

            <ul class="list-decimal pl-5">
                    <ul class="list-decimal pl-5">
                        <li>
                            <span class="font-semibold">Lihat Sertifikasi : </span>
                            Pastikan ada logo resmi seperti ISO 14001, FSC, Energy Star, atau Ekolabel Indonesia.
                        </li>
                    
                        <li>
                            <span class="font-semibold">Baca Komposisi:</span>
                            Jangan percaya gambar depan. Lihat bahan-bahan di bagian belakang kemasan.
                        </li>
                    
                        <li>
                            <span class="font-semibold">Cek Transparansi Data:</span>
                            Apakah perusahaan berani menampilkan laporan keberlanjutan (Sustainability Report) yang bisa diakses publik?
                        </li>
                    
                        <li>
                            <span class="font-semibold">Lihat Rekam Jejak:</span>
                            Jangan hanya lihat satu produk, tapi lihat bagaimana komitmen manajemen terhadap pengelolaan lingkungannya. 
                        </li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-6">
                Kesimpulan
            </h2>

            <p class="mb-2">
                Menjadi konsumen yang sadar lingkungan bukan hanya tentang membeli produk berlabel "hijau", tapi tentang menjadi kritis terhadap apa yang kita konsumsi. Jangan biarkan warna hijau menutupi kenyataan di baliknya.
            </p>

            <blockquote class="border-l-4 border-[#146032] pl-4 italic text-gray-700 my-4">
                "Greenwashing membuat kita merasa sudah membantu bumi, padahal kita hanya membantu meningkatkan keuntungan perusahaan."
            </blockquote>

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
                Ingin Memastikan Klaim Lingkungan Perusahaan Anda Kredibel?
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Pastikan klaim lingkungan perusahaan Anda didasari oleh data akurat dan sertifikasi yang valid bersama EnviroKualita.
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
