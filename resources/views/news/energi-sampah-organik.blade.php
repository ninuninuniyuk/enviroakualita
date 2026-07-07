@extends('layouts.app')

@section('title', 'Energi Sampah Organik')

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
            Energi Sampah Organik
        </span>

        <h1 class="text-3xl md:text-5xl font-bold mt-5 leading-tight">
            ENERGI SAMPAH ORGANIK
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
            src="{{ asset('images/assets-news/news26.jpeg') }}"
            alt="Energi Sampah Organik"
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
                Apa Itu Sampah Organik?
            </h2>
            
            <p class="mb-2">
                Menurut Undang-Undang Nomor 10 Tahun 2008 tentang Pengelolaan Sampah, sampah adalah sisa kegiatan sehari-hari manusia dan atau proses alam yang berbentuk padat.
            </p>

            <p class="mb-2">
                Sebelum melangkah lebih jauh, kita perlu tahu apa yang termasuk dalam kategori ini. Sampah organik adalah limbah yang berasal dari makhluk hidup (tumbuhan dan hewan) yang sifatnya mudah membusuk dan terurai secara alami.
            </p>
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                64 JT
            </h2>

            <p class="mb-2">
                <span class="bg-gradient-to-t from-lime-300 to-transparent px-1">
                    Ton sampah/Tahun
                </span>
            </p>

            <p class="font-semibold">
                Potensi Kalori Tinggi
            </p>
            
            <p class="mb-2">
                Indonesia menghadapi tantangan besar dengan porsi sampah plastik mencapai 14%. Namun, tahukah Anda bahwa plastik memiliki nilai kalori sekitar 20-40 MJ/kg? Anuka ini hampir setara dengan batu bara kualitas tingg adikannya bahan baku energi yang sangat poten Jika dikelola secara efisien.
            </p>
            
            
            <h2 class="text-2xl font-bold text-gray-900 mt-5 mb-4">
                Masalah di Balik Tumpukan Sampah
            </h2>
            
            <p class="mb-2">
                Jika sampah-sampah ini hanya dibuang begitu saja ke Tempat Pemrosesan Akhir (TPA) dan menumpuk tanpa udara (kondisi anaerobik), proses pembusukannya akan menghasilkan gas metana ($CH_4$).
            </p>

            <p class="font-semibold">
                Potensi Kalori Tinggi
            </p>

            <p class="mb-2">
                Gas metana adalah salah satu Gas Rumah Kaca (GRK) yang kekuatannya dalam memerangkap panas di atmosfer jauh lebih kuat daripada karbon dioksida ($CO_2$). Jika tidak dikelola, ini memicu pemanasan global dan risiko ledakan di TPA.
            </p>

            <div class="mt-5">
                <span class="inline-block bg-[#2B9048] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                    Biogas (Energi Gas)
                </span>

                <p class="text-gray-600 leading-7 mb-2">
                    Ini adalah bentuk energi yang paling populer dari sampah organik basah (sisa makanan, kotoran ternak).
                </p>

                <p class="text-gray-600 leading-7">
                    <b>Bagaimana jadinya?</b> Sampah difermentasi oleh bakteri tanpa oksigen (anaerobik) menghasilkan gas metana ($CH_4$).
                </p>

                <p class="text-gray-600 leading-7">
                    <b>Pemanfaatan:</b> Gas ini ditampung dan disalurkan langsung melalui pipa ke kompor dapur warga untuk menggantikan Gas LPG.
                </p>
            </div>

            <div class="mt-5">
                <span class="inline-block bg-[#2B9048] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                    Pembangkit Listrik Berbasis Sampah (PLTSa)
                </span>

                <p class="text-gray-600 leading-7 mb-2">
                    Sampah organik skala besar (seperti di TPA) bisa menjadi sumber pencahayaan dan penggerak elektronik.
                </p>

                <p class="text-gray-600 leading-7 font-semibold">
                    Bagaimana jadinya
                </p>

                <ul class="space-y-3 mb-2">
                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Cara A: Biogas yang dihasilkan dalam jumlah besar digunakan sebagai bahan bakar untuk memutar turbin generator listrik.</span>
                </li>

                <li class="flex gap-3">
                    <span class="text-green-600 font-bold">.</span>
                    <span>Cara B (Insinerasi/Termal): Sampah organik kering dibakar dalam ruang khusus untuk menghasilkan panas tinggi. Panas ini mengubah air menjadi uap bertekanan besar untuk memutar turbin listrik.</span>
                </li>
            </ul>

                <p class="text-gray-600 leading-7">
                    <b>Pemanfaatan:</b> Mengaliri listrik ke jaringan PLN untuk menerangi perumahan dan jalan raya.
                </p>
            </div>

            <div class="mt-5">
                <span class="inline-block bg-[#2B9048] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                    Briket & Pellet Biomassa
                </span>

                <p class="text-gray-600 leading-7 mb-2">
                    Untuk jenis sampah organik yang kering, keras, atau berserat (seperti tempurung kelapa, serbuk gergaji, sekam padi, dan ranting pohon).
                </p>

                <p class="text-gray-600 leading-7">
                    <b>Bagaimana jadinya?</b> Sampah dikeringkan, dihancurkan, lalu dipadatkan dengan mesin menjadi tabung-tabung kecil (pellet) atau balok (briket).
                </p>

                <p class="text-gray-600 leading-7">
                    <b>Pemanfaatan:</b> Menjadi bahan bakar padat pengganti batu bara atau arang kayu konvensional di sektor industri (seperti pabrik semen/tekstil) atau untuk pemanggang komersial.
                </p>
            </div>

            <div class="mt-5">
                <span class="inline-block bg-[#2B9048] text-white text-sm font-semibold px-3 py-1 rounded-full mb-2">
                    Bioetanol & Biodiesel
                </span>

                <p class="text-gray-600 leading-7 mb-2">
                    Teknologi canggih (kimia dan biologi) bisa mengubah limbah organik menjadi bahan bakar kendaraan.
                </p>

                <p class="text-gray-600 leading-7">
                    <b>Biodetanol:</b> Dibuat dari sampah organik yang tinggi pati, gula, atau selulosa (seperti kulit singkong, batang jagung, atau buah busuk) melalui proses fermentasi jasad renik dan distilasi. Bisa dicampur dengan bensin.
                </p>

                <p class="text-gray-600 leading-7">
                    <b>Biodiesel:</b> Dibuat dari limbah minyak goreng bekas (minyak jelantah) atau limbah lemak hewani dari rumah potong hewan. Setelah melalui proses transesterifikasi, minyak ini bisa digunakan sebagai pengganti solar untuk mesin diesel.
                </p>
            </div>

    <!-- CTA -->
    <div
        class="max-w-4xl mx-auto mt-10"
        data-aos="fade-up"
        data-aos-delay="200"
    >

        <div class="bg-gradient-to-r from-[#9ACA40] to-[#146032] rounded-3xl p-6 md:p-10 text-white transition duration-500 hover:shadow-2xl">

            <h3 class="text-2xl md:text-3xl font-bold mb-2">
                Keren Kan Potensinya?
            </h3>

            <p class="text-sm md:text-lg opacity-90 mb-6">
                Tapi semua energi ini nggak akan tercipta kalau sampah kita masih tercampur plastik. Yuk, mulai pilah sampah hari ini! Komen di bawah, energi mana yang baru kamu tahu?
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
