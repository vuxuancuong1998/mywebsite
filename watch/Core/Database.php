<?php 
    class Database {
        protected $db;
        private $hostname = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "watchstore";
        public function __construct()
        {
            $this->connect();
        }
        public function connect(){
            $this->db = mysqli_connect ($this->hostname, $this->username, $this->password);
            mysqli_select_db($this->db,$this->dbname);
            mysqli_query($this->db, "SET NAMES 'utf8'");
           
        }
        public function do_sql($sql){
            $this->connect();
            return mysqli_query($this->db,$sql);
        }
        function get_row($sql)
	    {    
            $this->connect();
	        $result = mysqli_query($this->db, $sql);
	        $row = mysqli_fetch_assoc($result);
	        mysqli_free_result($result);
	 
	        if($row){
				return $row;
	        } 
	        return false;
        }
       
     
 
    }

?>