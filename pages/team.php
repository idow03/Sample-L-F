
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
                            <h1 class="page-title fw-medium fs-18 mb-2">Team</h1>
                            <div class="">
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Team</li>
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
                    <div class="row mb-4">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card team-member text-center">
                                <div class="card-body p-4">
                                    <div class="mb-4 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-light">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/faces/16.jpg" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-2 fw-semibold">James Nine</h6>
                                        <p class="mb-3 text-pink fw-semibold">Director</p>
                                        <p class="text-muted fs-12">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                                        <div class="d-flex justify-content-center mt-4">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pink-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card team-member text-center"> 
                                <div class="card-body p-4">
                                    <div class="mb-4 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-light">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/faces/1.jpg" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-2 fw-semibold">Hadley Kylin</h6>
                                        <p class="mb-3 text-pink fw-semibold">Director</p>
                                        <p class="text-muted fs-12">Hadley has over 10 years of experience in leadership roles, bringing a wealth of strategic insights to the team. A visionary, she steers the company.</p>
                                        <div class="d-flex justify-content-center mt-4">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pink-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            
                            <div class="card custom-card team-member text-center"> 
                                <div class="card-body p-4">
                                    <div class="mb-4 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-light">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/faces/2.jpg" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-2 fw-semibold">Jordan Avery</h6>
                                        <p class="mb-3 text-pink fw-semibold">Chief Marketing Officer</p>
                                        <p class="text-muted fs-12">Jordan is a creative marketing leader with a flair for innovative campaigns. His expertise in digital marketing drives our brand awareness.</p>
                                        <div class="d-flex justify-content-center mt-4">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pink-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            
                            <div class="card custom-card team-member text-center"> 
                                <div class="card-body p-4">
                                    <div class="mb-4 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-light">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/faces/3.jpg" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-2 fw-semibold">Morgan Brooks</h6>
                                        <p class="mb-3 text-pink fw-semibold">Head of Technology</p>
                                        <p class="text-muted fs-12">Morgan is a tech innovator with a deep understanding of software development and system architecture. They lead our technical teams with a focus on cutting-edge solutions.</p>
                                        <div class="d-flex justify-content-center mt-4">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pink-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card team-member text-center"> 
                                <div class="card-body p-4">
                                    <div class="mb-4 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-light">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/faces/4.jpg" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-2 fw-semibold">Taylor Quinn</h6>
                                        <p class="mb-3 text-pink fw-semibold">Chief Financial Officer</p>
                                        <p class="text-muted fs-12">Taylor brings extensive experience in financial management, overseeing budgets and investments. Their insights are key to ensuring the company's fiscal.</p>
                                        <div class="d-flex justify-content-center mt-4">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pink-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card team-member text-center"> 
                                <div class="card-body p-4">
                                    <div class="mb-4 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-light">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/faces/7.jpg" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-2 fw-semibold">Sydney Lewis</h6>
                                        <p class="mb-3 text-pink fw-semibold">Creative Director</p>
                                        <p class="text-muted fs-12">Sydney leads the creative department with a focus on design innovation. They are responsible for the visual identity of the company, ensuring that .</p>
                                        <div class="d-flex justify-content-center mt-4">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pink-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card team-member text-center"> 
                                <div class="card-body p-4">
                                    <div class="mb-4 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-light">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/faces/5.jpg" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-2 fw-semibold">Riley James</h6>
                                        <p class="mb-3 text-pink fw-semibold">Chief Operating Officer</p>
                                        <p class="text-muted fs-12">Riley is responsible for overseeing day-to-day operations and ensuring efficiency across all departments. Their strategic vision and leadership help </p>
                                        <div class="d-flex justify-content-center mt-4">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pink-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                            <div class="card custom-card team-member text-center"> 
                                <div class="card-body p-4">
                                    <div class="mb-4 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-light">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/faces/14.jpg" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-2 fw-semibold">Monith Ken</h6>
                                        <p class="mb-3 text-pink fw-semibold">Chief Executive Officer</p>
                                        <p class="text-muted fs-12">Insights are key to ensuring the company's fiscal health and growth. Taylor brings extensive experience in financial management. </p>
                                        <div class="d-flex justify-content-center mt-4">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-primary-light btn-wave btn-sm waves-effect waves-light"><i class="ri-twitter-x-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-secondary-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-facebook-fill"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-pink-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-instagram-line"></i></a>
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-success-light btn-wave btn-sm ms-2 waves-effect waves-light"><i class="ri-linkedin-fill"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

<?php $content = ob_get_clean(); ?>
<!-- This code is useful for content -->

<!-- This code is useful for internal scripts  -->
<?php ob_start(); ?>
	


<?php $scripts = ob_get_clean(); ?>
<!-- This code is useful for internal scripts  -->

<!-- This code use for render base file -->
<?php include 'layouts/base.php'; ?>
<!-- This code use for render base file -->
