
<?php
    class news extends controller{
        public $home_model;
		
		function __construct()
	 	{
	 		$this->news_model = $this->model("news_model");
	 		
	 	}

		public function product(){
			$this->viewadmin("masterlayout",[
				"page"=>"news/index",
				"news"=>$this->news_model->get(),
			]);
		} 
		public function view_insert(){
			$this->viewadmin("masterlayout",[
				"page"=>"news/insert",
				
			]);
		} 
		public function insert(){
			$result_mess = false;
			if(isset($_POST["submit"])){
				
				if (empty($_POST['title']) || empty($_POST['price']) || empty($_POST['img']) || empty($_POST['desc']) || empty($_POST['status'])) {
					$this->viewadmin("masterlayout",[
						"page"=>"news/insert",
						"result"=>$result_mess,
					]);
				}else{ 
						$title = $_POST["title"];
						$price = $_POST["price"];
						$type = $_POST["type"];
						$img = $_POST["img"];
						$desc = $_POST["desc"];
						$status = $_POST["status"];
						$kq = $this->news_model->insert($title, $price, $type, $img, $desc, $status);
						$this->viewadmin("masterlayout",[
							"page"=>"news/insert",
							"result"=>$kq,
						]);
					}
				}
				
			}

    	public function delete($id){
			$kq = $this->news_model->delete($id);
			$this->viewadmin("masterlayout",[
				"page"=>"news/index",
				"news"=>$this->news_model->get(),
				"result"=>$kq,
			]);
		}
	}
?>