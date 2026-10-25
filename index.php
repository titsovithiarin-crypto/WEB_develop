<?php
require 'connection.php';

$sql = "SELECT * FROM tbl_product WHERE status = 1 ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Product List - Rin Titsovithia</title>

  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <link href="vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <link href="vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet">
  <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
  <link href="build/css/custom.min.css" rel="stylesheet">

  <style>
    .product-heading {
      margin-bottom: 25px;
    }

    .product-list {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      margin-top: 20px;
    }


    .product-card {
      width: 280px;
      min-height: 390px;
      background: #fff;
      border: 1px solid #e5e7eb;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 3px 10px rgba(0, 0, 0, 0.06);
      transition: 0.2s;
      
    }

    .product-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
    }


    .product-image {
      width: 100%;
      height: 80%;
      object-fit: cover;
      display: block;
      
      
    }


    .product-info {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 12px;
      padding: 20px 15px;
    }

    .product-name {
      text-align: left;
      font-size: 16px;
      font-weight: bold;
      margin: 0;
      overflow-wrap: anywhere;
    }

    .product-price {
      text-align: right;
      color: #198754;
      font-size: 16px;
      font-weight: bold;
      margin: 0;
      white-space: nowrap;
    }


    .no-products {
      padding: 25px;
      background: #fff;
      border: 1px solid #ddd;
      border-radius: 8px;
    }
  </style>
</head>

<body class="nav-md">

  <div class="container body">
    <div class="main_container">

      <!-- Sidebar -->
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title">
              <i class="fa fa-paw"></i>
              <span>Welcome Vithia</span>
            </a>
          </div>

          <div class="clearfix"></div>

          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="./images/vithia.jpg" alt="Profile"
                class="img-circle profile_img">
            </div>

            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Rin Titsovithia</h2>
            </div>
          </div>

          <br>

          <div id="sidebar-menu"
            class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>

              <ul class="nav side-menu">
                <li>
                  <a>
                    <i class="fa fa-home"></i>
                    Product
                    <span class="fa fa-chevron-down"></span>
                  </a>

                  <ul class="nav child_menu">
                    <li>
                      <a href="product.php">Product List</a>
                    </li>
                    <li>
                      <a href="add_products.php">Add Product</a>
                    </li>
                  </ul>
                </li>

                <li>
                  <a>
                    <i class="fa fa-edit"></i>
                    Forms
                    <span class="fa fa-chevron-down"></span>
                  </a>

                  <ul class="nav child_menu">
                    <li><a href="form.html">General Form</a></li>
                    <li><a href="form_advanced.html">Advanced Components</a></li>
                    <li><a href="form_validation.html">Form Validation</a></li>
                    <li><a href="form_wizards.html">Form Wizard</a></li>
                    <li><a href="form_upload.html">Form Upload</a></li>
                    <li><a href="form_buttons.html">Form Buttons</a></li>
                  </ul>
                </li>

                <li>
                  <a>
                    <i class="fa fa-table"></i>
                    Tables
                    <span class="fa fa-chevron-down"></span>
                  </a>

                  <ul class="nav child_menu">
                    <li><a href="tables.html">Tables</a></li>
                    <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>

          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" title="Settings">
              <span class="glyphicon glyphicon-cog"></span>
            </a>

            <a data-toggle="tooltip" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen"></span>
            </a>

            <a data-toggle="tooltip" title="Lock">
              <span class="glyphicon glyphicon-eye-close"></span>
            </a>

            <a href="login.html" data-toggle="tooltip" title="Logout">
              <span class="glyphicon glyphicon-off"></span>
            </a>
          </div>

        </div>
      </div>

      <!-- Top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle">
                <i class="fa fa-bars"></i>
              </a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="javascript:;"
                  class="user-profile dropdown-toggle"
                  data-toggle="dropdown"
                  aria-expanded="false">

                  <img src="./images/vithia.jpg" alt="">
                  Rin Titsovithia
                  <span class="fa fa-angle-down"></span>
                </a>

                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="javascript:;">Profile</a></li>
                  <li><a href="javascript:;">Settings</a></li>
                  <li><a href="javascript:;">Help</a></li>
                  <li>
                    <a href="login.html">
                      <i class="fa fa-sign-out pull-right"></i>
                      Log Out
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>

      <!-- Page content -->
      <div class="right_col" role="main">

        <div class="product-heading">
          <h2>Product List</h2>
          <p>Browse all available products.</p>
        </div>

        <?php
        if ($result && mysqli_num_rows($result) > 0) {
          echo '<div class="product-list">';

          while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="product-card">';

            echo '<img src="img/' . $row['img'] . '"
                               class="product-image"
                               alt="Product image">';

            echo '<div class="product-info">';

            echo '<h3 class="product-name">' . $row['name'] . '</h3>';

            echo '<p class="product-price">$' . $row['price'] . '</p>';

            echo '</div>';
            echo '</div>';
          }

          echo '</div>';
        } else {
          echo '<div class="no-products">No products found!</div>';
        }
        ?>

      </div>
      <!-- End page content -->

      <!-- Footer -->
      <footer>
        <div class="pull-right">
          Director by <strong>Vithia</strong>
          <a href="https://colorlib.com"></a>
        </div>

        <div class="clearfix"></div>
      </footer>

    </div>
  </div>

  <!-- Scripts -->
  <script src="vendors/jquery/dist/jquery.min.js"></script>
  <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="vendors/fastclick/lib/fastclick.js"></script>
  <script src="vendors/nprogress/nprogress.js"></script>
  <script src="vendors/Chart.js/dist/Chart.min.js"></script>
  <script src="vendors/gauge.js/dist/gauge.min.js"></script>
  <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <script src="vendors/iCheck/icheck.min.js"></script>
  <script src="vendors/skycons/skycons.js"></script>
  <script src="vendors/Flot/jquery.flot.js"></script>
  <script src="vendors/Flot/jquery.flot.pie.js"></script>
  <script src="vendors/Flot/jquery.flot.time.js"></script>
  <script src="vendors/Flot/jquery.flot.stack.js"></script>
  <script src="vendors/Flot/jquery.flot.resize.js"></script>
  <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="vendors/flot.curvedlines/curvedLines.js"></script>
  <script src="vendors/DateJS/build/date.js"></script>
  <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <script src="vendors/moment/min/moment.min.js"></script>
  <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="build/js/custom.min.js"></script>

</body>

</html>