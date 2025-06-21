@extends('layouts.admin')

@section('title', 'Quản lý sản phẩm - THQ Admin')

@section('content')
<style>
    .table-container {
        overflow-x: auto;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 0 auto;
        margin-top: 10px;
    }
    th, td {
        padding: 10px;
        text-align: center;
        border-bottom: 1px solid #ccc;
    }
    th {
        background-color: #000;
        color: #fff;
    }
    td {
        background-color: #f9f9f9;
    }
    .actions img {
        cursor: pointer;
        margin: 0 2px;
        width: 14px;
        height: 14px;
        display: inline;
        vertical-align: middle;
    }
    .category {
        background-color: #e0e0e0;
        display: inline-block;
        padding: 5px 10px;
        border-radius: 5px;
    }
    .footer {
        text-align: right;
        padding: 10px;
    }
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
    }
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 2px solid #e4e4e4;
        width: 500px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .modal header {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .modal .section {
        margin-bottom: 20px;
        padding: 10px;
        border: 2px solid #e4e4e4;
    }
    .modal .section h2 {
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 10px;
    }
    .modal .row {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }
    .modal .row label {
        flex: 0 0 25%;
        font-size: 12px;
        margin-right: 10px;
    }
    .modal .row input,
    .modal .row select,
    .modal .row textarea {
        flex: 1;
    }
    .modal .row input[type="file"] {
        flex: initial;
    }
    .modal .row input,
    .modal .row select,
    .modal .row textarea {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 12px;
    }
    .modal footer {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }
    .modal footer button {
        padding: 8px 16px;
        border: none;
        border-radius: 4px;
        font-size: 12px;
        cursor: pointer;
    }
    .modal footer button.primary {
        background-color: #000;
        color: #fff;
    }
    .modal footer button.secondary {
        background-color: #e4e4e4;
    }
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }
    .close:hover {
        color: #000;
    }
</style>

<div class="px-4 md:px-8 py-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold">Quản lý sản phẩm</h1>
        <div class="flex space-x-4">
            <button onclick="openModal()" class="bg-black text-white px-4 py-2 rounded hover:bg-gray-800">
                + Thêm sản phẩm mới
            </button>
            <button class="bg-gray-200 text-black px-4 py-2 rounded hover:bg-gray-300">
                Danh mục
            </button>
        </div>
    </div>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Mã</th>
                    <th>Tên</th>
                    <th>Giá</th>
                    <th>Mô tả</th>
                    <th>Hình ảnh</th>
                    <th>Danh mục</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>SP1</td>
                    <td>Áo phông hot THQ</td>
                    <td>119.000</td>
                    <td>Áo mùa hè</td>
                    <td><img src="{{ asset('assets/images/product/1.jpg') }}" alt="Áo mùa hè" class="w-16 h-16 object-cover"></td>
                    <td><span class="category">Áo</span></td>
                    <td class="actions">
                        <img src="/assets/icons/product/edit.svg" alt="Edit" style="cursor: pointer;">
                        <img src="/assets/icons/product/faTrash.svg" alt="Delete" style="cursor: pointer;">
                        <img src="/assets/icons/product/qrcode.svg" alt="Category" style="cursor: pointer;">
                    </td>
                </tr>
                <tr>
                    <td>SP2</td>
                    <td>Quần kaki be THQ</td>
                    <td>779.000</td>
                    <td>Quần co dãn cao cấp</td>
                    <td><img src="{{ asset('assets/images/product/2.jpg') }}" alt="Quần co dãn cao cấp" class="w-16 h-16 object-cover"></td>
                    <td><span class="category">Quần</span></td>
                    <td class="actions">
                        <img src="/assets/icons/product/edit.svg" alt="Edit" style="cursor: pointer;">
                        <img src="/assets/icons/product/faTrash.svg" alt="Delete" style="cursor: pointer;">
                        <img src="/assets/icons/product/qrcode.svg" alt="Category" style="cursor: pointer;">
                    </td>
                </tr>
                <tr>
                    <td>SP3</td>
                    <td>Áo sơ mi THQ be</td>
                    <td>599.000</td>
                    <td>Áo mát mẻ thoáng khí</td>
                    <td><img src="{{ asset('assets/images/product/3.jpg') }}" alt="Áo mát mẻ thoáng khí" class="w-16 h-16 object-cover"></td>
                    <td><span class="category">Áo</span></td>
                    <td class="actions">
                        <img src="/assets/icons/product/edit.svg" alt="Edit" style="cursor: pointer;">
                        <img src="/assets/icons/product/faTrash.svg" alt="Delete" style="cursor: pointer;">
                        <img src="/assets/icons/product/qrcode.svg" alt="Category" style="cursor: pointer;">
                    </td>
                </tr>
                <tr>
                    <td>SP4</td>
                    <td>Ví da nam màu mới</td>
                    <td>499.000</td>
                    <td>Ví da nam da bò đen</td>
                    <td><img src="{{ asset('assets/images/product/4.jpg') }}" alt="Ví da nam da bò đen" class="w-16 h-16 object-cover"></td>
                    <td><span class="category">Phụ kiện</span></td>
                    <td class="actions">
                        <img src="/assets/icons/product/edit.svg" alt="Edit" style="cursor: pointer;">
                        <img src="/assets/icons/product/faTrash.svg" alt="Delete" style="cursor: pointer;">
                        <img src="/assets/icons/product/qrcode.svg" alt="Category" style="cursor: pointer;">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="footer">
        <span>&lt; 1/10 &gt;</span>
    </div>
</div>

<!-- Modal -->
<div id="createModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        @include('admin.products._create_form')
    </div>
</div>

<script>
function openModal() {
    document.getElementById('createModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('createModal').style.display = 'none';
}

// Close modal when clicking outside of it
window.onclick = function(event) {
    var modal = document.getElementById('createModal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script>
@endsection
