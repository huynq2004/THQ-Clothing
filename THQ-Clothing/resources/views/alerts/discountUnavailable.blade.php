<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .notification-box {
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 300px;
            padding: 20px;
            position: relative;
        }
        .notification-box .header {
            font-weight: bold;
            text-align: center;
            position: relative;
            margin-bottom: 10px;
        }
        .notification-box .header::after {
            content: "";
            display: block;
            width: 100%;
            border-bottom: 1px solid #ccc;
            margin-top: 5px;
        }
        .notification-box .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-weight: bold;
            cursor: pointer;
        }
        .notification-box .message {
            text-align: center;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="notification-box">
        <div class="header">
            Thông báo
        </div>
        <div class="close">x</div>
        <div class="message">
            Mã khuyến mại không tồn tại hoặc không hợp lệ.
        </div>
    </div>
</body>
</html>