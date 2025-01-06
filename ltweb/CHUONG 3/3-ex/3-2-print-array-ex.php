<?php
  //Khai báo mảng hai chiều
  $list = [
    [
      "product_name" => "Dell XPS 15",
      "brand" => "Dell",
      "price" => 2800000053
    ],
    [
      "product_name" => "Macbook Pro M1 16",
      "brand" => "Apple",
      "price" => 42000000
    ],
    [
      "product_name" => "Asus Zenbook 14",
      "brand" => "Asus",
      "price" => 24000000
    ]
    ];

    // In ra tên sản phẩm thứ nhất và tên sản phẩm thứ 2
    echo $list[0]["product_name"]."<br>".$list[1]["product_name"];
?>