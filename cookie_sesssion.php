<?php
session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}

if (!isset($_COOKIE['counter'])) {
    setcookie('counter', 1, time() + 3600);
} else {
    $_COOKIE['counter']++;
    setcookie('counter', $_COOKIE['counter'], time() + 3600);
}
// session_unset();
// session_destroy();
// setcookie('counter', 2, time() - 3600);
//setcookie(name, value, expire, path, domain, secure, httponly);


?>

<!DOCTYPE html>
<html>

    <head>
        <title>Counter</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                text-align: center;
                margin-top: 50px;
            }

            h1 {
                font-size: 24px;
                margin-bottom: 10px;
            }

            p {
                font-size: 18px;
            }
        </style>
    </head>

    <body>
        <h1>Cookie and Session-based Counter</h1>
        <p>Session Counter:
            <?php echo $_SESSION['counter']; ?>
        </p>
        <p>Cookie Counter:
            <?php echo $_COOKIE['counter']; ?>
        </p>
    </body>

</html>