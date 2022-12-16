<div class="row">
    <div class="col-md-12">
        <div class="thanhdh">
            <h2>Đơn Hàng</h2>
        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-12">
        <div class="thanhtk-dh">
            <form action="index.php?act=donhang" method="post">
                <input type="text" name="kyw" class="form-control thanhtkdh" placeholder="Tìm Kiếm Theo Mã Đơn Hàng">
                <input type="submit" value="Tìm Kiếm" name="nhap-dh" class="btn btn-secondary nut-tkdh">
            </form>
        </div>

    </div>

</div>

<div class="row">
    <div class="col-md-12">
        <div class="khungbangdh">
            <table class="table table-bordered table-striped table-hover bangdh">
                <tr>
                    <th>STT</th>
                    <th>Mã Đơn Hàng</th>
                    <th>Khách Hàng</th>
                    <th>Số Lượng</th>
                    <th>Tổng Tiền</th>
                    <th>Ngày Đặt Hàng</th>
                    <th></th>

                </tr>

                <?php
                $i = 1;
                foreach ($danhsachbill as $bill) {

                    extract($bill);
                    $suadh = "index.php?act=suadh&IDBILL=" . $IDBILL;
                    $xoadh = "index.php?act=xoadh&IDBILL=" . $IDBILL;
                    $BILL = number_format($bill['TONGBILL'], 0, ',', '.');
                    $count = load_soluongcart($bill['IDBILL']);
                    $kh = '<p>' . $bill["NAMEBILL"] . '</p>
                              <p>' . $bill["BILLDIACHI"] . '</p>
                              <p>' . $bill["BILLSDT"] . '</p>';

                    echo '<tr>
                                       <td>' . $i . '</td>
                                       <td>' . $bill['IDBILL'] . '</td>
                                       <td>' . $kh . '</td>
                                        <td>' . $count . '</td>
                                        <td>' . $BILL . '</td>
                                        <td>' . $bill['NGAYDATHANG'] . '</td>
                                        <td><a href="' . $suadh . '"class="btn btn-danger">Sữa</a> |   <a href="' . $xoadh . '" class="btn btn-warning">Xóa</a></td>
                             </tr>';

                    $i++;
                }
                ?>

            </table>

        </div>
    </div>
</div>
<style>
    .row {
        margin-left: 13%;
    }

    .thanhtkdh {
        width: 20%;
    }

    .nut-tkdh {
        margin-left: 20%;
        position: relative;
        bottom: 35px;
    }
</style>