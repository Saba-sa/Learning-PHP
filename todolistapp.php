<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])  ?>" method="post">
        <input type="text" name="task" id="task">
        <button>Add</button>
    </form>

    <?php 
$tasks=["Buy milk", "Do homework"];

if (isset($_GET['delete'])) {
    $deleteIndex = $_GET['delete'];
    unset($tasks[$deleteIndex]);          
    $tasks = array_values($tasks);       
}
if(isset($_GET["edit"])){
        $editIndex = $_GET["edit"];
        $oldTask = $tasks[$editIndex];
        //After clicking Update, the page reloads, and PHP doesn’t automatically “remember” which item you picked. That’s why we send the index back inside the form:
        echo "<form method='post'>
        <input type='hidden' name='editIndex' value='$editIndex'>
        <input type='text' name='editedTask' value='" . htmlspecialchars($oldTask) . "'>
        <button>Update</button>
      </form>";

}

if($_SERVER["REQUEST_METHOD"]=="POST"){

        $newTask = filter_input(INPUT_POST, "task", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        if (empty($newTask)) {
            echo "<p>Task cannot be empty</p>";
        }
        else{
            array_unshift($tasks, $newTask);
        }
        
        
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["editedTask"])) {
        $editedTask = filter_input(INPUT_POST, "editedTask", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $editIndex = $_POST["editIndex"];
        $tasks[$editIndex] = $editedTask;
    }
    
    echo "<ul>";
    foreach($tasks as $index => $task){
        echo "<li>$task <a href='?delete=$index'>Del</a>  <a href='?edit=$index'>Edit</a></li>";
 
    }           
    echo "</ul>";
 

    ?>
</body>

</html>