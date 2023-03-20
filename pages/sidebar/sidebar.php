<div class="sidebar">
				<ul class="list_sidebar">
					<?php 
						$sql_side = "SELECT * FROM tbl_danhmuc";
						$query_side = mysqli_query($mysqli, $sql_side);
					
					foreach ($query_side as $side){
					?>
					<li><a href="index.php?quanly=DMSP&id=<?php echo $side['id_danhmuc'];?>"><?php echo $side['tendanhmuc'];?></a></li>
					<?php } ?>
				</ul>
			</div>