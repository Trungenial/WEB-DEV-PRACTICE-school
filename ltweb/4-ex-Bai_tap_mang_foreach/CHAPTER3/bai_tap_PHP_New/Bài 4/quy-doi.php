<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đổi Số Tiền</title>
</head>
<body>
    <h2>Đổi Số Tiền</h2>
    <form method="post">
        <label for="amount">Nhập số tiền:</label>
        <input type="number" id="amount" name="amount" required>
        <input type="submit" value="Đổi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $amount = intval($_POST["amount"]);
        $denominations = [50000, 20000, 10000, 5000, 1000];
        $result = [];

        foreach ($denominations as $denomination) {
            if ($amount >= $denomination) {
                $count = intdiv($amount, $denomination);
                $amount = $amount % $denomination;
                $result[] = "$count tờ $denomination";
            }
        }

        if ($amount > 0) {
            $result[] = "$amount không thể đổi được";
        }

        echo "<p>Kết quả: " . implode(", ", $result) . "</p>";
    }
    ?>
</body>
</html>
