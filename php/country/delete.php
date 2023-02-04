<?php
require_once '../DB.php';
$db = new DB();
$conn = $db->getDB();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['id']) && $_POST['id']) {
        $id = $_POST['id'];
        $conn->query("delete from country where id = '$id'");
        if ($conn->error) {
            echo $conn->error;
        } else {
            header('Location: /country.php');
        }
    }
}