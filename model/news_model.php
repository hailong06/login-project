<?php
    class news_model extends DB{
        public function get(){
			$sql = "SELECT *FROM tbl_product";
			return mysqli_query($this->conn, $sql);
		} 
    }

?>