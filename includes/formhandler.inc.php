<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=htmlspecialchars($_POST["username"] );
    $pwd=htmlspecialchars($_POST["pwd"]);
    $email=htmlspecialchars($_POST["email"]);
    try{
        require_once 'dbh.inc.php';
        $query = "INSERT INTO users (username, pwd, email) VALUES (?,?,?);";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $pwd, $email]);
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