<?php 
    session_start();
    
?>

<html>
    <head>
        
    </head>
<body>
    <h1>Signup</h1>
    <form action="add_user.php" method="post">
        <label for='first-name'>First Name</label>
        <input type="text" name="first-name"><br>
        <label for='last-name'>Last Name</label>
        <input type="text" name="last-name"><br>
        <label for='username'>Username</label> 
        <input type="text" name="username"><br>
        <label for='password'>Password</label><input type="password" name="password">
        <label for='password-confirm'>Password Confirm</label>
        <input type="password" name="password-confirm">
        <input type="submit">
    </form>
</body>
</html>