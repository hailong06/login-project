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
    }

?>