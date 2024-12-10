<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Link CDN Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <a href="{{ route('landing') }}" class="text-xl font-bold text-gray-800">CULINARY DELIGHTS</a>
                
                <div class="flex space-x-4">
                    <a href="{{ route('landing') }}" class="text-gray-800 hover:text-gray-600">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-800 hover:text-gray-600">About</a>
                    <a href="{{ route('produk') }}" class="text-gray-800 hover:text-gray-600">Product</a>
                    <a href="#" class="text-gray-800 hover:text-gray-600">Contact</a>
                </div>
            </div>
        </div>
    </nav>

     <!-- Hero Section -->
     <header class="bg-cover bg-center h-screen" style="background-image: url('https://i.pinimg.com/736x/08/54/74/0854741069c1269ccb255642b731a826.jpg');">
        <div class="bg-blue-600 bg-opacity-80 h-full flex items-center justify-center">
            <div class="text-center text-white px-6">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Selamat Datang di Culinary Delights!</h1>
                <p class="text-xl md:text-2xl mb-6">Temukan Surga Cita Rasa di Setiap Gigitan</p>
                <a href="{{ route('produk') }}" class="bg-white hover:bg-gray-200 text-blue-600 px-6 py-3 rounded-lg text-lg font-semibold">Jelajahi Menu</a>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section class="container mx-auto px-6 py-16">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Kenapa Memilih Culinary Delights?</h2>
            <p class="text-gray-600">Culinary Delights hadir untuk memanjakan lidah Anda dengan beragam pilihan makanan manis dan gurih yang dibuat dari bahan-bahan berkualitas tinggi.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Produk Premium</h3>
                <p class="text-gray-600">Setiap hidangan dibuat dengan bahan terbaik dan resep istimewa.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Beragam Pilihan</h3>
                <p class="text-gray-600">Nikmati kelezatan berbagai rasa, dari manis yang menggoda hingga gurih yang bikin nagih.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Pengiriman Cepat</h3>
                <p class="text-gray-600">Kami pastikan makanan sampai di tangan Anda dalam kondisi segar.</p>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                <h3 class="text-xl font-bold text-gray-800 mb-4">Pesan Mudah</h3>
                <p class="text-gray-600">Belanja online tanpa ribet, kapan saja dan di mana saja.</p>
            </div>
        </div>
    </section>

    <!-- Favorites Section -->
    <section class="bg-gray-50 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">Favorit Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach ($packages as $key=>$item )
                <!-- Product 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ $item->feature_img }}" alt="#" class="w-full h-48 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">{{ $item->package_code }}</h3>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">{{ $item->package_name }}</h3>
                        <p class="text-gray-600">{{ $item->package_desc }}</p>
                    </div>
                </div>
                <!-- Product 2 -->
                {{-- <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x200" alt="#" class="w-full h-48 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">{{ $item->package_code }}</h3>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">{{ $item->package_name }}</h3>
                        <p class="text-gray-600">{{ $item->package_desc }}</p>
                    </div>
                </div> --}}
                <!-- Product 3 -->
                {{-- <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/300x200" alt="" class="w-full h-48 object-cover">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">{{ $item->package_code }}</h3>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">{{ $item->package_name }}</h3>
                        <p class="text-gray-600">{{ $item->package_desc }}</p>
                    </div>
                </div> --}}
                @endforeach
            </div>
        </div>
    </section>

    <!-- How to Order Section -->
    <section class="container mx-auto px-6 py-16">
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-12">Cara Pesan</h2>
        <ol class="list-decimal pl-6 space-y-4 text-gray-600 text-lg">
            <li>Jelajahi menu kami dan pilih produk favorit Anda.</li>
            <li>Tambahkan ke keranjang belanja.</li>
            <li>Checkout dan pilih metode pembayaran yang nyaman.</li>
            <li>Tunggu makanan lezat Anda tiba!</li>
        </ol>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2020 Culinary Delights. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
