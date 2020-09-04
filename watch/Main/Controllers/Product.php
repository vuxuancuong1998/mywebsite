<?php 
	/**
	 * 
	 */
	class Product extends Controller
	{
		public function index(){
			$watch = $this -> model("WatchModel");
			$categorymodel = $this -> model("CategoriesModel");
			$listproduct = $watch -> GetNewProduct();
			$category = $categorymodel -> GetCategories();


			$this -> view("MaterLayout",[
				"page" => "Product",
				"ListProduct" => $listproduct,
				"category" => $category
			]);
		}		
		// Hàm xử lí khi click vào Từng danh mục sản phẩm
		public function Product_Categrories($id){
			$watch = $this -> model("WatchModel");
			$categorymodel = $this -> model("CategoriesModel");
			// Gọi hàm để xử lí Category button (Khi click category sẽ hiển thị tương ứng)
			$listproduct = $categorymodel->GetCategory_id($id);
			// $listproduct = $watch -> GetNewProduct();
			$category = $categorymodel -> GetCategories();


			$this -> view("MaterLayout",[
				"page" => "Product",
				"ListProduct" => $listproduct,
				"category" => $category
			]);
	}

		public function Product_detail($id){
			$watch = $this -> model("WatchModel");

			$product = $watch -> GetTop4Product();


			$product_detail = $watch -> GetProductDetail_id($id);
			$this -> view("MaterLayout",[
				"page" => "Product_detail",
				"product_detail" => $product_detail,
				"product" => $product,
				"id" => $id

			]);
		}
		
	}
	
 ?>