<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="../content/img/2.webp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>THANH TOÁN</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">trang chủ</a>
                        <span>thanh toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

            </div>
        </div>
        <div class="checkout__form">
            <h4>Hóa đơn</h4>
            <form action="index.php?act=billconfirm" method="post">
                <div class="row">
                    <?php
                    if (isset($_SESSION["taikhoan"])) {
                        $name = $_SESSION["taikhoan"]['NAMEKH'];
                        $diachi = $_SESSION["taikhoan"]['DIACHI'];

                        $sdt = $_SESSION["taikhoan"]['SDT'];
                    } else {
                        $name = "";
                        $diachi = "";
                        $email = "";
                        $sdt = "";
                    }

                    ?>
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Fist Name<span>*</span></p>
                                    <input type="text" name="name" class="form-control thanh-ttkh" value="<?= $name ?>">
                                </div>
                            </div>

                        </div>

                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input type="text" name="diachi" value="<?= $diachi ?>" placeholder="Street Address" class="checkout__input__add">
                        </div>


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="text" name="sdt" value="<?= $sdt ?>">
                                </div>
                            </div>

                        </div>



                    </div>
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <div class="col-md-6">
                                <div class="pttt">

                                    <div class="chon-pttt form-check ">
                                        <span class="checkmark"> Thanh Toán Trực Tiếp <input required type="radio" value="1" name="pttt"> </span>
                                        <br>
                                        <span class="checkmark"> Chuyển Khoản<input type="radio" required value="2" name="pttt"> </span>
                                        <br>
                                        <span class="checkmark"> Thanh Toán Online<input type="radio" required value="3" name="pttt"> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Hình thức thanh toán</h4>


                            <div class="checkout__input__checkbox">

                                <input required type="radio" value="1" name="pttt">
                                <span class="checkmark"> Thanh Toán Trực Tiếp</span>


                                <br>
                                <input type="radio" required value="2" name="pttt">
                                <span class="checkmark"> Thanh Toán Online </span>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tt-giohang">
                            <div class="thanh-tt-1">
                                <h5>
                                    <center>Thông Tin Giỏ Hàng</center>
                                </h5>
                            </div>
                            <div class="bang-cart">
                                <table class="table table-striped table-hover table-reponsive bang-giohang-bill">
                                    <?php

                                    viewcart(0);
                                    ?>
                                </table>
                                <a href="index.php?act=themgiohang " class="btn btn-primary quaylaimh">Quay Lại Mua Hàng</a>
                                <!-- <a  href="index.php?act=billconfirm " class="btn btn-primary quaylaimh">Đồng  ý Đặt Hàng</a> -->

                                <input type="submit" value="Đồng Ý Đặt Hàng" name="nut-dathang" class="btn btn-danger">

                                <!-- <a href="index.php?act=tinhtrangdangnhap" class="btn btn-danger">Đồng Ý Đặt Hàng</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->