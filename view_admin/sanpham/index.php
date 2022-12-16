<div class="row">
    <div class="col-md-12">
        <div class="khung-noidung">
            <marquee behavior="alternate" Direction="right">
                <h2>Chào Mừng Admin Đến Với Trang Sản Phẩm</h2>
            </marquee>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="thanhchinh">
            <h2 class="text-chinh">Thêm Mới Sản Phẩm</h2>
        </div>
    </div>
</div>
<div class="row">
    <form method="POST" action="index.php?act=sanpham" enctype="multipart/form-data">
        <div class="khung-form khung-formsp">
        <label for="" class="text-form" >Danh Mục</label>
           <select class="form-select" name="iddm" required>
            <option  value="" selected>Chọn Danh Mục</option>
            <?php 
               foreach ($danhsachdanhmuc as $danhmuc) 
               {
                  extract($danhmuc);
                  echo '<option  value='.$IDDM.'>'.$NAME.' </option>';
              }

            ?>
              
           </select>   
           
        <label for=""  class="text-form" >Tên Sản Phẩm</label>
            <input type="text" name="tensp" class="form-control" required />
            <label for="" class="text-form" >Giá</label>
            <input type="text" name="giasp" class="form-control"required />
            <label for="" class="text-form" >Hình</label>
            <br>
            <input required type="file" name="hinh" >
            <br>
            <label for="" class="text-form" >Mô Tả</label>
             <textarea name="motasp" class="form-control" cols="30" required rows="5" ></textarea>
            <input type="submit" name="themsp" value="Thêm Mới" class="btn btn-danger the-nhap" />
            <input type="reset" value="Reset" class="btn btn-warning the-nhap" />
  
           <a href="index.php?act=listsp"  class="btn btn-secondary the-nhap">Danh Sách Sản Phẩm</a>
          <p class="tbtsp"><?php 
             if(isset( $thongbao)&&($thongbao!=""))
            {
                echo $thongbao;
            }
           ?> </p> 
           
        </div>
      
    </form>
    </div>
</div>  
    <script type="text/javascript" src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</div>
<style>
    .row{
        width: 50%;
        margin-left: 13%;
    }
</style>
