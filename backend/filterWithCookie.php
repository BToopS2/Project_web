<?php
    require_once("auth.php");
    $checkCookie = Auth::loginWithCookie();
    if($checkCookie != null){
        if($checkCookie['role']==1){
            echo '<a style="color:red" href="admin/production/shoe.php">TRUY CẬP TRANG ADMIN</a>';
        }
        echo '<a href="#">'.$checkCookie['fullname'].'</a>
        <a href="/shoe/backend/logoutCookie.php">Đăng Xuất</a>';
    }
    else{
        echo '<a href="auth/login/index.php">Đăng ký & Đăng nhập</a>';
    }
?>