<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="khung-dhct">
                <div class="dhcb">
                    <h4>Đơn Hàng Của Bạn</h4>
                </div>
                <table class="table table-striped table-hover bang-dhct">
                    <tr>
                        <th>STT</th>
                        <th>Mã Đơn Hàng</th>
                        <th>Ngày Đặt</th>
                        <th>Số Lượng </th>
                        <th>Tổng Tiền</th>
                     
                    </tr>
                    <?php
                    if (is_array($listbill)) {
                        $i = 1;
                        foreach ($listbill as $bill) {


                            extract($bill);
                            $count = load_soluongcart($bill['IDBILL']);
                            $xoadh = "index.php?act=xoadh&IDBILL=" . $IDBILL;
                            echo '   
                       <tr>
                       <td>' . $i . '</td>
                       <td>' . $bill['IDBILL'] . '</td>
                       <td>' . $bill['NGAYDATHANG'] . '</td>
                       <td>' . $count . '</td>
                       <td>' . $bill['TONGBILL'] . '</td>
                            
                   </tr>';
                            $i++;
                        }
                    }
                    ?>


                </table>
            </div>
        </div>
    </div>
</div>