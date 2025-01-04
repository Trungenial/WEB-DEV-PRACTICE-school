<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
    <div class="signin-form">
        <h2>Đăng nhập</h2>
        <form method="POST" action="signin.php">
            <label for="username">Tên đăng nhập:</label>
            <input type="text" name="username" id="username" required><br>
    
            <label for="password">Mật khẩu:</label>
            <input type="password" name="password" id="password" required><br>
    
            <button type="submit">Đăng nhập</button>
        </form>
    </div>
</body>
</html>