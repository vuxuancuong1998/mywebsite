<?php
class Dashboard extends Controller {
	public function index() {
		$user_check = $this->model("AccountModel","Admin");
		if (isset($_SESSION['id']) && $user_check->checkRule($_SESSION['username']) !=1) {
				echo '<script type = "text/javascript">
				            alert("Tài khoản không có quyền quản trị.");window.location ="/watchstore/"; 
				            </script>';		
			}
		// $user_check->checkRule($username) == 1
		if (!isset($_SESSION['id'] ) ) {
		$this->view("Login",[], "Admin");}
		else{
		$this->view("MasterLayout", [
			"page" => "Dashboard",
		], "Admin");
		}
		

	}


}

?>