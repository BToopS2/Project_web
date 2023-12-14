<?php
session_start();
require_once("../../backend/auth.php");
require_once("../../utils/checkEmpty.php");

// Define a variable to store the error message
$errorMsg = '';

// Check if the OTP form is submitted
if (isset($_POST['verify'])) {
    // Verify the OTP
    $userEnteredOtp = $_POST['otp'];
    $storedOtp = $_SESSION['otp'];

    if ($userEnteredOtp == $storedOtp) {
        // OTP is valid, proceed with registration

        // Extract and format the date of birth
        $date = explode('/', $_SESSION['registration_data']['dob']);
        $dob = $date[2] . '-' . $date[1] . '-' . $date[0];

        // Perform user registration
        Auth::register(
            $_SESSION['registration_data']['username'],
            $_SESSION['registration_data']['password'],
            $_SESSION['registration_data']['fullname'],
            $dob,
            $_SESSION['registration_data']['address'],
            $_SESSION['registration_data']['gender'],
            $_SESSION['registration_data']['email'],
            $_SESSION['registration_data']['phone']
        );

        // Redirect or display a success message
        echo 'Registration successful!';
        // You can redirect here if needed: header('Location: success.php');
        exit(); // Make sure to exit after calling header() or displaying a success message
    } else {
        // Invalid OTP, set the error message
        $errorMsg = 'Mã OTP không đúng. Vui lòng kiểm tra lại !';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h2>Enter OTP</h2>
        <!-- Display the error message within the form -->
        <?php if (!empty($errorMsg)): ?>
            <p class="error"><?php echo $errorMsg; ?></p>
        <?php endif; ?>
        <label for="otp">OTP:</label>
        <input type="text" id="otp" name="otp" required>
        <button type="submit" name="verify">Verify OTP</button>
    </form>
</body>
</html>
