<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Ogani Template">
  <meta name="keywords" content="Ogani, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ogani | Template</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="../css/style_user.css">
  <script src="../js/giohang.js"></script>
  <!-- Css Styles -->
  <link rel="stylesheet" href="../content/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="../content/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../content/css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="../content/css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="../content/css/jquery-ui.min.css" type="text/css">
  <link rel="stylesheet" href="../content/css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="../content/css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="../content/css/style.css" type="text/css">
</head>

<body>
  <!-- Humberger Begin -->
  <div class="humberger__menu__overlay"></div>
  <div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
      <a href="#"><img src="https://file.hstatic.net/200000031420/file/logo_heyyou_website-04_cfe6eb8b64f7430db789de966b4003b3.png" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
      <ul>
        <li><a href="#"><i class="fa fa-heart"></i> </a></li>
        <li><a href="#"><i class="fa fa-shopping-bag"></i> </a></li>
      </ul>
    </div>
    <div class="humberger__menu__widget">
      <div class="header__top__right__language">
        <div class="header__top__right__auth">
          <a href="index.php?act=taikhoandangnhap"><i class="fa fa-user"></i>Đăng nhập </a>
        </div>
      </div>
      <div class="header__top__right__auth">
        <a href="#"><i class="fa fa-user"></i> Đăng nhập</a>
      </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
      <ul>
        <li class="active"><a href="index.php">Trang chủ</a></li>
        <li><a href="index.php?act=shop-girl">Shop</a>
          <ul class="header__menu__dropdown">
            <?php
            foreach ($danhsachdanhmuctrangchu as $danhmuc) {
              extract($danhmuc);
              $linkdm = "index.php?act=danhmucsanpham&IDDM=" . $IDDM;
              echo '
             
           
             <li><a href="' . $linkdm . '" >' . $NAME . '</a></li>
           
        
             ';
            }
            ?>
          </ul>
        </li>
        <li><a href="index.php?act=gioithieu">TIN TỨC</a> </li>



        <li><a href="index.php?act=lienhe">LIÊN HỆ</a></li>
        <li><a href="index.php?act=gopy">GIỚI THIỆU</a></li>
      </ul>s
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
      <ul>
        <li><i class="fa fa-envelope"></i> Nhom12@fpt.edu.vn</li>
        <li>Giao hàng miễn phí cho tất cả đơn hàng trên 300</li>
      </ul>
    </div>
  </div>
  <!-- Humberger End -->

  <!-- Header Section Begin -->
  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="header__top__left">
              <ul>
                <li><i class="fa fa-envelope"></i> Nhom12@fpt.edu.vn</li>
                <li>Giao hàng miễn phí cho tất cả đơn hàng trên 300</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="header__top__right">
              <div class="header__top__right__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
              </div>
            
              <div class="header__top__right__auth">
                <a href="index.php?act=taikhoandangnhap"><i class="fa fa-user"></i> Đăng nhập</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="header__logo">
            <a href="./index.html"><img src="https://file.hstatic.net/200000031420/file/logo_heyyou_website-04_cfe6eb8b64f7430db789de966b4003b3.png" alt=""></a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="header__menu">
            <ul>
              <li class="active"><a href="index.php">Trang chủ</a></li>
              <li><a href="index.php?act=shop-girl">Shop</a>
                <ul class="header__menu__dropdown">
                  <?php
                  foreach ($danhsachdanhmuctrangchu as $danhmuc) {
                    extract($danhmuc);
                    $linkdm = "index.php?act=danhmucsanpham&IDDM=" . $IDDM;
                    echo '
             
           
             <li><a href="' . $linkdm . '" >' . $NAME . '</a></li>
           
        
             ';
                  }
                  ?>
                </ul>
              </li>
              <li><a href="index.php?act=gioithieu">BLOG</a> </li>



              <li><a href="index.php?act=lienhe">LIÊN HỆ</a></li>
              <li><a href="index.php?act=gopy">giới thiệu</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-3">
          <div class="header__cart">
            <ul>
              <li><a href="index.php?act=shop-girl"><i class="fa fa-heart"></i></a></li>
              <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="humberger__open">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </header>
  <!-- Header Section End -->

  <!-- Hero Section Begin -->
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="hero__categories">
            <div class="hero__categories__all">
              <i class="fa fa-bars"></i>
              <span>DANH MỤC</span>
            </div>
            <ul>

              <?php
              foreach ($danhsachdanhmuctrangchu as $danhmuc) {
                extract($danhmuc);
                $linkdm = "index.php?act=danhmucsanpham&IDDM=" . $IDDM;
                echo '
                  
                  <li><a class="chu-danhmuc nav" href="' . $linkdm . '">' . $NAME . '</a></li>

                  ';
              }
              ?>
            </ul>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="hero__search">
            <div class="hero__search__form">
              <form action="index.php?act=danhmucsanpham" method="POST" role="search">
                <div class="hero__search__categories">
                  DANH MỤC
                  <span class="arrow_carrot-down"></span>
                </div>
                <input type="text" name="keyword" type="search" required placeholder="Tìm Kiếm Sản Phẩm">
                <button name="noidungtk" type="submit" class="site-btn">SEARCH</button>
              </form>
            </div>
            <div class="hero__search__phone">
              <div class="hero__search__phone__icon">
                <i class="fa fa-phone"></i>
              </div>
              <div class="hero__search__phone__text">
                <h5>0916563248</h5>
                <span>Hỗ trợ 24/7 time</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- Hero Section End -->