<?php
require 'D:/DowLoad/Xampp/htdocs/Project_web/connect.php';
require 'D:/DowLoad/Xampp/htdocs/Project_web/PHPMailer/src/PHPMailer.php';
require 'D:/DowLoad/Xampp/htdocs/Project_web/PHPMailer/src/SMTP.php';
require 'D:/DowLoad/Xampp/htdocs/Project_web/PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Xác định email của người dùng
    $email = $_POST['email'];

    // Check if the email exists in the database
    if (emailExists($email)) {
        // Tạo một mã xác nhận ngẫu nhiên
        $confirmationCode = bin2hex(random_bytes(16));

        // Lưu trữ mã xác nhận trong phiên làm việc hoặc tạo một tệp cache tạm thời
        session_start();
        $_SESSION['confirmation_code'] = $confirmationCode;

        // Gửi email với liên kết xác nhận
        $resetLink = "http://localhost/Project_Web/auth/login/reset.php?email=" . urlencode($email) . "&code=" . urlencode($confirmationCode);
        $subject = "Xác nhận đặt lại mật khẩu";
        $message = "Nhấp vào liên kết sau để xác nhận và đặt lại mật khẩu của bạn: $resetLink";

        // Gọi hàm sendRegistrationEmail để gửi email
        sendRegistrationEmail($email, $message);

        $message = "Một liên kết xác nhận đã được gửi đến email của bạn.";
    } else {
        $message = "Địa chỉ email không tồn tại trong hệ thống.";
    }
}

function emailExists($email)
{
    global $conn;
    $query = "SELECT * FROM user WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $email); // 's' indicates a string parameter
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc() !== null;
}

function sendRegistrationEmail($email, $message)
{
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;
        $mail->Username = "storetvh105@gmail.com";
        $mail->Password = "urcrunhh biqyebvs";
        $mail->setFrom("storetvh105@gmail.com");
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = "HUS STORE";
        $mail->Body = $message;

        // Gửi email
        $mail->send();
    } catch (Exception $e) {
        echo "Không thể gửi tin nhắn. Lỗi Mailer: {$mail->ErrorInfo}";
    }
}
?>
<!-- Form để nhập email -->
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên Mật Khẩu</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your custom CSS styles if needed -->
    <style>
        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: #f8f9fa; /* Light gray background color */
        }

        .container {
            background-color: #ffffff; /* White container background */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle box shadow */
            max-width: 500px; /* Set maximum width */
            width: 100%; /* Ensure it takes full width on smaller screens */
        }

        h2 {
            margin-bottom: 30px;
            color: #007bff; /* Bootstrap primary color */
        }

        label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff; /* Bootstrap primary color */
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Slightly darker on hover */
            border-color: #0056b3;
        }

        a {
            color: #007bff; /* Bootstrap primary color */
        }

        a:hover {
            color: #0056b3; /* Slightly darker on hover */
        }

        .notification {
            margin-top: 20px;
            padding: 15px;
            border: 1px solid #d6d6d6;
            border-radius: 5px;
            background-color: #f8d7da; /* Bootstrap danger background color */
            color: #721c24; /* Bootstrap danger text color */
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="mt-5">Quên Mật Khẩu</h2>
        <?php if (!empty($message)) : ?>
            <div class="notification">
                <?php echo $message; ?>
            </div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">Nhập địa chỉ email của bạn:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Gửi</button>
        </form>
        <p class="mt-3"><a href="../register/index.php">Bạn chưa có tài khoản? Đăng ký ngay</a></p>
    </div>

    <!-- Add Bootstrap JS and Popper.js for Bootstrap functionality -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
