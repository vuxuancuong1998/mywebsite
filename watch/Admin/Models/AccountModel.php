<?php 

/**
  * 
  */
 class AccountModel extends Database
 {
    function checkUsername ($username){
        $sql = "SELECT * FROM users WHERE username = '$username'";
        $result = $this->do_sql($sql);
        if (mysqli_num_rows($result) <= 0){
            return true;
        }else return false;
    }
    public function GetPassword($id){
        $sql = "SELECT * FROM users WHERE user_id = '$id'";
        $result = $this->get_row($sql);
        return $result["password"];
    }
 	public function changePass($id, $password){
        if ($password != null ) {
            $this->do_sql("UPDATE users SET password = '$password' WHERE user_id = '$id'");

        return true;
        }
    }
    public function getAccount(){
        $sql = "SELECT * FROM users LIMIT 5";
        return $this->do_sql($sql);
    }
  
    public function DeleteAccount($id){
        $sql = "DELETE FROM users WHERE user_id = '$id'";
        $this->do_sql($sql);
        return true;
    }
    public function updateAccount($id,$username, $name, $password, $email, $address, $phone_number, $create_day, $rule = 0){

        if ($username != NULL){$this->do_sql("UPDATE users SET username='$username' WHERE user_id='$id'");}

        if ($name != NULL){$this->do_sql("UPDATE users SET name='$name' WHERE user_id='$id'");}

        if ($password != NULL){$this->do_sql("UPDATE users SET password='$password' WHERE user_id='$id'");}
       
        if ($email != NULL){$this->do_sql("UPDATE users SET email='$email' WHERE user_id='$id'");}
      
        if ($address != NULL){$this->do_sql("UPDATE users SET address='$address' WHERE user_id='$id'");}

        if ($phone_number != NULL){$this->do_sql("UPDATE users SET phone_number='$phone_number' WHERE user_id='$id'");}
               
        if ($create_day != NULL){$this->do_sql("UPDATE users SET create_day='$create_day' WHERE user_id='$id'");}

        return TRUE;
    }
    
    function CreateAccount ($username, $name, $password, $email, $address, $phone_number, $create_day, $rule=0){
        $sql = "INSERT INTO users (
            username, name, password, email, address, phone_number, create_day, rule)
            VALUES ('$username', '$name', '$password', '$email', '$address', '$phone_number', '$create_day',
            '$rule') ";
       $this->do_sql($sql);
       return TRUE;     
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
    public function Account_Id($id){
        $sql = "SELECT * FROM users WHERE user_id = '$id' ";
        return $this->get_row($sql);
    }
    public function getId($username='')
            {
                $sql = "SELECT * FROM users WHERE username = '$username'";
                $result = $this->get_row($sql);
                return $result["user_id"];
            }

    
 } 


 ?>