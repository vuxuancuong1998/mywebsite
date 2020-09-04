<?php
	/**
	 *  
	 */
	class Accessory extends Controller
	{
		public function index (){
			$watch = $this->model("WatchModel");
			$accessory = $watch->GetPhukien();
			$this->view("MaterLayout",[
				"page" => "Accessory",
				"accessory" => $accessory
			]);
		}		
		public function Accessories_detail($id){
			$watch = $this -> model("WatchModel");

			$product_detail = $watch -> GetAccessoriesDetail_id($id);

			$this -> view("MaterLayout",[
				"page" => "Product_detail",
				"id" => $id,
				"product_detail" => $product_detail
			]);

		}
	}

?>