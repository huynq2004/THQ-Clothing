<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .modal {
            width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 2px solid #e4e4e4;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .modal header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .modal .section {
            margin-bottom: 20px;
            padding: 10px;
            border: 2px solid #e4e4e4;
        }
        .modal .section h2 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .modal .row {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .modal .row label {
            flex: 0 0 25%;
            font-size: 12px;
            margin-right: 10px;
        }
        .modal .row input,
        .modal .row select,
        .modal .row textarea {
            flex: 1;
        }
        .modal .row input[type="file"] {
            flex: initial;
        }
        .modal .row input,
        .modal .row select,
        .modal .row textarea {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 12px;
        }
        .modal footer {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }
        .modal footer button {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            font-size: 12px;
            cursor: pointer;
        }
        .modal footer button.primary {
            background-color: #000;
            color: #fff;
        }
        .modal footer button.secondary {
            background-color: #e4e4e4;
        }
    </style>
</head>
<body>
    <div class="modal">
        <header>THÊM SẢN PHẨM</header>
        <div class="section">
            <h2>THÔNG TIN SẢN PHẨM</h2>
            <div class="row">
                <label for="code">Mã*:</label>
                <input type="text" id="code" placeholder="Nhập mã, không trùng lặp">
                <label for="name">Tên sản phẩm*:</label>
                <input type="text" id="name" placeholder="Nhập tên sản phẩm">
            </div>
            <div class="row">
                <label for="price">Giá*:</label>
                <input type="text" id="price" placeholder="Nhập giá, phải là số dương">
                <label for="material">Chất liệu*:</label>
                <input type="text" id="material" placeholder="Nhập chất liệu, ví dụ: cotton">
            </div>
        </div>
        <div class="section">
            <h2>MÔ TẢ VÀ PHÂN LOẠI</h2>
            <div class="row">
                <label for="category">Danh mục:</label>
                <select id="category">
                    <option>Nothing selected</option>
                </select>
            </div>
            <div class="row">
                <label for="description">Mô tả:</label>
                <textarea id="description" rows="4" placeholder="Nhập mô tả sản phẩm"></textarea>
            </div>
            <div class="row">
                <label for="image">Hình ảnh:</label>
                <input type="file" id="image">
            </div>
        </div>
        <footer>
            <button class="primary">THÊM</button>
            <button class="secondary">HUỶ BỎ</button>
        </footer>
    </div>
</body>
</html>