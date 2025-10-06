<?php
require_once "config.php";

// session_start();
// $_SESSION["username"] = "saba ali";
// $_SESSION['login_time'] = time();

// Regenerate session id to prevent fixation attacks
// session_regenerate_id(true);

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
        <?php echo $_SESSION["username"] ?>
    </h1>
</body>

</html>