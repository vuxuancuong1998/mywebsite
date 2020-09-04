<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Sản phẩm</h4>
			<div class="site-pagination">
				<a href="">Trang chủ</a> /
				<a href="">Sản phẩm</a> /
			</div>
		</div>
	</div>
<section class="product-filter-section">
		<div class="container">
			 
			
			
			<ul class="product-filter-menu" style="margin: 50px;">
			<?php while ($row = mysqli_fetch_array($data["category"])){	
				echo '<li><a href="./Main/Product/Product_Categrories/'.$row["category_id"].'">'.$row["category_name"].'</a></li>';
			}
				?>
			</ul>
			<div class="row">
			<?php
						while ($row = mysqli_fetch_array($data["ListProduct"]))
						{ 
						echo 
				'<div class="col-lg-3 col-sm-6">
						<div class="product-item">
									<a href="./Main/Product/product_detail/'.$row["product_id"].'">
									<div class="pi-pic">';
									if($row["product_status"] == 1){
										echo '<div class="tag-sale">ON SALE</div>';
											
									}else echo "";
									if($row["product_status"] == 2)
										{
											echo '<div class="tag-new">New</div>';
										
										}	else echo "";
										
									echo '<img src="./public/img/product/'.$row["product_url"].'" alt="'.$row["product_descript"].'">
										</a>
										<div class="pi-links">
											<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
											<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
										</div>
									</div>
								

									<div class="pi-text">
										<h6>$ '.$row["product_price"].' </h6>
										<p>'.$row["product_name"].' </p>
									</div>
							</div>
						
				
				</div>';
			}
			?>
			</div>
			</div>
			<!--Phân trang (pagination) -->
			<h1 id ="pagination" style="color: red;">--------</h1>

			<div class="text-center pt-5">
					<div class="site-btn sb-line sb-dark"  id="btn-xemthem" onclick="phantrang()">Xem Thêm</div>
				

			</div>
		
	
	</section>

