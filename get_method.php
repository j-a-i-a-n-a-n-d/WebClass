<html>

    <head>
        <title>GET Method</title>
    </head>

    <body>
        <h1> this is a php program </h1>
        <form action="<?php $_PHP_SELF ?>" method="get">
            <input type="text" name="name" placeholder="Enter your name">
            <input type="submit" value="submit">
        </form>
    </body>


</html>
<?php
echo "Hello World";

if (isset($_GET['name'])) {
    echo "<br> my name is " . $_GET['name'];
    exit();
}
?>