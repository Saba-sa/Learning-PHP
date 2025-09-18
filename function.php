<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $tr="Hello World";
    echo strlen($tr)."<br>";
    echo strpos($tr,"World"),"<br>";
    echo str_replace("World","new word",$tr),"<br>";
echo strtolower($tr),"<br>";
echo strtoupper($tr),"<br>";    
    echo substr($tr,0,2),"<br>";
    print_r(explode(" ",$tr));

    $num = 543;
    
    echo "<br/>".abs($num)."<br>";
    echo pow(2,3)."<br>";
    echo sqrt(144)."<br>";
    echo max(2,3,4,5,6)."<br>";
    echo min(2,3,4,5,6)."<br>";
    echo round(3.4)."<br>";
    echo ceil(3.4)."<br>";
    echo floor(3.4)."<br>";
    
$arr=[1,2,3,4,5];
    echo "<h1>ARRAY............../h1><br/>";
    echo count($arr)."<br>";
    echo is_array($arr)."<br>";
    echo in_array(3,$arr)."<br>";
print_r(implode(" ",$arr))."<br>";
 print_r(array_merge($arr,[6,7,8]))."<br>";
 
print_r(sort($arr)."<br>");

echo "<h1>dates............../h1><br/>";
echo date("d/m/y")."<br/>";
    $date="2020-01-01:00:00:00";
    // echo date("d/m/y",strtotime($date))."<br/>";
    // echo date("d/m/y",strtotime("+1 week"))."<br/>";
    // echo date("d/m/y",strtotime("+1 month"))."<br/>";
    // echo date("d/m/y",strtotime("+1 year"))."<br/>";
    // echo date("d/m/y",strtotime("+3 day"))."<br/>";
    // echo date("d/m/y",strtotime("+3 week"))."<br/>";
    // echo date("d/m/y",strtotime("+3 month"))."<br/>";
    // echo date("d/m/y",strtotime("+3 year"))."<br/>";
    // echo date("d/m/y",strtotime("-3 day"))."<br/>";
    ?>
    <h1>Function user defined </h1>
    <?php
    //default value 
    // function greet($name="Guest"){
    $gvar = 234;
    function greet(String $name){
        global $gvar;
        //or
        //     echo $GLOBALS['gvar'];

        echo $gvar; 
        return  "Hello $name<br>";
    }
    $test=greet("saba");
    echo $test;

    //static scope
    function myCounter() {
        static $count = 0;
        $count++;
        echo "$count<br>";
        
    }
    myCounter();
    myCounter();
    myCounter();
    ?>
</body>

</html>