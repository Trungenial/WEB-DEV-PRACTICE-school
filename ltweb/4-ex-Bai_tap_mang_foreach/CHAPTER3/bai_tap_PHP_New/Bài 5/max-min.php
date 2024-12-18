<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-5</title>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
      <h2>Find min and max in a interger string</h2>
      <label for="number-string">Enter here</label><br />
      <input type="text" id="number-string" name="number-string" />
      <button type="submit">Find min and max</button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $integerString = htmlspecialchars($_POST['number-string']);
        $integerArray = explode(";", $integerString);

    
        // Khởi tạo max và min
        $max = $integerArray[0];
        $min = $integerArray[0];
    
        // Tìm giá trị lớn nhất và nhỏ nhất
        foreach ($integerArray as $value) {
            if ($value > $max) {
                $max = $value;
            }
            if ($value < $min) {
                $min = $value;
            }
        }
    
        echo "Max: $max, Min: $min";
    } else {
        echo "Vui lòng nhập chuỗi số";
    }
    
    ?>
</body>
</html>