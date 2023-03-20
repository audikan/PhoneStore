<h2>Chi tiết sản phẩm</h2>
<?php 
    $sql_sp = "SELECT* FROM tbl_sanpham a, tbl_danhmuc b where a.tendanhmuc=b.tendanhmuc and a.id_sanpham='$_GET[id]'";
    $query_sp=mysqli_query($mysqli, $sql_sp);
    foreach ($query_sp as $m) {
?>
<div class="wrapper_chitiet">
    <div class="img_sp">
        <img src="admincp/modules/quanlisp/uploads/<?php echo $m['hinhanh']?>">
    </div>

    
        <div class="chitiet_sp">
            <h3>Tên sản phẩm: <?php echo $m['tensanpham']?></h3>
            <p>Giá: <?php echo $m['giasp']?> VNĐ</p>
            <p>Mã Sản Phẩm: <?php echo $m['masp']?></p>
            <p>Số lượng sản phẩm: <?php echo $m['soluong']?></p>
            <p>Danh mục : <?php echo $m['tendanhmuc']?></p>
            <form action="pages/main/themgiohang.php?idsp=<?php echo $m['id_sanpham']?>" method="post">
            <p><input class="themgh" type="submit" name="themsp" value="Thêm giỏ hàng"></p>
            </form>
        </div>
</div>
    
<?php } ?>

