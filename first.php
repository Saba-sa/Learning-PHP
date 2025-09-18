<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>

<body>

    <?Php
    $r=6;
    $name = "saba";
    // echo "Hello world".$r,"<br/>";
    // var_dump($r);
    // var_dump($name);

if($r<5){
        print "Number is less then 5";
    }else if($r==5){
        print "Number is 5";
    }else{
        print "Number is greater then 5";
}
    for ($i = 0; $i < 5;$i++){
        echo 'Iam in a loop: $i\n';
    }

function get($name){
      $temp= "hello".$name;
      return $temp;
}


    $i = get("saba");
echo $i;




function addFive(&$num) {
    $num = $num + 5;
    echo "Inside function: $num\n";
}

$number = 10;
addFive($number);

echo "Outside function: $number\n";

?>




</body>

</html>