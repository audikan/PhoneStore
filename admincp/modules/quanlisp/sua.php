<?php
    $sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsp]' limit 1";
    $query_sua_sp = mysqli_query($mysqli, $sql_sua_sp);
?>
                    <?php
                        $sql_dm = "SELECT tendanhmuc FROM tbl_danhmuc";
                        $row_dm = mysqli_query($mysqli, $sql_dm);
                        
                    ?>


<p>Sửa sản phẩm</p>
<table border="1" width="50%">
    <?php 
        while ($row = mysqli_fetch_array($query_sua_sp)){ 
    ?>
    <form method="POST" action="modules/quanlisp/xuly.php?idsp=<?php echo $row['id_sanpham']?>" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input value="<?php echo $row['tensanpham']?>" type="text" name="tensanpham"></td>
        </tr>

        <tr>
            <td>Mã sản phẩm</td>
            <td><input value="<?php echo $row['masp']?>" type="text" name="masanpham"></td>
        </tr>

        <tr>
            <td>Giá sản phẩm</td>
            <td><input value="<?php echo $row['giasp']?>" type="text" name="gia"></td>
        </tr>

        <tr>
            <td>Số lượng</td>
            <td><input value="<?php echo $row['soluong']?>" type="text" name="soluong"></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea  width= rows="10" name="noidung"><?php echo $row['noidung']?></textarea></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td>
                <input type="file" name="hinhanh">
                <img src="modules/quanlisp/uploads/<?php echo $row['hinhanh'];?>" width="150px">
            </td>
        </tr>

        
        <tr>
            <td>Danh mục</td>
            <td>

                <select name="danhmuc">
                    <?php
                        while($row = mysqli_fetch_assoc($row_dm)){
                    ?>                    
                    <option value="<?php echo $row['tendanhmuc']; ?>"><?php echo $row['tendanhmuc']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr colspan = "2">
            <td><input type="submit" value="Sửa" name="suasanpham"></td>
        </tr>
    </form> 
    <?php } ?>
</table> 