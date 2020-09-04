<div class="page-top-info">
		<div class="container">
			<h4>Sản phẩm</h4>
			<div class="site-pagination">
				<a href="">Trang chủ</a> /
				<a href="">Phụ kiện</a> /
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Category section -->
	<section class="category-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-2 order-lg-1">
					<div class="filter-widget">
						<h2 class="fw-title">Categories</h2>
						<ul class="category-menu">
							<li><a href="#">Dây đồng hồ</a>
								<!-- <ul class="sub-menu">
									<li><a href="#">Casio <span>(2)</span></a></li>
									
								</ul> -->
							</li>
							<li><a href="#">Pin đồng hồ</a>
								<ul class="sub-menu">
									
                                </ul></li>
                            <li><a href="#">Khoá đồng hồ</a></li>
							<li><a href="#">Hộp đựng đồng hồ    </a></li>
						</ul>
					</div>
					
				
				</div>

				<div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
					<div class="row">
						<?php 
						while ($row = mysqli_fetch_array($data["accessory"])){ 
						echo '<div class="col-lg-4 col-sm-6">
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
								
									echo
							'
							<img src="./public/img/product/'.$row["product_url"].'" alt="">
							</a>
									<div class="pi-links">
									
										<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
										<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
									</div>
								</div>
								<div class="pi-text">
									<h6>$'.$row["product_price"].'</h6>
									<p>'.$row["product_name"].'</p>
								</div>
							</div>
						</div>';
						}
						?>
					
						<div class="text-center w-100 pt-3">
							<button class="site-btn sb-line sb-dark">LOAD MORE</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Category section end -->
<!-- 