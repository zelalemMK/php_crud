<?php 
    require_once('reusable_code.php'); 
    require_once("navigation.php");


    //create local variables to later use with the sql statement. 
    $id = htmlspecialchars($_POST['content_id']);
    $title = htmlspecialchars($_POST['title']);
    $metaKeyWord = htmlspecialchars($_POST['metaKeyWord']);
    $metaDescription = htmlspecialchars($_POST['metaDescription']);
    $contentData = htmlspecialchars($_POST['contentData']);


    //adding to the database.
    $sql = "UPDATE content SET title='$title', metaKeyWord='$metaKeyWord',metaDescription='$metaDescription',contentData='$contentData' WHERE id='$id'";


    //checking if everything went as planned and showing to the client that it worked. 
    if (mysqli_query($conn, $sql)) {
        echo "Record Updated Succesfully!";
    } else {
        echo "Error" . $sql . mysqli_error($conn);
    }

    $conn -> close();

?>