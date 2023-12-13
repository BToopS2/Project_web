<?php
require_once (__DIR__."../../connect.php") ;
class Auth{
    public static function checkExist($field, $value){
        global $conn;
        $sql = "SELECT * FROM user WHERE $field='$value'";
        $run = mysqli_query($conn, $sql);
        if($run->num_rows > 0){
            echo '<script>alert("'.$field.' đã tồn tại")</script>';
            return false;
        }
        return true;
    }

    public static function register($username, $password, $fullname, $dob, $address, $gender, $email, $phone){
        global $conn;
        if(Auth::checkExist("username", $username) && Auth::checkExist("email", $email) && Auth::checkExist("phone", $phone)){ 
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO user(username, password, fullname, dob, address, gender, email, phone, role)".
                   " VALUES ('$username', '$passwordHash', '$fullname', '$dob', '$address', $gender, '$email', '$phone', 0)";
            $run = mysqli_query($conn, $sql);
            if ($run) {
                echo '<script>alert("Đăng ký thành công!"); window.location.href="../login/index.php";</script>';
            } else {
                echo '<script>alert("Đăng ký không thành công!");</script>';
            }
        }
    }

    public static function login($username, $password){
        $user = Auth::findOneByUsername($username);

        if ($user && password_verify($password, $user['password'])) {
            setcookie("username", $user['username'], time() + 1314000, "/");
            setcookie("password", $user['password'], time() + 1314000, "/");
            return true;
        }

        return false;
    }

    public static function findOneByUsername($username){
        global $conn;
        $sql = "SELECT * FROM user WHERE username = '$username'";
        $run = mysqli_query($conn, $sql);

        return ($run && $run->num_rows > 0) ? $run->fetch_assoc() : null;
    }

    public static function loginWithCookie(){
        if(isset($_COOKIE['username']) && isset($_COOKIE['password'])) {    
            $username = $_COOKIE['username'];
            $password = $_COOKIE['password'];

            $user = Auth::findOneByUsername($username);

            return ($user && $user['password'] === $password) ? $user : null;
        }

        return null;
    }
}

?>
