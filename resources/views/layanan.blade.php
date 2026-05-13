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
                    <li><a href="/tentang-kami" class="hover:text-green-700">Tentang Kami</a></li>
                    <li><a href="/layanan" class="hover:text-green-700">Layanan</a></li>
                    <li><a href="/gallery" class="hover:text-green-700">Media</a></li>
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

<!-- Contact -->
<section class="container-custom section-padding" data-aos="fade-up">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

        <div>
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Support</h2>
            <p class="text-gray-600">Lokasi Environesia</p>
        </div>

        <form class="space-y-5">
            <input type="text" placeholder="Nama" class="w-full border border-gray-300 p-4 rounded-lg">
            <input type="email" placeholder="Email" class="w-full border border-gray-300 p-4 rounded-lg">
            <textarea placeholder="Pesan" rows="5" class="w-full border border-gray-300 p-4 rounded-lg"></textarea>

            <button class="bg-green-700 text-white px-6 py-3 rounded-lg hover:scale-105 transition">
                Kirim
            </button>
        </form>
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

<!-- Footer -->
<footer class="bg-green-900 text-white py-8 text-center">
    <p>© 2026 Environesia. All Rights Reserved.</p>
</footer>

@endsection