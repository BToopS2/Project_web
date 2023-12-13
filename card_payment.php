
<?php
require_once("formCart2.php");
require_once("backend/authWithCookie.php");
require_once("backend/auth.php");
require_once("repository/cartRepository.php");
require_once("repository/shoeRepository.php");

$cartRepository = new CartRepository();
$shoeRepository = new ShoeRepository();



// 
require_once("backend/filterUser.php");
require_once("repository/orderRepository.php");

$orderRepository = new OrderRepository();
$infoUser = Auth::loginWithCookie();
$id=$infoUser['id'];
$orderList = $orderRepository->getAll2($id);
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
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i><?php echo $cartList->num_rows ?></i></span><i class="ps-icon-shopping-cart"></i></a>

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
      <div style="margin-top:70px" class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <!-- <div class="navbar nav_title" style="border: 0;">
          
            </div> -->

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
            <div class="profile_pic">
              <img id="profileImage" src="<?php echo $infoUser['img']; ?>" alt="Profile Picture" class="img-circle profile_img" style="width: 128px;height: 128px;">
              </div>
              <div class="profile_info">
                <span>Xin chào,</span>
                <h2> <?php echo $infoUser['fullname'] ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div class="container mt-5">
    <div class="row">
        <!-- Sidebar menu (left side) -->
        <div style="padding-left: 0" id="sidebar-menu" class="main_menu_side hidden-print main_menu col-md-3">
            <hr>
            <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                    <li>
                        <a><i class="fa fa-user"></i> Tài Khoản Của Tôi <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="profile_1.php">Hồ Sơ</a></li>
                            <li><a href="card_payment.php" >Phương Thức Thanh Toán</a></li>
                            <li><a href="index3.html">Địa Chỉ Nhận Hàng</a></li>
                            <li><a href="index4.html">Đổi Mật Khẩu</a></li>
                        </ul>
                    </li>
                    <li>
                        <a><i class="fa fa-store"></i> Đơn Mua <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="cart_2.php">Chờ Xác Nhận</a></li>
                            <li><a href="cart_3.php">Chờ Vận Chuyển</a></li>
                            <li><a href="cart_4.php">Chờ Giao Hàng</a></li>
                            <li><a href="cart_5.php">Đã Hoàn Thành</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
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
        <div class="col-md-9" style="margin-top: -250px;">
            <div class="col-md-12">
            <style>
              
        .link-button {
            margin-top: 15px !important;
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            /* position: relative; */
        }

        .link-button i {
            margin-right: 5px;
        }

        .tooltip {
            visibility: hidden;
            width: 120px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -60px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .link-button:hover .tooltip {
            visibility: visible;
            opacity: 1;
        }

        .card-input-container {
            display: none;
            margin-top: 20px;
        }

        .card-input {
            margin-bottom: 10px;
        }
    </style>
        </head>
        <body>
        <p></p>

        <div  class="col-md-12">
            <h2> <i class="fa-regular fa-credit-card"></i> Liên Kết Thẻ Thanh Toán Ngân Hàng</h2>
                        
            <h3> <i class="fa-solid fa-user-shield"></i> Hãy Bảo Mật Thông Tin Thẻ Của Bạn(<code>chỉ được liên kết 01 thẻ</code>)</h3>
            

            <hr>
            <h3> Thêm Liên kết Thẻ Ngân Hàng: <span style="padding-left: 200px"> <button id="hienFormBtn" class="link-button"><i class="fa-solid fa-plus"></i> Thêm/Cập Nhật Thẻ</button> </span> </h3>


            <div><img height='280px' width='100%' src="logobank1.png"> </div>
            
            <style>
            /* styles.css */

        .anForm {
            display: none;
        }
        

        .hienForm {
          
            border-radius: 5px !important;
            display: block;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            border: 1px solid #3fcf1b;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
        }
        .hienForm button.close {
                position: absolute;
                top: 10px;
                right: 10px;
                cursor: pointer;
                background: none;
                border: none;
                font-size: 20px;
                color: red;
            }
        body.no-scroll {
                overflow: hidden;
                background-color:#eee;
            }
            
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
            padding-left: 150px;
        }

        .form-group--inline label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group--inline input,
        .form-group--inline select {
            width: 250px;
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
        /* body.hienForm {
            background-color: #eee; /
        } */
    
      </style>

<body>
    
    <div id="formContainer" class="anForm">
    <button class="close" onclick="dongForm()">X</button>
    <form class="ps-checkout__form" action="Update_cardpayment.php" method="post">
      <h3><i class="fa-regular fa-credit-card"></i> Thêm Thẻ</h3>
            <p></p>
            <svg  width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M18.3967 3.16068C18.6982 3.25569 18.8995 3.44565 18.8995 3.73051H18.8995C18.8995 3.73848 18.9023 3.76656 18.907 3.81329C18.9585 4.32277 19.234 7.04877 18.4974 10.0938C17.9946 12.0883 17.0897 13.7978 15.9835 15.2221C14.5755 16.9317 12.665 18.1666 10.3521 18.9263C10.0505 19.0212 9.84935 19.0212 9.64811 18.9263C7.33535 18.1664 5.42467 16.9317 4.01674 15.2221C2.81003 13.7978 2.00547 12.0883 1.50272 10.0938C0.765904 7.04916 1.04149 4.32328 1.09304 3.81341C1.09777 3.76661 1.10062 3.73848 1.10062 3.73049C1.201 3.44554 1.30161 3.25559 1.60334 3.16068L9.54758 1.07127C9.74871 0.976243 10.1508 0.976243 10.4527 1.07127L18.3967 3.16068ZM9.95022 17.5966C13.671 16.4569 16.0842 13.7975 17.0899 9.80867L17.0899 9.80869C17.6933 7.43454 17.5927 5.15512 17.4923 4.2053L9.95022 2.21094L2.40832 4.2053C2.30781 5.15512 2.20719 7.33941 2.81055 9.80867C3.81611 13.7975 6.22951 16.3618 9.95022 17.5966Z" fill="#30B566"></path><path d="M6 8.92308L8.69238 11.6413C8.88802 11.8389 9.20722 11.8389 9.40286 11.6413L14 7" stroke="#30B566" stroke-width="1.5"></path></svg><span style="color:#2ac37d; font-size: 17px;" > Thông tin thẻ của bạn được bảo mật.</span> <p></p>
              <img style=" width: 60px; height: 48px; margin-left: 145px;" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/9f6f1831fb61c65952c4cdb1189d7cb8.png" ></img>
              <img style=" width: 60px; height: 48px;" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/dbce829e363223fdf7e24a5a589f4372.png" ></img>
              <img style=" width: 60px; height: 48px;" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/e311f6075402f7eb4408e3775575a786.png" ></img>
              <img style=" width: 60px; height: 48px;" src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg/542a8a575c46b45871881dcf4a4dd1fb.png" ></img>
            <div style="display: none"; class="form-group form-group--inline" >
                <label>ID<span>*</span></label>
                <input readonly value="<?php echo $infoUser['id'] ?>" class="form-control" type="text" name="id">
            </div>
            <div class="form-group form-group--inline">
                <label>Tên Thẻ<span style=" color:red">*</span> </label>
                <input required value="<?php echo $infoUser['cardName'] ?>" class="form-control" type="text" name="cardname">
            </div>
            <div class="form-group form-group--inline">
                <label>Loại thẻ<span style=" color:red">*</span> </label>
                <input required value="<?php echo $infoUser['cardType'] ?>" class="form-control" type="text" name="cardtype">
            </div>
            <div class="form-group form-group--inline">
                <label>Số Thẻ<span style=" color:red">*</span> </label>
                <input placeholder="VD: 1234423156788769 " required value="<?php echo $infoUser['cardNumber'] ?>" class="form-control" type="text" name="cardnumber">
            </div>
            <div class="form-group form-group--inline">
                <label>Tên Chủ Thẻ<span style=" color:red">*</span></label>
                <input placeholder="VD: NGUYEN VAN A" required value="<?php echo $infoUser['cardHolder'] ?>" class="form-control" type="text" name="cardholder">
            </div>
            <div class="form-group form-group--inline">
                <label>Ngày Hết Hạn<span style=" color:red">*</span></label>
                <input placeholder="MM/YY (VD: 03/69) " required value="<?php echo $infoUser['expireDate'] ?>" class="form-control" type="text" name="expiredate">
            </div>
            

            <input type="submit" class="btn btn-primary" style="margin-bottom: 30px;margin-left: 309px;"value="Submit">
        </form>
    </div>

    
</body>
<script>
    var hienFormBtn = document.getElementById('hienFormBtn');
    var formContainer = document.getElementById('formContainer');
    var body = document.body;

    hienFormBtn.addEventListener('click', function() {
        formContainer.classList.toggle('hienForm');
        body.classList.toggle('no-scroll');
        // body.classList.toggle('hienForm');
    });
    function dongForm() {
            formContainer.classList.remove('hienForm');
            body.classList.remove('no-scroll');
            // body.classList.remove('hienForm');
        }
</script>
    
   
      
    
    
    <hr>
    <style>
    /* Thêm lớp chung cho accordion */
    .hope-accordion {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Thiết lập font chữ */
    }

    /* Tùy chỉnh giao diện của accordion-item */
    .hope-accordion-item {
        background-color: #f4f4f4; /* Màu nền của mỗi item */
        border: 1px solid #ddd; /* Viền của mỗi item */
        border-radius: 8px; /* Bo tròn góc cho mỗi item */
        margin-bottom: 10px; /* Phần cách giữa các item */
    }

    /* Tùy chỉnh giao diện của accordion-button */
    .hope-accordion-button {
        background-color: #3498db; /* Màu nền của nút */
        color: #fff; /* Màu chữ của nút */
        border: 1px solid #3498db; /* Viền của nút */
        border-radius: 8px; /* Bo tròn góc cho nút */
        padding: 10px; /* Phần padding của nút */
        text-align: left; /* Căn lề chữ sang trái */
    }

    /* Tùy chỉnh giao diện của accordion-body */
    .hope-accordion-body {
        padding: 15px; /* Phần padding bên trong accordion-body */
    }
</style>


    
<div class="hope-accordion" id="accordionExample">
    <div class="hope-accordion-item">
        <h4 class="hope-accordion-header" id="headingOne" style="margin-left: 15px;background-color: #3498db;border-radius: 8px;margin-right: 15px;">
            <button class="hope-accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fa-regular fa-credit-card"></i> Danh Thẻ Ngân Hàng Đã Liên Kết <i class="fa-regular fa-credit-card"></i>
            </button>
        </h4>
          <style>
            /* Thêm các kiểu chung cho thẻ div */
            .primary-gradient-card {
                background: linear-gradient(45deg, #4CAF50, #2196F3); /* Màu gradient nền */
                color: #ffffff; /* Màu chữ */
                padding: 20px; /* Khoảng cách nội dung với mép thẻ */
                width: 450px; /* Độ rộng của thẻ */
                height:257px;
                border-radius: 15px; /* Bo tròn góc */
                box-shadow: 9px 5px 10px 5px rgb(0 0 0 / 30%); /* Hiệu ứng bóng đổ */
            }

            /* Căn lề và khoảng cách cho các phần tử trong thẻ div */
            .primary-gradient-card .d-flex {
                margin-bottom: 15px; /* Khoảng cách giữa các phần tử dạng flex */
            }

            /* Kiểu chữ cho các tiêu đề */
            .primary-gradient-card h5 {
                font-size: 25px;
                font-weight: bold;
                margin-bottom: 5px; /* Khoảng cách giữa tiêu đề và nội dung dưới đó */
            }

            /* Hiệu ứng hover cho tiêu đề */
            .primary-gradient-card h5:hover {
                /* text-decoration: underline; Gạch chân khi hover */
            }

            /* Kiểu chữ cho các số thẻ */
            .primary-gradient-card .card-number {
               
                font-size: 1.8em; /* Kích thước chữ số thẻ */
            }

            /* Định dạng các phần tử trong phần expire date */
            .primary-gradient-card .mb-2 p,
            .primary-gradient-card .d-flex h6 {
                color:#e0d0d0;
                font-size: 0.9em; /* Kích thước chữ cho thông tin nhỏ */
            }

            /* Hiệu ứng hover cho Expire Date */
            .primary-gradient-card .mb-2 p:hover,
            .primary-gradient-card .d-flex h6:hover {
                color: #ffcc00; /* Đổi màu chữ khi hover */
            }


          </style>
        <div id="collapseOne" class="hope-accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="hope-accordion-body" style="background-color:#eee">
            

            <div class="p-4 border border-white rounded primary-gradient-card">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5 class="font-weight-bold"><?php echo $infoUser['cardName']; ?> <span style="padding-left: 100px; "> <?php echo $infoUser['cardType']; ?> <span> </h5>
                    
                    </div>
                    <div class="master-card-content">
                    <img src="iconsimcard.png">
                        <!-- Icons for card -->
                    </div>
                </div>
                <div class="my-4">
                    <div class="card-number">
                        <span class="fs-5 me-2"><?php echo $infoUser['cardNumber']; ?></span>
                    </div>
                </div>
                <div class="mb-2 d-flex align-items-center justify-content-between">
                    <p class="mb-0" style="font-size:20px" ><?php echo $infoUser['cardHolder']; ?></p>
                    <p style="padding-left:260px; font-size:16px" class="mb-0"> Expire Date: <?php echo $infoUser['expireDate']; ?></p>
                </div>
            </div>
            
              <!-- <button style="border-radius :3px; background-color: #1d93d5; " class="link-button" > Sửa Thẻ </button> -->
              <!-- <td><a class="btn btn-danger" href="delete_cardpayment.php" role="button" onclick="return confirm('Bạn có muốn xóa không?');">Xóa</a></td> -->

              <!-- <span style="padding-left:335px"> <button style="border-radius :3px; background-color: #ec412c;  " class="link-button"> Xóa thẻ </button></span> -->
        </div>
         
    </div>
    <!-- Add more accordion items as needed -->
</div>

    
    
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
