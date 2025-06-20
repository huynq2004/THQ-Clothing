<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .modal {
            background-color: white;
            width: 400px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            box-sizing: border-box;
            position: relative;
        }
        .modal input,
        .modal select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            box-sizing: border-box;
        }
        .modal label {
            display: block;
            margin-top: 10px;
        }
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .modal-header .close {
            cursor: pointer;
            font-size: 20px;
        }
        .modal-footer {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .modal-footer button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        .save-button {
            background-color: black;
            color: white;
        }
        .cancel-button {
            background-color: white;
            color: black;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="modal">
        <div class="modal-header">
            <div></div>
            <div class="close">&times;</div>
        </div>
        <label for="ma-khuyen-mai">Mã khuyến mại:</label>
        <input type="text" id="ma-khuyen-mai" value="KM5">
        
        <label for="ten-khuyen-mai">Tên khuyến mại:</label>
        <input type="text" id="ten-khuyen-mai" value="Black Friday Sale 2">
        
        <label for="loai-khuyen-mai">Loại khuyến mại:</label>
        <select id="loai-khuyen-mai">
            <option value="phan-tram">Phần trăm</option>
        </select>
        
        <label for="gia-tri">Giá trị:</label>
        <input type="text" id="gia-tri" value="60%">
        
        <label for="dieu-kien">Điều kiện:</label>
        <input type="text" id="dieu-kien" value="Trên 800,000 VND">
        
        <label for="noi-dung">Nội dung:</label>
        <input type="text" id="noi-dung" value="Sở hữu style đỉnh cao với giá hấp dẫn">
        
        <label for="ngay-bat-dau">Ngày bắt đầu:</label>
        <input type="text" id="ngay-bat-dau" value="16/11/2025">
        
        <label for="ngay-ket-thuc">Ngày kết thúc:</label>
        <input type="text" id="ngay-ket-thuc" value="01/12/2025">
        
        <div class="modal-footer">
            <button class="save-button">Lưu</button>
            <button class="cancel-button">Hủy</button>
        </div>
    </div>
</body>
</html>