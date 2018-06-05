<?php 
  require_once("dbConnet.php");

  $db = get_db();

  if(isset($db)) {
    die("DB Connection was not set");
  }

  $courseId = $_GET("course_id");
?>
<!DOCTYPE>
<html>
  <body>
    
  </body>
</html>