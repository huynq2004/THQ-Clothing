@extends('layouts.app')

@section('title', 'Danh mục sản phẩm - THQ Clothing')

@section('content')
<div class="px-4 md:px-8">
    <!-- Category Navigation -->
    <nav class="py-6 border-t border-gray-200">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-12 text-sm uppercase tracking-wider">
                <a href="{{ route('home') }}" class="text-black hover:text-gray-600">TẤT CẢ</a>
                <a href="{{ route('categories.show', 'ao-so-mi') }}" class="text-black hover:text-gray-600 font-medium">ÁO SƠ MI</a>
                <a href="{{ route('categories.show', 'ao-phong') }}" class="text-black hover:text-gray-600">ÁO PHÔNG</a>
                <a href="{{ route('categories.show', 'quan-dai') }}" class="text-black hover:text-gray-600">QUẦN DÀI</a>
                <a href="{{ route('categories.show', 'quan-jeans') }}" class="text-black hover:text-gray-600">QUẦN JEANS</a>
                <a href="{{ route('categories.show', 'quan-dui') }}" class="text-black hover:text-gray-600">QUẦN ĐÙI</a>
            </div>
            
            <div class="hidden md:flex items-center space-x-6 text-sm uppercase tracking-wider">
                <span class="text-black">TRANG 1 2</span>
                <span class="text-black">BỘ LỌC</span>
                <button class="text-black">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"/>
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    
    <!-- Products Grid -->
    <div class="py-8">
        <div class="flex justify-center items-start gap-8 max-w-7xl mx-auto">
            <!-- Product 1 -->
            <div class="group">
                <a href="{{ route('products.show', 1) }}">
                    <div class="bg-gray-100 mb-6 overflow-hidden" style="width: 330px; height: 495px;">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-KmY5SHhBpMO7luFpDdpUgm9KLsZ8Sy.png" alt="Áo sơ mi THQ trắng cotton" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                </a>
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="text-sm uppercase tracking-wider mb-2 font-medium">ÁO SƠ MI THQ TRẮNG<br>COTTON</h3>
                        <p class="text-sm text-black">749.000 VND</p>
                    </div>
                    <button class="text-2xl font-light hover:text-gray-600 transition-colors">+</button>
                </div>
            </div>
            
            <!-- Product 2 -->
            <div class="group">
                <a href="{{ route('products.show', 2) }}">
                    <div class="bg-gray-100 mb-6 overflow-hidden" style="width: 330px; height: 495px;">
                        <img src="/images/ao-so-mi-xanh.jpg" alt="Áo sơ mi THQ xanh cotton" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                </a>
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="text-sm uppercase tracking-wider mb-2 font-medium">ÁO SƠ MI THQ XANH<br>COTTON</h3>
                        <p class="text-sm text-black">740.000 VND</p>
                    </div>
                    <button class="text-2xl font-light hover:text-gray-600 transition-colors">+</button>
                </div>
            </div>
            
            <!-- Product 3 -->
            <div class="group">
                <a href="{{ route('products.show', 3) }}">
                    <div class="bg-gray-100 mb-6 overflow-hidden" style="width: 330px; height: 495px;">
                        <img src="/images/ao-so-mi-be.jpg" alt="Áo sơ mi THQ be cotton" 
                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                </a>
                <div class="flex items-start justify-between">
                    <div>
                        <h3 class="text-sm uppercase tracking-wider mb-2 font-medium">ÁO SƠ MI THQ BE<br>COTTON</h3>
                        <p class="text-sm text-black">800.000 VND</p>
                    </div>
                    <button class="text-2xl font-light hover:text-gray-600 transition-colors">+</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
