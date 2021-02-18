<?php 

    //include connection file and navigation
    require_once ('reusable_code.php');
    require_once('navigation.php');

    //get id to delete
    $id = htmlspecialchars($_GET['page']);

    //creating the sql statement variable
    $sql = "DELETE FROM content WHERE id='$id'";

    //error checking if the statement worke
    if (mysqli_query($conn, $sql)) {
        echo "Record Deleted Succesfully";
    } else {
        echo "Error Deleting Record: " . mysqli_error($conn);
    }

    //close connection
    mysqli_close($conn);
   
   ?>
