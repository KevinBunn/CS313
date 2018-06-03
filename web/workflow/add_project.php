<?php 
    session_start();

    require("dbConnect.php");
    $db = get_db();
    if (!isset($db)) {
	   die("DB Connection was not set");
    }

    $projectName = filter_input(INPUT_POST, 'project-name', FILTER_SANITIZE_STRING);

    function getAdminId($db) {
        $stmt = $db->prepare("SELECT user_id FROM \"user\" WHERE username = :user");
        $stmt->bindValue(':user', $_SESSION['user'], PDO::PARAM_STR);
        $stmt->execute();
        $rows = $stmt->fetchALL(PDO::FETCH_ASSOC);
        $_SESSION['test'] = var_dump($rows);
        return $rows;
    }

    function insertNewProject($adminId, $projectName, $db) {
        $timestamp = date('Y-m-d G:i:s');
        $stmt = $db->prepare("INSERT INTO project (admin_id, name, date_created, goal_end_date) VALUES(:admin_id, :project_name, :date_created, :goal_end_date)");
        $stmt->bindValue(':admin_id', $admin_id, PDO::PARAM_INT);
        $stmt->bindValue(':project_name', $projectName, PDO::PARAM_STR);
        $stmt->bindValue(':date_created', $timestamp, PDO::PARAM_INT);
        $stmt->bindValue(':goal_end_date', $timestamp, PDO::PARAM_INT);
        
        $stmt->execute();
        $rowsChanged = $stmt->rowCount();
        $stmt->closeCursor();
        return $rowsChanged;
    }

    function linkUserToProject ($adminId, $project_id, $db) {
        $stmt = $db->prepare("INSERT INTO user_to_project (user_id, project_id) VALUES(:user_id,:project_id)");
        $stmt->bindValues(':user_id', $admin_id, PDO::PARAM_INT);
        $stmt->bindValues(':project_id', $project_id, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
    }

    try {
        $adminId = getAdminId($db);
        $rowsAffected = insertNewProject($adminId[0]["user_id"], $projectName, $db);
        linkUserToProject ($adminId[0]["user_id"],$pdo->lastInsertId('project_id_seq'), $db);
        if ($rowsAffected == 0) {
            $_SESSION['dashboard_error'] = "Nothing was inserted";
            header('Location: dashboard.php');
        }
        else
            header('Location: project.php');
    }
    catch (PDOException $err) {
        $_SESSION['dashboard_error'] = $err->getMessage() . ' ' . $err->getCode();
        header('Location: dashboard.php');
    }

?>