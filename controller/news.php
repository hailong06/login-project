
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
    }

?>