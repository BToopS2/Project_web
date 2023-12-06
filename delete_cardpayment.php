<?php
// Include any necessary authentication or session management code
include 'connect.php';
session_start();

// Check if the form is submitted for deleting user information
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    // Retrieve user_id from the session
    $id = $_SESSION['user_id'];

    // Define the columns you want to delete
    $columnsToDelete = ['cardName', 'cardType', 'cardNumber', 'cardHolder', 'expireDate'];

    // Build the SQL query to set these columns to NULL
    $updateQuery = "UPDATE user SET " . implode("=NULL, ", $columnsToDelete) . "=NULL WHERE id='$id'";

    // Execute the update query
    $result = mysqli_query($conn, $updateQuery);

    // Check if the update was successful
    if ($result) {
        // Redirect to a page after successful deletion
        header("Location: card_payment.php");
        exit();
    } else {
        // Handle the error, e.g., display an error message
        $errorMessage = mysqli_error($conn);
        echo "Error deleting user information: " . $errorMessage;
    }
}

// Rest of your existing code for updating user information

?>
