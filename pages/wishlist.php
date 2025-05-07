
<!-- This code generates the base URL for the website by combining the protocol, domain name, and directory path -->
<?php
    $rootFolder = basename($_SERVER['DOCUMENT_ROOT']);
    $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . str_replace('/pages', '', dirname($_SERVER['SCRIPT_NAME']));
?>
<!-- This code generates the base URL for the website by combining the protocol, domain name, and directory path -->

<!-- This code is useful for internal styles  -->
<?php ob_start(); ?>

        <!-- sweetalert CSS -->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/libs/sweetalert2/sweetalert2.min.css">

<?php $styles = ob_get_clean(); ?>
<!-- This code is useful for internal styles  -->

<!-- This code is useful for content -->
<?php ob_start(); ?>
	
                    <!-- Page Header -->
                    <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div>
                            <h1 class="page-title fw-medium fs-18 mb-2">Wishlist</h1>
                            <div>
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                        <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
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
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        My Wishlists
                                    </div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <div>
                                            <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body card-body m-3 bg-light p-2 rounded mt-2">
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 ps-2">
                                        <p class="mb-0 fs-15">Adding<span class="text-secondary fw-semibold"> 08 items</span> in your wishlist</p>
                                        <a href="checkout.php" class="btn btn-secondary-light">Checkout All <i class="ti ti-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!--start::row-2 -->
                    <div class="row">
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="card custom-card card-style-3">
                                <a href="javascript:void(0);" class="btn-delete wishlist-remove btn btn-pink btn-sm btn-icon"><i class="ri-delete-bin-line align-middle"></i></a>
                                <div class="card-body p-3">
                                    <div class="mb-3">
                                        <div class="bg-primary-transparent rounded-2 mb-3 mb-md-0">
                                            <a href="javascript:void(0);">
                                                <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/20.png" alt="img" class="img-fluid w-100 rounded">
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-start justify-content-between mb-2 flex-wrap">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2 fw-semibold"><a href="product-details.php">Smart Watch</a></h6>
                                                <div class="min-w-fit-content fw-normal mb-1 fs-13 fw-medium text-success">In Stock</div>
                                                <div class="d-flex align-items-baseline gap-2 mb-1">
                                                    <h6 class="fs-22 mb-2 fw-semibold">$251</h6>
                                                    <span class="fs-12 text-muted text-decoration-line-through op-7">$399</span>
                                                    <span class="badge bg-orange-transparent ms-2">30% Off</span>
                                                </div>
                                            </div>
                                            <div class="fs-13 ms-auto">
                                                <div class="min-w-fit-content  fs-11">
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                </div>
                                                <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                    <span>4.5</span>
                                                    <span class="fs-10 text-pink fw-medium">(23 rated)</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <a href="product-details.php" class="btn btn-primary btn-w-md"><i class="ri-shopping-cart-line me-1"></i> Add Cart</a>
                                            <a href="javascript:void(0);" class="btn btn-secondary btn-w-md"><i class="ri-bookmark-line me-1"></i> Save for Later</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="card custom-card card-style-3">
                                <a href="javascript:void(0);" class="btn-delete wishlist-remove btn btn-pink btn-sm btn-icon"><i class="ri-delete-bin-line align-middle"></i></a>
                                <div class="card-body p-3">
                                    <div class="mb-3">
                                        <div class="bg-primary-transparent rounded-2 mb-3 mb-md-0">
                                            <a href="javascript:void(0);">
                                                <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/17.png" alt="img" class="img-fluid w-100 rounded">
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-start justify-content-between mb-2">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2 fw-semibold"><a href="product-details.php">Wireless Headsets</a></h6>
                                                <div class="min-w-fit-content fw-normal mb-1 fs-13 fw-medium text-danger">Only 4 Left </div>
                                                <div class="d-flex align-items-baseline gap-2 mb-1">
                                                    <h6 class="fs-22 mb-2 fw-semibold">$874</h6>
                                                    <span class="fs-12 text-muted text-decoration-line-through op-7">$958</span>
                                                    <span class="badge bg-orange-transparent ms-2">50% Off</span>
                                                </div>
                                            </div>
                                            <div class="fs-13 ms-auto">
                                                <div class="min-w-fit-content  fs-11">
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                </div>
                                                <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                    <span>4.5</span>
                                                    <span class="fs-10 text-pink fw-medium">(23 rated)</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <a href="product-details.php" class="btn btn-primary btn-w-md"><i class="ri-shopping-cart-line me-1"></i> Add Cart</a>
                                            <a href="javascript:void(0);" class="btn btn-secondary btn-w-md"><i class="ri-bookmark-line me-1"></i> Save for Later</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="card custom-card card-style-3">
                                <a href="javascript:void(0);" class="btn-delete wishlist-remove btn btn-pink btn-sm btn-icon"><i class="ri-delete-bin-line align-middle"></i></a>
                                <div class="card-body p-3">
                                    <div class="mb-3">
                                        <div class="bg-primary-transparent rounded-2 mb-3 mb-md-0">
                                            <a href="javascript:void(0);">
                                                <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/15.png" alt="img" class="img-fluid w-100 rounded">
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-start justify-content-between mb-2">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2 fw-semibold"><a href="product-details.php">Voluptatem Alarm Clock</a></h6>
                                                <div class="min-w-fit-content fw-normal mb-1 fs-13 fw-medium text-success">In Stock</div>
                                                <div class="d-flex align-items-baseline gap-2 mb-1">
                                                    <h6 class="fs-22 mb-2 fw-semibold">$48</h6>
                                                    <span class="fs-12 text-muted text-decoration-line-through op-7">$57</span>
                                                    <span class="badge bg-orange-transparent ms-2">10% Off</span>
                                                </div>
                                            </div>
                                            <div class="fs-13 ms-auto">
                                                <div class="min-w-fit-content  fs-11">
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                </div>
                                                <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                    <span>4.5</span>
                                                    <span class="fs-10 text-pink fw-medium">(23 rated)</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <a href="product-details.php" class="btn btn-primary btn-w-md"><i class="ri-shopping-cart-line me-1"></i> Add Cart</a>
                                            <a href="javascript:void(0);" class="btn btn-secondary btn-w-md"><i class="ri-bookmark-line me-1"></i> Save for Later</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="card custom-card card-style-3">
                                <a href="javascript:void(0);" class="btn-delete wishlist-remove btn btn-pink btn-sm btn-icon"><i class="ri-delete-bin-line align-middle"></i></a>
                                <div class="card-body p-3">
                                    <div class="mb-3">
                                        <div class="bg-primary-transparent rounded-2 mb-3 mb-md-0">
                                            <a href="javascript:void(0);">
                                                <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/12.png" alt="img" class="img-fluid w-100 rounded">
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-start justify-content-between mb-2">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2 fw-semibold"><a href="product-details.php">Ladies Hand Bag</a></h6>
                                                <div class="min-w-fit-content fw-normal mb-1 fs-13 fw-medium text-success">In Stock</div>
                                                <div class="d-flex align-items-baseline gap-2 mb-1">
                                                    <h6 class="fs-22 mb-2 fw-semibold">$1,578</h6>
                                                    <span class="fs-12 text-muted text-decoration-line-through op-7">$1,877</span>
                                                    <span class="badge bg-orange-transparent ms-2">25% Off</span>
                                                </div>
                                            </div>
                                            <div class="fs-13 ms-auto">
                                                <div class="min-w-fit-content  fs-11">
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                </div>
                                                <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                    <span>4.5</span>
                                                    <span class="fs-10 text-pink fw-medium">(23 rated)</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <a href="product-details.php" class="btn btn-primary btn-w-md"><i class="ri-shopping-cart-line me-1"></i> Add Cart</a>
                                            <a href="javascript:void(0);" class="btn btn-secondary btn-w-md"><i class="ri-bookmark-line me-1"></i> Save for Later</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="card custom-card card-style-3">
                                <a href="javascript:void(0);" class="btn-delete wishlist-remove btn btn-pink btn-sm btn-icon"><i class="ri-delete-bin-line align-middle"></i></a>
                                <div class="card-body p-3">
                                    <div class="mb-3">
                                        <div class="bg-primary-transparent rounded-2 mb-3 mb-md-0">
                                            <a href="javascript:void(0);">
                                                <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/10.png" alt="img" class="img-fluid w-100 rounded">
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-start justify-content-between mb-2">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2 fw-semibold"><a href="product-details.php">Ceramic Kettle</a></h6>
                                                <div class="min-w-fit-content fw-normal mb-1 fs-13 fw-medium text-danger">Out of Stock</div>
                                                <div class="d-flex align-items-baseline gap-2 mb-1">
                                                    <h6 class="fs-22 mb-2 fw-semibold">$1,578</h6>
                                                    <span class="fs-12 text-muted text-decoration-line-through op-7">$1,877</span>
                                                    <span class="badge bg-orange-transparent ms-2">25% Off</span>
                                                </div>
                                            </div>
                                            <div class="fs-13 ms-auto">
                                                <div class="min-w-fit-content  fs-11">
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                </div>
                                                <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                    <span>4.5</span>
                                                    <span class="fs-10 text-pink fw-medium">(23 rated)</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <a href="product-details.php" class="btn btn-primary btn-w-md"><i class="ri-shopping-cart-line me-1"></i> Add Cart</a>
                                            <a href="javascript:void(0);" class="btn btn-secondary btn-w-md"><i class="ri-bookmark-line me-1"></i> Save for Later</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="card custom-card card-style-3">
                                <a href="javascript:void(0);" class="btn-delete wishlist-remove btn btn-pink btn-sm btn-icon"><i class="ri-delete-bin-line align-middle"></i></a>
                                <div class="card-body p-3">
                                    <div class="mb-3">
                                        <div class="bg-primary-transparent rounded-2 mb-3 mb-md-0">
                                            <a href="javascript:void(0);">
                                                <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/23.png" alt="Shoes" class="img-fluid w-100 rounded">
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-start justify-content-between mb-2">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2 fw-semibold"><a href="product-details.php">Running Shoes</a></h6>
                                                <div class="min-w-fit-content fw-normal mb-1 fs-13 fw-medium text-success">In Stock</div>
                                                <div class="d-flex align-items-baseline gap-2 mb-1">
                                                    <h6 class="fs-22 mb-2 fw-semibold">$120</h6>
                                                    <span class="fs-12 text-muted text-decoration-line-through op-7">$150</span>
                                                    <span class="badge bg-orange-transparent ms-2">20% Off</span>
                                                </div>
                                            </div>
                                            <div class="fs-13 ms-auto">
                                                <div class="min-w-fit-content fs-11">
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                </div>
                                                <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                    <span>4.2</span>
                                                    <span class="fs-10 text-pink fw-medium">(35 rated)</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <a href="product-details.php" class="btn btn-primary btn-w-md"><i class="ri-shopping-cart-line me-1"></i> Add Cart</a>
                                            <a href="javascript:void(0);" class="btn btn-secondary btn-w-md"><i class="ri-bookmark-line me-1"></i> Save for Later</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="card custom-card card-style-3">
                                <a href="javascript:void(0);" class="btn-delete wishlist-remove btn btn-pink btn-sm btn-icon"><i class="ri-delete-bin-line align-middle"></i></a>
                                <div class="card-body p-3">
                                    <div class="mb-3">
                                        <div class="bg-primary-transparent rounded-2 mb-3 mb-md-0">
                                            <a href="javascript:void(0);">
                                                <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/6.png" alt="img" class="img-fluid w-100 rounded">
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-start justify-content-between mb-2">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2 fw-semibold"><a href="product-details.php">Longlength Chair</a></h6>
                                                <div class="min-w-fit-content fw-normal mb-1 fs-13 fw-medium text-success">In Stock</div>
                                                <div class="d-flex align-items-baseline gap-2 mb-1">
                                                    <h6 class="fs-22 mb-2 fw-semibold">$687</h6>
                                                    <span class="fs-12 text-muted text-decoration-line-through op-7">$874</span>
                                                    <span class="badge bg-orange-transparent ms-2">14% Off</span>
                                                </div>
                                            </div>
                                            <div class="fs-13 ms-auto">
                                                <div class="min-w-fit-content  fs-11">
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star"></i></span>
                                                </div>
                                                <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                    <span>4.5</span>
                                                    <span class="fs-10 text-pink fw-medium">(23 rated)</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <a href="product-details.php" class="btn btn-primary btn-w-md"><i class="ri-shopping-cart-line me-1"></i> Add Cart</a>
                                            <a href="javascript:void(0);" class="btn btn-secondary btn-w-md"><i class="ri-bookmark-line me-1"></i> Save for Later</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-4 col-sm-6">
                            <div class="card custom-card card-style-3">
                                <a href="javascript:void(0);" class="btn-delete wishlist-remove btn btn-pink btn-sm btn-icon"><i class="ri-delete-bin-line align-middle"></i></a>
                                <div class="card-body p-3">
                                    <div class="mb-3">
                                        <div class="bg-primary-transparent rounded-2 mb-3 mb-md-0">
                                            <a href="javascript:void(0);">
                                                <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/14.png" alt="Camera" class="img-fluid w-100 rounded">
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-start justify-content-between mb-2">
                                            <div class="flex-grow-1">
                                                <h6 class="mb-2 fw-semibold"><a href="product-details.php">Dais Camera</a></h6>
                                                <div class="min-w-fit-content fw-normal mb-1 fs-13 fw-medium text-success">In Stock</div>
                                                <div class="d-flex align-items-baseline gap-2 mb-1">
                                                    <h6 class="fs-22 mb-2 fw-semibold">$799</h6>
                                                    <span class="fs-12 text-muted text-decoration-line-through op-7">$999</span>
                                                    <span class="badge bg-orange-transparent ms-2">20% Off</span>
                                                </div>
                                            </div>
                                            <div class="fs-13 ms-auto">
                                                <div class="min-w-fit-content fs-11">
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-fill"></i></span>
                                                    <span class="text-warning"><i class="bi bi-star-half"></i></span>
                                                </div>
                                                <p class="mb-0 ms-1 min-w-fit-content text-muted">
                                                    <span>4.7</span>
                                                    <span class="fs-10 text-pink fw-medium">(50 rated)</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 flex-wrap">
                                            <a href="product-details.php" class="btn btn-primary btn-w-md"><i class="ri-shopping-cart-line me-1"></i> Add Cart</a>
                                            <a href="javascript:void(0);" class="btn btn-secondary btn-w-md"><i class="ri-bookmark-line me-1"></i> Save for Later</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                        
                        <div class="col-xl-12">
                            <div class="d-flex align-items-center flex-wrap overflow-auto mb-3">
                                <div class="ms-auto">
                                    <ul class="pagination mb-0 overflow-auto me-1 me-sm-0">
                                        <li class="page-item disabled">
                                            <a class="page-link">Previous</a>
                                        </li>
                                        <li class="page-item active" aria-current="page"><a class="page-link" href="javascript:void(0)">1</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0)">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript:void(0)">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-2 -->

<?php $content = ob_get_clean(); ?>
<!-- This code is useful for content -->

<!-- This code is useful for internal scripts  -->
<?php ob_start(); ?>
	
        <!-- Sweetalerts JS -->
        <script src="<?php echo $baseUrl; ?>/assets/libs/sweetalert2/sweetalert2.min.js"></script>

        <!-- Wishlist JS -->
        <script src="<?php echo $baseUrl; ?>/assets/js/wishlist.js"></script>

<?php $scripts = ob_get_clean(); ?>
<!-- This code is useful for internal scripts  -->

<!-- This code use for render base file -->
<?php include 'layouts/base.php'; ?>
<!-- This code use for render base file -->
