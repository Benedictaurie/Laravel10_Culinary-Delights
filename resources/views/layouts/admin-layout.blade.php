<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Link CDN Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Link SweetAlert2 CSS -->
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"> --}}
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Sidebar & Main Layout -->
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-blue-600 text-white flex flex-col">
            <div class="px-6 py-4">
                <h2 class="text-xl font-bold">
                    <a href="{{ route('seller.index') }}">HALLO ADMIN</a>
                </h2>
            </div>
            <nav class="flex-grow">
                <ul class="space-y-2 px-4">
                    <li>
                        <a href="{{ route('seller.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Users</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Orders</a>
                    </li>
                    <li>
                        <a href="{{ route('produk') }}" class="block px-4 py-2 rounded hover:bg-gray-700">Products</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 rounded hover:bg-gray-700">Settings</a>
                    </li>
                </ul>
            </nav>
            <div class="px-6 py-4">
                <a href="#" class="block px-4 py-2 bg-gray-400 text-center rounded hover:bg-gray-400">Logout</a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 bg-gray-100 overflow-y-auto">
            <!-- Header -->
            <header class="bg-white shadow px-6 py-4">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
                    <div class="flex-shrink-0 h-10 w-10">
                        <img class="h-10 w-10 rounded-full" src="../assets/uploads/admin.jpg" alt="">
                    </div>
                </div>
            </header>

            <!-- Content Area -->
            {{-- <div class="p-6">
                <!-- Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white p-4 rounded-lg shadow">
                        <h2 class="text-xl font-bold text-gray-800">Users</h2>
                        <p class="text-gray-600 mt-2">150</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <h2 class="text-xl font-bold text-gray-800">Orders</h2>
                        <p class="text-gray-600 mt-2">120</p>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow">
                        <h2 class="text-xl font-bold text-gray-800">Revenue</h2>
                        <p class="text-gray-600 mt-2">$12,000</p>
                    </div>
                </div> --}}

                <!-- Table -->
                {{-- <div class="bg-white p-6 rounded-lg shadow">
                    <h2 class="text-xl font-bold text-gray-800 mb-4">Recent Orders</h2>
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr>
                                <th class="border-b px-4 py-2 text-gray-800">Order ID</th>
                                <th class="border-b px-4 py-2 text-gray-800">Customer</th>
                                <th class="border-b px-4 py-2 text-gray-800">Total</th>
                                <th class="border-b px-4 py-2 text-gray-800">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-b px-4 py-2">#001</td>
                                <td class="border-b px-4 py-2">John Doe</td>
                                <td class="border-b px-4 py-2">$250</td>
                                <td class="border-b px-4 py-2 text-green-600">Completed</td>
                            </tr>
                            <tr>
                                <td class="border-b px-4 py-2">#002</td>
                                <td class="border-b px-4 py-2">Jane Smith</td>
                                <td class="border-b px-4 py-2">$150</td>
                                <td class="border-b px-4 py-2 text-yellow-600">Pending</td>
                            </tr>
                            <tr>
                                <td class="border-b px-4 py-2">#003</td>
                                <td class="border-b px-4 py-2">Michael Brown</td>
                                <td class="border-b px-4 py-2">$300</td>
                                <td class="border-b px-4 py-2 text-red-600">Cancelled</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> --}}
            <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
                <main class="w-full flex-grow p-6">
                    {{ $slot }}
                </main>
                <footer class="bg-gray-800 text-white py-8">
                    <div class="container mx-auto px-6 text-center">
                        <p>&copy; 2024 Culinary. All rights reserved.</p>
                    </div>
                </footer>
            </div>
        </main>
    </div>
</body>
</html>
