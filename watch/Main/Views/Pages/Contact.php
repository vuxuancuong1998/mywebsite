
	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Liên hệ</h4>
			<div class="site-pagination">
				<a href="">Trang chủ</a> /
				<a href="">Liên hệ</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- Contact section -->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 contact-info">
					<h3>Shop watch</h3>
					<p>901 - Thôn 8 Chợ lớn - Pleiku</p>
					<p>0963719679</p>
					<p>shopwatch@gmail.com</p>
					<div class="contact-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
					<form class="contact-form">
						<input type="text" placeholder="Your name">
						<input type="text" placeholder="Your e-mail">
						<input type="text" placeholder="Subject">
						<textarea placeholder="Message"></textarea>
						<button class="site-btn">Gửi</button>
					</form>
				</div>
			</div>
		</div>
		<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14376.077865872314!2d-73.879277264103!3d40.757667781624285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1546528920522" style="border:0" allowfullscreen></iframe></div>
	</section>
	<!-- Contact section end -->


	<!-- Related product section -->
	<section class="related-product-section spad">
		<div class="container">
			<div class="section-title">
				<h2>SẢN PHẨM LIÊN QUAN</h2>
			</div>
			<div class="product-slider owl-carousel">
				<?php
				while ($row = mysqli_fetch_array($data["productcontact"])){
				 echo '<div class="product-item">
					<a href="./Main/Product/Product_detail">
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
	<!-- Related product section end -->


