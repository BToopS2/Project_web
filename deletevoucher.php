<?php
include 'connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user ID from the AJAX request
    $userId = isset($_POST['userId']) ? $_POST['userId'] : null;

    // Check if the user ID is valid (you may need additional validation)
    if ($userId !== null) {
        
        $updateQuery = "UPDATE user SET sale = NULL, image_voucher = NULL WHERE id = '$userId'";
        mysqli_query($conn, $updateQuery);

        // Send a response (you can customize the response as needed)
        echo 'Voucher removed successfully';
    } else {
        // Invalid user ID, send an error response
        http_response_code(400);
        echo 'Invalid user ID';
    }
} else {
    // Invalid request method, send an error response
    http_response_code(405);
    echo 'Method Not Allowed';
}
?>
