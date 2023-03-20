<?php
    session_start();
    include('../../admincp/config/config.php');


    //cộng
    if(isset($_SESSION['cart']) && $_GET['cong']){
        $id = $_GET['cong'];
        $sql_cong = "SELECT*from tbl_sanpham where id_sanpham='".$id."' ";
        $query_cong = mysqli_query($mysqli, $sql_cong);
        foreach($query_cong as $a){
            $slsp = $a['soluong'];
        }
            
        
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],
                        'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'],
                        'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
            }else{
               $tang =  $cart_item['soluong'] + 1;
               if($tang <= $slsp){
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],
                    'soluong'=>$tang, 'giasp'=>$cart_item['giasp'],
                    'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
               }else {
                    $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],
                    'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'],
                    'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
               }
               
            }
        }
        $_SESSION['cart']=$product;
            header('location:../../index.php?quanly=GH');
    }
    //trừ
    if(isset($_SESSION['cart']) && $_GET['tru']){
        $id = $_GET['tru'];
        $sql_tru = "SELECT*from tbl_sanpham where id_sanpham='".$id."' ";
        $query_tru = mysqli_query($mysqli, $sql_tru);
        foreach($query_tru as $b){
            $slsp = $b['soluong'];
        }
            
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],
                        'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'],
                        'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
            }else{
               $giam =  $cart_item['soluong'] - 1;
               if($giam > 0){
                    $product[]=array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],
                    'soluong'=>$giam, 'giasp'=>$cart_item['giasp'],
                    'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
               }else{
                    unset($cart_item);
               }
            }
        }
        $_SESSION['cart']=$product;
            header('location:../../index.php?quanly=GH');
    }
    //xóa
    if(isset($_SESSION['cart']) && $_GET['xoa']){
        $id = $_GET['xoa'];
        foreach($_SESSION['cart'] as $cart_item){
            if($cart_item['id']!=$id){
                $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],
                        'soluong'=>$cart_item['soluong'], 'giasp'=>$cart_item['giasp'],
                        'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
            }
        }
        $_SESSION['cart']=$product;
            header('location:../../index.php?quanly=GH');
    }

    if(isset($_POST['themsp'])){ 
        // session_destroy();
        $id = $_GET['idsp'];
        $soluong=1;
        $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham='".$id."' LIMIT 1";
        $query = mysqli_query($mysqli,$sql);        
        $row = mysqli_fetch_array($query);
    
        if($row){
            $new_product = array(array('tensanpham'=>$row['tensanpham'], 'id'=>$id, 'soluong'=>$soluong, 'giasp'=>$row['giasp'],
            'hinhanh'=>$row['hinhanh'], 'masp'=>$row['masp']));

            //kiem tra session
            if (isset($_SESSION['cart'])) {
                $found = false;
                foreach($_SESSION['cart'] as $cart_item){
                    //neu trung du lieu
                    if($cart_item['id']==$id){
                        $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],
                        'soluong'=>$cart_item['soluong']+1, 'giasp'=>$cart_item['giasp'],
                        'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);

                        $found = true;
                    }else{
                        //neu khong trung du lieu
                        $product[] = array('tensanpham'=>$cart_item['tensanpham'], 'id'=>$cart_item['id'],
                        'soluong'=>$soluong, 'giasp'=>$cart_item['giasp'],
                        'hinhanh'=>$cart_item['hinhanh'], 'masp'=>$cart_item['masp']);
                    }
                }
            if($found == false){
                $_SESSION['cart'] = array_merge($product,$new_product);
            }else{
                $_SESSION['cart']=$product;
            }
        }else{
            $_SESSION['cart']=$new_product;
        }
        header('location:../../index.php?quanly=GH');    
        } 
    }
?>