<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Update Content</title>

    </head>

    <body>
        <?php 
            require_once('reusable_code.php'); #database connection
            require_once('navigation.php');
                

            //set up variable quiry string
            $page = htmlspecialchars($_GET['page']);
            echo "Debug $page";


            $sql = "SELECT * FROM content where id='$page'"; //watch for ' and "
            $result = mysqli_query($conn, $sql);

            //creating a result set
            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {

                    //find and display charachter. 
                    //also, create local variables to later use in html.
                    $title = $row["title"];
                    $metaKeyword = $row["metaKeyword"];
                    $metaDescription = $row["metaDescription"];
                    $contentData = $row["contentData"];
                }
            } else {
                echo "0 Results";
            }



            mysqli_close($conn);
        ?>

        <form name="myForm" method="post" action="updatedContentToDB.php">
            <input type="hidden" name="content_id" value="<?php echo $page; ?>">
            <p>Enter Title
                <input type="text" name="title" id='title' value="<?php echo $title; ?>">
            </p>
            <p>Enter Keyword
                <input type="text" name="metaKeyWord" id='metaKeyWord' value="<?php echo $metaKeyword; ?>">
            </p>
            <p>Enter Description
                <input type="text" name="metaDescription" id='metaDescription' value="<?php echo $metaDescription; ?>">
            </p>
            <p>Enter Content
                <input type="text" name="contentData" id='contentData' value="<?php echo $contentData; ?>">
            </p>
            <input type="submit">

        </form>
    </body>
</html>