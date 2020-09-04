<?php 
	/**
	 * 
	 */
	class BillModel extends Database
	{
		
		public function AddBill($id,$create_day){
			$sql = "INSERT into bills (content,create_day) VALUES('$id','$create_day')";
			$this->do_sql($sql);
			return true;
		}
		//get content ve de tách thành mảng.
		public function getContent($id){
			$sql = "SELECT content FROM bills WHERE content = '$id' ";
			$result = $this->get_row($sql);
			return $result['content'];

		}

		public function getBill($cart_id){
			$sql = "SELECT * FROM carts c, products p , users u WHERE c.cart_id AND b.content='$id'";
			return $this->do_sql($sql);

		}
		public function getCart($content){
			$sql = "SELECT cart_price, cart_quantity, total FROM carts WHERE cart_id = '$content'";
			return $this->do_sql($sql);
		}
		public function cart_product_id($content){
			$sql = "SELECT cart_product_id FROM carts WHERE cart_id = '$content'";
			$result = $this->get_row($sql);
			return $result["cart_product_id"];
		}

		public function getInfoProduct($cart_product_id){
			$sql = "SELECT product_url, product_name FROM products WHERE product_id = '$cart_product_id'";
			return $this->do_sql($sql);

		}
		public function changeInforAccount($id, $name,$email, $address, $phone_number){

        
        if ($name != NULL){$this->do_sql("UPDATE users SET name='$name' WHERE user_id='$id'");}

       
        if ($email != NULL){$this->do_sql("UPDATE users SET email='$email' WHERE user_id='$id'");}
      
        if ($address != NULL){$this->do_sql("UPDATE users SET address='$address' WHERE user_id='$id'");}

        if ($phone_number != NULL){$this->do_sql("UPDATE users SET phone_number='$phone_number' WHERE user_id='$id'");}
               
       
        return TRUE;
    }
   	public function bill_id($content)
   	{
   		$sql = "SELECT bill_id FROM bills WHERE content = '$content'";
   		$result = $this->get_row($sql);
   		return $result['bill_id'];
   	}

    public function ConfirmBill($content,$name,$email, $address, $phone_number,$bill_status,$bill_quantity,$bill_total,$create_day)
    {
    	$sql = "INSERT into bills (content,  name, email, address, phone_number,bill_status,bill_quantity,bill_total,create_day) VALUES('$content','$name', '$email', '$address', '$phone_number','$bill_status','$bill_quantity','$bill_total', '$create_day')";
    	$this->do_sql($sql);
    	return true;
    
    }
}
 ?>