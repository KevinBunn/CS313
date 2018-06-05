<?php 
  require_once("dbConnet.php");

  $db = get_db();

  if(isset($db)) {
    die("DB Connection was not set");
  }

  $query = "SELECT id, name, number FROM course";

  $stmt = $db->prepare($query);
  $stmt->execute();
  $rows = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE>
<html>
  <title>In Class 06</title>
<body>
  <h1>Courses</h1>
  
  <ul>
    <?php
      foreach ($rows as $row) {
        $name = $row["name"];
        $number = $row["number"];
        $id = $row["id"];
        
        echo "<li><a href='course-details.php?course_id=$id'>$number - $name</li>"
      }
    ?>
  </ul>
</body>
</html>