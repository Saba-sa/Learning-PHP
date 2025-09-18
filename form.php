<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="./handleform.php" method="post">
        <Label for="name">name</Label>
        <input type="text" name="name" id="name">

        <Label for="number">name</Label>
        <input type="number" name="number" id="number">

        <select name="pet" id="pet">
            <option value="cat">Cat</option>
            <option value="dog">Dog</option>
            <option value="none">None</option>
        </select>

        <textarea name="message" id="message" placeholder="message"></textarea>
        <button type="submit">Submit</button>
    </form>

</body>

</html>