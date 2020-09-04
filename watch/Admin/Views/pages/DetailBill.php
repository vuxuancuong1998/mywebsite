
  <div><h3>Thông tin đơn hàng</h3></div>

<table class="table bg-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Họ tên</th>
      <th scope="col">Email</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">SDT</th>
      <th scope="col">Ngày mua hàng</th>


    </tr>
  </thead>
    <tbody>
        <?php
        echo "<tr>";
          echo '<th>'.$data["inforUser"]["bill_id"].'</th>';

          echo '<th>'.$data["inforUser"]["name"].'</th>';
          echo '<th>'.$data["inforUser"]["email"].'</th>';
          echo '<th>'.$data["inforUser"]["address"].'</th>';
          echo '<th>'.$data["inforUser"]["phone_number"].'</th>';
          echo '<th>'.$data["inforUser"]["create_day"].'</th>';
        echo "</tr>";
        ?>
    </tbody>
</table>
<hr>
<h3>Sản phẩm</h3>
<table class="table" style="margin-top: 20px;">
  <thead>
    <tr>
      <th scope="col">Mã sản phẩm</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Hãng</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Giá</th>
      <th scope="col">Tổng tiền</th>


    </tr>
  </thead>
    <tbody>
        <?php
        $total = 0;
        $qty = 0;
        foreach ($data["inforPr"] as $value) {
            while ($row = mysqli_fetch_array($value)) {
                $total += $row["total"];
                $qty += $row['cart_quantity'];
            
           echo "<tr>"; 
           echo '<th>'.$row["product_id"].'</th>';
           echo '<th>'.$row["product_name"].'</th>';
           echo '<th>'.$row["category_name"].'</th>';
           echo '<td><img src = "./public/img/product/'.$row["product_url"].'" width = 80px;></td>';
           echo '<th>'.$row["cart_quantity"].'</th>';
           echo '<th>'.$row["cart_price"].'</th>';
           echo '<th>'.$row["total"].'</th>';


           echo "</tr>";

            }
        }
        ?>
    </tbody>
</table>
<h3 class="btn btn-secondary">Tổng tiền hoá đơn :<?php echo $total?></h3>&nbsp;&nbsp;&nbsp;
<?php
// if($data["inforUser"]["bill_status"] == 0){
//   echo "<h3 class = 'btn btn-primary'> <a href='./Admin/Bill/Statistic/".$data['inforUser']['bill_id']."' style='color:white;text-decoration:none'>Hoàn thành đơn</a></h3>";
 
// } else {
//   echo  " <h3 class = 'btn btn-danger'> <a href='./Admin/Bill/DeleteBill/".$data['inforUser']['bill_id']."' style='color:white;text-decoration:none'> Xoá hoá đơn</a></h3>";

// }
?>
</form>