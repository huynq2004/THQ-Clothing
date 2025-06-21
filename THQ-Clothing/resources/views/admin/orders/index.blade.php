@extends('layouts.admin')

@section('title', 'Quản lý đơn hàng - THQ Admin')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .buttons-container {
        display: flex;
        justify-content: space-around;
        background-color: #e0e0e0;
        padding: 10px 0;
        flex-wrap: wrap;
    }

    .button {
        margin: 5px 10px;
        padding: 10px 20px;
        border: 1px solid #000;
        background-color: #000;
        color: #fff;
        cursor: pointer;
        flex: 1 1 auto;
        text-align: center;
        min-width: 100px;
    }

    .order-section {
        padding: 10px 20px;
    }

    .order-header,
    .order-content {
        display: grid;
        grid-template-columns: 80px 2fr 1fr 1fr 1.5fr;
        align-items: center;
        padding: 10px 0;
    }

    .order-header {
        background-color: #000;
        color: #fff;
        font-weight: bold;
        border-bottom: 2px solid #ccc;
    }

    .order-content {
        border-bottom: 1px solid #e0e0e0;
    }

    .order-image img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 4px;
    }

    .order-details {
        padding-left: 10px;
    }

    .order-price,
    .order-status {
        text-align: center;
    }

    .action-buttons {
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .action-button {
        padding: 6px 12px;
        border: none;
        background-color: #000;
        color: #fff;
        cursor: pointer;
        border-radius: 4px;
        font-size: 14px;
    }

    @media (max-width: 768px) {
        .order-header,
        .order-content {
            grid-template-columns: 60px 1.5fr 1fr 1fr 1.5fr;
            font-size: 14px;
        }

        .action-button {
            padding: 4px 8px;
            font-size: 12px;
        }
    }
</style>

<div class="buttons-container">
    <div class="button">Tất cả</div>
    <div class="button">Chưa xử lý</div>
    <div class="button">Đang xử lý</div>
    <div class="button">Đã đóng gói</div>
    <div class="button">Đang giao</div>
    <div class="button">Đã giao</div>
    <div class="button">Đã hủy</div>
</div>

<div class="order-section">
    <div class="order-header">
        <div>Ảnh</div>
        <div>Sản phẩm</div>
        <div>Tổng</div>
        <div>Trạng thái</div>
        <div>Thao tác</div>
    </div>

    <div class="order-content">
        <div class="order-image">
            <img src="{{ asset('assets/images/order/1.jpg') }}" alt="Ảnh sản phẩm">
        </div>
        <div class="order-details">Áo HelloKitty</div>
        <div class="order-price">350.000 đ</div>
        <div class="order-status">Chờ xác nhận</div>
        <div class="action-buttons">
            <button class="action-button">Xác nhận</button>
            <button class="action-button">Từ chối</button>
        </div>
    </div>
</div>
@endsection
