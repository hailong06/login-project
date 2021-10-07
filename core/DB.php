<?php 

class DB 
{
	
	public $conn;
	protected $sever = "localhost";
	protected $username = "root";
	protected $password = "";
	protected $dbName = "tbl_magazine";
	function __construct(){
		$this->conn = mysqli_connect($this->sever, $this->username, $this->password );
		mysqli_select_db($this->conn, $this->dbName);
		mysqli_query($this->conn, "SET NAMES 'utf8");
	}
} 
?>