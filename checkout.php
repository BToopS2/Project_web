<?php
  require_once("formCart2.php");
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
    <title>HUS - Checkout</title>
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
  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
        <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                  <p>334 Nguyễn Trãi, Thanh Xuân, Hà Nội - Hotline: +84123456789 - 0123456789</p>
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
      <div class="ps-checkout pt-80 pb-80">
        <div class="ps-container">
          <form class="ps-checkout__form" action="" method="post">
            <div class="row">
                  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                    <div class="ps-checkout__billing">
                      <h3>Chi Tiết Thanh Toán</h3>
                            <div class="form-group form-group--inline">
                              <label>Họ Tên<span>*</span>
                              </label>
                              <input readonly value="<?php echo $infoUser['fullname'] ?>" class="form-control" type="text">
                            </div>
                            <div class="form-group form-group--inline">
                              <label>Email<span>*</span>
                              </label>
                              <input readonly value="<?php echo $infoUser['email'] ?>" class="form-control" type="email">
                            </div>
                            <div class="form-group form-group--inline">
                              <label>Số Điện Thoại<span>*</span>
                              </label>
                              <input readonly value="<?php echo $infoUser['phone'] ?>" class="form-control" type="text">
                            </div>
                            <div class="form-group form-group--inline">
                              <label>Địa chỉ<span>*</span>
                              </label>
                              <input readonly value="<?php echo $infoUser['address'] ?>" class="form-control" type="text">
                            </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                    <div class="ps-checkout__order">
                      <header>
                      <?php
                          date_default_timezone_set('Asia/Ho_Chi_Minh');
                          // Lấy thời gian hiện tại
                          $currentDate = date("d/m/Y H:i:s");
                      ?>
                        <h3>Hóa Đơn Của Bạn </h3>
                        <span style="color:white" class="date">(Thời Gian Tạo: <?php echo $currentDate; ?>)</span>
                      </header>
                      <style>
                      .table {
                        border-collapse: collapse;
                        width: 100%;
                        margin-top: 20px;
                      }

                      .table th, .table td {
                        border: 1px solid #ddd;
                        padding: 8px;
                        text-align: left;
                      }

                      .table th {
                        background-color: ;
                      }
                    </style>
                      <div class="content">
                        <table class="table ps-checkout__products">
                          <thead>
                            <tr>
                              <th class="text-uppercase">Sản Phẩm</th>
                              <th style="text-align: center;" class="text-uppercase">SL</th>
                              <th class="text-uppercase">Giá</th>
                            </tr>
                          </thead>
                        <tbody>
                          <?php
                            $cartList = $cartRepository->findByUserIdAndStatus($infoUser['id'], 1);
                            $sumPrice = 0;

                            foreach ($cartList as $cart) {
                              
                                $shoe = $shoeRepository->getById($cart['shoe_id'])->fetch_assoc();
                                $orderQuantity = $orderRepository->getQuantityByCartId($cart['id']);

                                // Tính giá của mỗi sản phẩm
                                $totalPrice = $orderQuantity * ($shoe['price'] - $shoe['price'] * $shoe['sale'] * 0.01);

                                // Cộng giá vào tổng giá
                                $sumPrice += $totalPrice;
                                ?>
                                <tr>
                                    <td><?php echo $shoe['shoe_name'] ?> (sz: <span style="color:#ffcc00"><?php echo $cart['shoe_size']?></span>) </td>
                                    <td style="color:; text-align: center !important; "><span > <?php echo $orderQuantity ?> </span> </td>
                                    <td><?php echo $totalPrice ?> <span style="font-size: 10px;">VND</span> </td>
                                </tr>
                                <tr>
                                    <!-- <td><?php echo $totalPrice ?> VND</td> -->
                                </tr>
                            <?php
                            }
                            ?>
                          </tbody>
                        </table>
                  <hr width="100%" text-align="center">
                  <h4 style="color: aliceblue; padding-left: 2%;">Thành tiền: <span style="color: aqua; float: right; padding-right: 1%;"><?php echo $sumPrice ?> <span style="font-size: 12px;">VND</span> </span></h4>


                      </div>
                     
                      <footer>
                        <h3>Phương thức thanh toán</h3>  
                        <div class="form-group cheque">
                          <div class="ps-radio">
                            <input class="form-control" type="radio" id="rdo01" name="payment" checked>
                            <label for="rdo01">Thanh toán khi nhận hàng</label>
                            <p>Vui lòng gửi thông tin của bạn về nơi nhận hàng</p>
                          </div>
                        </div>
                        <div class="form-group paypal">
                          <div class="ps-radio ps-radio--inline">
                            <input class="form-control" type="radio" name="payment" id="rdo02">
                            <label for="rdo02">Paypal</label>
                          </div>
                          <ul class="ps-payment-method">
                            <li><a href="#"><img src="images/payment/1.png" alt=""></a></li>
                            <li><a href="#"><img src="images/payment/2.png" alt=""></a></li>
                            <li><a href="#"><img src="images/payment/3.png" alt=""></a></li>
                          </ul>
                          <span>
                          <div class="hope-accordion" id="accordionExample">
                                <div style="color: #ddd; text-align:; display:none" class="hope-accordion-item">
                                <hr></hr>
                                <div class="hope-accordion" id="accordionExample">
                            <div class="hope-accordion-item">
                                
                                  <style>
                                    /* Thêm các kiểu chung cho thẻ div */
                                    .primary-gradient-card {
                                    background: linear-gradient(45deg, #4CAF50, #2196F3);
                                    color: rgba(255, 255, 255, 1.00);
                                    padding: 10px;
                                    width: 390px;
                                    height: 225px;
                                    border-radius: 20px;
                                    }
                            /* box-shadow: 9px 5px 10px 5px rgb(0 0 0 / 30%);
                                    
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
                                <div id="collapseOne" class="hope-accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                    <div class="hope-accordion-body" style="background-color:#eee">
                                    

                                    <div class="p-4 border border-white rounded primary-gradient-card">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <h5 class="font-weight-bold"><?php echo $infoUser['cardName']; ?><span style="padding-left: 100px; "> <?php echo $infoUser['cardType']; ?>  <span> </span></span></h5>
                                            
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
                                            <p class="mb-0" style="font-size:20px"><?php echo $infoUser['cardHolder']; ?></p>
                                            <p style="padding-left:200px; font-size:16px" class="mb-0"> Expire Date: <?php echo $infoUser['expireDate']; ?></p>
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
                                     <!-- Thẻ Ngân Hàng Đã Liên Kết  -->
                        </div>   

                            <script>
                                // Lắng nghe sự kiện khi radio button thay đổi
                                document.querySelectorAll('input[name="payment"]').forEach(function (radio) {
                                    radio.addEventListener('change', function () {
                                        // Ẩn/hiện thông tin thẻ ngân hàng dựa trên lựa chọn của người dùng
                                        var accordionItem = document.querySelector('.hope-accordion-item');
                                        if (radio.id === 'rdo02' && radio.checked) {
                                            accordionItem.style.display = 'block';
                                        } else {
                                            accordionItem.style.display = 'none';
                                        }
                                    });
                                });
                            </script>
                            </span>                       
                          
                            <button name="submit_payment" class="ps-btn ps-btn--fullwidth">Đặt Hàng<i class="ps-icon-next"></i></button>
                          <?php
                            if(isset($_POST['submit_payment'])){
                              foreach($cartList as $cart){
                                $shoe = $shoeRepository->getById($cart['shoe_id'])->fetch_assoc();
                                // $orderRepository->insert($cart['id']);
                                $cartRepository->updateStatusByUserIdAndShoeId($infoUser['id'],$shoe['shoe_id'],2);
                              }
                              // echo "<script>alert('Đặt hàng thành công, Xin Cảm Ơn !');
                              //   window.location.href='index.php';
                              //   </script>";
                              if ($sumPrice == 0) {
                                echo "<script>alert('Bạn chưa mua sản phẩm !!');
                                      window.location.href='index.php';
                                      </script>";
                              } else {
                                  echo "<script>alert('Đặt hàng thành công, Xin Cảm Ơn !');
                                        window.location.href='index.php';
                                        </script>";
                              }
                            }
                          ?>
                        </div>
                      </footer>
                    </div>
                    <div class="ps-shipping">
                      <h3>FREE SHIPPING</h3>
                      <p>YOUR ORDER QUALIFIES FOR FREE SHIPPING.<br> <a href="#"> Singup </a> for free shipping on every order, every time.</p>
                    </div>
                  </div>
            </div>
          </form>
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