<?php
include_once '../DB.php';
$db = new DB();
$conn = $db->getDB();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) && $_POST['name']) {
        $conn->query("insert into genres (name) values ('$_POST[name]')");
        if ($conn->error) {
            echo $conn->error;
        } else {
            header('Location: /genre.php');
        }
    }
}
?>