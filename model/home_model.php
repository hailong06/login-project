<?php
    class home_model extends DB{
        public function get(){
			$sql = "SELECT *FROM tbl_user";
			return mysqli_query($this->conn, $sql);
		}
		public function insert($username, $password, $fullname, $email, $phone, $address, $roll){
			$sql = "INSERT INTO `tbl_user`(`username`, `password`, `fullname`, `email`, `phone`, `address`, `roll`) VALUES ('$username','$password','$fullname','$email','$phone','$address','$roll')";
			$result = false;
			if(mysqli_query($this->conn, $sql)){
				$result = true;
			}
			return json_encode($result);
		}
		public function max($username){
			$sql = "SELECT *FROM tbl_user where username = '$username' ";
			return mysqli_query($this->conn, $sql);
		}
		public function delete($id){
			$sql = "DELETE FROM `tbl_user` WHERE id_account = '$id'";
			$result = false;
			if (mysqli_query($this->conn,$sql)) {
				$result = true;
			}
			return json_encode($result);
		}
    }

?>