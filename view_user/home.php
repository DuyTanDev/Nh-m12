<style>
    .banner img {
        width: 100%;
        position: relative;
        bottom: 50px;
    }
</style>
<div class="banner">
    <img src="../content/img/hero/background 2.webp" alt="" height="">
</div>
<!-- Categories Section Begin -->
<section class="categories">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h2>Sản phẩm nổi bật</h2>
            </div>
            <div class="categories__slider owl-carousel">

                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="../content/img/categories/img_4323_557fcc594f724de0a002a7df24a316d8.webp">
                        <h5><a href="#">HEYYOU METAL MINT TEE</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="../content/img/categories/11.webp">
                        <h5><a href="#">HEYYOUSTUDIO BASIC TEE</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="../content/img/categories/10.webp">
                        <h5><a href="#">HEYYOUSTUDIO BASIC TE</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="../content/img/categories/14.webp">
                        <h5><a href="#">HEYYOUSTUDIO BASIC TEE</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="../content/img/categories/15.webp">
                        <h5><a href="#">HEYYOUSTUDIO BASIC TEEdrink fruits</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>CỬA HÀNG</h2>
                </div>

            </div>
        </div>
        <div class="row featured__filter">

            <?php
            foreach ($sanphamchotrangchu as $sanpham) {
                extract($sanpham);
                $linksp = "index.php?act=chitietsanpham&IDSP=" . $IDSP;
                $hinh = $img_path . $IMG;
                echo '
             
             <div class="col-md-3 col-sm-6 col-12">
             <div class="khoi-cot4 khoicot4-sp">
             <a href="' . $linksp . '"><img src="' . $hinh . '" class="anh-cot4"></a>
             <div class="description">
             <a class="linksp-h3" href="' . $linksp . '"> <h5>' . $NAMESP . '</h5></a>
             <h4 style="color: red;">' . number_format($PRICE, 0, ',', '.') . ' <sup>đ</sup>

             </h4>
             <form action="index.php?act=themgiohang" method="post">
             <input type="hidden" name="idsp" value="' . $IDSP . '">
              <input type="hidden" name="namesp" value="' . $NAMESP . '">
              <input type="hidden" name="img" value="' . $IMG . '">
              <input type="hidden" name="gia" value="' . $PRICE . ' ">
              <input type="submit"  name="them-giohang" class="form-control nut-muahang" value=" Thêm Vào Giỏ Hàng">
             </form>
               </div>
             </div>
           </div>
         ';
            }

            ?>
        </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="banner__pic">
                    <img src="img/banner/banner-2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->


<!-- Blog Section Begin -->
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>Tin Tức</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="../content/img/categories/facebook.webp" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Thời trang đơn giản</a></h5>
                        <p>Phối đồ đơn giản bởi heyyou nơi giao lưu văn hóa thời trang</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="../content/img/categories/background 2.webp" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Kỉ niệm ngày khai chương heyyou shop</a></h5>
                        <p>kỉ niệm ngày khai chương heyyou ưu đãi đặc biệt giảm giá tất cả các mặt hàng 25%</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="../content/img/categories/tiktok.webp" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Phong cách ăn mặc của gen-z</a></h5>
                        <p>Hiện nay thế hệ trẻ gen-z rất ưa chuộng những mặc hàng unnisex</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->