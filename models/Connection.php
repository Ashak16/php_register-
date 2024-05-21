<?php
  class Connection{
    private $conn;

    public function __construct($config){
       $this->conn = mysqli_connect(
        $config['host'],
        $config['username'],
        $config['password'],
        $config['database']
       );
       if(!$this->conn)
       {
          throw new Exception("Connection failed".mysqli_connect_error());
       }
    }

     public function getDbconnection(){
         return $this->conn;
     }

  }

  $config=require('../config.php');
  $dbconnection= new Connection($config);
  $connectfunction= $dbconnection->getDbconnection();


?>