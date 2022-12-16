<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"> <a href="trangchu.php" class="a-bread">Home</a> </li>
			<li class="breadcrumb-item">
				<a href="Hamburger.php" class="a-bread">
					<?= $namedm ?>
				</a>
			</li>
		</ol>
	</nav>
	<h1 class="h1-burger "><?= $namedm ?></h1>
	<br>
	<div class="row">
		<?php 
               foreach ($danhsachsanpham as $sanpham) {
                extract($sanpham);
                $linksp="index.php?act=chitietsanpham&IDSP=".$IDSP;
                $hinh=$img_path.$IMG;
                 echo '
                 <div class="col-md-3 col-sm-6 col-12">
                 <div class="khoi-cot4 khoicot4-sp">
                 <a href="'.$linksp.'"><img src="'.$hinh.'" class="anh-cot4"></a>
                   <div class="description">
                   <a class="linksp-h3" href="'.$linksp.'"> <h3>'.$NAMESP.'</h3></a>
                   <h4>'.$PRICE.' <sup>đ</sup>
                   </h4>
                  
                     <a href="#">Read More</a>
                   </div>
                 </div>
               </div>';
               }    
            ?>
     </div>
</div>