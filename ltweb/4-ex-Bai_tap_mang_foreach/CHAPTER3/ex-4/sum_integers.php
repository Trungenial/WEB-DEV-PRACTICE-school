<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numbers = htmlspecialchars($_POST['numbers']);
    $numbersArray = explode(',', $numbers);

    $sum = 0;
    foreach ($numbersArray as $number) {
        $sum += (int)$number;
    }

    echo "Tổng của các số nguyên là: $sum";
} else {
    echo "Vui lòng nhập các số nguyên.";
}
?>
