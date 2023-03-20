<?php
    $sql_lietke = "SELECT * from tbl_danhmuc order by id_danhmuc desc";
    $row_lietke = mysqli_query($mysqli, $sql_lietke);
?>
<p>Liệt kê danh mục sản phẩm<p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
    <tr>
        
        <th>ID_danhmuc</th>
        <th>Tên danh mục</th>
        <th>Quản lý</th>
    </tr>

    <?php 
        $i = 0;
        
        while($row = mysqli_fetch_assoc($row_lietke)){
    ?>
    <tr>
        <td><?php echo $row['id_danhmuc'];?></td>
        <td><?php echo $row['tendanhmuc']; ?></td>
        <td>
            <a href="modules/quanlidanhmucSP/xuly.php?action=QLDMSP&query=xoa&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a> | 
            <a href="?action=QLDMSP&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sua</a>
        </td>
    </tr>
    <?php } ?>
</table>