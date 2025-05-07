
<!-- This code generates the base URL for the website by combining the protocol, domain name, and directory path -->
<?php
    $rootFolder = basename($_SERVER['DOCUMENT_ROOT']);
    $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . str_replace('/pages', '', dirname($_SERVER['SCRIPT_NAME']));
?>
<!-- This code generates the base URL for the website by combining the protocol, domain name, and directory path -->

<!-- This code is useful for internal styles  -->
<?php ob_start(); ?>

        <!-- noioslider CSS -->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/libs/nouislider/nouislider.min.css">

<?php $styles = ob_get_clean(); ?>
<!-- This code is useful for internal styles  -->

<!-- This code is useful for content -->
<?php ob_start(); ?>
	
                    <!-- Page Header -->
                    <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div>
                            <h1 class="page-title fw-medium fs-18 mb-2">Products</h1>
                            <div class="">
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                        <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Products</li>
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

                    <!-- Start:: Row-1 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-body p-3">
                                    <div class="row align-items-center gy-2">
                                        <div class="col-sm-8">
                                            <div class="d-flex">
                                                <h6 class="mb-0">
                                                    Total <span class="fw-semibold text-secondary">6678 Items</span>
                                                    Available</h6> 
                                            </div>
                                        </div>
                                        <div class="col-sm-4 text-sm-end text-start">
                                            <div class="btn-group">
                                                <button class="btn btn-outline-light border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-sort-descending-2 me-1"></i> Sort By
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Date Published</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Most Relevant</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Price Low to High</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)">Price High to Low</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-9">                             
                            <div class="row">
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                    <div class="card custom-card card-style-2">
                                        <div class="card-body p-0">
                                            <div class="top-left-badge">
                                                <div class="badge bg-info d-inline-flex gap-1 lh-1 align-items-center text-fixed-white mb-1">
                                                    <div class="badge-icon"><i class="ti ti-bolt"></i></div>
                                                    <div class="badge-text">Trending</div>
                                                </div>
                                                <div class="badge bg-pink d-inline-block">12% Off</div>
                                            </div>
                                            <div class="card-img-top">
                                                <div class="btns-container-1 align-items-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                    <a href="wishlist.php" class="btn btn-icon btn-secondary" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                </div>
                                                <div class="img-box-2">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/6.png" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent"> 
                                                </div>
                                            </div>
                                            <div class="p-3 text-center">
                                                <div class="align-items-end justify-content-between flex-wrap">
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);" class="text-success fs-12 fw-semibold">Stealth</a>
                                                        <h6 class="mb-1 fw-semibold fs-16"><a href="product-details.php">Longlenth Chair</a></h6>
                                                    </div>
                                                    <div class="d-flex align-items-baseline fs-11 justify-content-center">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="ri-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="ri-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="ri-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="ri-star-line fs-12"></i></span>
                                                        </div>
                                                        <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                            <span>4.4</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between gap-2 flex-wrap align-items-end p-3 border-top border-block-start-dashed">
                                            <div class="min-w-fit-content d-flex gap-1 flex-wrap align-items-end justify-content-center">
                                                <span class="fs-13 text-muted text-decoration-line-through">$678</span>
                                                <h5 class="fw-semibold text-pink mb-0">$578</h5>
                                            </div>
                                            <a href="cart.php" class="btn btn-primary rounded-pill btn-sm">
                                                <i class="ri-shopping-cart-line me-1 d-inline-block"></i> Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                    <div class="card custom-card card-style-2">
                                        <div class="card-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-info">15% Off</span>
                                            </div>
                                            <div class="card-img-top">
                                                <div class="btns-container-1 align-items-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                    <a href="wishlist.php" class="btn btn-icon btn-secondary" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                </div>
                                                <div class="img-box-2">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/12.png" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent"> 
                                                </div>
                                            </div>
                                            <div class="p-3 text-center">
                                                <div class="align-items-end justify-content-between flex-wrap">
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);" class="text-success fs-12 fw-semibold">Twinkle Twirl</a>
                                                        <h6 class="mb-1 fw-semibold fs-16"><a href="product-details.php">Ladies Hand bag</a></h6>
                                                    </div>
                                                    <div class="d-flex align-items-baseline fs-11 justify-content-center">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half fs-12"></i></span>
                                                        </div>
                                                        <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                            <span>(231)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between gap-2 flex-wrap align-items-end p-3 border-top border-block-start-dashed">
                                                <div class="min-w-fit-content d-flex gap-1 flex-wrap align-items-end justify-content-center">
                                                    <span class="fs-13 text-muted text-decoration-line-through">$874</span>
                                                    <h5 class="fw-semibold text-pink mb-0">$653</h5>
                                                </div>
                                                <a href="cart.php" class="btn btn-primary rounded-pill btn-sm">
                                                    <i class="ri-shopping-cart-line me-1 d-inline-block"></i> Add to Cart
                                                </a>
                                            </div>                                      
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                    <div class="card custom-card card-style-2">
                                        <div class="card-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-secondary">24% Off</span>
                                            </div>
                                            <div class="card-img-top">
                                                <div class="btns-container-1 align-items-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                    <a href="wishlist.php" class="btn btn-icon btn-secondary" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                </div>
                                                <div class="img-box-2">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/20.png" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent"> 
                                                </div>
                                            </div>
                                            <div class="p-3 text-center">
                                                <div class="align-items-end justify-content-between flex-wrap">
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);" class="text-success fs-12 fw-semibold">Sleek Elegance</a>
                                                        <h6 class="mb-1 fw-semibold fs-16"><a href="product-details.php">Smart Watch</a></h6>
                                                    </div>
                                                    <div class="d-flex align-items-baseline fs-11 justify-content-center">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half fs-12"></i></span>
                                                        </div>
                                                        <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                            <span>(110)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="d-flex justify-content-between gap-2 flex-wrap align-items-end p-3 border-top border-block-start-dashed">
                                                <div class="min-w-fit-content d-flex gap-1 flex-wrap align-items-end justify-content-center">
                                                    <span class="fs-13 text-muted text-decoration-line-through">$480</span>
                                                    <h5 class="fw-semibold text-pink mb-0">$322</h5>
                                                </div>
                                                <a href="cart.php" class="btn btn-primary rounded-pill btn-sm">
                                                    <i class="ri-shopping-cart-line me-1 d-inline-block"></i> Add to Cart
                                                </a>
                                            </div>                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                    <div class="card custom-card card-style-2">
                                        <div class="card-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-success">60% Off</span>
                                            </div>
                                            <div class="card-img-top">
                                                <div class="btns-container-1 align-items-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                    <a href="wishlist.php" class="btn btn-icon btn-secondary" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                </div>
                                                <div class="img-box-2">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/14.png" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent"> 
                                                </div>
                                            </div>
                                            <div class="p-3 text-center">
                                                <div class="align-items-end justify-content-between flex-wrap">
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);" class="text-success fs-12 fw-semibold">Serene Garden</a>
                                                        <h6 class="mb-1 fw-semibold fs-16"><a href="product-details.php">Digital Camera</a></h6>
                                                    </div>
                                                    <div class="d-flex align-items-baseline fs-11 justify-content-center">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half fs-12"></i></span>
                                                        </div>
                                                        <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                            <span>(211)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between gap-2 flex-wrap align-items-end p-3 border-top border-block-start-dashed">
                                                <div class="min-w-fit-content d-flex gap-1 flex-wrap align-items-end justify-content-center">
                                                    <span class="fs-13 text-muted text-decoration-line-through">$600</span>
                                                    <h5 class="fw-semibold text-pink mb-0">$560</h5>
                                                </div>
                                                <a href="cart.php" class="btn btn-primary rounded-pill btn-sm">
                                                    <i class="ri-shopping-cart-line me-1 d-inline-block"></i> Add to Cart
                                                </a>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                    <div class="card custom-card card-style-2">
                                        <div class="card-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-success">10% Off</span>
                                            </div>
                                            <div class="card-img-top">
                                                <div class="btns-container-1 align-items-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                    <a href="wishlist.php" class="btn btn-icon btn-secondary" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                </div>
                                                <div class="img-box-2">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/11.png" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent"> 
                                                </div>
                                            </div>
                                            <div class="p-3 text-center">
                                                <div class="align-items-end justify-content-between flex-wrap">
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);" class="text-success fs-12 fw-semibold">Crystal Clear</a>
                                                        <h6 class="mb-1 fw-semibold fs-16"><a href="product-details.php">Over coat</a></h6>
                                                    </div>
                                                    <div class="d-flex align-items-baseline fs-11 justify-content-center">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half fs-12"></i></span>
                                                        </div>
                                                        <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                            <span>(514)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between gap-2 flex-wrap align-items-end p-3 border-top border-block-start-dashed">
                                                <div class="min-w-fit-content d-flex gap-1 flex-wrap align-items-end justify-content-center">
                                                    <span class="fs-13 text-muted text-decoration-line-through">$920</span>
                                                    <h5 class="fw-semibold text-pink mb-0">$720</h5>
                                                </div>
                                                <a href="cart.php" class="btn btn-primary rounded-pill btn-sm">
                                                    <i class="ri-shopping-cart-line me-1 d-inline-block"></i> Add to Cart
                                                </a>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                    <div class="card custom-card card-style-2">
                                        <div class="card-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-success">60% Off</span>
                                            </div>
                                            <div class="card-img-top">
                                                <div class="btns-container-1 align-items-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                    <a href="wishlist.php" class="btn btn-icon btn-secondary" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                </div>
                                                <div class="img-box-2">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/13.png" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent"> 
                                                </div>
                                            </div>
                                            <div class="p-3 text-center">
                                                <div class="align-items-end justify-content-between flex-wrap">
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);" class="text-success fs-12 fw-semibold">Artisanal Comfort</a>
                                                        <h6 class="mb-1 fw-semibold fs-16"><a href="product-details.php">Wrist Watch</a></h6>
                                                    </div>
                                                    <div class="d-flex align-items-baseline fs-11 justify-content-center">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half fs-12"></i></span>
                                                        </div>
                                                        <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                            <span>(211)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="d-flex justify-content-between gap-2 flex-wrap align-items-end p-3 border-top border-block-start-dashed">
                                                <div class="min-w-fit-content d-flex gap-1 flex-wrap align-items-end justify-content-center">
                                                    <span class="fs-13 text-muted text-decoration-line-through">$330</span>
                                                    <h5 class="fw-semibold text-pink mb-0">$273</h5>
                                                </div>
                                                <a href="cart.php" class="btn btn-primary rounded-pill btn-sm">
                                                    <i class="ri-shopping-cart-line me-1 d-inline-block"></i> Add to Cart
                                                </a>
                                            </div>                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                    <div class="card custom-card card-style-2">
                                        <div class="card-body p-0">
                                            <div class="top-left-badge">
                                                <div class="badge bg-danger d-inline-flex lh-1 align-items-center text-fixed-white mb-1">
                                                    <div class="badge-icon"><i class="bx bxs-bolt"></i></div>
                                                    <div class="badge-text">Trending</div>
                                                </div>
                                                <span class="badge bg-warning">15% Off</span>
                                            </div>
                                            <div class="card-img-top">
                                                <div class="btns-container-1 align-items-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                    <a href="wishlist.php" class="btn btn-icon btn-secondary" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                </div>
                                                <div class="img-box-2">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/23.png" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent"> 
                                                </div>
                                            </div>
                                            <div class="p-3 text-center">
                                                <div class="align-items-end justify-content-between flex-wrap">
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);" class="text-success fs-12 fw-semibold">SmartSync 2024</a>
                                                        <h6 class="mb-1 fw-semibold fs-16"><a href="product-details.php">Sport Shoe</a></h6>
                                                    </div>
                                                    <div class="d-flex align-items-baseline fs-11 justify-content-center">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half fs-12"></i></span>
                                                        </div>
                                                        <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                            <span>(225)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between gap-2 flex-wrap align-items-end p-3 border-top border-block-start-dashed">
                                                <div class="min-w-fit-content d-flex gap-1 flex-wrap align-items-end justify-content-center">
                                                    <span class="fs-13 text-muted text-decoration-line-through">$698</span>
                                                    <h5 class="fw-semibold text-pink mb-0">$568</h5>
                                                </div>
                                                <a href="cart.php" class="btn btn-primary rounded-pill btn-sm">
                                                    <i class="ri-shopping-cart-line me-1 d-inline-block"></i> Add to Cart
                                                </a>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                    <div class="card custom-card card-style-2">
                                        <div class="card-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-danger">50% Off</span>
                                            </div>
                                            <div class="card-img-top">
                                                <div class="btns-container-1 align-items-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                    <a href="wishlist.php" class="btn btn-icon btn-secondary" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                </div>
                                                <div class="img-box-2">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/10.png" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent"> 
                                                </div>
                                            </div>
                                            <div class="p-3 text-center">
                                                <div class="align-items-end justify-content-between flex-wrap">
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);" class="text-success fs-12 fw-semibold">Casual Everyday</a>
                                                        <h6 class="mb-1 fw-semibold fs-16"><a href="product-details.php">Ceramic Pot</a></h6>
                                                    </div>
                                                    <div class="d-flex align-items-baseline fs-11 justify-content-center">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half fs-12"></i></span>
                                                        </div>
                                                        <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                            <span>(142)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between gap-2 flex-wrap align-items-end p-3 border-top border-block-start-dashed">
                                                <div class="min-w-fit-content d-flex gap-1 flex-wrap align-items-end justify-content-center">
                                                    <span class="fs-13 text-muted text-decoration-line-through">$336</span>
                                                    <h5 class="fw-semibold text-pink mb-0">$214</h5>
                                                </div>
                                                <a href="cart.php" class="btn btn-primary rounded-pill btn-sm">
                                                    <i class="ri-shopping-cart-line me-1 d-inline-block"></i> Add to Cart
                                                </a>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                    <div class="card custom-card card-style-2">
                                        <div class="card-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-info">15% Off</span>
                                            </div>
                                            <div class="card-img-top">
                                                <div class="btns-container-1 align-items-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                    <a href="wishlist.php" class="btn btn-icon btn-secondary" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                </div>
                                                <div class="img-box-2">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/9.png" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent"> 
                                                </div>
                                            </div>
                                            <div class="p-3 text-center">
                                                <div class="align-items-end justify-content-between flex-wrap">
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);" class="text-success fs-12 fw-semibold">SoundWave</a>
                                                        <h6 class="mb-1 fw-semibold fs-16"><a href="product-details.php">Flower Pot</a></h6>
                                                    </div>
                                                    <div class="d-flex align-items-baseline fs-11 justify-content-center">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half fs-12"></i></span>
                                                        </div>
                                                        <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                            <span>(142)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="d-flex justify-content-between gap-2 flex-wrap align-items-end p-3 border-top border-block-start-dashed">
                                                <div class="min-w-fit-content d-flex gap-1 flex-wrap align-items-end justify-content-center">
                                                    <span class="fs-13 text-muted text-decoration-line-through">$658</span>
                                                    <h5 class="fw-semibold text-pink mb-0">$457</h5>
                                                </div>
                                                <a href="cart.php" class="btn btn-primary rounded-pill btn-sm">
                                                    <i class="ri-shopping-cart-line me-1 d-inline-block"></i> Add to Cart
                                                </a>
                                            </div>                                       
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                    <div class="card custom-card card-style-2">
                                        <div class="card-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-secondary">21% Off</span>
                                            </div>
                                            <div class="card-img-top">
                                                <div class="btns-container-1 align-items-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                    <a href="wishlist.php" class="btn btn-icon btn-secondary" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                </div>
                                                <div class="img-box-2">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/17.png" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent"> 
                                                </div>
                                            </div>
                                            <div class="p-3 text-center">
                                                <div class="align-items-end justify-content-between flex-wrap">
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);" class="text-success fs-12 fw-semibold">Sonz</a>
                                                        <h6 class="mb-1 fw-semibold fs-16"><a href="product-details.php">Wireless Headsets</a></h6>
                                                    </div>
                                                    <div class="d-flex align-items-baseline fs-11 justify-content-center">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half fs-12"></i></span>
                                                        </div>
                                                        <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                            <span>(142)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between gap-2 flex-wrap align-items-end p-3 border-top border-block-start-dashed">
                                                <div class="min-w-fit-content d-flex gap-1 flex-wrap align-items-end justify-content-center">
                                                    <span class="fs-13 text-muted text-decoration-line-through">$987</span>
                                                    <h5 class="fw-semibold text-pink mb-0">$874</h5>
                                                </div>
                                                <a href="cart.php" class="btn btn-primary rounded-pill btn-sm">
                                                    <i class="ri-shopping-cart-line me-1 d-inline-block"></i> Add to Cart
                                                </a>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                    <div class="card custom-card card-style-2">
                                        <div class="card-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-success">60% Off</span>
                                            </div>
                                            <div class="card-img-top">
                                                <div class="btns-container-1 align-items-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                    <a href="wishlist.php" class="btn btn-icon btn-secondary" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                </div>
                                                <div class="img-box-2">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/16.png" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent"> 
                                                </div>
                                            </div>
                                            <div class="p-3 text-center">
                                                <div class="align-items-end justify-content-between flex-wrap">
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);" class="text-success fs-12 fw-semibold">AirPods Max</a>
                                                        <h6 class="mb-1 fw-semibold fs-16"><a href="product-details.php">Teddy Bear</a></h6>
                                                    </div>
                                                    <div class="d-flex align-items-baseline fs-11 justify-content-center">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half fs-12"></i></span>
                                                        </div>
                                                        <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                            <span>(211)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between gap-2 flex-wrap align-items-end p-3 border-top border-block-start-dashed">
                                                <div class="min-w-fit-content d-flex gap-1 flex-wrap align-items-end justify-content-center">
                                                    <span class="fs-13 text-muted text-decoration-line-through">$865</span>
                                                    <h5 class="fw-semibold text-pink mb-0">$763</h5>
                                                </div>
                                                <a href="cart.php" class="btn btn-primary rounded-pill btn-sm">
                                                    <i class="ri-shopping-cart-line me-1 d-inline-block"></i> Add to Cart
                                                </a>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-lg-6 col-xl-4 col-sm-6">
                                    <div class="card custom-card card-style-2">
                                        <div class="card-body p-0">
                                            <div class="top-left-badge">
                                                <span class="badge bg-success">10% Off</span>
                                            </div>
                                            <div class="card-img-top">
                                                <div class="btns-container-1 align-items-center gap-1">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-primary" data-bs-toggle="tooltip" aria-label="Quick View" data-bs-original-title="Quick View"><i class="bx bx-search"></i></a>
                                                    <a href="wishlist.php" class="btn btn-icon btn-secondary" data-bs-toggle="tooltip" aria-label="Add to Wishlist" data-bs-original-title="Add to Wishlist"><i class="bx bx-heart align-center"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-success" data-bs-toggle="tooltip" aria-label="Compare" data-bs-original-title="Compare"><i class="bx bx-adjust"></i></a>
                                                </div>
                                                <div class="img-box-2">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/11.png" alt="img" class="scale-img img-fluid w-100 bg-primary-transparent"> 
                                                </div>
                                            </div>
                                            <div class="p-3 text-center">
                                                <div class="align-items-end justify-content-between flex-wrap">
                                                    <div class="flex-grow-1">
                                                        <a href="javascript:void(0);" class="text-success fs-12 fw-semibold">Crystal Clear</a>
                                                        <h6 class="mb-1 fw-semibold fs-16"><a href="product-details.php">Over Coat</a></h6>
                                                    </div>
                                                    <div class="d-flex align-items-baseline fs-11 justify-content-center">
                                                        <div class="min-w-fit-content">
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-fill fs-12"></i></span>
                                                            <span class="text-warning"><i class="bi bi-star-half fs-12"></i></span>
                                                        </div>
                                                        <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                            <span>(514)</span>
                                                            <span>Ratings</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between gap-2 flex-wrap align-items-end p-3 border-top border-block-start-dashed">
                                                <div class="min-w-fit-content d-flex gap-1 flex-wrap align-items-end justify-content-center">
                                                    <span class="fs-13 text-muted text-decoration-line-through">$880</span>
                                                    <h5 class="fw-semibold text-pink mb-0">$771</h5>
                                                </div>
                                                <a href="cart.php" class="btn btn-primary rounded-pill btn-sm">
                                                    <i class="ri-shopping-cart-line me-1 d-inline-block"></i> Add to Cart
                                                </a>
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <!-- Start::pagination -->
                                    <nav aria-label="Page navigation" class="pagination-style-4 mt-3">
                                        <ul class="pagination text-center justify-content-center gap-1">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="javascript:void(0)">
                                                    Prev
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="javascript:void(0)">
                                                    <i class="bi bi-three-dots"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">16</a></li>
                                            <li class="page-item"><a class="page-link" href="javascript:void(0)">17</a></li>
                                            <li class="page-item">
                                                <a class="page-link text-primary" href="javascript:void(0)">
                                                    next
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- End::pagination -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card products-navigation-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Filter
                                    </div>
                                    <div class="ms-auto">
                                        <a href="javascript:void(0);" class="text-decoration-underline fw-medium text-success">Clear All</a>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-semibold mb-0">Categories</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-1" checked>
                                                <label class="form-check-label text-wrap pe-3" for="c-1">
                                                    Electronics <span class="fs-11 fw-normal text-muted">(2,712)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-2">
                                                <label class="form-check-label text-wrap pe-3" for="c-2">
                                                    Clothing & Apparel <span class="fs-11 fw-normal text-muted">(536)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-3" checked>
                                                <label class="form-check-label text-wrap pe-3" for="c-3">
                                                    Kitchen <span class="fs-11 fw-normal text-muted">(18,289)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-4" checked>
                                                <label class="form-check-label text-wrap pe-3" for="c-4">
                                                    Health & Beauty <span class="fs-11 fw-normal text-muted">(3,453)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="c-5">
                                                <label class="form-check-label text-wrap pe-3" for="c-5">
                                                    Sports <span class="fs-11 fw-normal text-muted">(7,165)</span>
                                                </label>
                                            </div>
                                            <div class="collapse" id="category-more">
                                                <div class="form-check mb-2 p-0">
                                                    <input class="form-check-input float-end" type="checkbox" value="" id="c-6">
                                                    <label class="form-check-label text-wrap pe-3" for="c-6">
                                                        Games <span class="fs-11 fw-normal text-muted">(5,964)</span>
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2 p-0">
                                                    <input class="form-check-input float-end" type="checkbox" value="" id="c-7">
                                                    <label class="form-check-label text-wrap pe-3" for="c-7">
                                                        Food & Grocery <span class="fs-11 fw-normal text-muted">(2,123)</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link mt-3" data-bs-toggle="collapse" href="#category-more" role="button" aria-expanded="false" aria-controls="category-more">MORE</a>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-semibold mb-0">Price Range</h6>
                                        <div class="py-3 pb-0">
                                            <div id="nonlinear"></div>
                                            <div class="d-flex mt-4">
                                                <div class="fw-semibold h6">$<span id="lower-value"></span></div>
                                                &nbsp; -- &nbsp; 
                                                <div class="fw-semibold h6">$<span id="upper-value"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-semibold mb-0">Discount</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="q-1">
                                                <label class="form-check-label text-wrap pe-3" for="q-1">
                                                    0% - 20%  <span class="fs-11 fw-normal text-muted">(245)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="q-2" checked>
                                                <label class="form-check-label text-wrap pe-3" for="q-2">
                                                    20% - 40% <span class="fs-11 fw-normal text-muted">(987)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="q-3">
                                                <label class="form-check-label text-wrap pe-3" for="q-3">
                                                    40% - 60% <span class="fs-11 fw-normal text-muted">(123)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="q-4" checked>
                                                <label class="form-check-label text-wrap pe-3" for="q-4">
                                                    60% - 80% <span class="fs-11 fw-normal text-muted">(987)</span>
                                                </label>
                                            </div>
                                            <div class="form-check p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="q-5">
                                                <label class="form-check-label text-wrap pe-3" for="q-5">
                                                    80% - 90% <span class="fs-11 fw-normal text-muted">(5,222)</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3 border-bottom">
                                        <h6 class="fw-semibold mb-0">Brand</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="j-1" checked>
                                                <label class="form-check-label text-wrap pe-3" for="j-1">
                                                    Ruby <span class="fs-11 fw-normal text-muted">(663)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="j-2" checked>
                                                <label class="form-check-label text-wrap pe-3" for="j-2">
                                                    Hadlirams <span class="fs-11 fw-normal text-muted">(2,514)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="j-3" checked>
                                                <label class="form-check-label text-wrap pe-3" for="j-3">
                                                    Xioami <span class="fs-11 fw-normal text-muted">(781)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="j-4">
                                                <label class="form-check-label text-wrap pe-3" for="j-4">
                                                    Samsnug <span class="fs-11 fw-normal text-muted">(20)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-0 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="j-5">
                                                <label class="form-check-label text-wrap pe-3" for="j-5">
                                                    Tommy & Hilfigure <span class="fs-11 fw-normal text-muted">(1,112)</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <h6 class="fw-semibold mb-0">Sizes</h6>
                                        <div class="py-3 pb-0">
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="e-1" checked>
                                                <label class="form-check-label text-wrap pe-3" for="e-1">
                                                    Extra Small (XS) <span class="fs-11 fw-normal text-muted">(574)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="e-2">
                                                <label class="form-check-label text-wrap pe-3" for="e-2">
                                                    Small (SM) <span class="fs-11 fw-normal text-muted">(1,474)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="e-3" checked>
                                                <label class="form-check-label text-wrap pe-3" for="e-3">
                                                    Medium (MD) <span class="fs-11 fw-normal text-muted">(12,245)</span>
                                                </label>
                                            </div>
                                            <div class="form-check mb-2 p-0">
                                                <input class="form-check-input float-end" type="checkbox" value="" id="e-4" checked>
                                                <label class="form-check-label text-wrap pe-3" for="e-4">
                                                    Large (L) <span class="fs-11 fw-normal text-muted">(877)</span>
                                                </label>
                                            </div>
                                            <div class="collapse" id="sizes-more">
                                                <div class="form-check mb-2 p-0">
                                                    <input class="form-check-input float-end" type="checkbox" value="" id="s-5">
                                                    <label class="form-check-label text-wrap pe-3" for="s-5">
                                                        Extra Large (XL) <span class="fs-11 fw-normal text-muted">(954)</span>
                                                    </label>
                                                </div>
                                                <div class="form-check mb-2 p-0">
                                                    <input class="form-check-input float-end" type="checkbox" value="" id="s-6">
                                                    <label class="form-check-label text-wrap pe-3" for="s-6">
                                                        XXL <span class="fs-11 fw-normal text-muted">(147)</span>
                                                    </label>
                                                </div>
                                                <div class="form-check mb-0 p-0">
                                                    <input class="form-check-input float-end" type="checkbox" value="" id="s-7">
                                                    <label class="form-check-label text-wrap pe-3" for="s-7">
                                                        XXXL <span class="fs-11 fw-normal text-muted">(324)</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <a class="ecommerce-more-link mt-3" data-bs-toggle="collapse" href="#sizes-more" role="button" aria-expanded="false" aria-controls="sizes-more">MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!-- End:: Row-1 -->

<?php $content = ob_get_clean(); ?>
<!-- This code is useful for content -->

<!-- This code is useful for internal scripts  -->
<?php ob_start(); ?>
	
        <!-- noUiSlider JS -->
        <script src="<?php echo $baseUrl; ?>/assets/libs/nouislider/nouislider.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/libs/wnumb/wNumb.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/js/ecommerce-price-range.js"></script>

<?php $scripts = ob_get_clean(); ?>
<!-- This code is useful for internal scripts  -->

<!-- This code use for render base file -->
<?php include 'layouts/base.php'; ?>
<!-- This code use for render base file -->
