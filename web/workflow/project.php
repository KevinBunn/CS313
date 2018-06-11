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

    $project_id = $_GET['project'];
?>
<!DOCTYPE>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script type="text/javascript" src="projectView.js" defer></script>
    </head>
<body>
    <div class="navbar">
        <div>Navbar</div>
        <div id="logout-button"><a href="logout.php">logout</a></div>
    </div>
    <div class="content">
      <?php 
        $projectQuery = "SELECT name FROM project WHERE project_id = $project_id";
        $stmt = $db->prepare($projectQuery);
        $stmt->execute();
        $name = $stmt->fetchALL(PDO::FETCH_ASSOC);
        
        echo '<h1 id="project-page-title">' . $name[0]["name"] . '</h1>';
        
      ?>
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
                echo '<div class="task-header-row"><div class="task-column-header">Name</div><div class="task-column-header">Status</div><div class="task-column-header">Priority</div><div class="task-column-header">Severity</div></div>';
                echo '<div class="category-content">';
                foreach ($tasks as $task) {
                    echo '<div class="task"><div class="task-content"><div class="task-cell task-name">' . $task["name"] . '</div><div class="task-cell task-status">' .  $task["status"] . '</div><div class="task-cell task-priority">' . $task["priority"] . '</div><div style="border-right: 0px" class="task-cell task-severity">' . $task["severity"] . '</div></div></div>';
                }
                echo "</div>";
            }
            echo "</div>";
        }
        
        echo '<div class="category"><a id="add-category" class="category-title" href="#"><span>Add New Category...</span></a></div>';
        
        ?>
      </div>
    </div>
</body>
</html>