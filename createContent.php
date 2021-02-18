<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Content</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <!--  including link to the navigation file  -->
        <?php require_once("navigation.php");
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
        ?>
        <article>
        
            <!-- Creating the form for data input from the user -->
            <form name="myForm" method="post" action="insertContentInToDB.php">
                <p>Enter Title
                    <input type="text" name="title" id='title'>
                </p>
                <p>Enter Keyword
                    <input type="text" name="metaKeyWord" id='metaKeyWord'>
                </p>
                <p>Enter Description
                    <input type="text" name="metaDescription" id='metaDescription'>
                </p>
                <p>Enter Content
                    <input type="text" name="contentData" id='contentData'>
                </p>
                <input type="submit">

            </form>
        </article>
    </section>
</body>

</html>