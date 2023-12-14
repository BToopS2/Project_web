<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt Lại Mật Khẩu</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            color: #28a745; /* Bootstrap success color */
            text-align: center;
            margin-top: 10px;
        }

        a {
            color: #007bff;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        require 'D:/DowLoad/Xampp/htdocs/Project_web/connect.php';

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && isset($_POST['code']) && isset($_POST['new_password'])) {
            // Lấy thông tin từ form
            $email = $_POST['email'];
            $confirmationCode = $_POST['code'];
            $newPassword = $_POST['new_password'];

            // Kiểm tra xem mã xác nhận có hợp lệ không
            session_start();
            if (isset($_SESSION['confirmation_code']) && $_SESSION['confirmation_code'] === $confirmationCode) {
                // Mã xác nhận hợp lệ, thực hiện đặt lại mật khẩu
                // TODO: Thực hiện logic đặt lại mật khẩu sử dụng $email và $newPassword

                // Ví dụ: Cập nhật mật khẩu trong CSDL sử dụng MD5
                $hashedPassword = md5($newPassword);
                $query = "UPDATE user SET password = ? WHERE email = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param('ss', $hashedPassword, $email);
                $stmt->execute();

                // Xóa dữ liệu phiên sau khi xử lý
                unset($_SESSION['confirmation_code']);
        ?>
                <h2>Đặt Lại Mật Khẩu</h2>
                <p>Mật khẩu đã được đặt lại thành công!</p>
                <p><a href="../login/index.php">Đăng nhập ngay</a></p>
        <?php
            } else {
                // Mã xác nhận không hợp lệ
                echo "<h2>Đặt Lại Mật Khẩu</h2>";
                echo "<p style='color: red;'>Mã xác nhận không hợp lệ.</p>";
            }
        } else {
            // Phương thức không hợp lệ hoặc thiếu tham số
            echo "<h2>Đặt Lại Mật Khẩu</h2>";
            echo "<p style='color: red;'>Yêu cầu không hợp lệ.</p>";
        }
        ?>
    </div>
</body>

</html>
