<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details Completed</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        .header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .order-info, .product-info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .order-info td {
            padding: 10px;
        }
        .order-info tr td:first-child {
            width: 20%;
            white-space: nowrap;
        }
        .order-info input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
        }
        .product-info-table th, .product-info-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        .product-info-table th {
            background-color: #f9f9f9;
        }
        .exit-button {
            text-align: right; /* Đặt nút sang góc phải */
            margin-top: 10px; /* Khoảng cách từ nội dung phía trên */
        }
        .exit-button button {
            padding: 10px 20px;
            background-color: #000;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">THÔNG TIN CHI TIẾT ĐƠN HÀNG</div>
        <table class="order-info">
            <tr>
                <td>Mã đơn hàng :</td>
                <td><input type="text" value="T01" readonly></td>
                <td>Tổng đơn :</td>
                <td><input type="text" value="350,000" readonly></td>
            </tr>
            <tr>
                <td>Tên tài khoản :</td>
                <td><input type="text" value="cngoc" readonly></td>
                <td>Ngày đặt đơn :</td>
                <td><input type="text" value="23-2-2025" readonly></td>
            </tr>
            <tr>
                <td>Thông tin người nhận :</td>
                <td><input type="text" value="số nhà 23, Kiến Thụy, Hải Phòng 0987654321" readonly></td>
                <td>Ngày hoàn thành :</td>
                <td><input type="text" value="25-2-2025" readonly></td>
            </tr>
        </table>
        <table class="product-info-table">
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Áo Hello Kitty</td>
                <td>3</td>
                <td>116,500</td>
            </tr>
        </table>
        <div class="exit-button">
            <button>EXIT</button>
        </div>
    </div>
</body>
</html>