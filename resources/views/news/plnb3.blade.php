@extends('layouts.app')

@section('title', 'Jangan Salah! Limbah Non-B3 Tetap Wajib Dikelola')

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
            Jangan Salah! Limbah Non-B3 Tetap Wajib Dikelola
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            Jangan Salah! Limbah Non-B3 Tetap Wajib Dikelola

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
            src="{{ asset('images/assets-news/news20.jpeg') }}"
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
                Definisi
            </h2>

            <p class="mb-2">
                Menurut PP No. 22 Tahun 2021, Limbah Non-B3 adalah sisa suatu usaha dan/atau kegiatan yang tidak memiliki karakteristik limbah B3.
                Sederhananya: Limbah ini tidak mudah meledak, tidak beracun, tidak korosif, dan tidak menyebabkan infeksi secara langsung.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-4">
                Jenis PLNB3
            </h2>

            <p class="mb-2">
                Limbah Non-B3 Terdaftar: Limbah yang berasal dari proses industri spesifik namun sudah ditetapkan pemerintah sebagai non-B3. Contoh:
            </p>
            
            <ul class="pl-5 space-y-0">
                    <li> 🔥 Fly Ash & Bottom Ash (FABA)
                        Sisa pembakaran batu bara dari PLTU atau industri lain yang menggunakan teknologi boiler minimal pulverized coal atau stoker boiler.</li>
                    <li> 🏭 Slag Besi/Baja (Steel Slag)
                        Sisa dari proses peleburan besi atau baja dalam tanur tinggi (blast furnace) yang sering dimanfaatkan kembali sebagai material konstruksi jalan.</li>
                    <li> 🛢️ Spent Bleaching Earth (SBE)
                        Limbah dari proses pemurnian minyak goreng (industri refinery minyak sawit) yang telah diekstraksi minyaknya (kandungan minyak < 3%).</li>
                    <li> ⚙️ Copper Slag
                        Sisa dari proses peleburan tembaga yang sering digunakan sebagai pengganti pasir dalam pengamplasan logam (sandblasting) atau campuran semen.</li>
            </ul>

            <p class="mb-2 mt-6">
                Limbah Non-B3 Khusus: Limbah yang berasal dari luar proses industri atau kegiatan tertentu. Contoh:
            </p>

            <ul class="list-disc pl-5 space-y-0">
                    <li>Limbah Konstruksi & Pembongkaran: Sisa potongan beton, batu bata, keramik, kayu bekas perancah, dan sisa potongan besi tulangan yang bersih dari bahan kimia.</li>
                    <li>Limbah Perkantoran & Domestik Industri: Kertas dokumen, kardus pembungkus, plastik kemasan makanan karyawan, dan sisa furnitur kantor.</li>
                    <li>Palet Kayu & Kemasan Plastik Non-Kimia: Palet kayu yang digunakan untuk logistik serta plastik pembungkus (stretch film) yang tidak bersentuhan dengan bahan berbahaya.</li>
                    <li>Sisa Kain (Perca) & Karet: Potongan sisa dari industri tekstil atau industri manufaktur alas kaki yang belum melalui proses pewarnaan atau pelapisan bahan kimia berbahaya.</li>
                    <li>Limbah Organik Kantin: Sisa makanan dari kantin perusahaan atau limbah taman (potongan rumput dan dahan pohon) di area industri.</li>
            </ul>

            <h2 class="text-2xl font-bold text-gray-900 mb-2 mt-4">
                Mengapa Harus Dikelola? (The "Why")
            </h2>

            <ul class="list-disc pl-5 space-y-0">
                    <li>Volume Besar: Jika tidak dikelola, bisa memenuhi TPA dengan sangat cepat.</li>
                    <li>Nilai Ekonomi: Banyak PLNB3 yang punya nilai jual kembali (reuse & recycle).</li>
                    <li>Kepatuhan Hukum: Perusahaan wajib mencatat dan melaporkan jumlah PLNB3 mereka agar tetap sesuai standar lingkungan.</li>
            </ul>

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
                Ubah limbah jadi peluang!
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Pelajari strategi pemanfaatan PLNB3 yang efektif dan bernilai ekonomi bersama EnviroKualita. 
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
