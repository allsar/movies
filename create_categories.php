<?php
if (isset($_POST['create']) && $_POST['create']) {
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $name = $_POST['name'];
        $db = new mysqli('localhost', 'root', '', 'movies');
        $db->query("insert into categories (name) values ('$name') ");
        if ($db->error){
            die($db->error);
        }
        header('Location: /index.php');
    } else {
        die('Name is required');
    }
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
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row m-5">
        <form action="/create_categories.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="create" value="1">
            <div class="form-group">
                <label for="firstname">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

</body>

</html>
