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

    if (isset($_POST["project-name"])) {
        header('Location: add_project.php');
    }
?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="dashboard.js" defer></script>
  </head>
<body>
  <div class="navbar">
    <h1>dashboard for
        <?php echo $_SESSION['user']; ?>
    </h1>
    <div id="logout-button"><a href="logout.php">logout</a></div>
    </div>
    <div class="project-row">
  <?php 
    $current_username = $_SESSION['user'];
  
    $stmt = $db->prepare("SELECT p.project_id, name FROM project p INNER JOIN user_to_project ua ON ua.project_id = p.project_id INNER JOIN \"user\" u ON u.user_id = ua.user_id WHERE u.username = '$current_username';");
    $stmt->execute();
    $projects = $stmt->fetchALL(PDO::FETCH_ASSOC);
  
    //var_dump($projects);
    
    foreach ($projects as $project) {
      echo '<div class="project"><a href="project.php?project=' . $project["project_id"] . '">' . $project["name"] . '</a></div>';
    }
    
    echo '<div class="project"><a id="add-project" class="add-project-link" href="#"><span>create new project...</span></a></div>';
    
  ?>
    </div>
    <?php
        if (isset($_SESSION['dashboard_error'])) {
            echo "<p>" . $_SESSION['dashboard_error'] . "</p>";
        }
                if (isset($_SESSION['test'])) {
            echo $_SESSION['test'];
        }
    ?>
</body>
</html>