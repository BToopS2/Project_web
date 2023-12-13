               
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
        
        echo '<a style="color:#2AC37D;font-size:16px"  class="profile-link" href="profile_1.php">';
        echo '<img src="' . $checkCookie['img'] . '" alt="" style="width: 32px; height: 32px; border-radius: 50%; margin-right: 5px;">';
        echo $checkCookie['fullname'];
        echo '</a>';
        
        echo'<a style="font-size: 16px" href="/Project_web/backend/logoutCookie.php">
        <i class="fa fa-sign-out"></i> Đăng Xuất
      </a>';
    }
    else{
        echo '<a style="font-size:16px" href="auth/login/index.php">Đăng ký & Đăng nhập</a>';
    }
?>
<style>
  .profile-link {
    font-size: 16px;
    display: flex;
    align-items: center;
    text-decoration: none;
    color: black; /* Change the color as needed */
    transition: color 0.3s ease-in-out; /* Add a smooth transition effect on color change */
  }

  .profile-link:hover {
    color: blue; /* Change the color you want on hover */
  }

  .profile-link img {
    transition: transform 0.3s ease-in-out; /* Add a smooth transition effect on transform */
  }

  .profile-link:hover img {
    transform: scale(1.2); /* Change the scale factor for the zoom effect on hover */
  }
</style>


