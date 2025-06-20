<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Danh Mục Mới</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .modal {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 20px;
            position: relative;
        }
        .modal-header {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        .close {
            position: absolute;
            right: 10px;
            top: 10px;
            font-size: 16px;
            cursor: pointer;
        }
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .form-group label {
            flex-basis: 30%;
        }
        .form-group input[type="text"] {
            flex-grow: 1;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-actions {
            display: flex;
            justify-content: space-between;
        }
        button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .submit-btn {
            background-color: black;
            color: white;
        }
        .cancel-btn {
            background-color: #f7f7f7;
            color: black;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="modal">
        <div class="modal-header">
            THÊM DANH MỤC MỚI
            <span class="close">&times;</span>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Tên danh mục*:</label>
                <input type="text" placeholder="Nhập tên danh mục">
            </div>
        </div>
        <div class="form-actions">
            <button class="submit-btn">THÊM</button>
            <button class="cancel-btn">HUỶ BỎ</button>
        </div>
    </div>
</body>
</html>