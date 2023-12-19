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
    <title>HUS - Tin Tức 2</title>
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
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                  <p>334 Nguyễn Trãi, Thanh Xuân, Hà Nội - Hotline: +84123456789 - 0123456789</p>
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
                      
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">Nữ</a>
                      
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">Trẻ Em</a>
                        
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">Tin Tức</a>
                        <ul class="sub-menu">
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.php">Tin tức các mặt hàng</a>
                                
                          </li>
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-list.php">Các bộ sưu tập</a>
                                
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
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>20</i></span><i class="ps-icon-shopping-cart"></i></a>
            <?php require_once("formCart.php") ?>
            </div>
            <div class="menu-toggle"><span></span></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Miễn phí vận chuyển</strong>: Miễn phí vận chuyển khi đặt hàng ở Hus Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Vận chuyển 0VND</strong>: Miễn phí vận chuyển khi đặt hàng ở Hus Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Vận chuyển miễn phí</strong>: Miễn phí vận chuyển khi đặt hàng ở Hus Store</p>
      </div>
    </div>
    <main class="ps-main">
      <div class="ps-blog-grid pt-80 pb-80">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                  <div class="ps-post mb-30">
                  <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.php"></a><img src="images/blog/a1.jpg" alt=""></div>
                      <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.php">Một cái nhìn chi tiết vào Bộ Kit Breaking2</a>
                        <p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.php">TV2H_team</a></span> -<span class="ml-5">Jun 10, 2023</span></p>
                        <p>Tận dụng các khung công việc linh hoạt để cung cấp một tóm tắt mạnh mẽ cho cái nhìn tổng quan ở cấp độ cao. Các phương pháp lặp lại trong chiến lược doanh nghiệp khuyến khích tư duy cộng tác để thúc đẩy thêm.</p><a class="ps-morelink" href="blog-detail.php">Đọc thêm<i class="fa fa-long-arrow-right"></i></a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                  <div class="ps-post mb-30">
                  <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.php"></a><img src="images/blog/a2.jpg" alt=""></div>
                      <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.php">Mở gói Chiến lược Đua Breaking2</a>
                          <p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.php">TV2H_team</a></span> -<span class="ml-5">Jun 10, 2023</span></p>
                          <p>Tận dụng các khung công việc linh hoạt để cung cấp một tóm tắt mạnh mẽ cho cái nhìn tổng quan ở cấp độ cao. Các phương pháp lặp lại trong chiến lược doanh nghiệp khuyến khích tư duy cộng tác để thúc đẩy thêm.</p><a class="ps-morelink" href="blog-detail.php">Đọc thêm<i class="fa fa-long-arrow-right"></i></a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                  <div class="ps-post mb-30">
                  <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.php"></a><img src="images/blog/a3.jpg" alt=""></div>
                      <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.php">Đôi giày đá bóng mới nhất của Nike Phá vỡ khuôn mẫu</a>
                          <p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.php">TV2H_team</a></span> -<span class="ml-5">Jun 10, 2023</span></p>
                          <p>Tận dụng các khung công việc linh hoạt để cung cấp một tóm tắt mạnh mẽ cho cái nhìn tổng quan ở cấp độ cao. Các phương pháp lặp lại trong chiến lược doanh nghiệp khuyến khích tư duy cộng tác để thúc đẩy thêm.</p><a class="ps-morelink" href="blog-detail.php">Đọc thêm<i class="fa fa-long-arrow-right"></i></a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                  <div class="ps-post mb-30">
                  <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.php">Một cái nhìn chi tiết vào Bộ Kit Breaking2</a>
                        <p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.php">TV2H_team</a></span> -<span class="ml-5">Jun 10, 2023</span></p>
                        <p>Tận dụng các khung công việc linh hoạt để cung cấp một tóm tắt mạnh mẽ cho cái nhìn tổng quan ở cấp độ cao. Các phương pháp lặp lại trong chiến lược doanh nghiệp khuyến khích tư duy cộng tác để thúc đẩy thêm.</p><a class="ps-morelink" href="blog-detail.php">Đọc thêm<i class="fa fa-long-arrow-right"></i></a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                  <div class="ps-post mb-30">
                  <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.php">Mở gói Chiến lược Đua Breaking2</a>
                        <p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.php">TV2H_team</a></span> -<span class="ml-5">Jun 10, 2023</span></p>
                        <p>Tận dụng các khung công việc linh hoạt để cung cấp một tóm tắt mạnh mẽ cho cái nhìn tổng quan ở cấp độ cao. Các phương pháp lặp lại trong chiến lược doanh nghiệp khuyến khích tư duy cộng tác để thúc đẩy thêm.</p><a class="ps-morelink" href="blog-detail.php">Đọc thêm<i class="fa fa-long-arrow-right"></i></a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                  <div class="ps-post mb-30">
                  <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.php">Đôi giày đá bóng mới nhất của Nike Phá vỡ khuôn mẫu</a>
                        <p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.php">TV2H_team</a></span> -<span class="ml-5">Jun 10, 2023</span></p>
                        <p>Tận dụng các khung công việc linh hoạt để cung cấp một tóm tắt mạnh mẽ cho cái nhìn tổng quan ở cấp độ cao. Các phương pháp lặp lại trong chiến lược doanh nghiệp khuyến khích tư duy cộng tác để thúc đẩy thêm.</p><a class="ps-morelink" href="blog-detail.php">Đọc thêm<i class="fa fa-long-arrow-right"></i></a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                  <div class="ps-post mb-30">
                  <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.php">Một cái nhìn chi tiết vào Bộ Kit Breaking2</a>
                        <p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.php">TV2H_team</a></span> -<span class="ml-5">Jun 10, 2023</span></p>
                        <p>Tận dụng các khung công việc linh hoạt để cung cấp một tóm tắt mạnh mẽ cho cái nhìn tổng quan ở cấp độ cao. Các phương pháp lặp lại trong chiến lược doanh nghiệp khuyến khích tư duy cộng tác để thúc đẩy thêm.</p><a class="ps-morelink" href="blog-detail.php">Đọc thêm<i class="fa fa-long-arrow-right"></i></a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                  <div class="ps-post mb-30">
                  <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.php">Mở gói Chiến lược Đua Breaking2</a>
                        <p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.php">TV2H_team</a></span> -<span class="ml-5">Jun 10, 2023</span></p>
                        <p>Tận dụng các khung công việc linh hoạt để cung cấp một tóm tắt mạnh mẽ cho cái nhìn tổng quan ở cấp độ cao. Các phương pháp lặp lại trong chiến lược doanh nghiệp khuyến khích tư duy cộng tác để thúc đẩy thêm.</p><a class="ps-morelink" href="blog-detail.php">Đọc thêm<i class="fa fa-long-arrow-right"></i></a>
                      </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                  <div class="ps-post mb-30">
                  <div class="ps-post__content"><a class="ps-post__title" href="blog-detail.php">Đôi giày đá bóng mới nhất của Nike Phá vỡ khuôn mẫu</a>
                        <p class="ps-post__meta"><span>By:<a class="mr-5" href="blog.php">TV2H_team</a></span> -<span class="ml-5">Jun 10, 2023</span></p>
                        <p>Tận dụng các khung công việc linh hoạt để cung cấp một tóm tắt mạnh mẽ cho cái nhìn tổng quan ở cấp độ cao. Các phương pháp lặp lại trong chiến lược doanh nghiệp khuyến khích tư duy cộng tác để thúc đẩy thêm.</p><a class="ps-morelink" href="blog-detail.php">Đọc thêm<i class="fa fa-long-arrow-right"></i></a>
                      </div>
                    </div>
                </div>
          </div>
          <div class="mt-30">
            <div class="ps-pagination">
              <ul class="pagination">
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-subscribe">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                  <h3><i class="fa fa-envelope"></i>Đăng nhập hộp thư</h3>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                  <form class="ps-subscribe__form" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="">
                    <button>Đăng nhập bây giờ</button>
                  </form>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                  <p>...và nhận  <span>100.000 vnđ</span>  cho lần mua sắm đầu tiên.</p>
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
                        <h3 class="ps-widget__title">Cơ Sở 1</h3>
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
                        <h3 class="ps-widget__title">Cơ Sở 2</h3>
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
                        <h3 class="ps-widget__title">Tìm trong cửa hàng</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--link">
                          <li><a href="#">Mã Giảm Giá</a></li>
                          <li><a href="#">Đăng Nhập Qua Email</a></li>
                          <li><a href="#">Phản Hồi</a></li>
                          <li><a href="#">Nghề Nghiệp</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                      <header>
                        <h3 class="ps-widget__title">Giúp Đỡ</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li><a href="#">Trạng thái Đơn Hàng</a></li>
                          <li><a href="#">Giao và Nhận Hàng</a></li>
                          <li><a href="#">Quay Lại</a></li>
                          <li><a href="#">Lựa Chọn Thanh Toán</a></li>
                          <li><a href="#">Liên hệ</a></li>
                        </ul>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--link">
                    <header>
                        <h3 class="ps-widget__title">Sản Phẩm</h3>
                      </header>
                      <footer>
                        <ul class="ps-list--line">
                          <li><a href="#">Giày</a></li>
                          <li><a href="#">Quần Áo</a></li>
                          <li><a href="#">Phụ Kiện</a></li>
                          <li><a href="#">Giày Bóng Đá</a></li>
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
