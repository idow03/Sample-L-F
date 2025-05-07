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
                    <div class="d-flex align-items-center justify-content-between my-3 page-header-breadcrumb flex-wrap gap-2">
                        <div>
                            <p class="fw-medium fs-18 mb-0">Hello there, Arjun Arora</p>
                            <p class="fs-13 text-muted mb-0">Let's make today a productive one!</p>
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
                        <div class="col-xxl-9">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex gap-3">
                                                <div class="avatar avatar-md bg-primary svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" opacity="0.2"/><path d="M33.6,145.5A96,96,0,0,1,96,37.5v72Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M128,128.42V32A96,96,0,1,1,45.22,176.64Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                </div>
                                                <div class="flex-fill">
                                                    <div class="flex-fill fw-medium fs-13 mb-1 text-dark">Number Of Sales</div>
                                                    <div class="fs-22 fw-semibold mb-1 text-primary ">12,432</div>
                                                    <div class="d-flex align-items-center fs-11">
                                                        <span class="text-success fw-semibold me-1"><i class="ti ti-trending-up me-1 fw-medium align-middle text-success d-inline-flex"></i>2.5%</span>
                                                        <span class="text-default op-6">This Month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex gap-3">
                                                <div class="avatar avatar-md bg-secondary svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M128,144a191.14,191.14,0,0,1-96-25.68h0V200a8,8,0,0,0,8,8H216a8,8,0,0,0,8-8V118.31A191.08,191.08,0,0,1,128,144Z" opacity="0.2"/><line x1="112" y1="112" x2="144" y2="112" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="32" y="64" width="192" height="144" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M168,64V48a16,16,0,0,0-16-16H104A16,16,0,0,0,88,48V64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M224,118.31A191.09,191.09,0,0,1,128,144a191.14,191.14,0,0,1-96-25.68" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                </div>
                                                <div>
                                                    <div class="flex-fill fw-medium fs-13 mb-1 text-dark">Profit By Sale</div>
                                                    <div class="fs-22 fw-semibold mb-1 text-secondary">$4,132</div>
                                                    <div class="d-flex align-items-center fs-11">
                                                        <span class=" text-success fw-semibold me-1"><i class="ti ti-trending-up me-1 fw-medium align-middle text-success d-inline-flex"></i>1.5%</span>
                                                        <span class="text-default op-6">This Month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body  ">
                                            <div class="d-flex gap-3">
                                                <div class="avatar avatar-md bg-success svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M48,208H16a8,8,0,0,1-8-8V160a8,8,0,0,1,8-8H48Z" opacity="0.2"/><path d="M204,56a28,28,0,0,0-12,2.71h0A28,28,0,1,0,176,85.29h0A28,28,0,1,0,204,56Z" opacity="0.2"/><circle cx="204" cy="84" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M48,208H16a8,8,0,0,1-8-8V160a8,8,0,0,1,8-8H48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M112,160h32l67-15.41a16.61,16.61,0,0,1,21,16h0a16.59,16.59,0,0,1-9.18,14.85L184,192l-64,16H48V152l25-25a24,24,0,0,1,17-7H140a20,20,0,0,1,20,20h0a20,20,0,0,1-20,20Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M176,85.29A28,28,0,1,1,192,58.71" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                </div>
                                                <div>
                                                    <div class="flex-fill fw-medium fs-13 mb-1 text-dark">Total Revenue</div>
                                                    <div class="fs-22 fw-semibold mb-1 text-success">$15,482</div>
                                                    <div class="d-flex align-items-center  fs-11">
                                                        <span class="text-danger fw-semibold me-1"><i class="ti ti-trending-down me-1 fw-medium align-middle text-danger d-inline-flex"></i>3.4%</span>
                                                        <span class="text-default op-6">This Month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-body ">
                                            <div class="d-flex gap-3">
                                                <div class="avatar avatar-md bg-pink svg-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="84" cy="108" r="52" opacity="0.2"/><path d="M10.23,200a88,88,0,0,1,147.54,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M172,160a87.93,87.93,0,0,1,73.77,40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="84" cy="108" r="52" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M152.69,59.7A52,52,0,1,1,172,160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                </div>
                                                <div>
                                                    <div class="flex-fill fw-medium fs-13 mb-1 text-dark">Total Customers</div>
                                                    <div class="fs-22 fw-semibold mb-1 text-pink">3,532</div>
                                                    <div class="d-flex align-items-center fs-11">
                                                        <span class="text-danger fw-semibold me-1"><i class="ti ti-trending-down me-1 fw-medium align-middle text-danger d-inline-flex"></i>4.5%</span>
                                                        <span class="text-default op-6">This Month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="card custom-card overflow-hidden">
                                        <div class="card-header justify-content-between">
                                            <div class="card-title">
                                                Recent Orders
                                            </div>
                                            <div class="d-flex flex-wrap gap-2"> 
                                                <div> 
                                                    <input class="form-control form-control-sm" type="text" placeholder="Search Here" aria-label=".form-control-sm example"> 
                                                </div> 
                                                <div class="dropdown"> 
                                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm btn-wave waves-effect waves-light" data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i> 
                                                    </a> 
                                                    <ul class="dropdown-menu" role="menu"> 
                                                        <li><a class="dropdown-item" href="javascript:void(0);">New</a></li> 
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Popular</a></li> 
                                                        <li><a class="dropdown-item" href="javascript:void(0);">Relevant</a></li> 
                                                    </ul> 
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table text-nowrap table-hover">
                                                    <thead>
                                                        
                                                        <th>Customer</th>
                                                        <th>Products</th>
                                                        <th>Ordered Date</th>
                                                        <th>Status</th>
                                                        <th>Total Amount</th>
                                                        <th>Payment Method</th>
                                                        <th>Actions</th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            
                                                            <td>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-md bg-primary-transparent">
                                                                            JD
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fw-semibold d-block">John Doe</span>
                                                                        <span class="text-muted fs-12">#SPK1001</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/20.png" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span class="d-block fw-semibold">Wrist Watch</span>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold d-block">2024-10-05</span>
                                                                <span class="fs-12 text-muted">12:45PM</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-primary">Shipped</span>
                                                            </td>
                                                            <td>
                                                                $150.00
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <i class="ri-bank-card-line me-1 fs-14"></i>Credit Card
                                                                </div>
                                                                <div class="fs-12 text-muted">**** **** 1111</div>
                                                            </td>
                                                            <td>
                                                                <div class="btn-list">
                                                                    <button class="btn btn-primary-light btn-icon btn-sm "><i class="ri-eye-line"></i></button>
                                                                    <button class="btn btn-secondary-light btn-icon btn-sm "><i class="ti ti-pencil"></i></button>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            
                                                            <td>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-md bg-primary-transparent">
                                                                            JS
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fw-semibold d-block">Jane Smith</span>
                                                                        <span class="text-muted fs-12">#SPK1002</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/16.png" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span class="d-block fw-semibold">Teddy Bear</span>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold d-block">2024-10-06</span>
                                                                <span class="fs-12 text-muted">10:15AM</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-secondary">Pending</span>
                                                            </td>
                                                            <td>
                                                                $230.00
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <i class="ri-bank-card-line me-1 fs-14"></i>MasterCard
                                                                </div>
                                                                <div class="fs-12 text-muted">**** **** 4444</div>
                                                            </td>
                                                            <td>
                                                                <div class="btn-list">
                                                                    <button class="btn btn-primary-light btn-icon btn-sm "><i class="ri-eye-line"></i></button>
                                                                    <button class="btn btn-secondary-light btn-icon btn-sm "><i class="ti ti-pencil"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            
                                                            <td>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-md bg-primary-transparent">
                                                                            BL
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fw-semibold d-block">Bob Lee</span>
                                                                        <span class="text-muted fs-12">#SPK1003</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/23.png" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span class="d-block fw-semibold">Shoes</span>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold d-block">2024-10-07</span>
                                                                <span class="fs-12 text-muted">04:53PM</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-success">Delivered</span>
                                                            </td>
                                                            <td>
                                                                $120.00
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <i class="ri-bank-card-line me-1 fs-14"></i>Bank Transfer
                                                                </div>
                                                                <div class="fs-12 text-muted">Direct Payment</div>
                                                            </td>
                                                            <td>
                                                                <div class="btn-list">
                                                                    <button class="btn btn-primary-light btn-icon btn-sm "><i class="ri-eye-line"></i></button>
                                                                    <button class="btn btn-secondary-light btn-icon btn-sm "><i class="ti ti-pencil"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            
                                                            <td>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-md bg-primary-transparent">
                                                                            AJ
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fw-semibold d-block">Alice Johnson</span>
                                                                        <span class="text-muted fs-12">#SPK1004</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/11.png" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span class="d-block fw-semibold">Over Coat</span>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <span class="fw-semibold d-block">2024-10-08</span>
                                                                <span class="fs-12 text-muted">11:26AM</span>
                                                            </td>
                                                            <td>
                                                                <span class="badge bg-danger">Cancelled</span>
                                                            </td>
                                                            <td>
                                                                $85.00
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <i class="ri-bank-card-line me-1 fs-14"></i>American Express
                                                                </div>
                                                                <div class="fs-12 text-muted">****** 10005</div>
                                                            </td>
                                                            <td>
                                                                <div class="btn-list">
                                                                    <button class="btn btn-primary-light btn-icon btn-sm "><i class="ri-eye-line"></i></button>
                                                                    <button class="btn btn-secondary-light btn-icon btn-sm "><i class="ti ti-pencil"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            
                                                            <td class="border-bottom-0">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-md bg-primary-transparent">
                                                                            MB
                                                                        </span>
                                                                    </div>
                                                                    <div>
                                                                        <span class="fw-semibold d-block">Michael Brown</span>
                                                                        <span class="text-muted fs-12">#SPK1005</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <div class="lh-1">
                                                                        <span class="avatar avatar-sm avatar-rounded">
                                                                            <img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/13.png" alt="">
                                                                        </span>
                                                                    </div>
                                                                    <div class="flex-fill">
                                                                        <span class="d-block fw-semibold">Leather Watch</span>
                                                                        
                                                                    </div>
                                                                    
                                                                </div>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <span class="fw-semibold d-block">2024-10-09</span>
                                                                <span class="fs-12 text-muted">03:29PM</span>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <span class="badge bg-primary">Shipped</span>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                $500.00
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <div>
                                                                    <i class="ri-bank-card-line me-1 fs-14"></i>PayPal
                                                                </div>
                                                                <div class="fs-12 text-muted">PayPal App</div>
                                                            </td>
                                                            <td class="border-bottom-0">
                                                                <div class="btn-list">
                                                                    <button class="btn btn-primary-light btn-icon btn-sm "><i class="ri-eye-line"></i></button>
                                                                    <button class="btn btn-secondary-light btn-icon btn-sm "><i class="ti ti-pencil"></i></button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="card-footer py-2"> 
                                            <div class="d-flex align-items-center "> 
                                                <div> Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
                                                <div class="ms-auto"> 
                                                <nav aria-label="Page navigation" class="pagination-style-4"> 
                                                    <ul class="pagination mb-0"> 
                                                        <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);"> Prev </a> </li>
                                                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li> 
                                                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li> 
                                                            <li class="page-item"> <a class="page-link text-primary" href="javascript:void(0);"> next </a> </li> 
                                                        </ul> 
                                                    </nav> 
                                                </div> 
                                            </div> 
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
	
        <!-- Apex Charts JS -->
        <script src="<?php echo $baseUrl; ?>/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Sales Dashboard --> 
        <script src="<?php echo $baseUrl; ?>/assets/js/sales-dashboard.js"></script>

<?php $scripts = ob_get_clean(); ?>
<!-- This code is useful for internal scripts  -->

<!-- This code use for render base file -->
<?php include 'layouts/base.php'; ?>
<!-- This code use for render base file -->
