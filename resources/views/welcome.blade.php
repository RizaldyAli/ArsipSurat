<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsip Surat</title>
    <link rel="icon" href="{{ asset('img/logoarsip.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-50 text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-700 shadow-lg">
        <div class="container mx-auto flex justify-between items-center py-3 px-6">
            <a href="#" class="flex items-center space-x-3">
                <img src="{{ asset('img/logoarsip.png') }}" alt="BrandLogo" class="h-20">
                <span class="text-white text-3xl font-bold">Arsip Surat</span>
            </a>
            <div>
                <a href="/login"
                    class="bg-white text-blue-700 font-semibold py-2 px-6 rounded-md hover:bg-blue-100 transition duration-300">Login</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-blue-600 text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl font-bold mb-4">Selamat Datang di Arsip Surat</h1>
            <h2 class="text-xl font-light mb-6">Desa Karangduren, Kecamatan Pakisaji</h2>
            <p class="text-md mb-8">Solusi modern untuk mengelola arsip surat dengan efisien.</p>
            <a href="/login"
                class="bg-white text-blue-700 font-semibold py-3 px-10 rounded-lg shadow-md hover:bg-blue-100 transition duration-300">Mulai
                Sekarang</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20">
        <div class="container mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-10 justify-items-center">
            <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                <div class="mb-6">
                    <img src="img/arsipsurat.png" alt="Feature 2" class="mx-auto w-28 h-24">
                </div>
                <h3 class="text-lg font-semibold text-blue-600 mb-3">Akses Surat dengan Mudah</h3>
                <p class="text-sm">Lihat, cari, dan kelola semua arsip surat yang disimpan dengan sistem kami.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                <div class="mb-6">
                    <img src="img/kategori.png" alt="Feature 3" class="mx-auto w-24 h-24">
                </div>
                <h3 class="text-lg font-semibold text-blue-600 mb-3">Kategorisasi Surat</h3>
                <p class="text-sm">Atur surat ke dalam kategori untuk pengelolaan yang lebih rapi dan terstruktur.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-lg text-center">
                <div class="mb-6">
                    <img src="img/keamanansurat.png" alt="Feature 4" class="mx-auto w-24 h-24">
                </div>
                <h3 class="text-lg font-semibold text-blue-600 mb-3">Keamanan Arsip</h3>
                <p class="text-sm">Pastikan arsip surat tetap aman dan mudah diakses kapan saja.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-800 text-white py-10">
        <div class="container mx-auto px-6 text-center">
            <p class="text-sm">&copy; 2024 Arsip Surat. Desa Karangduren, Kecamatan Pakisaji.</p>
            <div class="mt-4 space-x-6">
                <a href="#" class="text-white hover:text-blue-300">Privacy Policy</a>
                <a href="#" class="text-white hover:text-blue-300">Terms of Service</a>
            </div>
        </div>
    </footer>

</body>

</html>
