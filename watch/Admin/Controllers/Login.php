<?php /**
 * 
 */
class Login extends Controller
{
	
	public function index(){
		$this -> view("Login",[
		],"Admin");
	}
	public function checklogin(){
			// 	$now = time();
			// if (isset($_SESSION["username "]) && $now > $_SESSION["username"]) {
			// 	session_unset();
			// 	session_destroy();
			// 	session_start();
			// 	echo '<script type = "text/javascript">
			//             alert("Hết phiên làm việc. Mời bạn đăng nhập lại!!!");window.location ="/watchstore/Admin/Login"; 
			//             </script>';
			// }
			// $_SESSION["username"] = $now + 30;
		if (isset($_POST["Login"])) {
				$user = $this -> model("AccountModel","Admin");
				
				$username = trim($_POST["username"]);
				$password = trim($_POST["password"]);
				$user_id = $user->getId($username);
				$timenow = strtotime(date("YmdHis"));
				if ($user -> checkAcccout ($username, $password)) {
					$_SESSION["username"] = $username;
					$_SESSION["password"] = $password;	
					$_SESSION["id"] = $user_id;
					// if (isset($_POST["rememberPwd"]))
					// {
					// 	setcookie("username",$username,time()+3600,"/");
					// 	setcookie("password",$password,time()+3600,"/");
					// }
					if ($user -> checkRule($username) == 1) {
					 echo '<script type = "text/javascript">
			            alert("Đăng nhập thành công. Chào mừng quản trị!!");window.location ="/watchstore/Admin/"; 
			            </script>';
						
					}else echo '<script type = "text/javascript">
			            alert("Đăng nhập thành công!!!");window.location ="/watchstore/Main"; 
			            </script>';
				}
				else  echo '<script type = "text/javascript">
			            alert("Tài khoản hoặc mật khẩu không chính xác!!!"); 
			            </script>';
			            echo "<script type='text/javascript'>history.go(-1)</script>";
			            exit();
			}
	}
} ?>