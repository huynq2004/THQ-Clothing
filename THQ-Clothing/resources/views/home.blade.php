@extends('layouts.app')

@section('title', 'THQ Clothing - Thời trang nam cao cấp')

@section('content')
<style>
    .table-container {
        overflow-x: auto;
        margin: 20px 0;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 0 auto;
    }
    th, td {
        padding: 12px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #000;
        color: #fff;
        font-weight: bold;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
    .product-image {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 4px;
    }
    .category-badge {
        background-color: #e0e0e0;
        padding: 4px 8px;
        border-radius: 12px;
        font-size: 12px;
        color: #333;
    }
    .price {
        font-weight: bold;
        color: #e53e3e;
    }
    .description {
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .actions {
        display: flex;
        gap: 8px;
    }
    .btn {
        padding: 6px 12px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 12px;
        text-decoration: none;
        display: inline-block;
    }
    .btn-view {
        background-color: #3182ce;
        color: white;
    }
    .btn-cart {
        background-color: #38a169;
        color: white;
    }
    .btn-wishlist {
        background-color: #e53e3e;
        color: white;
    }
    .header-section {
        text-align: center;
        margin: 30px 0;
    }
    .header-section h1 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }
    .header-section p {
        font-size: 1.1rem;
        color: #666;
    }
</style>

<div class="container mx-auto px-4">
    <div class="header-section">
        <h1>THQ CLOTHING</h1>
        <p>Thời trang nam cao cấp - Chất lượng tạo nên phong cách</p>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Mã SP</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Hình ảnh</th>
                    <th>Danh mục</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                <tr>
                    <td>
                        <strong>{{ $product->code }}</strong>
                    </td>
                    <td>
                        <strong>{{ $product->name }}</strong>
                    </td>
                    <td class="price">
                        {{ number_format($product->price) }} VNĐ
                    </td>
                    <td class="description" title="{{ $product->description }}">
                        {{ $product->description ?: 'Chưa có mô tả' }}
                    </td>
                    <td>
                        @if($product->image)
                            <img src="{{ asset('assets/images/' . $product->image) }}" 
                                 alt="{{ $product->name }}" 
                                 class="product-image">
                        @else
                            <div class="product-image bg-gray-200 flex items-center justify-center">
                                <span class="text-gray-500 text-xs">No Image</span>
                            </div>
                        @endif
                    </td>
                    <td>
                        @if($product->category)
                            <span class="category-badge">{{ $product->category->name }}</span>
                        @else
                            <span class="category-badge">Chưa phân loại</span>
                        @endif
                    </td>
                    <td class="actions">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-view">
                            Xem chi tiết
                        </a>
                        <button class="btn btn-cart" onclick="addToCart({{ $product->id }})">
                            Thêm vào giỏ
                        </button>
                        <button class="btn btn-wishlist" onclick="addToWishlist({{ $product->id }})">
                            Yêu thích
                        </button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align: center; padding: 40px;">
                        <p class="text-gray-500">Không có sản phẩm nào</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<script>
function addToCart(productId) {
    alert('Đã thêm sản phẩm vào giỏ hàng!');
    // TODO: Implement add to cart functionality
}

function addToWishlist(productId) {
    alert('Đã thêm sản phẩm vào danh sách yêu thích!');
    // TODO: Implement add to wishlist functionality
}
</script>
@endsection
