<?php

$db = new mysqli('localhost', 'root', '', 'movies');
$categories = $db->query(query: 'select id, name from categories order by id desc limit 10')->fetch_all(MYSQLI_ASSOC);
if (isset($_POST['delete']) && $_POST['delete']) {
    $id = $_POST['id'];
    $db->query("delete from categories where id=$id");
    if ($db->error) {
        echo $db->error;
        die();
    }

    header("Location: /index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        td {
            text-align: center;
            padding: 5px;
        }
    </style>
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row m-5">
        <div class="create-btn">
            <a class="btn btn-success" href="./create.php">Create</a>
        </div>
        <table class="table-bordered">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($categories as $category) {
                ?>
                <tr>
                    <th scope="row"><?php echo $category['id'] ?></th>
                    <td><?= $category['name'] ?></td>
                    <td>
                        <a href="view_categories.php" class="btn btn-primary">View</a>
                        <a href="edit_categories.php" class="btn btn-secondary">Edit</a>
                        <form action="index.php" method="post" class="d-inline-block">
                            <input type="hidden" name="id" value="<?= $category['id'] ?>">
                            <input type="hidden" name="delete" value="1">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
