```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Mục Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f9f9f9;
        }
        .modal {
            width: 600px;
            border: 1px solid #000;
            background-color: #fff;
            padding: 20px;
            box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
            border-radius: 5px;
            position: relative;
        }
        .modal h1 {
            font-size: 22px;
            text-align: center;
            margin-bottom: 20px;
        }
        .modal label {
            display: block;
            margin: 10px 0 5px;
        }
        .modal select, .modal input[type="text"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .modal .buttons {
            display: flex;
            justify-content: flex-end;
        }
        .modal button {
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-left: 10px;
        }
        .save {
            background-color: #000;
            color: #fff;
        }
        .cancel {
            background-color: #fff;
            border: 1px solid #ccc;
        }
        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="modal">
        <div class="close">X</div>
        <h1>DANH MỤC SẢN PHẨM</h1>
        <form>
            <label for="category">Danh mục:</label>
            <select id="category">
                <option value="">Select Category</option>
            </select>
            <label for="product-code">Mã sản phẩm:</label>
            <input type="text" id="product-code">
            <label for="product-name">Sản phẩm:</label>
            <input type="text" id="product-name">
            <div class="buttons">
                <button type="submit" class="save">LƯU</button>
                <button type="button" class="cancel">HỦY</button>
            </div>
        </form>
    </div>
</body>
</html>
```