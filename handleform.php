<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name = htmlentities($_POST["name"]);
    $number = htmlentities($_POST["number"]);
    $pet = htmlentities($_POST["pet"]);
    $message= htmlentities($_POST["message"]);


    echo $name;
    echo $number;
    echo $pet;
    echo $message;

    header('location:./form.php');

    
}else{
    echo "end";
}



?>