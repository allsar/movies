<?php
require_once '../DB.php';
$db = new DB();
$conn = $db->getDB();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['id']) && $_POST['id']) {
        $id = $_POST['id'];
        if (isset($_POST['title']) && $_POST['title']) {
            $title = $_POST['title'];
            if (isset($_POST['description']) && $_POST['description']) {
                $description = $_POST['description'];
                if (isset($_POST['realise_date']) && $_POST['realise_date']) {
                    $realise_date = $_POST['realise_date'];
                    if (isset($_POST['rate']) && $_POST['rate']){
                        $rate = $_POST['rate'];
                        if (isset($_POST['age']) && $_POST['age']){
                            $age = $_POST['age'];
                            if (isset($_POST['quality']) && $_POST['quality']){
                                $quality = $_POST['quality'];
                                if (isset($_POST['run_time']) && $_POST['run_time']){
                                    $run_time= $_POST['run_time'];
                                    if (isset($_POST['image']) && $_POST['image']){
                                        $image = $_POST['image'];
                                        if (isset($_POST['category_id']) && $_POST['category_id']) {
                                            $category_id = $_POST['category_id'];
                                            if (isset($_POST['country_id']) && $_POST['country_id']) {
                                                $country_id = $_POST['country_id'];
                                                if (isset($_POST['genre_id']) && $_POST['genre_id']) {
                                                    $genre_id = $_POST['genre_id'];
                                                    $conn->query("update movies set title='$title', description='$description', realise_date='$realise_date', rate='$rate', age='$age', quality='$quality', run_time='$run_time', image='$image', category_id='$category_id', country_id='$country_id', genre_id='$genre_id' where id='$id'");
                                                    if ($conn->error){
                                                        echo $conn->error;
                                                    } else{
                                                        header('Location: /movies.php');
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}


