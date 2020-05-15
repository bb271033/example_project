<?php

class Database{
	private $host = "brns.com";
	private $user = "brns_test";
	private $passwd = "Boom2710";
	private $database = "brns_test";
	public $conn;
	
	public function my_sql_connect(){
		$this->conn = new mysqli($this->host, $this->user, $this->passwd, $this->database);
		/*
		if($this->conn){
			$this->conn->set_charset("utf8");
		}
		*/
		return $this->conn;
	}
	public function my_sql_query($sql){
		$conn = $this->my_sql_connect();
		$objQuery = $conn->query($sql);
		
		$objShow = $objQuery->fetch_object();
		return $objShow;
	}
}

$database = new Database();
?>