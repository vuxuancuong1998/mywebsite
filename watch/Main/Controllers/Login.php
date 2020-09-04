<?php 

	/**
	 * 
	 */
	class Login extends Controller
	{
		
		public function index(){
		}

		public function checklogin(){
			if (isset($_POST["btnLogin"])) {
				$user = $this -> model("AccountModel");


				$username = trim($_POST["username"]);
				
				$password = trim($_POST["password"]);
				//lay id thong qua username
				$user_id = $user->getId($username);
		
				
				if ($user -> checkAcccout ($username, $password)) {
					$_SESSION["username"] = $username;
					
					$_SESSION["id"] = $user_id;
					$_SESSION["password"] = $password;	
					echo '<script type = "text/javascript">
			            alert("Đăng nhập thành công!!!");window.location ="/watchstore/Main"; 
			            </script>';
					// if (isset($_POST["rememberPwd"]))
					// {
					// 	setcookie("username", $username, time()+1800, "/");
   		// 				setcookie("password", $password, time()+1800, "/");
					// }
					// if ($user -> checkRule($username) == 1) {
					//  echo '<script type = "text/javascript">
			  //           alert("Đăng nhập thành công. Chào mừng quản trị!!!");window.location ="/watchstore/Admin/"; 
			  //           </script>';
						
					// }else echo '<script type = "text/javascript">
			  //           alert("Đăng nhập thành công!!!");window.location ="/watchstore/Main"; 
			  //           </script>';
				}
				else  echo '<script type = "text/javascript">
			            alert("Tài khoản hoặc mật khẩu không chính xác!!!"); 
			            </script>';
			            echo "<script type='text/javascript'>history.go(-1)</script>";
			            exit();
			}
		}
	}
 ?>