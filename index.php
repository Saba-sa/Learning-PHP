<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Sign up</h2>
    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="User name.....">
        <input type="password" name="pwd" placeholder="User password.....">
        <input type="text" name="email" id="e-mail">
        <button>Signup</button>
    </form>
    <h2>Change form Data</h2>
    <form action="includes/change.inc.php" method="post">
        <input type="text" name="username" placeholder="User name.....">
        <input type="password" name="pwd" placeholder="User password.....">
        <input type="text" name="email" id="e-mail">
        <button>update</button>
    </form>
    <h2>Del Form data</h2>
    <form action="includes/del.inc.php" method="post">
        <input type="text" name="username" placeholder="User name.....">
        <input type="password" name="pwd" placeholder="User password.....">

        <button>Del user</button>
    </form>


</body>

</html>