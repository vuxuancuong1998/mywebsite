<?php 
	/**
	 * 
	 */
	class BillModel extends Database
	{
		// kết nối 3 bảng : product & order & user.
		// public function getBill($cart_id){
		// 	$sql = "SELECT cart_id, category_name, cart_quantity,cart_price, product_name, product_url, total, c.create_day,name,email,address,phone_number
		// 		FROM products p, carts c, categories ct WHERE p.product_id=c.cart_product_id AND ct.category_id = p.product_category_id AND c.cart_id = '$cart_id'";
  //               return $this->do_sql($sql);
		// }
		public function getBill()
		{
			$sql = "SELECT * FROM bills ORDER BY create_day DESC";
			 return $this->do_sql($sql);

		}
		public function getContent(){
			$sql = "SELECT content FROM bills ";
			return $this->do_sql($sql);

		}

		// public function getInforProduct($cart_id){
		// 	$sql = "SELECT cart_id, category_name, cart_quantity,cart_price, product_name, product_url, total, b.create_day
		// 		FROM products p, carts c, categories ct WHERE p.product_id=c.cart_product_id AND ct.category_id = p.product_category_id AND c.cart_id = '$cart_id' ";
  //               return $this->do_sql($sql);
		// }

		public function getBillProduct($cart_id){
			$sql = "SELECT cart_id, category_name, cart_quantity,product_quantity,cart_price,product_id, product_name, product_url, total, c.create_day
				FROM products p, carts c, categories ct WHERE p.product_id=c.cart_product_id AND ct.category_id = p.product_category_id AND c.cart_id = '$cart_id'";
                return $this->do_sql($sql);
		}
		public function getOrdererInfor($content)
		{
			# code...
			$sql = "SELECT bill_id,name,email,address,phone_number,bill_status, create_day FROM bills WHERE content='$content'";
			return $this->get_row($sql);
		}
		public function getDetailBill ($id){
			$sql = "SELECT * FROM bills WHERE bill_id = '$id'";
			return $this->get_row($sql);
		}
		public function getContentID($id){
			$sql = "SELECT content FROM bills WHERE bill_id = '$id'";
			return $this->get_row($sql);
		}
		public function deleteBill($id)
		{
			$sql = "DELETE FROM bills WHERE bill_id = '$id'";
	        $this->do_sql($sql);
	        return true;
		}
		public function billCompleted($id)
		{
			# code...
			$sql = "UPDATE bills SET bill_status = 1 WHERE bill_id = '$id'";
			return $this->do_sql($sql);
		}
		public function getMonth(){
			$sql ="SELECT DISTINCT (MONTH(create_day)) as create_day FROM bills ";
			return $this->do_sql($sql);
		}
		public function getQuantity_St ($month){
			$sql = "SELECT statistic_quantity FROM statistics  WHERE statistic_month= '$month' ";
			$result= $this->get_row($sql);
			return $result["statistic_quantity"];
		}
		// public function updateQty($month,$quantity_bill,$quantity_ST){
		// 	$newQuatity_ST =  $quantity_ST + $quantity_bill;
		// 	$sql = "UPDATE statistics SET statistic_quantity = $newQuatity_ST WHERE statistic_month = '$month'";
		// 	return $this->do_sql($sql);
		// }

		public function getQuantity_bill($month)
		{
			$sql = "SELECT SUM(bill_quantity) as SUM FROM bills  WHERE (MONTH(create_day)) = '$month'";
			$result = $this->get_row($sql);
			return $result['SUM'];
		}
		public function updateQty_ST($month, $quantity_bill)
		{
			$sql = "UPDATE statistics SET statistic_quantity = $quantity_bill WHERE statistic_month = '$month'";
			return $this->do_sql($sql);
		}
		public function thanggannhat()
		{
			$sql = "SELECT DISTINCT(MONTH(create_day)) as month FROM bills";
			return $this->do_sql($sql);
		}
		public function getMoney_bill($month){
			$sql = "SELECT SUM(bill_total) as SUM FROM bills  WHERE (MONTH(create_day)) = '$month'";
			$result = $this->get_row($sql);
			return $result['SUM'];
		}
		public function getMoney_ST($month){
			$sql = "SELECT statistic_money FROM statistics  WHERE statistic_month= '$month' ";
			$result= $this->get_row($sql);
			return $result["statistic_money"];
		}
		public function updateMoney_ST($month, $money_bill)
		{
			$sql = "UPDATE statistics SET statistic_money = $money_bill WHERE statistic_month = '$month'";
			return $this->do_sql($sql);
		}
	}


?>