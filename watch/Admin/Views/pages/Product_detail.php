<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Tên hãng</th>
      <th scope="col">Thông tin</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Giá</th>
      <th scope="col">Giới tính</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Loại</th>
      <th scope="col">Ngày cập nhật</th>




    </tr>
  </thead>
    <tbody>
        <?php
        echo "<tr>";
        echo '<th>'.$data["product_id"]["product_id"].'</th>';
        echo '<td>'.$data["product_id"]["product_name"].'</td>';

        echo '<td>';
            if($data["product_id"]["product_category_id"] ==1) echo "Casio";
            if($data["product_id"]["product_category_id"] ==2) echo "Bulova";
            if($data["product_id"]["product_category_id"] ==3) echo "Orien";
            if($data["product_id"]["product_category_id"] ==4) echo "Ogival";
            if($data["product_id"]["product_category_id"] ==5) echo "Seiko";

        echo'</td>';

        echo '<td>'.$data["product_id"]["product_descript"].'</td>';

        echo '<td><img src = "./public/img/product/'.$data["product_id"]["product_url"].'" width = 80px;></td>';

        echo '<td>'.$data["product_id"]["product_price"].'</td>';

         echo '<td>';if($data["product_id"]["product_gender"] == 1){
          echo "Nam";
         }else echo "Nữ";
         echo '</td>';

        echo '<td>'.$data["product_id"]["product_quantity"].'</td>';

         echo '<td>';if($data["product_id"]["product_status"] == 0){
          echo "Bình thường";
         }else if($data["product_id"]["product_status"] == 1){echo "New";}
         else echo "On Sale";
         echo '</td>';

          echo '<td>';if($data["product_id"]["type"] == 1){
          echo "Đồng hồ";
         }else echo "Phụ kiện";
         echo '</td>';

        echo '<td>'.$data["product_id"]["create_day"].'</td>';

        
        echo "</tr>";
        ?>
    </tbody>
</table>