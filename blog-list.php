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
    <title>HUS - Blog List</title>
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
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                  <div class="ps-post--2">
                    <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="#"></a><img src="images/blog/a1.jpg" alt=""></div>
                    <div class="ps-post__container">
                      <header class="ps-post__header"><a class="ps-post__title" href="blog-detail.php">Mở gói Chiến lược Đua Breaking2</a>
                        <p>Đăng bởi <a href="blog-grid.php">TV2H_team</a> on August 17, 2023  in <a href="blog-grid.php">Giày Nam</a> , <a href="blog-grid.php">Phong cách</a></p>
                      </header>
                      <div class="ps-post__content">
                        <p>Chào mừng bạn đến với Nike Breaking2 - một chiến dịch đầy thách thức và khám phá giữa niềm đam mê thể thao và khả năng vượt qua giới hạn con người. Nike Breaking2 là một sáng kiến độc đáo của hãng thể thao nổi tiếng Nike, tập trung vào việc phá vỡ rào cản về tốc độ trong môn thể thao chạy marathon.</p>
                      </div>
                      <footer class="ps-post__footer"><a class="ps-post__morelink" href="#">ĐỌC THÊM<i class="ps-icon-arrow-left"></i></a>
                        <div class="ps-post__actions"><span><i class="fa fa-comments"></i> 23 Bình Luận</span><span><i class="fa fa-heart"></i>  Lượt Thích</span>
                          <div class="ps-post__social"><i class="fa fa-share-alt"></i><a href="#">Chia Sẻ</a>
                            <ul>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </footer>
                    </div>
                  </div>
                  <div class="ps-post--2">
                    <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="#"></a><img src="images/blog/a2.jpg" alt=""></div>
                    <div class="ps-post__container">
                      <header class="ps-post__header"><a class="ps-post__title" href="blog-detail.php">Tận dụng các khung làm việc linh hoạt để cung cấp một tóm tắt mạnh mẽ.</a>
                        <p>Posted by <a href="blog-grid.php">TV2H_team</a> on August 17, 2023  in <a href="blog-grid.php">Giày Nam</a> , <a href="blog-grid.php">Phong Cách</a></p>
                      </header>
                      <div class="ps-post__content">
                        <p>Tận dụng các khung làm việc linh hoạt để cung cấp một tóm tắt mạnh mẽ cho cái nhìn tổng quan ở cấp độ cao. Phương pháp lặp lại trong chiến lược doanh nghiệp khuyến khích tư duy cộng tác để đạt được kết quả cao hơn. Áo lót thể thao hỗ trợ có kiểu nén và dây đeo V ở phía sau, mang lại hỗ trợ trung bình và phạm vi chuyển động đầy đủ trong suốt buổi tập của bạn...</p>
                      </div>
                      <footer class="ps-post__footer"><a class="ps-post__morelink" href="#">ĐỌC THÊM<i class="ps-icon-arrow-left"></i></a>
                        <div class="ps-post__actions"><span><i class="fa fa-comments"></i> 23 Bình Luận</span><span><i class="fa fa-heart"></i>  Lượt Thích</span>
                          <div class="ps-post__social"><i class="fa fa-share-alt"></i><a href="#">Chia Sẻ</a>
                            <ul>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </footer>
                    </div>
                  </div>
                  <div class="ps-post--2">
                    <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="#"></a><img src="images/blog/a13.jpg" alt=""></div>
                    <div class="ps-post__container">
                      <header class="ps-post__header"><a class="ps-post__title" href="blog-detail.php">Đôi giày đá bóng mới nhất của Nike phá vỡ kiểu mẫu</a>
                        <p>Posted by <a href="blog-grid.php">TV2H_team</a> on August 17, 2023  in <a href="blog-grid.php">Giày Nam</a> , <a href="blog-grid.php">Phong Cách</a></p>
                      </header>
                      <div class="ps-post__content">
                        <p>Chào mừng các đam mê bóng đá và phong cách đến với thế giới mới của Nike, nơi mà đẳng cấp và hiệu suất kết hợp để tạo nên những đôi giày bóng đá đỉnh cao nhất. Hôm nay, chúng tôi tự hào giới thiệu đến bạn dòng sản phẩm mới nhất - những đôi giày bóng đá đầy ấn tượng và sáng tạo.</p>
                      </div>
                      <footer class="ps-post__footer"><a class="ps-post__morelink" href="#">ĐỌC THÊM<i class="ps-icon-arrow-left"></i></a>
                        <div class="ps-post__actions"><span><i class="fa fa-comments"></i> 23 Bình luận</span><span><i class="fa fa-heart"></i>  Lượt Thích</span>
                          <div class="ps-post__social"><i class="fa fa-share-alt"></i><a href="#">Chia Sẻ</a>
                            <ul>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </footer>
                    </div>
                  </div>
                  <div class="ps-post--2">
                    <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="#"></a><img src="images/blog/a12.jpg" alt=""></div>
                    <div class="ps-post__container">
                      <header class="ps-post__header"><a class="ps-post__title" href="blog-detail.php">Phân Tích Bộ Sưu Tập Black Rose Tech Fleece</a>
                        <p>Posted by <a href="blog-grid.php">TV2H_team</a> on August 17, 2023  in <a href="blog-grid.php">Giày Nam</a> , <a href="blog-grid.php">Phong Cách</a></p>
                      </header>
                      <div class="ps-post__content">
                        <p>Chào mừng đến với thế giới đầy phóng khoáng và tinh tế của Bộ Sưu Tập Black Rose Tech Fleece - nơi mà sự thoải mái và phong cách đỉnh cao kết hợp một cách hoàn hảo. Được tạo nên bởi sự sáng tạo của nhãn hiệu thời trang hàng đầu, bộ sưu tập này không chỉ là sản phẩm, mà là biểu tượng của sự đổi mới và cái mới mẻ trong thế giới thời trang.</p>
                      </div>
                      <footer class="ps-post__footer"><a class="ps-post__morelink" href="#">ĐỌC THÊM<i class="ps-icon-arrow-left"></i></a>
                        <div class="ps-post__actions"><span><i class="fa fa-comments"></i> 23 Bình Luận</span><span><i class="fa fa-heart"></i>  Lượt Thích</span>
                          <div class="ps-post__social"><i class="fa fa-share-alt"></i><a href="#">Chia Sẻ</a>
                            <ul>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </footer>
                    </div>
                  </div>
                  <div class="ps-post--2">
                    <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="#"></a><img src="images/blog/a3.jpg" alt=""></div>
                    <div class="ps-post__container">
                      <header class="ps-post__header"><a class="ps-post__title" href="blog-detail.php">Những Đôi Giày Mà Các Vận Động Viên Nói Sẽ Thay Đổi Tương Lai Của Chạy Bộ</a>
                        <p>Posted by <a href="blog-grid.php">TV2H_team</a> on August 17, 2023  in <a href="blog-grid.php">Giày Nam</a> , <a href="blog-grid.php">Phong Cách</a></p>
                      </header>
                      <div class="ps-post__content">
                        <p>Tận dụng các khung làm việc linh hoạt để cung cấp một tóm tắt mạnh mẽ cho cái nhìn tổng quan ở cấp độ cao. Phương pháp lặp lại trong chiến lược doanh nghiệp khuyến khích tư duy cộng tác để đạt được kết quả cao hơn. Áo lót thể thao hỗ trợ có kiểu nén và dây đeo V ở phía sau, mang lại hỗ trợ trung bình và phạm vi chuyển động đầy đủ trong suốt buổi tập của bạn...</p>
                      </div>
                      <footer class="ps-post__footer"><a class="ps-post__morelink" href="#">ĐỌC THÊM<i class="ps-icon-arrow-left"></i></a>
                        <div class="ps-post__actions"><span><i class="fa fa-comments"></i> 23 Bình Luận</span><span><i class="fa fa-heart"></i>  Lượt Thích</span>
                          <div class="ps-post__social"><i class="fa fa-share-alt"></i><a href="#">Chia Sẻ</a>
                            <ul>
                              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </footer>
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
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                  <aside class="ps-widget--sidebar ps-widget--search">
                    <form class="ps-search--widget" action="do_action" method="post">
                      <input class="form-control" type="text" placeholder="Search posts...">
                      <button><i class="ps-icon-search"></i></button>
                    </form>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Archive</h3>
                    </div>
                    <div class="ps-widget__content">
                      <ul class="ps-list--arrow">
                        <li class="current"><a href="product-listing.php">HUS(321)</a></li>
                        <li><a href="product-listing.php">Quá Tuyệt Vời</a></li>
                        <li><a href="product-listing.php">The Crusty Croissant</a></li>
                        <li><a href="product-listing.php">The Rolling Pin</a></li>
                        <li><a href="product-listing.php">Skippity Scones</a></li>
                        <li><a href="product-listing.php">Người Trộn Bột Điên Đảo</a></li>
                        <li><a href="product-listing.php">Liên Kết Sản Phẩm</a></li>
                      </ul>
                    </div>
                  </aside>
                  <aside class="ps-widget--sidebar">
                  <div class="ps-widget__header">
                      <h3>Bài đánh giá gần đây</h3>
                    </div>
                    <div class="ps-widget__content">
                      <div class="ps-post--sidebar">
                        <div class="ps-post__thumbnail"><a href="#"></a><img src="images/blog/sidebar/d1.jpg" alt=""></div>
                        <div class="ps-post__content"><a class="ps-post__title" href="#">Sản Phẩm Tuyệt Vời</a><span>SEP 29, 2023</span></div>
                      </div>
                      <div class="ps-post--sidebar">
                        <div class="ps-post__thumbnail"><a href="#"></a><img src="images/blog/sidebar/d2.jpg" alt=""></div>
                        <div class="ps-post__content"><a class="ps-post__title" href="#">Sản Phẩm Tuyệt Vời</a><span>SEP 29, 2023</span></div>
                      </div>
                      <div class="ps-post--sidebar">
                        <div class="ps-post__thumbnail"><a href="#"></a><img src="images/blog/sidebar/d3.jpg" alt=""></div>
                        <div class="ps-post__content"><a class="ps-post__title" href="#">Sản Phẩm Tuyệt Vời</a><span>SEP 29, 2023</span></div>
                      </div>
                    </div>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Sản Phẩm Bạn Chạy Nhất</h3>
                    </div>
                    <div class="ps-widget__content">
                      <div class="ps-shoe--sidebar">
                        <div class="ps-shoe__thumbnail"><a href="#"></a><img src="images/shoe/sidebar/d1.jpg" alt=""></div>
                        <div class="ps-shoe__content"><a class="ps-shoe__title" href="#">Men's HUS</a>
                          <p><del> 400.000 vnđ</del> 350.000 vnđ</p><a class="ps-btn" href="#">MUA NGAY</a>
                        </div>
                      </div>
                      <div class="ps-shoe--sidebar">
                        <div class="ps-shoe__thumbnail"><a href="#"></a><img src="images/shoe/sidebar/d2.jpg" alt=""></div>
                        <div class="ps-shoe__content"><a class="ps-shoe__title" href="#">Nike Flight Bonafide</a>
                          <p><del> 600.000 vnđ</del> 500.000 vnđ</p><a class="ps-btn" href="#">MUA NGAY</a>
                        </div>
                      </div>
                      <div class="ps-shoe--sidebar">
                        <div class="ps-shoe__thumbnail"><a href="#"></a><img src="images/shoe/sidebar/d3.jpg" alt=""></div>
                        <div class="ps-shoe__content"><a class="ps-shoe__title" href="#">Nike Sock Dart QS</a>
                          <p><del> 400.000 vnđ</del> 350.000 vnđ</p><a class="ps-btn" href="#">MUA NGAY</a>
                        </div>
                      </div>
                    </div>
                  </aside>
                  <aside class="ps-widget--sidebar">
                    <div class="ps-widget__header">
                      <h3>Thẻ</h3>
                    </div>
                    <div class="ps-widget__content">
                      <ul class="ps-tags">
                        <li><a href="product-listing.php">Nam</a></li>
                        <li><a href="product-listing.php">Nữ</a></li>
                        <li><a href="product-listing.php">B&G</a></li>
                        <li><a href="product-listing.php">ugly fashion</a></li>
                        <li><a href="product-listing.php">Nike</a></li>
                        <li><a href="product-listing.php">Dior</a></li>
                        <li><a href="product-listing.php">Adidas</a></li>
                        <li><a href="product-listing.php">Diour</a></li>
                      </ul>
                    </div>
                  </aside>
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
                        <h3 class="ps-widget__title">Cở Sở 2</h3>
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