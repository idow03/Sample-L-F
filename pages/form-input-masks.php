
<!-- This code generates the base URL for the website by combining the protocol, domain name, and directory path -->
<?php
    $rootFolder = basename($_SERVER['DOCUMENT_ROOT']);
    $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . str_replace('/pages', '', dirname($_SERVER['SCRIPT_NAME']));
?>
<!-- This code generates the base URL for the website by combining the protocol, domain name, and directory path -->

<!-- This code is useful for internal styles  -->
<?php ob_start(); ?>



<?php $styles = ob_get_clean(); ?>
<!-- This code is useful for internal styles  -->

<!-- This code is useful for content -->
<?php ob_start(); ?>
	
                    <!-- Page Header -->
                    <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div>
                            <h1 class="page-title fw-medium fs-18 mb-2">Input Masks</h1>
                            <div class="">
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Forms</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Form Elements</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Input Masks</li>
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

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Date Format-1
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control date-format" placeholder="DD-MM-YYYY">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Date Format-2
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control date-format-1" placeholder="MM-DD-YYYY">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Date Format-3
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control date-format-2" placeholder="MM-YY">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Number Formatting
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control number-format" placeholder="Number Here">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Time Format-1
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control time-format-1" placeholder="hh:mm:ss">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Time Format-2
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control time-format-2" placeholder="hh:mm">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Delimiter
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control delimiter" placeholder="ABC.DEF.GHi">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Formatting Into Blocks
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control formatting-blocks" placeholder="ABCD EFG HIJ KLMN">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Delimiters
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control delimiters" placeholder="ABC/DEF/GHi-JK">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Prefix
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control prefix-element" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Phone Number Formatting
                                    </div>
                                </div>
                                <div class="card-body">
                                    <input class="form-control phone-number"  placeholder="US(+1)">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

<?php $content = ob_get_clean(); ?>
<!-- This code is useful for content -->

<!-- This code is useful for internal scripts  -->
<?php ob_start(); ?>
	
        <!-- Cleave.js -->
        <script src="<?php echo $baseUrl; ?>/assets/libs/cleave.js/cleave.min.js"></script>

        <!-- Internal form-input-mask JS -->
        <script src="<?php echo $baseUrl; ?>/assets/js/form-input-mask.js"></script>

<?php $scripts = ob_get_clean(); ?>
<!-- This code is useful for internal scripts  -->

<!-- This code use for render base file -->
<?php include 'layouts/base.php'; ?>
<!-- This code use for render base file -->
