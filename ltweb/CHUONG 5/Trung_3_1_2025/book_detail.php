

<html>
    <head>
    <link rel="stylesheet" href="css/book_detail.css">
    </head>
    <body>
        <?php
            if(isset($_GET["id"])) {
                require_once "config.php";
                $id = $_GET['id'];
                    
                $sql = "SELECT * FROM sach WHERE id = $id";

                $result = $conn->query($sql);
                if($result){
                    $book_detail = $result->fetch_assoc();
                } else {
                    header("location: ./book.php");
                    die();
                }
        ?>
        <div class="book_detail">
            <h1><?php echo $book_detail["tieu_de"]; ?></h1>
            <div class="book-image">
                <img src="book_image/<?php echo $book_detail["file_anh_bia"];?>" alt="">
            </div>
            <div class="book-infomation">
                <p>Nhà cung cấp: <?php echo $book_detail["nha_cung_cap"]; ?></p>
                <p>Nhà xuất bản: <?php echo $book_detail["nha_xuat_ban"]; ?></p>
                <p>Tác giả: <?php echo $book_detail["tac_gia"]; ?></p>
                <p>Hình thức bìa: <?php echo $book_detail["hinh_thuc_bia"]; ?></p>
            </div>
            <div class="book-description">
                <p class="">Mô tả: <?php echo $book_detail["mo_ta"];?></p>
            </div>
        </div>

        <?php        
            } else {
                header("location: ./book.php");
                die();
            }
        ?>
    </body>
</html>