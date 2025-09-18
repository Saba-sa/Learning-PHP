<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
//$fruits=array("Mango","Apple","Banana");
// $fruits=["Mango","Apple","Banana"];

$fruits=["Mango"=>"fruit","Apple"=>"fruit","Banana"=>"fruit"];
// unset($fruits["Mango"]);
//adding in associative array
// array_splice($fruits, 0, 2, ["fruit" => "peach"]);
//safer way to add items to associative array
$replacemnts=["onion" => "vegitable"];
// $fruits=array_merge($fruits,$replacemnts);
//or
$fruits=array_splice($fruits,0,1,true)+$replacemnts+array_splice($fruits,1,null,true);
$fruits["grape"]="fruit";

print_r($fruits);
 
?>

</body>

</html>