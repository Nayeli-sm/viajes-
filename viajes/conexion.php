<?php



    
    $conex = mysqli_connect(hostname: "localhost", port:3306, username: "root", password: "123", database: "registro");
  // Check connection
if (!$conex) {
    die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

?>