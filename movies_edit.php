<?php
include_once './php/DB.php';

$DBclass = new DB();
$db = $DBclass->getDB();
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_GET['title']) && !empty($_GET['title'])) {
    $title = $_GET['title'];
        if (isset($_GET['description']) && !empty($_GET['description'])) {
            $description = $_GET['description'];
            if (isset($_GET['realise_date']) && !empty($_GET['realise_date'])) {
                $realise_date = $_GET['realise_date'];
                if (isset($_GET['rate']) && !empty($_GET['rate'])) {
                    $rate = $_GET['rate'];
                    if (isset($_GET['age']) && !empty($_GET['age'])) {
                        $age = $_GET['age'];
                        if (isset($_GET['quality']) && !empty($_GET['quality'])) {
                            $quality = $_GET['quality'];
                            if (isset($_GET['run_time']) && !empty($_GET['run_time'])) {
                                $run_time = $_GET['run_time'];
                                if (isset($_GET['image']) && !empty($_GET['image'])) {
                                    $image = $_GET['image'];
                                    if (isset($_GET['category_id']) && !empty($_GET['category_id'])) {
                                        $category_id= $_GET['category_id'];
                                        if (isset($_GET['country_id']) && !empty($_GET['country_id'])) {
                                            $country_id = $_GET['country_id'];
                                            if (isset($_GET['genre_id']) && !empty($_GET['genre_id'])) {
                                                $genre = $_GET['genre_id'];
                                                $movies = $db->query('select * from movies')->fetch_all(MYSQLI_ASSOC);
                                                $categories = $db->query('select * from categories')->fetch_all(MYSQLI_ASSOC);
                                                $countries = $db->query('select * from countries')->fetch_all(MYSQLI_ASSOC);
                                                $genres = $db->query('select * from genres')->fetch_all(MYSQLI_ASSOC);
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

?>

<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
          content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard ecommerce - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="./app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="./app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
          rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="./app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

<!-- BEGIN: Header-->
<?php include_once './app-assets/components/navbar.php'; ?>
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<?php include_once './app-assets/components/menu.php'; ?>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Movies</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">Movies</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Basic Horizontal form layout section start -->
            <section id="basic-horizontal-layouts">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Movies</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-horizontal" action="./php/movies/edit.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-2">
                                                    <label class="col-form-label" for="title">Title</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" id="title" class="form-control" name="title" placeholder="Title" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-2">
                                                    <label class="col-form-label" for="description">Description</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" id="description" class="form-control" name="description" placeholder="Description" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-2">
                                                    <label class="col-form-label" for="realise_date">Realise_date</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="date" id="realise_date" class="form-control" name="realise_date" placeholder="Realise-date" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-2">
                                                    <label class="col-form-label" for="rate">Rate</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="number" id="rate" class="form-control" name="rate" placeholder="Rate" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-2">
                                                    <label class="col-form-label" for="age">Age</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" id="age" class="form-control" name="age" placeholder="Age" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-2">
                                                    <label class="col-form-label" for="quality">Quality</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="text" id="quality" class="form-control" name="quality" placeholder="Quality" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-2">
                                                    <label class="col-form-label" for="run_time">Run-time</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="number" id="run_time" class="form-control" name="run_time" placeholder="Run-time" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-2">
                                                    <label class="col-form-label" for="image">Image</label>
                                                </div>
                                                <div class="col-sm-10">
                                                    <input type="file" id="image" class="form-control" name="image" placeholder="Choose image" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-2">
                                                    <label class="col-form-label" for="select2-multiple">Category</label>
                                                </div>

                                                <div class="col-sm-10">
                                                    <select class="select2 form-select" id="select2-multiple" name="category_id"  >
                                                        <?php foreach ($categories as $category) { ?>
                                                            <option value="<?= $category['id']?>"><?= $category['name']?></option>

                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-2">
                                                    <label class="col-form-label" for="select2-multiple">Country</label>
                                                </div>

                                                <div class="col-sm-10">
                                                    <select class="select2 form-select" id="select2-multiple" name="country_id"  >
                                                        <?php foreach ($countries as $country) { ?>
                                                            <option value="<?= $country['id']?>"><?= $country['name']?></option>

                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-2">
                                                    <label class="col-form-label" for="select2-multiple">Genre</label>
                                                </div>

                                                <div class="col-sm-10">
                                                    <select class="select2 form-select" id="select2-multiple" name="genre_id"  >
                                                        <?php foreach ($genres as $genre) { ?>
                                                            <option value="<?= $genre['id']?>"><?= $genre['name']?></option>

                                                        <?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-9 offset-sm-3">
                                            <button type="submit" class="btn btn-primary me-1">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Basic Horizontal form layout section end -->

        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<?php include_once './app-assets/components/footer.php'; ?>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->


<!-- BEGIN: Vendor JS-->
<script src="./app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="./app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="./app-assets/js/core/app-menu.js"></script>
<script src="./app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="./app-assets/js/scripts/forms/form-select2.js"></script>
<!-- END: Page JS-->

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
</body>
<!-- END: Body-->

</html>
