<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THQ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #ffffff;
            border-bottom: 5px solid #000;
        }
        .menu-icon {
            font-size: 24px;
        }
        .logo {
            font-weight: bold;
            font-size: 24px;
        }
        .search-bar {
            flex-grow: 1;
            max-width: 300px;
            margin: 0 20px;
        }
        .search-bar input {
            width: 100%;
            padding: 5px;
            border: none;
            border-bottom: 2px solid #000;
        }
        .icons {
            display: flex;
            align-items: center;
        }
        .icon {
            font-size: 24px;
            margin-left: 10px;
        }
        .buttons-container {
            display: flex;
            justify-content: space-around;
            background-color: #e0e0e0;
            padding: 10px 0;
        }
        .button {
            margin: 0 10px;
            padding: 10px 20px;
            border: 1px solid #000;
            background-color: #000;
            color: #fff;
            cursor: pointer;
        }
        .order-section {
            padding: 10px 20px;
        }
        .order-header {
            display: flex;
            justify-content: space-between;
            background-color: #000;
            color: #fff;
            padding: 10px 0;
        }
        .order-content {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #e0e0e0;
        }
        .order-image {
            width: 50px;
            height: 50px;
            background-color: #ccc;
            margin-right: 20px;
        }
        .order-details {
            flex-grow: 1;
        }
        .order-price {
            margin-right: 20px;
        }
        .order-status {
            margin-right: 20px;
        }
        .action-buttons {
            display: flex;
        }
        .action-button {
            padding: 5px 10px;
            margin-left: 10px;
            border: none;
            background-color: #000;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="menu-icon">☰</div>
        <div class="logo">THQ</div>
        <div class="search-bar">
            <input type="text" placeholder="TÌM KIẾM">
        </div>
        <div class="icons">
            <div class="icon">🔔</div>
            <div class="icon">👤</div>
        </div>
    </div>
    
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
            <div>Sản phẩm</div>
            <div>Tổng đơn hàng</div>
            <div>Trạng thái</div>
            <div>Thao tác</div>
        </div>
        <div class="order-content">
            <div class="order-image">IMG</div>
            <div class="order-details">Áo HelloKitty</div>
            <div class="order-price">350.000 d</div>
            <div class="order-status">Chờ xác nhận</div>
            <div class="action-buttons">
                <button class="action-button">Xác nhận</button>
                <button class="action-button">Từ chối</button>
            </div>
        </div>
    </div>
</body>
</html>
