<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See All Alerts</title>
    <!-- Sử dụng Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 text-center mb-4">
                <!-- Thanh banner bên trái -->
                <div class="bg-info p-3">
                    
                    <h3 class="text-white">
                    <i class="fa-regular fa-bell fa-shake fa-2xl"></i>  <br><br>
                        Thông báo</h3>
                </div>
            </div>

            <div class="col-md-12" id="mainContent">
                <!-- Nội dung chính -->
                <?php
                // Hiển thị nội dung mặc định (Option 1)
                include("../../connect.php");

                $sql = "SELECT * FROM contacts"; // Thay your_alerts_table bằng tên thực của bảng thông báo

                $result = $conn->query($sql);

                if ($result === false) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                } else {
                    // Hiển thị danh sách các thông báo
                    while ($row = $result->fetch_assoc()) {
                        echo '<li class="list-group-item d-flex justify-content-between align-items-center">';
                        
                        echo '<div>';
                        echo '<a href="your_php_page.php?id=' . $row['id'] . '" style="color: gray;">';
                        echo '<strong>' . $row['NAME']  .' đã bình luận :' .'</strong> '. $row['message'];
                        echo '</div>';
                        echo '<span class="badge badge-info">' . $row['created_at'] . '</span>';
                        echo '</li>';
                    }                    
                }

                $conn->close();
                ?>
            </div>
        </div>

        <!-- Sử dụng Bootstrap JS và Popper.js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            function changeContent(option) {
                // Sử dụng AJAX để tương tác với máy chủ và cập nhật nội dung
                $.ajax({
                    type: 'POST',
                    url: 'D:/DowLoad/Xampp/htdocs/shoe_2/admin/production/updateContent.php', // Thay đổi thành đường dẫn tới file xử lý AJAX
                    data: { option: option },
                    success: function (response) {
                        $('#mainContent').html(response);
                    }
                });
            }
        </script>
    </div>
</body>

</html>
