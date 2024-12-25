<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bảng Cửu Chương</title>
    <style>
        table, th, td {
            border: 1px solid black;
            padding: 1px;
        }
        .tables-container {
            display: flex;
            flex-wrap: wrap;
        }
        .table-wrapper {
            display: inline-block;
        }
    </style>
</head>
<body>
    <h2>In Bảng Cửu Chương</h2>
    <form method="post">
        <label for="range">Nhập khoảng (ví dụ: 1-5):</label>
        <input type="text" id="range" name="range" required>
        <input type="submit" value="In">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $range = htmlspecialchars($_POST["range"]);
        list($start, $end) = array_map('intval', explode('-', $range));

        if ($start > $end) {
            echo "<p>Khoảng nhập không hợp lệ. Số bắt đầu phải nhỏ hơn hoặc bằng số kết thúc.</p>";
        } else {
            echo "<div class='tables-container'>";
            for ($i = $start; $i <= $end; $i++) {
                echo "<div class='table-wrapper'>";
                echo "<table>";
                for ($j = 1; $j <= 10; $j++) {
                    echo "<tr><td>$i x $j = " . ($i * $j) . "</td></tr>";
                }
                echo "</table>";
                echo "</div>";
            }
            echo "</div>";
        }
    }
    ?>
</body>
</html>
