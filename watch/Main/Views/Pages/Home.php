


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">

				
			
			<!-- <div class="hs-item set-bg">
				<img src="./public/img/sliders/1.jpg">
				
			</div>
			<div class="hs-item set-bg">
				<img src="./public/img/sliders/2.jpg">
				
			</div>
			<div class="hs-item set-bg">
				<img src="./public/img/sliders/3.jpg">
				
			</div> -->
			<div class="hs-item set-bg" data-setbg="./public/img/sliders/1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New watch</span>
							<h2>Casio</h2>
							<p>Đồng hồ casio thuỵ </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>

			<div class="hs-item set-bg" data-setbg="./public/img/sliders/2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New watch</span>
							<h2>Casio</h2>
							<p>Đồng hồ casio thuỵ </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>

			<div class="hs-item set-bg" data-setbg="./public/img/sliders/3.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New watch</span>
							<h2>Casio</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum sus-pendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
							<a href="#" class="site-btn sb-line">DISCOVER</a>
							<a href="#" class="site-btn sb-white">ADD TO CART</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>$29</h2>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div> 
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="./public/img/icons/1.png" alt="#">
						</div>
						<h2>Thanh Toán An Toàn Nhanh Chóng </h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="./public/img/icons/2.png" alt="#">
						</div>
						<h2>Sản Phẩm Cao Cấp</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="./public/img/icons/3.png" alt="#">
						</div>
						<h2>Giao Hàng Miễn Phí & Nhanh Chóng</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>SẢN PHẨM MỚI NHẤT</h2>
			</div>
			<div class="product-slider owl-carousel">
				<?php
				while ($row = mysqli_fetch_array($data["product"])){
				 echo '<div class="product-item">
					<a href="./Main/Product/Product_detail/'.$row["product_id"].'">
					<div class="pi-pic">';
					if($row["product_status"] == 1){
						echo '<div class="tag-sale">ON SALE</div>';
						}else echo "";
						echo '<img src="./public/img/product/'.$row["product_url"].'" alt="">
					</a>
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>

					</div>
					

					<div class="pi-text">
						<h6>$'.$row["product_price"].'</h6>
						<p>'.$row["product_name"].' </p>
					</div>
				</div>';
				}
			// ?>
			</div>
		</div>
	</section>
	<!-- letest product section end -->



	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>SẢN PHẨM TIÊU BIỂU</h2>
			</div>
			<ul class="product-filter-menu">
			<?php while ($row = mysqli_fetch_array($data["category"])){	
				echo '<li><a href="./Main/Home/Product_Categrories/'.$row["category_id"].'">'.$row["category_name"].'</a></li>';
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
									<a href="./Main/Product/Product_detail/'.$row["product_id"].'">
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
											<a href="#" class="add-card" onclick="addCart('.$row["product_id"].')"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
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
			<div class="text-center pt-5">
				<button class="site-btn sb-line sb-dark">XEM THÊM</button>
			</div>
		
	
	</section>


				<!-- <div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-sale">ON SALE</div>
							<img src="./public/img/product/6.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$500</h6>
							<p>OGIVAL - LS11</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./public/img/product/7.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$500</h6>
							<p> SEIKO - 257LS </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./public/img/product/8.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$500</h6>
							<p>CASIO - 119S </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./public/img/product/9.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$500</h6>
							<p> BULOVAL - 119XS</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./public/img/product/10.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$500</h6>
							<p>BR - 1QQKJAS</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./public/img/product/11.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$500</h6>
							<p>CASIO - 2091213SJDHA </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./public/img/product/12.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$500</h6>
							<p>OGIVAL - DJAKSDH </p>
						</div>
					</div>
				</div>
			</div> -->
			
	<!-- Product filter section end -->


	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="./public/img/Watch-pg.jpg">
				<div class="tag-new">NEW</div>
				<span>New Watch</span>
				<h2>WATCH</h2>
				<a href="#" class="site-btn">SHOP NOW</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->
