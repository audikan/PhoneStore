<div id="main">
    <?php
        include("sidebar/sidebar.php")
	?>

    <div class="main_content">
        <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            }else{
                $tam = "";
            }
            if($tam =='DMSP'){
                include("main/danhmuc.php");
            }elseif($tam == 'GH'){
                include("main/giohang.php");
            }elseif($tam=='SP'){
                include("main/sanpham.php");
            }elseif($tam == 'TT'){
                include("main/tintuc.php");
            }elseif($tam == 'LH'){
                include("main/lienhe.php");
            }else{
                include("main/index.php");
            }
        ?>
    </div>
</div>