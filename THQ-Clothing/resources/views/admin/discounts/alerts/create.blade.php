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
        .modal {
            width: 320px;
            background-color: white;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            position: relative;
            border-radius: 8px;
        }
        .modal-header {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .modal-close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            color: #333;
        }
        .modal-content {
            margin: 20px 0;
        }
        .modal-content span {
            margin-right: 8px;
        }
        .modal-button {
            background-color: black;
            color: white;
            border: none;
            padding: 10px;
            width: 100px;
            border-radius: 5px;
            cursor: pointer;
        }
        .checkmark {
            color: black;
        }
    </style>
</head>
<body>
    <div class="modal">
        <div class="modal-header">THÔNG BÁO</div>
        <div class="modal-close">&times;</div>
        <div class="modal-content">
            <span class="checkmark">&#10003;</span>
            Thêm khuyến mại thành công!
        </div>
        <button class="modal-button">OK</button>
    </div>
</body>
</html>