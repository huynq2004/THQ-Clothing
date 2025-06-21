@extends('layouts.admin')

@section('title', 'Quản lý Sản phẩm')

@section('content')
<style>
    /* General Styles */
    .admin-container { padding: 10px 30px; }
    .admin-header-actions { display: flex; justify-content: flex-end; align-items: center; margin-bottom: 20px; gap: 15px; }
    .admin-header-actions .btn { display: inline-flex; align-items: center; gap: 8px; padding: 10px 20px; border: 1px solid #ccc; border-radius: 6px; text-decoration: none; font-weight: 500; font-size: 14px; background-color: #fff; color: #000; cursor: pointer; }
    
    /* Table Styles */
    .table-wrapper { width: 100%; overflow-x: auto; }
    .product-table { width: 100%; border-collapse: collapse; min-width: 900px; }
    .product-table th, .product-table td { padding: 18px 15px; text-align: left; vertical-align: middle; }
    .product-table thead { background-color: #000; color: #fff; }
    .product-table th { font-weight: 600; text-transform: uppercase; font-size: 13px; }
    .product-table tbody tr { border-bottom: 1px solid #e0e0e0; }
    .product-table td img.product-image { width: 60px; height: 60px; object-fit: cover; border-radius: 4px; }
    .product-table td.description-col { max-width: 250px; word-break: break-word; }
    .category-badge { display: inline-block; padding: 5px 12px; background-color: #e9ecef; border-radius: 5px; font-size: 13px; font-weight: 500; }
    .action-icons { display: flex; align-items: center; gap: 20px; }
    .action-icons a, .action-icons button { background: none; border: none; cursor: pointer; padding: 0; }
    .action-icons img { width: 15px; height: 15px; }

    /* Modal Styles */
    .modal-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.6); display: none; align-items: center; justify-content: center; z-index: 1000; }
    .modal-content { background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 5px 15px rgba(0,0,0,0.3); width: 750px; max-width: 90%; position: relative; }
    .modal-header { font-size: 24px; font-weight: 600; text-align: center; margin-bottom: 20px; color: #333; padding-bottom: 15px; border-bottom: 1px solid #eee; }
    .close-button { position: absolute; top: 15px; right: 15px; font-size: 28px; font-weight: bold; color: #888; cursor: pointer; line-height: 1; }
    .form-section-title { font-size: 16px; font-weight: 600; color: #555; margin-top: 20px; margin-bottom: 15px; padding-bottom: 5px; border-bottom: 1px solid #e0e0e0; }
    
    .form-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 15px 25px; }
    .form-group {
        display: grid;
        grid-template-columns: 90px 1fr;
        gap: 15px;
        align-items: center;
    }
    .form-group label {
        text-align: right;
        font-weight: 500;
        color: #333;
    }
    .form-group input, .form-group select, .form-group textarea { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; }
    
    .description-group {
        grid-column: 2 / 3;
        grid-row: 1 / span 2;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        gap: 8px;
    }
    .description-group label {
        text-align: left;
    }
    .form-group textarea { height: 125px; resize: vertical; }

    .modal-footer { display: flex; justify-content: flex-end; margin-top: 30px; gap: 10px; }
    .btn-cancel, .btn-submit { padding: 10px 25px; border-radius: 5px; border: 1px solid #ccc; cursor: pointer; font-weight: 500; }
    .btn-submit { background-color: #000; color: #fff; border-color: #000; }
    .btn-cancel { background-color: #fff; color: #000; }
    .error { color: #e53e3e; font-size: 12px; margin-top: 5px; grid-column: 2 / 3; }
    .image-preview { width: 80px; height: 80px; object-fit: cover; border-radius: 4px; border: 1px solid #ddd; cursor: pointer; }

    /* Success Modal Styles */
    .success-modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 1050; /* Higher than other modals */
    }
    .success-modal-content {
        background-color: #fff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        width: 400px;
        text-align: center;
        position: relative;
    }
    .success-modal-header {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 20px;
        color: #333;
    }
    .success-modal-body {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
        font-size: 16px;
        color: #555;
        margin-bottom: 25px;
    }
    .success-modal-body .checkmark {
        width: 24px;
        height: 24px;
        color: #28a745;
    }
    .success-modal-footer .btn-ok {
        padding: 10px 40px;
        background-color: #000;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }
</style>

<div class="admin-container">
    <div class="admin-header-actions">
        <a href="{{ route('admin.products.create') }}" class="btn">+ THÊM SẢN PHẨM MỚI</a>
        <a href="{{ route('admin.categories.index') }}" class="btn">DANH MỤC</a>
    </div>

    <div class="table-wrapper">
        <table class="product-table">
            <thead>
                <tr>
                    <th>Mã</th><th>Tên</th><th>Giá</th><th class="description-col">Mô tả</th><th>Hình ảnh</th><th>Danh mục</th><th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                <tr>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ number_format($product->price, 0, ',', '.') }}</td>
                    <td class="description-col">{{ $product->description }}</td>
                    <td>@if($product->image)<img src="{{ asset('assets/images/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">@endif</td>
                    <td>@if($product->category)<span class="category-badge">{{ $product->category->name }}</span>@endif</td>
                    <td class="action-icons">
                        <a href="{{ route('admin.products.edit', $product->id) }}" class="edit-btn">
                            <img src="{{ asset('assets/icons/product/edit.svg') }}" alt="Edit">
                        </a>
                        <button type="button" class="delete-btn" data-id="{{ $product->id }}">
                            <img src="{{ asset('assets/icons/product/faTrash.svg') }}" alt="Delete">
                        </button>
                        <a href="{{ route('admin.products.show', $product->id) }}"><img src="{{ asset('assets/icons/product/qrcode.svg') }}" alt="QR Code"></a>
                    </td>
                </tr>
                @empty
                <tr><td colspan="7" style="text-align: center; padding: 20px;">Không có sản phẩm nào.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@include('admin.products.partials._success_modal')
@include('admin.products.partials._delete_modal')

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Delete confirmation
    const deleteButtons = document.querySelectorAll('.delete-btn');
    const confirmDeleteModal = document.getElementById('confirm-delete-modal');
    const cancelDeleteBtn = document.getElementById('cancel-delete-btn');
    const deleteForm = document.getElementById('delete-form');
    const deleteModalCloseBtn = confirmDeleteModal.querySelector('.close-button');

    deleteButtons.forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.dataset.id;
            deleteForm.action = `/admin/products/${productId}`;
            confirmDeleteModal.style.display = 'flex';
        });
    });

    cancelDeleteBtn.addEventListener('click', () => {
        confirmDeleteModal.style.display = 'none';
    });

    deleteModalCloseBtn.addEventListener('click', () => {
        confirmDeleteModal.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target == confirmDeleteModal) {
            confirmDeleteModal.style.display = 'none';
        }
    });

    // Success Modal Logic
    const successModal = document.getElementById('success-modal');
    if (successModal) {
        const successOkBtn = document.getElementById('success-ok-btn');
        successOkBtn.addEventListener('click', () => {
            successModal.style.display = 'none';
        });
        window.addEventListener('click', (event) => {
            if (event.target == successModal) {
                successModal.style.display = 'none';
            }
        });
    }
});
</script>
@endsection
