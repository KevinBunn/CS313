<?php 
    session_start();
    if(isset($_SESSION['user']) === FALSE) {
       header('Location: login.php');
    }
    require("dbConnect.php");
    $db = get_db();
    if (!isset($db)) {
        die("DB Connection was not set");
    }
?>
<!DOCTYPE>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
<body>
    <div class="navbar">
        <div>Navbar</div>
        <div id="logout-button"><a href="logout.php">logout</a></div>
    </div>
    <div class="content">
      <div class="category-column">
        <?php 
        $project_id = $_GET['project'];

        $category_query = "SELECT category_id, name FROM category WHERE project_id = $project_id";
        $stmt = $db->prepare($category_query);
        $stmt->execute();
        $categories = $stmt->fetchALL(PDO::FETCH_ASSOC);
        
        foreach($categories as $category) {
            echo '<div class="category"><div class="category-title">' . $category["name"] . '</div>';
            
            $category_id = $category["category_id"];
            $task_query = "SELECT * FROM task WHERE category_id = $category_id";
            if (!$task_stmt = $db->prepare($task_query)) {
                echo "prepare failed (" . $db->errno . ") " . $db->error;
            }
            if (!$task_stmt->execute()) {
                echo "Execute failed: (" . $task_stmt->errno . ") " . $task_stmt->error;
            }
            $tasks = $task_stmt->fetchALL(PDO::FETCH_ASSOC);
            if (count($tasks) > 0) {
                echo '<div class="task-content">';
                foreach ($tasks as $task) {
                    echo '<div class="task">' . $task["name"] . '</div>';
                }
                echo "</div>";
            }
            echo "</div>";
        }
        
        ?>
      </div>
    </div>
</body>
</html>