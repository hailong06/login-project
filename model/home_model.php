<?php
    class home_model extends DB{
        public function get(){
			$sql = "SELECT *FROM tbl_user";
			return mysqli_query($this->conn, $sql);
		} 
    }

?>