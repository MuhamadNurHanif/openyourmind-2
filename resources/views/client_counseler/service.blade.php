@extends('layout.app')

@section('title', 'Landing Page - Laravel')

@section('content')
    <section class="flex flex-col md:flex-row items-center w-full max-w-screen bg-transparent p-8 overflow-auto max-w-screen-lg mx-auto">
    <div class="md:w-full">
                <img 
                    src="../public/icon.svg" 
                    alt="Deskripsi Gambar" 
                    class="w-full"
                />
            </div>
        <div class="md:w-1/2 text-justify-center md:text-left">
            <h2 class="text-5xl font-bold text-gray-800 mb-4">Curhat Gratis</h2>
            <p class="text-xl-justify-center text-gray-800 mb-4">
            Layanan curhat gratis adalah tempat bagi siapa pun untuk berbagi cerita, keluh kesah, atau masalah tanpa takut dihakimi, dengan tujuan memberikan dukungan emosional bagi mereka yang membutuhkan seseorang untuk mendengarkan. Layanan ini terbuka untuk siapa saja yang ingin berbicara tentang masalah pribadi, keluarga, pekerjaan, pendidikan, hubungan, atau sekadar melepaskan beban tanpa merasa sendirian. Meskipun bukan pengganti profesional kesehatan mental, layanan ini dapat menjadi langkah awal untuk merasa lebih baik.
            </p>
            <button onclick="togglePopup()" class="px-4 py-2 bg-blue-600 text-white rounded-md">
                Konsultasikan Sekarang
            </button>
        </div>
    </section>

    <section class="items-center w-full max-w-screen bg-white overflow-x-auto">
        <div class="text-center">
                <h2 class="text-5xl font-bold text-gray-800 mb-4">Layanan Kami Lainnya</h2>
        </div>
        <div class="flex gap-6 justify-center px-6 py-4 whitespace-nowrap">
            @foreach($layanan as $index => $layananItem)
                <div class="w-64 bg-transparent p-6 rounded-lg shadow-lg border text-center flex-shrink-0">
                    <img src="{{ $img[$index % count($img)] }}" alt="Layanan" 
                        class="w-40 h-40 object-cover mx-auto rounded-full">
                    <h2 class="text-xl font-semibold text-gray-800 mt-4">
                        {{ $layananItem->jenis_layanan }}
                    </h2>
                </div>
            @endforeach
        </div>
    </section>


<!-- Popup Form -->
<div id="popup" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex justify-center items-center z-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg relative">
        <!-- Tombol Close -->
        <button onclick="togglePopup()" class="absolute top-3 right-3 text-gray-600 hover:text-red-500">
            ✖
        </button>

        <h2 class="text-xl font-semibold text-gray-800 mb-4">Reservasi Layanan</h2>

        <form action="{{ route('client_counseler.store') }}" method="POST">
            @csrf

            <section class="mb-3">
                <label for="nama" class="block font-medium">Nama</label>
                <input type="text" name="nama" id="nama" class="w-full p-2 border rounded-md" required>
            </section>

            <section class="mb-3">
                <label for="email" class="block font-medium">Email</label>
                <input type="email" name="email" id="email" class="w-full p-2 border rounded-md" required>
            </section>

            <section class="mb-3">
                <label for="no_hp" class="block font-medium">No HP</label>
                <input type="text" name="no_hp" id="no_hp" class="w-full p-2 border rounded-md" required>
            </section>

            <section class="mb-3">
                <label for="domisili" class="block font-medium">Domisili</label>
                <input type="text" name="domisili" id="domisili" class="w-full p-2 border rounded-md" required>
            </section>

            <section class="mb-3">
                <label for="keluhan" class="block font-medium">Keluhan</label>
                <textarea name="keluhan" id="keluhan" class="w-full p-2 border rounded-md" rows="4" required></textarea>
            </section>

            <section class="mb-3">
                <label for="jenis_layanan" class="block font-medium">Jenis Layanan</label>
                <select name="jenis_layanan" id="jenis_layanan" class="w-full p-2 border rounded-md" required>
                    <option value="">Pilih Layanan</option>
                    @foreach ($layanan as $item)
                        <option value="{{ $item->id }}">{{ $item->jenis_layanan }}</option>
                    @endforeach
                </select>
            </section>

            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-md">
                Reservasi
            </button>
        </form>
    </div>
</div>

<section id="popupAlert" class="fixed inset-0 bg-black/50 flex justify-center items-center z-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md text-center relative">
        <button onclick="closeAlert()" class="absolute top-3 right-3 text-gray-600 hover:text-red-500">✖</button>
        <h2 class="text-lg font-semibold text-gray-800">Terima Kasih!</h2>
        <p class="text-gray-600 mt-2">
            Terima kasih telah percaya dengan layanan kami. Tim kami akan segera menghubungi Anda dari email dan/atau nomor HP yang telah dimasukkan.
        </p>
        <button onclick="closeAlert()" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-md">
            OK
        </button>
    </div>
</section>

@if(session('success'))
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            showPopup("{{ session('success') }}");
        });
    </script>
@endif

<script>
    function togglePopup() {
        document.getElementById("popup").classList.toggle("hidden");
    }
    function showPopup(message) {
        let popup = document.getElementById("popupAlert");
        let popupMessage = popup.querySelector("p");

        popupMessage.textContent = message;
        popup.classList.remove("hidden"); 
    }

    function closeAlert() {
        document.getElementById("popupAlert").classList.add("hidden");
    }
</script>

@endsection
