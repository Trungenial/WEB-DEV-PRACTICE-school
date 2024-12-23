<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Tính Can Chi của Năm</title>
</head>
<body>
    <h2>Tính Can Chi của Năm</h2>
    <form method="post">
        <label for="year">Nhập năm:</label>
        <input type="number" id="year" name="year" required>
        <input type="submit" value="Tính">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = intval($_POST["year"]);

        $can = ["Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm", "Quý"];
        $chi = ["Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất", "Hợi"];

        $canIndex = ($year + 6) % 10;
        $chiIndex = ($year + 8) % 12;

        $canChi = $can[$canIndex] . " " . $chi[$chiIndex];

        echo "<p>Năm $year là năm $canChi (can: {$can[$canIndex]}, chi: {$chi[$chiIndex]}).</p>";
    }
    ?>
</body>
</html>
