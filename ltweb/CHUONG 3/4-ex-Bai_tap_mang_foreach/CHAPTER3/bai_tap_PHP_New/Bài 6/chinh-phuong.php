<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Số Chính Phương</title>
</head>
<body>
    <h2>In Các Số Chính Phương Nhỏ Hơn N</h2>
    <form method="post">
        <label for="number">Nhập số N:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="In">
    </form>

    <?php
    // Hàm kiểm tra số chính phương
    function isPerfectSquare($num) {
        $sqrt = sqrt($num);
        return ($sqrt == floor($sqrt));
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $N = intval($_POST["number"]);
        $perfectSquares = [];

        for ($i = 1; $i < $N; $i++) {
            if (isPerfectSquare($i)) {
                $perfectSquares[] = $i;
            }
        }

        if (count($perfectSquares) > 0) {
            echo "<p>Các số chính phương nhỏ hơn $N là: " . implode(", ", $perfectSquares) . ".</p>";
        } else {
            echo "<p>Không có số chính phương nào nhỏ hơn $N.</p>";
        }
    }
    ?>
</body>
</html>
