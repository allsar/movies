<?php
include_once './php/DB.php';
$db = new DB();
$conn = $db->getDB();
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $category = $conn->query("select * from categories where id = $id")->fetch_assoc();
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
        </div>
        <div class="content-body">
            <section id="basic-horizontal-layouts">
                <div class="row">
                    <div class=" col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Category Form</h4>
                            </div>
                            <div class="card-body">
                                <form class="form form-horizontal" action="./php/categories/edit.php" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-1 row">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label" for="first-name">Category Name</label>
                                                </div>
                                                <input type="hidden" name="id" value="<?= $category['id'] ?>">
                                                <div class="col-sm-9">
                                                    <input type="text" id="first-name" class="form-control" name="name"
                                                           placeholder="Category Name"
                                                           value="<?= $category['name'] ?>"/>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 text-end">
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

        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<?php include_once './app-assets/components/menu.php'; ?>

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

