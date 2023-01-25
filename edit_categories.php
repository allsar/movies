<?php
$db = new mysqli('localhost', 'root', '', 'movies');
if (isset($_POST['edit']) && $_POST['edit'])
    if (isset($_POST['name']) && !empty($_POST['name'])) {
    } else {
        die('Name is required');
    }


$id = (int)$_GET['id'];
$categories = $db->query(query: "select id, name from categories where id=$id")->fetch_assoc();
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
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h1>Edit</h1>
            </div>
            <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $categories['id'] ?>">
                <input type="hidden" name="edit" value="1">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Name</h3>
                                </div>
                                <div class="card-body">
                                    <input type="text" name="name" value="<?= $categories['name'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card_footer">
                    <button type="submit" class="btn btn-success">save</button>
                </div>
            </form>

        </div>

    </div>
</div>

</body>
</html>


