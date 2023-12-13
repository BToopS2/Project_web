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
  <title>Đồ hiệu dành cho nam</title>
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
            <li class="menu-item menu-item-has-children dropdown"><a href="index.php">Home</a>
            </li>
            <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">Men</a>

            </li>
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
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with HUS Store</p>
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with HUS Store</p>
      <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with HUS Store</p>
    </div>
  </div>
  <main class="ps-main">
    <div class="ps-products-wrap pt-80 pb-80">
      <div class="ps-products" data-mh="product-listing">
        <div class="ps-product-action">
          <div class="ps-product__filter">
            <select class="ps-select selectpicker">
              <option value="1">Shortby</option>
              <option value="2">Name</option>
              <option value="3">Price (Low to High)</option>
              <option value="4">Price (High to Low)</option>
            </select>
          </div>
          <div class="ps-pagination">
            <ul class="pagination">
              <li class="page-item" data-page="1"><a href="#" class="page-link"><i class="fa fa-angle-left"></i></a></li>
              <li class="page-item active" data-page="1"><a href="#" class="page-link">1</a></li>
              <li class="page-item" data-page="2"><a href="#" class="page-link">2</a></li>
              <!-- Add more page numbers here dynamically based on total number of products -->
              <li class="page-item" data-page="2"><a href="#" class="page-link"><i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="ps-product__columns">
          <div class="girdpro">
            <!-- <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30" data-radio="100%"> -->
            <!-- <div class="ps-masonry"> -->
            <!-- <div class="grid-sizer"></div> -->
            <?php
            $checkNew = false;
            $listShoe = $shoeRepository->getShoesByCategoryId(1);
            foreach ($listShoe as $shoe) {
            ?>
              <div class="grid-item ">
                <div class="grid-item__content-wrapper">
                  <div class="ps-shoe ">
                    <div class="ps-shoe__thumbnail">
                      <?php
                      if (!$checkNew) {
                        echo '<div class="ps-badge"><span>New</span></div>';
                        $checkNew = true;
                      }
                      if ($shoe['sale'] > 0) {
                        echo '<div class="ps-badge ps-badge--sale ps-badge--2nd"><span>-' . $shoe['sale'] . '%</span></div>';
                      }
                      ?>

                      <a class="ps-shoe__favorite" href="#"><i class="ps-icon-heart"></i></a>
                      <?php
                      $arrLinkImage = $shoeRepository->getImage($shoe['shoe_id']);
                      if ($arrLinkImage->num_rows > 0) {
                        echo '<img id="imageShoe" src="' . $arrLinkImage->fetch_assoc()['link_image'] . '" alt="">';
                      } else {
                        echo '<img src="images/shoe/1.jpg" alt="">';
                      }
                      ?>
                      <a class="ps-shoe__overlay" href="product-detail.php?id=<?php echo $shoe['shoe_id'] ?>"></a>
                    </div>
                    <div class="ps-shoe__content">
                      <div class="ps-shoe__variants">
                        <div class="ps-shoe__variant normal">
                          <?php
                          foreach ($arrLinkImage as $linkImage) {
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
                        <p class="ps-shoe__categories"><a href="#"><?php echo $shoe['size'] ?></a></p>
                        <span class="ps-shoe__price">
                          <?php
                          if ($shoe['sale'] > 0) {
                            echo '<del>' . $shoe['price'] . ' VND</del>';
                          }
                          ?>
                          <?php
                          echo ($shoe['price'] - $shoe['price'] * $shoe['sale'] * 0.01) . " VND";
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
      <div class="ps-sidebar" data-mh="product-listing">
        <h3>- ĐỒ HIỆU NAM -</h3>
        <aside class="ps-widget--sidebar ps-widget--category">
          <div class="ps-widget__header">
            <h3>Loại</h3>
          </div>
          <div class="ps-widget__content">
            <ul class="ps-list--checked" id="categoryList">
              <li class="filter" data-brand="polo"><a href="#">Áo polo/khoác (<span id="countPolo"></span>)</a></li>
              <li class="filter" data-brand="hoodie"><a href="#">Áo hoodie (<span id="countHoodie"></span>)</a></li>
              <li class="filter" data-brand="quần"><a href="#">Quần (<span id="countQuan"></span>)</a></li>
              <li class="filter" data-brand="giày"><a href="#">Giày (<span id="countGiay"></span>)</a></li>
              <!-- <li class="filter" data-brand="other"><a href="#">Khác</a></li> -->
            </ul>
          </div>
        </aside>
        <!-- <aside class="ps-widget--sidebar ps-widget--filter">
          <div class="ps-widget__header">
            <h3>Giá</h3>
          </div>
          <div class="ps-widget__content">
            <input type="range" class="ps-slider" id="priceRange" min="0" max="500000" step="10000" value="50000">
            <p class="ac-slider__meta">Khoảng giá: <span id="minPrice">0</span> - <span id="maxPrice">50,000</span> VND</p>
            <a class="ac-slider__filter ps-btn" href="#" id="filterByPrice">Filter</a>
          </div>
        </aside> -->
        <aside class="ps-widget--sidebar ps-widget--filter">
          <div class="ps-widget__header">
            <h3>Giá</h3>
          </div>
          <div class="ps-widget__content">
            <div class="price-inputs">
              <input type="number" class="ps-input" id="minPriceInput" placeholder="Tối thiểu">
              <input type="number" class="ps-input" id="maxPriceInput" placeholder="Tối đa">
            </div>
            <a class="ac-slider__filter ps-btn" style="cursor: pointer;" id="filterByPrice">Lọc</a>
          </div>
        </aside>
        <style>
          .price-inputs {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
          }

          .ps-input {
            width: calc(50% - 5px);
            padding: 5px;
            box-sizing: border-box;
          }
        </style>
        <aside class="ps-widget--sidebar ps-widget--category">
          <div class="ps-widget__header">
            <h3>Nhãn hàng</h3>
          </div>
          <div class="ps-widget__content">
            <ul class="ps-list--checked" id="categoryList">
              <li class="filter" data-brand="Nike"><a href="#">Nike</a></li>
              <li class="filter" data-brand="Adidas"><a href="#">Adidas</a></li>
              <!-- <li class="filter" data-brand="Other"><a href="#">Khác</a></li> -->
            </ul>
          </div>
        </aside>

        <div class="ps-sticky desktop">
          <!-- <aside class="ps-widget--sidebar">
            <div class="ps-widget__header">
              <h3>Size</h3>
            </div>
            <div class="ps-widget__content">
              <table class="table ps-table--size" id="categoryList1">
                <tbody>
                  <tr>
                    <td>S</td>
                    <td>M</td>
                    <td>L</td>
                    <td>XL</td>
                    <td>XXL</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </aside> -->
          <!-- <aside class="ps-widget--sidebar">
            <div class="ps-widget__header">
              <h3>Color</h3>
            </div>
            <div class="ps-widget__content">
              <ul class="ps-list--color">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
              </ul>
            </div>
          </aside> -->
        </div>
        <!--aside.ps-widget--sidebar-->
        <!--    .ps-widget__header: h3 Ads Banner-->
        <!--    .ps-widget__content-->
        <!--        a(href='product-listing'): img(src="images/offer/sidebar.jpg" alt="")-->
        <!---->
        <!--aside.ps-widget--sidebar-->
        <!--    .ps-widget__header: h3 Best Seller-->
        <!--    .ps-widget__content-->
        <!--        - for (var i = 0; i < 3; i ++)-->
        <!--            .ps-shoe--sidebar-->
        <!--                .ps-shoe__thumbnail-->
        <!--                    a(href='#')-->
        <!--                    img(src="images/shoe/sidebar/"+(i+1)+".jpg" alt="")-->
        <!--                .ps-shoe__content-->
        <!--                    if i == 1-->
        <!--                        a(href='#').ps-shoe__title Nike Flight Bonafide-->
        <!--                    else if i == 2-->
        <!--                        a(href='#').ps-shoe__title Nike Sock Dart QS-->
        <!--                    else-->
        <!--                        a(href='#').ps-shoe__title Men's HUS-->
        <!--                    p <del> £253.00</del> £152.00-->
        <!--                    a(href='#').ps-btn PURCHASE-->
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
              <button>Sign up now</button>
            </form>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
            <p>...and receive <span>$20</span> coupon for first shopping.</p>
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
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script>
  <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
  <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
  <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <!-- Custom scripts-->
  <script type="text/javascript" src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#categoryList li').on('click', function(e) {
        e.preventDefault();
        if (!$(this).hasClass('current')) {
          $(this).addClass('current'); // Add current class to the clicked li element
        } else {
          $(this).removeClass('current'); // Remove current class from the clicked li element if it's already active
        }
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#categoryList1 td').on('click', function(e) {
        e.preventDefault();
        if (!$(this).hasClass('active')) {
          $(this).addClass('active'); // Add current class to the clicked li element
        } else {
          $(this).removeClass('active'); // Remove current class from the clicked li element if it's already active
        }
      });
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const typeFilterLinks = document.querySelectorAll('.ps-widget--category')[0].querySelectorAll('.filter');
      const brandFilterLinks = document.querySelectorAll('.ps-widget--category')[1].querySelectorAll('.filter');
      const products = Array.from(document.querySelectorAll('.ps-shoe__name')).map(product => ({
        element: product.closest('.grid-item'),
        name: product.textContent.toLowerCase(),
      }));
      const minPriceInput = document.getElementById('minPriceInput');
      const maxPriceInput = document.getElementById('maxPriceInput');
      const itemsPerPage = 8;
      let currentPage = 1;

      // Function to filter products based on type, brand, and price
      function filterProducts() {
        const checkedTypes = Array.from(typeFilterLinks).filter(checkbox => checkbox.classList.contains('active')).map(checkbox => checkbox.dataset.brand.toLowerCase());
        const checkedBrands = Array.from(brandFilterLinks).filter(checkbox => checkbox.classList.contains('active')).map(checkbox => checkbox.dataset.brand.toLowerCase());
        const minPrice = parseFloat(minPriceInput.value) || 0;
        const maxPrice = parseFloat(maxPriceInput.value) || Number.MAX_SAFE_INTEGER;

        // Apply filters and show/hide products
        products.forEach(product => {
          const productName = product.name;
          const productPrice = parseFloat(product.element.querySelector('.ps-shoe__price').textContent.trim().replace('VND', '').replace(',', ''));
          const typeMatch = checkedTypes.length === 0 || checkedTypes.some(type => productName.includes(type));
          const brandMatch = checkedBrands.length === 0 || checkedBrands.some(brand => productName.includes(brand));
          const priceMatch = productPrice >= minPrice && productPrice <= maxPrice;

          if (typeMatch && brandMatch && priceMatch) {
            product.element.style.display = 'block';
          } else {
            product.element.style.display = 'none';
          }
        });

        // Update pagination after filtering
        showPage(currentPage);
      }

      // Event listeners for type and brand filter checkboxes
      typeFilterLinks.forEach(link => {
        link.addEventListener('click', function() {
          this.classList.toggle('active');
          filterProducts();
        });
      });

      brandFilterLinks.forEach(link => {
        link.addEventListener('click', function() {
          this.classList.toggle('active');
          filterProducts();
        });
      });

      // Event listeners for price range inputs
      minPriceInput.addEventListener('input', filterProducts);
      maxPriceInput.addEventListener('input', filterProducts);

      // Pagination logic
      function showPage(page) {
        const start = (page - 1) * itemsPerPage;
        const end = page * itemsPerPage;

        products.forEach((product, index) => {
          if (index >= start && index < end && product.element.style.display !== 'none') {
            product.element.style.display = 'block';
          } else {
            product.element.style.display = 'none';
          }
        });
      }

      // Show the initial page
      showPage(currentPage);

      // Event listener for pagination clicks
      document.querySelectorAll('.pagination .page-item').forEach(item => {
        item.addEventListener('click', function(event) {
          event.preventDefault();
          currentPage = parseInt(this.getAttribute('data-page'));
          showPage(currentPage);

          // Update active class for pagination
          document.querySelectorAll('.pagination .page-item').forEach(el => {
            el.classList.remove('active');
          });
          this.classList.add('active');
        });
      });
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const selectFilter = document.querySelector('.ps-product__filter select');
      const productsContainer = document.querySelector('.girdpro');
      const products = Array.from(document.querySelectorAll('.ps-shoe__name')).map(product => ({
        element: product.closest('.grid-item'),
        name: product.textContent.toLowerCase(),
        price: parseFloat(product.closest('.ps-shoe__content').querySelector('.ps-shoe__price').textContent.trim().replace('VND', '').replace(',', '')),
      }));

      selectFilter.addEventListener('change', function() {
        const selectedValue = parseInt(this.value);
        switch (selectedValue) {
          case 2: // Name
            products.sort((a, b) => a.name.localeCompare(b.name));
            break;
          case 3: // Price (Low to High)
            products.sort((a, b) => a.price - b.price);
            break;
          case 4: // Price (High to Low)
            products.sort((a, b) => b.price - a.price);
            break;
          default:
            break;
        }

        // Rearrange DOM based on sorted products
        products.forEach((product, index) => {
          productsContainer.appendChild(product.element);
        });
      });
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const filterLinks = document.querySelectorAll('.filter');
      const products = Array.from(document.querySelectorAll('.ps-shoe__name')).map(product => ({
        element: product.closest('.grid-item'),
        name: product.textContent.toLowerCase(),
      }));

      filterLinks.forEach(link => {
        link.addEventListener('click', function() {
          // ... (existing filtering logic remains unchanged)

          // Initialize counters for each type of clothing
          let countPolo = 0;
          let countHoodie = 0;
          let countQuan = 0;
          let countGiay = 0;

          // Loop through products to count each type of clothing
          products.forEach(product => {
            const productName = product.name;
            if (productName.includes('polo')) {
              countPolo += 1;
            } else if (productName.includes('hoodie')) {
              countHoodie += 1;
            } else if (productName.includes('quần')) {
              countQuan += 1;
            } else if (productName.includes('giày')) {
              countGiay += 1;
            }
          });

          // Update counters in the HTML
          document.getElementById('countPolo').textContent = countPolo;
          document.getElementById('countHoodie').textContent = countHoodie;
          document.getElementById('countQuan').textContent = countQuan;
          document.getElementById('countGiay').textContent = countGiay;
        });
      });
    });
  </script>

  <script>
    // JavaScript code to handle pagination
    document.addEventListener("DOMContentLoaded", function() {
      const items = document.querySelectorAll('.grid-item');
      const itemsPerPage = 8;
      let currentPage = 1;

      // Function to show items based on page number
      function showPage(page) {
        const start = (page - 1) * itemsPerPage;
        const end = page * itemsPerPage;

        items.forEach((item, index) => {
          if (index >= start && index < end) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      }

      // Initially show the first page
      showPage(currentPage);

      // Event listener for pagination clicks
      document.querySelectorAll('.pagination .page-item').forEach(item => {
        item.addEventListener('click', function(event) {
          event.preventDefault();
          currentPage = parseInt(this.getAttribute('data-page'));
          showPage(currentPage);

          // Update active class for pagination
          document.querySelectorAll('.pagination .page-item').forEach(el => {
            el.classList.remove('active');
          });
          this.classList.add('active');
        });
      });
    });
  </script>
  <script>

  </script>

</body>

</html>