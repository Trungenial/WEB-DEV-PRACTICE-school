<?php
    require_once "config.php";
    //Viết câu lệnh SQL
    $sql = "SELECT tieu_de, tac_gia, nha_xuat_ban, hinh_thuc_bia, link_anh_bia, gia_ban
            FROM sach
            WHERE hinh_thuc_bia = 'Bìa Mềm'";
    // Thực thi câu lệnh
    $result = $conn->query($sql);
    if ($result) {
    // Lấy và chuyển tất cả các bộ dữ liệu sang dạng mảng kết hợp
        $book = $result->fetch_all(MYSQLI_ASSOC);
    // Hiển thị kết quả
        
        echo "<table>";
            echo "<tr>
                    <th>Tên sách</th>
                    <th>Tác giả</th>
                    <th>Nhà xuất bản</th>
                    <th>Hình thức bìa</th>
                    <th>Ảnh bìa</th>
                    <th>Giá bán</th>
                  </tr>";
        foreach ($book as $row) {
            echo "<tr>"; 
                echo "<td>" . $row["tieu_de"] . "</td>";
                echo "<td>" . $row["tac_gia"] . "</td>";
                echo "<td>" . $row["nha_xuat_ban"] . "</td>";
                echo "<td>" . $row["hinh_thuc_bia"] . "</td>";
                echo "<td><img src='" . $row["link_anh_bia"] . "'</td>";
                echo "<td>" . $row["gia_ban"] . "</td>";
            echo "</tr>"; 
        }
        echo "<table>";
    } else {
        echo "Lỗi: " . $conn->error;
    }
    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }

        th {
            font-size: 20px;
        }

        td {
            width: 200px;
            height: 300px;
            font-size: 20px;
        }

        th {
            text-align: center;
        }

        img {
            width: 200px;
            height: 300px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    
</body>
</html>