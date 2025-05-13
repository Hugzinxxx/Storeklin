<?php
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404 - Halaman Tidak Ditemukan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-black text-white flex flex-col min-h-screen">
    <header class="fixed w-full bg-black bg-opacity-70 backdrop-blur-md z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="index.php" class="text-2xl font-bold text-white hover:text-blue-400 transition">StoreKlin</a>
            <nav class="hidden md:flex space-x-6 ml-16">
                <a href="index.php" class="text-white hover:text-blue-400 transition">Main</a>
                <a href="products.php" class="text-white hover:text-blue-400 transition">Product</a>
                <a href="scammer.php" class="text-white hover:text-blue-400 transition">Scammer</a>
                <a href="about.php" class="text-white hover:text-blue-400 transition">About</a>
            </nav>
            <div class="flex space-x-4">
                <a href="login.php" class="px-4 py-2 border border-blue-400 text-blue-400 rounded-lg hover:bg-blue-400 hover:text-black transition">Login</a>
                <a href="register.php" class="hidden md:inline px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-lg shadow-lg hover:from-blue-600 hover:to-blue-800 transition">Register</a>
            </div>
        </div>
    </header>

    <main class="flex-grow flex flex-col items-center justify-center text-center px-6 pt-24">
        <div class="max-w-md">
            <h1 class="text-7xl font-extrabold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-blue-600">404</h1>
            <p class="text-xl text-blue-300 mb-6">Maaf, halaman yang Anda cari tidak ditemukan.</p>
            <a href="index.php" class="inline-block px-8 py-3 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-full shadow-lg hover:from-blue-600 hover:to-blue-800 transition">Back to Main</a>
        </div>
    </main>

    <footer class="bg-black bg-opacity-70 backdrop-blur-md py-8">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center text-gray-400">
            <div class="mb-4 md:mb-0 text-center md:text-left">
                <h5 class="font-bold text-white mb-2 text-xl">StoreKlin</h5>
                <p class="text-sm">Platform Jual Beli Akun Premium Terpercaya</p>
            </div>
            <div class="flex space-x-6 mb-4 md:mb-0 text-sm">
                <a href="#" class="hover:text-white transition">Syarat Layanan</a>
                <a href="#" class="hover:text-white transition">Kebijakan Privasi</a>
                <a href="#" class="hover:text-white transition">Kontak Kami</a>
            </div>
            <p class="text-sm text-center md:text-right">&copy; <?= date('Y') ?> StoreKlin. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
