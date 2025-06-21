@extends('layouts.app')

@section('title', 'Admin - Trang chủ')

@section('content')
<div class="px-2 md:px-4 py-2 md:py-4">
    <!-- Products Grid -->
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 gap-2 md:gap-3">
        <!-- Product 1 -->
        <a href="#" class="group">
            <div class="w-full aspect-[3/4] bg-gray-100 mb-2 overflow-hidden">
                <img src="assets/images/customer/1.jpg" alt="ÁO POLO TAY DÀI 2025" 
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
                <img src="assets/images/customer/2.jpg" alt="ÁO POLO TAY NGẮN C..." 
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
                <img src="assets/images/customer/3.jpg" alt="ÁO PHÔNG COTTON 2..." 
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
                <img src="assets/images/customer/4.jpg" alt="TÚI ĐỰNG ĐỒ CÁ NHÂ..." 
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
                <img src="assets/images/customer/5.jpg" alt="QUẦN BÒ HOT TREND..." 
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
                <img src="assets/images/customer/6.jpg" alt="ÁO THUN XÁM" 
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
                <img src="assets/images/customer/7.jpg" alt="ÁO SƠ MI HOA TIẾT" 
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
                <img src="assets/images/customer/8.jpg" alt="QUẦN TÂY ĐEN" 
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
                <img src="assets/images/customer/9.jpg" alt="ÁO KHOÁC BE" 
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
                <img src="assets/images/customer/10.jpg" alt="ÁO SƠ MI SỌC" 
                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
            </div>
            <div class="text-left">
                <h3 class="text-xs md:text-sm uppercase tracking-wide mb-1 line-clamp-2">ÁO SƠ MI SỌC</h3>
                <p class="text-xs md:text-sm text-gray-600">449.000 VND</p>
            </div>
        </a>
    </div>
</div>
@endsection 