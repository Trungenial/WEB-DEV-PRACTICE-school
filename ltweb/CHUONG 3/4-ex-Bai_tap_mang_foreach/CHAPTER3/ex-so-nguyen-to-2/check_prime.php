<?php
function is_prime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = $_POST['n'];

    if (is_prime($n)) {
        echo "Số $n là số nguyên tố.";
    } else {
        echo "Số $n không phải là số nguyên tố.";
    }
} else {
    echo "Vui lòng nhập số nguyên n.";
}
?>
