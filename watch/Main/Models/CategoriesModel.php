<?php 
	/**
	 * 
	 */
	class CategoriesModel extends Database
	{
		
		public function GetCategories(){
                $sql = "SELECT * FROM categories";
                return $this->do_sql($sql);
       }
    
     public function GetCategory_id($id){
        $sql = "SELECT * FROM products INNER JOIN categories ON product_category_id = category_id WHERE category_id
         = '$id' AND type = 1  ORDER BY categories.create_day DESC";
        // $sql = "SELECT product_id, product_name, product_price FROM categorys INNER JOIN products ON categorys.category_id = products.product_category_id WHERE id = '$id' ORDER BY product_id DESC";
        return $this->do_sql($sql);
      }
	}

 ?>