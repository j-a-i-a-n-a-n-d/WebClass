<html>

    <head>
        <title>SQL Connection</title>
    </head>

    <body bgcolor="cyan">
        <h1>SQL Connection Demo</h1>
        <form action="connect.php" method="POST">
            <label for="user">Username:</label><br>
            <input type="text" id="name" name="name" required><br><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br><br>

            <label for="phone">Phone:</label><br>
            <input type="text" id="phone" name="phone" required><br><br><br>

            <label for="bloodgroup">Blood Group : </label><br>
            <input type="text" id="bloodgroup" name="bloodgroup" required><br><br><br>

            <input type="submit" id="submit" value="Submit">
    </body>

</html>

<!--
<?php
/*$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();*/
/*
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
*/
?>
-->