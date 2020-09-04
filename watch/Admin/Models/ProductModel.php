<?php
	/**
	 * 
	 */
	class ProductModel extends Database
	{
		
		public function getProduct(){
			$sql = "SELECT * FROM products ORDER BY product_id DESC";
			return $this->do_sql($sql);
		}
		public function AddProduct($product_category_id, $product_name, $product_descript, $quantity,$product_url, $product_price, $product_gender, $product_status, $type, $create_day)
		{
			$sql = "INSERT INTO products (product_category_id, product_name, product_descript,product_quantity, product_url, product_price, product_gender, product_status, type, create_day)
            VALUES ('$product_category_id', '$product_name',' $product_descript', '$quantity', '$product_url', '$product_price', '$product_gender', '$product_status', '$type', '$create_day') ";
	       $this->do_sql($sql);
	       return TRUE; 
		}
		public function UpdateProduct($id,$product_category_id, $product_name, $product_descript, $quantity, $product_url, $product_price, $product_gender, $product_status, $type, $create_day)
		{

	        if ($product_category_id != NULL){$this->do_sql("UPDATE products SET product_category_id='$product_category_id' WHERE product_id='$id'");}

	       	if ($product_name != NULL){$this->do_sql("UPDATE products SET product_name='$product_name' WHERE product_id='$id'");}

	      	if ($product_descript != NULL){$this->do_sql("UPDATE products SET product_descript='$product_descript' WHERE product_id='$id'");}

	      	if ($quantity != NULL){$this->do_sql("UPDATE products SET product_quantity='$quantity' WHERE product_id='$id'");}

	        if ($product_url != NULL){$this->do_sql("UPDATE products SET product_url='$product_url' WHERE product_id='$id'");}

	        if ($product_price != NULL){$this->do_sql("UPDATE products SET product_price='$product_price' WHERE product_id='$id'");}

	        if ($product_gender != NULL){$this->do_sql("UPDATE products SET product_gender='$product_gender' WHERE product_id='$id'");}

	        if ($product_status != NULL){$this->do_sql("UPDATE products SET product_status='$product_status' WHERE product_id='$id'");}

	        if ($type != NULL){$this->do_sql("UPDATE products SET type='$type' WHERE product_id='$id'");}

	        if ($create_day != NULL){$this->do_sql("UPDATE products SET create_day='$create_day' WHERE product_id='$id'");}
	        return TRUE;
   	 	}

   	 	public function DeleteProduct($id){
   	 		 $sql = "DELETE FROM products WHERE product_id = '$id'";
        $this->do_sql($sql);
        return true;
   	 	}

   	 	public function DetailProduct($id){
   	 		$sql = "SELECT * FROM products WHERE product_id='$id'";
   	 		return $this->get_row($sql);
   	 	}
   	 	// Lấy thông tin sản phẩm để kiểm tra và tăng sl sản phẩm lên
   		public function CheckProduct($product_category_id, $product_name, $product_url, $product_price, $product_gender, $product_status, $type){
   			$sql = "SELECT product_category_id, product_name, product_url, product_price,product_gender, product_status, type FROM products WHERE product_category_id = '$product_category_id' AND product_name = '$product_name' AND product_url = '$product_url' AND product_price = '$product_price' AND product_gender = '$product_gender' AND product_status = '$product_status' AND type = '$type'";
   			$result = $this->do_sql($sql);
   			if (mysqli_num_rows($result) > 0) {
				return true;
			}else return false;
   		}
   		//Lấy số lượng sản phẩm.
   		public function getQuantityProduct($product_category_id, $product_name, $product_url, $product_price, $product_gender, $product_status, $type){
   			$sql = "SELECT product_quantity FROM products WHERE product_category_id = '$product_category_id' AND product_name = '$product_name' AND product_url = '$product_url' AND product_price = '$product_price' AND product_gender = '$product_gender' AND product_status = '$product_status' AND type = '$type' ";
   			$result = $this->get_row($sql);
			return $result['product_quantity'];
   		}
   		//Update lại số lượng của sản phẩm.
   		public function UpdateQuantity($product_category_id, $product_name,$oldquantity, $quantity, $product_url, $product_price, $product_gender, $product_status, $type, $create_day){
   			$newquantity = $oldquantity + $quantity;
   			$sql = "UPDATE products SET product_quantity = '$newquantity' WHERE product_category_id = '$product_category_id' AND product_name = '$product_name' AND product_url = '$product_url' AND product_price = '$product_price' AND product_gender = '$product_gender' AND product_status = '$product_status' AND type = '$type' ";
   			$result = $this->do_sql($sql);
   			return true;
   		}
	}
?>