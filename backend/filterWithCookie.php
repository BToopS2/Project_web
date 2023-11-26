<div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">English</a></li>
                        <li><a href="#">Vietnamese</a></li>
                        <li><a href="#">Chinese</a></li>
                      </ul>
                    </div>
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

