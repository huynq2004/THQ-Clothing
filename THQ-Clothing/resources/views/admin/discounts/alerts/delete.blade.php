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
        }
        .modal {
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            padding: 20px;
            position: relative;
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
            font-size: 18px;
        }
        .modal-content {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .modal-content i {
            margin-right: 10px;
        }
        .modal-content p {
            margin: 0;
        }
        .modal-button {
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="modal">
        <div class="modal-header">THÔNG BÁO</div>
        <div class="modal-close">&times;</div>
        <div class="modal-content">
            <i>✔</i>
            <p>Xóa khuyến mại thành công!</p>
        </div>
        <button class="modal-button">OK</button>
    </div>
</body>
</html>