<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = htmlspecialchars($_POST['a']);
    $b = htmlspecialchars($_POST['b']);
    $c = htmlspecialchars($_POST['c']);

    if ($a == 0) {
        if ($b === 0) {
            if ($c === 0) {
                echo "Phương trình vô số nghiệm.";
            } else {
                echo "Phương trình vô nghiệm.";
            }
        } else {
            $x = -$c / $b;
            echo "Phương trình có một nghiệm: x = $x";
        }
    } else {
        $delta = $b * $b - 4 * $a * $c;
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "Phương trình có hai nghiệm phân biệt: x1 = $x1 và x2 = $x2";
        } elseif ($delta === 0) {
            $x = -$b / (2 * $a);
            echo "Phương trình có nghiệm kép: x = $x";
        } else {
            echo "Phương trình vô nghiệm.";
        }
    }
} else {
    echo "Vui lòng nhập các hệ số a, b, c.";
}
?>
