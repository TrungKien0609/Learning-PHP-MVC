<?php 
  class Database{
      protected $conn;
      protected $server = "localhost";
      protected $username = "root";
      protected $password = "";
      protected $dbname = "learnmvc";
      function __construct()
      {
          $this->conn = mysqli_connect($this->server,$this->username,$this->password,$this->dbname);
          mysqli_query($this->conn,"SET NAMES 'utf8'");
      }
  }
?>