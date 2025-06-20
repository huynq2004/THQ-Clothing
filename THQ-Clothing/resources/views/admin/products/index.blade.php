<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THQ Product Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            background-color: #fff;
            border-bottom: 1px solid #ccc;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            width: 30px;
            margin-right: 10px;
        }
        .search-bar {
            display: flex;
            align-items: center;
        }
        .search-bar input {
            padding: 5px;
        }
        .icons img {
            margin: 0 10px;
        }
        .buttons {
            display: flex;
            align-items: center;
        }
        .buttons button {
            margin-left: 10px;
            padding: 8px 12px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            cursor: pointer;
        }
        .table-container {
            overflow-x: auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            margin-top: 10px;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ccc;
        }
        th {
            background-color: #000;
            color: #fff;
        }
        td {
            background-color: #f9f9f9;
        }
        .actions img {
            cursor: pointer;
            margin: 0 5px;
        }
        .category {
            background-color: #e0e0e0;
            display: inline-block;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .footer {
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>

<div class="header">
    <div class="logo">
        <img src="menu-icon.png" alt="Menu">
        <h1>THQ</h1>
    </div>
    <div class="search-bar">
        <input type="text" placeholder="Tìm kiếm sản phẩm">
        <img src="search-icon.png" alt="Search">
    </div>
    <div class="icons">
        <img src="notification-icon.png" alt="Notifications">
        <img src="user-icon.png" alt="User">
    </div>
</div>

<div class="buttons">
    <button>+ Thêm sản phẩm mới</button>
    <button>Danh mục</button>
</div>

<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Mã</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Mô tả</th>
                <th>Hình ảnh</th>
                <th>Danh mục</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>SP1</td>
                <td>Áo phông hot THQ</td>
                <td>119.000</td>
                <td>Áo mùa hè</td>
                <td><img src="image1.png" alt="Áo mùa hè"></td>
                <td><span class="category">Áo</span></td>
                <td class="actions">
                    <img src="edit-icon.png" alt="Edit">
                    <img src="delete-icon.png" alt="Delete">
                </td>
            </tr>
            <tr>
                <td>SP2</td>
                <td>Quần kaki be THQ</td>
                <td>779.000</td>
                <td>Quần co dãn cao cấp</td>
                <td><img src="image2.png" alt="Quần co dãn cao cấp"></td>
                <td><span class="category">Quần</span></td>
                <td class="actions">
                    <img src="edit-icon.png" alt="Edit">
                    <img src="delete-icon.png" alt="Delete">
                </td>
            </tr>
            <tr>
                <td>SP3</td>
                <td>Áo sơ mi THQ be</td>
                <td>599.000</td>
                <td>Áo mát mẻ thoáng khí</td>
                <td><img src="image3.png" alt="Áo mát mẻ thoáng khí"></td>
                <td><span class="category">Áo</span></td>
                <td class="actions">
                    <img src="edit-icon.png" alt="Edit">
                    <img src="delete-icon.png" alt="Delete">
                </td>
            </tr>
            <tr>
                <td>SP4</td>
                <td>Ví da nam màu mới</td>
                <td>499.000</td>
                <td>Ví da nam da bò đen</td>
                <td><img src="image4.png" alt="Ví da nam da bò đen"></td>
                <td><span class="category">Phụ kiện</span></td>
                <td class="actions">
                    <img src="edit-icon.png" alt="Edit">
                    <img src="delete-icon.png" alt="Delete">
                </td>
            </tr>
        </tbody>
    </table>
</div>

<div class="footer">
    <span>&lt; 1/10 &gt;</span>
</div>

</body>
</html>
