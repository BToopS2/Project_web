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
    
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <style>
  /* Điều chỉnh thanh task */
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
    margin-left: 15px;
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
  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
        <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                  <p>460 West 34th Street, 15th floor, New York  -  Hotline: 804-377-3580 - 804-399-3580</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                  <div class="header__actions">
                    <?php
                      require_once("backend/filterWithCookie.php");
                    ?>
                  </div>
                </div>
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo"><a class="ps-logo" href="index.php"><img src="images/logo.png" alt=""></a></div>
          </div>
          <div class="navigation__column center">
                <ul class="main-menu menu">
                  <li class="menu-item menu-item-has-children dropdown"><a href="index.php">Home</a>
                  </li>
                  <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">Men</a></li>
                  <li class="menu-item"><a href="#">Women</a></li>
                  <li class="menu-item"><a href="#">Kids</a></li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">News</a>
                        <ul class="sub-menu">
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.php">Blog-grid</a>
                                <ul class="sub-menu">
                                  <li class="menu-item"><a href="blog-grid.php">Blog Grid 1</a></li>
                                  <li class="menu-item"><a href="blog-grid-2.php">Blog Grid 2</a></li>
                                </ul>
                          </li>
                          <li class="menu-item"><a href="blog-list.php">Blog List</a></li>
                        </ul>
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="contact-us.php">Contact</a>
                  </li>
                </ul>
          </div>
          <div class="navigation__column right">
            <form class="ps-search--header" action="do_action" method="post">
              <input class="form-control" type="text" placeholder="Search Product…">
              <button><i class="ps-icon-search"></i></button>
            </form>
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i></i></span><i class="ps-icon-shopping-cart"></i></a>
            <?php require_once("formCart.php") ?>
            </div>
            <div class="menu-toggle"><span></span></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
      </div>
    </div>
    
    <main class="ps-main">
    <style>
        /* Thêm CSS để tùy chỉnh giao diện */
        #tableShoe {
            background-color: #f8f9fa; /* Màu xám nhạt */
            color: #495057; /* Màu chữ in đẹp */
            text-align: center;
            
        }

        #tableShoe th, #tableShoe td {
            border-color: #e9ecef; /* Màu đường viền */
        }

        #tableShoe thead th {
            background-color: #343a40; /* Màu nền đen cho phần đầu bảng */
            color: #ffffff; /* Màu chữ in đẹp cho tiêu đề */
            text-align: center;
        }
        .btn-back:hover {
            background-color: #0056b3; /* Màu nền xanh dương đậm khi di chuột qua */
        }

        .badge-status {
            font-size: 12px;
            padding: 8px 12px;
        }
        .btn-back {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 15px;
            background-color: #007bff; /* Màu nền xanh dương cho nút Back */
            color: #fff; /* Màu chữ in trắng */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            
        }
        .btn-container {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
<main class="ps-main">
  
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
          
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic" style="text-align:center">
              <img id="profileImage" src="<?php echo $infoUser['img']; ?>" alt="Profile Picture" class="img-circle profile_img" style="width: 128px;height: 128px;">
              </div>
              <div class="profile_pic" style="text-align: center;" >
                  <form id="updateForm" enctype="multipart/form-data" style="text-align: center;">
                      <label for="profile_image" style="font-size: 14px; display: flex;  text-align: center !important;">Chọn ảnh Avatar:</label>
                      <input type="file" name="profile_image" id="profile_image" style="font-size: 12px; margin-bottom: 16px; padding: 8px; border: none; border-radius: 4px;">
                      <input type="button" value="Cập Nhật Avatar" onclick="updateProfilePicture()" style=" padding: 10px 20px; background-color: #c4bb1b; color: #fff; border: none; border-radius: 4px; cursor: pointer; transition: background-color 1.5s;">
                  </form>
              </div>

            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div class="container mt-5">
    <div class="row">
        <!-- Sidebar menu (left side) -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu col-md-3">
            <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                    <li>
                        <a><i class="fa fa-user"></i> Tài Khoản Của Tôi <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li style="margin-left: 15px !important; background-color: #3498db !important;color: #fff !important;"><a style href="profile_1.php" >Hồ Sơ</a></li>
                            <li><a href="card_payment.php">Phương Thức Thanh Toán</a></li>
                            <li><a href="voucher.php">Kho Voucher</a></li>
                            <!-- <li><a href="index3.html">Địa Chỉ Nhận Hàng</a></li> -->
                            <li><a href="change_password.php">Đổi Mật Khẩu</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-store"></i> Đơn Mua <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="cart_2.php">Chờ Thanh Toán</a></li>
                            <li><a href="cart_3.php">Chờ Vận Chuyển</a></li>
                            <li><a href="cart_4.php">Chờ Giao Hàng</a></li>
                            <li><a href="cart_5.php">Đã Hoàn Thành</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
       
        <div class="col-md-9" style="margin-top: -300px;">
     
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
                                      
                                <div style= " display: none;"class="form-group form-group--inline">
                                <label>ID<span>*</span></label>
                                    <input readonly value="<?php echo $infoUser['id'] ?>" class="form-control" type="text" name="id">
                                </div>
                                      <div class="form-group form-group--inline">
                                          <label><i class="fa-regular fa-user"></i>  Họ tên đầy đủ:<span> </label>
                                          <input value="<?php echo $infoUser['fullname'] ?>" class="form-control" type="text" name="name">
                                      </div>
                                      <div class="form-group form-group--inline">
                                      <label> <i class="fa-solid fa-mars-and-venus"></i>  Giới tính:</label>
                                      <select class="form-control" name="gender">
                                          <option value="1" <?php echo ($infoUser['gender'] == 1) ? 'selected' : ''; ?>>Nam</option>
                                          <option value="0" <?php echo ($infoUser['gender'] == 0) ? 'selected' : ''; ?>>Nữ</option>
                                      </select>
                                  </div>

                                  
                                  <div class="form-group form-group--inline">
                                      <label><i class="fa-regular fa-calendar-days"></i>  Ngày sinh: <span></span></label>
                                      <input value="<?php echo $infoUser['dob'] ?>" class="form-control" type="date" name="date">
                                  </div>
                                  
                                  <div class="form-group form-group--inline">
                                      <label><i class="fa-solid fa-address-card"></i>  Địa chỉ Email: <span> </span></label>
                                      <input value="<?php echo $infoUser['email'] ?>" class="form-control" type="email" name="email">
                                  </div>
                                  
                                  <div class="form-group form-group--inline">
                                      <label><i class="fa-solid fa-phone"></i>  Số điện thoại: <span></span></label>
                                      <input value="<?php echo $infoUser['phone'] ?>" class="form-control" type="text" name="Phone">
                                  </div>
                                  
                                  <div class="form-group form-group--inline">
                                      <label><i class="fa-solid fa-map-location"></i>  Địa Chỉ: </label>
                                      <input value="<?php echo $infoUser['address'] ?>" class="form-control" type="text" name="adr">
                                  </div>
                                  <script>
                                    function showSuccessMessage() {
                                        alert("Cập nhật thông tin thành công!");
                                    }
                                  </script>
                                  <div style="text-align: right;" class="form-group form-group--inline">
                                  <button onclick="showSuccessMessage()" type="submit" class="btn btn-primary">Cập nhật</button>
                                  </div>
                                      <!-- ... (Các trường nhập liệu khác) ... -->

                                      
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>

</main>

<!-- Thêm JavaScript Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function cancelOrder(event, currentPage) {
        if (confirm('Bạn có muốn hủy đơn không?')) {
            const link = event.currentTarget.getAttribute('href');
            window.location.href = link;
        } else {
            event.preventDefault();
        }
    }
</script>



      <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg" style="margin-top: 300px;">
      
      <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg"><div>
          <!-- <h3 class="ps-section__title" data-mask="Payment"> - Các Đối Tác Thanh Toán Trực Tuyến </h3> -->
                <style>
                .payment-method{float:left;width:100%}
                .payment-method ul{display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-ms-flex-align:center;align-items:center;margin:0;padding:0;list-style:none;white-space:nowrap;overflow-x:auto}
                .payment-method li{background:#f0f4f7;float:left;padding:10px;border-radius:3px}
                .payment-method li:not(:last-child){margin-right:10px}
                .payment-method img{width:116px;height:55px}
                </style>
                    <div class="payment-method">
                        <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="4">
                          <ul>
                            <!-- <li><img alt='Agribank' height='55' loading='normal' src='https://www.phanmemninja.com/wp-content/uploads/2019/04/Agribank-logo.png' width='116'/></li> -->
                            <li><img alt='MBbank' height='55' loading='normal' src='https://upload.wikimedia.org/wikipedia/commons/2/25/Logo_MB_new.png' width='116'/></li>
                            <li><img alt='zalo pay' height='55' loading='normal' src='https://cdn.jsdelivr.net/gh/thietkeblogspot/images/zalo_pay.png' width='116'/></li>
                            <li><img alt='visa' height='55' loading='normal' src='https://cdn.jsdelivr.net/gh/thietkeblogspot/images/visa.png' width='116'/></li>
                            <li><img alt='master card' height='55' loading='normal' src='https://cdn.jsdelivr.net/gh/thietkeblogspot/images/master_card.png' width='116'/></li>
                            <li><img alt='vietcombank' height='55' loading='normal' src='https://cdn.jsdelivr.net/gh/thietkeblogspot/images/vietcom_bank.png' width='116'/></li>
                            <li><img alt='vietinbank' height='55' loading='normal' src='https://cdn.jsdelivr.net/gh/thietkeblogspot/images/vietin_bank.png' width='116'/></li>
                            <li><img alt='bidvbank' height='55' loading='normal' src='https://cdn.jsdelivr.net/gh/thietkeblogspot/images/bidv_bank.png' width='116'/></li>
                            <li><img alt='sacombank' height='55' loading='normal' src='https://cdn.jsdelivr.net/gh/thietkeblogspot/images/sacom_bank.png' width='116'/></li>
                            <li><img alt='eximbank' height='55' loading='normal' src='https://cdn.jsdelivr.net/gh/thietkeblogspot/images/exim_bank.png' width='116'/></li>
                            <li><img alt='scbbank' height='55' loading='normal' src='https://cdn.jsdelivr.net/gh/thietkeblogspot/images/scb_bank.png' width='116'/></li>
                            <li><img alt='vietcapitalbank' loading='normal' src='https://cdn.jsdelivr.net/gh/thietkeblogspot/images/vietcapital_bank.png' width='116'/></li>
                          </ul>
                        </marquee>
                    </div>
          </div>
        <div class="ps-footer__content">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info">
                      <header><a class="ps-logo" href="index.php"><img src="images/logo-white.png" alt=""></a>
                        <h3 class="ps-widget__title">Address Office 1</h3>
                      </header>
                      <footer>
                        <p><strong>460 West 34th Street, 15th floor, New York</strong></p>
                        <p>Email: <a href='mailto:support@store.com'>support@store.com</a></p>
                        <p>Phone: +323 32434 5334</p>
                        <p>Fax: ++323 32434 5333</p>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info second">
                      <header>
                        <h3 class="ps-widget__title">Address Office 2</h3>
                      </header>
                      <footer>
                        <p><strong>PO Box 16122 Collins  Victoria 3000 Australia</strong></p>
                        <p>Email: <a href='mailto:support@store.com'>support@store.com</a></p>
                        <p>Phone: +323 32434 5334</p>
                        <p>Fax: ++323 32434 5333</p>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Find Our store</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--link">
                          <li><a href="#">Coupon Code</a></li>
                          <li><a href="#">SignUp For Email</a></li>
                          <li><a href="#">Site Feedback</a></li>
                          <li><a href="#">Careers</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Get Help</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li><a href="#">Order Status</a></li>
                          <li><a href="#">Shipping and Delivery</a></li>
                          <li><a href="#">Returns</a></li>
                          <li><a href="#">Payment Options</a></li>
                          <li><a href="#">Contact Us</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Products</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">Clothing</a></li>
                          <li><a href="#">Accessries</a></li>
                          <li><a href="#">Football Boots</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
            </div>
          </div>
        </div>
        <div class="ps-footer__copyright">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <p>&copy; <a href="#">SKYTHEMES</a>, Inc. All rights Resevered. Design by <a href="#"> Alena Studio</a></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <ul class="ps-social">
                      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- JS Library-->
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/gmap3.min.js"></script>
    <script type="text/javascript" src="plugins/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="plugins/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="plugins/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="plugins/slick/slick/slick.min.js"></script>
    <script type="text/javascript" src="plugins/elevatezoom/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script><script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="js/main.js"></script>
    <script>
        function updateProfilePicture() {
            var formData = new FormData($("#updateForm")[0]);

            $.ajax({
                url: "update_picture.php",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // Update the profile image on success
                    $("#profileImage").attr("src", response);
                    alert("Profile picture updated successfully");
                },
                error: function(xhr, status, error) {
                    alert("Error updating profile picture: " + xhr.responseText);
                }
            });
        }
    </script>
  </body>
  
</html>
