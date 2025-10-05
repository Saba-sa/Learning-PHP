<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=htmlspecialchars($_POST["username"] );
    $pwd=htmlspecialchars($_POST["pwd"]);
     try{
        require_once 'dbh.inc.php';
        $query = "Delete from users  where username=:username and pwd=:pwd;" ;
         $stmt = $pdo->prepare($query);
        // $stmt->execute([$username, $pwd, $email]);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':pwd', $pwd);
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