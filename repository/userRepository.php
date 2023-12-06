<?php
require_once(__DIR__ . "../../connect.php");

class UserRepository
{
    public function getAll()
    {
        global $conn;
        $sql = "SELECT * FROM user";
        return mysqli_query($conn, $sql);
    }

    public function getById($id)
    {
        global $conn;
        $sql = "SELECT * FROM user WHERE id=$id";
        return mysqli_query($conn, $sql)->fetch_assoc();
    }

    public function deleteById($id)
    {
        global $conn;
        $sql = "DELETE FROM user WHERE id=$id";
        mysqli_query($conn, $sql);
    }

    public function updateById($id, $fullname, $email, $phone, $role)
    {
        global $conn;
        $sql = "UPDATE user SET fullname='$fullname', email='$email', phone='$phone', role=$role WHERE id=$id";
        mysqli_query($conn, $sql);
    }

    public function updateProfilePicture($id, $profilePicturePath)
    {
        global $conn;
        $sql = "UPDATE user SET img='$profilePicturePath' WHERE id=$id";
        mysqli_query($conn, $sql);
    }
}
?>
