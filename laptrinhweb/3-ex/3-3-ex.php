<?php
  //Khai báo mảng hai chiều
  $list = [
    [
      "Dell XPS 15",
      "Dell",
      2800000053
    ],
    [
      "Macbook Pro M1 16",
      "Apple",
      42000000
    ],
    [
      "Asus Zenbook 14",
      "Asus",
      24000000
    ]
  ];
    $x = 5;
    $y = 5;
    $t1 = ++$x;
    $t2 = $y++;
    echo $t1;
    echo $t2;

    // In ra tên và giá sản phẩm thứ 3
    echo $list[2][0]."<br>".$list[2][2];
?>