
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
	
                    <!-- Start::page-header -->
                    <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div>
                            <h1 class="page-title fw-medium fs-18 mb-2">Ecommerce</h1>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0);">
                                        Dashboards
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Ecommerce</li>
                            </ol>
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
                    <!-- End::page-header -->

                    <!-- Start:: row-1 -->
                    <div class="row">
                        <div class="col-xxl-5">
                            <div class="card custom-card ecommerce-banner-card overflow-hidden shadow-none bg-primary-transparent text-default">
                                <div class="card-body p-4">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <h5 class="fw-semibold">
                                                Great Job, You're Almost There!
                                            </h5>
                                            <p class="text-muted mb-2">You're making excellent progress. Keep up the great work!</p>
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="fs-12 fw-medium text-muted">Sales Target: $10,000</span>
                                                <span class="badge bg-pink-transparent">Achieved: $8,500</span>
                                            </div>
                                            <button class="btn btn-primary btn-wave mt-3">View Details<i class="ti ti-arrow-right-circle align-middle mx-1 d-inline-flex"></i></button>
                                        </div>
                                        <div class="col-sm-4 text-end">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/media/media-72.png" alt="" class="d-sm-block d-none img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-body p-4">
                                            <div class="d-flex gap-3 align-items-start">
                                                <div class="avatar flex-shrink-0 bg-primary-transparent border border-primary border-opacity-10">
                                                    <i class="ti ti-package fs-20"></i>
                                                </div>
                                                <div>
                                                    <div class="mb-2">Total Orders</div>
                                                    <div class="d-flex gap-2 flex-wrap align-items-end">
                                                        <h4 class="mb-0">14,356</h4>
                                                        <div class="ms-auto">
                                                            <span class="badge bg-success-transparent text-success">0.45%<i class="ti ti-arrow-narrow-up ms-1 d-inline-block"></i></span><span class="fs-12 text-muted ms-1">This week</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-body p-4">
                                            <div class="d-flex gap-3 align-items-start">
                                                <div class="avatar flex-shrink-0 bg-secondary-transparent border border-secondary border-opacity-10">
                                                    <i class="ti ti-report-money fs-20"></i>
                                                </div>
                                                <div>
                                                    <div class="mb-2">Total Sales</div>
                                                    <div class="d-flex gap-2 flex-wrap align-items-end">
                                                        <h4 class="mb-0">16,789</h4>
                                                        <div class="ms-auto">
                                                            <span class="badge bg-success-transparent text-success">1.5%<i class="ti ti-arrow-narrow-up ms-1 d-inline-block"></i></span><span class="fs-12 text-muted ms-1">This week</span> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-body p-4">
                                            <div class="d-flex gap-3 align-items-start">
                                                <div class="avatar flex-shrink-0 bg-success-transparent border border-success border-opacity-10">
                                                    <i class="ti ti-currency-dollar fs-20"></i>
                                                </div>
                                                <div>
                                                    <div class="mb-2">Total income</div>
                                                    <div class="d-flex gap-2 flex-wrap align-items-end">
                                                        <h4 class="mb-0">$55.62</h4>
                                                        <div class="ms-auto">
                                                            <span class="badge bg-danger-transparent text-danger">0.25%<i class="ti ti-arrow-narrow-down ms-1 d-inline-block"></i></span><span class="fs-12 text-muted ms-1">This week</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card">
                                        <div class="card-body p-4">
                                            <div class="d-flex gap-3 align-items-start">
                                                <div class="avatar flex-shrink-0 bg-pink-transparent border border-pink border-opacity-10">
                                                    <i class="ti ti-pig-money fs-20"></i>
                                                </div>
                                                <div>
                                                    <div class="mb-2">Total Expenses</div>
                                                    <div class="d-flex gap-2 flex-wrap align-items-end">
                                                        <h4 class="mb-0">$72.56</h4>
                                                        <div>
                                                            <span class="badge bg-danger-transparent text-danger">0.35%<i class="ti ti-arrow-narrow-down ms-1 d-inline-block"></i></span><span class="fs-12 text-muted ms-1">This week</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Sales Statistics
                                    </div>
                                    <div class="dropdown"> 
                                        <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="true"> Sort By <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a> 
                                        <ul class="dropdown-menu"> 
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li> 
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li> 
                                        </ul> 
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="esales-stats"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Monthly Target Sales
                                    </div>
                                    <div class="dropdown"> 
                                        <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="true"> Sort By <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a> 
                                        <ul class="dropdown-menu"> 
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li> 
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li> 
                                        </ul> 
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div id="monthly-target"></div>
                                    <div class="d-flex align-items-center justify-content-between mt-3 flex-wrap gap-3 p-2 px-3 bg-light rounded-3">
                                        <div class="text-center">
                                            <div class="mb-2 text-muted fs-12">Revenue</div>
                                            <h6 class="mb-0 fw-semibold">$10,182</h6>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-2 text-primary fw-semibold">Target</div>
                                            <h6 class="mb-0 fw-semibold">$6,352 (75%)</h6>
                                        </div>
                                        <div class="text-center">
                                            <div class="mb-2 text-muted fs-12">Growth</div>
                                            <div class="mb-0 badge bg-success">1.5% <i class="ri-arrow-up-s-fill fs-12 lh-1"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Recent Transactions
                                    </div>
                                    <a href="javascript:void(0);" class="fs-12 text-muted"> View All<i class="ti ti-arrow-narrow-right ms-1 d-inline-flex"></i> </a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled ecommerce-transactions-list">
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-start flex-wrap gap-2">
                                                    <div>
                                                        <span class="avatar avatar-md bg-primary-transparent">
                                                            <i class="ri-paypal-line fs-20 lh-1"></i> 
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);">
                                                            <div class="fw-medium mb-1">PayPal</div>
                                                        </a>
                                                        <div class="fs-11 text-muted">30 Nov 2024, 12:30</div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="badge bg-success-transparent">Paid</span>
                                                    <div class="fw-medium mt-1">$13,750</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-start flex-wrap gap-2">
                                                    <div>
                                                        <span class="avatar avatar-md bg-secondary-transparent">
                                                            <i class="ri-wallet-3-line fs-20 lh-1"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);">
                                                            <div class="fw-medium mb-1">Digital Wallet</div>
                                                        </a>    
                                                        <div class="fs-11 text-muted">17 May 2024, 15:45</div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="badge bg-success-transparent">Paid</span>
                                                    <div class="fw-medium mt-1">$9,830</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-start flex-wrap gap-2">
                                                    <div>
                                                        <span class="avatar avatar-md bg-success-transparent">
                                                            <i class="ri-mastercard-line fs-20 lh-1"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);">
                                                            <div class="fw-medium mb-1">MasterCard</div>
                                                        </a>    
                                                        <div class="fs-11 text-muted">22 Feb 2024, 14:30</div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="badge bg-warning-transparent">Pending</span>
                                                    <div class="fw-medium mt-1">$8,560</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-start flex-wrap gap-2">
                                                    <div>
                                                        <span class="avatar avatar-md bg-info-transparent">
                                                            <i class="ri-visa-line fs-20 lh-1"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);">
                                                            <div class="fw-medium mb-1">Visa</div>
                                                        </a>    
                                                        <div class="fs-11 text-muted">10 Mar 2024, 17:00</div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="badge bg-success-transparent">Paid</span>
                                                    <div class="fw-medium mt-1">$6,720</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-start flex-wrap gap-2">
                                                    <div>
                                                        <span class="avatar avatar-md bg-warning-transparent">
                                                            <i class="ri-alipay-line fs-20 lh-1"></i>
                                                        </span>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);">
                                                            <div class="fw-medium mb-1">AliPay</div>
                                                        </a>    
                                                        <div class="fs-11 text-muted">25 Apr 2024, 08:10</div>
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <span class="badge bg-success-transparent">Paid</span>
                                                    <div class="fw-medium mt-1">$5,490</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Sales Report
                                    </div>
                                    <div class="dropdown"> 
                                        <a href="javascript:void(0);" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown" aria-expanded="true"> Sort By <i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> </a> 
                                        <ul class="dropdown-menu"> 
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last Week</a></li> 
                                            <li><a class="dropdown-item" href="javascript:void(0);">This Month</a></li> 
                                        </ul> 
                                    </div>
                                </div>
                                <div class="card-body py-0">
                                    <div id="sales-report"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Top products
                                    </div>
                                    <a href="javascript:void(0);" class="fs-12 text-muted"> View All<i class="ti ti-arrow-narrow-right ms-1 d-inline-flex"></i> </a>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar avatar-md">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/jpg/1.jpg" alt="">
                                                </div>
                                                <div>
                                                    <div class="fw-medium">Wireless Headsets</div> 
                                                    <div class="fs-12 text-muted">Amini trends</div>
                                                </div>
                                                <div class="text-end ms-auto"> 
                                                    <span class="fs-12 text-muted">Increased By
                                                        <span class="text-success fs-12 ms-1 fw-medium d-inline-block">1.67%</span>
                                                    </span>
                                                    <div class="fw-semibold mt-1">1,754</div> 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar avatar-md">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/jpg/5.jpg" alt="Laptop">
                                                </div>
                                                <div>
                                                    <div class="fw-medium">MacBook Pro</div>
                                                    <div class="fs-12 text-muted">Appie</div>
                                                </div>
                                                <div class="text-end ms-auto"> 
                                                    <span class="fs-12 text-muted">Increased By
                                                        <span class="text-success fs-12 ms-1 fw-medium d-inline-block">3.45%</span>
                                                    </span>
                                                    <div class="fw-semibold mt-1">2,345</div> 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar avatar-md">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/jpg/8.jpg" alt="Smartwatch">
                                                </div>
                                                <div>
                                                    <div class="fw-medium">Galaxy Watch 6</div>
                                                    <div class="fs-12 text-muted">Sonic yseries</div>
                                                </div>
                                                <div class="text-end ms-auto"> 
                                                    <span class="fs-12 text-muted">Increased By
                                                        <span class="text-success fs-12 ms-1 fw-medium d-inline-block">4.12%</span>
                                                    </span>
                                                    <div class="fw-semibold mt-1">1,987</div> 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar avatar-md">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/jpg/7.jpg" alt="Speaker">
                                                </div>
                                                <div>
                                                    <div class="fw-medium">Bluetooth Speaker</div>
                                                    <div class="fs-12 text-muted">Lion Rocks</div>
                                                </div>
                                                <div class="text-end ms-auto"> 
                                                    <span class="fs-12 text-muted">Increased By
                                                        <span class="text-success fs-12 ms-1 fw-medium d-inline-block">2.56%</span>
                                                    </span>
                                                    <div class="fw-semibold mt-1">3,450</div> 
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="avatar avatar-md">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/jpg/3.jpg" alt="Camera">
                                                </div>
                                                <div>
                                                    <div class="fw-medium">Canon EOS 5D Mark IV</div>
                                                    <div class="fs-12 text-muted">Canon</div>
                                                </div>
                                                <div class="text-end ms-auto"> 
                                                    <span class="fs-12 text-muted">Increased By
                                                        <span class="text-success fs-12 ms-1 fw-medium d-inline-block">1.89%</span>
                                                    </span>
                                                    <div class="fw-semibold mt-1">1,654</div> 
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                    Top Rated Products
                                    </div>
                                    <div class="d-sm-flex">
                                        <div class="me-3 mb-3 mb-sm-0">
                                            <input class="form-control form-control-sm" type="text" placeholder="Search" aria-label=".form-control-sm example">
                                        </div>
                                        <div class="dropdown">
                                            <a href="javascript:void(0);" class="btn btn-primary btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                                                Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="javascript:void(0);">New</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li>
                                                <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Product Id</th>
                                                    <th scope="col">Product Name</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">% Discount</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Rating</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium">#1634215</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-md bg-light">
                                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/jpg/1.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fs-14">Nois Headphones</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">Audio</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">35%</span>
                                                    </td>
                                                    <td>
                                                        $189.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Published</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium"><i class="ri-star-line text-warning"></i> 4.8</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-sm btn-icon btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-sm btn-icon btn-success-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-sm btn-icon btn-danger-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium">#1724620</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-md bg-light">
                                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/jpg/8.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fs-14">Smart Watch</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">Gadget</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-pink-transparent">15%</span>
                                                    </td>
                                                    <td>
                                                        $350.00
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-warning-transparent">Pending</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium"><i class="ri-star-line text-warning"></i> 4.6</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-sm btn-icon btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-sm btn-icon btn-success-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-sm btn-icon btn-danger-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium">#1843290</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-md bg-light">
                                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/jpg/7.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fs-14">Speaker</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">Electronics</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">25%</span>
                                                    </td>
                                                    <td>
                                                        $799.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-info-transparent">Saved as Draft</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium"><i class="ri-star-line text-warning"></i> 4.7</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-sm btn-icon btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-sm btn-icon btn-success-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-sm btn-icon btn-danger-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium">#1934725</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-md bg-light">
                                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/jpg/5.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fs-14">Laptop 4.2 </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">Electronics</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-primary-transparent">20%</span>
                                                    </td>
                                                    <td>
                                                        $1,299.00
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-success-transparent">Published</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium"><i class="ri-star-line text-warning"></i> 5.0</span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-sm btn-icon btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-sm btn-icon btn-success-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-sm btn-icon btn-danger-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="fw-medium">#2938471</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="me-2 lh-1">
                                                                <span class="avatar avatar-md bg-light">
                                                                    <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/jpg/3.jpg" alt="">
                                                                </span>
                                                            </div>
                                                            <div class="fs-14">Camera</div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium">Electronics</span>
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-pink-transparent">15%</span>
                                                    </td>
                                                    <td>
                                                        $799.99
                                                    </td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">Out of Stock</span>
                                                    </td>
                                                    <td>
                                                        <span class="fw-medium"><i class="ri-star-line text-warning"></i> 4.9 </span>
                                                    </td>
                                                    <td>
                                                        <div class="btn-list">
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View" class="btn btn-sm btn-icon btn-primary-light"><i class="ti ti-eye"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit" class="btn btn-sm btn-icon btn-success-light"><i class="ti ti-pencil"></i></a>
                                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delete" class="btn btn-sm btn-icon btn-danger-light"><i class="ti ti-trash"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-medium"></i>
                                        </div>
                                        <div class="ms-auto">
                                            <nav aria-label="Page navigation" class="pagination-style-4">
                                                <ul class="pagination mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link" href="javascript:void(0);">
                                                            Prev
                                                        </a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link text-primary" href="javascript:void(0);">
                                                            next
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

<?php $content = ob_get_clean(); ?>
<!-- This code is useful for content -->

<!-- This code is useful for internal scripts  -->
<?php ob_start(); ?>
        
        <!-- Apex Charts JS -->
        <script src="<?php echo $baseUrl; ?>/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Ecommerce Dashboard --> 
        <script src="<?php echo $baseUrl; ?>/assets/js/ecommerce-dashboard.js"></script>

<?php $scripts = ob_get_clean(); ?>
<!-- This code is useful for internal scripts  -->

<!-- This code use for render base file -->
<?php include 'layouts/base.php'; ?>
<!-- This code use for render base file -->
