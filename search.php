<?php
 if($_SERVER["REQUEST_METHOD"]=="POST"){
    $usersearch=htmlspecialchars($_POST["usersearch"] );
      try{
        require_once 'includes/dbh.inc.php';
        $query = "select * from comments  where username=:usersearch;" ;
         $stmt = $pdo->prepare($query);
        // $stmt->execute([$username, $pwd, $email]);
        $stmt->bindParam(':usersearch', $usersearch);
 
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $pdo=null;
        $stmt=null;
     }
    catch(PDOException $e){
        die("Connection failed: ".$e->getMessage());
        
    }
}else{
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <h3>search results</h3>
        <?php
    if (empty($result)) {
        echo "<div>";
        echo "<p>There were no results found.</p>";
        echo "</div>";
    }else{
        foreach ($result as $row) {
            echo "<div>";
            echo "<p>user id: " . $row['id'] . "</p>";
            echo "<p>user name: " . $row['username'] . "</p>";
             echo "<p>comment: " . $row['comments'] . "</p>";
            echo "</div>";
        }
    }
    ?>
    </section>
</body>

</html>