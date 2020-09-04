<!-- Page info -->
<div class="page-top-info">
	<div class="container">
		<h4>Thanh Toán Thành Công</h4>
		<div class="site-pagination">
			<a href="">Giỏ Hàng</a> /
			<a href="">Thanh Toán</a>
		</div>
	</div>
</div>
<!-- Page info end -->


<!-- cart section end -->
<section class="cart-section spad">
	<div class="container">
		
		<div class="row">
			<div class="col-lg-12">
				<div class="cart-table">
					<h3>Hóa đơn</h3>
						<div class="cart-table-warp">
							<table id="cart" >
								<thead id="cart-items">
									<tr id="cart-row">
										<th class="product-th text-center" style="color: blue;">Tên Sản phẩm</th>
										<th class="product-th" style="color: blue;">Hình ảnh</th>
										<th class="quy-th" style="color: blue;">Số lượng</th>
										<th class="product-th text-center" style="color: blue;">Thương hiệu</th>
										<th class="total-th" style="color: blue;">Giá</th>
										<th class="total-th" style="color: red;">Tổng</th>
									</tr>
								</thead>
								<tbody>
									
									<?php
									$total = 0;
									$Sum_quantity = 0;

										foreach($data["product"] as $value):
											
											while ($row = mysqli_fetch_array($value)){
												$total+=$row["total"];
												$Sum_quantity += $row['cart_quantity'];
									echo "<form action='./Main/Bill/ConfirmBill/' method='POST'>";
									
										echo '<tr>';
									 	echo '<input type="hidden" name="result" value="'.$data['result'].'" />';
									 	echo '<input type="hidden" name="Sum_quantity" value="'.$Sum_quantity .'" />';
									 	echo '<input type="hidden" name="Sum_total" value="'.$total.'" />';
									
									// echo '<input type="hidden" name="product_url" value="'.$row['product_url'].'" /> 

									// <input type="hidden" name = "cart_quantity" value="'.$row['cart_quantity'].'" />

									// <input type="hidden" name = "category_name" value="'.$row['cart_quantity'].'" />

									// <input type="hidden" name = "cart_price" value="'.$row['cart_price'].'" />

									// <input type="hidden" name = "total" value="'.$row['total'].'" />

									// <input type="hidden" name = "allTotal" value="'.$total.'" />
									// '; 


									echo 	'<td class="size-col" >
												<h4 >'.$row['product_name'].'</h4>
											</td>

											<td class="product-col">
											<img src="./public/img/product/'.$row['product_url'].'" alt="" >
											</td>';

									echo 	'<td class="quy-col text-center">
												<h2 class="btn btn-danger" style="width:40px; height:30px;">
												'.$row['cart_quantity'].'
												</h2>								
											</td>

											<td  class="quy-col text-center">'.$row['category_name'].'</td>

											<td class="total-col">
												<h4 >$'.$row['cart_price'].'</h4>
											</td>
										
											<td class="total-col" >
												$'.$row["total"].'
						                    </td>';}
								echo '</tr>';
										endforeach
		
									?>
										
										
								
									
								
								</tbody>
							</table>
						</div>
					<div class="total-cost" >
						<h6>Tổng tiền <span class="cart-price"name="allTotal">
							$<?php echo $total; ?>
							</span></h6>
							
					</div>
				</div>
			</div>
			
			<div class="col-lg-12" style="padding-bottom: 10px;">
				<h4 style="padding-bottom: 10px;">Thông tin người nhận</h4>
				<table class="table">
				  <thead>
				    <tr>
				      <th scope="col">Họ tên</th>
				      <th scope="col">Email</th>
				      <th scope="col">Địa chỉ</th>
				      <th scope="col">SDT</th>
				      <th scope="col"></th>
				    </tr>
				  </thead>
				  <tbody>
				    <?php 
				    	$user_id = $data["user"]["user_id"];
				    	$name = $data["user"]["name"];
						$email = $data["user"]["email"];
						$address = $data["user"]["address"];
						$phone_number = $data["user"]["phone_number"];
						echo '<tr>';	
							echo '<input type="hidden" name = "name" value="'.$name.'" />'; 
							echo '<input type="hidden" name = "email" value="'.$email.'" />'; 
							echo '<input type="hidden" name = "address" value="'.$address.'" />'; 
							echo '<input type="hidden" name = "phone_number" value="'.$phone_number.'" />';

							echo '<td>'.$name .'</td>';	
							echo '<td>'.$email.'</td>';  
							echo '<td>'.$address.'</td>';
							echo '<td>'.$phone_number .'</td>';
							echo '<td>
				                <a href = "./Main/Bill/changeInforAccount/'.$user_id.'" data-toggle="modal" data-target="#myModal'.$user_id.'"><i class="fas fa-edit">Thay đổi thông tin</i></a>
									</td>'	;		
							echo '</tr>';
											
						?>
			      
			   
			  </tbody>
			</table>
			</div>
			
		</div>
		<hr>
		<div class="col-lg-4 card-right">
				<input type="submit" name="ConfirmBill" class="site-btn sb-dark" value="Xác nhận đơn hàng" />
		</div>
	</form>
		


			
	</div>

</section>
<!-- The Modal -->
<?php 
$user_id = $data["user"]["user_id"];

echo '<div class="modal" id="myModal'.$user_id.'">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Thay đổi thông tin</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form class ="text-center border border-light p-5" action = "./Main/Bill/changeInforAccount/'.$user_id.'" method="POST" >
     
      <div class="form-group">
         
          <input type="text" class="form-control" id="inputPassword" placeholder="Họ và tên" name="name" value = "'.$name .'">
      </div>
     
      <div class="form-group">
         
          <input type="email" class="form-control" id="inputPassword" placeholder="Email" name="email" value = "'.$email.'">
      </div>
      <div class="form-group">
          
          <input type="text" class="form-control" id="inputPassword" placeholder="Địa chỉ" name="address" value = "'.$address.'">
      </div>
      <div class="form-group">
         
          <input type="text" class="form-control" id="inputPassword" placeholder="SDT" name="phone_number" value = "'.$phone_number.'">
  
      </div>
     
  
      
      <button type="submit" class="btn btn-primary" name="update">Sửa Thông tin</button>
  </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>';
?>