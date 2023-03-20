<?php
    $sql_lietke_sp = "SELECT * from tbl_sanpham a,tbl_danhmuc b where a.tendanhmuc = b.tendanhmuc";
    $row_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);
?>
<p>Liệt kê sản phẩm<p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
    <tr>
        <th>ID sản phẩm</th>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Nội dung</th>
        <th>Danh mục</th>
        <th>Hình ảnh</th>
    </tr>

    <?php 
        $i = 0;
        
        while($row = mysqli_fetch_assoc($row_lietke_sp)){
    ?>
    <tr>
        <td><?php echo $row['id_sanpham'];?></td>
        <td><?php echo $row['masp']; ?></td>
        <td><?php echo $row['tensanpham']; ?></td>   
        <td><?php echo $row['giasp']; ?></td>
        <td><?php echo $row['soluong']; ?></td>
        <td><?php echo $row['noidung']; ?></td>
        <td><?php echo $row['tendanhmuc'];?></td>
        <td><img src="modules/quanlisp/uploads/<?php echo $row['hinhanh'];?>" width="150px"></td>
        <td>
            <a href="modules/quanlisp/xuly.php?idsp=<?php echo $row['id_sanpham'] ?>">Xóa</a> | 
            <a href="?action=QLSP&query=sua&idsp=<?php echo $row['id_sanpham'] ?>">Sua</a>
        </td>
    </tr>
    <?php } ?>
</table>