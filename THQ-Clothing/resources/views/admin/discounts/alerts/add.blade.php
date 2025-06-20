<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        .modal {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 320px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            position: relative;
            padding: 20px;
            text-align: center;
        }
        .modal-header {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .modal-close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-weight: bold;
        }
        .modal-content {
            margin-bottom: 20px;
            font-size: 16px;
        }
        .modal-content img {
            vertical-align: middle;
            margin-right: 5px;
        }
        .ok-button {
            background-color: black;
            color: white;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="modal">
        <div class="modal-header">THÔNG BÁO</div>
        <div class="modal-close">✖</div>
        <div class="modal-content">
            <img src="https://via.placeholder.com/16" alt="Checkmark">
            Gán sản phẩm vào khuyến mại thành công!
        </div>
        <button class="ok-button">OK</button>
    </div>
</body>
</html>