<?php 

	/**
	 * 
	 */
	class login_model extends DB
	{
		
		public function login($username,$password){
			$sql = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password' ";
			return mysqli_query($this->conn, $sql);
		}

	}

 ?>