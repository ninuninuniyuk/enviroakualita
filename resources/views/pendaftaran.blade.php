@extends('layouts.app')

@section('title', 'Form Pendaftaran')

@section('content')

<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<style>
    body {
        font-family: Arial, sans-serif;
    }

    .glass {
        background: rgba(255,255,255,0.75);
        backdrop-filter: blur(12px);
    }

    .floating {
        animation: floating 4s ease-in-out infinite;
    }

    @keyframes floating {
        0%,100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }

    .popup-bg {
        background: rgba(0,0,0,0.45);
        backdrop-filter: blur(4px);
    }
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    AOS.init({
        duration: 900,
        once: true
    });
});

function toggleMenu() {
    document.getElementById('mobileMenu').classList.toggle('hidden');
}
</script>

<!-- Navbar -->
<nav class="shadow-sm bg-white sticky top-0 z-50">
    <div class="container-custom py-5">

        <div class="flex items-center justify-between">

            <a href="/"
               class="text-xl md:text-2xl font-bold text-green-700 hover:scale-105 transition duration-300">
                Enviroakualita
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <ul class="flex gap-8 font-medium">
                    <li>
                        <a href="/tentang-kami" class="hover:text-green-700 transition">
                            Tentang Kami
                        </a>
                    </li>
                    <li>
                        <a href="/layanan" class="hover:text-green-700 transition">
                            Layanan
                        </a>
                    </li>
                    <li>
                        <a href="/gallery" class="hover:text-green-700 transition">
                            Media
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Mobile button -->
            <button onclick="toggleMenu()" class="md:hidden text-green-700">
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-8 h-8"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
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
<section class="relative bg-gradient-to-r from-green-800 to-green-600 text-white overflow-hidden">
    <div class="container-custom section-padding grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

        <div data-aos="fade-right">
            <p class="uppercase tracking-[4px] text-green-200 mb-3 font-semibold text-sm md:text-base">
                Registration Form
            </p>

            <h1 class="text-3xl md:text-5xl font-bold leading-tight mb-5">
                Daftar Program
                Lingkungan Sekarang
            </h1>

            <p class="text-green-100 text-base md:text-lg leading-8 max-w-xl">
                Bergabung bersama program pelatihan, konsultasi, dan audit lingkungan
                profesional untuk meningkatkan kualitas bisnis yang berkelanjutan.
            </p>
        </div>

        <div class="floating hidden md:block" data-aos="fade-left">
            <img
                src="https://images.unsplash.com/photo-1497436072909-60f360e1d4b1?q=80&w=1200&auto=format&fit=crop"
                class="rounded-3xl shadow-2xl h-[350px] w-full object-cover"
            >
        </div>
    </div>
</section>

