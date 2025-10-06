<?php
$pwd = "Saba";
$hashpwd=password_hash($pwd, PASSWORD_BCRYPT,['cost'=>12]);


$pwsLogin="Saba";
if(password_verify($pwsLogin,$hashpwd)){
    echo "Password is valid!";
}else{
    echo "Invalid password.";
}
?>