<?php 

	/**
	 * 
	 */
	class Bill extends Controller
	{
		
		public function index(){
			$Bill = $this->model("BillModel","Admin");

			$getContent = $Bill->getContent();

		
			$result = [];
			$orderer = array();
			$cart_infor = array();


			// $allInfor = {
			// 	[$orderer],
			// 	[$cart_infor]
			// };
			
			
			foreach ($getContent as $array_value) {
				foreach($array_value as $value){
					$orderer = $Bill->getOrdererInfor($value);
					$cart_id_array=explode(',', $value);
					foreach ($cart_id_array as $cart_id) {
						# code...
						array_push($cart_infor, $Bill -> getBillProduct($cart_id)) ;

					}
					array_push($result, [ "inforUser" => $orderer,"inforPr" => $cart_infor]);
				}
			}

			// var_dump($result);

			// echo "<pre>";
			// print_r($result);
			// echo "</pre>";

			// $getInforProduct = $Bill -> getProductDetails(89);
				

			// foreach ($cart_infor as $key => $value) {
			// 	$inforPr = $value;
			// 	print_r($inforPr);

			// }
			
			// foreach ($result as $value) {
			// 	while ($row = each($orderer)) {
			// 		print_r($row);
			// 	}
			// 	foreach ($cart_infor as $key => $value) {
			// 		# code...
			// 		while ($row = mysqli_fetch_array($value)) {
			// 	# code...
			// 	echo "<pre>";
			// 	print_r($row);
			// 	echo "</pre>";

			// 	echo "<br/>";
			// }
			// 	}
				
			// }
			

			
			$this -> view("MasterLayout",[
				"page" => "Bill",
				"result" => $result
			],"Admin");
		}

		public function DetailBill ($id){
			$DetailBill = $this -> model("BillModel","Admin");
			$getContent = $DetailBill->getContentID($id);
			$cart_infor = array();
			$inforUser = $DetailBill->getDetailBill($id);
			foreach ($getContent as $array_value) {
					$cart_id_array=explode(',', $array_value);
					foreach ($cart_id_array as $cart_id) {
						# code...
						array_push($cart_infor, $DetailBill -> getBillProduct($cart_id)) ;

					
				}
			}

			// foreach ($cart_infor as  $value) {
			// 	while ($row = mysqli_fetch_array($value)) {
			// 		echo "<pre>";
			// 		print_r($row);
			// 		echo "</pre>";
			// 	}
			// }
			$this->view("MasterLayout",[
				"page" => "DetailBill",
				"inforUser" => $inforUser,
				"inforPr" => $cart_infor
			],"Admin");
		}
		public function DeleteBill ($id){
			$Bill = $this->model("BillModel","Admin");
			$flag = 1;
			if ($flag) {
					$result = $Bill->deleteBill($id);
			}
			if ($result) {
				echo '<script type = "text/javascript">
                alert("Xoá đơn hàng thành công!");window.location = "/watchstore/Admin/Bill";
                </script>';
			}
		}
		public function billCompleted($id)
		{
			$Bill = $this->model("BillModel","Admin");
			$result = $Bill->billCompleted($id);
			if ($result) {
				echo "<script type='text/javascript'> history.go(-1)</script>";
			}
		}

		public function Statistic(){
			$Bill = $this->model("BillModel","Admin");
			// $result = $Bill->billCompleted($id);
			// if ($result) {
			// 	echo "<script type='text/javascript'> history.go(-1)</script>";
			// }
			$array_month = array();
			
			$month_bill = $Bill -> getMonth();
			// print_r($month_bill);
			while($row = mysqli_fetch_assoc($month_bill)){
				array_push($array_month, implode(" ,",$row));
			}
			$array_quantity = [];

			$array_money = [];
			foreach ($array_month as $month) {
				//Lấy số lượng theo tháng trong bill để update vào bảng thống kế
				$get_quantity_bill = $Bill->getQuantity_bill($month);
				//lấy số lượng của bảng thống kê để update
				$get_quantity_ST = $Bill->getQuantity_St ($month);
				//Update lại số lượng
				$Bill -> updateQty_ST($month, $get_quantity_bill);
				array_push($array_quantity, $get_quantity_ST);


				// Tổng tiền của tháng trong bảng bill.
				$getMoney_bill = $Bill->getMoney_bill($month);
				// Tổng tiền của tháng trong bảng thông kê(statistics).
				$getMoney_ST = $Bill->getMoney_ST($month);
				//UPdate tổng tiền theo tháng trong bảng statistics
				$Bill -> updateMoney_ST($month, $getMoney_bill);
				array_push($array_money, $getMoney_ST);


			}
			$thanggannhat = $Bill->thanggannhat();
			
		
			while ($row = mysqli_fetch_array($thanggannhat)) {
				$arr_thanggannhat[] = $row["month"];
			}
			// print_r($arr_thanggannhat);
			// chuyển qua json để làm biểu đồ (hightChart)
			$arr_thanggannhat =  json_encode($arr_thanggannhat);
			$array_quantity= implode(",", $array_quantity);
			$array_money = implode(",", $array_money);
			// $array_quantity = json_encode($array_quantity);
			 
			$this->view("MasterLayout",[
				"page" => "thongke",
				"thanggannhat" => $arr_thanggannhat,
				"soluongTungThang" => $array_quantity,
				"doanhthutheothang" => $array_money
			],"Admin");
		}
	}
?>