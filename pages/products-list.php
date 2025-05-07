
<!-- This code generates the base URL for the website by combining the protocol, domain name, and directory path -->
<?php
    $rootFolder = basename($_SERVER['DOCUMENT_ROOT']);
    $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . str_replace('/pages', '', dirname($_SERVER['SCRIPT_NAME']));
?>
<!-- This code generates the base URL for the website by combining the protocol, domain name, and directory path -->

<!-- This code is useful for internal styles  -->
<?php ob_start(); ?>

        <!-- glightbox Css -->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/libs/glightbox/css/glightbox.min.css">

        <!-- Swiper Css -->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/libs/swiper/swiper-bundle.min.css">

<?php $styles = ob_get_clean(); ?>
<!-- This code is useful for internal styles  -->

<!-- This code is useful for content -->
<?php ob_start(); ?>
	
                    <!-- Page Header -->
                    <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div>
                            <h1 class="page-title fw-medium fs-18 mb-2">Product List</h1>
                            <div class="">
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                        <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Product List</li>
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
                                <div class="card-header">
                                    <div class="card-title">
                                        Products List
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">
                                                        <input class="form-check-input check-all" type="checkbox" id="all-products" value="" aria-label="...">
                                                    </th>
                                                    <th scope="col">Product</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Stock</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Seller</th>
                                                    <th scope="col">Published</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="product-list">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product1" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/9.png" class="w-100 h-100" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Flower Pot</a></p>
                                                                <p class="fs-12 text-muted mb-0">Ceramic</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Ceramic</span>
                                                    </td>
                                                    <td>$1,299</td>
                                                    <td>283</td>
                                                    <td><span class="badge bg-primary-transparent">Published</span></td>
                                                    <td>
                                                        <div class="d-flex align-items-center fw-semibold">
                                                            <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                                <img src="<?php echo $baseUrl; ?>/assets/images/faces/4.jpg" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);">Mayor Kelly</a>
                                                        </div>
                                                    </td>
                                                    <td>24,Nov 2023 - 04:42PM</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="edit-products.php" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product2" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/14.png" class="w-100 h-100" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);"> Digital Camera</a></p>
                                                                <p class="fs-12 text-muted mb-0">Serene Garden</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Electronics</span>
                                                    </td>
                                                    <td>$799</td>
                                                    <td>98</td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">Unpublished</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center fw-semibold">
                                                            <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                                <img src="<?php echo $baseUrl; ?>/assets/images/faces/15.jpg" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);">Andrew Garfield </a>
                                                        </div>
                                                    </td>
                                                    <td>18,Nov 2023 - 06:53AM</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="edit-products.php" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product5" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/16.png" class="w-100 h-100" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Teddy Bear</a></p>
                                                                <p class="fs-12 text-muted mb-0">AirPods Max</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Toys</span>
                                                    </td>
                                                    <td>$2,499</td>
                                                    <td>194</td>
                                                    <td><span class="badge bg-primary-transparent">Published</span></td>
                                                    <td>
                                                        <div class="d-flex align-items-center fw-semibold">
                                                            <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                                <img src="<?php echo $baseUrl; ?>/assets/images/faces/11.jpg" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);">Simon Cowel </a>
                                                        </div>
                                                    </td>
                                                    <td>12,Aug 2023 - 11:21AM</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="edit-products.php" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product6" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/12.png" class="w-100 h-100" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Ladies Hand bag</a></p>
                                                                <p class="fs-12 text-muted mb-0">Twinkle Twirl</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Fashion Wear</span>
                                                    </td>
                                                    <td>$899</td>
                                                    <td>267</td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">Unpublished</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center fw-semibold">
                                                            <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                                <img src="<?php echo $baseUrl; ?>/assets/images/faces/8.jpg" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);">Mirinda Hers</a>
                                                        </div>
                                                    </td>
                                                    <td>05,Sep 2023 - 10:14AM</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="edit-products.php" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product7" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/15.png" class="w-100 h-100" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Alarm Clock</a></p>
                                                                <p class="fs-12 text-muted mb-0">Midest Brand</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Accesories</span>
                                                    </td>
                                                    <td>$499</td>
                                                    <td>143</td>
                                                    <td><span class="badge bg-primary-transparent">Published</span></td>
                                                    <td>
                                                        <div class="d-flex align-items-center fw-semibold">
                                                            <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                                <img src="<?php echo $baseUrl; ?>/assets/images/faces/1.jpg" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);">Simon Cowel</a>
                                                        </div>
                                                    </td>
                                                    <td>18,Nov 2023 - 14:35PM</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="edit-products.php" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product8" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/23.png" class="w-100 h-100" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Sport Shoe</a></p>
                                                                <p class="fs-12 text-muted mb-0">SmartSync 2024</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Sports</span>
                                                    </td>
                                                    <td>$999</td>
                                                    <td>365</td>
                                                    <td><span class="badge bg-primary-transparent">Published</span></td>
                                                    <td>
                                                        <div class="d-flex align-items-center fw-semibold">
                                                            <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                                <img src="<?php echo $baseUrl; ?>/assets/images/faces/2.jpg" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);">Mirinda Hers</a>
                                                        </div>
                                                    </td>
                                                    <td>27,Nov 2023 - 05:12AM</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="edit-products.php" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="product-list">
                                                    <td class="product-checkbox"><input class="form-check-input" type="checkbox" id="product9" value="" aria-label="..."></td>
                                                    <td>
                                                        <div class="d-flex">
                                                            <span class="avatar avatar-md avatar-square bg-light"><img src="<?php echo $baseUrl; ?>/assets/images/ecommerce/png/12.png" class="w-100 h-100" alt="..."></span>
                                                            <div class="ms-2">
                                                                <p class="fw-semibold mb-0 d-flex align-items-center"><a href="javascript:void(0);">Hand Bag</a></p>
                                                                <p class="fs-12 text-muted mb-0">Conit Brand</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span>Accesories</span>
                                                    </td>
                                                    <td>$1,499</td>
                                                    <td>257</td>
                                                    <td>
                                                        <span class="badge bg-danger-transparent">Unpublished</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center fw-semibold">
                                                            <span class="avatar avatar-sm p-1 bg-light me-2 avatar-rounded">
                                                                <img src="<?php echo $baseUrl; ?>/assets/images/faces/9.jpg" alt="">
                                                            </span>
                                                            <a href="javascript:void(0);">Jhon Trendy</a>
                                                        </div>
                                                    </td>
                                                    <td>29,Nov 2023 - 16:32PM</td>
                                                    <td>
                                                        <div class="hstack gap-2 fs-15">
                                                            <a href="edit-products.php" class="btn btn-icon btn-sm btn-primary-light"><i class="ri-edit-line"></i></a>
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-danger-light product-btn"><i class="ri-delete-bin-line"></i></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center flex-wrap overflow-auto">
                                        <div class="mb-2 mb-sm-0">
                                            Showing <b>1</b> to <b>5</b> of <b>10</b> entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
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
                        </div>
                    </div>
                    <!--End::row-1 -->

<?php $content = ob_get_clean(); ?>
<!-- This code is useful for content -->

<!-- This code is useful for internal scripts  -->
<?php ob_start(); ?>
	
        <!-- Swiper JS -->
        <script src="<?php echo $baseUrl; ?>/assets/libs/swiper/swiper-bundle.min.js"></script>

        <!-- Gallery JS -->
        <script src="<?php echo $baseUrl; ?>/assets/libs/glightbox/js/glightbox.min.js"></script>

        <!-- Internal Ecommerce Product Details -->
        <script src="<?php echo $baseUrl; ?>/assets/js/product-list.js"></script>

<?php $scripts = ob_get_clean(); ?>
<!-- This code is useful for internal scripts  -->

<!-- This code use for render base file -->
<?php include 'layouts/base.php'; ?>
<!-- This code use for render base file -->
