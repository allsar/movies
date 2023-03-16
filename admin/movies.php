<?php
include_once './php/DB.php';
$DBclass = new DB();
$db = $DBclass->getDB();
$movies = $db->query('select * from movies')->fetch_all(MYSQLI_ASSOC);
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

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
      data-menu="vertical-menu-modern" data-col="">

<!-- BEGIN: Header-->
<?php include_once './app-assets/components/navbar.php'; ?>
<!---->
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
<?php include_once './app-assets/components/menu.php'; ?>

<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Movies</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Movies
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <a href="movies_create.php" class="btn btn-primary"> Create</a>
            </div>
        </div>
        <div class="content-body">
            <div class="row" id="basic-table">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data</h4>
                        </div>
                        <div class="card-body">

                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Realise date</th>
                                    <th>Rate</th>
                                    <th>Age</th>
                                    <th>Quality</th>
                                    <th>Run time</th>
                                    <th>Image</th>
                                    <th>Category</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($movies as $movie) { ?>
                                    <tr>
                                        <td>
                                            <?= $movie['id'] ?>
                                        </td>
                                        <td>
                                            <?= $movie['title'] ?>
                                        </td>
                                        <td>
                                            <?= $movie['description'] ?>
                                        </td>
                                        <td>
                                            <?= $movie['realise_date'] ?>
                                        </td>
                                        <td>
                                            <?= $movie['rate'] ?>
                                        </td>
                                        <td>
                                            <?= $movie['age'] ?>
                                        </td>
                                        <td>
                                            <?= $movie['quality'] ?>
                                        </td>
                                        <td>
                                            <?= $movie['run_time'] ?>
                                        </td>
                                        <td>
                                            <?= $movie['image'] ?>
                                        </td>
                                        <td>
                                            <?= $movie['category_id'] ?>
                                        </td>
                                        <td>
                                            <?= $movie['country_id'] ?>
                                        </td>
                                        <td>
                                            <?= $movie['genre_id'] ?>
                                        </td>

                                        <td>
                                            <a href="./movies_edit.php?id=<?= $movie['id'] ?>" class="btn btn-sm btn-secondary">Edit</a>
                                            <form action="./php/movies/delete.php" method="post" class="d-inline-block">
                                                <input type="hidden" name="id" value="<?= $movie['id'] ?>">
                                                <button class="btn btn-sm btn-danger" type="submit">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

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

<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="./app-assets/js/core/app-menu.js"></script>
<script src="./app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

<script>
    $(window).on('load', function () {
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
