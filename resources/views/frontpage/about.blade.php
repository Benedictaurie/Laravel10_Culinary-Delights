<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
    <section class="bg-blue-600 text-white py-20">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl font-bold mb-4">About Us</h1>
            <p class="text-lg mb-8">Learn more about our mission, vision, and values.</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="container mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Text Content -->
            <div>
                <h2 class="text-3xl font-bold text-gray-800 mb-4">Who We Are</h2>
                <p class="text-gray-600 mb-4">
                    We are a company dedicated to delivering high-quality products and services to our customers.
                    Our team is passionate about innovation and strives to exceed customer expectations at every opportunity.
                </p>
                <p class="text-gray-600 mb-4">
                    Founded in 2020, we have grown into a trusted brand known for reliability and excellence in our field.
                </p>
                <p class="text-gray-600">
                    Our mission is to make a positive impact in the lives of our customers and the communities we serve.
                </p>
            </div>
            <!-- Image -->
            <div>
                <img src="https://i.pinimg.com/736x/08/54/74/0854741069c1269ccb255642b731a826.jpg" alt="About Us" class="rounded-lg shadow-lg w-full">
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="container mx-auto px-6 py-16 bg-gray-50">
        <div class="text-center mb-12">
            <h2 class="text-2xl font-bold text-gray-800">Meet Our Team</h2>
            <p class="text-gray-600 mt-4">Our talented team members are the backbone of our success.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Team Member 1 -->
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <img src="https://i.pinimg.com/736x/04/92/c0/0492c0bba8f89b15be7f849c80b830e9.jpg" alt="Team Member" class="w-24 h-24 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Amara Cheryl Heyward</h3>
                <p class="text-gray-600">CEO</p>
            </div>
            <!-- Team Member 2 -->
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <img src="https://i.pinimg.com/736x/fd/c0/57/fdc057d330bc084ae39073d369593775.jpg" alt="Team Member" class="w-24 h-24 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Ella Cahyani Putri</h3>
                <p class="text-gray-600">CTO</p>
            </div>
            <!-- Team Member 3 -->
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <img src="https://i.pinimg.com/736x/9b/f5/3a/9bf53ab4f272d6da308493aa7b70e231.jpg" alt="Team Member" class="w-24 h-24 mx-auto rounded-full mb-4">
                <h3 class="text-xl font-semibold text-gray-800">Katarina Guntur</h3>
                <p class="text-gray-600">Marketing Manager</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2020 Culinary Delights. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>
