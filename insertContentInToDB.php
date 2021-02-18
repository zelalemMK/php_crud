<?php

require_once("navigation.php");
require_once('reusable_code.php');

// Catch the info from the create form
//render the data to the screen as a test
// connect to the database (do manually at first)
// Insert user data into the database. 

$title = htmlspecialchars($_POST['title']); // get the title from the input
$metaKeyWord = htmlspecialchars($_POST['metaKeyWord']);
$metaDescription = htmlspecialchars($_POST['metaDescription']);
$contentData = htmlspecialchars($_POST['contentData']);
 

/*

echo "DEBUG - The title is " . $title . "<br/>";
echo "DEBUG - The metaKeyWord is " . $metaKeyWord . "<br/>";
echo "DEBUG - The metaDescription is " . $metaDescription . "<br/>";
echo "DEBUG - The contentData is " . $contentData . "<br/>";

*/

//Database 

$serverName = "localhost:3306";
$userName = "root";
$password = "\$uperNorth99M";
$dbname = "contacts";

//Create Connection

$conn = new mysqli($serverName, $userName, $password, $dbname);

//test connection

if($conn->connect_error){
    die("Connection failed." .$conn->connect_error);
}



$sql = "INSERT INTO content(title,metaKeyword,metaDescription,contentData) VALUES ('$title','$metaKeyWord','$metaDescription','$contentData')";


if(mysqli_query($conn,$sql)) {
    echo "New record Created Succesfully!";
}
    else {
        echo "Error" . $sql . mysqli_error($conn);
    }

?>