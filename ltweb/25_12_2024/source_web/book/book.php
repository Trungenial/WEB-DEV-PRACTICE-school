<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book</title>
    <link rel="icon" href="#" />
    <style>
      img {
        width: 100%;
        border-radius: 10px 10px 0 0;
        object-fit: cover;
        height: 80%;
      }

      .title,
      .author {
        text-align: center;
      }

      .title {
        font-weight: 600;
        font-size: 1vw;
        padding: 0 10px;
        margin-top: -2px;
      }

      .author {
        font-size: 1.3vw;
        margin-top: -15px;
      }

      .container {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-template-rows: repeat(2, 1fr);
        gap: 10px;
        background-color: white;
        margin: 0 auto;
      }

      .container div {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1),
          0 6px 20px 0 rgba(0, 0, 0, 0.1);
        border-radius: 10px;
      }
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
    <form action="book.php" method="post">
        Chọn thể loại:
        <select name="the_loai">
            <?php
                foreach ($list_the_loai as $row) {
                    $attr = "";
                    if($id_selected==$row["id"]){
                        $attr="selected";
                    }
                    echo "<option value='{$row["id"]}' $attr>{$row['ten_the_loai']}</option>";
                }
            ?>
        </select>
        <input type="submit" value="Xem">
    </form>
  <?php
    if(isset($_POST["the_loai"]))
    {
        $the_loai = $_POST["the_loai"];

        // Viết câu lệnh SQL
        $sql = "SELECT tieu_de, tac_gia, hinh_thuc_bia, file_anh_bia, gia_ban, nha_xuat_ban
                FROM sach
                WHERE id_the_loai = " . $the_loai . " LIMIT 10";

        // Thực thi câu lệnh
        $result = $conn->query($sql);
        if ($result) {
            // Lấy và chuyển tất cả các bộ dữ liệu sang dạng mảng kết hợp
            $book = $result->fetch_all(MYSQLI_ASSOC);
            // Hiển thị kết quả
            echo "<div class='container'>";
              foreach ($book as $row) {
                echo "<div class='movie-object'>";
                  echo "<img src='book_image/book_image/{$row["file_anh_bia"]}' alt='{$row["tieu_de"]}' />";
                  echo  "<p class='title'>{$row["tieu_de"]}</p>";
                  echo  "<p class='author'>{$row["tac_gia"]}</p>";
                echo "</div>" ;
              }
            echo "</div>";
        } else {
            echo "Lỗi: " . $conn->error;
        }
        $conn->close();
    }
  ?>
  </body>
</html>
