<!DOCTYPE HTML>
<html>
<body>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $name = test_input($_POST["name"]);
 $email = test_input($_POST["email"]);
 $major = test_input($_POST["major"]);
 $comment = test_input($_POST["comment"]);
}

function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
?>
   
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
   Name: <input type="text" name="name"><br>
   E-mail: <input type="text" name="email"><br>
   Major:<br/>
   <input type="radio" name="major" value="CS">CS
   <input type="radio" name="major" value="WDD">WDD
   <input type="radio" name="major" value="CIT">CIT
   <input type="radio" name="major" value="CE">CE
   Comments:<br/>
   <textarea name="comment" rows="10" cols="50"></textarea>
<input type="submit">
</form>
    
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo "<a href=\"mailto:$email\">$email</a>";
echo "<br>";
echo $major;
echo "<br>";
echo $comment;
echo "<br>";
?>
</body>
</html>