<?php
include 'Database.php';
include 'user.php';
include 'session.php';

$database = new Database();
$db = $database->getConnection();

$user = new User($db);
$user->createUser($_POST['matric'], $_POST['name'], $_POST['password'], $_POST['role']);

header("Location: show_table.php");
exit();
?>