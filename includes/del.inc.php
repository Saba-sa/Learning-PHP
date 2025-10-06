<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=htmlspecialchars($_POST["username"] );
    $pwd=htmlspecialchars($_POST["pwd"]);
     try{
        require_once 'dbh.inc.php';
        $query = "SELECT pwd FROM users WHERE username = :username;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($user && password_verify($pwd, $user['pwd'])) {
            $deleteQuery = "DELETE FROM users WHERE username = :username;";
            $deleteStmt = $pdo->prepare($deleteQuery);
            $deleteStmt->bindParam(':username', $username);
            $deleteStmt->execute();
            header('Location: ../index.php');
            exit();
        } else {
            echo "❌ Invalid username or password.";
        }

          
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