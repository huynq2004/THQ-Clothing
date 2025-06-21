<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Báo - Chỉnh Sửa Thành Công</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: rgba(0, 0, 0, 0.5);
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .modal {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 450px;
            text-align: center;
            position: relative;
        }
        .modal-header {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 25px;
        }
        .close-button {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            font-weight: 300;
            cursor: pointer;
            text-decoration: none;
            color: #aaa;
            background-color: #f0f0f0;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
        }
        .modal-body {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
            font-size: 16px;
        }
        .success-icon {
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #e8f5e9;
            border-radius: 50%;
            color: #4caf50;
            font-size: 18px;
            font-weight: bold;
        }
        .modal-footer {
            display: flex;
            justify-content: center;
        }
        .btn-primary {
            background-color: #000;
            color: #fff;
            padding: 10px 40px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="modal">
        <a href="{{ route('admin.products.index') }}" class="close-button">&times;</a>
        <div class="modal-header">
            THÔNG BÁO
        </div>
        <div class="modal-body">
            <div class="success-icon">&#10003;</div>
            <span>Chỉnh sửa sản phẩm thành công</span>
        </div>
        <div class="modal-footer">
            <a href="{{ route('admin.products.index') }}" class="btn-primary">OK</a>
        </div>
    </div>
</body>
</html>
