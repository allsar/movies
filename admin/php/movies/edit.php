<?php
require_once '../DB.php';
$db = new DB();
$conn = $db->getDB();
//var_dump($_POST);
//die();
$movie = $conn->query('select * from movies where id=' . $_POST['id'])->fetch_assoc();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['id']) && $_POST['id']) {
        $id = $_POST['id'];
        if (isset($_POST['title']) && $_POST['title']) {
            $title = $_POST['title'];
            if (isset($_POST['description']) && $_POST['description']) {
                $description = $_POST['description'];
                if (isset($_POST['realise_date']) && $_POST['realise_date']) {
                    $realise_date = $_POST['realise_date'];
                    if (isset($_POST['rate']) && $_POST['rate']) {
                        $rate = $_POST['rate'];
                        if (isset($_POST['age']) && $_POST['age']) {
                            $age = $_POST['age'];
                            if (isset($_POST['quality']) && $_POST['quality']) {
                                $quality = $_POST['quality'];
                                if (isset($_POST['run_time']) && $_POST['run_time']) {
                                    $run_time = $_POST['run_time'];
                                    if (isset($_FILES['image']) && $_FILES['image']) {
                                        $image = $_FILES['image'];
                                        if (isset($_POST['category_id']) && $_POST['category_id']) {
                                            $category_id = $_POST['category_id'];
                                            if (isset($_POST['country_id']) && $_POST['country_id']) {
                                                $country_id = $_POST['country_id'];
                                                if (isset($_POST['genre_id']) && $_POST['genre_id']) {
                                                    $genre_id = $_POST['genre_id'];
                                                    $ext = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
                                                    $imageNewName = (time() + random_int(1, 100)) . '.' . $ext;
                                                    if (file_exists('../../app-assets/images/movies/' . $movie['image'])) {
                                                        unlink('../../app-assets/images/movies/' . $movie['image']);
                                                    }
                                                    if ($_FILES['image']['error'] == 0) {
                                                        $image = $_FILES['image'];
                                                        $image_tmp_name = $image['tmp_name'];
                                                        $image_path = '../../app-assets/images/movies/' . $imageNewName;
                                                        move_uploaded_file($image_tmp_name, $image_path);

                                                    }

                                                    $conn->query("update movies set title='$title', description='$description', realise_date='$realise_date', rate='$rate', age='$age', quality='$quality', run_time='$run_time', image='$imageNewName', category_id='$category_id', country_id='$country_id', genre_id='$genre_id' where id='$id'");
                                                    if ($conn->error) {
                                                        die($conn->error);
                                                    } else {
                                                        header('Location: /movies.php');
                                                    }
                                                } else {
                                                    die("Genre not found");
                                                }
                                            } else {
                                                die("Country not found");
                                            }
                                        } else {
                                            die("Category not found");
                                        }
                                    } else {
                                        die("Image not found");
                                    }
                                } else {
                                    die("Run time not found");
                                }
                            } else {
                                die("Quality not found");
                            }
                        } else {
                            die("Age date not found");
                        }
                    } else {
                        die("Rate date not found");
                    }
                } else {
                    die("Realise date not found");
                }
            } else {
                die("Description not found");
            }
        } else {
            die("Title not found");
        }
    }
}