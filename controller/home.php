<?php
    class home extends controller{
        public $home_model;
		
		function __construct()
	 	{
	 		$this->home_model = $this->model("home_model");
	 		
	 	}

		public function product(){
			$this->viewadmin("masterlayout",[
				"page"=>"user/index",
				"user"=>$this->home_model->get(),
			]);
		} 
		public function view_insert(){
			$this->viewadmin("masterlayout",[
				"page"=>"user/insert",
				
			]);
		} 
		public function insert(){
			$result_mess = false;
			if(isset($_POST["submit"])){
				
				if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['address'])) {
					$this->viewadmin("masterlayout",[
						"page"=>"user/insert",
						"result"=>$result_mess,
					]);
				}else{
						$username = $_POST["username"];
						$password = $_POST["password"];
						$fullname = $_POST["fullname"];
						$email = $_POST["email"];
						$phone = $_POST["phone"];
						$address = $_POST["address"];
						$roll = $_POST["roll"];
						$password = password_hash($password, PASSWORD_DEFAULT);
						$result2 = $this->home_model->max($username);
						if (mysqli_num_rows($result2)>0) {
							$this->viewadmin("masterlayout",[
								"page"=>"user/insert",
								"result"=>$result_mess,
								"max"=>$result2,
							]);
						}else{
							$kq = $this->home_model->insert($username, $password, $fullname, $email, $phone, $address, $roll);
							$this->viewadmin("masterlayout",[
								"page"=>"user/insert",
								"result"=>$kq,
							]);
						}
				}
			}
		}
		public function delete($id){
			$kq = $this->home_model->delete($id);
			$this->viewadmin("masterlayout",[
				"page"=>"user/index",
				"user"=>$this->home_model->get(),
				"result"=>$kq,
			]);
		}

    }

?>