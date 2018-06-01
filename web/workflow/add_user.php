<?php
session_start();

require("dbConnect.php");
$db = get_db();
if (!isset($db)) {
   die("DB Connection was not set");
}

$firstName = filter_input(INPUT_POST, 'first-name', FILTER_SANITIZE_STRING);
$lastName = filter_input(INPUT_POST, 'last-name', FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$passwordConfirm = filter_input(INPUT_POST, 'password-confim', FILTER_SANITIZE_STRING);

if($passwordConfirm != $password) {
    $_SESSION['signup_error'] = "passwords do not match";
    header('Location: login.php');
}

function ($firstName, $lastName, $username, $password) {
    $stmt = $db->prepare("INSERT INTO \"user\" (first_name, last_name, username, password, date_joined) VALUES(:firstname, :lastname, :username, :password, datejoined)");
    $stmt->bindValue(':firstname', $firstName, PDO::PARAM_STR);
    $stmt->bindValue(':lastname', $lastName, PDO::PARAM_STR);
    $stmt->bindValue(':username', $userame, PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, PDO::PARAM_STR);
    $stmt->bindValue(':datejoined', time());
    $stmt->execute();
    $rowsChanged = $stmt->rowCount();
    $stmt->closeCursor();
}

$rowsAffected = insertNewUser($firstName, $lastName, $username, $password);
if ($rowsAffected == 0) {
    $_SESSION['signup_error'] = "passwords do not match";
    header('Location: login.php');
}
else
    header('Location: login.php');
?>