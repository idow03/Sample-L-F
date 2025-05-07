<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

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

        <!-- Start::custom-styles -->
        <?php include 'layouts/components/custom-styles.php'; ?>
        <!-- End::custom-styles -->

        <?php echo $styles; ?>

    </head>

	<body class="<?php echo $bodyClass; ?>">

        <!-- Start::custom-switcher -->
        <?php include 'layouts/components/custom-switcher.php'; ?>
        <!-- End::custom-switcher -->

        <?php echo $content; ?>

        <!-- Start::custom-scripts -->
        <?php include 'layouts/components/custom-scripts.php'; ?>
        <!-- End::custom-scripts -->

        <?php echo $scripts; ?>

    </body>
    
</html>    
