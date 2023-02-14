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
                                if (isset($_POST['image']) && $_POST['image']) {
                                    if (isset($_POST['category_id']) && $_POST['category_id']) {
                                        if (isset($_POST['country_id']) && $_POST['country_id']) {
                                            if (isset($_POST['genre_id']) && $_POST['genre_id']) {
                                                $conn->query("insert into movies (title, category_id, genre_id, realise_date, rate, quality, age, run_time, description, country_id, image) values ('$_POST[title]'),('$_POST[description]'),('$_POST[rate]'),('$_POST[realise_date]'),('$_POST[age]'),('$_POST[quality]'),('$_POST[run_time]'),('$_POST[image]'),('$_POST[category_id]'),('$_POST[country_id]'),('$_POST[genre_id]'),");
                                                if ($conn->error) {
                                                        echo $conn->error;
                                                } else {
                                                    header('Location: /movies.php');
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
}



