<?php 
    session_start();
    if(isset($_SESSION['user']) === FALSE) {
       header('Location: login.php');
    }
?>

<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
<body>
    <h1>dashboard for
        <?php echo $_SESSION['user']; ?>
    </h1>
    <div>
  <?php 
    $dbUrl = getenv('DATABASE_URL');

    $dbopts = parse_url($dbUrl);

    $dbHost = $dbopts["host"];
    $dbPort = $dbopts["port"];
    $dbUser = $dbopts["user"];
    $dbPassword = $dbopts["pass"];
    $dbName = ltrim($dbopts["path"],'/');

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    $current_username = $_SESSION['user'];
  
    $stmt = $db->prepare("SELECT p.project_id, name FROM project p INNER JOIN user_to_project ua ON ua.project_id = p.project_id INNER JOIN \"user\" u ON u.user_id = ua.user_id WHERE u.username = '$current_username';");
    $stmt->execute();
    $projects = $stmt->fetchALL(PDO::FETCH_ASSOC);
  
    //var_dump($projects);
    
    foreach ($projects as $project) {
      echo '<div class="category"><a href="project.php?project=' . $project["project_id"] . '">' . $project["name"] . '</a></div>';
    }
    
  ?>
    </div>
</body>
</html>