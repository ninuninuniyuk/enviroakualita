@extends('layouts.app')

@section('title', 'Layanan')

@section('content')

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<style>
    body{
        font-family: Arial, sans-serif;
        scroll-behavior: smooth;
    }

    .floating {
        animation: floating 4s ease-in-out infinite;
    }

    @keyframes floating {
        0%,100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }

    .hover-lift {
        transition: all 0.4s ease;
    }

    .hover-lift:hover {
        transform: translateY(-10px) scale(1.03);
        box-shadow: 0 20px 30px rgba(0,0,0,0.12);
    }

    .glass {
        background: rgba(255,255,255,0.10);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.15);
    }

    .modal-bg {
        background: rgba(0,0,0,0.6);
        backdrop-filter: blur(4px);
    }

    .animated-bg {
        background: linear-gradient(
            270deg,
            rgba(34,197,94,0.05),
            rgba(255,255,255,0.02),
            rgba(34,197,94,0.05)
        );
        background-size: 400% 400%;
        animation: gradientMove 10s ease infinite;
    }

    @keyframes gradientMove {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    .rotate-slow {
        animation: rotateSlow 18s linear infinite;
    }

    @keyframes rotateSlow {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .fade-up {
        animation: fadeUp 1s ease;
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
        duration: 1000,
        once: true
    });

    function animateCounter(id, target, suffix = '') {
        let count = 0;
        let increment = Math.ceil(target / 80);
        let element = document.getElementById(id);

        let interval = setInterval(() => {
            count += increment;

            if (count >= target) {
                count = target;
                clearInterval(interval);
            }

            element.innerText = count + suffix;
        }, 30);
    }

    animateCounter('counter1', 500, '+');
    animateCounter('counter2', 500, '+');
    animateCounter('counter3', 100, '%');
});

