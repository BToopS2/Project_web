<?php
include 'connect.php';

$data = json_decode(file_get_contents('php://input'), true);

// Sanitize and validate input
$productId = isset($data['productId']) ? intval($data['productId']) : 0;
$quantity = isset($data['quantity']) ? intval($data['quantity']) : 0;

// Validate that productId and quantity are non-zero
if ($productId > 0 && $quantity > 0) {
    // Check if a record with the given cart_id already exists
    $checkIfExistsQuery = "SELECT COUNT(*) as count FROM orders WHERE cart_id = $productId";
    $result = $conn->query($checkIfExistsQuery);
    $row = $result->fetch_assoc();

    if ($row['count'] > 0) {
        // If the record exists, update the quantity
        $updateQuery = "UPDATE orders SET quantity = $quantity WHERE cart_id = $productId";
        if (mysqli_query($conn, $updateQuery)) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['error' => mysqli_error($conn)]);
        }
    } else {
        // If the record does not exist, insert a new record
        $insertQuery = "INSERT INTO orders (cart_id, date, quantity) VALUES ($productId, '" . date("Y-m-d") . "', $quantity)";
        if (mysqli_query($conn, $insertQuery)) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['error' => mysqli_error($conn)]);
        }
    }
} else {
    echo json_encode(['error' => 'Invalid input']);
}

mysqli_close($conn);
?>
