

<?php
  error_reporting(0);
  require_once("formCart2.php");
  require_once("repository/shoeRepository.php");
  require_once("sendemail.php");
  $shoeRepository = new ShoeRepository();
  $sendEmail = new SendEMail();
 
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
    <title>HUS STORE - Homepage</title>
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
    
  </head>
   
  <style>
      #imageShoe{
        max-width: 100%;
        max-height: 330px;
        min-height: 330px;
        object-fit: cover;
      }
      #imageShoe2{
        max-width: 100%;
        max-height: 310px;
        min-height: 310px;
        object-fit: cover;
      }
      #imageShoeMini{
        max-width: 50px;
        min-width: 50px;
        max-height: 50px;
        min-height: 50px;
        object-fit: cover;
      }
      #imageShoeBanner{
        max-width: 98%;
        min-width: 98%;
        max-height: 400px;
        min-height: 400px;
        object-fit: cover;
      }
  </style>
  <style type="text/css"> .snow-container { position: fixed; width: 100%; max-width: 100%; z-index: 99999; pointer-events: none; overflow: hidden; top: 0; height: 100%; } .snow { display: block; position: absolute; z-index: 2; top: 0; right: 0; bottom: 0; left: 0; pointer-events: none; -webkit-transform: translate3d(0,-100%,0); transform: translate3d(0,-100%,0); -webkit-animation: snow linear infinite; animation: snow linear infinite; } .snow.foreground { background-image: url("https://itexpress.vn/API/files/img/snow-medium.png"); -webkit-animation-duration: 15s; animation-duration: 10s; } .snow.foreground.layered { -webkit-animation-delay: 7.5s; animation-delay: 7.5s; } .snow.middleground { background-image: url(https://itexpress.vn/API/files/img/snow-medium.png); -webkit-animation-duration: 20s; animation-duration: 15s; } .snow.middleground.layered { -webkit-animation-delay: 10s; animation-delay: 10s; } .snow.background { background-image: url(https://itexpress.vn/API/files/img/snow-medium.png); -webkit-animation-duration: 25s; animation-duration: 20s; } .snow.background.layered { -webkit-animation-delay: 12.5s; animation-delay: 12.5s; } @-webkit-keyframes snow { 0% { -webkit-transform: translate3d(0,-100%,0); transform: translate3d(0,-100%,0); } 100% { -webkit-transform: translate3d(5%,100%,0); transform: translate3d(5%,100%,0); } } @keyframes snow { 0% { -webkit-transform: translate3d(0,-100%,0); transform: translate3d(0,-100%,0); } 100% { -webkit-transform: translate3d(5%,100%,0); transform: translate3d(5%,100%,0); } } </style> <div class='snow-container'> <div class='snow foreground'></div> <div class='snow foreground layered'></div> <div class='snow middleground'></div> <div class='snow middleground layered'></div> <div class='snow background'></div> <div class='snow background layered'></div></div>
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
  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
          <div class="row">
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
                  <li class="menu-item menu-item-has-children dropdown"><a href="nam.php">Nam</a>
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
                  <li class="menu-item menu-item-has-children dropdown"><a href="nu.php">Nữ</a>
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
                  <li class="menu-item menu-item-has-children dropdown"><a href="tre_em.php">Trẻ Em</a>
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

          <style>
              .ps-cart__toggle {
                top: 25px !important;
              }
          </style>

          <div class="navigation__column right">
          <form class="ps-search--header" id="searchForm" action="#" method="post">
          <input class="form-control" type="text" id="searchQuery" placeholder="Search Product…" onkeyup="searchProducts()">

  <!-- Container for search results -->
  <div id="searchResultsContainer"></div>
</form>

<!-- Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search Results</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="searchResults">
        <!-- Kết quả tìm kiếm sẽ được hiển thị ở đây -->
      </div>
    </div>
  </div>
</div>
<style>
  #searchResultsContainer {
    position: absolute;
    right: 0; /* Position to the right of the screen */
    width: 150%;
    max-width: 600px;
    background-color: white;
    z-index: 1000;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    display: flex;
    text-align: center;
    flex-direction: column;
 
  }

  .searchResult {
    display: flex;
    padding: 10px;
    transition: background-color 0.3s; /* Add transition for a smooth effect */
  }

  .searchResult:hover {
    background-color: #f0f0f0; /* Change background color on hover */
  }

  .searchResult img {
    margin-right: 10px;
    max-width: 100px;
  }

  #searchResultsContent {
    width: 200%;
  }
