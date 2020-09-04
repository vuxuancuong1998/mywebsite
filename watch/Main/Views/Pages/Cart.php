


	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Giỏ hàng của bạn</h4>
			<div class="site-pagination">
				<a href="">Trang chủ</a> /
				<a href="">Giỏ hàng</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
			<!-- <form action="./Main/Cart/AddCart" method="POST"> -->
			<div class="row">
				<div class="col-lg-12">
					<div class="cart-table">
						<h3>Giỏ hàng của bạn</h3>
							<div class="cart-table-warp">
								<table id="cart" >
									<thead id="cart-items">
										<tr id="cart-row">
											<th></th>
											<th class="product-th text-center" style="color: blue;">Tên Sản phẩm</th>
											<th class="product-th" style="color: blue;">Hình ảnh</th>
											<th class="quy-th" style="color: blue;">Số lượng</th>
											<th class="size-th" style="color: blue;">Thương hiệu</th>
											<th class="total-th" style="color: blue;">Giá</th>
											<th class="total-th" style="color: red;">Tổng</th>
										</tr>
									</thead>
									<tbody>
										<?php
										while ($row = mysqli_fetch_array($data["listCart"])){
									echo '
		
										<tr>
											<td>  <input class = "checkbox-cart" value = "'.$row["cart_id"].'" type = "checkbox" name="checkbox"/> </td>

											<td class="size-col "><h4>'.$row['product_name'].'</h4></td>
											<td class="product-col">
												<img src="./public/img/product/'.$row['product_url'].'" alt="">
											</td>';
											
										echo	'<td class="quy-col">
												<div class="quantity">
							                        <div class="qty">
														<input type="button" value = "'.$row['cart_quantity'].'">
													</div>
			                					</div>
											</td>
											<td class="size-col"><h4>'.$row['category_name'].'</h4></td>
											<td class="total-col"><h4>$'.$row['cart_price'].'</h4></td>
											<td class="total-col"><h4>$'.$row['total'].'</h4></td>
											</form>
											<td class="total-col">
											<a href="./Main/Cart/Delete/'.$row['cart_id'].'" id="btn-remove" class="btn btn-danger" name="Delete">Xoá</a>
											</td>
										</tr>';
										
									}?>
									</tbody>
								</table>
							</div>
						<div class="total-cost">
							<h6>Tổng tiền <span class="cart-price">
								<?php
								echo "$" . $data["sumtotal"];
									
								?>
								</span></h6>
						</div>
					</div>
				</div>
				
			</div>
			<hr>
			<div class="col-lg-4 card-right">
					
					<input class="site-btn" name="ByProduct" type="submit" value="Thanh Toán" onclick = "Check()" />

					<a href="./Main" class="site-btn sb-dark">Tiếp tục mua sắm</a>
				</div>
				<!-- <div class="checkout-form">
						
						<div class="row">
							<div class="col-md-7">
								<p>Thông tin người nhận</p>
							</div>
						
						</div>
						<div class="row address-inputs">
							
								<div class="col-md-12">
									<input type="text" placeholder="Nhập địa chỉ">
									<input type="text" placeholder="Xác nhận địa chỉ">
								</div>
								<div class="col-md-12">
									<input type="text" placeholder="Nhập họ và tên">
								</div>
								<div class="col-md-12">
									<input type="text" placeholder="SDT">
								</div>
							
						</div>
				</div> -->
			<!-- </form> -->
		</div>

	</section>
	<!-- cart section end -->

	<!-- Related product section -->
	<!-- <section class="related-product-section">
		<div class="container">
			<div class="row"> -->
					
		<!-- 	</div>
		</div>
	</section> -->
	<!-- Related product section end -->
