<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>አፈር </title>

</head>

<body>

    <?php 
        include_once("reusable_code.php");

    $sql = "SELECT * FROM content";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Title</th>";
        echo "<th> Meta Keywords </th>";
        echo "<th> Meta Description </th>";
        echo "<th> Content </th>";
        echo "</tr>";
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            if ($row["contentData"] != "") {
                echo $row['id'] . "<br/> ". $row['title'];
            }
        }
    } else {
        echo "0 results";
    }
    $conn->close();

    ?>
</body>

</html>