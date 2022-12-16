<?php
session_start();

include '../../model/pdo.php';
include '../../model/taikhoan.php';
include '../../model/binhluan.php';
include '../../model/sanpham.php';
$idpro = $_POST['idpro'];
$dsbl = hienthibinhluan($idpro);
?>




<section class="product_description_area">
  <div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">


      <li class="nav-item">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">BÌNH LUẬN</a>
      </li>

    </ul>
    <div class="tab-content" id="myTabContent">

      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="row">
          <div class="col-lg-6">
            <div class="comment_list">
              <div class="review_item">
                <div class="media">

                  <div class="media-body">

                    <table class="table table-striped table-hover bang-binhluan">
                      <tr>
                        <td> Tên </td>
                        <td> Nội Dung </td>
                        <td> Thời Gian Bình Luận </td>
                      </tr>
                      <?php
                      foreach ($dsbl as $bl) {
                        extract($bl);
                        echo '
                   <tr>
                     <td>' . $TENBINHLUAN . '</td>
                     <td>' . $NOIDUNG . '</td>
                      <td>' . $NGAYBINHLUAN . '</td>
                      </tr>';
                      }
                      ?>



                    </table>
                  </div>
                </div>

              </div>


            </div>
          </div>
          <?php if (isset($_SESSION['taikhoan'])) { ?>
            <div class="col-lg-6">
              <div class="review_box">
                <h4>NỘI DUNG BÌNH LUẬN</h4>
                <form class="row contact_form" action=" <?= $_SERVER['PHP_SELF']; ?>" method="post" id="contactForm" novalidate="novalidate">
                  <div class="col-md-12">
                    <div class="form-group">
                      <input class="form-control" type="hidden" name="idpro" value="<?= $idpro ?>" />
                      <input type="text" name="noidung-bl" class="form-control">
                      <div class="col-md-12 text-right">
                        <button type="submit" value="Gửi Bình Luận" name="nut-bl" class="btn submit_btn">

                        </button>
                      </div>
                    </div>
                  </div>


                  <?php
                  if (isset($_POST['nut-bl']) && ($_POST['nut-bl'])) {
                    $noidung = $_POST['noidung-bl'];
                    $iduser = $_SESSION['taikhoan']['IDKH'];
                    $tenbinhluan = $_SESSION['taikhoan']['NAMEKH'];
                    $idpro = $_POST['idpro'];
                    date_default_timezone_set("Asia/Ho_Chi_Minh");
                    $ngaybinhluan = date("h:i:sa d/m/Y");
                    thembinhluan($noidung, $idpro, $iduser, $tenbinhluan, $ngaybinhluan);
                    header("location:" . $_SERVER['HTTP_REFERER']);
                  }

                  ?>
                  <!-- kiểm tra điều kiện -->
                </form>
              </div>
            </div>
          <?php } else {  ?>

          <?php } ?>

        </div>
      </div>
      <style>
        .col-md-12 {

          width: 500px;
        }

        .nav-link {
          color: #000;
          background-color: darkgreen;
        }

        .contact_form {
          margin-left: 50%s;
        }
      </style>