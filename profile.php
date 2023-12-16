<?php
  
  require_once("backend/authWithCookie.php");
  require_once("backend/auth.php");
  require_once("repository/cartRepository.php");
  require_once("repository/shoeRepository.php");
  require_once("repository/orderRepository.php");
  $cartRepository = new CartRepository();
  $shoeRepository = new ShoeRepository();
  $orderRepository = new OrderRepository();

  $infoUser = Auth::loginWithCookie();
  
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="apple-touch-icon.png" rel="icon">
    <meta name="author" content="TV2H">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>HUS - Info</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="plugins/revolution/css/navigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="apple-touch-icon.png" rel="icon">
    <meta name="author" content="TV2H">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>HUS - Info</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="plugins/revolution/css/navigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* ... (CSS của bạn) ... */
        .nav.child_menu>li>a
  /* .profile_info h2  */
  {
    margin-left: 15px; /* Cách lề trái 10px */
    font-size: 16px; /* Kích thước chữ */
  }
  .navbar.nav_title {
    background-color: #fff; /* Màu nền của thanh task */
    color: #fff; /* Màu chữ của thanh task */
  }

  /* Chỉnh màu chữ của các menu */
  .nav.side-menu a {
    color: black; /* Màu chữ của các menu */
    font-size: 16px;
  }

  /* Điều chỉnh màu chữ của menu con khi hover */
  .nav.child_menu a:hover {
    color: green; /* Màu chữ của menu con khi hover */
  }

  /* Điều chỉnh màu nền và chữ của menu được chọn */
  .nav.child_menu>li.current-page,
  .nav.child_menu>li.current-page a {
    background-color: #3498db; /* Màu nền của menu được chọn */
    color: #fff; /* Màu chữ của menu được chọn */
  }

  /* Chỉnh màu của icon fa */
  .fa {
    font-size: 20px;
    color: green ; /* Màu của icon fa */
  }

  /* Chỉnh màu chữ và background của hồ sơ và đơn mua */
  .profile_info h2,
  .nav.child_menu>li>a {
    color: black; /* Màu chữ của hồ sơ và đơn mua */
  }

  /* Điều chỉnh màu nền và chữ của footer */
  .ps-footer {
    background-color: #2c3e50; /* Màu nền của footer */
    color: #ecf0f1; /* Màu chữ của footer */
  }

  /* Chỉnh màu của icon xã hội */
  .ps-social a {
    color: #ecf0f1; /* Màu của icon xã hội */
  }
    </style>
</head>
<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3">
            
                        <div class="container body">
                          <div class="main_container">
                            <div class="col-md-3 left_col">
                              <div class="left_col scroll-view">
                                <div class="navbar nav_title" style="border: 2px;">
                              
                                </div>

                                <div class="clearfix"></div>

                                <!-- menu profile quick info -->
                                <div class="profile clearfix">
                                  <div style="text-align:center" class="profile_pic" style="text-align:center">
                                    <img  src="admin\production\images\img.jpg" alt="..." class="img-circle profile_img">
                                  </div>
                                  <div class="profile_info" style="text-align: center;">
                                    <span>Xin chào,</span>
                                    <h2> <?php echo $infoUser['fullname'] ?></h2>
                                  </div>
                                </div>
                <!-- Các phần bên trái đã giữ nguyên -->
            </div>

            <div class="col-md-9">
                <!-- Nội dung bên phải -->
                
                <div class="ps-checkout pt-80 pb-80">
                    <div class="ps-container">
                        <form class="ps-checkout__form" action="Update_Profile.php" method="post">
                            <!-- Nội dung form -->
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <!-- Nội dung form - bên trái -->
                                    <div class="ps-checkout__billing">
                                        <h3><i class=""></i> Hồ sơ của tôi</h3>
                                        <h4>Quản lý thông tin hồ sơ để bảo mật tài khoản</h4>
                                        <p><hr></p>
                                        
                                        <!-- Các trường nhập liệu và thông tin cá nhân -->
                                        <!-- ... (Các trường nhập liệu khác) ... -->
                                    </div>
                                    
                                    
                                </div>
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        function showSuccessMessage() {
            alert("Cập nhật thông tin thành công!");
        }
    </script>
</body>
</html>
