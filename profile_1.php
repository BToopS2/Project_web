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
    <link href="favicon.png" rel="icon">
    <meta name="author" content="Nghia Minh Luong">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>HUS - Info</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

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
        .ps-checkout__billing {
            background-color: #f8f8f8;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .ps-checkout__billing h3 {
            color: #333;
        }

        .ps-checkout__billing h4 {
            color: #777;
        }

        .ps-checkout__billing hr {
            border-color: #ddd;
        }

        .form-group--inline {
            margin-bottom: 15px;
        }

        .form-group--inline label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group--inline input,
        .form-group--inline select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn-primary {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }
    </style>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3">
              
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
                <label><i class="fa-solid fa-map-location"></i>  Địa chỉ nhà: </label>
                <input value="<?php echo $infoUser['address'] ?>" class="form-control" type="text" name="adr">
            </div>
            
            

                                        <!-- ... (Các trường nhập liệu khác) ... -->

                                        <button type="submit" class="btn btn-primary">Cập nhật</button>
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
</body>
    
  
                     
      
      <div class="ps-subscribe">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                  <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                  <form class="ps-subscribe__form" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="">
                    <button>Sign up now</button>
                  </form>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                  <p>...and receive  <span>$20</span>  coupon for first shopping.</p>
                </div>
          </div>
        </div>
      </div>
      <div class="ps-footer bg--cover" data-background="images/background/parallax.jpg">
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
                    <p>&copy; <a href="#">HUS_DEGINER</a>, Inc. All rights Resevered. Design by <a href="#"> Alena Studio</a></p>
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
    
    <!-- jQuery -->

    <script src="admin/vendors/jquery/dist/jquery.min.js"></script>
                        <!-- Bootstrap -->
                      <script src="admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                        <!-- FastClick -->
                        <script src="admin/vendors/fastclick/lib/fastclick.js"></script>
                        <!-- NProgress -->
                        <script src="admin/vendors/nprogress/nprogress.js"></script>
                        <!-- Chart.js -->
                        <script src="admin/vendors/Chart.js/dist/Chart.min.js"></script>
                        <!-- jQuery Sparklines -->
                        <script src="admin/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
                        <!-- Flot -->
                        <script src="admin/vendors/Flot/jquery.flot.js"></script>
                        <script src="admin/vendors/Flot/jquery.flot.pie.js"></script>
                        <script src="admin/vendors/Flot/jquery.flot.time.js"></script>
                        <script src="admin/vendors/Flot/jquery.flot.stack.js"></script>
                        <script src="admin/vendors/Flot/jquery.flot.resize.js"></script>
                        <!-- Flot plugins -->
                        <script src="admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
                        <script src="admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
                        <script src="admin/vendors/flot.curvedlines/curvedLines.js"></script>
                        <!-- DateJS -->
                        <script src="admin/vendors/DateJS/build/date.js"></script>
                        <!-- bootstrap-daterangepicker -->
                        <script src="admin/vendors/moment/min/moment.min.js"></script>
                        <script src="adminvendors/bootstrap-daterangepicker/daterangepicker.js"></script>
                        
                        <!-- Custom Theme Scripts -->
                        <script src="admin/build/js/custom.min.js"></script>
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
  </body>
</html>