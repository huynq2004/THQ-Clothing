@extends('layouts.admin')

@section('title', 'Danh sách danh mục - THQ Admin')

@section('content')
<style>
    body {
        background-color: #f4f7fa;
    }
    .container-custom {
        padding: 2rem;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        max-width: 800px;
        margin: 2rem auto;
    }
    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
    }
    .header-title {
        display: flex;
        align-items: center;
        gap: 1rem;
    }
    .header-title a {
        background: #e9ecef;
        border-radius: 50%;
        width: 36px;
        height: 36px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        color: #333;
        font-size: 1.2rem;
    }
    .header-title h1 {
        font-size: 1.75rem;
        font-weight: 600;
        margin: 0;
    }
    .btn-add {
        background-color: #fff;
        color: #333;
        border: 1px solid #ccc;
        padding: 0.6rem 1.2rem;
        border-radius: 6px;
        font-size: 0.9rem;
        font-weight: 500;
        cursor: pointer;
        text-decoration: none;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 1rem;
        text-align: left;
        border-bottom: 1px solid #dee2e6;
    }
    th {
        background-color: #343a40;
        color: #fff;
        font-weight: 600;
    }
    td {
        background-color: #fff;
    }
    .action-btn {
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
    }
    .action-btn img {
        width: 20px;
        height: 20px;
    }

    /* Modal styles */
    .modal-overlay {
        position: fixed; top: 0; left: 0; width: 100%; height: 100%;
        background-color: rgba(0, 0, 0, 0.6); display: none;
        justify-content: center; align-items: center; z-index: 1000;
    }
    .modal-content {
        background: white; padding: 25px 30px; border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3); width: 100%;
        max-width: 480px; position: relative;
    }
    .modal-header { text-align: center; font-size: 22px; font-weight: 600; margin-bottom: 25px; }
    .modal-content .close-button {
        position: absolute; top: 12px; right: 12px; font-size: 24px; font-weight: 300;
        cursor: pointer; text-decoration: none; color: #aaa; background-color: #f0f0f0;
        border-radius: 50%; width: 28px; height: 28px; line-height: 28px; text-align: center;
    }
    .modal-body .form-group { margin-bottom: 15px; text-align: left; }
    .modal-body label { display: block; margin-bottom: 8px; font-size: 14px; }
    .modal-body input { width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
    .modal-footer { display: flex; justify-content: flex-end; gap: 10px; margin-top: 20px; }
    .modal-footer .btn {
        padding: 10px 25px; border-radius: 4px; font-size: 14px; cursor: pointer;
        text-decoration: none; border: 1px solid #ccc;
    }
    .btn-submit { background-color: #000; color: #fff; border-color: #000; }
    .btn-cancel { background-color: #fff; color: #000; }
    .error { color: #e53e3e; font-size: 12px; margin-top: 5px; }
    
    /* Delete & Success Modal Specifics */
    #delete-confirm-modal .modal-body {
        align-items: center; /* Vertically center icon and text */
    }
    .icon-question {
        width: 32px; height: 32px; flex-shrink: 0; display: flex; align-items: center;
        justify-content: center;
        background-color: #fff;
        border: 2px solid #000;
        border-radius: 50%;
        color: #000; font-size: 20px; font-weight: bold;
    }
    .modal-body .message p { margin: 0; font-size: 15px; line-height: 1.5; color: #333; text-align: left; }
    #success-modal .modal-body {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
        font-size: 16px;
    }
    .success-icon {
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #e8f5e9; /* Light green background */
        border-radius: 50%;
        color: #4caf50; /* Green checkmark */
        font-size: 16px;
        font-weight: bold;
        flex-shrink: 0;
    }
    #success-modal .modal-footer { justify-content: center; }
</style>

<div class="container-custom">
    <div class="header">
        <div class="header-title">
            <a href="{{ route('admin.products.index') }}">&larr;</a>
            <h1>DANH SÁCH DANH MỤC SẢN PHẨM</h1>
        </div>
        <button type="button" class="btn-add" id="add-category-btn">+ Thêm Danh Mục</button>
    </div>

    <table>
        <thead>
            <tr>
                <th>TÊN DANH MỤC</th>
                <th>SỐ LƯỢỢNG</th>
                <th>HÀNH ĐỘNG</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->products_count }}</td>
                <td>
                    <button type="button" class="action-btn delete-category-btn"
                            data-url="{{ route('admin.categories.destroy', $category->id) }}"
                            data-name="{{ $category->name }}">
                        <img src="{{ asset('assets/icons/product/faTrash.svg') }}" alt="Delete">
                    </button>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" style="text-align: center; padding: 20px;">Chưa có danh mục nào.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Add Category Modal -->
<div id="add-category-modal" class="modal-overlay @if($errors->any()) modal-show @endif">
    <div class="modal-content">
        <div class="modal-header">
            THÊM DANH MỤC MỚI
            <span class="close-button">&times;</span>
        </div>
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Tên danh mục*:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Nhập tên danh mục">
                    @error('name')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-cancel">HUỶ BỎ</button>
                <button type="submit" class="btn btn-submit">THÊM</button>
            </div>
        </form>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div id="delete-confirm-modal" class="modal-overlay">
    <div class="modal-content">
        <div class="modal-header">XÁC NHẬN XÓA DANH MỤC</div>
        <span class="close-button">&times;</span>
        <div class="modal-body">
            <div class="icon-question">?</div>
            <div class="message">
                <p id="delete-confirm-message">Bạn có chắc chắn muốn xóa danh mục này không?</p>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-cancel">Hủy bỏ</button>
            <form id="delete-category-form" action="" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-submit">Xóa</button>
            </form>
        </div>
    </div>
</div>

<!-- Success Modal -->
@if(session('success'))
<div id="success-modal" class="modal-overlay" style="display: flex;">
    <div class="modal-content">
        <div class="modal-header">THÔNG BÁO</div>
        <span class="close-button">&times;</span>
        <div class="modal-body">
            <div class="success-icon">&#10003;</div>
            <span>{{ session('success') }}</span>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-submit">OK</button>
        </div>
    </div>
</div>
@endif

<script>
document.addEventListener('DOMContentLoaded', function() {
    const addModal = document.getElementById('add-category-modal');
    const addBtn = document.getElementById('add-category-btn');
    
    if (addModal) {
        const cancelBtn = addModal.querySelector('.btn-cancel');
        const closeBtn = addModal.querySelector('.close-button');

        addBtn.addEventListener('click', () => { addModal.style.display = 'flex'; });
        cancelBtn.addEventListener('click', () => { addModal.style.display = 'none'; });
        closeBtn.addEventListener('click', () => { addModal.style.display = 'none'; });
        addModal.addEventListener('click', e => {
            if (e.target === addModal) { addModal.style.display = 'none'; }
        });

        // Handle re-displaying modal on validation error
        @if($errors->any())
            addModal.style.display = 'flex';
        @endif
    }

    // Delete confirmation modal
    const deleteModal = document.getElementById('delete-confirm-modal');
    if (deleteModal) {
        const deleteForm = document.getElementById('delete-category-form');
        const cancelBtn = deleteModal.querySelector('.btn-cancel');
        const closeBtn = deleteModal.querySelector('.close-button');

        const deleteConfirmMessage = document.getElementById('delete-confirm-message');

        document.querySelectorAll('.delete-category-btn').forEach(button => {
            button.addEventListener('click', function() {
                const url = this.dataset.url;
                const name = this.dataset.name;
                deleteForm.action = url;
                deleteConfirmMessage.textContent = `Bạn có chắc chắn muốn xóa danh mục ${name} không?`;
                deleteModal.style.display = 'flex';
            });
        });

        const closeDeleteModal = () => { deleteModal.style.display = 'none'; };
        cancelBtn.addEventListener('click', closeDeleteModal);
        closeBtn.addEventListener('click', closeDeleteModal);
        deleteModal.addEventListener('click', e => {
            if (e.target === deleteModal) { closeDeleteModal(); }
        });
    }

    // Success modal closing on outside click
    const successModal = document.getElementById('success-modal');
    if (successModal) {
        const okButton = successModal.querySelector('.btn-submit');
        const closeButton = successModal.querySelector('.close-button');

        const closeSuccessModal = () => {
            successModal.style.display = 'none';
        };

        okButton.addEventListener('click', closeSuccessModal);
        closeButton.addEventListener('click', closeSuccessModal);
        // Also allow closing by clicking OK (as it's the only action)
        successModal.addEventListener('click', e => {
            if (e.target === successModal || e.target === okButton) {
                closeSuccessModal();
            }
        });

         // Make sure OK button works even if a form is around it
        okButton.onclick = function() {
            successModal.style.display = 'none';
        };
    }
});
</script>
<style>
    /* This style is no longer needed as display is handled by inline style and JS */
    /* .modal-show { display: flex !important; } */
</style>
@endsection