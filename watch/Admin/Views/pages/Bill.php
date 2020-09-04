
 <table class="table">
  
  <thead>
    <tr>
      <th scope="col">Tên khách hàng</th>
    
      <th scope="col">Tên sản phẩm</th>

      <th scope="col">Thương hiệu</th>
    
      <th scope="col">Hình ảnh</th>

      <th scope="col">Số lượng</th>

    </tr>
  </thead>
    <tbody>

    	<?php 

          foreach ($data['result'] as $value):
             echo "<tr>";
               echo '<td class="text-bg-dark"><h4>'.$value["inforUser"]["name"].'</h4>
                          <a href = "./Admin/Bill/DetailBill/'.$value["inforUser"]["bill_id"].'"><i class="fas fa-info-circle">Xem thông tin</i></a>
                    </td>';
             echo "</tr>";
              
            foreach ($value['inforPr'] as $value) {
              while ($row = mysqli_fetch_array($value)) 
                {
                  echo "<tr>";
                    echo "<td></td>";
                    echo '<td>'.$row["product_name"].'</td>';
                    echo '<td>'.$row["category_name"].'</td>';
                    echo '<td><img src = "./public/img/product/'.$row["product_url"].'" width = 80px;></td>';
                    echo '<td>'.$row["cart_quantity"].'</td>';
                  echo "</tr>";
                }
            }
              


                
              
          endforeach;
      
     ?>
  </tbody>
</table>
