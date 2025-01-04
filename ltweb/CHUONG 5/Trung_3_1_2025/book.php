<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
      
    </style>
  </head>
  <body>
    <?php
      require_once "config.php";
      $sql="SELECT * FROM the_loai";

      $result = $conn->query($sql);
      $list_the_loai = [];
      if($result){
          $list_the_loai = $result->fetch_all(MYSQLI_ASSOC);
      }
      $id_selected="";
      if(isset($_POST["the_loai"])) {
        $id_selected = $_POST["the_loai"];
      }
    ?>
    <!-- <form action="book.php" method="post">
        Chọn thể loại:
        <select name="the_loai">
            <?php
                // foreach ($list_the_loai as $row) {
                //     $attr = "";
                //     if($id_selected==$row["id"]){
                //         $attr="selected";
                //     }
                //     echo "<option value='{$row["id"]}' $attr>{$row['ten_the_loai']}</option>";
                // }
            ?>
        </select>
        <input type="submit" value="Xem">
    </form> -->
<!-- 
thay thế form chọn loại sách bằng navbar
 -->

     <div class="menu">
       <ul class="menu-item">
         <li><a href="./book.php">Trang chủ</a></li>
         <?php
                foreach ($list_the_loai as $row) {
                    echo "<li><a href='./book.php?the_loai=" . $row["id"] . "'>" . $row["ten_the_loai"] . "</a></li>";
                }
            ?>
            <a href="signupform.php"><button>Đăng nhập</button></a>
            <a href="signinform.php"><button>Đăng ký</button></a>
       </ul>
     </div>             

  <?php
    $sql = "SELECT * FROM sach ORDER BY gia_ban DESC LIMIT 10";
    if(isset($_GET["the_loai"]))
    {
        $the_loai = $_GET["the_loai"];

        // Viết câu lệnh SQL
        $sql = "SELECT *
                FROM sach
                WHERE id_the_loai = " . $the_loai . " LIMIT 10";
    }
        // Thực thi câu lệnh
        $result = $conn->query($sql);
        if ($result) {
            // Lấy và chuyển tất cả các bộ dữ liệu sang dạng mảng kết hợp
            $book = $result->fetch_all(MYSQLI_ASSOC);
            // Hiển thị kết quả
            echo "<div class='container'>";
              foreach ($book as $row) {
                echo "<a href='./book_detail?id=" . $row["id"] . "'>";
                echo "<div class='movie-object'>";
                  echo "<img src='book_image/{$row["file_anh_bia"]}' alt='{$row["tieu_de"]}' />";
                  echo  "<p class='title'>{$row["tieu_de"]}</p>";
                  echo  "<p class='author'>{$row["tac_gia"]}</p>";
                echo "</div>" ;
                echo "</a>";
              }
            echo "</div>";
        } else {
            echo "Lỗi: " . $conn->error;
        }
        $conn->close();
  ?>
  </body>
</html>
