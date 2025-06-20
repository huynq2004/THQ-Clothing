<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THQ Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            border-bottom: 1px solid #ccc;
        }
        .header .logo {
            display: flex;
            align-items: center;
        }
        .header .logo img {
            width: 30px;
            margin-right: 1rem;
        }
        .search-bar {
            border: none;
            border-bottom: 1px solid #000;
            padding: 0.5rem;
        }
        .actions {
            display: flex;
            align-items: center;
        }
        .actions .bell, .actions .user {
            margin-left: 1rem;
        }
        .button {
            padding: 0.5rem 1rem;
            background-color: #ccc;
            margin: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .table-container {
            margin: 1rem;
            border-collapse: collapse;
            width: calc(100% - 2rem);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 1rem;
            text-align: left;
        }
        th {
            background-color: #000;
            color: #fff;
        }
        .pagination {
            display: flex;
            justify-content: flex-end;
            margin: 1rem;
        }
        .pagination span {
            margin: 0 0.5rem;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="menu-icon.png" alt="Menu Icon">
            <h1>THQ</h1>
        </div>
        <input class="search-bar" type="text" placeholder="TÌM KIẾM">
        <div class="actions">
            <img class="bell" src="bell-icon.png" alt="Bell Icon">
            <img class="user" src="user-icon.png" alt="User Icon">
        </div>
    </header>
    <main>
        <button class="button">+ THÊM KHUYẾN MÃI</button>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>MÃ</th>
                        <th>TÊN</th>
                        <th>LOẠI</th>
                        <th>GIÁ TRỊ</th>
                        <th>ĐIỀU KIỆN</th>
                        <th>THỜI GIAN</th>
                        <th>HÀNH ĐỘNG</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>KM1</td>
                        <td>Black Friday Sale</td>
                        <td>Phần trăm</td>
                        <td>50%</td>
                        <td>Trên 800.000VND</td>
                        <td>Từ: 06/11/2024<br>Đến: 16/11/2024</td>
                        <td><img src="edit-icon.png" alt="Edit Icon"><img src="delete-icon.png" alt="Delete Icon"><img src="details-icon.png" alt="Details"></td>
                    </tr>
                    <tr>
                        <td>KM2</td>
                        <td>Tết Đến Gần Sale</td>
                        <td>Phần trăm</td>
                        <td>70%</td>
                        <td>Trên 800.000VND</td>
                        <td>Từ: 06/11/2024<br>Đến: 16/11/2024</td>
                        <td><img src="edit-icon.png" alt="Edit Icon"><img src="delete-icon.png" alt="Delete Icon"><img src="details-icon.png" alt="Details"></td>
                    </tr>
                    <tr>
                        <td>KM3</td>
                        <td>Mùa Hè Sale</td>
                        <td>Phần trăm</td>
                        <td>20%</td>
                        <td>Trên 800.000VND</td>
                        <td>Từ: 06/11/2024<br>Đến: 16/11/2024</td>
                        <td><img src="edit-icon.png" alt="Edit Icon"><img src="delete-icon.png" alt="Delete Icon"><img src="details-icon.png" alt="Details"></td>
                    </tr>
                    <tr>
                        <td>KM4</td>
                        <td>Sinh Nhật Sale</td>
                        <td>Cố định</td>
                        <td>25%</td>
                        <td>Trên 800.000VND</td>
                        <td>Từ: 06/11/2024<br>Đến: 16/11/2024</td>
                        <td><img src="edit-icon.png" alt="Edit Icon"><img src="delete-icon.png" alt="Delete Icon"><img src="details-icon.png" alt="Details"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="pagination">
            <span>HIỂN THỊ</span>
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
        </div>
    </main>
</body>
</html>
```