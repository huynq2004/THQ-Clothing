@extends('layouts.app')

@section('title', 'Giỏ hàng - THQ Clothing')

@section('content')
<div class="min-h-screen flex flex-col">
    <!-- Main Content -->
    <div class="flex-1 px-2 md:px-8 py-4 md:py-8">
        <div class="max-w-sm mx-auto md:mx-0">
            <!-- Product Image -->
            <div class="bg-gray-100 mb-4 md:mb-6 overflow-hidden w-full max-w-xs mx-auto" style="aspect-ratio: 3/4;">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-RpkM4v9vCFTdYJnGVFQZA8fqdJSLpb.png" alt="Áo sơ mi THQ trắng cotton" 
                     class="w-full h-full object-cover">
            </div>
            
            <!-- Product Info -->
            <div class="w-full max-w-xs mx-auto">
                <div class="flex justify-between items-start mb-4 md:mb-6">
                    <div>
                        <h3 class="text-sm uppercase tracking-wider font-medium mb-2">ÁO SƠ MI THQ TRẮNG<br>COTTON</h3>
                        <p class="text-sm text-black">749.000 VND</p>
                    </div>
                    
                    <!-- Quantity Controls -->
                    <div class="flex items-center space-x-3 md:space-x-4">
                        <button class="text-lg font-light hover:text-gray-600 transition-colors">+</button>
                        <span class="text-lg">1</span>
                        <button class="text-lg font-light hover:text-gray-600 transition-colors">−</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bottom Section -->
    <div class="bg-gray-100 px-4 md:px-6 py-4 md:py-6" style="background-color: #F7F7F7;">
        <div class="flex flex-col sm:flex-row items-center justify-between space-y-4 sm:space-y-0 sm:space-x-6">
            <div class="flex items-center space-x-4 sm:space-x-6">
                <span class="text-sm uppercase tracking-wider">TỔNG:</span>
                <span class="text-lg">749.000 VND</span>
            </div>
            <a href="{{ route('checkout.shipping') }}" class="bg-black text-white px-6 md:px-8 py-2 md:py-3 text-sm uppercase tracking-wider hover:bg-gray-800 transition-colors w-full sm:w-auto text-center">
                ĐẶT HÀNG
            </a>
        </div>
    </div>
</div>
@endsection
