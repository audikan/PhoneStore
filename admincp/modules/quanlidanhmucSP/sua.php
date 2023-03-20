<?php
    $sql_sua = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' limit 1";
    $query_sua = mysql_query($mysqli, $sql_sua);
?>
<p>Sửa danh mục sản phẩm</p>
<table border="1" width="50%">
    <form method="POST" action="modules/quanlidanhmucSP/xuly.php?iddanhmuc=<?php echo $_GET[iddanhmuc];?>">
        <?php
            while($dong = mysql_fetch_array($query_sua)){
        ?>
        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" name="tendanhmuc" value= "<?php echo $dong['tendanhmuc'];?>"></td>
        </tr>

        <tr>
            <td>Thứ tự</td>
            <td><input type="text" name="id_danhmuc" value= "<?php echo $dong['id_danhmuc'];?>" ></td>
        </tr>

        <tr colspan = "2">
            <td><input type="submit" value="Sửa" name="suadanhmuc"></td>
        </tr>
        <?php } ?>
    </form> 
</table>