<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=htmlspecialchars($_POST["username"] );
    $pwd=htmlspecialchars($_POST["pwd"]);
    $email=htmlspecialchars($_POST["email"]);
    try{
        require_once 'dbh.inc.php';
        $hashpwd = password_hash($pwd, PASSWORD_BCRYPT, ['cost' => 12]);

        
        $query = "Update users  Set username=:username,pwd=:pwd,email=:email where username=:username;" ;
        // $query = "Update users  Set username=:username,pwd=:pwd,email=:email where id=2;" ;
         $stmt = $pdo->prepare($query);
        // $stmt->execute([$username, $pwd, $email]);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $hashpwd);
        $stmt->bindParam(':email', $email);
$stmt->execute();
        
        $pdo=null;
        $stmt=null;
        header('Location: ../index.php');
        die();
        //exit();
    }
    catch(PDOException $e){
        die("Connection failed: ".$e->getMessage());
        
    }
}else{
    header("Location: ../index.php");
}