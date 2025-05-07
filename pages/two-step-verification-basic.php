
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
                <div class="row justify-content-center align-items-center authentication two-step-verification authentication-basic h-100">
                    <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-6 col-sm-8 col-12">
                        <div class="my-5 d-flex justify-content-center"> 
                            <a href="index.php"> 
                                <img src="<?php echo $baseUrl; ?>/assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark"> 
                            </a> 
                        </div>
                        <div class="card custom-card my-4 auth-circle">
                            <div class="card-body p-5">
                                <p class="h4 mb-2 fw-semibold">Verify Your Account</p>
                                <p class="mb-4 text-muted fw-normal">Enter the 4 digit code sent to the registered email Id.</p>
                                <div class="row gy-3">
                                    <div class="col-xl-12 mb-2">
                                        <div class="row gx-3">
                                            <div class="col-3">
                                                <input type="text" class="form-control text-center" id="one" maxlength="1" onkeyup="clickEvent(this,'two')">
                                            </div>
                                            <div class="col-3">
                                                <input type="text" class="form-control text-center" id="two" maxlength="1" onkeyup="clickEvent(this,'three')">
                                            </div>
                                            <div class="col-3">
                                                <input type="text" class="form-control text-center" id="three" maxlength="1" onkeyup="clickEvent(this,'four')">
                                            </div>
                                            <div class="col-3">
                                                <input type="text" class="form-control text-center" id="four" maxlength="1">
                                            </div>
                                        </div>
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label text-muted fw-normal fs-12" for="defaultCheck1">
                                                Did not recieve a code ?<a href="mail.php" class="text-primary ms-2 d-inline-block fw-medium">Resend</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 d-grid mt-3">
                                        <a href="index.php" class="btn btn-primary">Verify</a>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <p class="fs-12 text-danger mt-3 mb-0"><sup><i class="ri-asterisk"></i></sup>Don't share the verification code with anyone !</p>
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
	
        <!-- Internal Two Step Verification JS -->
        <script src="<?php echo $baseUrl; ?>/assets/js/two-step-verification.js"></script>

<?php $scripts = ob_get_clean(); ?>
<!-- This code is useful for internal scripts  -->

<!-- This code use for render base file -->
<?php include 'layouts/custom-base.php'; ?>
<!-- This code use for render base file -->
