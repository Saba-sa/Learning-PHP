<?php
session_start();

// unset($_SESSION["username"]); 
// session_unset(); // Unset all session variables
// session_destroy(); // Destroy the session
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello
        <?php echo $_SESSION["username"] ?> to another page
    </h1>
</body>

</html>