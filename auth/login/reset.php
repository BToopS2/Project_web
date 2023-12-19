<?php
require '../../connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['email']) && isset($_GET['code'])) {
    // Lấy thông tin từ tham số trên URL
    $email = $_GET['email'];
    $confirmationCode = $_GET['code'];

    // Kiểm tra xem mã xác nhận và email có hợp lệ không
    session_start();
    if (isset($_SESSION['confirmation_code']) && $_SESSION['confirmation_code'] === $confirmationCode) {
        // Mã xác nhận hợp lệ, hiển thị form đặt lại mật khẩu
        ?>
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

        form {
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
            margin-bottom: 30px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <form action="process_reset.php" method="post">
        <h2>Đặt Lại Mật Khẩu</h2>
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="code" value="<?php echo $confirmationCode; ?>">
        <label for="new_password">Nhập mật khẩu mới:</label>
        <input type="password" name="new_password" required>
        <button type="submit">Đặt Lại Mật Khẩu</button>
    </form>
</body>

</html>
        <?php
    } else {
        // Mã xác nhận không hợp lệ
        echo "Mã xác nhận không hợp lệ.";
    }
} else {
    // Phương thức không hợp lệ hoặc thiếu tham số
    echo "Yêu cầu không hợp lệ.";
}
?>
