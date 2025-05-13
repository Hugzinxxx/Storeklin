<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>StoreKlin - Produk</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-black text-white font-sans">
    <header class="fixed w-full bg-black bg-opacity-70 backdrop-blur-md z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="index.php" class="text-2xl font-bold text-white hover:text-blue-400 transition">StoreKlin</a>
            <nav class="hidden md:flex space-x-6 ml-16">
                <a href="index.php" class="text-white hover:text-blue-400 transition">Main</a>
                <a href="products.php" class="text-blue-400 font-semibold">Product</a>
                <a href="scammer.php" class="text-white hover:text-blue-400 transition">Scammer</a>
                <a href="about.php" class="text-white hover:text-blue-400 transition">About</a>
            </nav>
            <div class="flex space-x-4">
                <a href="login.php" class="px-4 py-2 border border-blue-400 text-blue-400 rounded-lg hover:bg-blue-400 hover:text-black transition">Login</a>
                <a href="register.php" class="hidden md:inline px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-lg shadow-lg hover:from-blue-600 hover:to-blue-800 transition">Register</a>
            </div>
        </div>
    </header>

    <div id="tooltip"></div>

    <section class="pt-24 pb-16 bg-gradient-to-b from-black to-blue-900/20 min-h-screen">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-blue-600 text-center">Daftar Produk</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $products = [
                    ['name'=>'Premium Account 1','price'=>49.99,'rating'=>4.9,'reviews'=>1200,'image'=>'https://thumb.viva.id/vivabanyuwangi/665x374/2025/03/21/67dd1293ac3a8-solo-leveling-salah-satu-anime-terpopuler-saat-ini_banyuwangi.jpg','description'=>'Akun lengkap dengan skin eksklusif dan level maksimum. Siap digunakan!','thumb'=>'https://source.unsplash.com/random/100x75?game,1'],
                    ['name'=>'Premium Account 2','price'=>39.99,'rating'=>4.8,'reviews'=>980,'image'=>'https://thumb.viva.id/vivabanyuwangi/665x374/2025/03/21/67dd1293ac3a8-solo-leveling-salah-satu-anime-terpopuler-saat-ini_banyuwangi.jpg','description'=>'Termasuk item langka dan bonus mata uang dalam game. Cocok untuk pemula.','thumb'=>'https://source.unsplash.com/random/100x75?game,2'],
                    ['name'=>'Premium Account 3','price'=>59.99,'rating'=>5.0,'reviews'=>1500,'image'=>'https://thumb.viva.id/vivabanyuwangi/665x374/2025/03/21/67dd1293ac3a8-solo-leveling-salah-satu-anime-terpopuler-saat-ini_banyuwangi.jpg','description'=>'Akun tier tertinggi dengan semua karakter dan skin. Performa terbaik.','thumb'=>'https://source.unsplash.com/random/100x75?game,3'],
                    ['name'=>'Premium Account 4','price'=>29.99,'rating'=>4.7,'reviews'=>860,'image'=>'https://thumb.viva.id/vivabanyuwangi/665x374/2025/03/21/67dd1293ac3a8-solo-leveling-salah-satu-anime-terpopuler-saat-ini_banyuwangi.jpg','description'=>'Harga terjangkau, namun tetap dilengkapi garansi keamanan transaksi.','thumb'=>'https://source.unsplash.com/random/100x75?game,4'],
                    ['name'=>'Premium Account 5','price'=>69.99,'rating'=>4.95,'reviews'=>1320,'image'=>'https://thumb.viva.id/vivabanyuwangi/665x374/2025/03/21/67dd1293ac3a8-solo-leveling-salah-satu-anime-terpopuler-saat-ini_banyuwangi.jpg','description'=>'Bundel spesial dengan sejumlah item premium dan dukungan 24/7.','thumb'=>'https://source.unsplash.com/random/100x75?game,5'],
                    ['name'=>'Premium Account 6','price'=>54.99,'rating'=>4.85,'reviews'=>1100,'image'=>'https://thumb.viva.id/vivabanyuwangi/665x374/2025/03/21/67dd1293ac3a8-solo-leveling-salah-satu-anime-terpopuler-saat-ini_banyuwangi.jpg','description'=>'Akun dengan level tinggi dan skin edisi terbatas. Pembayaran cepat, pengiriman 3 menit.','thumb'=>'https://source.unsplash.com/random/100x75?game,6'],
                ];
                foreach($products as $p): ?>
                    <div class="product-card p-4" data-name="<?= $p['name'] ?>" data-desc="<?= $p['description'] ?>" data-thumb="<?= $p['thumb'] ?>">
                        <img src="<?= $p['image'] ?>" alt="<?= $p['name'] ?>" class="w-full h-48 object-cover rounded-lg">
                        <div class="mt-4">
                            <h3 class="text-xl font-bold text-white mb-2"><?= $p['name'] ?></h3>
                            <div class="flex items-center mb-2">
                                <span class="text-blue-400 mr-1">★</span>
                                <span class="text-sm text-blue-300"><?= $p['rating'] ?> (<?= number_format($p['reviews']) ?>)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-400">$<?= number_format($p['price'], 2) ?></span>
                                <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-lg font-medium transition-all text-white">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <footer class="bg-black bg-opacity-70 backdrop-blur-md py-8 mt-auto">
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