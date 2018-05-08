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
 $country = $_POST["country"];
}

function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
    
$majors = array("CS", "WDD", "CIT", "CE", "ART");
?>
   
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
   Name: <input type="text" name="name"><br>
   E-mail: <input type="text" name="email"><br>
   Major:<br/>
    <?php
    foreach ($majors as $major){
        echo "<input type=\"radio\" name=\"major\" value=\"$major\">$major";
    }
    ?>
   Comments:<br/>
   <textarea name="comment" rows="10" cols="50"></textarea><br/>
    <input type="checkbox" name="country[]" value="NorthAmerica">North America<br>
    <input type="checkbox" name="country[]" value="SouthAmerica">South America<br>
    <input type="checkbox" name="country[]" value="Eruope">Eruope<br>
    <input type="checkbox" name="country[]" value="Asia">Asia<br>
    <input type="checkbox" name="country[]" value="Australia">Australia<br>
    <input type="checkbox" name="country[]" value="Africa">Africa<br>
    <input type="checkbox" name="country[]" value="Antartica">Antartica<br>

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
foreach ($country as $place)
{
    echo $place;
    echo "<br>";
}
?>
</body>
</html>