<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  require_once "config.php";
  // Nhận dữ liệu từ biểu mẫu đăng ký
  $username = trim($_POST["username"]);
  $password = trim($_POST["password"]);
  $email = trim($_POST["email"]);

  // Kiểm tra dữ liệu đầu vào
  if (empty($username) || empty($password) || empty($email)) {
      echo "Vui lòng điền đầy đủ thông tin.";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Email không hợp lệ.";
  } else {
      // Mã hóa mật khẩu
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

      // Chuẩn bị câu lệnh SQL
      $stmt = $conn->prepare("INSERT INTO user (username, password, email) VALUES (?, ?, ?)");
      $stmt->bind_param("sss", $username, $hashedPassword, $email);

      // Thực thi và kiểm tra
      if ($stmt->execute()) {
          echo "Đăng ký thành công!";
      } else {
          echo "Lỗi: " . $stmt->error;
      }

      // Đóng câu lệnh
      $stmt->close();
  }
}