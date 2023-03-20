<?php
    include('../../config/config.php');
    
    $tensp = $_POST['tensanpham'];
    $masp = $_POST['masanpham'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];
    //xu ly hinh anh
    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time() .'_' . $hinhanh;

    $dm = $_POST['danhmuc'];
    $noidung = $_POST['noidung'];
    $tinhtrang = $_POST['tinhtrang'];
    
    
    if (isset($_POST['themsanpham'])){
        $sql_them = "INSERT INTO tbl_sanpham(tensanpham, masp, giasp, soluong, hinhanh, noidung, tendanhmuc)
                     VALUES('".$tensp."','".$masp."','".$gia."','".$soluong."','".$hinhanh."','".$noidung."','".$dm."')";
        mysqli_query($mysqli,$sql_them);
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header('location:../../index.php?action=QLSP&query=them');
    }elseif(isset($_POST['suasanpham'])){
        if($_POST['hinhanh']){
            $sql_update = "UPDATE tbl_sanpham SET tensanpham = '".$tensp."', masp='".$masp."', giasp='".$gia."',
            soluong='".$soluong."', hinhanh='".$hinhanh."', noidung='".$noidung."', tendanhmuc='".$dm."' WHERE id_sanpham = '$_GET[idsp]'";
        }else{
            $sql_update = "UPDATE tbl_sanpham SET tensanpham = '".$tensp."', masp='".$masp."', giasp='".$gia."',
            soluong='".$soluong."', noidung='".$noidung."', tendanhmuc='".$dm."' WHERE id_sanpham = '$_GET[idsp]'";
        }
        mysqli_query($mysqli,$sql_update);
        header('location:../../index.php?action=QLSP&query=them');       
    }else{
        $id = $_GET['idsp'];
        //xoa anh trong thu muc uploads
        $sql = "SELECT* FROM tbl_sanpham where id_sanpham = '$id' limit 1";
        $query= mysqli_query($mysqli,$sql);
        while ( $row = mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
        // ---------------//
        $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham = '".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('location:../../index.php?action=QLSP&query=them');
    }
?>