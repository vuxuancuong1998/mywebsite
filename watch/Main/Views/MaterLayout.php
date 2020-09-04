<!DOCTYPE html>
<html lang="vi">
<head>
    <title>WATCH </title>
    <base href="http://localhost/watchstore/" />
	<meta charset="UTF-8">
	<meta name="description" content=" WATCH">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="./public/img/favicon.jpg" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="./public/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="./public/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="./public/css/flaticon.css"/>
	<link rel="stylesheet" href="./public/css/slicknav.min.css"/>
	<link rel="stylesheet" href="./public/css/jquery-ui.min.css"/>
	<link rel="stylesheet" href="./public/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="./public/css/animate.css"/>
	<link rel="stylesheet" href="./public/css/style.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
<style type="text/css">
	.dropdown {
  position: relative;
  display: inline-block;
  right: 25px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #F2F2F2;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;

}
.dropdown-content a{
	color: #848484;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="./Main" class="site-logo">
							<h2>WATCH</h2>
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<form class="header-search-form">
							<input type="text" placeholder="Search on watch ....">
							<button><i class="flaticon-search"></i></button>
						</form>
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<?php if (isset($_SESSION["username"])) {
							echo'
							
							<div class="dropdown">
							<i class="flaticon-profile"></i>
								 <span>'.$_SESSION["username"].'</span>
								 
								   
								<div class="dropdown-content">
								  <i class = "fas fa-sign-out-alt"></i>
								  <a href = "./Main/Logout">Đăng Xuất</a>
								  </div>
								  
								
							</div>';						
							}else {
							
							echo '<div class="up-item " data-toggle="modal" data-target="#Login" style="font-size: 14px; margin-top: 5px;">
								<i class="flaticon-profile"></i>
								<a href="#">Sign</a> In or <a href="#">Create Account</a>
							</div>
							 <!-- Modal -->
							 
							 <div id="Login" class="modal fade" role="dialog">
								<div class="modal-dialog">                               
								  <!-- Modal content-->
								  <div class="modal-content">
									<div class="modal-header">
									  <button type="button" class="close btlose" data-dismiss="modal">&times;</button>
									  <h4 class="modal-title title-in-header">ĐĂNG NHẬP</h4>
									</div>
								  <div class="modal-body">

									  <form action="./Main/Login/checkLogin" class="needs-validation" novalidate method="POST">
									  <div class="form-group">
											  <label for="email">Tài khoản:</label>
											  <input type="email" class="form-control" id="email" name="username" placeholder="Nhập Tài khoản" required value = "">
											  <div class="valid-feedback">Hợp lệ.</div>
											  <div class="invalid-feedback">Vui lòng điền Email</div>

										  </div>
									  	
										 <div class="form-group">
												  <label for="pwd">Password:</label>
												<input type="password" class="form-control" id="pwd" name="password" placeholder="Nhập Password" required value = "">
												 <div class="valid-feedback">Hợp lệ.</div>
												  <div class="invalid-feedback">Vui lòng điền Password</div>
											  </div>
											  
											 <div class="form-group form-check">
													  <label class="form-check-label">
													 
													  <input class="form-check-input" type="checkbox" name="rememberPwd" > Nhớ mật khẩu</label>
													</div>
													<button type="submit" class="btn btn-primary" name="btnLogin">Đăng nhập</button>
												  
											  </div>
									  </form>
									  <div class="modal-footer">
											  <p><i class="fas fa-smile-wink"></i> &nbsp; Nếu chưa có tài khoản thì<p><a href="./Main/Account">Bấm vào đây</a>
									  </div>
								   </div>                                   
							  </div>
						  </div>';
						}

						  ?>
							<div class="up-item">
								<div class="shopping-card">
									<i class="flaticon-bag"></i>
									<!-- <span>0</span> -->
								</div>
								<a href="./Main/Cart/">Shopping Cart</a>
							</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="./Main">Trang chủ</a></li>
					<li><a href="./Main/Product">Thương hiệu</a>
							<ul class="sub-menu">	
									<li><a href="#"> <img src="./public/img/thuonghieu/citizen.png" alt="citizen"></a></li>
									<li><a href="#"><img src="./public/img/thuonghieu/-orient.png" alt="ozient"></a></li>
									<li><a href="#"><img src="./public/img/thuonghieu/ogival.png" alt="ogival"></a></li>
									<li><a href="#"><img src="./public/img/thuonghieu/srwatch.png" alt="srwatch"></a></li>
									
									<li><a href="#"><img src="./public/img/thuonghieu/casio.png" alt="casio"></a></li>
									<li><a href="#"><img src="./public/img/thuonghieu/bulova.png" alt="bulova"></a></li>
									<li><a href="#"><img src="./public/img/thuonghieu/seiko.png" alt="seiko"></a></li>
									<li><a href="#"><img src="./public/img/thuonghieu/freelook.png" alt="freelook"></a></li>
							
							</ul>
						
					</li>
					<li><a href="./Main/Category">Đồng hồ nam</a></li>
					<li><a href="./Main/Category">Đồng hồ nữ</a></li>
					
					<li><a href="./Main/Accessory">Phụ kiện</a>
						<ul class="sub-menu">
							<li><a href="accessory.html">Dây đồng hồ</a></li>
							<li><a href="accessory.html">Khoá đồng hồ</a></li>
							<li><a href="accessory.html">Pin đồng hồ</a></li>
						</ul>
					</li>
					
					<li><a href="./Main/Contact">Liên hệ</a></li>
					
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->
	

    <?php require_once "./watch/Main/views/Pages/".$data["page"].".php" ?>

	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<div class="footer-logo text-center">
				<a href="./index.php" class="site-logo">
				<h2>WATCH</h2>
			</a>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Giới thiệu</h2>
						<p>Hãy đến với chúng tôi nhà cung cấp đồng hồ uy tín, chất lượng, với những mẫu đồng hồ nổi tiếng, sang chảnh, phong cách sẽ làm bạn thay đổi,... </p>
						<img src="./public/img/cards.png" alt="">
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Chăm sóc khách hàng</h2>
						<ul>
							<li><a href="">Hướng dẫn mua hàng</a></li>
							<li><a href="">Chính sách đổi trả</a></li>
							<li><a href="">Chính sách bảo hành</a></li>
							
						</ul>
						
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Tiện ích</h2>
						<ul>
							<li><a href="">Kiến thức đồng hồ</a></li>
							<li><a href="">Thông tin liên hệ</a></li>
							<li><a href="">Tuyển dụng</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Hỗ trợ</h2>
						<div class="con-info">
							<span>Hotell</span>
							<p>18008119 </p>
						</div>
						
						<div class="con-info">
							<span>Email</span>
							<p>watch@email.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/cuong.kcr" target="_blank">XuanCuong</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="./public/js/jquery-3.2.1.min.js"></script>
	<!-- <script src="./public/js/bootstrap.min.js"></script> -->
	<script src="./public/js/jquery.slicknav.min.js"></script>
	<script src="./public/js/owl.carousel.min.js"></script>
	<script src="./public/js/jquery.nicescroll.min.js"></script>
	<script src="./public/js/jquery.zoom.min.js"></script>
	<script src="./public/js/jquery-ui.min.js"></script>
	<script src="./public/js/main.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript">
		//Lấy số lượng sản phẩm bằng jquery (jquery)
		function addToCart()
		{
					num = $("#quantity").val();
					$.post("../Controller/Cart.php/AddToCart",{'quantity':num}, function(data){
						
				  });
		}
		
		function Check()
		{
			var checkbox = document.getElementsByName("checkbox");
			var result = [];
				for(var i = 0; i < checkbox.length; i ++){
						if (checkbox[i].checked === true) {
							result.push(checkbox[i].value) ;

						}
					var newResutl = result.join();
						
					}
					
					if (newResutl === '') {
						alert("Bạn chưa chọn sản phẩm nào!")
					}else{

						window.location = "http://localhost/watchstore/Main/Bill/ShowBill/" + newResutl;
						// console.log(result);
						}

			}

			function phantrang(){
				var sotrang = 1;
				$.get("../Pagination/phantrang.php",{sotrang: sotrang},function(data){
					$("#pagination").html(data);
				});
			}






	</script>

	</body>
</html>
