<?php
  require_once("formCart2.php");
  require_once("backend/authWithCookie.php");
  require_once("backend/auth.php");
 require_once("sendemail.php");
 $sendEmail = new SendEMail();
 $infoUser = Auth::loginWithCookie();
?>

<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="TV2H">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>HUS - Contact Us</title>
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
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  
  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
        <div class="row">
        <style>
        .moving-container {
            overflow: hidden;
            white-space: nowrap;
            
        }

        .moving-content {
            font-weight: bold;
            display: inline-block;
            animation: moveLeft 20s linear infinite, blink 1s infinite; 
        }
        @keyframes moveLeft {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(-100%);
            }
        }
    
          
    </style>
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 moving-container">
        <p class="moving-content">
            334 Nguyễn Trãi, Thanh Xuân, Hà Nội - Hotline: +84123456789 - 804-399-3580
        </p>
    </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                  <div class="header__actions">
                    <?php
                      require_once("backend/filterWithCookie.php");
                    ?>
                    <!-- <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Language<i class="fa fa-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">English</a></li>
                        <li><a href="#">Japanese</a></li>
                        <li><a href="#">Chinese</a></li>
                      </ul>
                    </div> -->
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
                  <li class="menu-item menu-item-has-children dropdown"><a href="index.php">Trang Chủ</a>
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">Nam</a>
                      <ul class="sub-menu">
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.php">Nổi Bật</a>
                                <ul class="sub-menu">
                                  <li class="menu-item"><a href="#">Hàng Mới Về</a></li>
                                  <li class="menu-item"><a href="#">Mặt Hàng Bán Chạy Nhất Tuần</a></li>
                                </ul>
                          </li>
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-list.php">Giày</a>
                          <ul class="sub-menu">
                                  <li class="menu-item"><a href="#">Đá Bóng</a></li>
                                  <li class="menu-item"><a href="#">Chạy</a></li>
                                  <li class="menu-item"><a href="#">Đi Chơi</a></li>
                                </ul>
                          </li>
                        <li class="menu-item menu-item-has-children dropdown"><a href="blog-list.php">Quần Áo</a>
                          <ul class="sub-menu">
                                  <li class="menu-item"><a href="#">Áo polo & Áo Khoác</a></li>
                                  <li class="menu-item"><a href="#">Áo Hoodie</a></li>
                                  <li class="menu-item"><a href="#">Quần</a></li>
                                </ul>
                          </li>
                      </ul>
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">Nữ</a>
                      <ul class="sub-menu">
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.php">Nổi Bật</a>
                                <ul class="sub-menu">
                                  <li class="menu-item"><a href="#">Hàng Mới Về</a></li>
                                  <li class="menu-item"><a href="#">Mặt Hàng Bán Chạy Nhất Tuần</a></li>
                                </ul>
                          </li>
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-list.php">Giày</a>
                                <ul class="sub-menu">
                                  <li class="menu-item"><a href="#">Quần Vợt</a></li>
                                  <li class="menu-item"><a href="#">Chạy</a></li>
                                  <li class="menu-item"><a href="#">Đi Chơi</a></li>
                                </ul>
                          </li>
                        <li class="menu-item menu-item-has-children dropdown"><a href="blog-list.php">Quần Áo</a>
                          <ul class="sub-menu">
                                  <li class="menu-item"><a href="#">Áo polo & Áo Khoác</a></li>
                                  <li class="menu-item"><a href="#">Áo Hoodie</a></li>
                                  <li class="menu-item"><a href="#">Quần</a></li>
                                  <li class="menu-item"><a href="#">Váy</a></li>
                                </ul>
                          </li>
                      </ul> 
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">Trẻ Em</a>
                        <ul class="sub-menu">
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.php">Trẻ Em(4-8)</a>
                                <ul class="sub-menu">
                                  <li class="menu-item"><a href="#">Quần Áo Bé Trai</a></li>
                                  <li class="menu-item"><a href="#">Quần Áo Bé Gái</a></li>
                                  <li class="menu-item"><a href="#">Giày Bé Trai</a></li>
                                  <li class="menu-item"><a href="#">Giày Bé Gái</a></li>
                                </ul>
                          </li>
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-list.php">Thanh Thiếu Niên(8-16)</a>
                                <ul class="sub-menu">
                                  <li class="menu-item"><a href="#">Quần Áo Bé Trai</a></li>
                                  <li class="menu-item"><a href="#">Quần Áo Bé Gái</a></li>
                                  <li class="menu-item"><a href="#">Giày Bé Trai</a></li>
                                  <li class="menu-item"><a href="#">Giày Bé Gái</a></li>
                                </ul>
                          </li>
                          <li class="menu-item menu-item-has-children dropdown"><a href="#">Trẻ Nhỏ & Trẻ Mới Biết Đi(1-4)</a>
                                <ul class="sub-menu">
                                  <li class="menu-item"><a href="#">Quần Áo</a></li>
                                  <li class="menu-item"><a href="#">Giày</a></li>
                                </ul>
                          </li>
                      </ul>
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">Tin Tức</a>
                        <ul class="sub-menu">
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.php">Mặt Hàng Bán Chạy</a>
                                <ul class="sub-menu">
                                  <li class="menu-item"><a href="blog-grid.php">Giày</a></li>
                                  <li class="menu-item"><a href="blog-grid-2.php">Quần Áo</a></li>
                                </ul>
                          </li>
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-list.php">Đánh Giá</a>
                                <ul class="sub-menu">
                                  <li class="menu-item"><a href="blog-grid.php">Mặt Hàng Được Đánh Giá Nhiều Nhất</a></li>
                                  <li class="menu-item"><a href="blog-grid-2.php">Mặt Hàng Được Đánh Giá Ít</a></li>
                                </ul>
                          </li>
                        </ul>
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="contact-us.php">Liên Hệ</a>
                  </li>
                </ul>
          </div>
          
          <div class="navigation__column right">
            <form class="ps-search--header" action="do_action" method="post">
              <input class="form-control" type="text" placeholder="Search Product…">
              <button><i class="ps-icon-search"></i></button>
            </form>
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i><?php echo $cartList->num_rows ?></i></span><i class="ps-icon-shopping-cart"></i></a>
            <?php require_once("formCart.php") ?>
            </div>
            <div class="menu-toggle"><span></span></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with HUS Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with HUS Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with HUS Store</p>
      </div>
    </div>
    <main class="ps-main">
      
      <div class="ps-contact ps-section pb-80">
        <!-- <div id="contact-map" data-address="New York, NY" data-title="HUS Store!" data-zoom="17"></div> -->
        
        <div class="ps-container">
        <h2>Địa chỉ: 334 Nguyễn Trãi, Thanh Xuân, Hà Nội </h2>
        <h3><li>Phone Number: +84 123 456 789</li></h3>
        <h3><li><a href='https://maps.app.goo.gl/hfktGXMpHjWZUhVX9' target="_blank">Google Maps:</a></li></h3>
        <hr>
        <p></p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.9192897099383!2d105.805402275962!3d20.995872180645204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acbf0df2c0e5%3A0xd740a66998e1a0ed!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBLaG9hIGjhu41jIFThu7Egbmhpw6puLCDEkOG6oWkgaOG7jWMgUXXhu5FjIGdpYSBIw6AgTuG7mWk!5e0!3m2!1svi!2s!4v1700935491140!5m2!1svi!2s" 
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <p></p>
          <p></p>
          <hr>
          
          <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div class="ps-section__header mb-50">
                    
                    <h2 class="ps-section__title" data-mask="Contact">- Get in touch</h2>
                    <form class="ps-contact__form" action="" method="post">
                      <div class="row">   
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                              <div class="form-group">
                                <label>Name <sub>*</sub></label>
                                <input value="<?php echo $infoUser['fullname'] ?>" name="name" class="form-control" type="text" placeholder="" required>
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                              <div class="form-group">
                                <label>Email <sub>*</sub></label>
                                <input value="<?php echo $infoUser['email'] ?>"  name="email" class="form-control" type="email" placeholder="" required>
                              </div>
                            </div>

                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                              <div class="form-group mb-25">
                                <label>Your Message <sub>*</sub></label>
                                <textarea name="content" class="form-control" rows="6" required></textarea>
                              </div>
                              <div class="form-group">
                             
                              <button name="send_email"  class="ps-btn">Send Message<i class="ps-icon-next"></i></button>
                              </div>
                            </div>                                    
                      </div>
                    <?php
                                            
                                           if (isset($_POST['send_email'])) {
                                              $name = $_POST['name'];
                                              $email = $_POST['email'];
                                              $content = $_POST['content'];
                                              $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$content')";
                                          
                                              if ($conn->query($sql) === TRUE) {
                                                   echo '<div style="background-color: #dff0d8; font-size:15px; border-radius:5px; color: #3c763d; border: 1px solid #d6e9c6; padding: 15px; margin-bottom: 20px;">';
                                                  echo '<i class="fa fa-check-circle"></i>Cảm ơn bạn đã quan tâm! Chúng tôi sẽ phản hồi trong thời gian sớm nhất !';
                                                  echo '</div>';
                                              } else {
                                                  echo '<div style="background-color: #f2dede; color: #a94442; border: 1px solid #ebccd1; padding: 15px; margin-bottom: 20px;">';
                                                  echo 'Error: ' . $sql . '<br>' . $conn->error;
                                                  echo '</div>';
                                              }
                                          }
                      // Hiển thị thông báo cảm ơn hoặc lỗi (nếu có)
                    //   if (isset($success_message)) {
                    //       echo '<p class="success-message">' . $success_message . '</p>';
                    //     }

                    //     if (isset($error_message)) {
                    //       echo '<p class="error-message">' . $error_message . '</p>';
                    //   }
                    // ?>

                    </form>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div class="ps-section__content">
                    <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="ps-contact__block" data-mh="contact-block">
                              <header>
                                <h3>Hoàng Hữu Hiếu<span>Admin</span></h3>
                              </header>
                              <footer>
                                <p><i class="fa fa-map-marker"></i>Thanh Xuân ,Hà Nội</p>
                                <p><i class="fa fa-envelope-o"></i><a href="mailto@supportShoes@shoes.net">hoanghuuhieu_t65@gmail.com</a></p>
                                <p><i class="fa fa-phone"></i> ( +84 ) 9892 2324  -  9401 123 003</p>
                              </footer>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="ps-contact__block" data-mh="contact-block">
                              <header>
                                <h3>Nguyễn Anh Tuấn <span>Admin</span>

                              </header>
                              
                              <footer>
                                <p><i class="fa fa-map-marker"></i> Thanh Xuân ,Hà Nội</p>
                                <p><i class="fa fa-envelope-o"></i><a href="mailto@supportShoes@shoes.net">nguyenanhtuan3_t65@hus.edu.vn</a></p>
                                <p><i class="fa fa-phone"></i> ( +84 ) 9892 2324  -  9401 123 003</p>
                              </footer>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="ps-contact__block" data-mh="contact-block">
                              <header>
                                <h3>Nguyễn Triệu Vương<span>Admin</span></h3>
                              </header>
                              <footer>
                                <p><i class="fa fa-map-marker"></i> Thanh Xuân ,Hà Nội</p>
                                <p><i class="fa fa-envelope-o"></i><a href="mailto@supportShoes@shoes.net">nguyentrieuvuong@gmail.com</a></p>
                                <p><i class="fa fa-phone"></i> ( +84 ) 9892 2324  -  9401 123 003</p>
                              </footer>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="ps-contact__block" data-mh="contact-block">
                              <header>
                                <h3>Trần Bỉnh Hướng<span>Admin</span></h3>
                              </header>
                              <footer>
                                <p><i class="fa fa-map-marker"></i> Thanh Xuân ,Hà Nội</p>
                                <p><i class="fa fa-envelope-o"></i><a href="mailto@supportShoes@shoes.net">tranbinhhuong@gmail.com</a></p>
                                <p><i class="fa fa-phone"></i> ( +84 ) 9892 2324  -  9401 123 003</p>
                              </footer>
                            </div>
                          </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
      <div class="ps-subscribe">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                  <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                  <form class="ps-subscribe__form" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="">
                    <button>WELCOME</button>
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
                        <p><strong>334 Nguyễn Trãi, Thanh Xuân, Hà Nội</strong></p>
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
                        <p><strong>144 Xuân Thủy, Cầu Giấy, Hà Nội</strong></p>
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
                    <p>&copy; <a href="#">HUSTHEMES</a>, Inc. All rights Resevered. Design by <a href="#"> TV2H_team</a></p>
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
  </body>
</html>