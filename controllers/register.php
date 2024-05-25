
<?php

session_start();
 $db=require('../models/Connection.php');
$config = require('../config.php');
$dbconnection = new Connection($config);
$conn = $dbconnection->getDbconnection();

if(isset($_POST['submit'])){
    $name_input = $_POST['username'];
    $email_input = $_POST['email'];
    $password_input = $_POST['password'];

    $password_input = md5($password_input);
  
 
    $sql = "INSERT INTO  registerdb (Name, Email, userpassword) VALUES ('$name_input','$email_input','$password_input')";
 
    if ($conn->query($sql) === TRUE) {

        error_reporting(E_ALL);
    ini_set("display_errors", 1);
     
        $_SESSION['Name'] = $name_input;
        $_SESSION['Email'] = $email_input;
        $_SESSION['userpassword'] = $password_input;
        header("Location: ../view/partials/login.view.php");
        exit;
    } else {
      
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
