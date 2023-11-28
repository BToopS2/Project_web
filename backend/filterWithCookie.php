               
<div class="btn-group ps-dropdown">
    <a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span id="selectedLanguage">Language</span><i class="fa fa-angle-down"></i>
    </a>
    <ul class="dropdown-menu">
        <li><a href="#" onclick="changeLanguage('English', 'united-kingdom.png')"><img src="united-kingdom.png" alt="">English</a></li>
        <li><a href="#" onclick="changeLanguage('Vietnamese', 'vietnam1.png')"><img src="vietnam1.png" alt="">Vietnamese</a></li>
    </ul>
</div>

<script>
    function changeLanguage(language, flagImage) {
        // Cập nhật nội dung và hình ảnh của thẻ a.dropdown-toggle
        $('#selectedLanguage').html('<img src="'  + '" alt=""> ' + language);
    }
</script>

<?php
    require_once("auth.php");
    $checkCookie = Auth::loginWithCookie();
    if($checkCookie != null){
        if($checkCookie['role']==1){
            echo '<a style="color:red;font-size:16px" href="admin/production/shoe.php">TRUY CẬP TRANG ADMIN</a>';
        }
        echo '<a style="font-size:16px" href="infoprofile.php">'.$checkCookie['fullname'].'</a>
        <a style="font-size:16px" href="/shoe/backend/logoutCookie.php">Đăng Xuất</a>';
    }
    else{
        echo '<a style="font-size:16px" href="auth/login/index.php">Đăng ký & Đăng nhập</a>';
    }
?>

