@extends('layouts.app')

@section('title', 'Admin - Trang chủ')

@section('content')
<div class="px-2 md:px-4 py-2 md:py-4">
    <!-- Products Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-2 md:gap-3">
        <!-- Product 1 -->
        <a href="#" class="group">
            <div class="w-full aspect-[3/4] bg-gray-100 mb-2 overflow-hidden">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-iY0L7WwTynpNnLWdT2H3zzpAvb12N.png" alt="ÁO POLO TAY DÀI 2025" 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="text-left">
                <h3 class="text-xs md:text-sm uppercase tracking-wide mb-1 line-clamp-2">ÁO POLO TAY DÀI 2025</h3>
                <p class="text-xs md:text-sm text-gray-600">299.000 VND</p>
            </div>
        </a>
        
        <!-- Product 2 -->
        <a href="#" class="group">
            <div class="w-full aspect-[3/4] bg-gray-100 mb-2 overflow-hidden">
                <img src="/images/ao-polo-tay-ngan.jpg" alt="ÁO POLO TAY NGẮN C..." 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="text-left">
                <h3 class="text-xs md:text-sm uppercase tracking-wide mb-1 line-clamp-2">ÁO POLO TAY NGẮN C...</h3>
                <p class="text-xs md:text-sm text-gray-600">249.000 VND</p>
            </div>
        </a>
        
        <!-- Product 3 -->
        <a href="#" class="group">
            <div class="w-full aspect-[3/4] bg-gray-100 mb-2 overflow-hidden">
                <img src="/images/ao-phong-cotton.jpg" alt="ÁO PHÔNG COTTON 2..." 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="text-left">
                <h3 class="text-xs md:text-sm uppercase tracking-wide mb-1 line-clamp-2">ÁO PHÔNG COTTON 2...</h3>
                <p class="text-xs md:text-sm text-gray-600">309.000 VND</p>
            </div>
        </a>
        
        <!-- Product 4 -->
        <a href="#" class="group">
            <div class="w-full aspect-[3/4] bg-gray-100 mb-2 overflow-hidden">
                <img src="/images/tui-dung-do.jpg" alt="TÚI ĐỰNG ĐỒ CÁ NHÂ..." 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="text-left">
                <h3 class="text-xs md:text-sm uppercase tracking-wide mb-1 line-clamp-2">TÚI ĐỰNG ĐỒ CÁ NHÂ...</h3>
                <p class="text-xs md:text-sm text-gray-600">450.000 VND</p>
            </div>
        </a>
        
        <!-- Product 5 -->
        <a href="#" class="group">
            <div class="w-full aspect-[3/4] bg-gray-100 mb-2 overflow-hidden">
                <img src="/images/quan-bo-hot-trend.jpg" alt="QUẦN BÒ HOT TREND..." 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="text-left">
                <h3 class="text-xs md:text-sm uppercase tracking-wide mb-1 line-clamp-2">QUẦN BÒ HOT TREND...</h3>
                <p class="text-xs md:text-sm text-gray-600">499.000 VND</p>
            </div>
        </a>
        
        <!-- Product 6 -->
        <a href="#" class="group">
            <div class="w-full aspect-[3/4] bg-gray-100 mb-2 overflow-hidden">
                <img src="/images/ao-thun-xam.jpg" alt="ÁO THUN XÁM" 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="text-left">
                <h3 class="text-xs md:text-sm uppercase tracking-wide mb-1 line-clamp-2">ÁO THUN XÁM</h3>
                <p class="text-xs md:text-sm text-gray-600">199.000 VND</p>
            </div>
        </a>
        
        <!-- Product 7 -->
        <a href="#" class="group">
            <div class="w-full aspect-[3/4] bg-gray-100 mb-2 overflow-hidden">
                <img src="/images/ao-so-mi-hoa-tiet.jpg" alt="ÁO SƠ MI HOA TIẾT" 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="text-left">
                <h3 class="text-xs md:text-sm uppercase tracking-wide mb-1 line-clamp-2">ÁO SƠ MI HOA TIẾT</h3>
                <p class="text-xs md:text-sm text-gray-600">399.000 VND</p>
            </div>
        </a>
        
        <!-- Product 8 -->
        <a href="#" class="group">
            <div class="w-full aspect-[3/4] bg-gray-100 mb-2 overflow-hidden">
                <img src="/images/quan-tay-den.jpg" alt="QUẦN TÂY ĐEN" 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="text-left">
                <h3 class="text-xs md:text-sm uppercase tracking-wide mb-1 line-clamp-2">QUẦN TÂY ĐEN</h3>
                <p class="text-xs md:text-sm text-gray-600">599.000 VND</p>
            </div>
        </a>
        
        <!-- Product 9 -->
        <a href="#" class="group">
            <div class="w-full aspect-[3/4] bg-gray-100 mb-2 overflow-hidden">
                <img src="/images/ao-khoac-be.jpg" alt="ÁO KHOÁC BE" 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="text-left">
                <h3 class="text-xs md:text-sm uppercase tracking-wide mb-1 line-clamp-2">ÁO KHOÁC BE</h3>
                <p class="text-xs md:text-sm text-gray-600">799.000 VND</p>
            </div>
        </a>
        
        <!-- Product 10 -->
        <a href="#" class="group">
            <div class="w-full aspect-[3/4] bg-gray-100 mb-2 overflow-hidden">
                <img src="/images/ao-so-mi-soc.jpg" alt="ÁO SƠ MI SỌC" 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="text-left">
                <h3 class="text-xs md:text-sm uppercase tracking-wide mb-1 line-clamp-2">ÁO SƠ MI SỌC</h3>
                <p class="text-xs md:text-sm text-gray-600">449.000 VND</p>
            </div>
        </a>
        
        <!-- Product 11 -->
        <a href="#" class="group">
            <div class="w-full aspect-[3/4] bg-gray-100 mb-2 overflow-hidden">
                <img src="/images/ao-khoac-den.jpg" alt="ÁO KHOÁC ĐEN" 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="text-left">
                <h3 class="text-xs md:text-sm uppercase tracking-wide mb-1 line-clamp-2">ÁO KHOÁC ĐEN</h3>
                <p class="text-xs md:text-sm text-gray-600">899.000 VND</p>
            </div>
        </a>
        
        <!-- Product 12 -->
        <a href="#" class="group">
            <div class="w-full aspect-[3/4] bg-gray-100 mb-2 overflow-hidden">
                <img src="/images/quan-short-xanh.jpg" alt="QUẦN SHORT XANH" 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="text-left">
                <h3 class="text-xs md:text-sm uppercase tracking-wide mb-1 line-clamp-2">QUẦN SHORT XANH</h3>
                <p class="text-xs md:text-sm text-gray-600">299.000 VND</p>
            </div>
        </a>
    </div>
</div>
@endsection 