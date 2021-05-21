<?php 
  class Controler{
      public function model($model){
          require_once "./mvc/Models/".$model.".php";
          return new $model;
          // $model = new $model()
          // return $model
      }
      public function view(){
        
      }
  }
?>