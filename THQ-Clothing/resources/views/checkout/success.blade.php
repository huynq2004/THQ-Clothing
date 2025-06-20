@extends('layouts.app')

@section('title', 'Đặt hàng thành công - THQ Clothing')

@section('content')
<div class="min-h-screen flex flex-col">
    <!-- Main Content -->
    <div class="flex-1 px-4 md:px-8 py-24">
        <div class="text-center max-w-2xl mx-auto">
            <h1 class="text-2xl font-bold uppercase tracking-wider mb-4">ĐẶT HÀNG THÀNH CÔNG!</h1>
            <p class="text-lg mb-12">Đơn hàng #123456 đang chờ xác nhận</p>
            
            <a href="{{ route('orders.track') }}" class="bg-black text-white px-8 py-3 text-sm uppercase tracking-wider hover:bg-gray-800 transition-colors">
                THEO DÕI ĐƠN HÀNG
            </a>
        </div>
    </div>
</div>
@endsection
