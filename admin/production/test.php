<?php
include("../../connect.php");

// Kiểm tra kết nối cơ sở dữ liệu
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM husstoredata.orders"; // Thay đổi 'shoe' thành tên thực của cơ sở dữ liệu

$result = $conn->query($sql);

if ($result === false) {
    echo "Error: " . $sql . "<br>" . $conn->error;
} else {
    // Xử lý dữ liệu
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Xử lý mỗi bản ghi ở đây
            echo "Order ID: " . $row["id"] . "<br>";
            echo "Customer: " . $row["email"] . "<br>";
            // ... và các trường khác
        }
    } else {
        echo "Không có dữ liệu";
    }
}

$conn->close();
?>
