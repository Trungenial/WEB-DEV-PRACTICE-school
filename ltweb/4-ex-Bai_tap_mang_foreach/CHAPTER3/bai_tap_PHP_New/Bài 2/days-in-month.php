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

    switch ($month) {
        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            $days = 31;
            break;
        case 4:
        case 6:
        case 9:
        case 11:
            $days = 30;
            break;
        case 2:
            $days = 28;
            break;
        default:
            $days = "Tháng không hợp lệ";
    }
    
    echo "<br>";
    echo "Tháng $month có: $days ngày";
} else {
    echo "Vui lòng nhập tháng";
}
?>

</body>
</html>