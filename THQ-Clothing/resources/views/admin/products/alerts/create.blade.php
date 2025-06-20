<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .modal {
            width: 400px;
            margin: 100px auto;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            font-family: Arial, sans-serif;
            position: relative;
        }
        .modal-header {
            text-align: center;
            font-weight: bold;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }
        .modal-body {
            display: flex;
            align-items: center;
            padding: 20px;
        }
        .modal-body img {
            margin-right: 10px;
        }
        .modal-body span {
            font-size: 16px;
        }
        .modal-footer {
            text-align: right;
            padding: 10px 20px;
        }
        .modal-footer button {
            padding: 8px 16px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .modal-close {
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
        <div class="modal-close">&times;</div>
        <div class="modal-header">
            THÔNG BÁO
        </div>
        <div class="modal-body">
            <img src="https://via.placeholder.com/20/00ff00/ffffff?text=%E2%9C%93" alt="Check">
            <span>Thêm sản phẩm thành công</span>
        </div>
        <div class="modal-footer">
            <button>OK</button>
        </div>
    </div>
</body>
</html>