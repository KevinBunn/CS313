<?php 
    session_start();
    if(!isset($_SESSION['user'])
       header('Location: login.php');
?>

<html>
<body>
    <h1>dashboard for <?php echo $_SESSION['user'] ?></h1>
</body>
</html>