<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Báo</title>
    <style>
        .modal {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 400px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
            font-family: Arial, sans-serif;
            position: relative;
        }

        .modal-header {
            font-weight: 600;
            font-size: 20px;
            text-align: center;
            width: 100%;
            margin-bottom: 15px;
        }

        .modal-body {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            margin-bottom: 15px;
        }

        .modal-footer {
            display: flex;
            justify-content: center;
        }

        .checkbox {
            display: inline-flex;
            margin-right: 10px;
        }

        .button {
            border: none;
            background-color: #000;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="modal">
        <div class="close">X</div>
        <div class="modal-header">THÔNG BÁO</div>
        <div class="modal-body">
            <div class="checkbox">
                <img src="https://img.icons8.com/ios-filled/50/000000/checkmark--v2.png" alt="checkbox" width="24">
            </div>
            Xóa sản phẩm thành công
        </div>
        <div class="modal-footer">
            <button class="button">OK</button>
        </div>
    </div>

</body>
</html>
