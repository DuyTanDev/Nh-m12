<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="../content/img/2.webp" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2 >SẢN PHẨM</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Trang chủ</a>
                        <span>Sản phẩm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">

                    <div class="sidebar__item">
                        <h4>Lọc theo giá</h4>
                        <div class="price-range-wrap">
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="540">
                                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                <span  tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            </div>
                            <div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__item sidebar__item__color--option">
                        <h4>Màu</h4>
                        <div class="sidebar__item__color sidebar__item__color--white">
                            <label for="white">
                                Trắng
                                <input type="radio" id="white">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--gray">
                            <label for="gray">
                                vàng
                                <input type="radio" id="gray">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--red">
                            <label for="red">
                                Đỏ
                                <input type="radio" id="red">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--black">
                            <label for="black">
                                Đen
                                <input type="radio" id="black">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--blue">
                            <label for="blue">
                                Xanh
                                <input type="radio" id="blue">
                            </label>
                        </div>
                        <div class="sidebar__item__color sidebar__item__color--green">
                            <label for="green">
                                Xanh lá
                                <input type="radio" id="green">
                            </label>
                        </div>
                    </div>
                    <div class="sidebar__item">
                        <h4>Size</h4>
                        <div class="sidebar__item__size">
                            <label for="large">
                                S
                                <input type="radio" id="large">
                            </label>
                        </div>
                        <div class="sidebar__item__size">
                            <label for="medium">
                                M
                                <input type="radio" id="medium">
                            </label>
                        </div>
                        <div class="sidebar__item__size">
                            <label for="small">
                                L
                                <input type="radio" id="small">
                            </label>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="product__discount">
                    <div class="section-title product__discount__title">
                        <h2>Sản phẩm</h2>
                    </div>
                    <div class="row">
                        <div class="product__discount__slider owl-carousel">


                        </div>
                    </div>
                </div>
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                                <span>sản phẩm</span>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    foreach ($sanphamchotrangchu as $sanpham) {
                        extract($sanpham);
                        $linksp = "index.php?act=chitietsanpham&IDSP=" . $IDSP;
                        $hinh = $img_path . $IMG;
                        echo '
             
            
         
         
         

           <div class="col-lg-4 col-md-6 col-sm-6">
           <div class="product__item">
               <div class="product__item__pic set-bg" >  <a href="' . $linksp . '"><img src="' . $hinh . '" class="anh-cot4"></a>
                   <ul class="product__item__pic__hover">
                      
                       <form action="index.php?act=themgiohang" method="post" >
                       <input type="hidden" name="idsp" value="' . $IDSP . '">
                        <input type="hidden" name="namesp" value="' . $NAMESP . '">
                        <input type="hidden" name="img" value="' . $IMG . '">
                        <input type="hidden" name="gia" value="' . $PRICE . ' ">
                        <input type="submit"  name="them-giohang" class="form-control nut-muahang" value=" Thêm Vào Giỏ Hàng">
                       </form>
                   </ul>
               </div>
               <div class="product__item__text">
                    <a  href="' . $linksp . '"> <h6>' . $NAMESP . '</h6></a>
                   <h5>' . $PRICE . ' </h5>
               </div>
           </div>
       </div>

           ';
                    }

                    ?>



                </div>
                <div class="product__pagination">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->
