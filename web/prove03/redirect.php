<?php
if (isset($_POST['submit'])) {
    $_SESSION["Address"] = test_input($_POST["Address"]);
    $_SESSION["City"] = test_input($_POST["City"]);
    $_SESSION["State"] = test_input($_POST["State"]);
    $_SESSION["Zip"] = test_input($_POST["Zip"]);
} 

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

header('Location: confirmation.php');
?>