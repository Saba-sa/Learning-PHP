<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars(string: $_SERVER['PHP_SELF']);?>" method="post">

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

    <?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
        $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);

        $operator = filter_input(INPUT_POST,  "operator",   FILTER_SANITIZE_SPECIAL_CHARS);
        $error = false;
        if (empty($num1) || empty($num2) || empty($operator)) {
            echo "<p>Both numbers are required</p>";
            $error = true;
        }
        if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "<p>Both values must be numeric</p>";
            $error = true;
        }

        if (!$error) {
            $value = 0;

            switch ($operator) {
                case "+":
                    $value = $num1 + $num2;
                    break;
                case "-":
                    $value = $num1 - $num2;
                    break;
                case "*":
                    $value = $num1 * $num2;
                    break;
                case "/":
                    $value = $num1 / $num2;
                    break;
                case "%":
                    $value = $num1 % $num2;
                    break;
                default:
                    echo "<p>Invalid operator</p>";
                    break;

            }
            echo "<h1>Result: $value</h1>";


        }
    }
    
    ?>

</body>

</html>