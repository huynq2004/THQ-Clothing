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
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 400px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
            padding: 20px;
            text-align: center;
        }
        .modal header {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .modal .icon {
            font-size: 48px;
            margin-bottom: 10px;
        }
        .modal .message {
            margin-bottom: 20px;
        }
        .modal .actions {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .modal button {
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .modal button.confirm {
            background-color: black;
            color: white;
        }
        .modal button.cancel {
            background-color: white;
            color: black;
            border: 1px solid #ccc;
        }
        .modal .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="modal">
        <div class="close">&times;</div>
        <header>THÔNG BÁO</header>
        <div class="icon">?</div>
        <div class="message">Bạn có chắc chắn muốn xóa khuyến mại này không?</div>
        <div class="actions">
            <button class="confirm">OK</button>
            <button class="cancel">Không</button>
        </div>
    </div>
</body>
</html>