<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = htmlspecialchars($_POST['a']);
    $b = htmlspecialchars($_POST['b']);
    $c = htmlspecialchars($_POST['c']);

    $max = $a;

    if ($b > $max) {
        $max = $b;
    }
    if ($c > $max) {
        $max = $c;
    }

    echo "Số lớn nhất trong ba số $a, $b, và $c là: $max";
} else {
    echo "Vui lòng nhập ba số a, b, và c.";
}
?>
