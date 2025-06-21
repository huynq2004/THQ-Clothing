<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'THQ Admin')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="bg-white border-b border-gray-200">
        <div class="px-4 md:px-8">
            <div class="flex items-center justify-between py-4">
                <!-- Mobile Menu & Logo -->
                <div class="flex items-center space-x-4">
                    <!-- Mobile Menu Toggle -->
                    <button class="flex flex-col space-y-1" id="mobile-menu-toggle">
                        <img src="{{ asset('assets/icons/customer/sidebar icon.svg') }}" alt="Menu" class="w-6 h-6">
                    </button>
                    
                    <!-- Logo -->
                    <a href="{{ route('admin.home') }}" class="text-[30px] font-bold text-black">
                        THQ
                    </a>
                </div>
                
                <!-- Header Right -->
                <div class="flex items-center space-x-6">
                    <!-- Search -->
                    <div class="hidden md:block">
                        <div class="relative">
                            <input type="text" placeholder="Tìm kiếm" 
                                   class="border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:border-black w-48">
                            <img src="{{ asset('assets/icons/product/search.svg') }}" alt="Search" class="absolute right-3 top-1/2 transform -translate-y-1/2 w-4 h-4">
                        </div>
                    </div>
                    
                    <!-- Icons -->
                    <div class="flex items-center space-x-4">
                        <img src="{{ asset('assets/icons/product/bell.svg') }}" alt="Notifications" class="w-6 h-6 cursor-pointer">
                        <img src="{{ asset('assets/icons/product/user-alt.svg') }}" alt="Profile" class="w-6 h-6 cursor-pointer">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="fixed left-0 top-0 h-full w-80 bg-white shadow-lg">
            <div class="p-4">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-lg font-semibold">THQ</h3>
                    <button id="mobile-menu-close">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <nav class="space-y-4 text-sm uppercase tracking-wide">
                    <a href="{{ route('admin.home') }}" class="block py-2 text-black">TRANG CHỦ</a>
                    <a href="{{ route('admin.products.index') }}" class="block py-2 text-black">QUẢN LÝ SẢN PHẨM</a>
                    <a href="{{ route('admin.orders.index') }}" class="block py-2 text-black">QUẢN LÝ HÓA ĐƠN</a>
                    <a href="{{ route('admin.discounts.index') }}" class="block py-2 text-black">QUẢN LÝ KHUYẾN MẠI</a>
                </nav>
            </div>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.remove('hidden');
        });
        
        document.getElementById('mobile-menu-close').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.add('hidden');
        });
        
        // Click outside to close
        document.getElementById('mobile-menu').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.add('hidden');
            }
        });
    </script>
</body>
</html> 