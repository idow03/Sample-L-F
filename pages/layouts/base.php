<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

    <head>

        <!-- Meta Data -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="Description" content="PHP Bootstrap Responsive Admin Web Dashboard Template">
        <meta name="Author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin dashboard in php, admin template php, best php framework, bootstrap admin panel, bootstrap dashboard template, bootstrap framework, bootstrap php, dashboard for bootstrap, panel admin php, php admin, php admin panel template, php components, php dashboards, php ui, template php.">
        
		<!-- Title -->
        <title> Meno - PHP Bootstrap 5 Premium Admin & Dashboard Template </title>

        <!-- Favicon -->
        <link rel="icon" href="<?php echo $baseUrl; ?>/assets/images/brand-logos/favicon.ico" type="image/x-icon">

        <!-- Start::Styles -->
        <?php include 'layouts/components/styles.php'; ?>
        <!-- End::Styles -->

        <?php echo $styles; ?>

    </head>

    <body class="">

        <!-- Start::main-switcher -->
        <?php include 'layouts/components/switcher.php'; ?>
        <!-- End::main-switcher -->

        <!-- Loader -->
        <div id="loader" >
            <img src="<?php echo $baseUrl; ?>/assets/images/media/loader.svg" alt="">
        </div>
        <!-- Loader -->

        <div class="page">

            <!-- Start::main-header -->
            <?php include 'layouts/components/main-header.php'; ?>
            <!-- End::main-header -->

            <!-- Start::main-sidebar -->
            <?php include 'layouts/components/main-sidebar.php'; ?>
            <!-- End::main-sidebar -->

            <!-- Start::app-content -->
            <div class="main-content app-content">
                <div class="container-fluid">

                    <?php echo $content; ?>
                    
                </div>
            </div>
            <!-- End::app-content -->

            <!-- Start::main-modal -->
            <?php include 'layouts/components/modal.php'; ?>
            <!-- End::main-modal -->

            <!-- Start::main-footer -->
            <?php include 'layouts/components/footer.php'; ?>
            <!-- End::main-footer -->

        </div>

        <!-- Start::main-scripts -->
        <?php include 'layouts/components/scripts.php'; ?>
        <!-- End::main-scripts -->

        <?php echo $scripts; ?>

        <!-- Sticky JS -->
        <script src="<?php echo $baseUrl; ?>/assets/js/sticky.js"></script>

        <!-- Defaultmenu JS -->
        <script src="<?php echo $baseUrl; ?>/assets/js/defaultmenu.js"></script>

        <!-- Custom JS -->
        <script src="<?php echo $baseUrl; ?>/assets/js/custom.js"></script>

        <!-- Custom-Switcher JS -->
        <script src="<?php echo $baseUrl; ?>/assets/js/custom-switcher.js"></script>

    </body> 

</html>
