	<?php
		$sql_trangchu = "SELECT * from tbl_danhmuc a, tbl_sanpham b where a.tendanhmuc= b.tendanhmuc order by id_sanpham desc";
		$query_trangchu=mysqli_query($mysqli,$sql_trangchu);

	?>
	<h3>New Products: </h3>
	<ul class="product_list">
	<?php foreach($query_trangchu as $b){ ?>
		<li>
			<a href="index.php?quanly=SP&id=<?php echo $b['id_sanpham'];?>">
				<img class="img_product" src="admincp/modules/quanlisp/uploads/<?php echo $b['hinhanh']?>">
				<p class="title_product"><?php echo $b['tensanpham']?></p>
				<p class="price_product">Giá: <?php echo $b['giasp']?> vnđ</p>
				<p class="cate_product"><?php echo $b['tendanhmuc'];?></p>
			</a>							
		</li>
        <?php } ?>
	</ul>
