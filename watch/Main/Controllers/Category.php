<?php
class Category extends Controller {

	function index() {
		$categorymodel = $this->model("CategoriesModel");
		$watch = $this->model("WatchModel");
		$category = $categorymodel->GetCategories();
		$productCate = $watch->GetProductCate();
		$this->view("MaterLayout", [
			"page" => "Category",
			"category" => $category,
			"productCate" => $productCate,
		]);
	}
	public function Showcategory ($id){
		$watch = $this->model("CategoriesModel");
		$category  = $watch->GetCategories();
		$categoryID = $watch->GetCategory_id($id);
		$this -> view("MaterLayout",[
			"page" => "Category",
			"category" => $category,
			"productCate" => $categoryID
		]);
	}

}
?>