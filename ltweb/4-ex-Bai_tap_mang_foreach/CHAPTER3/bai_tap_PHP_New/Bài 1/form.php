<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP_1</title>
  </head>
  <body>
    <!--1. Viết chương trình chuyển đổi một chuỗi ký tự in thường sang chuỗi ký tự in hoa. Thiết kế form nhập vào chuỗi ký tự.-->

    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
      <h2>Chuyển đổi chuỗi ký tự sang chữ in hoa</h2>
      <label for="lower-text">Nhập vào ô bên dưới:</label><br />
      <input type="text" id="lower-text" name="lower-text" />
      <button type="submit">Chuyển đổi</button>
    </form>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $lowerString = htmlspecialchars($_POST['lower-text']);
          $upperString = mb_strtoupper($lowerString);
          echo $upperString;
      } else {
          echo "Vui lòng nhập chuỗi ký tự.";
      }
    ?>
  </body>
</html>
