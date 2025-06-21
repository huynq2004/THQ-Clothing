@extends('layouts.app')

@section('title', 'Danh mục sản phẩm - THQ Clothing')

@section('content')
<div class="px-4 md:px-8">
    <!-- Products Grid -->
    <div class="py-8">
        <div class="flex justify-center items-start gap-8 max-w-7xl mx-auto">
            <!-- Product 1 -->
            <div class="group">
                <a href="{{ route('products.show', 1) }}">
                    <div class="bg-gray-100 mb-6 overflow-hidden" style="width: 330px; height: 495px;">
                        <img src="{{ asset('assets/images/customer/category/1.jpg') }}" alt="Áo sơ mi THQ trắng cotton" 
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
                        <img src="{{ asset('assets/images/customer/category/2.jpg') }}" alt="Áo sơ mi THQ xanh cotton" 
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
                        <img src="{{ asset('assets/images/customer/category/3.jpg') }}" alt="Áo sơ mi THQ be cotton" 
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
