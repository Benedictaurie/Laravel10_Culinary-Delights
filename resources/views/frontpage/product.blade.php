<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
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
                    <a href="{{ route('produk') }}" class="text-gray-800 hover:text-gray-600">Products</a>
                    <a href="#" class="text-gray-800 hover:text-gray-600">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    @foreach ($packages as $key=>$item )
    <!-- Product Section -->
    <section class="container mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Product Image -->
            <div>
                <img src="{{ asset($item->feature_img) }}" alt="#" width="600" height="600" class="rounded-lg shadow-lg w-full">
            </div>
            <!-- Product Details -->
            <div>
                <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $item->package_name }}</h1>
                <p class="text-xl font-semibold text-blue-600 mb-4">Rp.{{ $item->price }}</p>
                {{-- <div class="flex items-center space-x-4 mb-6">
                    <label for="quantity" class="text-gray-700">Quantity:</label>
                    <input type="number" id="quantity" min="1" value="1" class="w-16 border border-gray-300 rounded px-3 py-2 text-center">
                </div> --}}
                <div>
                    <a href="{{ route('detail') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-500">
                        <button >
                            View Details
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    <!-- Related Products -->
    {{-- <section class="container mx-auto px-6 py-16">
        <div class="text-center mb-12">
            <h2 class="text-2xl font-bold text-gray-800">Related Products</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8"> --}}
            <!-- Related Product 1 -->
            {{-- <div class="bg-white rounded-lg shadow p-4">
                <img src="#" alt="#" width="300" height="300" class="rounded-lg mb-4 w-full">
                <h3 class="text-xl font-semibold text-gray-800">{{ $item->package_name }}</h3>
                <p class="text-gray-600">Rp.12.000</p>
                <button class="bg-blue-600 text-white mt-4 px-4 py-2 rounded hover:bg-blue-500 w-full">
                    <a href="{{ route('detail') }}">
                        View Details 
                    </a>
                </button>
            </div> --}}
            <!-- Related Product 2 -->
            {{-- <div class="bg-white rounded-lg shadow p-4">
                <img src="#" alt="#" width="300" height="300" class="rounded-lg mb-4 w-full">
                <h3 class="text-xl font-semibold text-gray-800">{{ $item->package_name }}</h3>
                <p class="text-gray-600">Rp.50.000</p>
                <button class="bg-blue-600 text-white mt-4 px-4 py-2 rounded hover:bg-blue-500 w-full">
                        View Details
                </button>
            </div> --}}
            <!-- Related Product 3 -->
            {{-- <div class="bg-white rounded-lg shadow p-4">
                <img src="#" alt="#" width="300" height="300" class="rounded-lg mb-4 w-full">
                <h3 class="text-xl font-semibold text-gray-800">{{ $item->package_name }}</h3>
                <p class="text-gray-600">Rp.70.000</p>
                <button class="bg-blue-600 text-white mt-4 px-4 py-2 rounded hover:bg-blue-500 w-full">
                        View Details
                </button>
            </div> --}}
        {{-- </div>
    </section> --}}

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2020 Culinary Delights. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>

{{-- @foreach ($datas as $item)
<div class="group relative">
    <div class="mt-4 flex justify-between">
        <div>
            <h3 class="text-sm text-gray-700"></h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
        </div>
        <p class="text-sm font-medium text-gray-900">{{ $item->product }}</p>
    </div>
</div>
@endforeach --}}