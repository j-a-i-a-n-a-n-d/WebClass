<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
        if (isset($_FILES['file']) && isset($_POST['submit'])) {
            echo "<pre>";
            print_r($_FILES['file']);
            echo "</pre>";
            $name = $_FILES['file']['name'];
            $size = $_FILES['file']['size'];
            $type = $_FILES['file']['type'];
            $tmp_name = $_FILES['file']['tmp_name'];
            $error = $_FILES['file']['error'];
            move_uploaded_file($tmp_name, "uploads/$name");
            echo "File uploaded successfully";
            //move_uploaded_file($tempname, $destination);
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"
            enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit" name="submit">UPLOAD</button>
        </form>
    </body>

</html>