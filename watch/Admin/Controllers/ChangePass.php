<?php
	/**
	 *  
	 */
	class ChangePass extends Controller
	{
		public function index(){
			$accountAdmin = $this -> model("AccountModel","Admin");
			$id = $accountAdmin->getId($_SESSION["username"]);
			$this->view("MasterLayout", [
			"page" => "Change_pass", 
			"id" => $id
			], "Admin");
		}
		public function verify($id){
			$accountAdmin = $this -> model("AccountModel","Admin");
			$checkpass = $accountAdmin ->GetPassword($id);
			$olpassword = trim($_POST["olpassword"]);
			$password = trim($_POST["password"]);
			$repassword = trim($_POST["repassword"]);
			$flag = 1;
			if (isset($_POST["btnChangePass"])) {
				if (!password_verify($olpassword, $checkpass)) {
						echo "<script> alert('Mật khẩu cũ không chính xác'); </script>";
						echo "<script type='text/javascript'>history.go(-1)</script>";
						exit();
					
				}
				// check length pass

				if($password != $repassword){
					echo '<script> alert("Mật khẩu mới và xác nhận mật khẩu không trùng nhau");window.location = "/watchstore/Admin/ChangePass/"; </script>';
					exit();
				}
				if(strlen($password) && strlen($repassword) <= 4){
	                echo "<script> alert('Mật khẩu quá ngắn. Tối thiểu 5 kí tự.') </script>";
	                echo "<script type='text/javascript'> history.go(-1)</script>";
	                exit();
	               }
				if ($flag) {
					$accountAdmin -> changePass($id,password_hash($password, PASSWORD_DEFAULT));
					echo "<script> alert('Đổi mật khẩu thành công!');window.location = '/watchstore/Admin/Login'; </script>";
				}

			}
		 }
	}
	
?>