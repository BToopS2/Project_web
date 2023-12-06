<?php
    require_once(__DIR__."../../connect.php");
    class OrderRepository{
        public function insert($cart_id){
            global $conn;
            $sql = "insert into orders(cart_id,date) values($cart_id,'".date("Y-m-d")."')"; 
            mysqli_query($conn,$sql);
        }
        public function insert2($cart_id, $quantity) {
            global $conn;
        
            // Check if a record with the given cart_id already exists
            $checkIfExistsQuery = "SELECT COUNT(*) as count FROM orders WHERE cart_id = $cart_id";
            $result = $conn->query($checkIfExistsQuery);
        
            if ($result) {
                $row = $result->fetch_assoc();
                // Assuming your 'orders' table has a 'quantity' column
               
                if ($row['count'] > 0) {
                    // If the record exists, update the quantity
                    $updateQuery = "UPDATE orders SET quantity = $quantity WHERE cart_id = $cart_id";
                    if ($conn->query($updateQuery)) {      
                    } else {
                        echo json_encode(['error' => $conn->error]);
                    }
                } else {
                    // If the record does not exist, insert a new record
                    $insertQuery = "INSERT INTO orders (cart_id, date, quantity) VALUES ($cart_id, '" . date("Y-m-d") . "', $quantity)";
                    if ($conn->query($insertQuery)) {
                        
                    } else {
                        echo json_encode(['error' => $conn->error]);
                    }
                }
            } else {
                echo json_encode(['error' => $conn->error]);
            }
        }
        
        public function getAll(){
            global $conn;
            $sql = "select u.*,c.*,o.*,s.*, o.id as order_id, c.id as cart_id from user u join cart c on u.id=c.user_id join orders o on o.cart_id = c.id join shoe s on s.id = c.shoe_id"; 
            return mysqli_query($conn,$sql);
        }
        public function getAll2($userId) {
            global $conn;
            $escapedUserId = mysqli_real_escape_string($conn, $userId); // Bảo vệ khỏi SQL injection
        
            $sql = "SELECT u.*, c.*, o.*, s.*, o.id AS order_id, c.id AS cart_id
                    FROM user u
                    JOIN cart c ON u.id = c.user_id
                    JOIN orders o ON o.cart_id = c.id
                    JOIN shoe s ON s.id = c.shoe_id
                    WHERE u.id = '$escapedUserId'";  // Sử dụng id người dùng để lọc
            return mysqli_query($conn, $sql);
        }
        
        public function getQuantityByCartId($cartId) {
            global $conn;
        
            // Sử dụng câu lệnh thực thi được chuẩn bị để tránh SQL injection
            $stmt = mysqli_prepare($conn, "SELECT quantity FROM orders WHERE cart_id = ? ORDER BY id DESC LIMIT 1");
            mysqli_stmt_bind_param($stmt, 'i', $cartId); // 'i' đại diện cho kiểu dữ liệu integer
            mysqli_stmt_execute($stmt);
        
            // Lấy kết quả
            mysqli_stmt_bind_result($stmt, $quantity);
            mysqli_stmt_fetch($stmt);
        
            mysqli_stmt_close($stmt);
        
            return $quantity ?? 0; // Sử dụng toán tử null coalescing để tránh lỗi undefined variable
        }
        public function deleteById($orderId) {
            global $conn;

            // Sử dụng câu lệnh thực thi được chuẩn bị để tránh SQL injection
            $stmt = mysqli_prepare($conn, "DELETE FROM orders WHERE id = ?");
            mysqli_stmt_bind_param($stmt, 'i', $orderId); // 'i' đại diện cho kiểu dữ liệu integer

            if (mysqli_stmt_execute($stmt)) {
                echo "Delete successful!";
            } else {
                echo "Error: " . mysqli_error($conn);
            }

            mysqli_stmt_close($stmt);
        }
        
        
        
        
    }
?>