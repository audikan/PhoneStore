<?php
    include('../../config/config.php');
    $tenloaisp = $_POST['tendanhmuc'];
    $id_danhmuc = $_POST['id_danhmuc'];
    
    if (isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,id_danhmuc) VALUES('".$tenloaisp."','".$id_danhmuc."')";
        mysqli_query($mysqli,$sql_them);
        header('location:../../index.php?action=QLDMSP&query=them');
    }elseif (isset($_GET['query'])=='xoa') {
        $id = $_GET['iddanhmuc'];
        $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc = '".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('location:../../index.php?action=QLDMSP&query=them');
    }elseif (isset($_POST['suadanhmuc'])) {
        $sql_update = "UPDATE tbl_danhmuc SET id_danhmuc = '".$id_danhmuc."', tendanhmuc='".$tenloaisp."' WHERE id_danhmuc = '$_GET[iddanhmuc]'";
        mysql_query($mysqli,$sql_update);
        header('location:../../index.php?action=QLDMSP&query=them');
    }
?>