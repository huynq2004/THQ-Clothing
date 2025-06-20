<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Danh Mục Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f8f8;
        }
        .container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 70%;
            box-sizing: border-box;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header button {
            background-color: white;
            border: 1px solid #ccc;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #e0e0e0;
        }
        th {
            background-color: black;
            color: white;
        }
        td img {
            cursor: pointer;
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <span>DANH SÁCH DANH MỤC SẢN PHẨM</span>
            <button>+ THÊM DANH MỤC</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>TÊN DANH MỤC</th>
                    <th>SỐ LƯỢNG</th>
                    <th>HÀNH ĐỘNG</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>ÁO</td>
                    <td>20</td>
                    <td><img src="trash-icon.png" alt="Delete"></td>
                </tr>
                <tr>
                    <td>PHỤ KIỆN</td>
                    <td>25</td>
                    <td><img src="trash-icon.png" alt="Delete"></td>
                </tr>
                <tr>
                    <td>GIÀY</td>
                    <td>15</td>
                    <td><img src="trash-icon.png" alt="Delete"></td>
                </tr>
                <tr>
                    <td>TÚI</td>
                    <td>8</td>
                    <td><img src="trash-icon.png" alt="Delete"></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>