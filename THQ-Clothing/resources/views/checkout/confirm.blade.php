@extends('layouts.app')

@section('title', 'Xác nhận thông tin - THQ Clothing')

@section('content')
<div class="min-h-screen flex flex-col">
    <!-- Main Content -->
    <div class="flex-1 px-4 md:px-8 py-12">
        <div class="max-w-4xl">
            <h1 class="text-lg uppercase tracking-wider mb-12">VUI LÒNG XÁC NHẬN THÔNG TIN</h1>
            
            <!-- Customer Info Table Layout -->
            <div class="grid grid-cols-2 gap-x-16 mb-12">
                <!-- Left Column -->
                <div class="space-y-4">
                    <div class="flex">
                        <label class="text-sm font-medium w-20">Họ tên:</label>
                        <div class="text-sm flex-1">Nguyễn Văn A</div>
                    </div>
                    <div class="flex">
                        <label class="text-sm font-medium w-20">SĐT:</label>
                        <div class="text-sm flex-1">0123456789</div>
                    </div>
                    <div class="flex">
                        <label class="text-sm font-medium w-20">Email:</label>
                        <div class="text-sm flex-1">vananguyen@example.com</div>
                    </div>
                </div>
                
                <!-- Right Column -->
                <div class="space-y-4">
                    <div class="flex">
                        <label class="text-sm font-medium w-32">Quận:</label>
                        <div class="bg-gray-200 px-3 py-1 text-sm flex-1">Thanh Xuân</div>
                    </div>
                    <div class="flex">
                        <label class="text-sm font-medium w-32">Tỉnh/Thành phố:</label>
                        <div class="bg-gray-200 px-3 py-1 text-sm flex-1">Hà Nội</div>
                    </div>
                    <div class="flex">
                        <label class="text-sm font-medium w-32">Địa chỉ cụ thể:</label>
                        <div class="text-sm flex-1">Bùi Xương Trạch</div>
                    </div>
                </div>
            </div>

            <!-- Product -->
            <div class="mb-12">
                <div class="bg-gray-100 w-32 aspect-[3/4] mb-4">
                    <img src="{{ asset('assets/images/customer/category/1.jpg') }}" alt="Áo sơ mi THQ trắng cotton" 
                         class="w-full h-full object-cover">
                </div>
                <div class="w-32">
                    <div class="text-xs uppercase tracking-wider mb-2">
                        ÁO SƠ MI THQ TRẮNG<br>
                        COTTON
                    </div>
                    <div class="text-right text-sm">X 1</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bottom Section -->
    <div class="bg-gray-100 px-6 py-6" style="background-color: #F7F7F7;">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-8">
                <button class="text-sm uppercase tracking-wider underline">QUAY LẠI</button>
                <div class="flex items-center space-x-4">
                    <label class="text-sm uppercase tracking-wider">MÃ KHUYẾN MẠI:</label>
                    <input type="text" value="SUMMER10" class="border border-gray-300 px-3 py-2 text-sm w-32">
                </div>
            </div>
            <div class="flex items-center space-x-6">
                <span class="text-sm uppercase tracking-wider">TỔNG:</span>
                <span class="text-lg">700.000 VND</span>
                <a href="{{ route('checkout.success') }}" class="bg-black text-white px-8 py-3 text-sm uppercase tracking-wider hover:bg-gray-800 transition-colors">
                    XÁC NHẬN
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
