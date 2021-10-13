<?php 
	class login extends controller
	{
		public $login_model;
		function __construct()
		{
			$this->login_model = $this->model("login_model");
		}
		public function product(){
			$this->viewadmin("login",[]);
		}
		public function login(){

	 		$result_mess = false;

	 		if (isset($_POST["submit"])) {
	 			$username = $_POST['username'];
	 			$password_input = $_POST['password'];
	 			

	 			if(empty($_POST["username"]) || empty($_POST["password"])) {
	 				$this->viewadmin("login",[
	 					"result" => $result_mess,
	 				]);
	 			}
	 			$result = $this->login_model->login($username);
	 			
	 			
	 				if (mysqli_num_rows($result)) {
		 				while($row = mysqli_fetch_array($result)){
		 					$id = $row["id_account"];
		 					$username = $row["username"];
		 					$password = $row["password"];
		 					$rollDB = $row["roll"];
		 				}
		 				if (password_verify($password_input, $password)) {
		 					if ($rollDB == "user") {
								$_SESSION["id"] = $id;
								if (!empty($_POST["remeber"])) {
									setcookie("id", "username", time()+3600, "/", "", 0);
								}
								header("Location: http://localhost/login-project/trangchu");
							}else if($rollDB == "admin"){
								$_SESSION["id"] = $id;
								$_SESSION["username"] = $username;
								if (!empty($_POST["remeber"])) {
									setcookie("id", "username", time()+3600, "/", "", 0);
								}
								
								header("Location: http://localhost/login-project/home");
							}
		 				}else{
		 					$this->viewadmin("login",[
		 						"result" => $result_mess,
							]);
		 				}
		 			}else{
	 				$this->viewadmin("login",[
	 					"result" => $result_mess,
				 	]);
	 			}
	 		}
		}	
		public function logout(){
			session_destroy();
			unset($_SESSION['username']);
			setcookie("username", "", time()-3600);
			header("Location: http://localhost/login-project/login");   
		}
	}

?>