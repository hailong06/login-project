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
				$username = $_POST["username"];
				$password_input = $_POST["password"];
				
				if ( empty($_POST["username"]) || empty($_POST["password"])) {
					$this->viewadmin("login",[
						"result"=>$result_mess,
					]);
				}else{
					$kq = $this->login_model->login($username,$password_input);
					$usernameDB = '';
					$passwordDB = '';
					$rollDB = '';
					$id = '';
					foreach ($kq as $key => $ketqua) {
						$id = $ketqua["id_account"];
						$usernameDB = $ketqua["username"];
						$passwordDB = $ketqua["password"];
						$rollDB = $ketqua["roll"];
					}
					if ( $username === $usernameDB && $password_input === $passwordDB) {
						
						if ($rollDB == "user") {
							$_SESSION["id"] = $id;
							setcookie("id", "username", time()+3600, "/", "", 0);
							header("Location: http://localhost/login-project/trangchu");
						}else if($rollDB == "admin"){
							$_SESSION["id"] = $id;
							$_SESSION["username"] = $username;
							if (!empty($_POST["remeber"])) {
								setcookie("id", "username", time()+3600, "/", "", 0);
								setcookie("id", "password", time()+3600, "/", "", 0);
							}
							header("Location: http://localhost/login-project/home");
						}
					}else{
						$this->viewadmin("login",[
	 						"result" => $result_mess,
						]);
					}
				}
			}
		}
		public function logout(){
			session_destroy();
			unset($_SESSION['username']);
			header("Location: http://localhost/login-project/login");   
		}
	}

?>