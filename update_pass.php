<?php
include "connect.php";

// Kiểm tra nếu biểu mẫu được gửi đi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Giả sử bạn có cách an toàn để lấy ID người dùng hiện tại
    $userId = $_POST['id'];

    // Lấy các mật khẩu được gửi đi
    $currentPassword = $_POST['current_password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Kiểm tra các mật khẩu
    if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
        // Xử lý trường hợp các trường bị bỏ trống
        echo "Vui lòng điền đầy đủ thông tin.";
    } elseif ($newPassword !== $confirmPassword) {
        // Xử lý trường hợp mật khẩu mới và mật khẩu xác nhận không khớp
        echo "Mật khẩu mới và mật khẩu xác nhận không khớp.";
    } else {
        // Kiểm tra kết nối đến cơ sở dữ liệu
        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        }

        // Lấy mật khẩu đã hash từ cơ sở dữ liệu
        $stmt = $conn->prepare("SELECT password FROM user WHERE id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $stmt->bind_result($hashedCurrentPassword);

        // Lấy kết quả
        $stmt->fetch();
        $stmt->close();
        // echo 'mat hau da hash'.$hashedCurrentPassword;
        // echo 'mat khau da nhap'.md5($currentPassword);
        // Xác minh mật khẩu hiện tại nhập vào so với mật khẩu đã hash trong cơ sở dữ liệu
       // Xác minh mật khẩu hiện tại nhập vào so với mật khẩu đã hash (dưới dạng MD5) trong cơ sở dữ liệu
if (md5($currentPassword) === $hashedCurrentPassword) {
    // Xác minh mật khẩu thành công, tiến hành cập nhật mật khẩu mới

    // Để minh họa, bạn có thể muốn hash mật khẩu mới
    // Lưu ý: Sử dụng một thuật toán hash an toàn như bcrypt trong ứng dụng thực tế
    $hashedNewPassword = md5($newPassword);

    // Sử dụng câu lệnh SQL được chuẩn bị để ngăn chặn SQL injection
    $updateStmt = $conn->prepare("UPDATE user SET password = ? WHERE id = ?");
    $updateStmt->bind_param("si", $hashedNewPassword, $userId);

    // Thực hiện cập nhật
    if ($updateStmt->execute()) {
        // Cập nhật mật khẩu thành công
        echo "Cập nhật mật khẩu thành công!";
        
        
    } else {
        // Xử lý khi cập nhật cơ sở dữ liệu thất bại
        echo "Cập nhật mật khẩu thất bại. Vui lòng thử lại.";
    }

    // Đóng câu lệnh và kết nối
    $updateStmt->close();
} else {
    // Xử lý trường hợp mật khẩu hiện tại không đúng
    echo "Mật khẩu hiện tại không đúng. Vui lòng thử lại.";
}

        // Đóng kết nối
        $conn->close();
    }
} else {
    // Xử lý khi biểu mẫu không được gửi đi
    echo "Yêu cầu không hợp lệ.";
}
?>
