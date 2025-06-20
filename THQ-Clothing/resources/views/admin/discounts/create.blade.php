```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Khuyến Mại</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .modal {
            width: 500px;
            margin: 50px auto;
            border: 1px solid #000;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            position: relative;
        }
        .modal-header {
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 18px;
            cursor: pointer;
        }
        .form-group {
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .form-group label {
            flex: 1;
        }
        .form-group input, .form-group select {
            flex: 2;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .button {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            flex: 1;
            text-align: center;
        }
        .button.cancel {
            background-color: #fff;
            color: #000;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<div class="modal">
    <div class="modal-header">
        CHI TIẾT KHUYẾN MẠI
        <span class="close">&times;</span>
    </div>
    <form>
        <div class="form-group">
            <label for="ma">Mã khuyến mại:</label>
            <input type="text" id="ma">
        </div>
        <div class="form-group">
            <label for="ten">Tên khuyến mại:</label>
            <input type="text" id="ten">
        </div>
        <div class="form-group">
            <label for="loai">Loại khuyến mại:</label>
            <select id="loai">
                <option value="">Chọn</option>
            </select>
        </div>
        <div class="form-group">
            <label for="gia">Giá trị:</label>
            <input type="text" id="gia">
        </div>
        <div class="form-group">
            <label for="dieu-kien">Điều kiện:</label>
            <input type="text" id="dieu-kien">
        </div>
        <div class="form-group">
            <label for="noi-dung">Nội dung:</label>
            <input type="text" id="noi-dung">
        </div>
        <div class="form-group">
            <label for="ngay-bat-dau">Ngày bắt đầu:</label>
            <input type="text" id="ngay-bat-dau">
        </div>
        <div class="form-group">
            <label for="ngay-ket-thuc">Ngày kết thúc:</label>
            <input type="text" id="ngay-ket-thuc">
        </div>
        <div class="buttons">
            <div class="button save">LƯU</div>
            <div class="button cancel">HỦY</div>
        </div>
    </form>
</div>

</body>
</html>
```