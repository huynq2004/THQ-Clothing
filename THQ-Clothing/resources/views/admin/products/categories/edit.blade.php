<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }
        .modal {
            width: 600px;
            background-color: white;
            border: 2px solid #eaeaea;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .modal h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 30px;
        }
        .modal label {
            font-size: 18px;
            display: block;
            margin-bottom: 10px;
        }
        .input-box {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            background-color: #f1f1f1;
            border: none;
            font-size: 16px;
        }
        .dropdown {
            width: 100%;
            padding: 10px;
            background-color: #f1f1f1;
            margin-bottom: 20px;
            font-size: 16px;
            border: none;
            position: relative;
        }
        .dropdown select {
            width: 100%;
            padding: 10px;
            background-color: #f1f1f1;
            border: none;
            font-size: 16px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        .dropdown::after {
            content: '▼';
            font-size: 12px;
            position: absolute;
            right: 15px;
            top: 18px;
        }
        .button-container {
            text-align: center;
        }
        .button {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 0 10px;
        }
        .button.update {
            background-color: black;
            color: white;
        }
        .button.cancel {
            background-color: white;
            color: black;
            border: 1px solid black;
        }
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="modal">
        <span class="close">&times;</span>
        <h1>CẬP NHẬT DANH MỤC SẢN PHẨM</h1>
        <label for="product">Sản phẩm:</label>
        <input type="text" id="product" class="input-box" value="Áo Phông hot THQ" readonly>
        <label for="category">Chọn danh mục cho sản phẩm:</label>
        <div class="dropdown">
            <select id="category">
                <option>ÁO</option>
                <option>QUẦN</option>
                <option>PHỤ KIỆN</option>
            </select>
        </div>
        <div class="button-container">
            <button class="button update">CẬP NHẬT</button>
            <button class="button cancel">HỦY BỎ</button>
        </div>
    </div>
</body>
</html>