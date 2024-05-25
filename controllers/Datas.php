<?php

require('../models/Connection.php');
$config = require('../config.php');
$dbconnection = new Connection($config);
$conn = $dbconnection->getDbconnection();

session_start();

    $sql = "SELECT * FROM registerdb";
    $result= $conn->query($sql);

    
if ($result-> num_rows > 0) {
    echo "<table border='1'>"; 
    echo "<tr><th>Name</th><th>Email</th><th>Password</th></tr>"; // Table header row
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Name"] ."</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row["userpassword"] . "</td>";
        echo "<td>";
        echo "<button><a href='delete.php?name=". $row["Name"] . "'>Delete</a></button>";
        echo "<button><a href='edit.php?name=". $row['Name'] . "'>Edit</a></button>";
        echo "</td>";
        echo "</tr>";
    }
    
      
    }
    echo "</table>"; 
  