<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Sắp xếp Dãy Số Nguyên</title>
</head>
<body>
    <h2>Sắp xếp Dãy Số Nguyên</h2>
    <form method="post">
        <label for="numbers">Nhập dãy số (ngăn cách bởi dấu phẩy):</label>
        <input type="text" id="numbers" name="numbers" required>
        <input type="submit" value="Sắp xếp">
    </form>

    <?php
    // Hàm hoán vị hai phần tử
    function swap(&$arr, $i, $j) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
    }

    // Hàm sắp xếp (sử dụng thuật toán sắp xếp nổi bọt - Bubble Sort)
    function bubbleSort(&$arr) {
        $n = count($arr);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - 1 - $i; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    swap($arr, $j, $j + 1);
                }
            }
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbers = $_POST["numbers"];
        $numArray = array_map('intval', explode(',', $numbers));

        bubbleSort($numArray);

        echo "<p>Dãy số đã sắp xếp: " . implode(", ", $numArray) . "</p>";
    }
    ?>
</body>
</html>
