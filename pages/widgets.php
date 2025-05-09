
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
                            <h1 class="page-title fw-medium fs-18 mb-2">Widgets</h1>
                            <div class="">
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Widgets</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Widgets</li>
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
                    <div class="row row-cols-xxl-5">
                        <div class="col">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                                        <div>
                                            <span class="avatar avatar-sm bg-primary">
                                                <i class="ri-bar-chart-box-line fs-16"></i>
                                            </span>
                                        </div>
                                        <div class="flex-fill text-muted fs-14">Total Sales</div>
                                        <div class="dropdown"> 
                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class=""> 
                                                <i class="ri-more-2-fill fs-5 text-muted"></i>
                                            </a> 
                                            <ul class="dropdown-menu" role="menu"> 
                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li> 
                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li> 
                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li> 
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="h4 fw-semibold mb-1 d-flex align-items-center flex-wrap gap-2">42,312 <span class="badge bg-success-transparent fs-10"><i class="ri-arrow-left-up-line"></i>+1.64%</span></div>
                                    </div>
                                    <div id="chart-5"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                                        <div>
                                            <span class="avatar avatar-sm bg-secondary">
                                                <i class="ri-wallet-3-line fs-16"></i>
                                            </span>
                                        </div>
                                        <div class="flex-fill text-muted fs-14">Revenue</div>
                                        <div class="dropdown"> 
                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class=""> 
                                                <i class="ri-more-2-fill fs-5 text-muted"></i>
                                            </a> 
                                            <ul class="dropdown-menu" role="menu"> 
                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li> 
                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li> 
                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li> 
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="h4 fw-semibold mb-1 d-flex align-items-center flex-wrap gap-2">$1,24,328 <span class="badge bg-success-transparent fs-10"><i class="ri-arrow-left-up-line"></i>+0.52%</span></div>
                                    </div>
                                    <div id="chart-6"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                                        <div>
                                            <span class="avatar avatar-sm bg-success">
                                                <i class="ri-group-line fs-16"></i>
                                            </span>
                                        </div>
                                        <div class="flex-fill text-muted fs-14">Customers</div>
                                        <div class="dropdown"> 
                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class=""> 
                                                <i class="ri-more-2-fill fs-5 text-muted"></i>
                                            </a> 
                                            <ul class="dropdown-menu" role="menu"> 
                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li> 
                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li> 
                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li> 
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="h4 fw-semibold mb-1 d-flex align-items-center flex-wrap gap-2">3,25,366 <span class="badge bg-danger-transparent fs-10"><i class="ri-arrow-left-down-line"></i>-4.56%</span></div>
                                    </div>
                                    <div id="chart-7"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                                        <div>
                                            <span class="avatar avatar-sm bg-pink">
                                                <i class="ri-money-dollar-circle-line fs-16"></i>
                                            </span>
                                        </div>
                                        <div class="flex-fill text-muted fs-14">Profit</div>
                                        <div class="dropdown"> 
                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class=""> 
                                                <i class="ri-more-2-fill fs-5 text-muted"></i>
                                            </a> 
                                            <ul class="dropdown-menu" role="menu"> 
                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li> 
                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li> 
                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li> 
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="h4 fw-semibold mb-1 d-flex align-items-center flex-wrap gap-2">$0.34M <span class="badge bg-success-transparent fs-10"><i class="ri-arrow-left-up-line"></i>+2.5%</span></div>
                                    </div>
                                    <div id="chart-8"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                                        <div>
                                            <span class="avatar avatar-sm bg-info">
                                                <i class="ri-currency-line fs-16"></i>
                                            </span>
                                        </div>
                                        <div class="flex-fill text-muted fs-14">Income</div>
                                        <div class="dropdown"> 
                                            <a aria-label="anchor" href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class=""> 
                                                <i class="ri-more-2-fill fs-5 text-muted"></i>
                                            </a> 
                                            <ul class="dropdown-menu dropdown-menu-end" role="menu"> 
                                                <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li> 
                                                <li><a class="dropdown-item" href="javascript:void(0);">Day</a></li> 
                                                <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li> 
                                            </ul> 
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="h4 fw-semibold mb-1 d-flex align-items-center flex-wrap gap-2">$1.2M<span class="badge bg-success-transparent fs-10"><i class="ri-arrow-left-up-line"></i>+0.45%</span></div>
                                    </div>
                                    <div id="chart-9"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start::row-2 -->
                    <div class="row">
                        <div class="col-xxl-6 col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Sales Revenue
                                    </div>
                                    <a href="javascript:void(0);" class="fs-12 text-primary"> View All<i class="ti ti-arrow-narrow-right ms-1 d-inline-flex"></i> </a>
                                </div>
                                <div class="card-body">
                                    <div id="salerevenue2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Active Customers
                                    </div>
                                    <a href="javascript:void(0);" class="fs-12 text-primary"> View All<i class="ti ti-arrow-narrow-right ms-1 d-inline-flex"></i> </a>
                                </div>
                                <div class="card-body">

                                    <div id="activecustomers"></div>
                                </div>
                                <div class="card-footer">
                                    <div class="row mt-0">
                                        <div class="col-6 border-end border-inline-end-dashed text-center">
                                            <p class="text-muted mb-1 fs-12">Male</p>
                                            <h6 class="text-secondary">12.34K</h6>
                                        </div>
                                        <div class="col-6 text-center">
                                            <p class="text-muted mb-1 fs-12">Female</p>
                                            <h6 class="text-primary">10.19K</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Top Sales
                                    </div>
                                    <a href="javascript:void(0);" class="fs-12 text-primary"> View All<i class="ti ti-arrow-narrow-right ms-1 d-inline-flex"></i> </a>
                                </div>
                                <div id="top-sales"></div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <div>
                                            <div class="flex-fill fs-13 text-muted">Number Of Sales</div>
                                            <div class="fs-22 fw-semibold text-primary">12,432</div>
                                        </div>
                                        <div class="avatar avatar-md avatar-rounded bg-primary svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                <path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="d-flex align-items-center mb-1">
                                                <span class="badge rounded-pill bg-danger-transparent text-danger me-2"><i class="ri-arrow-left-down-line fs-11"></i></span>
                                                <span class="fs-14">8%</span>
                                            </div>
                                            <p class="fs-11 text-muted mb-0">This Month</p>
                                        </div>
                                        <div class="col-xl-6">
                                            <div id="chart-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <div>
                                            <div class="flex-fill fs-13 text-muted">Profit By Sale</div>
                                            <div class="fs-22 fw-semibold text-warning">$5,472</div>
                                        </div>
                                        <div class="avatar avatar-md avatar-rounded bg-warning svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                <path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="d-flex align-items-center mb-1">
                                                <span class="badge rounded-pill bg-success-transparent me-2"><i class="ri-arrow-left-up-line fs-11"></i></span>
                                                <span class="fs-14">9%</span>
                                            </div>
                                            <p class="fs-11 text-muted mb-0">This Month</p>
                                        </div>
                                        <div class="col-xl-6">
                                            <div id="chart-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <div>
                                            <div class="flex-fill fs-13 text-muted">Total Revenue</div>
                                            <div class="fs-22 fw-semibold text-success">$1,24,624</div>
                                        </div>
                                        <div class="avatar avatar-md avatar-rounded bg-success svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                <path d="M216,56H176V48a24,24,0,0,0-24-24H104A24,24,0,0,0,80,48v8H40A16,16,0,0,0,24,72V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V72A16,16,0,0,0,216,56ZM96,48a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96ZM216,72v41.61A184,184,0,0,1,128,136a184.07,184.07,0,0,1-88-22.38V72Zm0,128H40V131.64A200.19,200.19,0,0,0,128,152a200.25,200.25,0,0,0,88-20.37V200ZM104,112a8,8,0,0,1,8-8h32a8,8,0,0,1,0,16H112A8,8,0,0,1,104,112Z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="d-flex align-items-center mb-1">
                                                <span class="badge rounded-pill bg-danger-transparent text-danger me-2"><i class="ri-arrow-left-down-line fs-11"></i></span>
                                                <span class="fs-14">7%</span>
                                            </div>
                                            <p class="fs-11 text-muted mb-0">This Month</p>
                                        </div>
                                        <div class="col-xl-6">
                                            <div id="chart-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <div>
                                            <div class="flex-fill fs-13 text-muted">Total Customers</div>
                                            <div class="fs-22 fw-semibold text-pink">1,032</div>
                                        </div>
                                        <div class="avatar avatar-md avatar-rounded bg-pink svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm40-68a28,28,0,0,1-28,28h-4v8a8,8,0,0,1-16,0v-8H104a8,8,0,0,1,0-16h36a12,12,0,0,0,0-24H116a28,28,0,0,1,0-56h4V72a8,8,0,0,1,16,0v8h16a8,8,0,0,1,0,16H116a12,12,0,0,0,0,24h24A28,28,0,0,1,168,148Z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="d-flex align-items-center mb-1">
                                                <span class="badge rounded-pill bg-success-transparent me-2"><i class="ri-arrow-left-up-line fs-11"></i></span>
                                                <span class="fs-14">6%</span>
                                            </div>
                                            <p class="fs-11 text-muted mb-0">This Month</p>
                                        </div>
                                        <div class="col-xl-6">
                                            <div id="chart-4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="row">
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Total Sales
                                    </div>
                                    <a href="javascript:void(0);" class="fs-12 text-primary"> View All<i class="ti ti-arrow-narrow-right ms-1 d-inline-flex"></i> </a>
                                </div>
                                <div class="card-body">
                                    <div class="custom-circle-radial">
                                        <div id="circlechart"></div>
                                    </div>
                                </div>
                                <div class="card-footer p-0 border-top-0">
                                    <div class="row border-top border-block-start-dashed mx-0">
                                        <div class="col border-end border-inline-end-dashed">
                                            <div class="text-center p-3">
                                                <span class="fs-14 visit-gender male">Avarage Sales</span>
                                                <div class="mt-1">
                                                    <span class="fs-5 fw-medium">1,654</span>
                                                </div>
                                                <span class="badge bg-success-transparent text-success mt-1">+12.3%</span>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="text-center p-3">
                                                <span class="fs-14 visit-gender female">Average Profit</span>
                                                <div class="mt-1">
                                                    <span class="fs-5 fw-medium">$12,234</span>
                                                </div>
                                                <span class="badge bg-danger-transparent text-danger mt-1">-11.3%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header">
                                    <div class="card-title">
                                        Total Revenue
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2">
                                        <h3 class="fw-semibold mb-0">$4,289</h3>
                                        <div class="ms-2">
                                            <span class="badge bg-success-transparent">1.02<i class="ri-arrow-up-s-fill align-mmiddle ms-1"></i></span>
                                        </div>
                                    </div>
                                    <div class="progress-stacked progress-sm">
                                        <div class="progress-bar" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 23%" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100"></div>
                                        <div class="progress-bar bg-pink" role="progressbar" style="width: 27%" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="card-footer p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-fill align-items-center pt-1">
                                                    <div class="d-flex align-items-top justify-content-between">
                                                        <p class="mb-0 d-flex align-items-center"><i class="ti ti-point-filled fs-20 text-primary me-2"></i>Today Revenue</p>
                                                        <h6 class="mb-0 lh-1 fw-medium">$256</h6>
                                                    </div>
                                                    <div class="text-danger "><i class="ri-arrow-down-s-fill me-1 align-middle"></i>-1.05%
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item success">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-fill align-items-center pt-1">
                                                    <div class="d-flex align-items-top justify-content-between">
                                                        <p class="mb-0 fs-14  d-flex align-items-center"><i class="ti ti-point-filled fs-20 text-secondary me-2"></i>This Week Revenue</p>
                                                        <h6 class="mb-0 lh-1 fw-medium">$5,532</h6>    
                                                    </div>
                                                    <div class="text-success"><i class="ri-arrow-up-s-fill me-1 align-middle"></i>+0.64%</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item warning">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-fill align-items-center pt-1">
                                                    <div class="d-flex align-items-top justify-content-between">
                                                        <p class="mb-0 fs-14 d-flex align-items-center"><i class="ti ti-point-filled fs-20 text-success me-2"></i>This Month Revenue</p>
                                                        <h6 class="mb-0 lh-1 fw-medium">$29,754</h6>
                                                    </div>
                                                    <div class="text-danger "><i class="ri-arrow-up-s-fill me-1 align-middle"></i>-0.82%</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item success">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-fill align-items-center pt-1">
                                                    <div class="d-flex align-items-top justify-content-between">
                                                        <p class="mb-0 fs-14  d-flex align-items-center"><i class="ti ti-point-filled fs-20 text-pink me-2"></i>This Year Revenue</p>
                                                        <h6 class="mb-0 lh-1 fw-medium">$2,25,116</h6>    
                                                    </div>
                                                    <div class="text-success"><i class="ri-arrow-up-s-fill me-1 align-middle"></i>+0.21%</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Sales Revenue
                                    </div>
                                    <a href="javascript:void(0);" class="fs-12 text-primary"> View All<i class="ti ti-arrow-narrow-right ms-1 d-inline-flex"></i> </a>
                                </div>
                                <div class="card-body">
                                    <div id="salerevenue"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="avatar avatar-lg bg-primary bg-opacity-25">
                                            <span class="avatar avatar-md bg-primary svg-white text-fixed-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="84" cy="108" r="52" opacity="0.2"/><path d="M10.23,200a88,88,0,0,1,147.54,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M172,160a87.93,87.93,0,0,1,73.77,40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="84" cy="108" r="52" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M152.69,59.7A52,52,0,1,1,172,160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                            </span>
                                        </div>
                                        <div class="text-end">
                                            <p class="mb-2 fs-15 fw-medium text-muted">Total Employees 
                                            </p>
                                            <h4 class="mb-4 fw-semibold">24,152</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 fs-12 text-muted">
                                            <span class="text-success fw-semibold me-1 d-inline-block"><i class="fe fe-arrow-up"></i>+0.5%</span>
                                            vs Last Month
                                        </div>
                                        <a href="javascript:void(0)"> <span class="float-end fs-12 fw-medium text-primary">View All <i class="ti ti-arrow-narrow-right d-inline-flex"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="avatar avatar-lg bg-secondary bg-opacity-25">
                                            <span class="avatar avatar-md bg-secondary svg-white text-fixed-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M40,192a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V88a8,8,0,0,0-8-8H56A16,16,0,0,1,40,64Z" opacity="0.2"/><path d="M40,64V192a16,16,0,0,0,16,16H216a8,8,0,0,0,8-8V88a8,8,0,0,0-8-8H56A16,16,0,0,1,40,64h0A16,16,0,0,1,56,48H192" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="180" cy="140" r="12"/></svg>
                                            </span>
                                        </div>
                                        <div class="text-end">
                                            <p class="mb-2 fs-15 fw-medium text-muted">Total Revenue
                                            </p>
                                            <h4 class="mb-4 fw-semibold">$55,786</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 fs-12 text-muted">
                                            <span class="text-danger fw-semibold me-1 d-inline-block"><i class="fe fe-arrow-down"></i>-1.2%</span>
                                            vs Last Month
                                        </div>
                                        <a href="javascript:void(0)"> <span class="float-end fs-12 fw-medium text-secondary">View All <i class="ti ti-arrow-narrow-right d-inline-flex"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="avatar avatar-lg bg-success bg-opacity-25">
                                            <span class="avatar avatar-md bg-success svg-white text-fixed-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M88,216a24,24,0,0,0,24-24c0-10-8-16-8-16H216s8,6,8,16a24,24,0,0,1-24,24Z" opacity="0.2"/><path d="M200,176V64a24,24,0,0,0-24-24H40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="104" y1="104" x2="168" y2="104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="104" y1="136" x2="168" y2="136" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M24,80s-8-6-8-16a24,24,0,0,1,48,0V192a24,24,0,0,0,48,0c0-10-8-16-8-16H216s8,6,8,16a24,24,0,0,1-24,24H88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                            </span>
                                        </div>
                                        <div class="text-end">
                                            <p class="mb-2 fs-15 fw-medium text-muted">Total Profit
                                            </p>
                                            <h4 class="mb-4 fw-semibold">$41,633</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 fs-12 text-muted">
                                            <span class="text-success fw-semibold me-1 d-inline-block"><i class="fe fe-arrow-up"></i>+1.3%</span>
                                            vs Last Month
                                        </div>
                                        <a href="javascript:void(0)"> <span class="float-end fs-12 fw-medium text-success">View All <i class="ti ti-arrow-narrow-right d-inline-flex"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-start justify-content-between">
                                        <div class="avatar avatar-lg bg-pink bg-opacity-25">
                                            <span class="avatar avatar-md bg-pink svg-white text-fixed-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M128,128h24a40,40,0,0,1,0,80H128Z" opacity="0.2"/><path d="M128,48H112a40,40,0,0,0,0,80h16Z" opacity="0.2"/><line x1="128" y1="24" x2="128" y2="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="208" x2="128" y2="232" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M184,88a40,40,0,0,0-40-40H112a40,40,0,0,0,0,80h40a40,40,0,0,1,0,80H104a40,40,0,0,1-40-40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                            </span>
                                        </div>
                                        <div class="text-end">
                                            <p class="mb-2 fs-15 fw-medium text-muted">Total Balance
                                            </p>
                                            <h4 class="mb-4 fw-semibold">$67,556</h4>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="mb-0 fs-12 text-muted">
                                            <span class="text-danger fw-semibold me-1 d-inline-block"><i class="fe fe-arrow-down"></i>-0.1%</span>
                                            vs Last Month
                                        </div>
                                        <a href="javascript:void(0)"> <span class="float-end fs-12 fw-medium text-pink">View All <i class="ti ti-arrow-narrow-right d-inline-flex"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

                    <!-- Start:: row-6 -->
                    <div class="row">
                        <div class="col-xxl-4 col-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Sales Revenue
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="salerevenue1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="card custom-card overflow-hidden">
                                <img src="<?php echo $baseUrl; ?>/assets/images/media/media-3.jpg" class="card-img-top" style="height: 200px;" alt="...">
                                <div class="card-img-overlay-profile">
                                    <div class="d-flex align-items-start text-fixed-white">
                                        <div class="flex-grow-1 text-center">
                                            <div class="mt-1 align-items-center justify-content-between fs-22 mb-1">
                                                <span>Today Budget</span>
                                                <span class="min-w-fit-content fs-10 ms-1 "></span>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="flex-grow-1 fs-30 fw-semibold sale-font counter">$59,700<span>
                                            </span></span></div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3 px-3">
                                        <div class="d-flex align-items-start">
                                            <span class="avatar avatar-sm rounded-circle me-3 bg-white-transparent mt-2">
                                                <i class="bx bx-up-arrow-alt fs-20 text-fixed-white"></i>
                                            </span>
                                            <div class="flex-grow-1 text-fixed-white">
                                                <div class="d-flex align-items-center justify-content-between fs-20 fw-medium">
                                                    <span>$35,800</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="flex-grow-1 fs-13 fw-semibold">Profit</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex ms-lg-5 ms-2">
                                            <span class="avatar avatar-sm rounded-circle me-3 bg-white-transparent mt-2">
                                                <i class="bx bx-down-arrow-alt fs-20 text-fixed-white"></i>
                                            </span>
                                            <div class="flex-grow-1 text-fixed-white">
                                                <div class="d-flex align-items-center justify-content-between fs-20 fw-medium">
                                                    <span>$12,800</span>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <span class="flex-grow-1 fs-13 fw-semibold">Expense</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item p-3">
                                            <div class="d-flex align-items-start gap-3">
                                                <div>
                                                    <span class="avatar avatar-rounded bg-danger-transparent text-danger"><i class="ti ti-clock  fs-22"></i></span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="mb-0 fw-medium d-block">Total-Income</span>
                                                    <span class="text-muted fs-12">Average Income Per Hour</span>
        
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-danger fs-medium fs-5">$17.03</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item p-3">
                                            <div class="d-flex align-items-start gap-3">
                                                <div>
                                                    <span class="avatar avatar-rounded bg-info-transparent text-info"><i class="ti ti-bolt fs-22"></i></span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="mb-0 fw-medium d-block">Total-Income</span>
                                                    <span class="text-muted fs-12">Average Income Per Hour</span>
        
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-info fs-medium fs-5">$77.93</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item p-3">
                                            <div class="d-flex align-items-start gap-3">
                                                <div>
                                                    <span class="avatar avatar-rounded bg-warning-transparent"><i class="ti ti-activity-heartbeat fs-22"></i></span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="mb-0 fw-medium d-block">Total-Income</span>
                                                    <span class="text-muted fs-12">Average Income Per Hour</span>
        
                                                </div>
                                                <div class="text-end">
                                                    <span class="text-warning fs-medium fs-5">$970.63</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-12">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Recent Activity
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="widgets-task-list mb-0">
                                        <li class="">
                                            <div class=""> <i class="task-icon bg-primary"></i>
                                                <h6 class="fw-semibold">Task Assigned</h6>
                                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                    <div> <span class="text-muted">Adam Berry Assigned task on <a href="javascript:void(0)" class="text-primary">
                                                                AngularJS Template</a></span> </div>
                                                    <div class="min-w-fit-content ms-2 text-end">
                                                        <p class="mb-0 text-muted fs-11">09 July 2024</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class=""> <i class="task-icon bg-primary"></i>
                                                <h6 class="fw-semibold">Task Overdue</h6>
                                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                    <div> <span class="text-muted">Petey Cruiser finished</span> <a href="javascript:void(0)" class="text-secondary">
                                                            Integrated management</a> </div>
                                                    <div class="min-w-fit-content ms-2 text-end">
                                                        <p class="mb-0 text-muted fs-11">29 June 2024</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class=""> 
                                                <i class="task-icon bg-warning"></i>
                                                <h6 class="fw-semibold">Task Due Soon</h6>
                                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                    <div> 
                                                        <span class="text-muted">Alex Turner started</span> 
                                                        <a href="javascript:void(0)" class="text-secondary">System Update</a> 
                                                    </div>
                                                    <div class="min-w-fit-content ms-2 text-end">
                                                        <p class="mb-0 text-muted fs-11">07 June 2024</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>                                    
                                        <li class="">
                                            <div class=""> <i class="task-icon bg-primary"></i>
                                                <h6 class="fw-semibold">Task Finished</h6>
                                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                    <div> <span class="text-muted">Adam Berry finished task on</span>
                                                        <a href="javascript:void(0)" class="text-success">
                                                            AngularJS Template</a>
                                                    </div>
                                                    <div class="min-w-fit-content ms-2 text-end">
                                                        <p class="mb-0 text-muted fs-11">09 July 2024</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class=""> <i class="task-icon bg-primary"></i>
                                                <h6 class="fw-semibold">Completed Homework</h6>
                                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                    <div> <span class="text-muted">Adam Berry finished task on</span>
                                                    </div>
                                                    <div class="min-w-fit-content ms-2 text-end">
                                                        <p class="mb-0 text-muted fs-11">09 July 2024</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class=""> <i class="task-icon bg-primary"></i>
                                                <h6 class="fw-semibold">Reached Target</h6>
                                                <div class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                    <div> <span class="text-muted">Adam Berry finished task on</span>
                                                    </div>
                                                    <div class="min-w-fit-content ms-2 text-end">
                                                        <p class="mb-0 text-muted fs-11">09 July 2024</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-6 -->

                    <!-- Start:: row-7 -->
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card custom-card ">
                                <div class="card-body">
                                    <div class=" d-flex align-items-center justify-content-between">
                                        <div class="flex-fill">
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="avatar avatar-rounded avatar-md bg-primary-transparent svg-primary mb-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                        <path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="flex-fill text-muted fs-14 mb-0">Total Sales</p>
                                        </div>
                                        <div id="chart-10" class=""></div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="fs-22 fw-semibold mb-0 d-flex align-items-center">12,432
                                        </div>
                                        <span class="text-success badge bg-success-transparent rounded-pill d-flex align-items-center fs-11 me-0 ms-2 mb-0"><i class="ri-arrow-left-up-line fs-11"></i>+2.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card ">
                                <div class="card-body">
                                    <div class=" d-flex align-items-center justify-content-between">
                                        <div class="flex-fill">
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="avatar avatar-rounded avatar-md bg-secondary-transparent svg-secondary mb-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                        <path d="M216,56H176V48a24,24,0,0,0-24-24H104A24,24,0,0,0,80,48v8H40A16,16,0,0,0,24,72V200a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V72A16,16,0,0,0,216,56ZM96,48a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96ZM216,72v41.61A184,184,0,0,1,128,136a184.07,184.07,0,0,1-88-22.38V72Zm0,128H40V131.64A200.19,200.19,0,0,0,128,152a200.25,200.25,0,0,0,88-20.37V200ZM104,112a8,8,0,0,1,8-8h32a8,8,0,0,1,0,16H112A8,8,0,0,1,104,112Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="flex-fill text-muted fs-14 mb-0">Total Revenue</p>
                                        </div>
                                        <div id="chart-11" class=""></div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="fs-22 fw-semibold mb-0 d-flex align-items-center">$9,432
                                        </div>
                                        <span class="text-success badge bg-success-transparent rounded-pill d-flex align-items-center fs-11 me-0 ms-2 mb-0"><i class="ri-arrow-left-up-line fs-11"></i>+2.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card ">
                                <div class="card-body">
                                    <div class=" d-flex align-items-center justify-content-between">
                                        <div class="flex-fill">
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="avatar avatar-rounded avatar-md bg-success-transparent svg-success mb-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                        <path d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="flex-fill text-muted fs-14 mb-0">Total Customers</p>
                                        </div>
                                        <div id="chart-12" class=""></div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="fs-22 fw-semibold mb-0 d-flex align-items-center">3,132
                                        </div>
                                        <span class="text-success badge bg-success-transparent rounded-pill d-flex align-items-center fs-11 me-0 ms-2 mb-0"><i class="ri-arrow-left-up-line fs-11"></i>+2.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card ">
                                <div class="card-body">
                                    <div class=" d-flex align-items-center justify-content-between">
                                        <div class="flex-fill">
                                            <div class="d-flex justify-content-between mb-2">
                                                <span class="avatar avatar-rounded avatar-md bg-info-transparent svg-info mb-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256">
                                                        <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm40-68a28,28,0,0,1-28,28h-4v8a8,8,0,0,1-16,0v-8H104a8,8,0,0,1,0-16h36a12,12,0,0,0,0-24H116a28,28,0,0,1,0-56h4V72a8,8,0,0,1,16,0v8h16a8,8,0,0,1,0,16H116a12,12,0,0,0,0,24h24A28,28,0,0,1,168,148Z">
                                                        </path>
                                                    </svg>
                                                </span>
                                            </div>
                                            <p class="flex-fill text-muted fs-14 mb-0">Total Profit</p>
                                        </div>
                                        <div id="chart-13" class=""></div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="fs-22 fw-semibold mb-0 d-flex align-items-center">$5,325
                                        </div>
                                        <span class="text-success badge bg-success-transparent rounded-pill d-flex align-items-center fs-11 me-0 ms-2 mb-0"><i class="ri-arrow-left-up-line fs-11"></i>+2.5%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-7 -->

<?php $content = ob_get_clean(); ?>
<!-- This code is useful for content -->

<!-- This code is useful for internal scripts  -->
<?php ob_start(); ?>
	
        <!-- Apex Charts JS -->
        <script src="<?php echo $baseUrl; ?>/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Index JS -->
        <script src="<?php echo $baseUrl; ?>/assets/js/widgets.js"></script>

<?php $scripts = ob_get_clean(); ?>
<!-- This code is useful for internal scripts  -->

<!-- This code use for render base file -->
<?php include 'layouts/base.php'; ?>
<!-- This code use for render base file -->
