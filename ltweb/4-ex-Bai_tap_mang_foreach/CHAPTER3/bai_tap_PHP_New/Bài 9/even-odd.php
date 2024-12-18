<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
      <h2>Find min and max in an interger string</h2>
      <label for="number-string">Enter here</label><br />
      <input type="text" id="number-string" name="number-string" />
      <button type="submit">Find min and max</button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $integerString = htmlspecialchars($_POST['number-string']);
        $integerArray = explode(",", $integerString);
    
        // Chuyển các phần tử của mảng thành số nguyên
        $integerArray = array_map('intval', $integerArray);
    
        foreach($integerArray as $integer) {
            if ($integer % 2 === 0) {
                echo '<span style="color: red;">' . " " . $integer . '</span>,';
            } else if ($integer % 2 != 0) {
                echo '<span style="color: blue;">' . " " . $integer . '</span>';
            }
        }
    } else {
        echo "Vui lòng nhập chuỗi số";
    }
    
    ?>
</body>
</html>