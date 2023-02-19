<?php
include_once '../DB.php';
$db = new DB();
$conn = $db->getDB();



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['title']) && $_POST['title']) {
        if (isset($_POST['description']) && $_POST['description']){
            if (isset($_POST['realise_date']) && $_POST['realise_date']){
                if (isset($_POST['rate']) && $_POST['rate']){
                    if (isset($_POST['age']) && $_POST['age']){
                        if (isset($_POST['quality']) && $_POST['quality']) {
                            if (isset($_POST['run_time']) && $_POST['run_time']) {
                                if (isset($_FILES['image']) && $_FILES['image']) {
                                    $image = $_FILES['image'];
                                    $image_name = $image['name'];
                                    if (isset($_POST['category_id']) && $_POST['category_id']) {
                                        if (isset($_POST['country_id']) && $_POST['country_id']) {
                                            if (isset($_POST['genre_id']) && $_POST['genre_id']) {
                                                $conn->query("insert into movies (title, category_id, genre_id, realise_date, rate, quality, age, run_time, description, country_id, image) values ('$_POST[title]','$_POST[category_id]','$_POST[genre_id]','$_POST[realise_date]','$_POST[rate]','$_POST[quality]','$_POST[age]','$_POST[run_time]','$_POST[description]','$_POST[country_id]','$image_name')");

                                                if ($conn->error) {
                                                        echo $conn->error;
                                                }
                                            }
                                            else{
                                                echo "Genre not found";
                                            }
                                        }
                                        else{
                                            echo "Country not found";
                                        }
                                    }
                                    else{
                                        echo "Category not found";
                                    }
                                }
                                else{
                                    echo "Image not found";
                                }
                            }
                            else{
                                echo "Run time not found";
                            }
                        }
                        else{
                            echo "Quality not found";
                        }
                    }
                    else{
                        echo "Age date not found";
                    }
                }
                else{
                    echo "Rate date not found";
                }
            }
            else{
                echo "Realise date not found";
            }
        }
        else{
           echo "Description not found";
        }
    } else{
        echo "Title not found";
    }
    if ($_FILES['image']['error'] == 0) {
        $image = $_FILES['image'];
        $image_name = $image['name'];
        $image_tmp_name = $image['tmp_name'];
        $image_size = $image['size'];
        $image_type = $image['type'];
        $image_ext = explode('.', $image_name);
        $image_ext = strtolower(end($image_ext));
        $image_path = '../../app-assets/images/movies/' . $image_name;
        move_uploaded_file($image_tmp_name, $image_path);

    }
    header('Location: /movies.php');
}



