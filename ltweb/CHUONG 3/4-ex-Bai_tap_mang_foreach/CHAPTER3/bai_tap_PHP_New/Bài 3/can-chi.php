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

        $can = ["Canh", "Tân", "Nhâm", "Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ"];
        $chi = ["Thân", "Dậu", "Tuất", "Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi"];

        $canIndex = ($year) % 10;
        $chiIndex = ($year) % 12;

        $canChi = $can[$canIndex] . " " . $chi[$chiIndex];

        echo "<p>Năm $year là năm $canChi (can: {$can[$canIndex]}, chi: {$chi[$chiIndex]}).</p>";
    }
    ?>
</body>
</html>
