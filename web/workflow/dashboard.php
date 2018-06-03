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

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<body>
  <div class="navbar">
    <h1>dashboard for
        <?php echo $_SESSION['user']; ?>
    </h1>
    <div id="logout-button"><a href="logout.php">logout</a></div>
    </div>
    <div class="category-row">
  <?php 
    $current_username = $_SESSION['user'];
  
    $stmt = $db->prepare("SELECT p.project_id, name FROM project p INNER JOIN user_to_project ua ON ua.project_id = p.project_id INNER JOIN \"user\" u ON u.user_id = ua.user_id WHERE u.username = '$current_username';");
    $stmt->execute();
    $projects = $stmt->fetchALL(PDO::FETCH_ASSOC);
  
    //var_dump($projects);
    
    foreach ($projects as $project) {
      echo '<div class="category"><a href="project.php?project=' . $project["project_id"] . '">' . $project["name"] . '</a></div>';
    }
    
    echo '<div id="add-project" class="category"><a class="add-project-link" href="#">create new project...</a></div>';
    
  ?>
    </div>
</body>
</html>