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
      <label for="info-string">Enter here</label><br />
      <input type="text" id="info-string" name="info-string" />
      <button type="submit">Find min and max</button>
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $infoString = htmlspecialchars($_POST['info-string']);
        $pairArray = explode(";", $infoString);
        echo '<table style="border: 1px solid black; border-collapse: collapse;">';
        echo '<tr >
                <th style="border: 1px solid black; text-align: center; padding: 10px">Mã sinh viên</th>
                <th style="border: 1px solid black; text-align: center; padding: 10px">Họ tên</th>
                </tr>
                ';
        foreach($pairArray as $pair) {
            echo '<tr style="border: 1px solid black;">';
            $atom = explode("_", $pair);
            foreach($atom as $value) {
                echo "<td style='border: 1px solid black; text-align: center; padding: 10px'>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Vui lòng nhập chuỗi";
    }
    
    ?>
</body>
</html>