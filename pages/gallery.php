
<!-- This code generates the base URL for the website by combining the protocol, domain name, and directory path -->
<?php
    $rootFolder = basename($_SERVER['DOCUMENT_ROOT']);
    $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . str_replace('/pages', '', dirname($_SERVER['SCRIPT_NAME']));
?>
<!-- This code generates the base URL for the website by combining the protocol, domain name, and directory path -->

<!-- This code is useful for internal styles  -->
<?php ob_start(); ?>

        <!-- GLightbox CSS -->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/libs/glightbox/css/glightbox.min.css">

<?php $styles = ob_get_clean(); ?>
<!-- This code is useful for internal styles  -->

<!-- This code is useful for content -->
<?php ob_start(); ?>
	
                    <!-- Page Header -->
                    <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div>
                            <h1 class="page-title fw-medium fs-18 mb-2">Gallery</h1>
                            <div class="">
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <div class="d-flex gap-2">
                                <div class="position-relative">
                                    <button class="btn btn-primary btn-wave" type="button"
                                        id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside" aria-expanded="false">
                                        Filter By <i class="ri-arrow-down-s-fill ms-1"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableInside">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Today</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Yesterday</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Last 30 Days</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Last 6 Months</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Last Year</a></li>
                                    </ul>
                                </div>
                                <button class="btn btn-secondary btn-icon btn-wave" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Download">
                                    <i class="ti ti-download"></i>
                                </button>
                                <button class="btn btn-success btn-icon btn-wave" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Share">
                                    <i class="ti ti-share-3"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start::row-1 -->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="<?php echo $baseUrl; ?>/assets/images/media/media-40.jpg" class="glightbox card" data-gallery="gallery1">
                                <img src="<?php echo $baseUrl; ?>/assets/images/media/media-40.jpg" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="<?php echo $baseUrl; ?>/assets/images/media/media-41.jpg" class="glightbox card" data-gallery="gallery1">
                                <img src="<?php echo $baseUrl; ?>/assets/images/media/media-41.jpg" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="<?php echo $baseUrl; ?>/assets/images/media/media-42.jpg" class="glightbox card" data-gallery="gallery1">
                                <img src="<?php echo $baseUrl; ?>/assets/images/media/media-42.jpg" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="<?php echo $baseUrl; ?>/assets/images/media/media-43.jpg" class="glightbox card" data-gallery="gallery1">
                                <img src="<?php echo $baseUrl; ?>/assets/images/media/media-43.jpg" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="<?php echo $baseUrl; ?>/assets/images/media/media-44.jpg" class="glightbox card" data-gallery="gallery1">
                                <img src="<?php echo $baseUrl; ?>/assets/images/media/media-44.jpg" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="<?php echo $baseUrl; ?>/assets/images/media/media-45.jpg" class="glightbox card" data-gallery="gallery1">
                                <img src="<?php echo $baseUrl; ?>/assets/images/media/media-45.jpg" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="<?php echo $baseUrl; ?>/assets/images/media/media-46.jpg" class="glightbox card" data-gallery="gallery1">
                                <img src="<?php echo $baseUrl; ?>/assets/images/media/media-46.jpg" alt="image" >
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                            <a href="<?php echo $baseUrl; ?>/assets/images/media/media-60.jpg" class="glightbox card" data-gallery="gallery1">
                                <img src="<?php echo $baseUrl; ?>/assets/images/media/media-60.jpg" alt="image" >
                            </a>
                        </div>
                    </div>
                    <!--End::row-1 -->

<?php $content = ob_get_clean(); ?>
<!-- This code is useful for content -->

<!-- This code is useful for internal scripts  -->
<?php ob_start(); ?>
	
        <!-- Gallery JS -->
        <script src="<?php echo $baseUrl; ?>/assets/libs/glightbox/js/glightbox.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/js/gallery.js"></script>

<?php $scripts = ob_get_clean(); ?>
<!-- This code is useful for internal scripts  -->

<!-- This code use for render base file -->
<?php include 'layouts/base.php'; ?>
<!-- This code use for render base file -->