function openModal(title, content) {
    document.getElementById('modalTitle').innerText = title;
    document.getElementById('modalContent').innerText = content;
    document.getElementById('popupModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('popupModal').classList.add('hidden');
}

function toggleMenu() {
    document.getElementById('mobileMenu').classList.toggle('hidden');
}
</script>

<!-- Navbar -->
<nav class="shadow-sm bg-white sticky top-0 z-50">
    <div class="container-custom py-5">

        <div class="flex items-center justify-between">

            <a href="/"
               class="text-xl md:text-2xl font-bold text-green-700 hover:scale-105 transition">
                Enviroakualita
            </a>

            <div class="hidden md:flex items-center gap-8">
                <ul class="flex gap-8 font-medium">
                    <li>
                        <a href="/tentang-kami"
                        class="{{ request()->is('tentang-kami') ? 'text-green-700 font-bold' : 'hover:text-green-700' }}">
                            Tentang Kami
                        </a>
                    </li>

                    <li>
                        <a href="/layanan"
                        class="{{ request()->is('layanan') ? 'text-green-700 font-bold' : 'hover:text-green-700' }}">
                            Layanan
                        </a>
                    </li>

                    <li>
                        <a href="/gallery"
                        class="{{ request()->is('gallery') ? 'text-green-700 font-bold' : 'hover:text-green-700' }}">
                            Media
                        </a>
                    </li>
                </ul>

                <a href="/pendaftaran">
                    <button class="bg-green-700 text-white px-5 py-2 rounded-lg hover:scale-105 transition">
                        Daftar Sekarang
                    </button>
                </a>
            </div>

            <button onclick="toggleMenu()" class="md:hidden text-green-700">
                ☰
            </button>
        </div>

        <div id="mobileMenu" class="hidden md:hidden mt-5">
            <ul class="flex flex-col gap-4 font-medium">
                <li><a href="/tentang-kami">Tentang Kami</a></li>
                <li><a href="/layanan">Layanan</a></li>
                <li><a href="/gallery">Media</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="relative min-h-screen overflow-hidden">

    <img
        src="https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?q=80&w=2070&auto=format&fit=crop"
        class="absolute inset-0 w-full h-full object-cover"
    >

    <div class="absolute inset-0 bg-black/50"></div>
    <div class="absolute inset-0 animated-bg opacity-20"></div>

    <div class="absolute top-20 left-10 w-40 h-40 bg-green-400/10 rounded-full blur-3xl rotate-slow"></div>
    <div class="absolute bottom-20 right-10 w-52 h-52 bg-emerald-300/10 rounded-full blur-3xl rotate-slow"></div>

    <div class="relative z-10 container-custom min-h-screen flex flex-col justify-center items-center text-center py-20 fade-up">

        <p class="uppercase tracking-[4px] text-green-300 mb-4 text-sm md:text-base">
            Environment • Audit • Sustainability
        </p>

        <h1 class="text-3xl md:text-6xl font-bold text-white leading-tight max-w-5xl mb-6">
            Solusi Audit & Konsultasi Lingkungan
        </h1>

        <p class="text-sm md:text-lg text-gray-200 max-w-3xl leading-8">
            Pastikan usaha Anda tetap patuh regulasi dan ramah lingkungan.
        </p>

        <div class="glass rounded-3xl px-6 md:px-10 py-8 mt-12 text-white shadow-2xl w-full max-w-4xl floating">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

                <div>
                    <h2 id="counter1" class="text-4xl font-bold text-green-300">0</h2>
                    <p>Peserta Pelatihan</p>
                </div>

                <div>
                    <h2 id="counter2" class="text-4xl font-bold text-green-300">0</h2>
                    <p>Orang Puas</p>
                </div>

                <div>
                    <h2 id="counter3" class="text-4xl font-bold text-green-300">0</h2>
                    <p>Kepatuhan</p>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Tentang -->
<section class="container-custom section-padding text-center" data-aos="fade-up">
    <h2 class="text-3xl font-bold mb-6">Tentang Layanan</h2>
    <p class="text-gray-600 leading-relaxed max-w-4xl mx-auto">
        Solusi lengkap audit dan konsultasi lingkungan untuk memastikan usaha Anda tetap patuh
        terhadap regulasi serta ramah lingkungan.
    </p>
</section>

<!-- Manfaat -->
<section class="bg-gray-50">
    <div class="container-custom section-padding">
        <h2 class="text-3xl font-bold text-center mb-10" data-aos="fade-up">
            Manfaat Layanan
        </h2>

        @php
            $layanan = [
                ['judul' => 'Audit Lingkungan', 'isi' => 'Audit menyeluruh sesuai regulasi lingkungan yang berlaku.'],
                ['judul' => 'Penyusunan Dokumen AMDAL', 'isi' => 'Dokumen AMDAL untuk kebutuhan perizinan usaha besar.'],
                ['judul' => 'Penyusunan UKL-UPL', 'isi' => 'Dokumen UKL-UPL untuk usaha menengah.'],
                ['judul' => 'Pengelolaan Limbah B3', 'isi' => 'Pengelolaan limbah berbahaya sesuai standar.'],
                ['judul' => 'Uji Kualitas Air, Udara, Tanah', 'isi' => 'Pengujian lingkungan terstandarisasi.'],
                ['judul' => 'Konsultasi Perizinan Lingkungan', 'isi' => 'Pendampingan proses perizinan sampai selesai.'],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($layanan as $item)
                <div onclick="openModal('{{ $item['judul'] }}', '{{ $item['isi'] }}')"
                     class="bg-green-700 text-white p-6 rounded-xl cursor-pointer hover:bg-green-800 transition hover-lift text-center"
                     data-aos="zoom-in">
                    <div class="font-semibold text-lg">
                        {{ $item['judul'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="container-custom section-padding">
    <div class="text-center mb-14" data-aos="fade-up">
        <p class="uppercase tracking-[4px] text-green-700 mb-3 font-semibold">Proses Layanan</p>
        <h2 class="text-3xl md:text-4xl font-bold">Langkah Kami untuk Menyelesaikan Kebutuhan Lingkungan Anda</h2>
        <p class="text-gray-600 max-w-3xl mx-auto mt-4">
            Setiap proyek ditangani secara terstruktur, dari pemeriksaan awal hingga tindak lanjut hasil, agar pelayanan kami selalu efektif dan terpercaya.
        </p>
    </div>

    <div class="grid gap-6 md:grid-cols-3">
        <div class="bg-white rounded-3xl p-8 shadow hover-lift" data-aos="fade-up">
            <div class="text-green-700 mb-5 rounded-2xl bg-green-50 w-16 h-16 grid place-items-center text-2xl">
                1
            </div>
            <h3 class="text-xl font-semibold mb-3">Audit & Analisis</h3>
            <p class="text-gray-600 leading-7">Kami memetakan kondisi lingkungan dan regulasi yang relevan untuk menentukan rekomendasi yang tepat.</p>
        </div>

        <div class="bg-white rounded-3xl p-8 shadow hover-lift" data-aos="fade-up" data-aos-delay="150">
            <div class="text-green-700 mb-5 rounded-2xl bg-green-50 w-16 h-16 grid place-items-center text-2xl">
                2
            </div>
            <h3 class="text-xl font-semibold mb-3">Rencana & Dokumentasi</h3>
            <p class="text-gray-600 leading-7">Kami menyiapkan dokumen AMDAL, UKL-UPL, dan rencana tindakan yang siap diajukan sesuai kebutuhan perusahaan.</p>
        </div>

        <div class="bg-white rounded-3xl p-8 shadow hover-lift" data-aos="fade-up" data-aos-delay="300">
            <div class="text-green-700 mb-5 rounded-2xl bg-green-50 w-16 h-16 grid place-items-center text-2xl">
                3
            </div>
            <h3 class="text-xl font-semibold mb-3">Implementasi & Evaluasi</h3>
            <p class="text-gray-600 leading-7">Kami mendampingi implementasi, mengukur hasil, dan memberikan rekomendasi perbaikan berkelanjutan.</p>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="bg-gray-50">
    <div class="container-custom section-padding">
        <div class="text-center mb-14" data-aos="fade-up">
            <p class="uppercase tracking-[4px] text-green-700 mb-3 font-semibold">Kenapa Memilih Kami</p>
            <h2 class="text-3xl md:text-4xl font-bold">Keunggulan Enviroakualita</h2>
            <p class="text-gray-600 max-w-3xl mx-auto mt-4">
                Fokus kami adalah membuat proses lingkungan menjadi lebih mudah, cepat, dan terukur untuk Anda.
            </p>
        </div>

        <div class="grid gap-6 md:grid-cols-3">
            <div class="bg-white rounded-3xl p-8 shadow hover-lift" data-aos="fade-up">
                <h3 class="text-xl font-semibold mb-3 text-green-700">Regulasi Terbaru</h3>
                <p class="text-gray-600 leading-7">Tim kami selalu up to date dengan aturan lingkungan terbaru untuk menjaga kepatuhan bisnis Anda.</p>
            </div>
            <div class="bg-white rounded-3xl p-8 shadow hover-lift" data-aos="fade-up" data-aos-delay="150">
                <h3 class="text-xl font-semibold mb-3 text-green-700">Pendampingan Sampai Selesai</h3>
                <p class="text-gray-600 leading-7">Kami tidak hanya memberikan rekomendasi, tetapi juga dukungan eksekusi dan evaluasi hasil.</p>
            </div>
            <div class="bg-white rounded-3xl p-8 shadow hover-lift" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-xl font-semibold mb-3 text-green-700">Dokumen Siap Pakai</h3>
                <p class="text-gray-600 leading-7">Dokumen AMDAL, UKL-UPL, dan lainnya dirancang langsung untuk proses perizinan dan pelaporan.</p>
            </div>
        </div>
    </div>
</section>

<!-- CONTACT -->
<section class="bg-white">
    <div class="container-custom py-24">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center" data-aos="fade-up">
            Hubungi Kami
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-5 gap-8">

            <!-- Form -->
            <div class="md:col-span-1" data-aos="fade-right">
                <form class="space-y-4">
                    <div>
                        <label class="font-semibold text-gray-700 text-sm block mb-2">Nama</label>
                        <input type="text" placeholder="Nama Anda"
                            class="w-full border border-gray-300 p-3 rounded-lg text-sm focus:outline-none focus:border-green-700">
                    </div>

                    <div>
                        <label class="font-semibold text-gray-700 text-sm block mb-2">Email</label>
                        <input type="email" placeholder="Email Anda"
                            class="w-full border border-gray-300 p-3 rounded-lg text-sm focus:outline-none focus:border-green-700">
                    </div>

                    <div>
                        <label class="font-semibold text-gray-700 text-sm block mb-2">Pesan</label>
                        <textarea placeholder="Pesan..." rows="4"
                            class="w-full border border-gray-300 p-3 rounded-lg text-sm focus:outline-none focus:border-green-700"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-green-700 text-white px-4 py-2 rounded-lg font-semibold btn-shine hover:bg-green-800 transition text-sm">
                        Kirim
                    </button>
                </form>
            </div>

            <!-- Google Maps -->
            <div class="md:col-span-4 rounded-2xl overflow-hidden shadow-lg" data-aos="fade-left">
                <iframe class="w-full h-full" style="min-height: 350px; border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.269662910655!2d106.8227387!3d-6.2297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e5d5d1%3A0x100e44e5b6408ce0!2sJakarta!5e0!3m2!1sid!2sid!4v1234567890">
                </iframe>
            </div>

        </div>
    </div>
</section>

<!-- Modal -->
<div id="popupModal" class="hidden fixed inset-0 z-50 flex items-center justify-center modal-bg px-4">
    <div class="bg-white rounded-3xl p-8 w-full max-w-md relative shadow-2xl">

        <button onclick="closeModal()"
                class="absolute top-4 right-4 w-8 h-8 rounded-full bg-gray-200 hover:bg-red-500 hover:text-white transition">
            ✕
        </button>

        <h3 id="modalTitle" class="text-2xl font-bold text-center mb-4"></h3>
        <p id="modalContent" class="text-gray-600 text-center leading-7"></p>
    </div>
</div>

@endsection