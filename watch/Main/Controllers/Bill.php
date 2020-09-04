<?php 
	/**
	 * 
	 */
	class Bill extends Controller
	{
		function index(){}


		// ID cua cart truyen tu js qua
		public function ShowBill($result)

		{	
			$bill_Model = $this->model('BillModel');	
			$create_day = date('Y-m-d H:i:s');
			// $add_Bill = $bill_Model->AddBill($result,$create_day);
			$explodeContent = explode(',', $result);

			$account = $this->model('AccountModel');
			$cart = $this->model('CartModel');
			// $bill_id = $bill_Model->bill_id($result);
			$userInfor = $account->getAccountDetails($_SESSION['id']);

			// print_r($explodeContent);

			



			$productDetails = array();
			foreach ($explodeContent as $value) {
				// print_r($value);
				array_push($productDetails, $cart->getProductDetails($value));
			}
		
			
				
		
				$this->view("Materlayout",[
					"page" => "Bill",
					// "getBill" => $getBill,
					// "getProduct" => $getInfoProduct,
					// "getCart" => $getInfoCart,
					"user"=>$userInfor,
					"product"=>$productDetails,
					"result" => $result
				]);

							
		}

		public function changeInforAccount($id)
		{
			$Account = $this->model('BillModel');	
		
			if (isset($_POST["update"])) {
				$name = trim($_POST["name"]);
				$email = trim($_POST["email"]);
				$address = trim($_POST["address"]);
				$phone_number = trim($_POST["phone_number"]);
				$flag = 1;
				if ($flag)
				{
				$result = $Account->changeInforAccount($id, $name,$email, $address, $phone_number);	
				} 
					if ($result)
					{
						echo '<script type = "text/javascript">
				          	alert("Thay đổi thông tin thành công ");
				            </script>';		
				        echo "<script type='text/javascript'> history.go(-1)</script>";	
					}else echo '<script type = "text/javascript">alert("Thay đổi thất bại ");window.location = "/watchstore/Main/Bill/ShowBill/" + result;</script>';
				        
			}
		}

		function ConfirmBill(){
				$bill = $this->model('BillModel');
			if (isset($_POST['ConfirmBill'])) {
				$name = $_POST['name'];
				$email = $_POST['email'];
				$address = $_POST['address'];
				$phone_number = $_POST['phone_number'];
				$result = $_POST['result'];
				$Sum_quantity = $_POST['Sum_quantity'];
				$Sum_total = $_POST['Sum_total'];
				$create_day =  date('Y-m-d H:i:s');
				$flag = 1;
				if ($flag) {
					$result = $bill->ConfirmBill($result,$name,$email, $address, $phone_number,$bill_status = 0,$Sum_quantity,$Sum_total,$create_day);
					
				}
				if ($result) {
					echo '<script type = "text/javascript">
				          	alert("Hoàn tất xác nhận");window.location = "/watchstore/";
				            </script>';	
				            
				}
				
			}

		}


	}
 ?>