<?php
  require_once "config.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Nhận dữ liệu từ biểu mẫu đăng nhập
  $username = trim($_POST["username"]);
  $password = trim($_POST["password"]);

  // Kiểm tra dữ liệu đầu vào
  if (empty($username) || empty($password)) {
      echo "Vui lòng điền đầy đủ thông tin.";
  } else {
      // Chuẩn bị câu lệnh SQL
      $stmt = $conn->prepare("SELECT password FROM user WHERE username = ?");
      $stmt->bind_param("s", $username);

      // Thực thi và lấy kết quả
      $stmt->execute();
      $result = $stmt->get_result();

      if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();

          // Kiểm tra mật khẩu
          if (password_verify($password, $row["password"])) {
              echo "Đăng nhập thành công!";
              // Khởi tạo phiên làm việc nếu cần
              exit;
          } else {
              echo "Sai mật khẩu.";
          }
      } else {
          echo "Tên đăng nhập không tồn tại.";
      }

      // Đóng câu lệnh
      $stmt->close();
  }
}

// Đóng kết nối cơ sở dữ liệu
$conn->close();
?>