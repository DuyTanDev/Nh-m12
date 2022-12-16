 <!-- Breadcrumb Section Begin -->
 <section class="breadcrumb-section set-bg" data-setbg="../content/img/2.webp">
     <div class="container">
         <div class="row">
             <div class="col-lg-12 text-center">
                 <div class="breadcrumb__text">
                     <h2>GIỎ HÀNG</h2>
                     <div class="breadcrumb__option">
                         <a href="./index.html">Trang chủ</a>
                         <span>Giỏ hàng</span>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Breadcrumb Section End -->

 <section class="shoping-cart spad">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="shoping__cart__table">
                     <form action="index.php?act=capnhapbill" method="post">
                         <table>

                             <?php
                                viewcart(1);
                                ?>
                         </table>
                         <div class="row">
                             <div class="col-lg-12">
                                 <div class="shoping__cart__btns">
                                     <a href="index.php?act=index.php " class="primary-btn cart-btn">QUAY LẠI MUA HÀNG</a>
                                     <!-- <a  href="index.php?act=bill" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            ĐẶT HÀNG  </a> -->
                                     <a href="index.php?act=bill" class="primary-btn cart-btn cart-btn-right">TIẾN HÀNH KIỂM TRA</a>
                                 </div>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </section>