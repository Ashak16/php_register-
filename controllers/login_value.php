<?php

require('../models/Connection.php');
$config = require('../config.php');
$dbconnection = new Connection($config);
$conn = $dbconnection->getDbconnection();

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $email_login_input = mysqli_real_escape_string($conn, $_POST['email']);
    $password_input = $_POST['password'];

    $password_input = md5('password');


    $sql = "SELECT * FROM registerdb WHERE Email = '$email_login_input' AND userpassword = '$password_input'";
    
    // echo "SQL Query: $sql<br>"; 
    
    $result = $conn->query($sql);

    if ($result === false) {
        die("Query failed: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['Email'] = $email_login_input;
        header("Location: ../view/partials/Home.view.php");

        exit();
    } else {
        echo "Invalid email or password.";
    }

    $conn->close();
}
?>
