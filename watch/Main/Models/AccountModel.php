<?php 
    class AccountModel extends Database {
        function CreateAccount ($username, $name, $password, $email, $address, $phone_number, $create_day, $rule=0){
            $sql = "INSERT INTO users (
                username, name, password, email, address, phone_number, create_day, rule)
                VALUES ('$username', '$name', '$password', '$email', '$address', '$phone_number', '$create_day',
                '$rule') ";
           $this->do_sql($sql);
           return TRUE;     
        }
        function checkUsername ($username){
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = $this->do_sql($sql);
            if (mysqli_num_rows($result) <= 0){
                return true;
            }else return false;
        }
        function checkAcccout ($username, $password){
            if(!$this->checkUsername($username)){
                $sql = "SELECT * FROM users WHERE username = '$username'";
                $result = $this->get_row($sql);
                if(password_verify($password, $result["password"])){
                    return true;
                }
                else{ 
                    return false;
                }
            }else return false;
        }

        public function checkRule($username){
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $kq = $this->get_row($sql);
            return $kq["rule"];
        }
        public function getId($username='')
            {
                $sql = "SELECT user_id FROM users WHERE username = '$username'";
                $result = $this->get_row($sql);
                return $result["user_id"];
            }
        public function getAccountDetails($id='')
        {
            # code...
            $sql= "SELECT * FROM users WHERE user_id = '$id'";
            return $this->get_row($sql);
        }
    }

?>