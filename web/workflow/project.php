<?php 
    session_start();
    if(isset($_SESSION['user']) === FALSE) {
       header('Location: login.php');
    }
?>
<!DOCTYPE>
<html>
    <head>
    
    </head>
<body>
    <div>
        <h1>NAVBAR HERE</h1>
    </div>
    
    <ul class="category">
        <?php 
        $dbUrl = getenv('DATABASE_URL');

        $dbopts = parse_url($dbUrl);
        $dbHost = $dbopts["host"];
        $dbPort = $dbopts["port"];
        $dbUser = $dbopts["user"];
        $dbPassword = $dbopts["pass"];
        $dbName = ltrim($dbopts["path"],'/'); 

        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        $project_id = $_GET['project'];

        $category_query = "SELECT category_id, name FROM category WHERE project_id = $project_id";
        $stmt = $db->prepare($category_query);
        $stmt->execute();
        $categories = $stmt->fetchALL(PDO::FETCH_ASSOC);
        
        //echo '<div id="content">';
        foreach($categories as $category) {
            echo '<li>' . $category["name"];
            
            $category_id = $category["category_id"];
            $task_query = "SELECT * FROM task WHERE category_id = $category_id";
            $task_stmt = $db->prepare($task_query);
            $task_stmt->execute();
            $tasks = $stmt->fetchALL(PDO::FETCH_ASSOC);
            var_dump($tasks);
            if (count($tasks) > 0) {
                echo "<ul>";
                foreach ($tasks as $task) {
                    echo '<li>' . $task["name"] . '</li>';
                }
                echo "</ul>";
            }
            echo "</li>";
        }
        
        ?>
    </ul>
</body>
</html>