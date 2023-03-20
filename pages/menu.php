<?php
	$sql_danhmuc = "SELECT 	* FROM tbl_danhmuc order by id_danhmuc desc";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	
?>

<div class="menu">
			<ul class="list_menu">
				<li><a href="index.php">Trang chủ</a></li>
				<?php
					while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
						?>
					<li><a href="index.php?quanly=DMSP&id=<?php echo $row_danhmuc['id_danhmuc'];?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>
					<?php } ?>
				<li><a href="index.php?quanly=GH">Giỏ hàng</a></li>
				<li><a href="index.php?quanly=TT">Tin tức</a></li>
				<li><a href="index.php?quanly=LH">Liên hệ</a></li>
			</ul>
		</div>