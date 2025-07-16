<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Koperasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-white">
    <!-- Navigation -->
    <nav class="bg-red-600 text-white sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
            <div class="flex justify-between items-center">
                <!-- Logo -->
                <a href="/" class="text-3xl font-extrabold tracking-wide hover:text-red-100 transition">
                    E-Koperasi
                </a>

                <!-- Menu Desktop -->
                <div class="hidden md:flex space-x-8 text-lg font-semibold">
                    <a href="/anggota" class="hover:text-red-200 transition duration-200">Anggota</a>
                    <a href="/simpanan" class="hover:text-red-200 transition duration-200">Simpanan</a>
                    <a href="/pinjaman" class="hover:text-red-200 transition duration-200">Pinjaman</a>
                </div>

                <!-- Button Mobile Menu -->
                <button class="md:hidden focus:outline-none">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>





    <!-- Main Content - Boxed Container -->
    <!-- <div class="container mx-auto px-4 py-8 max-w-7xl"> -->
    <!-- Section 1: E-Koperasi Intro (2-column grid) -->
    <div class="bg-red-600 text-white py-12 px-4">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <!-- Text Content -->
                <div class="p-6">
                    <div class="flex flex-wrap items-center gap-4 mb-6">
                        <h1 class="text-3xl md:text-4xl font-bold text-white">E-KOPERASI</h1> <!-- Changed to white text -->
                        <div class="flex flex-wrap gap-2">
                            <span class="bg-white text-red-600 px-3 py-1 rounded-full text-sm font-medium">ANGGOTA</span>
                            <span class="bg-white text-red-600 px-3 py-1 rounded-full text-sm font-medium">SIMPANAN</span>
                            <span class="bg-white text-red-600 px-3 py-1 rounded-full text-sm font-medium">PINJAMAN</span>
                        </div>
                    </div>

                    <h2 class="text-2xl md:text-3xl font-semibold mb-4 text-white">Solusi Digital untuk Koperasi Merah Putih</h2> <!-- White text -->
                    <p class="text-red-100 text-lg mb-8"> <!-- Lighter red for paragraph -->
                        Mudahkan pengelolaan keuangan dan transaksi retail koperasi Anda dengan sistem yang cepat, akurat, dan aman.
                    </p>
                    <button class="bg-white hover:bg-gray-100 text-red-600 font-bold py-3 px-8 rounded-full shadow-lg transition duration-200">
                        MULAI GRATIS SEKARANG
                    </button>
                </div>

                <!-- Image -->
                <div class="hidden md:block">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                        alt="Tim Koperasi Digital"
                        class="w-full h-auto rounded-lg shadow-xl border-4 border-white">
                </div>
            </div>
        </div>
    </div>

    </div>

    <!-- container 2 -->
    <!-- <div class="container mx-auto px-4 py-8 max-w-7xl"> -->
    <!-- Section 2: Apa itu E-Koperasi (2-column grid) -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-red-50 rounded-xl p-6 mb-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Gambar sekarang di kiri -->
                <div class="flex items-center justify-center">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                        alt=" Team meeting with laptop"
                        class="w-full h-auto rounded-lg shadow-md">
                </div>

                <!-- Teks sekarang di kanan -->
                <div class="p-4">
                    <h1 class="text-2xl font-bold text-red-600 mb-4">Apa Itu e-Koperasi?</h1>
                    <div class="bg-white p-4 rounded mb-4 shadow-sm">
                        <p class="font-medium text-gray-700">
                            Penjelasan singkat: e-Koperasi adalah aplikasi koperasi modern yang mengintegrasikan modul keuangan dan retail dalam satu platform mudah digunakan.
                            Didesain khusus untuk mendukung koperasi Merah Putih agar lebih profesional dan transparan.
                        </p>
                    </div>
                    <p class="text-gray-600">
                        Mudahkan pengelolaan keuangan dan transaksi retail koperasi Anda dengan sistem yang cepat, akurat, dan aman.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- </div> -->

    <!-- container 3 --->
    <!-- <div class="container mx-auto px-4 py-8 max-w-7xl"> -->
    <!-- Section 3: Features -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-12"> <!-- Container with max-width and horizontal padding -->
        <!-- Judul Section -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-red-600">Kendalikan Keuangan Koperasi dengan Mudah</h1>
            <p class="text-gray-600">
                Pantau dan kelola arus kas, simpan pinjam, serta transaksi anggota secara praktis dalam satu sistem terintegrasi.
            </p>
            <p class="text-gray-600">
                Membuat laporan keuangan jadi lebih cepat, akurat, dan transparan.
            </p>
        </div>

        <!-- Grid Fitur -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Fitur 1 -->
            <div class="p-6 text-center hover:bg-red-50 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-40 mx-auto mb-4 overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1543286386-713bdd548da4?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Pencatatan Jurnal"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-red-600 mb-2 text-lg">Pencatatan Jurnal</h3>
                <p class="text-gray-600">Sistem pencatatan keuangan lengkap untuk semua transaksi</p>
            </div>

            <!-- Fitur 2 -->
            <div class="p-6 text-center hover:bg-red-50 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-40 mx-auto mb-4 overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Laporan Keuangan"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-red-600 mb-2 text-lg">Laporan Keuangan</h3>
                <p class="text-gray-600">Neraca, laba rugi, arus kas, dan laporan lainnya</p>
            </div>

            <!-- Fitur 3 -->
            <div class="p-6 text-center hover:bg-red-50 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-40 mx-auto mb-4 overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1604594849809-dfedbc827105?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Simpanan Pinjaman"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-red-600 mb-2 text-lg">Simpanan & Pinjaman</h3>
                <p class="text-gray-600">Manajemen lengkap simpanan dan pinjaman anggota</p>
            </div>

            <!-- Fitur 4 -->
            <div class="p-6 text-center hover:bg-red-50 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-40 mx-auto mb-4 overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1526947425960-945c6e72858f?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Ekspor Laporan"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-red-600 mb-2 text-lg">Ekspor Laporan</h3>
                <p class="text-gray-600">Download laporan dalam format PDF dan Excel</p>
            </div>
        </div>
    </div>
    <!-- </div> -->

    <!-- container 4 -->
    <!-- <div class="container mx-auto px-4 py-8 max-w-7xl"> -->
    <!-- Section 4: Retail Features -->
    <div class="max-w-6xl mx-auto px-4 mb-12">
        <!-- Judul Section -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-red-600">Transaksi Retail Tanpa Ribet</h1>
            <p class="text-gray-600">
                Retail adalah kegiatan penjualan barang secara langsung ke konsumen akhir.
            </p>
            <p class="text-gray-600">
                Cocok untuk usaha toko, minimarket, warung, atau gerai penjualan lainnya yang melayani transaksi harian.
            </p>
        </div>

        <!-- Grid Fitur -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <!-- Fitur 1 -->
            <div class="p-6 text-center hover:bg-red-50 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-40 mx-auto mb-4 overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Sistem kasir"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-red-600 mb-2 text-lg">Sistem kasir (POS)</h3>
                <p class="text-gray-600">
                    Mempermudah proses transaksi dengan tampilan kasir yang sederhana dan cetak struk otomatis.
                </p>
            </div>

            <!-- Fitur 2 -->
            <div class="p-6 text-center hover:bg-red-50 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-40 mx-auto mb-4 overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1486401899868-0e435ed85128?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Manajemen stok"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-red-600 mb-2 text-lg">Manajemen stok</h3>
                <p class="text-gray-600">
                    Mengelola ketersediaan barang dengan akurat, termasuk pencatatan barang masuk dan keluar.
                </p>
            </div>

            <!-- Fitur 3 -->
            <div class="p-6 text-center hover:bg-red-50 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-40 mx-auto mb-4 overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Promo dan diskon"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-red-600 mb-2 text-lg">Promo dan diskon</h3>
                <p class="text-gray-600">
                    Mudah mengatur harga produk, membuat promo musiman, atau memberi diskon untuk menarik pelanggan.
                </p>
            </div>

            <!-- Fitur 4 -->
            <div class="p-6 text-center hover:bg-red-50 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-40 mx-auto mb-4 overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Laporan penjualan"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-red-600 mb-2 text-lg">Laporan penjualan</h3>
                <p class="text-gray-600">
                    Menyediakan data penjualan secara lengkap untuk membantu analisis dan pengambilan keputusan.
                </p>
            </div>
        </div>
    </div>

    <!-- </div> -->

    <!-- container 5 -->
    <!-- <div class="container mx-auto px-4 py-8 max-w-7xl"> -->
    <!-- Why Choose Section -->
    <div class="bg-red-700 text-white">
        <div class="relative mb-12">
            <div class="max-w-6xl mx-auto relative px-4">
                <div class="absolute inset-0 bg-red-50 -z-10 rounded-xl"></div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-red p-6 rounded-xl shadow-lg relative">
                    <div class="flex items-center justify-center">
                        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=800&q=8"
                            alt="Koperasi Digital"
                            class="w-full h-auto rounded-lg border-4 border-white shadow-md">
                    </div>
                    <div class="p-4">
                        <h1 class="text-2xl font-bold text-white-600 mb-4">Mengapa e-Koperasi Pilihan Terbaik?</h1>
                        <div class="bg-red-100 bg-opacity-30 p-4 rounded-lg mb-4">
                            <ul class="space-y-2">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>User-friendly, cocok untuk semua kalangan</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Data tersimpan aman di cloud</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Akses kapan saja dari perangkat apapun</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-blue-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span>Mempercepat proses pelaporan dan pengambilan keputusan</span>
                                </li>
                            </ul>
                        </div>
                        <p class="text-white-600">
                            Sistem yang cepat, akurat, dan aman untuk pengelolaan koperasi Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-6xl mx-auto px-4 mb-12">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-white-600">Cara Menggunakan e-Koperasi</h1>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
            <!-- Step 1 -->
            <div class="p-6 text-center hover:bg-red-50 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-40 mx-auto mb-4 overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Daftar dan Buat Profile"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-white-600 mb-2 text-lg">Daftar dan Buat Profile</h3>
                <p class="text-gray-600">
                    Buat akun dan lengkapi data koperasi Merah Putih Anda.
                </p>
            </div>

            <!-- Step 2 -->
            <div class="p-6 text-center hover:bg-red-55 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-40 mx-auto mb-4 overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=80"
                        alt="Input data anggota"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-white-600 mb-2 text-lg">Input data anggota</h3>
                <p class="text-gray-600">
                    Masukkan informasi anggota beserta modal dasar koperasi.
                </p>
            </div>

            <!-- Step 3 -->
            <div class="p-6 text-center hover:bg-red-50 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-40 mx-auto mb-4 overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Pilih modul"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-white-600 mb-2 text-lg">Pilih modul</h3>
                <p class="text-gray-600">
                    Aktifkan modul sesuai kebutuhan koperasi—untuk simpan pinjam, penjualan, atau keduanya.
                </p>
            </div>

            <!-- Step 4 -->
            <div class="p-6 text-center hover:bg-red-50 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-40 mx-auto mb-4 overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f"
                        alt="Catat transaksi"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-white-600 mb-2 text-lg">Catat transaksi</h3>
                <p class="text-gray-600">
                    Mulai mencatat transaksi harian, sambil memantau laporan keuangan secara real-time.
                </p>
            </div>

            <!-- Step 5 -->
            <div class="p-6 text-center hover:bg-red-50 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-40 mx-auto mb-4 overflow-hidden rounded-lg">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Gunakan setiap hari"
                        class="w-full h-full object-cover">
                </div>
                <h3 class="font-bold text-white-600 mb-2 text-lg">Gunakan setiap hari</h3>
                <p class="text-gray-600">
                    Nikmati kemudahan operasional koperasi yang lebih rapi, cepat, dan efisien.
                </p>
            </div>
        </div>
    </div>
    <!-- </div> -->

    <!-- </div> -->

    <!--- container 7 -->
    <!-- <div class="container mx-auto px-4 py-8 max-w-7xl"> -->
    <!-- Testimonials Section -->
    <div class="py-12 bg-gray-50 rounded-xl mb-12">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-red-600 mb-4">Apa Kata Pengguna Kami?</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                Dengarkan pengalaman langsung dari pelanggan yang telah menggunakan solusi retail kami
            </p>
        </div>

        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Testimoni 1 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="User" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold">Sarah Wijaya</h4>
                            <p class="text-gray-500 text-sm">Pemilik Warung Sarah</p>
                        </div>
                    </div>
                    <div class="text-yellow-400 mb-3">
                        ★ ★ ★ ★ ★
                    </div>
                    <p class="text-gray-700 italic text-sm">
                        "Sistem kasirnya sangat mudah digunakan, bahkan karyawan saya yang gaptek bisa mengoperasikannya. Stok barang otomatis terupdate setelah transaksi!"
                    </p>
                </div>

                <!-- Testimoni 2 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="User" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold">Budi Santoso</h4>
                            <p class="text-gray-500 text-sm">Pemilik Minimarket 24</p>
                        </div>
                    </div>
                    <div class="text-yellow-400 mb-3">
                        ★ ★ ★ ★ ★
                    </div>
                    <p class="text-gray-700 italic text-sm">
                        "Laporan penjualan sangat detail membantu saya analisa produk paling laris. Sekarang bisa buat promo lebih tepat sasaran!"
                    </p>
                </div>

                <!-- Testimoni 3 -->
                <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden mr-4">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-bold">Dewi Lestari</h4>
                            <p class="text-gray-500 text-sm">Pemilik Toko Kelontong</p>
                        </div>
                    </div>
                    <div class="text-yellow-400 mb-3">
                        ★ ★ ★ ★ ☆
                    </div>
                    <p class="text-gray-700 italic text-sm">
                        "Aplikasinya ringan tapi powerful. Laporan penjualan sangat detail membantu saya analisa produk paling laris. Sekarang bisa buat promo lebih tepat sasaran!"
                    </p>
                </div>
            </div>

            <div class="text-center mt-8">
                <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-6 rounded-full transition duration-300 text-sm">
                    Lihat Lebih Banyak Testimoni
                </button>
            </div>
        </div>
    </div>

    <!-- </div> -->

    <!-- container 8 -->
    <!-- <div class="container mx-auto px-4 py-8 max-w-7xl"> -->
    <!-- Pricing Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-12">
            <!-- Section Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-red-600">
                    Pilih Paket Sesuai Kebutuhan Koperasi Anda
                </h1>
                <p class="text-gray-600 mt-2 max-w-2xl mx-auto">
                    Temukan solusi tepat untuk mengelola koperasi Anda dengan paket yang sesuai
                </p>
            </div>

            <!-- Pricing Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Paket Basic -->
                <div
                    class="bg-gradient-to-b from-purple-50 to-white rounded-xl shadow-md overflow-hidden border border-purple-200 transform hover:scale-[1.02] transition duration-300 flex flex-col justify-between h-full">
                    <div class="px-6 py-5">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-purple-800">Basic</h3>
                            <div class="mt-3">
                                <span class="text-3xl font-extrabold text-purple-600">Rp 50.000</span>
                                <span class="text-gray-500 text-sm">/bulan</span>
                            </div>
                        </div>
                        <div class="mt-6">
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-purple-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700">Modul Keuangan</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-purple-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700">Manajemen Anggota</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-purple-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700">Laporan Dasar</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-purple-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700">Support Email</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bg-purple-50 px-6 py-4 border-t border-purple-100 mt-auto">
                        <button class="w-full bg-purple-600 hover:bg-purple-700 text-white font-medium py-3 px-4 rounded-lg transition duration-300 shadow-md hover:shadow-lg">
                            Mulai Paket Basic
                        </button>
                    </div>
                </div>

                <!-- Paket Plus -->
                <div
                    class="bg-gradient-to-b from-blue-50 to-white rounded-xl shadow-lg overflow-hidden border-2 border-blue-300 transform hover:scale-[1.02] transition duration-300 relative flex flex-col justify-between h-full">
                    <div class="absolute top-0 right-0 bg-blue-600 text-white text-xs font-bold px-3 py-1 transform translate-x-2 -translate-y-2 rotate-6 shadow-md">
                        POPULER
                    </div>
                    <div class="px-6 py-5">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-blue-800">Plus</h3>
                            <div class="mt-3">
                                <span class="text-3xl font-extrabold text-blue-600">Rp 95.000</span>
                                <span class="text-gray-500 text-sm">/bulan</span>
                            </div>
                        </div>
                        <div class="mt-6">
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-blue-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700">Semua Fitur Basic</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-blue-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700">Modul Retail</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-blue-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700">Manajemen Stok</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-blue-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700">Laporan Lengkap</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-blue-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700">Support Chat</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bg-blue-50 px-6 py-4 border-t border-blue-100 mt-auto">
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-300 shadow-md hover:shadow-lg">
                            Mulai Paket Plus
                        </button>
                    </div>
                </div>

                <!-- Paket Premium -->
                <div
                    class="bg-gradient-to-b from-green-50 to-white rounded-xl shadow-md overflow-hidden border border-green-200 transform hover:scale-[1.02] transition duration-300 flex flex-col justify-between h-full">
                    <div class="px-6 py-5">
                        <div class="text-center">
                            <h3 class="text-xl font-bold text-green-800">Premium</h3>
                            <div class="mt-3">
                                <span class="text-2xl font-extrabold text-green-600">Custom</span>
                                <span class="text-gray-500 text-sm block">Solusi khusus untuk kebutuhan Anda</span>
                            </div>
                        </div>
                        <div class="mt-6">
                            <ul class="space-y-3">
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-green-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700">Semua Fitur Plus</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-green-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700">Support Prioritas 24/7</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-green-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700">Solusi Kustom</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-green-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700">Integrasi Sistem</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="h-5 w-5 text-green-500 mt-0.5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                    <span class="text-gray-700">Pelatihan Khusus</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bg-green-50 px-6 py-4 border-t border-green-100 mt-auto">
                        <button class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-3 px-4 rounded-lg transition duration-300 shadow-md hover:shadow-lg">
                            Hubungi Tim Kami
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- </div> -->

    <!-- FAQ Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-red-600">Ada Pertanyaan? Kami Siap Membantu!</h1>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
            <!-- FAQ 1 -->
            <div class="p-4 text-center hover:bg-red-50 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-32 mx-auto mb-3 overflow-hidden rounded-lg">
                    <img
                        src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Keamanan Data"
                        class="w-full h-full object-cover" />
                </div>
                <h3 class="font-bold text-red-600 mb-2">Apakah data aman?</h3>
                <p class="text-gray-600 text-sm">
                    Ya, data Anda disimpan dengan sistem keamanan berlapis dan terenkripsi.
                </p>
            </div>

            <!-- FAQ 2 -->
            <div class="p-4 text-center hover:bg-red-50 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-32 mx-auto mb-3 overflow-hidden rounded-lg">
                    <img
                        src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Trial Gratis"
                        class="w-full h-full object-cover" />
                </div>
                <h3 class="font-bold text-red-600 mb-2">Apakah ada trial gratis?</h3>
                <p class="text-gray-600 text-sm">
                    Tersedia uji coba gratis agar Anda bisa mencoba fitur sebelum berlangganan.
                </p>
            </div>

            <!-- FAQ 3 -->
            <div class="p-4 text-center hover:bg-red-50 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-32 mx-auto mb-3 overflow-hidden rounded-lg">
                    <img
                        src="https://images.unsplash.com/photo-1579621970795-87facc2f976d?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Koperasi Kecil"
                        class="w-full h-full object-cover" />
                </div>
                <h3 class="font-bold text-red-600 mb-2">Apakah bisa dipakai koperasi kecil?</h3>
                <p class="text-gray-600 text-sm">
                    Tentu! Sistem kami dirancang fleksibel, cocok untuk koperasi besar maupun kecil.
                </p>
            </div>

            <!-- FAQ 4 -->
            <div class="p-4 text-center hover:bg-red-50 transition duration-200 rounded-lg border border-gray-100">
                <div class="w-full h-32 mx-auto mb-3 overflow-hidden rounded-lg">
                    <img
                        src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                        alt="Metode Pembayaran"
                        class="w-full h-full object-cover" />
                </div>
                <h3 class="font-bold text-red-600 mb-2">Apa saja metode pembayaran?</h3>
                <p class="text-gray-600 text-sm">
                    Kami mendukung transfer bank, e-wallet, dan metode pembayaran digital lainnya.
                </p>
            </div>
        </div>
    </div>


    <!-- Modules Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-red-600">Modul Aplikasi e-Koperasi</h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Kolom 1 -->
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-3">Modul Utama e-Koperasi</h2>
                <ul class="space-y-3 mb-6">
                    <li class="flex items-start">
                        <svg
                            class="h-5 w-5 text-green-500 mr-2 mt-1"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-700">
                            <strong>Inti Koperasi</strong> - Sistem pusat untuk mengelola data anggota, transaksi
                            keuangan, dan administrasi koperasi secara terintegrasi.
                        </span>
                    </li>
                    <li class="flex items-start">
                        <svg
                            class="h-5 w-5 text-green-500 mr-2 mt-1"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-700">
                            <strong>Manajemen Keuangan</strong> - Modul pencatatan keuangan lengkap sesuai standar
                            akuntansi koperasi dengan laporan transparan dan akurat.
                        </span>
                    </li>
                    <li class="flex items-start">
                        <svg
                            class="h-5 w-5 text-green-500 mr-2 mt-1"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-700">
                            <strong>Simpanan & Pinjaman</strong> - Pengelolaan simpanan anggota dan pinjaman dengan
                            fitur pembayaran online dan monitoring real-time.
                        </span>
                    </li>
                    <li class="flex items-start">
                        <svg
                            class="h-5 w-5 text-green-500 mr-2 mt-1"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-700">
                            <strong>Sistem Kasir (POS)</strong> - Solusi Point of Sale untuk transaksi retail koperasi,
                            termasuk pencetakan struk dan kontrol stok.
                        </span>
                    </li>
                </ul>

                <h2 class="text-xl font-semibold text-gray-800 mb-3">Modul Pendukung Bisnis Koperasi</h2>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg
                            class="h-5 w-5 text-green-500 mr-2 mt-1"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-700">
                            <strong>Apotek</strong> - Sistem apotek yang dapat disesuaikan untuk mencatat penjualan
                            obat dan kelola stok sesuai kebutuhan koperasi.
                        </span>
                    </li>
                    <li class="flex items-start">
                        <svg
                            class="h-5 w-5 text-green-500 mr-2 mt-1"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-700">
                            <strong>Marketplace</strong> - Platform penjualan produk koperasi secara online yang
                            terintegrasi antar anggota koperasi.
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Kolom 2 -->
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-3">Solusi Lengkap untuk Koperasi Merah Putih</h2>
                <p class="text-gray-700 mb-6">
                    Kami menyediakan rangkaian modul software lengkap untuk mengelola berbagai unit usaha koperasi
                    dengan mudah, efisien, dan transparan. Setiap modul dirancang khusus agar sesuai kebutuhan
                    koperasi masa kini.
                </p>

                <h2 class="text-xl font-semibold text-gray-800 mb-3">Modul Pendukung Operasional & Administrasi</h2>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <svg
                            class="h-5 w-5 text-green-500 mr-2 mt-1"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-700">
                            <strong>E-Commerce</strong> - Fitur toko online khusus untuk menjual produk koperasi
                            dengan sistem pembayaran mudah dan aman.
                        </span>
                    </li>
                    <li class="flex items-start">
                        <svg
                            class="h-5 w-5 text-green-500 mr-2 mt-1"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-700">
                            <strong>Inventory</strong> - Manajemen inventaris barang koperasi dengan sistem pengelolaan
                            stok dan pencatatan gudang berbasis aplikasi mobile.
                        </span>
                    </li>
                    <li class="flex items-start">
                        <svg
                            class="h-5 w-5 text-green-500 mr-2 mt-1"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-700">
                            <strong>Laporan Manajemen</strong> - Sistem pelaporan lengkap untuk membantu pengambilan
                            keputusan strategis pengurus koperasi.
                        </span>
                    </li>
                    <li class="flex items-start">
                        <svg
                            class="h-5 w-5 text-green-500 mr-2 mt-1"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M5 13l4 4L19 7" />
                        </svg>
                        <span class="text-gray-700">
                            <strong>Mobile App</strong> - Aplikasi mobile untuk anggota mengakses informasi simpanan,
                            pinjaman, dan transaksi koperasi.
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- Final CTA Section -->
    <div class="bg-white py-8 px-6 rounded-xl shadow-md border border-gray-200 mb-12">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 mb-4">
                Siap Digitalisasi Koperasi Merah Putih Anda?
            </h2>
            <div class="mt-6">
                <a href="#" class="inline-block bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-8 rounded-lg shadow-md transition duration-300">
                    Daftar Sekarang & Nikmati Gratis 14 Hari
                </a>
            </div>
            <div class="mt-8 flex flex-wrap justify-center gap-4 sm:gap-6 text-sm sm:text-base text-gray-600">
                <div class="flex items-center">
                    <svg class="h-5 w-5 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>support@e-koperasi.id</span>
                </div>
                <div class="flex items-center">
                    <svg class="h-5 w-5 mr-2 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span>021-12345678</span>
                </div>
                <div class="flex items-center">
                    <svg class="h-5 w-5 mr-2 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                    </svg>
                    <span>@e_koperasi</span>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> End of Boxed Container -->

    <!-- Full-width Footer -->
    <footer class="bg-red-600 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p class="font-bold text-lg mb-2">© 2025 E-Koperasi - Sistem Manajemen Koperasi</p>
            <p class="text-red-100 text-sm">Solusi digital untuk koperasi modern</p>
        </div>
    </footer>
</body>

</html>