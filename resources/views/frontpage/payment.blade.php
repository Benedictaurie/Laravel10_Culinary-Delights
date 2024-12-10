<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
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

    <!-- Payment Section -->
    <section class="container mx-auto px-6 py-16">
        <div class="bg-white rounded-lg shadow-lg p-8 max-w-lg mx-auto">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Payment Details</h1>
            <form id="paymentForm" class="space-y-4">
                <!-- Cardholder Name -->
                <div>
                    <label for="name" class="block text-gray-700">Cardholder Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name"
                        class="w-full mt-2 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <!-- Card Number -->
                <div>
                    <label for="cardNumber" class="block text-gray-700">Card Number</label>
                    <input type="text" id="cardNumber" name="cardNumber" placeholder="1234 5678 9012 3456"
                        class="w-full mt-2 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <!-- Expiration Date -->
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="expiryDate" class="block text-gray-700">Expiry Date</label>
                        <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YY"
                            class="w-full mt-2 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                    <!-- CVV -->
                    <div>
                        <label for="cvv" class="block text-gray-700">CVV</label>
                        <input type="text" id="cvv" name="cvv" placeholder="123"
                            class="w-full mt-2 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                </div>
                <!-- Billing Address -->
                <div>
                    <label for="billingAddress" class="block text-gray-700">Billing Address</label>
                    <input type="text" id="billingAddress" name="billingAddress" placeholder="Enter your address"
                        class="w-full mt-2 px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                </div>
                <!-- Total Amount -->
                <div class="bg-gray-100 p-4 rounded-lg text-center">
                    <p class="text-lg text-gray-700">Total Amount:</p>
                    <p class="text-2xl font-bold text-blue-600">$99.99</p>
                </div>
                <!-- Submit Button -->
                <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-500">
                    Pay Now
                </button>
            </form>
            <!-- Success Message -->
            <div id="successMessage" class="hidden mt-4 p-4 bg-green-100 border border-green-300 rounded-lg text-green-700">
                Payment successful! Thank you for your order.
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2024 Culinary. All rights reserved.</p>
        </div>
    </footer>

    <!-- Script -->
    <script>
        const form = document.getElementById('paymentForm');
        const successMessage = document.getElementById('successMessage');

        form.addEventListener('submit', (e) => {
            e.preventDefault();

            // Mock payment processing
            setTimeout(() => {
                successMessage.classList.remove('hidden');
            }, 1000);
        });
    </script>
</body>
</html>
