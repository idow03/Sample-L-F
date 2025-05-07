
<!-- This code generates the base URL for the website by combining the protocol, domain name, and directory path -->
<?php
    $rootFolder = basename($_SERVER['DOCUMENT_ROOT']);
    $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . str_replace('/pages', '', dirname($_SERVER['SCRIPT_NAME']));
    
    //  Define body class //
    $bodyClass = 'authentication-background';

?>
<!-- This code generates the base URL for the website by combining the protocol, domain name, and directory path -->

<!-- This code is useful for internal styles  -->
<?php ob_start(); ?>



<?php $styles = ob_get_clean(); ?>
<!-- This code is useful for internal styles  -->

<!-- This code is useful for content -->
<?php ob_start(); ?>
	
            <div class="container-lg">
                <div class="row justify-content-center authentication authentication-basic align-items-center h-100">
                    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                        <div class="my-5 d-flex justify-content-center"> 
                            <a href="index.php"> 
                                <img src="<?php echo $baseUrl; ?>/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark"> 
                            </a> 
                        </div>
                        <div class="card custom-card my-4 auth-circle">
                            <div class="card-body p-5">
                                <p class="h4 mb-2 fw-semibold">Lock Screen</p>
                                <p class="mb-3 text-muted fw-normal">Hello Jhon !</p>
                                <div class="d-flex gap-2 align-items-center mb-3">
                                    <div class="lh-1">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/faces/15.jpg" alt="">
                                        </span>
                                    </div>
                                    <div>
                                        <p class="mb-0 text-dark fw-medium">arjunarora@gmail.com</p>
                                    </div>
                                </div>
                                <div class="row gy-3">
                                    <div class="col-xl-12 mb-2">
                                        <label for="lockscreen-password" class="form-label text-default">Password</label>
                                        <div class="position-relative">
                                            <input type="password" class="form-control" id="lockscreen-password" placeholder="password">
                                            <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('lockscreen-password',this)"  id="button-addon2"><i class="ri-eye-off-line align-middle"></i></a>
                                        </div>
                                        <div class="mt-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                                <label class="form-check-label text-muted fw-normal fs-12" for="defaultCheck1">
                                                    Remember password ?
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 d-grid mt-2">
                                        <a href="index.php" class="btn btn-primary">Unlock</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <p class="fs-12 text-muted mt-3 mb-0">Try unlock with <a class="text-success" href="javascript:void(0);"><u>Finger print</u></a> / <a class="text-success" href="javascript:void(0);"><u>Face Id</u></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php $content = ob_get_clean(); ?>
<!-- This code is useful for content -->

<!-- This code is useful for internal scripts  -->
<?php ob_start(); ?>
	
        <!-- Show Password JS -->
        <script src="<?php echo $baseUrl; ?>/assets/js/show-password.js"></script>

<?php $scripts = ob_get_clean(); ?>
<!-- This code is useful for internal scripts  -->

<!-- This code use for render base file -->
<?php include 'layouts/custom-base.php'; ?>
<!-- This code use for render base file -->
