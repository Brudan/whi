<?php

    class mysql_database
    {
        private $username="root";
        private $hostname="localhost";
        private $password="goth123brudan";
        protected $connection;
        protected static $table_name;
        
        /*
		* This constructor creates a connection to the database as soon as the
        * database class is instantiated and selects the necessary database.
		*/
		
		function redirect($url){
			header("Location: ".$url);
			exit();
		}
		
        function __construct()
        {
            $this->connect_to_db();
        }
        
        /*
		* Method to create a database connection.
		*/
        protected function connect_to_db()
        {
            /*
			* connect to the database using the constants imported in config.php
			*/
            $this->connection=mysql_connect($this->hostname, $this->username, $this->password);
            if(!$this->connection)
            {
		/*
		* If the connection fails, stop the script with this message.
		*/
                die("Sorry: There was an error connecting to the database");
            }
            else
            {   /*
		* If the connection succeeds, try to find the info_share database.
		*/
                if(!mysql_selectdb("whi", $this->connection))
                {
                    //If the database is not found, die with this message.
                    die("Sorry: There was an error finding the necessary database");
              }
              
            }
        }

        public function query($sql="")
        {
            if(!$result=mysql_query($sql, $this->connection))
            {
                die("Error:Database Query was unsuccessful; ".mysql_error());
            }
            else
            {
                return $result;
            }
                
        }
  
        
        /*
	* This method extracts records from a query result array.
	* parameter: Query result array.
	* Returns an associative array of a database record 
	*/
        public function extract_record($query_result="")
        {
            if(!empty($query_result))
            {
                $record=mysql_fetch_assoc($query_result);
                return $record;
            }
        }

        public function extract_record2($query_result="")
        {
            if(!empty($query_result))
            {
                $record = mysql_fetch_array($query_result, MYSQL_NUM);
                return $record;
            }
        }
        
        public function build_array($query_result="")
        {
            $r = array();
            $n = mysql_num_rows($query_result);
            for($i=0;$i<$n;$i++)
            {
                $r[$i] = mysql_fetch_assoc($query_result);
            }
            return $r;
        }
        
        public function getRoomData(){
            $r = array();
            $ans = $this->query("SELECT id,name FROM room");
            $n = mysql_num_rows($ans);
            for($i=0;$i<$n;$i++)
            {
                $r[$i] = mysql_fetch_assoc($ans);
            }
            return $r;
        }

        public function getRoomInfo(){
            $r = array();
            $ans = $this->query("SELECT * FROM room");
            $n = mysql_num_rows($ans);
            for($i=0;$i<$n;$i++)
            {
                $r[$i] = mysql_fetch_assoc($ans);
            }
            return $r;
        }

        public function getCustInfo(){
            $r = array();
            $ans = $this->query("SELECT c.id, firstname, lastname, phone, email, name, confirmed, number FROM custinfo c, room r where c.roomid = r.id order by date desc");
            $n = mysql_num_rows($ans);
            for($i=0;$i<$n;$i++)
            {
                $r[$i] = mysql_fetch_assoc($ans);
            }
            return $r;
        }

        public function findCust($id){
            return $this->extract_record($this->query("SELECT r.name,c.confirmed FROM custinfo c, room r where c.id = $id and c.roomid = r.id"));
        }

        public function getRoomNames()
    	{ 
    		return $this->cleanArray($this->build_array($this->query("SELECT name FROM room")));
    	}
			
		public function cleanArray($d_array){
			$c_array = array();
			for($i=0;$i<count($d_array);$i++){
				foreach($d_array[$i] as $key => $value){
					array_push($c_array, $value);
				}
			}
			return $c_array;
		}
		        
        public function total($table="")
        {
            $sql="SELECT count(*) FROM ";
            $sql.=$table;
            $result=$this->query($sql);
            $result=$this->extract_record($result);
            $result=array_shift($result);
            return $result;
        }
		
		function CheckLoginInDB($username,$password)
		{
			$pwdmd5 = md5($password);
			$sql = "Select username from users where username='$username' and password='$pwdmd5'";
			$result = $this->query($sql);
			if(!$result || mysql_num_rows($result) <= 0)
			{
				echo "Error logging in.<br /> The username or password does not match";
				return false;
			}
			return true;
		}
		
    }
    
    $database=new mysql_database();

?>