<!-- FORM -->
<section class="bg-gray-100 min-h-screen">
    <div class="container-custom section-padding">

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            <!-- LEFT -->
            <div class="space-y-6" data-aos="fade-right">

                <div class="bg-white rounded-3xl p-8 shadow-lg">
                    <h3 class="text-2xl font-bold text-green-700 mb-4">
                        Kenapa Bergabung?
                    </h3>

                    <ul class="space-y-4 text-gray-600 leading-7">
                        <li>✅ Sertifikat resmi pelatihan</li>
                        <li>✅ Mentor profesional</li>
                        <li>✅ Konsultasi bisnis berkelanjutan</li>
                        <li>✅ Networking partner industri</li>
                    </ul>
                </div>

                <div class="bg-green-700 text-white rounded-3xl p-8 shadow-lg">
                    <h3 class="text-xl font-bold mb-3">Contact Support</h3>
                    <p>Email: support@enviroakualita.com</p>
                    <p>Phone: +62 812 3456 7890</p>
                </div>
            </div>

            <!-- FORM CARD -->
            <div class="lg:col-span-2 glass p-6 md:p-10 rounded-3xl shadow-2xl" data-aos="fade-left">

                <h2 class="text-3xl md:text-4xl font-bold text-center text-green-700 mb-10">
                    Form Pendaftaran
                </h2>

                <form action="/pendaftaran" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="font-semibold">Nama Lengkap</label>
                            <input type="text" name="nama" required
                                   class="w-full mt-2 p-4 rounded-xl border border-gray-300">
                        </div>

                        <div>
                            <label class="font-semibold">Nama Perusahaan</label>
                            <input type="text" name="perusahaan" required
                                   class="w-full mt-2 p-4 rounded-xl border border-gray-300">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="font-semibold">No Handphone</label>
                            <input type="tel" name="hp" required
                                   class="w-full mt-2 p-4 rounded-xl border border-gray-300">
                        </div>

                        <div>
                            <label class="font-semibold">Email</label>
                            <input type="email" name="email" required
                                   class="w-full mt-2 p-4 rounded-xl border border-gray-300">
                        </div>
                    </div>

                    <div>
                        <label class="font-semibold">Kategori Training</label>
                        <select name="kategori" required
                                class="w-full mt-2 p-4 rounded-xl border border-gray-300">
                            <option value="">Pilih Kategori</option>
                            <option>Sustainability</option>
                            <option>Environmental</option>
                            <option>Consulting</option>
                        </select>
                    </div>

                    <div>
                        <label class="font-semibold">Jenis Training</label>
                        <input type="text" name="training" required
                               class="w-full mt-2 p-4 rounded-xl border border-gray-300">
                    </div>

                    <div>
                        <label class="font-semibold">Alamat</label>
                        <textarea name="alamat" rows="4" required
                                  class="w-full mt-2 p-4 rounded-xl border border-gray-300"></textarea>
                    </div>

                    <button type="submit" id="submitBtn"
                            class="w-full bg-green-700 text-white py-4 rounded-xl text-lg hover:bg-green-800 transition flex items-center justify-center gap-3">
                        <span id="btnText">KIRIM PENDAFTARAN</span>

                        <svg id="loadingSpinner"
                             class="hidden animate-spin h-5 w-5 text-white"
                             xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10"
                                    stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                  d="M4 12a8 8 0 018-8v8H4z"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- SUCCESS POPUP -->
<div id="successPopup"
     class="hidden fixed inset-0 flex items-center justify-center z-50 popup-bg px-4">

    <div id="popupContent"
         class="bg-white px-8 md:px-12 py-10 rounded-3xl shadow-2xl text-center opacity-0 scale-95 transition-all duration-500">

        <div class="text-6xl mb-4">🎉</div>

        <h2 class="text-2xl md:text-3xl font-bold text-green-700 mb-3">
            Pendaftaran Berhasil!
        </h2>

        <p class="text-gray-500 mb-8 text-base md:text-lg">
            Data kamu sudah berhasil dikirim.
        </p>

        <button onclick="closePopup()"
                class="bg-green-700 text-white px-8 py-3 rounded-xl hover:scale-105 transition">
            OK
        </button>
    </div>
</div>

<script>
const form = document.querySelector('form');
const submitBtn = document.getElementById('submitBtn');
const btnText = document.getElementById('btnText');
const spinner = document.getElementById('loadingSpinner');
const popup = document.getElementById('successPopup');

form.addEventListener('submit', function(e) {
    e.preventDefault();

    btnText.innerText = "Mengirim...";
    spinner.classList.remove('hidden');
    submitBtn.disabled = true;

    setTimeout(() => {
        spinner.classList.add('hidden');
        btnText.innerText = "KIRIM PENDAFTARAN";
        submitBtn.disabled = false;

        popup.classList.remove('hidden');

        setTimeout(() => {
            const popupContent = document.getElementById('popupContent');
            popupContent.classList.remove('opacity-0', 'scale-95');
            popupContent.classList.add('opacity-100', 'scale-100');
        }, 10);
    }, 1500);
});

function closePopup() {
    const popupContent = document.getElementById('popupContent');

    popupContent.classList.remove('opacity-100', 'scale-100');
    popupContent.classList.add('opacity-0', 'scale-95');

    setTimeout(() => {
        popup.classList.add('hidden');
        form.reset();
    }, 300);
}
</script>

@endsection
