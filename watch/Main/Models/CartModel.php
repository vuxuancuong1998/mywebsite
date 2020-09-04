<?php 
	/**
	 * 
	 */
	class CartModel extends Database
	{
		
		public function AddToCart($cart_user_id,$cart_product_id,$cart_price, $quantity, $create_day){
			
				$total = $quantity * $cart_price;
			$sql = "INSERT INTO carts (cart_user_id,cart_product_id,cart_price,cart_quantity, total, create_day)
                VALUES ('$cart_user_id','$cart_product_id','$cart_price', '$quantity', '$total', '$create_day') ";
           $this->do_sql($sql);

           return TRUE;  

		}
		public function SumTotal($cart_user_id){
			$sql = "SELECT SUM(total) FROM carts WHERE cart_user_id = '$cart_user_id'";
			$result = $this->get_row($sql);
			return $result['SUM(total)'];
		}
		public function getCart($id){
			$sql = "SELECT cart_id, category_name, cart_quantity,product_quantity,cart_price, product_name, product_url, total, c.create_day
				FROM products p, carts c, categories ct WHERE p.product_id=c.cart_product_id AND cart_user_id = '$id' AND ct.category_id = p.product_category_id";
                return $this->do_sql($sql);
		}
		public function getProductDetails($cart_id){
			$sql = "SELECT cart_id, category_name, cart_quantity,product_quantity,cart_price, product_name, product_url, total, c.create_day
				FROM products p, carts c, categories ct WHERE p.product_id=c.cart_product_id AND ct.category_id = p.product_category_id AND c.cart_id = '$cart_id'";
                return $this->do_sql($sql);
		}
		// public function getCart2($id){
		// 	$sql = "SELECT category_name, cart_quantity,product_quantity,cart_price, product_name, product_url, total, c.create_day, name, email, address, phone_number
		// 		FROM products p, carts c, categories ct, use WHERE p.product_id=c.cart_product_id AND cart_user_id = '$id' AND ct.category_id = p.product_category_id";
  //               return $this->do_sql($sql);
		// }
		// kiểm tra sự tồn tại của giỏ hàng
		public function CheckToCart($cart_user_id, $cart_product_id){
			$sql = "SELECT * FROM carts WHERE cart_user_id = '$cart_user_id' AND cart_product_id = '$cart_product_id'";
			$result = $this->do_sql($sql);
			if (mysqli_num_rows($result) > 0) {
				return true;
			}else return false;
		}
		//cập nhật giỏ hàng và tính tiền
		public function UpdateCart($cart_user_id,$cart_product_id, $oldquantity, $cart_price,$quantity,$create_day){
			$newquantity = $oldquantity + $quantity;
			$total = $cart_price * $newquantity;
			$sql = "UPDATE carts SET cart_quantity='$newquantity', total = '$total' WHERE cart_user_id = '$cart_user_id' AND cart_product_id = '$cart_product_id'";
			$this->do_sql($sql);
			return true;
		}
		// lấy số lượng của cart
		public function getQuantity($cart_user_id,$cart_product_id){
			$sql = "SELECT cart_quantity FROM carts WHERE cart_user_id = '$cart_user_id' AND cart_product_id = '$cart_product_id'";
			$result = $this->get_row($sql);
			return $result['cart_quantity'];

		}
		// xoá
		public function DeleteCart($id){
			$sql = "DELETE FROM carts WHERE cart_id = '$id'";
	        $this->do_sql($sql);
	        return true;
		}

		// lấy số lượng sản phẩm để kiểm tra
		public function getQuantityToCheck($cart_product_id){
			$sql = "SELECT product_quantity FROM `products` WHERE product_id = '$cart_product_id'";
			$result = $this->get_row($sql);
			return $result['product_quantity'];
		}
		// Hàm để cập nhập lại số lượng sau mua sản phẩm.
		public function updateQuantity($cart_product_id, $slTrongKho){
			$sql = "UPDATE products SET product_quantity = '$slTrongKho' WHERE product_id = '$cart_product_id'";
			$this -> do_sql($sql);
			return true;
		}
		// hàm để cập nhập lại số lượng khi bị xoá sản phẩm
		public function updateQuantityDelelte($id, $quantityUpdate){
			$sql = "UPDATE products SET product_quantity = '$quantityUpdate' WHERE product_id = '$id'";
			$this->do_sql($sql);
			return true;
		}

		// Ham lay sl Cart de xoa
		public function getQuantityToDelete($id){
			$sql = "SELECT cart_quantity FROM carts WHERE cart_id = '$id'";
			$result = $this->get_row($sql);
			return $result['cart_quantity'];
		}
		//Ham lay ID san pham de update
		public function getCart_product_Id($id){
			$sql = "SELECT cart_product_id FROM carts WHERE cart_id = '$id'";
			$result = $this->get_row($sql);
			return $result['cart_product_id'];
		}
		//Ham lay sl product de + voi sl cart roi update;
		public function getQuantityProduct($cart_product_id){
			$sql = "SELECT product_quantity FROM products WHERE product_id = '$cart_product_id'";
			$result = $this->get_row($sql);
			return $result['product_quantity'];
		}
	}
 ?>