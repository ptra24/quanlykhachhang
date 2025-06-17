<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Khách hàng</title>
    <style>
        /* Đặt font và thiết lập cơ bản cho trang */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:rgb(244, 244, 244);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }

        /* Tạo style cho form tìm kiếm */
        form {
            text-align: center;
            margin: 20px;
        }
        body {
            background-image: url('11.jpg'); /* Đường dẫn ảnh */
            background-size: cover; /* Phủ toàn bộ màn hình */
            background-position: center; /* Căn giữa */
            background-attachment: fixed; /* Cố định khi cuộn */
}


        input[type="text"] {
            padding: 10px;
            width: 300px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color:rgb(175, 109, 76);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Tạo style cho bảng */
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
            color: #333;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Style cho các liên kết trong bảng */
        a {
            text-decoration: none;
            color: #4CAF50;
            margin-right: 10px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Danh sách Khách hàng</h1>
    <form action="quanlykhachhang.php" method="GET">
        <input type="text" name="search" placeholder="Tìm kiếm khách hàng..." value="">
        <button type="submit">Tìm kiếm</button>
    </form>
    <table>
        <tr>
            <th>Mã khách hàng</th>
            <th>Tên khách hàng</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th>Thao tác</th>
        </tr>
        <tr>
            <td>001</td>
            <td>Nguyễn Văn A</td>
            <td>a.nguyen@example.com</td>
            <td>0123456789</td>
            <td><a href="#">Chỉnh sửa</a> | <a href="#">Chi tiết</a></td>
        </tr>
        <tr>
            <td>002</td>
            <td>Trần Thị B</td>
            <td>b.tran@example.com</td>
            <td>0987654321</td>
            <td><a href="#">Chỉnh sửa</a> | <a href="#">Chi tiết</a></td>
        </tr>
        <tr>
            <td>003</td>
            <td>Lê Quang C</td>
            <td>c.le@example.com</td>
            <td>0912345678</td>
            <td><a href="#">Chỉnh sửa</a> | <a href="#">Chi tiết</a></td>
        </tr>
        <tr>
            <td>004</td>
            <td>Phạm Minh D</td>
            <td>d.pham@example.com</td>
            <td>0988123456</td>
            <td><a href="#">Chỉnh sửa</a> | <a href="#">Chi tiết</a></td>
        </tr>
        <tr>
            <td>005</td>
            <td>Vũ Mai E</td>
            <td>e.vu@example.com</td>
            <td>0934567890</td>
            <td><a href="#">Chỉnh sửa</a> | <a href="#">Chi tiết</a></td>
        </tr>
        <tr>
            <td>006</td>
            <td>Hoàng Thu F</td>
            <td>f.hoang@example.com</td>
            <td>0923456789</td>
            <td><a href="#">Chỉnh sửa</a> | <a href="#">Chi tiết</a></td>
        </tr>
    </table>
</body>
</html>
