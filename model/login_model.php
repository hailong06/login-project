<?php 

	/**
	 * 
	 */
	class login_model extends DB
	{
		
		public function login($username){
			$sql = "SELECT * FROM tbl_user WHERE username = '$username' limit 1 ";
			return mysqli_query($this->conn, $sql);
		}

	}

 ?>