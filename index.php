<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>StoreKlin - Beranda</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="bg-black text-white font-sans">
    <header class="fixed w-full bg-black bg-opacity-70 backdrop-blur-md z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="index.php" class="text-2xl font-bold text-white hover:text-blue-400 transition">StoreKlin</a>
            <nav class="hidden md:flex space-x-6 ml-16">
                <a href="index.php" class="text-blue-400 font-semibold">Main</a>
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

    <section class="h-screen flex items-center justify-center bg-cover bg-center relative" style="background-image:url('https://source.unsplash.com/random/1920x1080/?gaming')">
        <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        <div class="relative text-center px-6">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-blue-600">StoreKlin</h1>
            <p class="text-lg text-blue-300 mb-8 max-w-2xl mx-auto">Temukan akun game premium berkualitas tinggi dan keamanan transaksi terjamin</p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="#products" class="px-8 py-3 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-full shadow-lg hover:from-blue-600 hover:to-blue-800 transition">Lihat Produk</a>
                <a href="about.php" class="px-8 py-3 border border-blue-400 text-blue-400 rounded-full hover:bg-blue-400 hover:text-black transition">Tentang Kami</a>
            </div>
        </div>
    </section>

    <section id="products" class="py-16 bg-gradient-to-b from-black to-blue-900/20">
        <div class="max-w-7xl mx-auto px-6 text-center mb-8">
            <h2 class="text-4xl font-bold mb-4 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-blue-600">Produk Unggulan</h2>
            <p class="text-blue-300">Pilihan akun premium terbaik untuk pengalaman gaming maksimal</p>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
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
                <div class="swiper-slide">
                    <div class="relative h-full">
                        <img src="<?= $p['image'] ?>" alt="<?= $p['name'] ?>" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 w-full bg-black bg-opacity-60 p-6">
                            <h3 class="text-xl font-bold text-white mb-2"><?= $p['name'] ?></h3>
                            <div class="flex items-center mb-2">
                                <span class="text-blue-400 mr-1">★</span>
                                <span class="text-sm text-blue-300"><?= $p['rating'] ?> (<?= number_format($p['reviews']) ?> reviews)</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-2xl font-bold text-blue-400">$<?= number_format($p['price'],2) ?></span>
                                <button class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-lg font-medium transition-all text-white">Beli Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section class="relative min-h-[600px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://source.unsplash.com/random/1920x1080/?cyber')] bg-cover bg-center bg-fixed">
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-purple-900/60"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6 parallax-content">
                <h2 class="text-4xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-400">Akun Mewah</h2>
                <p class="text-lg text-blue-100 leading-relaxed">Dapatkan akun yang terjamin aman dan budget di kantong</p>
                <ul class="space-y-4 text-blue-200"><li class="flex items-center gap-3"><span class="w-2 h-2 bg-blue-400 rounded-full"></span>Semua karakter dan skin eksklusif</li><li class="flex items-center gap-3"><span class="w-2 h-2 bg-blue-400 rounded-full"></span>Level maksimal</li><li class="flex items-center gap-3"><span class="w-2 h-2 bg-blue-400 rounded-full"></span>Belanja Terjamin Aman</li></ul>
                <a href="products.php" class="inline-block px-8 py-3 bg-gradient-to-r from-blue-600 to-purple-600 rounded-full hover:scale-105 transition-transform">Produk list</a>
            </div>
            <div class="relative group parallax-content"><div class="absolute inset-0 bg-blue-400/20 blur-3xl rounded-xl"></div><img src="https://awsimages.detik.net.id/community/media/visual/2025/03/26/solo-leveling-season-2-1742969446647.jpeg?w=700&q=90" class="relative rounded-xl transform group-hover:scale-105 transition-transform duration-500 shadow-2xl"></div>
        </div>
    </section>

    <section class="relative min-h-[500px] flex items-center justify-center bg-black py-20">
        <div class="max-w-7xl mx-auto px-6 w-full">
            <div class="scroll-tilt-description bg-gradient-to-br from-black/60 to-blue-900/30 p-8 rounded-2xl border border-blue-400/20 shadow-2xl backdrop-blur-lg">
                <div class="relative z-10">
                    <h2 class="text-4xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-400">Mengapa Memilih Kami?</h2>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="space-y-4 text-blue-200">
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 bg-blue-400/20 rounded-lg flex items-center justify-center">✨</div>
                                <div>
                                    <h3 class="text-xl font-semibold text-blue-300">Transaksi Aman</h3>
                                    <p class="mt-1">Sistem escrow terintegrasi menjamin keamanan transaksi</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 bg-blue-400/20 rounded-lg flex items-center justify-center">🛡️</div>
                                <div>
                                    <h3 class="text-xl font-semibold text-blue-300">Garansi Akun</h3>
                                    <p class="mt-1">Garansi 100% pengembalian jika terdapat masalah</p>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-4 text-blue-200">
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 bg-blue-400/20 rounded-lg flex items-center justify-center">💬</div>
                                <div>
                                    <h3 class="text-xl font-semibold text-blue-300">Support 24/7</h3>
                                    <p class="mt-1">Tim customer service siap membantu kapan saja</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-8 h-8 bg-blue-400/20 rounded-lg flex items-center justify-center">🚀</div>
                                <div>
                                    <h3 class="text-xl font-semibold text-blue-300">Pengiriman Cepat</h3>
                                    <p class="mt-1">Proses pengiriman akun hanya 3 menit setelah pembayaran</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute inset-0 bg-gradient-to-br from-blue-400/10 to-purple-400/10 rounded-2xl"></div>
            </div>
        </div>
    </section>

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

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js">
    </script>
</body>
</html>
