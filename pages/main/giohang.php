
<?php
    session_start();
?>
<p>gio hang</p>
<table border="1" style="width:100%;">
  <tr>
    <th>Thứ tự</th>
    <th>Mã sản phẩm</th>
    <th>Tên sản phẩm </th>   
    <th>Giá sản phẩm</th>
    <th>Số lượng</th>
    <th>Hình ảnh</th>
    <th>Thành tiền</th>
  </tr>
<?php
    $tongtien=0;
    if (isset($_SESSION['cart'])) {
        $i = 0;
        $tien=0;
        
        foreach($_SESSION['cart'] as $sp){
            $tien = $sp['giasp']* $sp['soluong'];
            $tongtien += $tien;
            $i++;
?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $sp['masp'];?></td>
    <td><?php echo $sp['tensanpham']?></td>
    <td><?php echo number_format($sp['giasp'])?> VNĐ</td>
    <td>
        <a class="cong" href="pages/main/themgiohang.php?cong=<?php echo $sp['id']?>">+</a>
        <?php echo $sp['soluong']?>
        <a class="tru" href="pages/main/themgiohang.php?tru=<?php echo $sp['id']?>">-</a>
    </td>
    <td><img width = "150px;" src="admincp/modules/quanlisp/uploads/<?php echo $sp['hinhanh']?>"></td>
    <td><?php echo number_format($tien)?> VNĐ</td>
    <td><a href="pages/main/themgiohang.php?xoa=<?php echo $sp['id']?>">Xóa</a></td>
  </tr>
<?php }}else{?>
    <tr><td colspan="7"> Giỏ Hàng trống</td></tr>
    <?php }?>
</table>
<p><br></p>
<h4>Tổng tiền: <?php echo number_format($tongtien)?> VNĐ</h3>