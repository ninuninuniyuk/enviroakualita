@extends('layouts.app')

@section('title', 'De-Influencing')

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
            De-Influencing
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            DE-INFLUENCING
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
            src="{{ asset('images/assets-news/news27.jpeg') }}"
            alt="De-Influencing"
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
                Fenomena De-influencing
            </h2>
            
            <p class="mb-2">
                Selama bertahun-tahun, algoritma media sosial telah mendikte perilaku kita melalui "racun" belanja impulsif, video unboxing, hingga manipulasi diskon kilat. Namun, kini lahir gerakan sebaliknya bernama De-influencing.
            </p>

            <p class="mb-2">
                Melalui tren ini, para kreator konten secara jujur mengedukasi audiens mengenai produk apa saja yang over-hyped, berkualitas buruk, atau sebenarnya sama sekali tidak esensial untuk dibeli. Gerakan ini bukan sekadar tren sesaat, melainkan bentuk kejenuhan massal terhadap budaya konsumerisme yang agresif.
            </p>
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Sisi Gelap Overkonsumsi
            </h2>

            <p class="mb-2">
                Mengapa gerakan mengerem belanja ini sangat berdampak masif bagi kelestarian lingkungan?
            </p>

            <p class="mb-2">
                Data PBB melalui Global E-waste Monitor dan lembaga riset global menunjukkan bahwa manusia saat ini membeli barang 5 kali lebih banyak dibandingkan dua dekade lalu, namun masa pakai produk tersebut 40% lebih pendek.
            </p>

            <p class="mb-2">
                Selain itu, industri fast fashion sendiri menghasilkan 100 miliar garmen per tahun, di mana sekitar 85% dari tekstil tersebut berakhir di TPA setiap tahunnya.
            </p>

            <p class="mb-2">
                Belum lagi industri kosmetik global yang menghasilkan 120 miliar unit kemasan plastik per tahun, yang mayoritasnya tidak dapat didaur ulang dan berakhir mencemari ekosistem laut kita.
            </p>
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Menilik Kasta Tertinggi Ekonomi Sirkular
            </h2>
            
            <p class="mb-2">
                Dalam narasi publik, Ekonomi Sirkular sering kali disempitkan maknanya hanya sebatas mendaur ulang sampah (Recycle).
            </p>

            <p class="mb-2">
                Padahal, berdasarkan hierarki pengelolaan lingkungan yang ideal, mendaur ulang sebenarnya adalah langkah terakhir karena membutuhkan energi yang besar. Kasta tertinggi dalam sirkularitas justru berada di hulu, yaitu Refuse (Menolak) dan Reduce (Mengurangi).
            </p>

            <p class="mb-2">
                Tren De-influencing secara langsung mengimplementasikan prinsip ini dengan memotong rantai pasok linear (Ambil-Pakai-Buang) langsung dari akarnya, yaitu mencegah barang tidak esensial tersebut diproduksi dan dikonsumsi sejak awal.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Pergeseran Strategi Bisnis: Dari Jualan Barang ke Jualan Solusi
            </h2>
            
            <p class="mb-2">
                Gerakan menahan diri ini mulai memaksa produsen global mengubah strategi bisnis mereka agar tetap relevan.
            </p>

            <p class="mb-2">
                Sebagai contoh, brand outdoor Patagonia secara konsisten mengampanyekan "Don't Buy This Jacket" guna mengedukasi konsumen agar hanya membeli saat benar-benar butuh, sekaligus menyediakan layanan perbaikan gratis seumur hidup.
            </p>
            
            <p class="mb-2">
                Sebagai contoh, brand outdoor Patagonia secara konsisten mengampanyekan "Don't Buy This Jacket" guna mengedukasi konsumen agar hanya membeli saat benar-benar butuh, sekaligus menyediakan layanan perbaikan gratis seumur hidup.
            </p>

            <p>
                IKEA juga telah meluncurkan program:
            </p>

            <p class="font-semibold mb-2">
                Buy Back & Resell
            </p>

            <p class="mb-2">
                Di mana mereka membeli kembali furnitur bekas dari pelanggan untuk diperbaiki dan dijual kembali. Ini membuktikan bahwa di masa depan, profitabilitas bisnis tidak lagi diukur dari  seberapa banyak barang baru yang laku, melainkan dari seberapa lama material tersebut dapat berputar di dalam ekosistem ekonomi.
            </p>

    <!-- CTA -->
    <div
        class="max-w-4xl mx-auto mt-10"
        data-aos="fade-up"
        data-aos-delay="200"
    >

        <div class="bg-gradient-to-r from-[#9ACA40] to-[#146032] rounded-3xl p-6 md:p-10 text-white transition duration-500 hover:shadow-2xl">

            <h3 class="text-2xl md:text-3xl font-bold mb-2">
                Jadi Ingat!
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Menjadi konsumen yang bijak tidak berarti Anda anti-belanja, melainkan lebih selektif dan bertanggung jawab atas setiap barang yang masuk ke dalam hidup Anda. Next time Anda melihat barang viral di media sosial, tanyakan pada diri sendiri: "Apakah saya benar-benar butuh, atau saya hanya terpengaruh algoritma?” 
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
