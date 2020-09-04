<?php 
    class Product extends Controller{
        protected $product;
        public function __construct()
        {
            $this -> product = $this -> model("ProductModel","Admin");
        }
        public function index(){
            $listProduct = $this->product->getProduct();
            $this->view("MasterLayout",[
                "page" => "Product",
                "listProduct" => $listProduct
            ],"Admin");
        }
        public function AddProduct()
        {
            if(isset($_POST["btnAdd"]))
            {
                $product_category_id = $_POST["product_category_id"];

                $product_name = trim($_POST["product_name"]); 

                $product_descript = trim($_POST["product_descript"]); 

                $product_url = trim($_FILES['product_url']['name']);

                $product_price = trim($_POST["product_price"]); 

                $product_gender = $_POST["product_gender"];
                
                $product_status = $_POST["product_status"];

                $quantity = $_POST['quantity'];

                $type = $_POST["type"];

                $create_day = date('Y-m-d');
                    
                $flag = 1;
                               
                //Check image
                $product_url = $this->uploadImage($product_url);

                if ($flag==1) {
                    if ( $this->product->CheckProduct($product_category_id, $product_name, $product_url, $product_price, $product_gender, $product_status, $type) ) {
                        // Lấy quantity

                       $oldquantity = $this->product->getQuantityProduct($product_category_id, $product_name, $product_url, $product_price, $product_gender, $product_status, $type);
                      $result = $this->product->UpdateQuantity($product_category_id, $product_name,$oldquantity, $quantity, $product_url, $product_price, $product_gender, $product_status, $type, $create_day);
                    }
                   else{
                    $result = $this->product->AddProduct($product_category_id, $product_name, $product_descript, $quantity, $product_url, $product_price, $product_gender, $product_status, $type, $create_day);
                   }
                   if ($result) {echo '<script type = "text/javascript">
                             alert("Thêm Thành Công!!!");window.location = "/watchstore/Admin/Product";
                            </script>';             
                    }else
                        {
                         echo '<script type = "text/javascript">
                             alert("Thêm thất bại :(");
                            </script>'; 
                           echo "<script type='text/javascript'>history.go(-1)</script>";
                            exit();
                        }
                }
            }
        }



        public function UpdateProduct($id)
        {
            if(isset($_POST['update']))
            {
                $product_category_id = $_POST["product_category_id"];

                $product_name = trim($_POST["product_name"]); 

                $product_descript = trim($_POST["product_descript"]); 

                $product_url = trim($_FILES['product_url']['name']);

                $quantity = $_POST['quantity'];

                $product_price = trim($_POST["product_price"]); 

                $product_gender = $_POST["product_gender"];
                
                $product_status = $_POST["product_status"];

                $type = $_POST["type"];

                $create_day = date('Y-m-d');

                $flag = 1;
                 //Check image
                $product_url = $this->uploadImage($product_url);
            }
             if ($flag==1) 
                {
                    $result = $this->product->UpdateProduct($id,$product_category_id, $product_name, $product_descript,$quantity, $product_url, $product_price, $product_gender, $product_status, $type, $create_day);
                }
                if ($result) 
                    {
                        echo '<script type = "text/javascript">
                             alert("Sửa Thành Công!!!");window.location = "/watchstore/Admin/Product";
                            </script>';             
                    }
                    else
                        {
                         echo '<script type = "text/javascript">
                             alert("Sửa thất bại :(");
                            </script>'; 
                           echo "<script type='text/javascript'>history.go(-1)</script>";
                            exit();
                        }
                    
        }

        public function DeleteProduct($id)
        {
            $result = $this->product->DeleteProduct($id);
            if ($result) {
                echo '<script type = "text/javascript">
                alert("Xoá sản phẩm thành công!");window.location ="/watchstore/Admin/Product"; 
                </script>';
            }
            else echo '<script type = "text/javascript">
                alert("Xoá sản phẩm thất bại!");window.location ="/watchstore/Admin/Product"; 
                </script>';
        }

        public function DetailProduct($id)
        {
            $product_detail = $this->product->DetailProduct($id);
            $this->view("MasterLayout",[
                "page" => "product_detail",
                "product_id" => $product_detail 
            ],"Admin");
        }

    }



?>