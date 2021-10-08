<?php
    class news_model extends DB{
        public function get(){
			$sql = "SELECT *FROM tbl_product";
			return mysqli_query($this->conn, $sql);
		} 
		public function insert($title, $price, $type, $img, $desc, $status){
			$sql = "INSERT INTO `tbl_product`(`title_product`, `price_product`, `id_category_product` ,`img_product`, `desc_category_product`, `status`) VALUES ('$title','$price', '$type','$img','$desc','$status')";
			$result = false;
			if(mysqli_query($this->conn, $sql)){
				$result = true;
			}
			return json_encode($result);
		}
		public function delete($id){
			$sql = "DELETE FROM `tbl_product` WHERE id_product = '$id'";
			$result = false;
			if (mysqli_query($this->conn,$sql)) {
				$result = true;
			}
			return json_encode($result);
		}
		public function edit($id){
			$sql = "SELECT *FROM tbl_product WHERE id_product = '$id'";
			return mysqli_query($this->conn, $sql);
		}
		public function update($id,$title, $price, $type, $img, $desc, $status){
			$sql = "UPDATE `tbl_product` SET `title_product`='$title',`price_product`='$price',`id_category_product`='$type',`img_product`='$img',`desc_category_product`='$desc',`status`='$status' WHERE id_product= $id";
			$result = false;
			if (mysqli_query($this->conn,$sql)) {
				$result = true;
			}
			return json_encode($result);
		}
    }

?>