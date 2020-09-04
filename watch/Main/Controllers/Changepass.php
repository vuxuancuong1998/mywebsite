<?php 

	/**
	 * 
	 */
	// 	class ChangePass extends Controller
	// {
	// 	public function index(){
	// 		$account = $this -> model("AccountModel");
	// 		$id = $account->getId($_SESSION["username"]);
	// 		$this->view("MasterLayout", [
	// 		"page" => "Change_pass", 
	// 		"id" => $id
	// 		]);
	// 	}
	// 	public function verify($id){
	// 		$account = $this -> model("AccountModel","Admin");
	// 		$checkpass = $account ->GetPassword($id);
	// 		$olpassword = trim($_POST["olpassword"]);
	// 		$password = trim($_POST["password"]);
	// 		$repassword = trim($_POST["repassword"]);
	// 		$flag = 1;
	// 		if (isset($_POST["btnChangePass"])) {
	// 			if (!password_verify($olpassword, $checkpass)) {
	// 					echo "<script> alert('Mật khẩu cũ không chính xác'); </script>";
	// 					echo "<script type='text/javascript'>history.go(-1)</script>";
	// 					exit();
					
	// 			}
	// 			if($password != $repassword){
	// 				echo '<script> alert("Mật khẩu mới và xác nhận mật khẩu không trùng nhau");window.location = "/watchstore/Main/Changepass/"; </script>';
	// 			}
	// 			if ($flag) {
	// 				$account -> changePass($id,password_hash($password, PASSWORD_DEFAULT));
	// 				echo "<script> alert('Đổi mật khẩu thành công!');window.location = '/watchstore/Main/'; </script>";
	// 			}

	// 		}
	// 	 }
	// }
	

 ?>