@extends('layouts.app')

@section('title', 'Chi tiết sản phẩm - THQ Clothing')

@section('content')
<div class="flex justify-center px-2 md:px-8 py-4 md:py-8 min-h-screen">
    <div class="w-full max-w-6xl">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 md:gap-8 lg:gap-16">
            <!-- Product Image -->
            <div class="flex justify-center">
                <div class="bg-gray-100 flex items-center justify-center w-full max-w-md aspect-[16/9] md:aspect-auto" style="md:width: 450px; md:height: 260px;">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-xp9085iAybu09bsVDDtLmEmUOqaCqz.png" alt="Áo sơ mi trắng THQ Cotton" 
                         class="max-w-full max-h-full object-contain">
                </div>
            </div>
            
            <!-- Product Info -->
            <div class="space-y-4 md:space-y-6">
                <div>
                    <h1 class="text-lg md:text-2xl font-normal mb-2 md:mb-3">Áo sơ mi trắng THQ Cotton</h1>
                    <p class="text-gray-500 text-sm mb-3 md:mb-4">Còn hàng</p>
                    
                    <!-- Line only under title -->
                    <div class="border-b border-black w-full max-w-xs"></div>
                </div>
                
                <div>
                    <p class="text-lg md:text-xl font-normal">749.000 VND</p>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <button class="border border-black text-sm uppercase tracking-wider hover:bg-black hover:text-white transition-colors flex items-center justify-center bg-white text-black w-full sm:w-auto" style="min-width: 140px; height: 40px;">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z"/>
                        </svg>
                    </button>
                    <button class="bg-gray-600 text-white text-sm uppercase tracking-wider hover:bg-gray-700 transition-colors w-full sm:w-auto" style="min-width: 140px; height: 40px;">
                        MUA NGAY
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Product Details Tabs -->
        <div class="mt-8 md:mt-12">
            <div class="border-b border-gray-300">
                <nav class="flex space-x-6 md:space-x-12">
                    <button class="py-3 md:py-4 border-b-2 border-black font-normal text-black text-xs md:text-sm uppercase tracking-wider">
                        GIỚI THIỆU
                    </button>
                    <button class="py-3 md:py-4 border-b-2 border-transparent font-normal text-gray-500 hover:text-gray-700 text-xs md:text-sm uppercase tracking-wider">
                        ĐÁNH GIÁ
                    </button>
                </nav>
            </div>
            
            <div class="py-6 md:py-8 bg-gray-100 -mx-2 md:-mx-8 px-2 md:px-8">
                <p class="text-xs md:text-sm text-gray-700">
                    Áo sơ mi trắng THQ Cotton được làm từ 100% Cotton.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
