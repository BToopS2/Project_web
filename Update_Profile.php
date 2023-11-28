<?php
// Include any necessary authentication or session management code
include 'connect.php';
session_start();

// Check if the form is submitted for updating user information
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['date'];
    $email = $_POST['email'];
    $phone = $_POST['Phone'];
    $address = $_POST['adr'];
    $id = $_POST['id'];
    // Retrieve user_id from the session

    // Validate and sanitize user inputs (you should add proper validation)

    // Update user information in the database
    $updateQuery = "UPDATE user SET fullname='$name', gender='$gender', dob='$dob', email='$email', phone='$phone', address='$address' WHERE id='$id'";

    // Execute the update query
    $result = mysqli_query($conn, $updateQuery);

    // Check if the update was successful
    if ($result) {
        // Redirect to the profile page after updating
        
        header("Location: profile_1.php");
        exit();
    } else {
        // Handle the error, e.g., display an error message
        $errorMessage = mysqli_error($conn);
        echo "Error updating user information: " . $errorMessage;
    }
}

?>