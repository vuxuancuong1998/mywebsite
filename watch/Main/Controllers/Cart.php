<?php 
	/**
	 * 
	 */

	class Cart extends Controller
	{

		public function index(){
				$cartModel = $this -> model("CartModel");
				$account = $this->model("AccountModel");
			if (isset($_SESSION['id'])) {
				$listCart = $cartModel->getCart($_SESSION['id']);
				$SumTotal = (int)$cartModel->SumTotal($_SESSION['id']);
				$userInfor = $account->getAccountDetails($_SESSION['id']);

				$this -> view("MaterLayout",[
				"page" => "Cart",
				"listCart" => $listCart,
				"sumtotal" => $SumTotal,
				"user" =>$userInfor
			]);
			}else{
					echo '<script type = "text/javascript">
                             alert("Giỏ hàng trống!");window.location = "/watchstore/Main/Product";
                            </script>' ;
			}
		}
		public function AddToCart(){
		$cartModel = $this->model("CartModel");
		// $listproduct = $watchModel -> GetNewProduct();
			if (isset($_POST['submitCart']) ) {
				if (isset($_SESSION['id']) ){
				$cart_product_id = $_POST["product_id"];

				$cart_name = $_POST["product_name"];

				$cart_price = $_POST["product_price"];

				$quantity =  $_POST["quantity"];

				$create_day = date("Y-m-d");
				$flag = 1;
				if ($flag == 1) {
					//Kiểm tra có tồn tại sản phẩm hay chưa => Nếu có rồi:
					// - lấy số lượng của sản phẩm cũ và update số lượng sản phẩm lên đồng thời tính tiền cho sản phẩm
					// - Còn chưa có thêm sản phẩm vào
					

					if ($cartModel->CheckToCart($_SESSION['id'], $cart_product_id)) {
						$oldquantity = $cartModel->getQuantity($_SESSION['id'], $cart_product_id);
						$cartModel->UpdateCart($_SESSION['id'],$cart_product_id, $oldquantity, $cart_price, $quantity,$create_day);
						$rs = $cartModel->getQuantityToCheck($cart_product_id);
						$slTrongKho = $rs - $quantity;
					    $cartModel->updateQuantity($cart_product_id, $slTrongKho);

					}else{
					 	
					   	$cartModel->AddToCart($_SESSION["id"],$cart_product_id,$cart_price,$quantity,$create_day);
					   	$rs = $cartModel->getQuantityToCheck($cart_product_id);
						$slTrongKho = $rs - $quantity;
					    $cartModel->updateQuantity($cart_product_id, $slTrongKho);
					
					}
					echo '<script type = "text/javascript">
                             alert("Sản phẩm đã được thêm vào Giỏ Hàng!");window.location = "/watchstore/Main/";
                            </script>'; 
				}
			}else {
					echo '<script type = "text/javascript">
                             alert("Bạn cần phải đăng nhập trước khi mua hàng!");window.location = "/watchstore/Main/";
                            </script>' ;
				}
			}
		
	}
		public function Delete($id){
		//Gọi model
		$cartModel = $this->model("CartModel");

		//Lấy số lượng muốn xoá
		$quantityDeleted = $cartModel->getQuantityToDelete($id);

		//Lấy Id sản phẩm để cập nhập lại số lượng.
		$cart_product_id = $cartModel->getCart_product_Id($id);

		//Lấy số lượng sản phẩm để + với số lượng đã xoá.
		$quantityProduct = $cartModel->getQuantityProduct($cart_product_id);

		//Cộng số lượng đã xoá với số lượng của sản phẩm
		$quantityUpdated = $quantityDeleted + $quantityProduct;

		// Cập nhập lại số lượng sau khi xoá trong bảng product.
		$Updated =  $cartModel->updateQuantityDelelte($cart_product_id, $quantityUpdated);

		


		// xoá sản phẩm
		$result = $cartModel->DeleteCart($id);
		if ($result) {
			echo '<script type = "text/javascript">window.location = "/watchstore/Main/Cart/";</script>' ;
		}
		}

	}

 ?>