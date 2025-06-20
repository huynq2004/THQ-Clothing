@extends('layouts.app')

@section('title', 'Theo dõi đơn hàng - THQ Clothing')

@section('content')
<div class="min-h-screen flex flex-col">
    <!-- Main Content -->
    <div class="flex-1 px-4 md:px-8 py-12">
        <div class="max-w-4xl">
            <!-- Search Order -->
            <div class="mb-12">
                <div class="flex items-center space-x-4 mb-8">
                    <label class="text-sm uppercase tracking-wider">ĐƠN HÀNG</label>
                    <div class="flex">
                        <input type="text" value="#12345" class="border border-gray-300 px-3 py-2 focus:outline-none focus:border-black">
                        <button class="bg-gray-400 text-white px-4 py-2">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

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

            <!-- Product and Status -->
            <div class="grid grid-cols-2 gap-x-16">
                <!-- Product -->
                <div>
                    <div class="bg-gray-100 w-32 aspect-[3/4] mb-4">
                        <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-mMiARYdSwQvUT28OWVcAZsbUcHgtWP.png" alt="Áo sơ mi THQ trắng cotton"
                            class="w-full h-full object-cover">
                    </div>
                    <div class="w-32">
                        <div class="text-xs uppercase tracking-wider mb-2">
                            ÁO SƠ MI TRẮNG THQ<br>
                            COTTON<br>
                            749.000 VND
                        </div>
                        <div class="text-right text-sm">1</div>
                    </div>
                </div>
                <!-- Order Status -->
                <div class="flex items-end justify-end pr-4">
                    <div class="text-right">
                        <div class="text-sm italic text-gray-700">Đang chờ xác nhận</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Section - No background color -->
    <div class="px-6 py-6">
        <div class="flex items-center justify-between">
            <button class="text-sm uppercase tracking-wider underline">QUAY LẠI</button>
            <div class="flex items-center space-x-6">
                <span class="text-sm uppercase tracking-wider">TỔNG:</span>
                <span class="text-lg">700.000 VND</span>
            </div>
        </div>
    </div>
</div>
@endsection