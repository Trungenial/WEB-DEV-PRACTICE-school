<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <label for="input">Nhập tháng ở đây</label><br>
        <input type="number" name="month"><br>
        <button type="submit">Kiểm tra</button>
    </form>
    
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $month = htmlspecialchars($_POST["month"]);

            $days = match ($month) {
                1, 3, 5, 7, 8, 10, 12 => 31,
                4, 6, 9, 11 => 30,
                2 => 28,
                default => "Tháng không hơp lệ";
            };
            echo "<br>";
            echo "Tháng $month có $days ngày";
        } else {
            echo "Vui lòng nhập tháng";
        }
    ?>
</body>
</html>