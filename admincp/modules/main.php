<div class="clear"></div>
<div id="main">
    <?php
        if(isset($_GET['action'])){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $tam = "";
            $query = "";
        }
        if($tam =='QLDMSP' && $query='them'){
            include("modules/quanlidanhmucsp/them.php");
            include("modules/quanlidanhmucsp/lietke.php");
        }elseif($tam == 'QLDMSP' && $query=='sua'){
            include("modules/quanlidanhmucsp/sua.php");
        }elseif($tam == 'QLSP' && $query=='them'){
            include("modules/quanlisp/them.php");
            include("modules/quanlisp/lietke.php");
        }elseif($tam == 'QLSP' && $query=='sua'){
            include("modules/quanlisp/sua.php");
        }
        else{
            include("modules/dashboard.php");
        }
    ?>
</div>