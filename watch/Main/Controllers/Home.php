
<?php 

    
    class Home extends Controller {
        
        
        public function index(){
          #gọi model
          $watch = $this->model("WatchModel");
          $categorymodel = $this->model("CategoriesModel");
          #gọi hàm sql xử lí
          $product = $watch->Get10Product();
          
          $slider = $watch->GetSlider();

          $category = $categorymodel->GetCategories();
          
          $ListProduct = $watch->GetNewProduct();  
         #truyền view
          $this->view("MaterLayout",[
            "page" => "Home",
            "slider" => $slider,
            "product" => $product,
            "category" => $category,
            "ListProduct" => $ListProduct
          ]);
          
        }
        public function Product_Categrories($id){
      $watch = $this -> model("WatchModel");
      $categorymodel = $this -> model("CategoriesModel");
      // Gọi hàm để xử lí Category button (Khi click category sẽ hiển thị tương ứng)
      $listproduct = $categorymodel->GetCategory_id($id);
      // $listproduct = $watch -> GetNewProduct();
      $category = $categorymodel -> GetCategories();

      $product = $watch->Get10Product();

      $this -> view("MaterLayout",[
        "page" => "Home",
        "product" => $product,
        "ListProduct" => $listproduct,
        "category" => $category
      ]);
  }
       
    }
?>