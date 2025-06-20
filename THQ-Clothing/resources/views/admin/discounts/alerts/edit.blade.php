<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Báo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .modal {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            position: relative;
            padding: 20px;
            box-sizing: border-box;
        }
        .modal-close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
        .modal-header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .modal-body {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .icon {
            margin-right: 10px;
        }
        .modal-footer {
            text-align: center;
        }
        .ok-button {
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="modal">
        <div class="modal-close">✖</div>
        <div class="modal-header">THÔNG BÁO</div>
        <div class="modal-body"><span class="icon">✔</span>Sửa thông tin khuyến mại thành công!</div>
        <div class="modal-footer">
            <button class="ok-button">OK</button>
        </div>
    </div>
</body>
</html>
