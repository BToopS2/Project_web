<?php
// update_address.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize user input
    $updatedAddress = htmlspecialchars($_POST['address'], ENT_QUOTES, 'UTF-8');

    include 'connect.php';

    session_start(); // Assuming you are using sessions to store user information
    $userId = $_POST['id'];// Replace with the actual session variable for user ID

    // Update the user's address in the database
    $sql = "UPDATE user SET address = '$updatedAddress' WHERE id = $userId";

    if ($conn->query($sql) === TRUE) {
        echo "Address updated successfully";
    } else {
        header("HTTP/1.1 500 Internal Server Error");
        echo "Error updating address: " . $conn->error;
    }

    $conn->close();
}
?>
