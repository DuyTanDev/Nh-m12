<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="../content/img/2.webp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>lịch sử đơn hàng</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Trang chủ</a>
                        <span>lịch sử đơn hàng</span>
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

        </div>
        <div class="checkout__form">
            <?php
            if (isset($bill) && (is_array($bill))) {
                extract($bill);
            }
            $PTTT = laytpptt($bill['BILLPTTT']);
            ?>
            <div class="col-lg-12">
                <h6><span class="icon_tag_alt"></span> Chân thành Cảm mơn quý khách đã ủng hộ chúng tôi
                </h6>
            </div>
            <form action="#">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Thông tin đơn hàng</h4>
                            <div class="checkout__order__products">Chi tiết đơn hàng</div>
                            <ul>
                                <li> Mã Đơn: <span><?= $bill['IDBILL']  ?></span> </li>
                                <li> Ngày Đặt Đơn:<span><?= $bill['NGAYDATHANG']  ?></span> </li>
                                <li> Tổng Đơn<span><?= $bill['TONGBILL']  ?></span> </li>
                                <li><?= $PTTT ?></li>
                            </ul>
                            <div class="checkout__order__products">Thông tin khách hàng </div>

                            <ul>
                                <li>Tên khách hàng:<span><?= $bill['NAMEBILL']  ?></span></li>
                                <li>Địa chỉ: <span><?= $bill['BILLDIACHI']  ?></span></li>
                                <li>Số điện thoại<span><?= $bill['BILLSDT']  ?></span></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-6">
                        <img src="../content/img/categories/background 2.webp" alt="">
                    </div>

                </div>
            </form>
        </div>

    </div>

</section>

<!-- Checkout Section End -->