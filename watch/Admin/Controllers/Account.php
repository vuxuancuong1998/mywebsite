<?php 
	/**
	 * 
	 */
	class Account extends Controller
	{
		private $Account;
		public function __construct()
		{
			$this->Account = $this->model("AccountModel","Admin");
		}
		public function index(){
			$List_Account = $this->Account -> getAccount();
			$this -> view("MasterLayout",[
				"page" => "Account",
				"list_account" => $List_Account
			],"Admin");
		}
		public function AccountDetail($id){
            $account_detail = $this ->Account ->Account_Id($id);
			$this->view("Masterlayout",[
				"page" => "Account_detail",
				"account_id" => $account_detail
			],"Admin");
        }
		
		public function UpdateAccount($id){
			
			if (isset($_POST["update"])) {
				$username = trim($_POST["username"]);
				$name = trim($_POST["name"]);
				$password = trim($_POST["password"]);
				$email = trim($_POST["email"]);
				$address = trim($_POST["address"]);
				$phone_number = trim($_POST["phone_number"]);
				$create_day = date('Y-m-d');
				$flag = 1;
				if ($flag) {
				$result = $this ->Account->updateAccount($id,$username, $name, $password, $email, $address, $phone_number, $create_day, $rule = 0)	;		
				} 
					if ($result) {
						echo '<script type = "text/javascript">
				          	 alert("Sửa Thành Công!!!");window.location = "/watchstore/Admin/Account";
				            </script>';				
					}else
				        {
				            echo '<script type = "text/javascript">alert("Sửa thất bại ");window.location = "/watchstore/Admin/Account";</script>';
				        }

			} 

		}


		public function CreateAccount(){
			
				if(isset($_POST["btnCreateAccount"])){
					$Acount = $this->model("AccountModel","Admin");
					$flag = 0;
					$username = trim($_POST["username"]);
					// check username
					if($Acount->checkUsername($username)==false){
						$flag = 1;
						echo "<script> alert('Tài khoản đã tồn tại. Vui lòng chọn tài khoản khác!!!') </script>";
						echo "<script type='text/javascript'>history.go(-1)</script>";
						exit();
					}
					$password = trim($_POST["password"]);
					$repassword = trim($_POST["repassword"]);
					//check length
					 if(strlen($password) && strlen($repassword) <= 4){
		                echo "<script> alert('Mật khẩu quá ngắn. Tối thiểu 5 kí tự.') </script>";
		                echo "<script type='text/javascript'> history.go(-1)</script>";
		                exit();
		               }
					// check pass
					if($password != $repassword){
						$flag = 1;
						echo "<script> alert('Mật khẩu không khớp nhau. Vui lòng nhập lại.') </script>";
						echo "<script type='text/javascript'> history.go(-1)</script>";
						exit();
					}
					// check độ dài pass
				   
					if($flag == 0){
						$password = password_hash($password, PASSWORD_DEFAULT);
						$name = trim( $_POST["name"] );
						$email = trim( $_POST["email"] );
						$address = trim( $_POST["address"] );
						$phone_number = trim( $_POST["phone_number"] );
						$create_day = date("Y-m-d");
						$rule = 0;
						// insert DB;
						$Acount -> CreateAccount ($username, $name, $password, $email, $address, $phone_number, $create_day, $rule);
						echo "<script> alert('Tạo tài khoản thành công');window.location = '/watchstore/Admin/Account'; </script>";
					   
					}
					else echo '<script type = "text/javascript">
					alert("Đăng ký tài khoản thất bại!");window.location ="/watchstore/Admin/Account/"; 
					</script>';}
			}
		

			
		public function DeleteAccount($id){
			$result = $this->Account->DeleteAccount($id);
			if ($result) {
				echo '<script type = "text/javascript">
                alert("Xoá tài khoản thành công!");window.location ="/watchstore/Admin/Account"; 
                </script>';
			}
			else echo '<script type = "text/javascript">
                alert("Xoá tài khoản thất bại!");window.location ="/watchstore/Admin/Account"; 
                </script>';
		}
		
	}
	
 ?>