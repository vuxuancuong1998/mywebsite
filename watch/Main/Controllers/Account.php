<?php 
    class Account extends Controller {
        public function index (){
            $this->view("MaterLayout",[
                "page" => "Register"
            ]);
        }
        public function VerifyRegister (){
            if(isset($_POST["btnRegister"])){
                $Acount = $this->model("AccountModel");
                $flag = 0;
                $username = trim($_POST["username"]);
                // check username
                if($Acount->checkUsername($username)==false){
                    $flag = 1;
                    echo "<script> alert('Tài khoản đã tồn tại. Vui lòng chọn tài khoản khác!!!') </script>";
                    echo "<script type='text/javascript'>history.go(-1)</script>";
                    exit();
                }
                // check pass
                $password = trim($_POST["password"]);
                $repassword = trim($_POST["repassword"]);
                if($password != $repassword){
                    $flag = 1;
                    echo "<script> alert('Mật khẩu không khớp nhau. Vui lòng nhập lại.') </script>";
                    echo "<script type='text/javascript'> history.go(-1)</script>";
                    exit();
                }
                // check độ dài pass
               if(strlen($password) && strlen($repassword) < 4){
                echo "<script> alert('Mật khẩu quá ngắn. Tối thiểu 5 kí tự.') </script>";
                echo "<script type='text/javascript'> history.go(-1)</script>";
                exit();
               }
                if($flag == 0){
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $name = trim( $_POST["name"] );
                    $email = trim( $_POST["email"] );
                    $address = trim( $_POST["address"] );
                    $phone_number = trim( $_POST["phone_number"] );
                    $create_day = date("Y-m-d");
                    $rule = 0;
                    // insert DB;
                    $Acount -> CreateAccount ($username, $name, $password, $email, $address, $phone_number, $create_day, $rule);
                    echo "<script> alert('Tạo tài khoản thành công');window.location = '/watchstore/'; </script>";
                   
                }
                else echo '<script type = "text/javascript">
                alert("Đăng ký tài khoản thất bại!");window.location ="/watchstore/Main/Account"; 
                </script>';}
        }
    }

?>