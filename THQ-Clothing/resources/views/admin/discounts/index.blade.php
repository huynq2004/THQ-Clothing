@extends('layouts.admin')

@section('title', 'Quản lý khuyến mãi - THQ Admin')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .button {
        padding: 0.5rem 1rem;
        background-color: #ccc;
        margin: 1rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        float: right;
    }
    .table-container {
        margin: 1rem;
        border-collapse: collapse;
        width: calc(100% - 2rem);
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ccc;
        padding: 1rem;
        text-align: left;
    }
    th {
        background-color: #000;
        color: #fff;
    }
    .actions img {
        cursor: pointer;
        margin: 0 2px;
        width: 14px;
        height: 14px;
        display: inline;
        vertical-align: middle;
    }
    .pagination {
        display: flex;
        justify-content: flex-end;
        margin: 1rem;
    }
    .pagination span {
        margin: 0 0.5rem;
    }
</style>

<main>
    <button class="button">+ THÊM KHUYẾN MÃI</button>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>MÃ</th>
                    <th>TÊN</th>
                    <th>LOẠI</th>
                    <th>GIÁ TRỊ</th>
                    <th>ĐIỀU KIỆN</th>
                    <th>THỜI GIAN</th>
                    <th>HÀNH ĐỘNG</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>KM1</td>
                    <td>Black Friday Sale</td>
                    <td>Phần trăm</td>
                    <td>50%</td>
                    <td>Trên 800.000VND</td>
                    <td>Từ: 06/11/2024<br>Đến: 16/11/2024</td>
                    <td class="actions">
                        <img src="/assets/icons/product/edit.svg" alt="Edit">
                        <img src="/assets/icons/product/faTrash.svg" alt="Delete">
                        <img src="/assets/icons/product/qrcode.svg" alt="Details">
                    </td>
                </tr>
                <tr>
                    <td>KM2</td>
                    <td>Tết Đến Gần Sale</td>
                    <td>Phần trăm</td>
                    <td>70%</td>
                    <td>Trên 800.000VND</td>
                    <td>Từ: 06/11/2024<br>Đến: 16/11/2024</td>
                    <td class="actions">
                        <img src="/assets/icons/product/edit.svg" alt="Edit">
                        <img src="/assets/icons/product/faTrash.svg" alt="Delete">
                        <img src="/assets/icons/product/qrcode.svg" alt="Details">
                    </td>
                </tr>
                <tr>
                    <td>KM3</td>
                    <td>Mùa Hè Sale</td>
                    <td>Phần trăm</td>
                    <td>20%</td>
                    <td>Trên 800.000VND</td>
                    <td>Từ: 06/11/2024<br>Đến: 16/11/2024</td>
                    <td class="actions">
                        <img src="/assets/icons/product/edit.svg" alt="Edit">
                        <img src="/assets/icons/product/faTrash.svg" alt="Delete">
                        <img src="/assets/icons/product/qrcode.svg" alt="Details">
                    </td>
                </tr>
                <tr>
                    <td>KM4</td>
                    <td>Sinh Nhật Sale</td>
                    <td>Cố định</td>
                    <td>25%</td>
                    <td>Trên 800.000VND</td>
                    <td>Từ: 06/11/2024<br>Đến: 16/11/2024</td>
                    <td class="actions">
                        <img src="/assets/icons/product/edit.svg" alt="Edit">
                        <img src="/assets/icons/product/faTrash.svg" alt="Delete">
                        <img src="/assets/icons/product/qrcode.svg" alt="Details">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="pagination">
        <span>HIỂN THỊ</span>
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
    </div>
</main>
@endsection