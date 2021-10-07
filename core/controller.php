<?php 
/**
  * 
  */
 class controller 
 {
 	public function model($model){
 		require_once "./model/".$model.".php";
 		return new $model;
 	}
 	public function view($view,$data=[]){
 		require_once "./view/user/".$view.".php";
 	}
 	public function viewadmin($view,$data=[]){
 		require_once "./view/admin/".$view.".php";
 	}
 } 
 ?>