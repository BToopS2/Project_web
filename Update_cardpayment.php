<?php
// Include any necessary authentication or session management code
include 'connect.php';
session_start();

// Check if the form is submitted for updating user information
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $cardName = $_POST['cardname'];
    $cardType = $_POST['cardtype'];
    $cardNumber = $_POST['cardnumber'];
    $cardHolder = $_POST['cardholder'];
    $expireDate = $_POST['expiredate'];
    $id = $_POST['id'];
    // Retrieve user_id from the session

    // Validate and sanitize user inputs (you should add proper validation)

    // Update user information in the database
    $updateQuery = "UPDATE user SET cardname='$cardName', cardtype='$cardType', cardnumber='$cardNumber', cardholder='$cardHolder', expiredate='$expireDate' WHERE id='$id'";

    // Execute the update query
    $result = mysqli_query($conn, $updateQuery);

    // Check if the update was successful
    if ($result) {
        // Redirect to the profile page after updating
        
        header("Location: card_payment.php");
        exit();
    } else {
        // Handle the error, e.g., display an error message
        $errorMessage = mysqli_error($conn);
        echo "Error updating user information: " . $errorMessage;
    }
}

?>