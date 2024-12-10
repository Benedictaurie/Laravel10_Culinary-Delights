<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details</title>
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
                    <a href="{{ route('produk') }}" class="text-gray-800 hover:text-gray-600">Products</a>
                    <a href="{{ route('keranjang') }}" class="text-gray-800 hover:text-gray-600">Cart</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Product Section -->
    @foreach ($packages as $key=>$item )
    <section class="container mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Product Image -->
            <div>
                <img src="{{ asset($item->feature_img) }}" alt="#" class="rounded-lg shadow-lg w-full">
            </div>
            <!-- Product Details  -->
            <div>
                <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $item->package_name }}</h1>
                <p class="text-gray-600 mb-4">
                    {{ $item->package_desc }}
                </p>
                <p class="text-2xl font-semibold text-blue-600 mb-4">Rp.{{ $item->price }}</p>

                <form id="addToCartForm" class="space-y-4">
                    <!-- Quantity Input -->
                    <div class="flex items-center space-x-4">
                        <label for="quantity" class="text-gray-700">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" min="1" value="1" class="w-16 border border-gray-300 rounded px-3 py-2 text-center">
                    </div>

                    <!-- Add to Cart Button -->
                    <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-500">
                        Add to Cart
                    </button>
                </form>

                <!-- Success Message -->
                <div id="successMessage" class="hidden mt-4 p-4 bg-green-100 border border-green-300 rounded-lg text-green-700">
                    Product added to cart successfully!
                </div>
            </div>
        </div>
    </section>
    @endforeach

    <!-- Cart Section -->
    <section class="container mx-auto px-6 py-16 bg-gray-50">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Cart Summary</h2>
        <table class="w-full text-left border-collapse bg-white rounded-lg shadow">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border-b px-4 py-2 text-gray-800">Product</th>
                    <th class="border-b px-4 py-2 text-gray-800">Quantity</th>
                    <th class="border-b px-4 py-2 text-gray-800">Price</th>
                </tr>
            </thead>
            <tbody id="cartItems">
                <!-- Items will be dynamically inserted here -->
            </tbody>
        </table>
    </section>

    <form class="space-y-4 grid grid-cols-4 md:grid-cols-4 gap-4 container mx-auto px-16 py-8">
        <!-- Buy Product Button -->
        <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-500">
            <a href="{{ route('bayar') }}">Buy Product</a> 
        </button>
    </form>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2020 Culinary Delights. All rights reserved.</p>
        </div>
    </footer>

    <!-- Script -->
    <script>
        const form = document.getElementById('addToCartForm');
        const successMessage = document.getElementById('successMessage');
        const cartItems = document.getElementById('cartItems');

        form.addEventListener('submit', (e) => {
            e.preventDefault();

            // Get product details
            const productName = "Chocolate Brownie";
            const quantity = document.getElementById('quantity').value;
            const price = {{ $item->price }};

            // Add product to cart table
            const row = document.createElement('tr');
            row.innerHTML = `
                <td class="border-b px-4 py-2">${productName}</td>
                <td class="border-b px-4 py-2">${quantity}</td>
                <td class="border-b px-4 py-2">Rp.${(price * quantity).toFixed(2)}</td>
            `;
            cartItems.appendChild(row);

            // Show success message
            successMessage.classList.remove('hidden');
        });
    </script>
    
</body>
</html>
