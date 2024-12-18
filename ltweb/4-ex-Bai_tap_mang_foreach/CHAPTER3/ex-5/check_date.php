<?php
function check_date_format($date) {
    $d = DateTime::createFromFormat('d/m/Y', $date);
    return $d && $d->format('d/m/Y') === $date;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = htmlspecialchars($_POST['date']);

    if (check_date_format($date)) {
        echo "Ngày $date là hợp lệ.";
    } else {
        echo "Ngày $date không hợp lệ.";
    }
} else {
    echo "Vui lòng nhập ngày.";
}
?>
