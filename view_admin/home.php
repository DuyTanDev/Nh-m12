<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Trang chủ</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales Cards  -->
        <!-- ============================================================== -->
        <div class="row row1">
            <!-- Column -->

            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "heyyou");
                    $query = "SELECT count(*) as list from danhmuc";

                    $result = mysqli_query($con, $query);
                    $data = mysqli_fetch_assoc($result);

                    ?>
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white"><?php echo $data['list']; ?><i class="mdi mdi-arrow-all"></i></h1>
                        <h6 class="text-white">Danh mục</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
 <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "heyyou");
                    $query = "SELECT count(*) as list from khachhang";

                    $result = mysqli_query($con, $query);
                    $data = mysqli_fetch_assoc($result);

                    ?>
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white">Khách hàng<i class="mdi mdi-pencil"></i></h1>
                        <h6 class="text-white"><?php echo $data['list']; ?></h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "heyyou");
                    $query = "SELECT count(*) as list from binhluan";

                    $result = mysqli_query($con, $query);
                    $data = mysqli_fetch_assoc($result);

                    ?>
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white">Bình luận<i class="mdi mdi-relative-scale"></i></h1>
                        <h6 class="text-white"><?php echo $data['list']; ?></h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
           
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "heyyou");
                    $query = "SELECT count(*) as list from binhluan";

                    $result = mysqli_query($con, $query);
                    $data = mysqli_fetch_assoc($result);

                    ?>
                    <div class="box bg-success text-center">
                        <h1 class="font-light text-white">Sản phẩm<i class="mdi mdi-calendar-check"></i></h1>
                        <h6 class="text-white"><?php echo $data['list']; ?></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "heyyou");
                    $query = "SELECT count(*) as list from bill";

                    $result = mysqli_query($con, $query);
                    $data = mysqli_fetch_assoc($result);

                    ?>
                    <div class="box bg-info text-center">
                        <h1 class="font-light text-white">Hóa đơn<i class="mdi mdi-relative-scale"></i></h1>
                        <h6 class="text-white"><?php echo $data['list']; ?></h6>
                    </div>
                </div>
            </div>  
            <!-- Column -->
            <div class="col-md-6 col-lg-2 col-xlg-3">
                <div class="card card-hover">
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "heyyou");
                    $query = "SELECT SUM(TONGBILL) as tong FROM bill;";

                    $result = mysqli_query($con, $query);
                    $data = mysqli_fetch_assoc($result);

                    ?>
                    <div class="box bg-success text-center">

                        <h1 class="font-light text-white">Doanh Thu<i class="mdi mdi-calendar-check"></i></h1>
                        <h6 class="text-white"><?php echo $data['tong']; ?></h6>
                    </div>
                </div>
            </div>



        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <style>


        </style>