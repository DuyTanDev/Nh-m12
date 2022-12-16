<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="khungdk">
                <form action="index.php?act=dangky" method="POST">
                    <h2 class="text-center">
                        Đăng Ký
                    </h2>
                    <input type="text" name="hovaten" class="form-control thanh-dk" placeholder="Nhập Họ Và Tên" required />
                    <input type="text" name="diachi" class="form-control thanh-dk" placeholder="Nhập Địa Chỉ" required />
                    <input type="text" name="sdt" class="form-control thanh-dk" placeholder="Nhập Số Điện Thoại" required />
                    <input type="text" name="tk" class="form-control thanh-dk" placeholder="Nhập Tài Khoản" required />
                    <div class="thanh-mk">
                        <input type="password" name="mk" id="pass" class="form-control thanh-dk" placeholder="Nhập Mật Khẩu" required />
                        <i class="fa fa-eye" onclick="mat()" aria-hidden="true"></i>
                    </div>
                    <input type="submit" value="Đăng Ký" name="dangky" class="btn btn-danger nut-dangky" />
                    <input type="reset" value="Reset" class="btn btn-secondary" />
                </form>
                <!-- <p>
                    <center>
                <?php
                if (isset($tb) && ($tb != "")) {
                    echo $tb;
                }
                ?>
                   </center>
                </p>
                <p>
                    <center>
                <?php
                if (isset($tb1) && ($tb1 != "")) {
                    echo $tb1;
                }
                ?>
                   </center>
                </p>
                <p>
                    <center>
                <?php
                if (isset($tb2) && ($tb2 != "")) {
                    echo $tb2;
                }
                ?>
                   </center>
                </p>
                -->
                <p>
                    <center>
                        <?php
                        if (isset($thongbao) && ($thongbao != "")) {
                            echo $thongbao;
                        }

                        ?>
                    </center>
                </p>

            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<style>
    .khungdk {
        width: 100%;
    }

    .form-control {
        width: 55%;
        margin-left: 25%;
    }

    .btn {
        margin-left: 25%;
    }

    .fa-eye {
        position: relative;
        bottom: 30px;
        margin-left: 75%;
    }
</style>
<script type="text/javascript">
    var x = true;

    function mat() {
        if (x) {
            document.getElementById('pass').type = "text";
            x = false;
        } else {
            document.getElementById('pass').type = "password";
            x = true;
        }

    }
</script>