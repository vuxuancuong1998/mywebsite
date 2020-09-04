<?php /**
 * 
 */
class Logout extends Controller
{	
	public function index(){
		unset($_SESSION["username"]);
		unset($_SESSION['id']);
		unset($_SESSION["password"]);
		unset($_COOKIE["username"]);
		unset($_COOKIE["password"]);
		echo " <script>window.location = '/watchstore'; </script>";
	}
	
} ?>