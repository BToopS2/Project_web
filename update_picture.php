<?php
// Include the UserRepository class definition
require_once("repository/UserRepository.php");

// Include the authentication class
require_once("backend/authWithCookie.php");
require_once("backend/auth.php");

// Get user information from the cookie
$infoUser = Auth::loginWithCookie();

// Assuming you have ID and profile image in the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userRepo = new UserRepository();

    // Get user ID from the authenticated user
    $id = $infoUser['id']; // Replace with the actual way you get the user ID

    // Assuming you have a form input named 'profile_image'
    $uploadedFile = $_FILES['profile_image'];

    // Directory where you want to store the uploaded files
    $targetDirectory = "images/avatar/";  // Điều chỉnh đường dẫn tùy thuộc vào thư mục bạn muốn lưu trữ tệp
    // $img="images/avatar/default_avatar.png";
    // Check if a new file was uploaded
    if ($uploadedFile['size'] > 0) {
        // Call the updateProfilePicture function
        $profilePicturePath = $targetDirectory . basename($uploadedFile["name"]);
        $userRepo->updateProfilePicture($id, $profilePicturePath);

        // Move the uploaded file to the specified directory
        move_uploaded_file($uploadedFile["tmp_name"], $profilePicturePath);

        // Echo the updated profile picture path
        echo $profilePicturePath;
    } else {
        // Use default image path if no new file is uploaded
        $defaultImagePath = "images/avatar/default_avatar.png"; // Điều chỉnh đường dẫn tùy thuộc vào hình ảnh mặc định của bạn
        $userRepo->updateProfilePicture($id, $defaultImagePath);

        // Echo the default image path
        echo $defaultImagePath;
    }
}
?>
