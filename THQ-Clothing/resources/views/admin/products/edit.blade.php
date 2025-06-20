<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh Sửa Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .modal {
            width: 600px;
            margin: 20px auto;
            border: 2px solid #333;
            padding: 20px;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
            position: relative;
        }
        .modal-header {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 18px;
            cursor: pointer;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: inline-block;
            width: 100px;
        }
        .form-control {
            width: 150px;
            padding: 5px;
            margin-right: 10px;
        }
        .textarea-control {
            width: 300px;
            height: 60px;
            padding: 5px;
        }
        .category-select {
            width: 165px;
            padding: 5px;
        }
        .image-preview img {
            width: 100px;
        }
        .buttons {
            text-align: center;
            margin-top: 20px;
        }
        .btn {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            cursor: pointer;
        }
        .btn-save {
            background-color: #333;
            color: #fff;
        }
        .btn-cancel {
            background-color: #fff;
            color: #333;
            border: 1px solid #333;
        }
    </style>
</head>
<body>
    <div class="modal">
        <div class="modal-header">
            CHỈNH SỬA SẢN PHẨM
            <span class="close-button">&times;</span>
        </div>
        <div class="form-group">
            <label>Mã*:</label>
            <input type="text" class="form-control" value="SP05">
            <label>Tên sản phẩm*:</label>
            <input type="text" class="form-control" value="Áo sơ mi">
        </div>
        <div class="form-group">
            <label>Giá*:</label>
            <input type="text" class="form-control" value="200.000">
            <label>Chất liệu*:</label>
            <input type="text" class="form-control" value="Kaki">
        </div>
        <div class="form-group">
            <label>Danh mục:</label>
            <select class="category-select">
                <option selected>Áo</option>
            </select>
        </div>
        <div class="form-group image-preview">
            <label>Hình ảnh:</label>
            <img src="image.jpg" alt="Hình sản phẩm">
        </div>
        <div class="form-group">
            <label>Mô tả:</label>
            <textarea class="textarea-control">Thoáng mát, mặc đẹp đi du lịch</textarea>
        </div>
        <div class="buttons">
            <button class="btn btn-save">LƯU THAY ĐỔI</button>
            <button class="btn btn-cancel">HỦY BỎ</button>
        </div>
    </div>
</body>
</html>