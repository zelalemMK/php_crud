<?php

    //including files for repeated code
    require_once('reusable_code.php');
    require_once("navigation.php");



    //sql statement
    $sql = "SELECT * FROM content";
    //checking if the statement works
    if ($result = mysqli_query($conn, $sql)){

        //seeing if there are results and creating the html to be displayed.
        if(mysqli_num_rows($result) > 0){
            //header titles
            echo "<table>";
                echo "<tr>";
                    echo "<th><a href='id.php'>ID</a></th>";
                    echo "<th><a href='content.php'> Content</a> </th>";
                    echo "<th>Delete Content</th>";
                echo "</tr>";

                //going thru the results array and displaying the content to be displayed. 
                while ($row = mysqli_fetch_array($result)){

                    echo "<tr>";
                        echo "<td>" . "<a href=" . "updateContent.php?page=" . $row['id'] . ">" . $row['id'] . "</a>" . "</td>";
                        echo "<td>" . "<a href=" . "updateContent.php?page=" . $row['id'] . ">" . $row['contentData'] . "</a>" . "</td>";
                        echo "<td>" . "<a href=" . "deleteContent.php?page=" . $row['id'] . ">" . "Delete Content" . "</a>" . "</td>";
                    echo "</tr>";
                }
            echo "</table>";

                
        }
    }
    else {
        echo "Error: $sql is not working.";
    }

?>