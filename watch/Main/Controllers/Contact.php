<?php 
	/**
	 * 
	 */
	class Contact extends Controller
	{
		public function index(){
			$watch = $this->model("WatchModel");
			$ProductContact = $watch->GetNewProduct();
			$this->view("MaterLayout",[
				"page" => "Contact",
				"productcontact" => $ProductContact
			]);
		}
	}
 ?>