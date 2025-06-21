@extends('layouts.admin')

@section('title', 'Thêm Sản phẩm mới')

@section('content')
<style>
    .form-container {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        max-width: 700px;
        margin: 20px auto;
    }
    .form-header {
        font-size: 24px;
        font-weight: 600;
        text-align: center;
        margin-bottom: 20px;
        color: #333;
        padding-bottom: 15px;
        border-bottom: 1px solid #eee;
    }
    .form-section-title {
        font-size: 16px;
        font-weight: 600;
        color: #555;
        margin-top: 20px;
        margin-bottom: 15px;
        padding-bottom: 5px;
        border-bottom: 1px solid #e0e0e0;
    }
    .form-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px 25px;
    }
    .form-group {
        display: grid;
        grid-template-columns: 90px 1fr;
        gap: 15px;
        align-items: center;
    }
    .form-group label, .form-group-full label {
        text-align: right;
        font-weight: 500;
        color: #333;
    }
    .form-group input, .form-group select, .form-group textarea, .form-group-full input, .form-group-full select, .form-group-full textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
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
    .form-group textarea {
        height: 125px;
        resize: vertical;
    }
    .form-footer {
        display: flex;
        justify-content: flex-end;
        margin-top: 30px;
        gap: 10px;
    }
    .btn {
        padding: 10px 25px;
        border-radius: 5px;
        border: 1px solid #ccc;
        cursor: pointer;
        font-weight: 500;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }
    .btn-submit {
        background-color: #000;
        color: #fff;
        border-color: #000;
    }
    .btn-cancel {
        background-color: #f1f1f1;
        color: #000;
    }
    .image-preview {
        width: 100px;
        height: 100px;
        object-fit: cover;
        border: 1px solid #ddd;
        margin-top: 10px;
        border-radius: 4px;
    }
    .error-message {
        color: #e53e3e;
        font-size: 12px;
        margin-top: 5px;
    }
</style>

<div class="form-container">
    <div class="form-header">THÊM SẢN PHẨM MỚI</div>
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-section-title">THÔNG TIN SẢN PHẨM</div>
        <div class="form-grid">
            <div class="form-group"><label>Mã*</label><div><input type="text" name="code" value="{{ old('code') }}" required>@error('code')<div class="error-message">{{ $message }}</div>@enderror</div></div>
            <div class="form-group"><label>Tên sản phẩm*</label><div><input type="text" name="name" value="{{ old('name') }}" required>@error('name')<div class="error-message">{{ $message }}</div>@enderror</div></div>
            <div class="form-group"><label>Giá*</label><div><input type="number" name="price" value="{{ old('price') }}" required>@error('price')<div class="error-message">{{ $message }}</div>@enderror</div></div>
            <div class="form-group"><label>Chất liệu*</label><div><input type="text" name="material" value="{{ old('material') }}" required>@error('material')<div class="error-message">{{ $message }}</div>@enderror</div></div>
        </div>

        <div class="form-section-title">MÔ TẢ VÀ PHÂN LOẠI</div>
        <div class="form-grid">
            <div class="form-group">
                <label>Danh mục</label>
                <select name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group description-group">
                <label>Mô tả</label>
                <textarea name="description">{{ old('description') }}</textarea>
            </div>
            <div class="form-group" style="align-items: start;">
                <label style="padding-top: 10px;">Hình ảnh</label>
                <div>
                    <input type="file" name="image" id="image-input" accept="image/*">
                    @error('image')<div class="error-message">{{ $message }}</div>@enderror
                    <div id="image-preview-container" style="margin-top: 10px;"></div>
                </div>
            </div>
        </div>

        <div class="form-footer">
            <a href="{{ route('admin.products.index') }}" class="btn btn-cancel">HỦY BỎ</a>
            <button type="submit" class="btn btn-submit">THÊM MỚI</button>
        </div>
    </form>
</div>

<script>
document.getElementById('image-input').addEventListener('change', function() {
    const previewContainer = document.getElementById('image-preview-container');
    previewContainer.innerHTML = '';
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.classList.add('image-preview');
            previewContainer.appendChild(img);
        }
        reader.readAsDataURL(file);
    }
});
</script>
@endsection 