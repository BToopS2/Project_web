<?php
include "connect.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['search_query']) && isset($_POST['first_letter'])) {
        $search_query = $conn->real_escape_string($_POST['search_query']);
        $first_letter = $conn->real_escape_string($_POST['first_letter']);

        // Truy vấn SQL để tìm kiếm sản phẩm trong bảng "shoe" theo tên và chữ cái đầu
        $sql = "SELECT s.*, i.link_image FROM shoe s 
        LEFT JOIN shoe_image i ON s.id = i.shoe_id 
        WHERE s.name LIKE '%$first_letter%' AND s.name LIKE '%$search_query%'";

        $result = $conn->query($sql);

        if (!$result) {
            echo "Query error: " . $conn->error;
            exit;
        }
        echo '<div style="overflow-y: auto; max-height: 400px;"> <!-- Adjust max-height as needed -->';
        while ($row = $result->fetch_assoc()) {
            $price = $row["price"] - $row["price"] * $row["sale"] * 0.01;
        
            echo '<div class="card" style="display: flex; align-items: center; margin-bottom: 10px;">';
        
            // Display the image on the left side
            echo '<div style="flex: 0 0 30%; margin-right: 10px;">';
            echo '<a href="product-detail.php?id=' . $row["id"] . '"><img src="' . $row["link_image"] . '" alt="Product Image" class="img-fluid" width="100" height="100"></a>';
            echo '</div>';
        
            // Display product details on the right side
            echo '<div style="flex: 1;">';
            echo '<h5 class="card-title"><a href="product-detail.php?id=' . $row["id"] . '">' . $row["name"] . '</a></h5>' . '<br>';
            echo '<p class="card-text">' . '<del>' . 'Giá Gốc: ' . '<del>' . $row["price"] . ' VND' . '</p>';
            echo '<p class="card-text">' . '<strong style="color:red">' . 'Chỉ Còn : ' . $price . ' VND' . '</strong></p>';
            
            // Display product name
            echo '<p class="card-text">Mã : ' . $row["id"] . '</p>';
            
            echo '</div>';
        
            echo '</div>';
            
        }
        echo '</div>';
        
        if ($result->num_rows == 0) {
            echo "Không có kết quả tìm kiếm.";
        }
        

        // Đóng kết nối cơ sở dữ liệu
        $conn->close();

        // Kết thúc xử lý và ngăn chặn việc hiển thị giao diện người dùng
        exit;
    }
}

?>
