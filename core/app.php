<?php
    class app{

        protected $controller = "home";
        protected $action = "product";
        protected $param = [];

        function __construct(){
            //Xử lí controller
            $arr = $this->UrlProcess();
            if(file_exists("./controller/".$arr[0].".php")){
                $this->controller = $arr[0];
                unset($arr[0]);

            }
            require_once "./controller/".$this->controller.".php";
            $this->controller = new $this->controller;
            //Xu li function
            if (isset($arr[1])) {
                if (method_exists($this->controller, $arr[1])) {
                    $this->action = $arr[1];
                }
                unset($arr[1]);

            }
            //Xu li tham so
            $this->param = $arr?array_values($arr):[];
            call_user_func_array([$this->controller,$this->action], $this->param);
        }

        function UrlProcess(){
            if(isset($_GET["url"])){
                return explode("/", filter_var(trim($_GET["url"],"/")));
                  
            }
        }
    }

?>