
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
                            <h1 class="page-title fw-medium fs-18 mb-2">Orders</h1>
                            <div class="">
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                        <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Orders</li>
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
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                All Orders List
                            </div>
                            <div class="d-flex gap-3 align-items-center flex-wrap">
                                <div class="btn-group">
                                    <button class="btn btn-outline-light border dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="ti ti-sort-descending-2 me-1"></i> Sort By
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0)">Created Date</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Status</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Orders</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Product Name</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Newest</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0)">Oldest</a></li>
                                    </ul>
                                </div>
                                <div class="custom-form-group flex-grow-1">
                                    <input type="text" class="form-control" placeholder="Search Orders.." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <a href="javascript:void(0);" class="text-muted custom-form-btn"><i class="ti ti-search"></i></a>
                                </div> 
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">Order Id</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Mobile Number</th>
                                            <th scope="col">Ordered Date</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Payment Mode</th>
                                            <th scope="col">Cost</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="order-list">
                                            <td>#1172553</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/15.png" class="w-100 h-100" alt="..."></span>
                                                    <div class="ms-2">
                                                        <p class="fw-semibold mb-0 d-flex align-items-center"><a href="order-details.php">Alarm Clock</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                                        <img src="<?php echo $baseUrl; ?>/assets/images/faces/4.jpg" alt="">
                                                    </span>Violeta Tilly
                                                </div>
                                            </td>
                                            <td>(222) 111 - 57840</td>
                                            <td>
                                                11 Jan 2024
                                            </td>
                                            <td><span class="badge bg-success-transparent">Shipped</span></td>
                                            <td>Cash On Delivery</td>
                                            <td class="fw-semibold">$177.00</td> 
                                            <td>
                                                <a href="order-details.php" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-download-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="order-delete-btn btn btn-icon btn-sm btn-pink-light btn-wave waves-effect waves-light">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="order-list">
                                            <td>#1172555</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/12.png" class="w-100 h-100" alt="..."></span>
                                                    <div class="ms-2">
                                                        <p class="fw-semibold mb-0 d-flex align-items-center"><a href="order-details.php">Ladies Hand bag</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                                        <img src="<?php echo $baseUrl; ?>/assets/images/faces/15.jpg" alt="">
                                                    </span>Danny Raj 
                                                </div>
                                            </td>
                                            <td>(222) 687-9954</td>
                                            <td>
                                                23 Jan 2024
                                            </td>
                                            <td><span class="badge bg-warning-transparent">Pending</span></td>
                                            <td>Online Payment</td>
                                            <td class="fw-semibold">$153.00</td>
                                            <td>
                                                <a href="order-details.php" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-download-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="order-delete-btn btn btn-icon btn-sm btn-pink-light btn-wave waves-effect waves-light">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="order-list">
                                            <td>#1202513</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/20.png" class="w-100 h-100" alt="..."></span>
                                                    <div class="ms-2">
                                                        <p class="fw-semibold mb-0 d-flex align-items-center"><a href="order-details.php">Smart Watch</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                                        <img src="<?php echo $baseUrl; ?>/assets/images/faces/8.jpg" alt="">
                                                    </span>Sissera William
                                                </div>
                                            </td>
                                            <td>(222) 987-1323</td>
                                            <td>
                                                19 Feb 2024
                                            </td>
                                            <td><span class="badge bg-success-transparent">Shipped</span></td>
                                            <td>Cash On Delivery</td>
                                            <td class="fw-semibold">$203.00</td>
                                            <td>
                                                <a href="order-details.php" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-download-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="order-delete-btn btn btn-icon btn-sm btn-pink-light btn-wave waves-effect waves-light">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="order-list">
                                            <td>#1202510</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/14.png" class="w-100 h-100" alt="..."></span>
                                                    <div class="ms-2">
                                                        <p class="fw-semibold mb-0 d-flex align-items-center"><a href="order-details.php">Digital Camera</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                                        <img src="<?php echo $baseUrl; ?>/assets/images/faces/11.jpg" alt="">
                                                    </span>Red Stark
                                                </div>
                                            </td>
                                            <td>(222) 447-4518</td>
                                            <td>
                                                06 Mar 2024
                                            </td>
                                            <td><span class="badge bg-danger-transparent">Cancelled</span></td>
                                            <td>Online Payment</td>
                                            <td class="fw-semibold">$211.00</td> 
                                            <td>
                                                <a href="order-details.php" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-download-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="order-delete-btn btn btn-icon btn-sm btn-pink-light btn-wave waves-effect waves-light">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="order-list">
                                            <td>#1222516</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/11.png" class="w-100 h-100" alt="..."></span>
                                                    <div class="ms-2">
                                                        <p class="fw-semibold mb-0 d-flex align-items-center"><a href="order-details.php"> Over coat</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                                        <img src="<?php echo $baseUrl; ?>/assets/images/faces/1.jpg" alt="">
                                                    </span>Henry Milo
                                                </div>
                                            </td>
                                            <td>(222) 666-8080</td>
                                            <td>
                                                18 Mar 2024
                                            </td>
                                            <td><span class="badge bg-success-transparent">Shipped</span></td>
                                            <td>Cash On Delivery</td>
                                            <td class="fw-semibold">$265.00</td> 
                                            <td>
                                                <a href="order-details.php" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-download-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="order-delete-btn btn btn-icon btn-sm btn-pink-light btn-wave waves-effect waves-light">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="order-list">
                                            <td>#1202513</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/13.png" class="w-100 h-100" alt="..."></span>
                                                    <div class="ms-2">
                                                        <p class="fw-semibold mb-0 d-flex align-items-center"><a href="order-details.php">Wrist Watch</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                                        <img src="<?php echo $baseUrl; ?>/assets/images/faces/8.jpg" alt="">
                                                    </span>Sissera William
                                                </div>
                                            </td>
                                            <td>(222) 144-1423</td>
                                            <td>
                                                19 Feb 2024
                                            </td>
                                            <td><span class="badge bg-success-transparent">Shipped</span></td>
                                            <td>Cash On Delivery</td>
                                            <td class="fw-semibold">$203.00</td>
                                            <td>
                                                <a href="order-details.php" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-download-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="order-delete-btn btn btn-icon btn-sm btn-pink-light btn-wave waves-effect waves-light">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="order-list">
                                            <td>#1202510</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/17.png" class="w-100 h-100" alt="..."></span>
                                                    <div class="ms-2">
                                                        <p class="fw-semibold mb-0 d-flex align-items-center"><a href="order-details.php">Headsets</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                                        <img src="<?php echo $baseUrl; ?>/assets/images/faces/11.jpg" alt="">
                                                    </span>Red Stark
                                                </div>
                                            </td>
                                            <td>(222) 985-4715</td>
                                            <td>
                                                06 Mar 2024
                                            </td>
                                            <td><span class="badge bg-danger-transparent">Cancelled</span></td>
                                            <td>Online Payment</td>
                                            <td class="fw-semibold">$211.00</td> 
                                            <td>
                                                <a href="order-details.php" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-download-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="order-delete-btn btn btn-icon btn-sm btn-pink-light btn-wave waves-effect waves-light">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="order-list">
                                            <td>#1222516</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-sm avatar-square bg-gray-300"><img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/16.png" class="w-100 h-100" alt="..."></span>
                                                    <div class="ms-2">
                                                        <p class="fw-semibold mb-0 d-flex align-items-center"><a href="order-details.php">Teddy Bear</a></p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-sm me-2 avatar-rounded">
                                                        <img src="<?php echo $baseUrl; ?>/assets/images/faces/1.jpg" alt="">
                                                    </span>Henry Milo
                                                </div>
                                            </td>
                                            <td>(222) 887-1323</td>
                                            <td>
                                                18 Mar 2024
                                            </td>
                                            <td><span class="badge bg-success-transparent">Shipped</span></td>
                                            <td>Cash On Delivery</td>
                                            <td class="fw-semibold">$265.00</td> 
                                            <td>
                                                <a href="order-details.php" class="btn btn-icon btn-sm btn-primary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-eye-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-secondary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-download-line"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="order-delete-btn btn btn-icon btn-sm btn-pink-light btn-wave waves-effect waves-light">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer border-top-0">
                            <div class="d-flex align-items-center flex-wrap overflow-auto">
                                <div class="mb-2 mb-sm-0">
                                    Showing <b>1</b> to <b>10</b> entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                </div>
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
                    <!--End::row-1 -->

<?php $content = ob_get_clean(); ?>
<!-- This code is useful for content -->

<!-- This code is useful for internal scripts  -->
<?php ob_start(); ?>
	


<?php $scripts = ob_get_clean(); ?>
<!-- This code is useful for internal scripts  -->

<!-- This code use for render base file -->
<?php include 'layouts/base.php'; ?>
<!-- This code use for render base file -->
