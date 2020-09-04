<?php
    class WatchModel extends Database {
       
       public function Get10Product(){
           $sql = "SELECT * FROM products WHERE type=1 limit 10";
           return $this->do_sql($sql);
       }
       public function GetSlider(){
            $sql = "SELECT * FROM sliders ORDER BY slider_id LIMIT 5";
            return $this->do_sql($sql);
       }
       public function GetAllProduct(){
           $sql = "SELECT * FROM products WHERE type=1";
           return $this->do_sql($sql);
       }
       public function GetNewProduct (){
           $sql = "SELECT * FROM products WHERE type=1 ORDER BY create_day DESC LIMIT 8";
           return $this->do_sql($sql);
       }
      public function GetTop4Product(){
           $sql = "SELECT * FROM products WHERE type=1 ORDER BY create_day DESC LIMIT 4";
           return $this->do_sql($sql);
      }
       public function GetProductCate (){
        $sql = "SELECT * FROM products WHERE type=1 LIMIT 9";
        return $this->do_sql($sql);
      }
      // Get new accesories
      // public function GetAccessories(){
      //   // lấy ds 8 sp mới nhất
      //   $sql = "SELECT * FROM accessories ORDER BY create_day DESC LIMIT 8";
      //   return $this->do_sql($sql);
      // }
      //get detail product
      public function GetProductDetail_id($id){
        $sql = "SELECT * FROM products WHERE product_id = '$id'";
        return $this->get_row($sql);
      }
      //Get detail Accessories
      // public function GetAccessoriesDetail_id($id){
      //   $sql = "SELECT * FROM accessories WHERE accessory_id = '$id'";
      //   return $this->get_row($sql);
      // }
      public function GetPhukien(){
        $sql = "SELECT * FROM products WHERE type = 2";
        return $this->do_sql($sql);
      }
     // Get sản phẩm ra để kiểm tra và tăng số lượng sản phẩm lên.
      
    }
    
?>