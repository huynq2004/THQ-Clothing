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
                        <input type="text" id="fullName" class="w-full border border-gray-300 px-3 py-2 focus:outline-none focus:border-black" required>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">SĐT:</label>
                        <input type="tel" id="phone" class="w-full border border-gray-300 px-3 py-2 focus:outline-none focus:border-black" required>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Email:</label>
                        <input type="email" id="email" class="w-full border border-gray-300 px-3 py-2 focus:outline-none focus:border-black" required>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Quận:</label>
                        <select id="district" class="w-full border border-gray-300 px-3 py-2 focus:outline-none focus:border-black bg-white" required>
                            <option value="">Chọn quận</option>
                            <option value="quan-1">Quận 1</option>
                            <option value="quan-2">Quận 2</option>
                            <option value="quan-3">Quận 3</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Tỉnh/Thành phố:</label>
                        <select id="city" class="w-full border border-gray-300 px-3 py-2 focus:outline-none focus:border-black bg-white" required>
                            <option value="">Chọn Tỉnh/Thành phố</option>
                            <option value="ho-chi-minh">TP. Hồ Chí Minh</option>
                            <option value="ha-noi">Hà Nội</option>
                            <option value="da-nang">Đà Nẵng</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium mb-2">Địa chỉ cụ thể:</label>
                        <input type="text" id="address" class="w-full border border-gray-300 px-3 py-2 focus:outline-none focus:border-black" required>
                    </div>
                </div>
                
                <!-- Right Side - Coupon Section -->
                <div class="flex items-center justify-center h-full">
                    <div class="w-full max-w-sm">
                        <label class="block text-sm font-medium mb-2">MÃ KHUYẾN MẠI:</label>
                        <div class="flex">
                            <input type="text" id="couponCode" class="flex-1 border border-gray-300 px-3 py-2 focus:outline-none focus:border-black" placeholder="Nhập mã khuyến mại">
                            <button type="button" id="applyCoupon" class="bg-gray-400 text-white px-6 py-2 text-sm uppercase tracking-wider hover:bg-gray-500">APPLY</button>
                        </div>
                        <div id="couponMessage" class="mt-2 text-sm hidden"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bottom Section -->
    <div class="bg-gray-100 px-6 py-6" style="background-color: #F7F7F7;">
        <div class="flex items-center justify-between">
            <button id="backButton" class="text-sm uppercase tracking-wider underline hover:no-underline">QUAY LẠI</button>
            <div class="flex items-center space-x-6">
                <span class="text-sm uppercase tracking-wider">TỔNG:</span>
                <span id="totalAmount" class="text-lg">749.000 VND</span>
                <button id="continueButton" class="bg-black text-white px-8 py-3 text-sm uppercase tracking-wider hover:bg-gray-800 transition-colors disabled:bg-gray-400 disabled:cursor-not-allowed" disabled>
                    TIẾP TỤC
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Discount Unavailable Modal -->
<div id="discountModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="notification-box">
        <div class="header">
            Thông báo
        </div>
        <div class="close" id="closeModal">x</div>
        <div class="message">
            Mã khuyến mại không tồn tại hoặc không hợp lệ.
        </div>
    </div>
</div>

<style>
.notification-box {
    background-color: white;
    border: 1px solid #999;
    box-shadow: none;
    border-radius: 0;
    width: 450px;
    padding: 20px;
    position: relative;
}
.notification-box .header {
    font-weight: bold;
    text-align: center;
    position: relative;
    margin-bottom: 15px;
}
.notification-box .header::after {
    content: "";
    display: block;
    width: calc(100% + 40px);
    border-bottom: 1px solid #ccc;
    margin-top: 15px;
    position: relative;
    left: -20px;
}
.notification-box .close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-weight: bold;
    cursor: pointer;
}
.notification-box .message {
    text-align: center;
    font-size: 14px;
    margin-top: 0;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const backButton = document.getElementById('backButton');
    const continueButton = document.getElementById('continueButton');
    const applyCoupon = document.getElementById('applyCoupon');
    const couponCode = document.getElementById('couponCode');
    const couponMessage = document.getElementById('couponMessage');
    const totalAmount = document.getElementById('totalAmount');
    const discountModal = document.getElementById('discountModal');
    const closeModal = document.getElementById('closeModal');
    
    // Form validation
    const requiredFields = ['fullName', 'phone', 'email', 'district', 'city', 'address'];
    let discountApplied = false;
    let discountAmount = 0;
    
    // Check form validity
    function checkFormValidity() {
        const isValid = requiredFields.every(fieldId => {
            const field = document.getElementById(fieldId);
            return field.value.trim() !== '';
        });
        
        continueButton.disabled = !isValid;
        return isValid;
    }
    
    // Add event listeners to required fields
    requiredFields.forEach(fieldId => {
        const field = document.getElementById(fieldId);
        field.addEventListener('input', checkFormValidity);
        field.addEventListener('change', checkFormValidity);
    });
    
    // Back button functionality
    backButton.addEventListener('click', function() {
        window.history.back();
    });
    
    // Continue button functionality
    continueButton.addEventListener('click', function() {
        if (checkFormValidity()) {
            // Store form data in sessionStorage for next page
            const formData = {
                fullName: document.getElementById('fullName').value,
                phone: document.getElementById('phone').value,
                email: document.getElementById('email').value,
                district: document.getElementById('district').value,
                city: document.getElementById('city').value,
                address: document.getElementById('address').value,
                couponCode: couponCode.value,
                discountApplied: discountApplied,
                discountAmount: discountAmount
            };
            sessionStorage.setItem('checkoutFormData', JSON.stringify(formData));
            
            // Redirect to confirm page
            window.location.href = '{{ route("checkout.confirm") }}';
        }
    });
    
    // Coupon functionality
    applyCoupon.addEventListener('click', function() {
        const code = couponCode.value.trim().toUpperCase();
        
        if (code === 'ABC10') {
            // Show modal for invalid coupon
            discountModal.classList.remove('hidden');
            couponMessage.classList.add('hidden');
        } else if (code === 'SUMMER10') {
            // Apply valid discount
            discountApplied = true;
            discountAmount = 49000;
            const originalTotal = 749000;
            const newTotal = originalTotal - discountAmount;
            
            // Show discount message
            couponMessage.textContent = `-${discountAmount.toLocaleString()} VND`;
            couponMessage.className = 'mt-2 text-sm text-red-600 font-semibold';
            couponMessage.classList.remove('hidden');
            
            // Update total
            totalAmount.textContent = `${newTotal.toLocaleString()} VND`;
            totalAmount.className = 'text-lg text-red-600 font-semibold';
            
            // Disable coupon input
            couponCode.disabled = true;
            applyCoupon.disabled = true;
        } else {
            // Show modal for invalid coupon
            discountModal.classList.remove('hidden');
            couponMessage.classList.add('hidden');
        }
    });
    
    // Close modal functionality
    function closeModalFunction() {
        discountModal.classList.add('hidden');
    }
    
    closeModal.addEventListener('click', closeModalFunction);
    
    // Close modal when clicking outside
    discountModal.addEventListener('click', function(e) {
        if (e.target === discountModal) {
            closeModalFunction();
        }
    });
    
    // Initial form validation
    checkFormValidity();
});
</script>
@endsection
