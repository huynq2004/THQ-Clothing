@extends('layouts.app')

@section('title', 'Sản phẩm - THQ Clothing')

@section('content')
<!-- Breadcrumb -->
<div class="bg-gray-100 py-4">
    <div class="container mx-auto px-4">
        <nav class="text-sm">
            <a href="{{ route('home') }}" class="text-gray-600 hover:text-gray-900">Trang chủ</a>
            <span class="mx-2 text-gray-400">/</span>
            <span class="text-gray-900">Sản phẩm</span>
        </nav>
    </div>
</div>

<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Sidebar Filters -->
        <div class="lg:w-1/4">
            <div class="bg-white rounded-lg shadow-md p-6 sticky top-24">
                <h3 class="text-lg font-semibold mb-4">Bộ lọc sản phẩm</h3>
                
                <!-- Category Filter -->
                <div class="mb-6">
                    <h4 class="font-medium mb-3">Danh mục</h4>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2" name="category" value="ao-thun">
                            <span class="text-sm">Áo thun</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2" name="category" value="ao-so-mi">
                            <span class="text-sm">Áo sơ mi</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2" name="category" value="quan-jean">
                            <span class="text-sm">Quần jean</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2" name="category" value="quan-tay">
                            <span class="text-sm">Quần tây</span>
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" class="mr-2" name="category" value="phu-kien">
                            <span class="text-sm">Phụ kiện</span>
                        </label>
                    </div>
                </div>
                
                <!-- Price Filter -->
                <div class="mb-6">
                    <h4 class="font-medium mb-3">Khoảng giá</h4>
                    <div class="space-y-2">
                        <label class="flex items-center">
                            <input type="radio" class="mr-2" name="price" value="0-500000">
                            <span class="text-sm">Dưới 500.000đ</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" class="mr-2" name="price" value="500000-1000000">
                            <span class="text-sm">500.000đ - 1.000.000đ</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" class="mr-2" name="price" value="1000000-2000000">
                            <span class="text-sm">1.000.000đ - 2.000.000đ</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" class="mr-2" name="price" value="2000000+">
                            <span class="text-sm">Trên 2.000.000đ</span>
                        </label>
                    </div>
                </div>
                
                <!-- Size Filter -->
                <div class="mb-6">
                    <h4 class="font-medium mb-3">Kích thước</h4>
                    <div class="flex flex-wrap gap-2">
                        <label class="border border-gray-300 rounded px-3 py-1 text-sm cursor-pointer hover:bg-gray-50">
                            <input type="checkbox" class="hidden" name="size" value="S">
                            S
                        </label>
                        <label class="border border-gray-300 rounded px-3 py-1 text-sm cursor-pointer hover:bg-gray-50">
                            <input type="checkbox" class="hidden" name="size" value="M">
                            M
                        </label>
                        <label class="border border-gray-300 rounded px-3 py-1 text-sm cursor-pointer hover:bg-gray-50">
                            <input type="checkbox" class="hidden" name="size" value="L">
                            L
                        </label>
                        <label class="border border-gray-300 rounded px-3 py-1 text-sm cursor-pointer hover:bg-gray-50">
                            <input type="checkbox" class="hidden" name="size" value="XL">
                            XL
                        </label>
                        <label class="border border-gray-300 rounded px-3 py-1 text-sm cursor-pointer hover:bg-gray-50">
                            <input type="checkbox" class="hidden" name="size" value="XXL">
                            XXL
                        </label>
                    </div>
                </div>
                
                <!-- Color Filter -->
                <div class="mb-6">
                    <h4 class="font-medium mb-3">Màu sắc</h4>
                    <div class="flex flex-wrap gap-2">
                        <div class="w-8 h-8 bg-black rounded-full cursor-pointer border-2 border-gray-300 hover:border-gray-500"></div>
                        <div class="w-8 h-8 bg-white rounded-full cursor-pointer border-2 border-gray-300 hover:border-gray-500"></div>
                        <div class="w-8 h-8 bg-blue-600 rounded-full cursor-pointer border-2 border-gray-300 hover:border-gray-500"></div>
                        <div class="w-8 h-8 bg-red-600 rounded-full cursor-pointer border-2 border-gray-300 hover:border-gray-500"></div>
                        <div class="w-8 h-8 bg-green-600 rounded-full cursor-pointer border-2 border-gray-300 hover:border-gray-500"></div>
                    </div>
                </div>
                
                <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-medium transition-colors">
                    Áp dụng bộ lọc
                </button>
            </div>
        </div>
        
        <!-- Products Grid -->
        <div class="lg:w-3/4">
            <!-- Sort & View Options -->
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center space-x-4">
                    <span class="text-gray-600">Hiển thị 1-12 của 48 sản phẩm</span>
                </div>
                <div class="flex items-center space-x-4">
                    <select class="border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Sắp xếp theo</option>
                        <option>Giá: Thấp đến cao</option>
                        <option>Giá: Cao đến thấp</option>
                        <option>Tên: A-Z</option>
                        <option>Mới nhất</option>
                    </select>
                    <div class="flex border border-gray-300 rounded">
                        <button class="px-3 py-2 bg-blue-600 text-white">
                            <i class="fas fa-th"></i>
                        </button>
                        <button class="px-3 py-2 hover:bg-gray-50">
                            <i class="fas fa-list"></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Products Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @for($i = 1; $i <= 12; $i++)
                <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow overflow-hidden group">
                    <div class="relative">
                        <img src="/images/product-{{ $i }}.jpg" alt="Sản phẩm {{ $i }}" class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute top-2 right-2">
                            <span class="bg-red-500 text-white px-2 py-1 rounded text-sm">-{{ rand(10, 30) }}%</span>
                        </div>
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center">
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 space-x-2">
                                <button class="bg-white text-gray-900 p-2 rounded-full hover:bg-gray-100">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <button class="bg-white text-gray-900 p-2 rounded-full hover:bg-gray-100">
                                    <i class="fas fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-900 mb-2">Áo sơ mi cao cấp {{ $i }}</h3>
                        <p class="text-gray-600 text-sm mb-3">Chất liệu cotton cao cấp, thiết kế hiện đại</p>
                        <div class="flex items-center justify-between mb-3">
                            <div class="flex items-center space-x-2">
                                <span class="text-lg font-bold text-red-600">{{ number_format(rand(500000, 1500000)) }}đ</span>
                                <span class="text-sm text-gray-500 line-through">{{ number_format(rand(600000, 2000000)) }}đ</span>
                            </div>
                            <div class="flex text-yellow-400">
                                @for($j = 1; $j <= 5; $j++)
                                    <i class="fas fa-star text-xs"></i>
                                @endfor
                            </div>
                        </div>
                        <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-medium transition-colors">
                            <i class="fas fa-cart-plus mr-2"></i>Thêm vào giỏ
                        </button>
                    </div>
                </div>
                @endfor
            </div>
            
            <!-- Pagination -->
            <div class="flex justify-center mt-8">
                <nav class="flex space-x-2">
                    <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">Trước</button>
                    <button class="px-3 py-2 bg-blue-600 text-white rounded">1</button>
                    <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">2</button>
                    <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">3</button>
                    <button class="px-3 py-2 border border-gray-300 rounded hover:bg-gray-50">Sau</button>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
