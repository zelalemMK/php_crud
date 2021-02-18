<?php
    //error debuging 
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    //creating varaibles for the connections
    $serverName = "localhost:3306";
    $userName = "root";
    $password = "\$uperNorth99M";
    $dbname = "contacts";

    
    //starting connection with database
    $conn = new mysqli($serverName, $userName, $password, $dbname);

    //test connection

    if ($conn->connect_error) {
        die("Connection failed." . $conn->connect_error);
    }

?>





