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
                        <div id="confirmFullName" class="text-sm flex-1">-</div>
                    </div>
                    <div class="flex">
                        <label class="text-sm font-medium w-20">SĐT:</label>
                        <div id="confirmPhone" class="text-sm flex-1">-</div>
                    </div>
                    <div class="flex">
                        <label class="text-sm font-medium w-20">Email:</label>
                        <div id="confirmEmail" class="text-sm flex-1">-</div>
                    </div>
                </div>
                
                <!-- Right Column -->
                <div class="space-y-4">
                    <div class="flex">
                        <label class="text-sm font-medium w-32">Quận:</label>
                        <div id="confirmDistrict" class="bg-gray-200 px-3 py-1 text-sm flex-1">-</div>
                    </div>
                    <div class="flex">
                        <label class="text-sm font-medium w-32">Tỉnh/Thành phố:</label>
                        <div id="confirmCity" class="bg-gray-200 px-3 py-1 text-sm flex-1">-</div>
                    </div>
                    <div class="flex">
                        <label class="text-sm font-medium w-32">Địa chỉ cụ thể:</label>
                        <div id="confirmAddress" class="text-sm flex-1">-</div>
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
                <button id="backButton" class="text-sm uppercase tracking-wider underline hover:no-underline">QUAY LẠI</button>
                <div class="flex items-center space-x-4">
                    <label class="text-sm uppercase tracking-wider">MÃ KHUYẾN MẠI:</label>
                    <input type="text" id="confirmCouponCode" value="" class="border border-gray-300 px-3 py-2 text-sm w-32" readonly>
                </div>
            </div>
            <div class="flex items-center space-x-6">
                <span class="text-sm uppercase tracking-wider">TỔNG:</span>
                <span id="confirmTotal" class="text-lg">749.000 VND</span>
                <button id="confirmButton" class="bg-black text-white px-8 py-3 text-sm uppercase tracking-wider hover:bg-gray-800 transition-colors">
                    XÁC NHẬN
                </button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const backButton = document.getElementById('backButton');
    const confirmButton = document.getElementById('confirmButton');
    
    // Load form data from sessionStorage
    const formData = JSON.parse(sessionStorage.getItem('checkoutFormData') || '{}');
    
    // Populate confirmation fields
    if (formData.fullName) {
        document.getElementById('confirmFullName').textContent = formData.fullName;
    }
    if (formData.phone) {
        document.getElementById('confirmPhone').textContent = formData.phone;
    }
    if (formData.email) {
        document.getElementById('confirmEmail').textContent = formData.email;
    }
    if (formData.district) {
        const districtMap = {
            'quan-1': 'Quận 1',
            'quan-2': 'Quận 2',
            'quan-3': 'Quận 3'
        };
        document.getElementById('confirmDistrict').textContent = districtMap[formData.district] || formData.district;
    }
    if (formData.city) {
        const cityMap = {
            'ho-chi-minh': 'TP. Hồ Chí Minh',
            'ha-noi': 'Hà Nội',
            'da-nang': 'Đà Nẵng'
        };
        document.getElementById('confirmCity').textContent = cityMap[formData.city] || formData.city;
    }
    if (formData.address) {
        document.getElementById('confirmAddress').textContent = formData.address;
    }
    
    // Handle coupon code
    if (formData.couponCode) {
        document.getElementById('confirmCouponCode').value = formData.couponCode;
    }
    
    // Handle total amount
    let totalAmount = 749000;
    if (formData.discountApplied && formData.discountAmount) {
        totalAmount = totalAmount - formData.discountAmount;
        document.getElementById('confirmTotal').textContent = `${totalAmount.toLocaleString()} VND`;
        document.getElementById('confirmTotal').className = 'text-lg text-red-600 font-semibold';
    }
    
    // Back button functionality
    backButton.addEventListener('click', function() {
        window.history.back();
    });
    
    // Confirm button functionality
    confirmButton.addEventListener('click', function() {
        // Redirect to success page
        window.location.href = '{{ route("checkout.success") }}';
    });
});
</script>
@endsection
