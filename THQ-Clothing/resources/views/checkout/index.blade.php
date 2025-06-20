@extends('layouts.app')

@section('title', 'Thanh toán - THQ Clothing')

@section('content')
<!-- Breadcrumb -->
<div class="bg-gray-100 py-4">
    <div class="container mx-auto px-4">
        <nav class="text-sm">
            <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900">Trang chủ</a>
            <span class="mx-2 text-gray-400">/</span>
            <a href="{{ route('cart.index') }}" class="text-gray-600 hover:text-gray-900">Giỏ hàng</a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-gray-900">Thanh toán</span>
        </nav>
    </div>
</div>

<div class="container mx-auto px-4 py-8">
    <!-- Progress Steps -->
    <div class="mb-8">
        <div class="flex items-center justify-center space-x-4">
            <div class="flex items-center">
                <div class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center text-sm font-medium">
                    <i class="fas fa-check"></i>
                </div>
                <span class="ml-2 text-sm font-medium text-green-600">Giỏ hàng</span>
            </div>
            <div class="w-16 h-0.5 bg-green-500"></div>
            <div class="flex items-center">
                <div class="w-8 h-8 bg-blue-600 text-white rounded-full flex items-center justify-center text-sm font-medium">2</div>
                <span class="ml-2 text-sm font-medium text-blue-600">Thanh toán</span>
            </div>
            <div class="w-16 h-0.5 bg-gray-300"></div>
            <div class="flex items-center">
                <div class="w-8 h-8 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center text-sm font-medium">3</div>
                <span class="ml-2 text-sm font-medium text-gray-600">Hoàn thành</span>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Checkout Form -->
        <div class="lg:col-span-2">
            <form action="{{ route('checkout.process') }}" method="POST" class="space-y-8">
                @csrf
                
                <!-- Shipping Information -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-6">Thông tin giao hàng</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">Họ</label>
                            <input type="text" id="first_name" name="first_name" required
                                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Tên</label>
                            <input type="text" id="last_name" name="last_name" required
                                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="md:col-span-2">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" id="email" name="email" required
                                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="md:col-span-2">
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Số điện thoại</label>
                            <input type="tel" id="phone" name="phone" required
                                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div class="md:col-span-2">
                            <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Địa chỉ</label>
                            <input type="text" id="address" name="address" required
                                   class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700 mb-2">Thành phố</label>
                            <select id="city" name="city" required
                                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Chọn thành phố</option>
                                <option value="ho-chi-minh">TP. Hồ Chí Minh</option>
                                <option value="ha-noi">Hà Nội</option>
                                <option value="da-nang">Đà Nẵng</option>
                                <option value="can-tho">Cần Thơ</option>
                            </select>
                        </div>
                        <div>
                            <label for="district" class="block text-sm font-medium text-gray-700 mb-2">Quận/Huyện</label>
                            <select id="district" name="district" required
                                    class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Chọn quận/huyện</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Shipping Method -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-6">Phương thức vận chuyển</h2>
                    
                    <div class="space-y-4">
                        <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="shipping_method" value="standard" class="mr-4" checked>
                            <div class="flex-1">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h3 class="font-medium">Giao hàng tiêu chuẩn</h3>
                                        <p class="text-sm text-gray-600">3-5 ngày làm việc</p>
                                    </div>
                                    <span class="font-semibold">30.000đ</span>
                                </div>
                            </div>
                        </label>
                        
                        <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="shipping_method" value="express" class="mr-4">
                            <div class="flex-1">
                                <div class="flex justify-between items-center">
                                    <div>
                                        <h3 class="font-medium">Giao hàng nhanh</h3>
                                        <p class="text-sm text-gray-600">1-2 ngày làm việc</p>
                                    </div>
                                    <span class="font-semibold">50.000đ</span>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Payment Method -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-6">Phương thức thanh toán</h2>
                    
                    <div class="space-y-4">
                        <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment_method" value="cod" class="mr-4" checked>
                            <div class="flex items-center">
                                <i class="fas fa-money-bill-wave text-green-600 mr-3"></i>
                                <div>
                                    <h3 class="font-medium">Thanh toán khi nhận hàng (COD)</h3>
                                    <p class="text-sm text-gray-600">Thanh toán bằng tiền mặt khi nhận hàng</p>
                                </div>
                            </div>
                        </label>
                        
                        <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment_method" value="bank_transfer" class="mr-4">
                            <div class="flex items-center">
                                <i class="fas fa-university text-blue-600 mr-3"></i>
                                <div>
                                    <h3 class="font-medium">Chuyển khoản ngân hàng</h3>
                                    <p class="text-sm text-gray-600">Chuyển khoản qua ngân hàng</p>
                                </div>
                            </div>
                        </label>
                        
                        <label class="flex items-center p-4 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50">
                            <input type="radio" name="payment_method" value="momo" class="mr-4">
                            <div class="flex items-center">
                                <i class="fas fa-mobile-alt text-pink-600 mr-3"></i>
                                <div>
                                    <h3 class="font-medium">Ví MoMo</h3>
                                    <p class="text-sm text-gray-600">Thanh toán qua ví điện tử MoMo</p>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>

                <!-- Order Notes -->
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-xl font-semibold text-gray-900 mb-6">Ghi chú đơn hàng</h2>
                    <textarea name="notes" rows="4" placeholder="Ghi chú thêm cho đơn hàng (tùy chọn)"
                              class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
            </form>
        </div>

        <!-- Order Summary -->
        <div class="lg:col-span-1">
            <div class="bg-white rounded-lg shadow-md p-6 sticky top-24">
                <h2 class="text-xl font-semibold text-gray-900 mb-6">Đơn hàng của bạn</h2>
                
                <!-- Order Items -->
                <div class="space-y-4 mb-6">
                    @for($i = 1; $i <= 3; $i++)
                    <div class="flex items-center space-x-4">
                        <img src="/images/checkout-product-{{ $i }}.jpg" alt="Sản phẩm {{ $i }}" class="w-16 h-16 object-cover rounded">
                        <div class="flex-1">
                            <h3 class="font-medium text-gray-900">Áo sơ mi cao cấp {{ $i }}</h3>
                            <p class="text-sm text-gray-600">Màu: Trắng, Size: M</p>
                            <p class="text-sm text-gray-600">Số lượng: {{ $i }}</p>
                        </div>
                        <span class="font-semibold">{{ number_format(890000 * $i) }}đ</span>
                    </div>
                    @endfor
                </div>
                
                <!-- Order Totals -->
                <div class="space-y-3 border-t border-gray-200 pt-4">
                    <div class="flex justify-between">
                        <span class="text-gray-600">Tạm tính:</span>
                        <span class="font-semibold">{{ number_format(2670000) }}đ</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Phí vận chuyển:</span>
                        <span class="font-semibold">{{ number_format(30000) }}đ</span>
                    </div>
                    <div class="flex justify-between">
                        <span class="text-gray-600">Giảm giá:</span>
                        <span class="font-semibold text-red-600">-{{ number_format(200000) }}đ</span>
                    </div>
                    <hr class="border-gray-200">
                    <div class="flex justify-between text-lg font-bold">
                        <span>Tổng cộng:</span>
                        <span class="text-blue-600">{{ number_format(2500000) }}đ</span>
                    </div>
                </div>
                
                <!-- Place Order Button -->
                <button type="submit" form="checkout-form" 
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold transition-colors mt-6">
                    <i class="fas fa-lock mr-2"></i>Đặt hàng
                </button>
                
                <!-- Security Notice -->
                <div class="mt-4 text-center">
                    <p class="text-xs text-gray-500">
                        <i class="fas fa-shield-alt mr-1"></i>
                        Thông tin của bạn được bảo mật an toàn
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Add form ID to the form element
document.querySelector('form').id = 'checkout-form';
</script>
@endsection
