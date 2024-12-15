<?php
//1. Khai báo mảng chỉ số với ba giá trị: "Tiếng Anh", "Tiếng Việt", "Tiếng Pháp".
//In ra giá trị "Tiếng Việt"
$lang = ["Tiếng Anh", "Tiếng Việt", "Tiếng Pháp"];

echo $lang[1];

echo "<br><br>";
//2. In ra tên sản phẩm và thuwong hiệu trong biết $product.
$product = [
  "product_name" => "Laptop",
  "brand" => "Dell",
  "price" => 200000
];

echo $product["product_name"]."<br>".$product["brand"];

?>