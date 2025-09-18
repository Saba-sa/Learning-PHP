<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">

        <input type="number" name="num1" id="num1">
        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <input type="number" name="num2" id="num2">
        <button>calculate result</button>

    </form>
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    $num1=htmlentities($_POST['num1'])
    $num2=htmlentities($_POST['num2'])
    $operator=htmlentities($_POST['operator'])

    }
    <?php
    
    ?>

</body>

</html>