</style>


<script>
  
  function searchProducts() {
    var searchQuery = $('#searchQuery').val();
    var firstLetter = searchQuery.charAt(0); // Extract the first letter

    if (searchQuery === '') {
      // If search query is empty, hide the container
      $('#searchResultsContainer').hide();
    } else {
      // If search query is not empty, show and update the container
      $.ajax({
        type: 'POST',
        url: 'search.php',
        data: { search_query: searchQuery, first_letter: firstLetter },
        success: function(response) {
          $('#searchResultsContent').html(response);
          $('#searchResultsContainer').html(response).show();
        },
        error: function(error) {
          console.error('Search error:', error);
        }
      });
    }
  }

  // Bind the searchProducts function to the keyup event
  $('#searchQuery').on('keyup', searchProducts);
</script>     
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i><?php echo $cartList->num_rows ?></i></span><i class="ps-icon-shopping-cart"></i></a>
              <?php require_once("formCart.php") ?>
            </div>
            <div class="menu-toggle"><span></span></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Miễn phí vận chuyển</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Vận chuyển 0VND</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
      </div>
    </div>
    <main class="ps-main">
      <div class="ps-banner">
        <div class="rev_slider fullscreenbanner" id="home-banner">
          <ul>
          

            <li class="ps-banner" data-index="rs-2972" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0"><img class="rev-slidebg" src="images/slider/dich-vu-chup-anh-thoi-trang-cho-shop-quan-ao-dep-gia-re (1).jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
              <div class="tp-caption ps-banner__header" id="layer-1" data-x="left" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-150','-120','-150','-170']" data-width="['none','none','none','400']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                <p>March 2002 <br> Nike SB Dunk Low Pro</p>
              </div>
              <div class="tp-caption ps-banner__title" id="layer21" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-40','-50','-70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                <p class="text-uppercase">SUBA</p>
              </div>
              <div class="tp-caption ps-banner__description" id="layer211" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['30','50','50','50']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                <p>Supa wanted something that was going to rep his East Coast <br> roots and, more specifically, his hometown of <br/> New York City in  a big way.</p>
              </div><a class="tp-caption ps-btn" id="layer31" href="#" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['120','140','200','200']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">Purchase Now<i class="ps-icon-next"></i></a>
            </li>
            <li class="ps-banner ps-banner--white" data-index="rs-100" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0">
    <div class="rev-slidebg">
        <video width="100%" height="100%" autoplay muted>
            <source src="images/slider/Cái Tết _Giàu_ _ Nhạc Xuân 2023 _ Đông Nhi & bé Winnie x Lương Bích Hữu x Bùi Công Nam _ Official MV.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="tp-caption ps-banner__header" id="layer20" data-x="left" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-150','-120','-150','-170']" data-width="['none','none','none','400']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
        <p style="color:white;">THỜI TRANG<br> CHÀO MỪNG TẾT 2024</p>
        </div>
              <div class="tp-caption ps-banner__title" id="layer339" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-40','-50','-70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                <p class="text-uppercase">Khám Phá</p>
              </div>
              <div class="tp-caption ps-banner__description" id="layer2-14" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['30','50','50','50']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                <p style="color: white;">Chắc chắn, mỗi bộ trang phục Tết của Husstore không chỉ là lựa chọn <br> thời trang, mà là một biểu tượng sống động của lòng tự hào với nguồn cội</p>
