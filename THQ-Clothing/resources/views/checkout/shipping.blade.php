@extends('layouts.app')

@section('title', 'Điền thông tin vận chuyển - THQ Clothing')

@section('content')
<div class="min-h-screen flex flex-col">
    <!-- Main Content -->
    <div class="flex-1 px-4 md:px-8 py-12">
        <div class="max-w-4xl">
            <h1 class="text-lg uppercase tracking-wider mb-12">VUI LÒNG ĐIỀN THÔNG TIN VẬN CHUYỂN</h1>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Form -->
                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium mb-2">Họ tên:</label>
                        <input type="text" class="w-full border border-gray-300 px-3 py-2 focus:outline-none focus:border-black">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">SĐT:</label>
                        <input type="tel" class="w-full border border-gray-300 px-3 py-2 focus:outline-none focus:border-black">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Email:</label>
                        <input type="email" class="w-full border border-gray-300 px-3 py-2 focus:outline-none focus:border-black">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Quận:</label>
                        <select class="w-full border border-gray-300 px-3 py-2 focus:outline-none focus:border-black bg-white">
                            <option>Chọn quận</option>
                            <option>Quận 1</option>
                            <option>Quận 2</option>
                            <option>Quận 3</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Tỉnh/Thành phố:</label>
                        <select class="w-full border border-gray-300 px-3 py-2 focus:outline-none focus:border-black bg-white">
                            <option>Chọn Tỉnh/Thành phố</option>
                            <option>TP. Hồ Chí Minh</option>
                            <option>Hà Nội</option>
                            <option>Đà Nẵng</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Địa chỉ cụ thể:</label>
                        <input type="text" class="w-full border border-gray-300 px-3 py-2 focus:outline-none focus:border-black">
                    </div>
                </div>
                
                <!-- Right Side - Coupon Section -->
                <div class="flex items-center justify-center h-full">
                    <div class="w-full max-w-sm">
                        <label class="block text-sm font-medium mb-2">MÃ KHUYẾN MẠI:</label>
                        <div class="flex">
                            <input type="text" class="flex-1 border border-gray-300 px-3 py-2 focus:outline-none focus:border-black">
                            <button class="bg-gray-400 text-white px-6 py-2 text-sm uppercase tracking-wider">APPLY</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bottom Section -->
    <div class="bg-gray-100 px-6 py-6" style="background-color: #F7F7F7;">
        <div class="flex items-center justify-between">
            <button class="text-sm uppercase tracking-wider underline">QUAY LẠI</button>
            <div class="flex items-center space-x-6">
                <span class="text-sm uppercase tracking-wider">TỔNG:</span>
                <span class="text-lg">749.000 VND</span>
                <a href="{{ route('checkout.confirm') }}" class="bg-black text-white px-8 py-3 text-sm uppercase tracking-wider hover:bg-gray-800 transition-colors">
                    TIẾP TỤC
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
