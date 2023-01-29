<?php
require_once '../DB.php';
$db = new DB();
$conn = $db->getDB();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['id']) && $_POST['id']) {
        $id = $_POST['id'];
        if (isset($_POST['name']) && $_POST['name']) {
            $name = $_POST['name'];
            $conn->query("update categories set name = '$name' where id = '$id'");
            if ($conn->error) {
                echo $conn->error;
            } else {
                header('Location: /categories.php');
            }
        }
    }
}