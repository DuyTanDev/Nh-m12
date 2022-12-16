<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="../content/img/2.webp">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="breadcrumb__text">
          <h2>CHI TIẾT SẢN PHẨM</h2>
          <div class="breadcrumb__option">
            <a href="./index.html">Trang chủ</a>
            <a href="./index.html">Chi tiết sản phẩm</a>
            <span>Chi tiết sản phẩm</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
  <div class="container">
    <div class="row">

      <?php
      extract($hienthichitietsp);
      $img = $img_path . $IMG;
      echo '
              <div class="col-lg-6 col-md-6">
              <div class="product__details__pic">
                  <div class="product__details__pic__item">
                      <img class="product__details__pic__item--large" src="' . $img . '"  alt="">
                  </div>
                  
              </div>
          </div>
              <div class="col-lg-6 col-md-6">
              <div class="product__details__text">
                  <h3>          <span> ' . $NAMESP . '</span> </h3>
                 
                  <div class="product__details__rating">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-half-o"></i>
                      <span>(18 reviews)</span>
                  </div>
                  <div class="product__details__price">          <span  >Giá : ' . number_format($PRICE, 0, ',', '.') . '</span>
                  </div>
                  <p>          <span  >Mô Tả :' . $MOTA . '</span> 
                  <ul>
                  <li><b>SIZE</b> <span> X | M | L | S</span></li>
                  <li><b>Chất liệu</b> <span>100%  COTTON<samp>  Free pickup today</samp></span></li>
                  <li><b>Chi tiết</b> <span>IN PET CAO CẤP NHẤT</span></li>
                 
              </ul>
                  </p>
                 
<div class="product__details__quantity">
                      <div class="quantity">
                          <div class="pro-qty">
                              <input type="text" value="1">
                          </div>
                      </div>
                  </div>
                  <form action="index.php?act=themgiohang" method="post">
                  <input type="hidden" name="idsp" value="' . $IDSP . '">
                   <input type="hidden" name="namesp" value="' . $NAMESP . '">
                   <input type="hidden" name="img" value="' . $IMG . '">
                   <input type="hidden" name="gia" value="' . $PRICE . ' ">
                   <input type="submit"  name="them-giohang"class="primary-btn" value="THÊM VÀO GIỎ">
               
                  <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                  </form>
                 
              </div>
          </div>
        
          ';
      ?>

    </div>
  </div>
</section>


<!-- Related Product Section Begin -->
<section class="related-product">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title related__product__title">
          <h2>HÀNG CÙNG LOẠI</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      // var_dump($sanpham_cungloai);
      foreach ($sanpham_cungloai as $sanpham_cungloai) {
        extract($sanpham_cungloai);
        $img = $img_path . $IMG;
        $linksp = "index.php?act=chitietsanpham&IDSP=" . $IDSP;
        echo ' 
					
					
          
          
          <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="product__item">
            <div class="product__item__pic set-bg" >
            <img class="product__details__pic__item--large" src="' . $img . '"  alt="">

              <ul class="product__item__pic__hover">
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              </ul>
            </div>
            <div class="product__item__text">
              <h6>						<a href="' . $linksp . '">' . $NAMESP . '</a>
              </h6>
              <h5><a href="' . $linksp . '">' . $PRICE . '</a></h5>
            </div>
          </div>
        </div>';
      }

      ?>




    </div>
  </div>
</section>
<div class="row" id="binhluan">
  <div class="col-md-9 dong-ctsp">
    <div class="khung-chitietsp">
      <div class="text-spct">
        <h2>
          <center>Bình Luận Sản Phẩm</center>
        </h2>
      </div>
      <div class="noi-dungbl ">

      </div>
    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $("#binhluan").load("../view_user/binhluan/formbinhluan.php", {
      idpro: <?= $IDSP ?>
    });
  });
</script>

</div>
<style>
  .khung-chitietsp {
    margin-left: 50%;
  }
</style>