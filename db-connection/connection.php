<!-- connect to database -->
<?php

$dsn = "mysql:host=localhost; dbname=toywebsite";
$user = "root";
$pass = "";

// web-server literally tries to connect ... 
try {
    $pdoconnect = new PDO($dsn, $user, $pass);
    // echo "CONNECTED!";
   
} catch (PDOException $err) {
    echo $err->getMessage();
}

?>