.</p>
        
    </div>
    <!-- Rest of the code remains unchanged -->
    <a class="tp-caption ps-btn" id="layer364" href="#" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['120','140','200','200']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">Purchase Now<i class="ps-icon-next"></i></a>
</li>
            <li class="ps-banner" data-index="rs-2942" data-transition="random" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-rotate="0"><img class="rev-slidebg" src="images/slider/Giay-nam-9-1170x1170.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" data-no-retina>
              <div class="tp-caption ps-banner__header" id="layer-1" data-x="left" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-150','-120','-150','-170']" data-width="['none','none','none','400']" data-type="text" data-responsive_offset="on" data-frames="[{&quot;delay&quot;:1000,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                <p style="color:red">March 2002 <br> Nike SB Dunk Low Pro</p>
              </div>
              <div class="tp-caption ps-banner__title" id="layer21" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-40','-50','-70']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                <p class="text-uppercase">CHUKYMEN</p>
              </div>
              <div class="tp-caption ps-banner__description" id="layer211" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['30','50','50','50']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1200,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">
                <p>Supa wanted something that was going to rep his East Coast <br> roots and, more specifically, his hometown of <br/> New York City in  a big way.</p>
              </div><a class="tp-caption ps-btn" id="layer31" href="#" data-x="['left','left','left','left']" data-hoffset="['-60','15','15','15']" data-y="['middle','middle','middle','middle']" data-voffset="['120','140','200','200']" data-type="text" data-responsive_offset="on" data-textAlign="['center','center','center','center']" data-frames="[{&quot;delay&quot;:1500,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;x:50px;opacity:0;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:300,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;x:50px;opacity:0;&quot;,&quot;ease&quot;:&quot;Power3.easeInOut&quot;}]">Purchase Now<i class="ps-icon-next"></i></a>
            </li>
          </ul>
     
        </div>
     
      </div>
   
      <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
    
        <div class="ps-container">
         
          <div class="ps-section__header mb-50">
            <h3 class="ps-section__title" data-mask="SPNB">- Sản Phẩm Nổi Bật </h3>
            <ul class="ps-masonry__filter">
              <li class="current"><a href="#" data-filter="*">All <sup><?php  echo $shoeRepository->countShoeByCategoryName('');?></sup></a></li>
              <li class="current"><a href="#" data-filter=".nike">Nike <sup><?php  echo $shoeRepository->countShoeByCategoryName('nike');?></sup></a></li>
              <li class="current"><a href="#" data-filter=".adidas">Adidas <sup><?php  echo $shoeRepository->countShoeByCategoryName('adidas');?></sup></a></li>
              <li class="current"><a href="#" data-filter=".men">Men <sup><?php  echo $shoeRepository->countShoeByCategoryName('men');?></sup></a></li>
              <li class="current"><a href="#" data-filter=".women">Women <sup><?php  echo $shoeRepository->countShoeByCategoryName('women');?></sup></a></li>
              <li class="current"><a href="#" data-filter=".kids">Kids <sup><?php  echo $shoeRepository->countShoeByCategoryName('kids');?></sup></a></li>
            </ul>
          </div>
        </div>  
        
        <div class="ps-container">
          <style>
            
          </style>
          <div class="ps-section__content">
            <div class="girdpro">
            <!-- <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%"> -->
              <!-- <div class="ps-masonry"> -->
                <!-- <div class="grid-sizer"></div> -->
                <?php
                    $checkNew = false;
                    $listShoe = $shoeRepository->getAll(16);
                    foreach($listShoe as $shoe){
                ?>
                <div class="grid-item ">
                  <div class="grid-item__content-wrapper">
                    <div class="ps-shoe ">
                      <div class="ps-shoe__thumbnail">
                        <?php
                          if(!$checkNew){
                            echo '<div class="ps-badge"><span>New</span></div>';
                            $checkNew = true;
                          }
                          if($shoe['sale']>0){
                            echo '<div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-'.$shoe['sale'].'%</span></div>';
                          }
                         ?>

                        <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                        <?php
                          $arrLinkImage = $shoeRepository->getImage($shoe['shoe_id']);
                          if($arrLinkImage->num_rows > 0){
                            echo '<img id="imageShoe" src="'.$arrLinkImage->fetch_assoc()['link_image'].'" alt="">';
                          }
                          else{
                            echo '<img src="images/shoe/1.jpg" alt="">';
                          }
                        ?>
                        <a class="ps-shoe__overlay" href="product-detail.php?id=<?php echo $shoe['shoe_id'] ?>"></a>
                      </div>
                      <div class="ps-shoe__content">
                        <div class="ps-shoe__variants">
                          <div class="ps-shoe__variant normal">
                            <?php
                              foreach($arrLinkImage as $linkImage){
                            ?>
                              <img id="imageShoeMini" src="<?php echo $linkImage['link_image'] ?>" alt="">
                            <?php
                              }
                            ?>
                          </div>
                          <select class="ps-rating ps-shoe__rating">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="2">5</option>
                          </select>
                        </div>
                        <div class="ps-shoe__detail"><a class="ps-shoe__name" href="#"><?php echo $shoe['shoe_name'] ?></a>
                          <p class="ps-shoe__categories"><a href="#"><?php echo $shoe['name'] ?></a></p>
                          <span class="ps-shoe__price">
                            <?php 
                              if($shoe['sale'] > 0){
                                echo '<del>'.$shoe['price'].' VND</del>';
                              }
                             ?>
                             <?php 
                                echo ($shoe['price'] - $shoe['price']*$shoe['sale']*0.01)." VND";
                             ?></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                  }
                ?>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-section--offer">
        <div class="ps-column"><a class="ps-offer" href="tre_em.php"><img id="imageShoeBanner" src="images/banner/banner1.jpg" alt=""></a></div>
        <div class="ps-column"><a class="ps-offer" href="nu.php"><img id="imageShoeBanner" src="images/banner/banner2.jpg" alt=""></a></div>
      </div>
      <div class="ps-section--sale-off ps-section pt-80 pb-40">
        <div class="ps-container">
          <div class="ps-section__header mb-50">
            <h3 class="ps-section__title" data-mask="Sale off">- Hot Deal Today</h3>
          </div>
          <div class="ps-section__content">
            <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="ps-hot-deal">
                      <h3>Nike DUNK Max 95 OG</h3>
                      <p class="ps-hot-deal__price">Only:  <span>£155</span></p>
                      <ul class="ps-countdown" data-time="December 13, 2017 15:37:25">
                        <li><span class="hours"></span><p>Hours</p></li>
                        <li class="divider">:</li>
                        <li><span class="minutes"></span><p>minutes</p></li>
                        <li class="divider">:</li>
                        <li><span class="seconds"></span><p>Seconds</p></li>
                      </ul><a class="ps-btn" href="#">Order Today<i class="ps-icon-next"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="ps-hotspot"><a class="point first active" href="javascript:;"><i class="fa fa-plus"></i>
                        <div class="ps-hotspot__content">
                          <p class="heading">JUMP TO HEADER</p>
                          <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna y el pie sin reducir la libertad de movimiento.</p>
                        </div></a><a class="point second" href="javascript:;"><i class="fa fa-plus"></i>
                        <div class="ps-hotspot__content">
                          <p class="heading">JUMP TO HEADER</p>
                          <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna y el pie sin reducir la libertad de movimiento.</p>
                        </div></a><a class="point third" href="javascript:;"><i class="fa fa-plus"></i>
                        <div class="ps-hotspot__content">
                          <p class="heading">JUMP TO HEADER</p>
                          <p>Dynamic Fit Collar en la zona del tobillo que une la parte inferior de la pierna y el pie sin reducir la libertad de movimiento.</p>
                        </div></a><img src="images/hot-deal.png" alt=""></div>
                  </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-section ps-section--top-sales ps-owl-root pt-80 pb-80">
        <div class="ps-container">
          <div class="ps-section__header mb-50">
            <div class="row">
                  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                    <h3 class="ps-section__title" data-mask="BEST SALE">- Top Sales</h3>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <div class="ps-owl-actions"><a class="ps-prev" href="#"><i class="ps-icon-arrow-right"></i>Prev</a><a class="ps-next" href="#">Next<i class="ps-icon-arrow-left"></i></a></div>
                  </div>
            </div>
          </div>
          <div class="ps-section__content">
            <div class="ps-owl--colection owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="2000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="4" data-owl-item-xs="1" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1000" data-owl-mousedrag="on">
              <?php 
                foreach($listShoe as $shoe){
                  if($shoe['sale']>0){
              ?>
              <div class="ps-shoes--carousel">
                <div class="ps-shoe">
                  <div class="ps-shoe__thumbnail">
                    <div class="ps-badge"><span>New</span></div>
                    <?php
                        echo '<div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-'.$shoe['sale'].'%</span></div>';
                    ?>
                    <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                    <?php
                          $arrLinkImage = $shoeRepository->getImage($shoe['shoe_id']);
                          if($arrLinkImage->num_rows > 0){
                            echo '<img id="imageShoe2" src="'.$arrLinkImage->fetch_assoc()['link_image'].'" alt="">';
                          }
                          else{
                            echo '<img src="images/shoe/1.jpg" alt="">';
                          }
                        ?>
                    <a class="ps-shoe__overlay" href="product-detail.php?id=<?php echo $shoe['shoe_id'] ?>"></a>
                  </div>
                  <div class="ps-shoe__content">
                    <div class="ps-shoe__variants">
                      <div class="ps-shoe__variant normal">
                          <?php
                            foreach($arrLinkImage as $linkImage){
                          ?>
                              <img id="imageShoeMini" src="<?php echo $linkImage['link_image'] ?>" alt="">
                          <?php
                            }
                          ?>
                      </div>
                      <select class="ps-rating ps-shoe__rating">
                        <option value="1">1</option>
                        <option value="1">2</option>
                        <option value="1">3</option>
                        <option value="1">4</option>
                        <option value="2">5</option>
                      </select>
                    </div>
                    <div class="ps-shoe__detail"><a class="ps-shoe__name" href="product-detai.php"><?php echo $shoe['shoe_name'] ?></a>
                      <p class="ps-shoe__categories"><a href="#"><?php echo $shoe['name'] ?></a></p><span class="ps-shoe__price">
                        <del><?php echo $shoe['price']?> VND</del>
                        <?php 
                          echo ($shoe['price'] - $shoe['price']*$shoe['sale']*0.01)." VND";
                        ?></span>
                    </div>
                  </div>
                </div>
              </div>
                <?php 
                  }
                  }
                ?>
            </div>
          </div>
          
        </div>
        
      </div>
      
      <div class="ps-home-testimonial bg--parallax pb-80" data-background="images/banner/banner-thoi-trang-dang-hien-dai-nhat_113856210.jpg">
        
        <div class="container">
          <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
            <div class="ps-testimonial">
              <div class="ps-testimonial__thumbnail"><img src="images/banner/giày-thể-thao-ragus-man-12.jpg" alt=""><i class="fa fa-quote-left"></i></div>
              <header>
                <select class="ps-rating">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                  <option value="1">4</option>
                  <option value="5">5</option>
                </select>
                <p>Logan May - CEO & Founder Invision</p>
              </header>
              <footer>
                <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. “</p>
              </footer>
            </div>
            <div class="ps-testimonial">
              <div class="ps-testimonial__thumbnail"><img src="images/banner/giày-thể-thao-ragus-man-12.jpg" alt=""><i class="fa fa-quote-left"></i></div>
              <header>
                <select class="ps-rating">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                  <option value="1">4</option>
                  <option value="5">5</option>
                </select>
                <p>Logan May - CEO & Founder Invision</p>
              </header>
              <footer>
                <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. “</p>
              </footer>
            </div>
            <div class="ps-testimonial">
              <div class="ps-testimonial__thumbnail"><img src="images/banner/giày-thể-thao-ragus-man-12.jpg" alt=""><i class="fa fa-quote-left"></i></div>
              <header>
                <select class="ps-rating">
                  <option value="1">1</option>
                  <option value="1">2</option>
                  <option value="1">3</option>
                  <option value="1">4</option>
                  <option value="5">5</option>
                </select>
                <p>Logan May - CEO & Founder Invision</p>
              </header>
              <footer>
                <p>“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping sweet muffin pudding tart bear claw sugar plum croissant. “</p>
              </footer>
            </div>
          </div>
        </div>
        
      </div>
      
      <hr  width="100%" size="5px" text-align="center" color="green" noshade="noshade"/>
      <div class="ps-subscribe">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                  <h3><i class="fa fa-envelope"></i>Sign up to Newsletter</h3>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                  <form class="ps-subscribe__form" action="http://localhost/Project_web/auth/login/index.php" method="post">
                    <input class="form-control" type="text" placeholder="">
                    <button >SIGN UP NOW</button>
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
                    <p>&copy; <a href="#">HUS_DEGINER</a>, Inc. All rights Resevered. Design by <a href="#"> TV2H_team</a></p>
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

    <!-- ChatbotAI -->
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
      intent="WELCOME"
      chat-title="HusStore_ChatbotAI"
      agent-id="e20112ca-0f51-4f0c-9437-884e1a3b67e0"
      language-code="vi"
    ></df-messenger>
    <script type="text/javascript">
    document.write('<style>body{padding-bottom:20px}#e_itexpress_left{display:none;position:fixed;z-index:9999;top:0;left:0}#e_itexpress_footer{display:none;position:fixed;z-index:9999;bottom:-50px;left:0;width:100%;height:104px;background:url(https://itexpress.vn/images/noel/ft.png) repeat-x bottom left}#e_itexpress_bottom_left{display:none;position:fixed;z-index:9999;bottom:20px;left:20px}@media (min-width: 992px){#e_itexpress_left,#e_itexpress_footer,#e_itexpress_bottom_left{display:block}}</style>');
    document.write('<img id="e_itexpress_left" src="https://itexpress.vn/images/noel/topleft.png"/>');
    document.write('<div id="e_itexpress_footer"></div>');
    document.write('<img id="e_itexpress_bottom_left" src="https://itexpress.vn/images/noel/bottomleft.png"/>');
   
</script>


    
  </body>

</html>
<?php
// Đường dẫn đến file log
$logFile = 'log.txt';

// Hàm để đọc dữ liệu lượt truy cập từ file log
function getVisitData($logFile)
{
    if (file_exists($logFile)) {
        $logContent = file_get_contents($logFile);
        $visitData = json_decode($logContent, true);
    } else {
        $visitData = array();
    }

    return $visitData;
}

// Hàm để tăng số lượt truy cập cho ngày hiện tại
function increaseVisitCount($logFile)
{
    $visitData = getVisitData($logFile);
    $today = date('Y-m-d');

    if (isset($visitData[$today])) {
        $visitData[$today]++;
    } else {
        $visitData[$today] = 1;
    }

    file_put_contents($logFile, json_encode($visitData));
}

// Gọi hàm để tăng số lượt truy cập
increaseVisitCount($logFile);

// Lấy dữ liệu lượt truy cập
$visitData = getVisitData($logFile);
?>