<!DOCTYPE html>

<html lang="en">
  <head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
<?php
    require_once("auth.php");
    $checkCookie = Auth::loginWithCookie();
    if($checkCookie != null){
        if($checkCookie['role']==1){
            echo '<a href="admin/production/shoe.php">TRUY CẬP TRANG ADMIN</a>';
        }
        echo '<a href="./Profile.php">'.$checkCookie['fullname'].'<i class="fas fa-user"></i></a>
        <a href="/shoe/backend/logoutCookie.php">Đăng Xuất</a>';
    }
    else{
        echo '<a href="auth/login/index.php">Login & Regiser</a>';
    }
?>