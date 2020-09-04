

	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>CASIO</h4>
		
			<p>Đồng hồ thuỵ sỹ cao cấp</p>
		</div>
	</div>
	<!-- Page info end -->


	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="back-link">
				<a href="./Main/Product"> &lt;&lt; Back to Category</a>
			</div>
				
	
			<div class="row">
				<?php 
				$product_id = $data["product_detail"]["product_id"];
				$product_name = $data["product_detail"]["product_name"];
				$product_price = $data["product_detail"]["product_price"];
				$product_url = $data["product_detail"]["product_url"];
				$product_descript = $data["product_detail"]["product_descript"];
				$quantity = $data["product_detail"]["product_quantity"];

				if ($data["product_detail"]["type"] == 2) {
				echo '<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class="product-big-img" src="./public/img/product/'.$product_url.'" alt="">
					</div>
							
				
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title">'.$product_name.'</h2>
					<h3 class="p-price">$ '.$product_price.'</h3>
					<h4 class="p-stock">Trả góp: <span>0%</span></h4>
					
					
					<form action="./Main/Cart/AddToCart/" method="POST">
						<div class="quantity">
							<p>Số lượng</p>
	                        <div class="qty">
	                        <input type="number" id="quantity" value="1" name="quantity" min="1" max="'.$quantity.'">
	                        </div>
	                    </div>
			
	                    <input name="product_id" type="hidden" value = "'.$product_id.'" />
	                    <input name="product_name" type="hidden" value = "'.$product_name.'" />
	                    <input name="product_url" type="hidden" value = "'.$product_url.'"/>
	                    <input name="product_price" type="hidden" value = "'.$product_price.'"/>';
	                      if ($quantity == 0) {
	                    	echo '<h2 class="site-btn" onclick = "addToCart()"> Hết hàng</h2>';
	                    }else{
						echo '<input class="site-btn" name="submitCart" type="submit" value="Mua Hàng" onclick = "addToCart()">';
					}
					echo '</form>';
					echo '
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Thông tin</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p>'.$product_descript.'</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Chăm sóc khách hàng </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<img src="./public/img/cards.png" alt="">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>';
					
				}else echo ' <div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class="product-big-img" src="./public/img/product/'.$product_url.'" alt="">
					</div>
							
				
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title">'.$product_name.'</h2>
					<h3 class="p-price">$ '.$product_price.'</h3>
					<h4 class="p-stock">Trả góp: <span>0%</span></h4>
					
					
				
					<form action="./Main/Cart/AddToCart" method="POST">
						<div class="quantity">
							<p>Số lượng</p>
							<div class="qty">
	                      	  <input type="number" id="quantity" value = "1" name="quantity" min="1"  max = "'.$quantity.'">
	                        </div>
	                    </div>
			
	                    <input name="product_id" type="hidden" value = "'.$product_id.'" />
	                    <input name="product_name" type="hidden" value = "'.$product_name.'" />
	                    <input name="product_url" type="hidden" value = "'.$product_url.'"/>
	                    <input name="product_price" type="hidden" value = "'.$product_price.'"/>';
	                    if ($quantity == 0) {
	                    	echo '<h2 class="site-btn" onclick = "addToCart()"> Hết hàng</h2>';
	                    }else{
						echo '<input class="site-btn" name="submitCart" type="submit" value="Mua Hàng" onclick = "addToCart()">';
					}
					echo '</form>

					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Thông tin</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
									<p>'.$product_descript.'</p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Chăm sóc khách hàng </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<img src="./public/img/cards.png" alt="">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>';
				?>

			</div>
		</div>
	</section>
	<!-- product section end -->


	<!-- RELATED PRODUCTS section -->
	<section class="related-product-section">
		<div class="container">
			<div class="section-title">
				<h2>SẢN PHẨM LIÊN QUAN</h2>
			</div>
			<div class="product-slider owl-carousel">
				<?php foreach ($data["product"] as $key => $row) {
				echo	
				'<div class="product-item">
				<a href="./Main/Product/product_detail/'.$row["product_id"].'">
					<div class="pi-pic">
						<img src="./public/img/product/'.$row["product_url"].'" alt="">
						</a>
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$'.$row["product_price"].'</h6>
						<p>'.$row["product_name"].' </p>
					</div>
				</div>';
					}
				?>
				
			</div>
		</div>
	</section>
	<!-- RELATED PRODUCTS section end -->
