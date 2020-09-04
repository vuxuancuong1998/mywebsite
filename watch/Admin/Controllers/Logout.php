<?php 
	/**
	 * 
	 */
	class Logout extends Controller
	{
		public function index(){
			unset($_SESSION["username"]);
			unset($_SESSION["password"]);
			echo " <script> alert('Đăng xuất thành công!!!');window.location = './Login' </script>";
		}
	}
 ?>