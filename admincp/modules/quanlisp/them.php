<p>Thêm sản phẩm</p>
                    <?php
                        $sql_dm = "SELECT tendanhmuc FROM tbl_danhmuc";
                        $row_dm = mysqli_query($mysqli, $sql_dm);
                        
                    ?>
<table border="1" width="50%"  >
    <form method="POST" action="modules/quanlisp/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tên sản phẩm</td>
            <td><input type="text" name="tensanpham"></td>
        </tr>

        <tr>
            <td>Mã sản phẩm</td>
            <td><input type="text" name="masanpham"></td>
        </tr>

        <tr>
            <td>Giá sản phẩm</td>
            <td><input type="text" name="gia"></td>
        </tr>

        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong"></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><textarea width= rows="10" name="noidung"></textarea></td>
        </tr>
        <tr>
            <td>Hình ảnh</td>
            <td><input type="file" name="hinhanh"></td>
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
            <td><input type="submit" value="Thêm" name="themsanpham"></td>
        </tr>
    </form> 
</table> 