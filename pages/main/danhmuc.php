<?php
	$sql_pro = "SELECT 	* FROM tbl_danhmuc a,tbl_sanpham b where a.tendanhmuc = b.tendanhmuc 
    and a.id_danhmuc='$_GET[id]' order by b.id_sanpham desc";
	$query_pro = mysqli_query($mysqli,$sql_pro);
    
    $row_title = mysqli_fetch_array($query_pro);	
    
?>
<h3>Danh mục sản phẩm: <?php echo $row_title['tendanhmuc'];?></h3>
    <ul class="product_list"> 
        <?php foreach($query_pro as $a){ ?>
		<li>
			<a href="index.php?quanly=SP&id=<?php echo $a['id_sanpham'];?>">
				<img class="img_product" src="admincp/modules/quanlisp/uploads/<?php echo $a['hinhanh']?>">
				<p class="title_product"><?php echo $a['tensanpham']?></p>
				<p class="price_product">Giá: <?php echo $a['giasp']?> vnđ</p>
			</a>							
		</li>
        <?php } ?>
	</ul>
