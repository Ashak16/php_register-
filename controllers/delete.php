<?php

require('../models/Connection.php');
$config = require('../config.php');
$dbconnection = new Connection($config);
$conn = $dbconnection->getDbconnection();


session_start();

$id = $_GET['name'];

$sql = "DELETE FROM registerdb WHERE Name='$id'";

$result = $conn->query($sql);

if ($result == true) {
    echo "Record deleted successfully";
 
    // header("Location:../view/partials/actions.php");
    exit();
} else {
    echo "Record not deleted successfully";
}
