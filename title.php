<?php

//including files for repeated code
require_once('reusable_code.php');
require_once("navigation.php");



//sql statement
$sql = "SELECT * FROM content ORDER BY title ASC";
//checking if the statement works
if ($result = mysqli_query($conn, $sql)) {

    //seeing if there are results and creating the html to be displayed.
    if (mysqli_num_rows($result) > 0) {
        //header titles
        echo "<table>";
        echo "<tr>";
        echo "<th><a href='id.php'>ID</a></th>";
        echo "<th><a href='title.php'>Title</a></th>";
        echo "<th><a href='metakeyword.php'> Meta Keywords</a> </th>";
        echo "<th><a href='metadescription.php'> Meta Description </a></th>";
        echo "<th><a href='content.php'> Content</a> </th>";
        echo "</tr>";

        //going thru the results array and displaying the content to be displayed. 
        while ($row = mysqli_fetch_array($result)) {

            echo "<tr>";
            echo "<td>" . "<a href=" . "updateContent.php?page=" . $row['id'] . ">" . $row['id'] . "</a>" . "</td>";
            echo "<td>" . "<a href=" . "updateContent.php?page=" . $row['id'] . ">" . $row['title'] . "</a>" . "</td>";
            echo "<td>" . "<a href=" . "updateContent.php?page=" . $row['id'] . ">" . $row['metaKeyword'] . "</a>" . "</td>";
            echo "<td>" . "<a href=" . "updateContent.php?page=" . $row['id'] . ">" . $row['metaDescription'] . "</a>" . "</td>";
            echo "<td>" . "<a href=" . "updateContent.php?page=" . $row['id'] . ">" . $row['contentData'] . "</a>" . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
} else {
    echo "Error: $sql is not working.";
}
