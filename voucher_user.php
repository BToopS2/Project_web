<?php
include 'connect.php';

// Kiểm tra xem có dữ liệu GET gửi lên hay không
if (isset($_GET['sale_value'], $_GET['id'], $_GET['image_path'])) {
    $saleValue = $_GET['sale_value'];
    $userId = $_GET['id'];
    $imagePath = $_GET['image_path'];

    // Thực hiện truy vấn để cập nhật giá trị sale và image_path trong bảng user
    $updateQuery = "UPDATE user SET sale = '$saleValue', image_voucher = '$imagePath' WHERE id = '$userId'";

    if (mysqli_query($conn, $updateQuery)) {
        // echo "Lấy Voucher thành công";
    } else {
        echo "Có lỗi xảy ra khi cập nhật giá trị sale và image_path: " . mysqli_error($conn);
    }
} else {
    echo "Không có đủ dữ liệu voucher được gửi lên.";
}
?>