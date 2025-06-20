<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'THQ Clothing')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="bg-white">
        <div class="px-4 md:px-8">
            <!-- Main Header -->
            <div class="flex items-center justify-between py-6">
                <!-- Mobile Menu & Logo -->
                <div class="flex items-center space-x-4">
                    <!-- Mobile Menu Toggle -->
                    <button class="flex flex-col space-y-1" id="mobile-menu-toggle">
                        <div class="w-6 h-0.5 bg-black"></div>
                        <div class="w-6 h-0.5 bg-black"></div>
                        <div class="w-6 h-0.5 bg-black"></div>
                    </button>
                    
                    <!-- Logo -->
                    <a href="{{ route('home') }}" class="text-5xl font-bold text-black">
                        THQ
                    </a>
                </div>
                
                <!-- Header Right -->
                <div class="flex items-center space-x-12">
                    <!-- Search -->
                    <div class="hidden md:block">
                        <form class="relative" action="{{ route('search') }}" method="GET">
                            <input type="text" name="q" placeholder="TÌM KIẾM" 
                                   class="border-b border-black bg-transparent pb-2 text-sm uppercase tracking-wider focus:outline-none w-40"
                                   onclick="window.location.href='{{ route('search') }}'">
                        </form>
                    </div>
                    
                    <!-- Auth & Support -->
                    <div class="hidden md:flex items-center space-x-12 text-sm uppercase tracking-wider">
                        @guest
                             <a href="{{ request()->is('admin*') ? route('home') : route('admin.home') }}" class="text-black hover:text-gray-600">ĐĂNG NHẬP</a>
                        @else
                            <span class="text-black">{{ Auth::user()->name }}</span>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="text-black hover:text-gray-600">ĐĂNG XUẤT</button>
                            </form>
                        @endguest
                        <a href="#" class="text-black hover:text-gray-600">HỖ TRỢ</a>
                    </div>
                    
                    <!-- Cart -->
                    <a href="{{ route('cart.index') }}" class="text-black hover:text-gray-600 text-sm uppercase tracking-wider {{ request()->routeIs('cart.index') ? 'font-bold' : '' }}">
                        GIỎ [{{ session('cart') ? count(session('cart')) : 1 }}]
                    </a>
                </div>
            </div>
            
            <!-- Category Navigation - Only show on home and category pages -->
            @if(!request()->routeIs(['cart.index', 'checkout.*', 'orders.*', 'products.show']))
            <nav class="py-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-8 text-sm uppercase tracking-wide">
                        <a href="{{ route('home') }}" class="text-black hover:text-gray-600">TẤT CẢ</a>
                        <a href="{{ route('categories.show', 'ao-so-mi') }}" class="text-black hover:text-gray-600">ÁO SƠ MI</a>
                        <a href="{{ route('categories.show', 'ao-phong') }}" class="text-black hover:text-gray-600">ÁO PHÔNG</a>
                        <a href="{{ route('categories.show', 'quan-dai') }}" class="text-black hover:text-gray-600">QUẦN DÀI</a>
                        <a href="{{ route('categories.show', 'quan-jeans') }}" class="text-black hover:text-gray-600">QUẦN JEANS</a>
                        <a href="{{ route('categories.show', 'quan-dui') }}" class="text-black hover:text-gray-600">QUẦN ĐÙI</a>
                    </div>
                    
                    <div class="hidden md:flex items-center space-x-4 text-sm uppercase tracking-wide">
                        <span class="text-black">TRANG 1 2</span>
                        <span class="text-black">BỘ LỌC</span>
                        <button class="text-black">
                            <i class="fas fa-filter"></i>
                        </button>
                    </div>
                </div>
            </nav>
            @endif
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer - Only show on home and category pages -->
    @if(!request()->routeIs(['cart.index', 'checkout.*', 'orders.*', 'products.show']))
    <footer class="bg-gray-900 text-white mt-16">
        <div class="px-2 md:px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4">THQ Clothing</h3>
                    <p class="text-gray-300 mb-4">Thời trang nam cao cấp, phong cách và chất lượng hàng đầu Việt Nam.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="font-semibold mb-4">Liên kết nhanh</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="{{ route('home') }}" class="hover:text-white">Trang chủ</a></li>
                        <li><a href="{{ route('products.index') }}" class="hover:text-white">Sản phẩm</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white">Về chúng tôi</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white">Liên hệ</a></li>
                    </ul>
                </div>
                
                <!-- Customer Service -->
                <div>
                    <h4 class="font-semibold mb-4">Hỗ trợ khách hàng</h4>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="#" class="hover:text-white">Chính sách đổi trả</a></li>
                        <li><a href="#" class="hover:text-white">Hướng dẫn mua hàng</a></li>
                        <li><a href="#" class="hover:text-white">Chính sách bảo mật</a></li>
                        <li><a href="#" class="hover:text-white">Điều khoản sử dụng</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="font-semibold mb-4">Thông tin liên hệ</h4>
                    <div class="space-y-2 text-gray-300">
                        <p><i class="fas fa-map-marker-alt mr-2"></i> 123 Đường ABC, Quận 1, TP.HCM</p>
                        <p><i class="fas fa-phone mr-2"></i> 0123.456.789</p>
                        <p><i class="fas fa-envelope mr-2"></i> info@thqclothing.com</p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-300">
                <p>&copy; 2024 THQ Clothing. Tất cả quyền được bảo lưu.</p>
            </div>
        </div>
    </footer>
    @endif

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
                    @if(request()->is('admin*'))
                        {{-- Admin Mobile Menu --}}
                        <a href="{{ route('admin.home') }}" class="block py-2 text-black">TRANG CHỦ</a>
                        <a href="{{ route('admin.products.index') }}" class="block py-2 text-black">QUẢN LÝ SẢN PHẨM</a>
                        <a href="{{ route('admin.orders.index') }}" class="block py-2 text-black">QUẢN LÝ HÓA ĐƠN</a>
                        <a href="{{ route('admin.discounts.index') }}" class="block py-2 text-black">QUẢN LÝ KHUYẾN MẠI</a>
                        
                    @else
                        {{-- Customer Mobile Menu --}}
                        <a href="{{ route('products.index') }}" class="block py-2 text-black">TẤT CẢ</a>
                        <a href="{{ route('categories.show', 'ao-so-mi') }}" class="block py-2 text-black">ÁO SƠ MI</a>
                        <a href="{{ route('categories.show', 'ao-phong') }}" class="block py-2 text-black">ÁO PHÔNG</a>
                        <a href="{{ route('categories.show', 'quan-dai') }}" class="block py-2 text-black">QUẦN DÀI</a>
                        <a href="{{ route('categories.show', 'quan-jeans') }}" class="block py-2 text-black">QUẦN JEANS</a>
                        <a href="{{ route('categories.show', 'quan-dui') }}" class="block py-2 text-black">QUẦN ĐÙI</a>
                        <hr class="my-4">
                        @guest
                            <a href="{{ route('admin.home') }}" class="block py-2 text-black">ĐĂNG NHẬP</a>
                        @endguest
                        <a href="#" class="block py-2 text-black">HỖ TRỢ</a>
                        <a href="{{ route('cart.index') }}" class="block py-2 text-black">GIỎ HÀNG</a>
                    @endif
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
