<?php
    require_once("../../backend/filterAdmin.php");
    require_once("../../repository/shoeRepository.php");
    require_once("../../repository/categoryRepository.php");
    require_once("../../uploadFile.php");
    $shoeRepository = new ShoeRepository(); 
    $categoryRepository = new CategoryRepository();
    $uploadFile = new UploadFile();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link href="css/shoe.css" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="../../index.php" class="site_title"><i class="fa fa-paw"></i> <span>HOME</span></a>
            </div>

            <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
              <div class="profile_info">
                <span>Welcome,</span>
                <h2> <?php require_once("../../backend/filterWithCookieAdmin.php") ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                    <li><a href="shoe.php">Quản Lý Giày</a></li>
                      <li><a href="order.php">Quản Lý Đơn Hàng</a></li>
                      <li><a href="user.php">Quản Lý User</a></li>
                    </ul>
                  </li>
                 
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <?php require_once("../../backend/filterWithCookieAdmin.php") ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                  <a class="dropdown-item"  href="javascript:;">Help</a>
                    <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="right_col" role="main">
        <a class="btn btn-primary" href="shoe.php" role="button">Trở Về</a>
        <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <?php
                $listShoe = $shoeRepository->getById($_GET['id']);
                foreach($listShoe as $shoe){
            ?>
          <label for="exampleInputEmail1">Tên Giày</label>
          <input required value="<?php echo $shoe['shoe_name']?>" minlength="5" maxlength="50" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên giày">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Giá Tiền (VND)</label>
          <input required value="<?php echo $shoe['price']?>" min="0" max="99999999999" name="price" type="number" class="form-control" id="exampleInputPassword1" placeholder="Nhập giá tiền">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Giảm Giá (%)</label>
          <input required value="<?php echo $shoe['sale']?>" min="0" max="100" name="sale" type="number" class="form-control" id="exampleInputPassword1" placeholder="Nhập % giảm giá">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Kích cỡ</label>
          <input required value="<?php echo $shoe['size']?>" min="1" max="100" name="size" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập kích cỡ">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Màu</label>
          <input required value="<?php echo $shoe['color']?>" minlength="1" maxlength="50" name="color" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập màu">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Giới Thiệu</label>
          <input required value="<?php echo $shoe['review']?>" minlength="1" maxlength="500" name="review" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nhập giới thiệu">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Thể Loại</label>
          <select name="category_id" class="form-control">
              <?php
                $listCategory = $categoryRepository->getAll();
                foreach($listCategory as $category){
              ?>
                <option <?php if($category['id']==$shoe['category_id']) echo "selected" ?> value="<?php echo $category['id'];?>" ><?php echo $category['name'];?></option>
                <?php
                    }
                ?>
            </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Chọn ảnh</label>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
            </div>
            <div class="custom-file">
                <input multiple accept="image/png, image/jpeg" name="files[]" type="file" class="custom-file-input" id="inputGroupFile01">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
            </div>
        </div>
        <div>
        </div>
        <?php
                }
        ?>
        <button name="submit" type="submit" class="btn btn-primary">Cập Nhật</button>
        <?php
          if(isset($_POST['submit'])){
              $shoeRepository->update($_GET['id'],$_POST['name'],$_POST['price'],$_POST['sale'],$_POST['size'],$_POST['color'],$_POST['review'],$_POST['category_id']);
              if(!empty($_FILES['files']['name'][0])){
                $shoeRepository->deleteImage($_GET['id']);
                $arrLinkFile = $uploadFile->upload("../../");
                foreach($arrLinkFile as $linkFile){
                    $shoeRepository->addImage($_GET['id'], $linkFile);
                }
              }
              echo "<script>alert('Cập nhật thành công');window.location.href='shoe.php';</script>";
          }
        ?>
     </form>
        </div>
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
