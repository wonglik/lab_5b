<?php
include 'Database.php';
include 'user.php';
include 'session.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $matric = $_GET['matric'];
    $database = new Database();
    $db = $database->getConnection();
    $user = new User($db);
    $user->deleteUser($matric);
    $db->close();
    header('location:read.php');
}