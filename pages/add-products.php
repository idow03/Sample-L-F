
<!-- This code generates the base URL for the website by combining the protocol, domain name, and directory path -->
<?php
    $rootFolder = basename($_SERVER['DOCUMENT_ROOT']);
    $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . str_replace('/pages', '', dirname($_SERVER['SCRIPT_NAME']));
?>
<!-- This code generates the base URL for the website by combining the protocol, domain name, and directory path -->

<!-- This code is useful for internal styles  -->
<?php ob_start(); ?>

        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/libs/quill/quill.snow.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/libs/quill/quill.bubble.css">

        <!-- Filepond CSS -->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/libs/filepond/filepond.min.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css">

        <!-- Date & Time Picker CSS -->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/libs/flatpickr/flatpickr.min.css">

<?php $styles = ob_get_clean(); ?>
<!-- This code is useful for internal styles  -->

<!-- This code is useful for content -->
<?php ob_start(); ?>
	
                    <!-- Page Header -->
                    <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div>
                            <h1 class="page-title fw-medium fs-18 mb-2">Add Product</h1>
                            <div class="">
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Pages</a></li>
                                        <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);">Ecommerce</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add Product</li>
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
                                <div class="card-body add-products">
                                    <div class="row gx-4">
                                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                            <div class="card custom-card shadow-none mb-0 border-0">
                                                <div class="card-body p-0">
                                                    <div class="row gy-3">
                                                        <div class="col-xl-12">
                                                            <label for="product-name-add" class="form-label">Product Name</label>
                                                            <input type="text" class="form-control" id="product-name-add" placeholder="Name">
                                                            <label for="product-name-add" class="form-label mt-1 fs-12 fw-normal text-muted mb-0">*Product Name should not exceed 30 characters</label>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="product-size-add" class="form-label">Size</label>
                                                            <select class="form-control" data-trigger name="product-size-add" id="product-size-add">
                                                                <option value="">Select</option>
                                                                <option value="Extra Small">Extra Small</option>
                                                                <option value="Small">Small</option>
                                                                <option value="Medium">Medium</option>
                                                                <option value="Large">Large</option>
                                                                <option value="Extra Large">Extra Large</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="product-brand-add" class="form-label">Brand</label>
                                                            <select class="form-control" data-trigger name="product-brand-add" id="product-brand-add">
                                                                <option value="">Select</option>
                                                                <option value="Armani">Armani</option>
                                                                <option value="Lacoste">Lacoste</option>
                                                                <option value="Puma">Puma</option>
                                                                <option value="Spykar">Spykar</option>
                                                                <option value="Mufti">Mufti</option>
                                                                <option value="Home Town">Home Town</option>
                                                                <option value="Arrabi">Arrabi</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="product-category-add" class="form-label">Category</label>
                                                            <select class="form-control" data-trigger name="product-category-add" id="product-category-add">
                                                                <option value="">Category</option>
                                                                <option value="Clothing">Clothing</option>
                                                                <option value="Footwear">Footwear</option>
                                                                <option value="Accesories">Accesories</option>
                                                                <option value="Grooming">Grooming</option>
                                                                <option value="Ethnic & Festive">Ethnic & Festive</option>
                                                                <option value="Jewellery">Jewellery</option>
                                                                <option value="Toys & Babycare">Toys & Babycare</option>
                                                                <option value="Festive Gifts">Festive Gifts</option>
                                                                <option value="Kitchen">Kitchen</option>
                                                                <option value="Dining">Dining</option>
                                                                <option value="Home Decors">Home Decors</option>
                                                                <option value="Stationery">Stationery</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="product-gender-add" class="form-label">Gender</label>
                                                            <select class="form-control" data-trigger name="product-gender-add" id="product-gender-add">
                                                                <option value="">Select</option>
                                                                <option value="All">All</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-6 color-selection">
                                                            <label for="product-color-add" class="form-label">Colors</label>
                                                            <select class="form-control" name="product-color-add" id="product-color-add" multiple>
                                                                <option value="White">White</option>
                                                                <option value="Black">Black</option>
                                                                <option value="Red">Red</option>
                                                                <option value="Orange">Orange</option>
                                                                <option value="Yellow">Yellow</option>
                                                                <option value="Green">Green</option>
                                                                <option value="Blue">Blue</option>
                                                                <option value="Pink">Pink</option>
                                                                <option value="Purple">Purple</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="product-cost-add" class="form-label">Enter Cost</label>
                                                            <input type="text" class="form-control" id="product-cost-add" placeholder="Cost">
                                                            <label for="product-cost-add" class="form-label mt-1 fs-12 fw-normal text-muted mb-0">*Mention final price of the product</label>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="product-description-add" class="form-label">Product Description</label>
                                                            <textarea class="form-control" id="product-description-add" rows="2"></textarea>
                                                            <label for="product-description-add" class="form-label mt-1 fs-12 fw-normal text-muted mb-0">*Description should not exceed 500 letters</label>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="product-type" class="form-label">Product Type</label>
                                                            <input type="text" class="form-control" id="product-type" placeholder="Type">
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="product-discount" class="form-label">Item Weight</label>
                                                            <input type="text" class="form-control" id="product-discount1" placeholder="Weight in gms">
                                                        </div>
                                                        <div class="col-xl-12 product-documents-container">
                                                            <p class="fw-medium mb-2 fs-14">Product Images :</p>
                                                            <input type="file" class="product-Images" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                                        </div>
                                                        <label class="form-label text-muted mt-3 fw-normal fs-12">* Minimum of 6 images are need to be uploaded,
                                                            all images should be uniformly maintained, width and height to the container.
                                                        </label>
                                                        <div class="col-xl-12">
                                                            <label for="product-status-add1" class="form-label">Availability</label>
                                                            <select class="form-control" data-trigger name="product-status-add1" id="product-status-add1">
                                                                <option value="">Select</option>
                                                                <option value="In Stock">In Stock</option>
                                                                <option value="Out Of Stock">Out Of Stock</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-12 col-lg-12 col-md-6">
                                            <div class="card custom-card shadow-none mb-0 border-0">
                                                <div class="card-body p-0">
                                                    <div class="row gy-3">
                                                        <div class="col-xl-12">
                                                            <label class="form-label">Product Features</label>
                                                            <div id="product-features"></div>
                                                        </div>
                                                        <div class="col-xl-12 product-documents-container">
                                                            <p class="fw-medium mb-2 fs-14">Warrenty Documents :</p>
                                                            <input type="file" class="product-documents" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <label for="product-actual-price" class="form-label">Actual Price</label>
                                                            <input type="text" class="form-control" id="product-actual-price" placeholder="Actual Price">
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <label for="product-dealer-price" class="form-label">Dealer Price</label>
                                                            <input type="text" class="form-control" id="product-dealer-price" placeholder="Dealer Price">
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <label for="product-discount" class="form-label">Discount</label>
                                                            <input type="text" class="form-control" id="product-discount" placeholder="Discount in %">
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="publish-date" class="form-label">Publish Date</label>
                                                            <input type="text" class="form-control" id="publish-date" placeholder="Choose date">
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <label for="publish-time" class="form-label">Publish Time</label>
                                                            <input type="text" class="form-control" id="publish-time" placeholder="Choose time">
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="product-status-add" class="form-label">Published Status</label>
                                                            <select class="form-control" data-trigger name="product-status-add" id="product-status-add">
                                                                <option value="">Select</option>
                                                                <option value="Published">Published</option>
                                                                <option value="Scheduled">Scheduled</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-12">
                                                            <label for="product-tags" class="form-label">Product Tags</label>
                                                            <select class="form-control" name="product-tags" id="product-tags" multiple>
                                                                <option value="Relaxed" selected>Relaxed</option>
                                                                <option value="Solid">Solid</option>
                                                                <option value="Washed">Washed</option>
                                                                <option value="Plain" selected>Plain</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer border-top border-block-start-dashed d-sm-flex justify-content-end">
                                    <button class="btn btn-secondary me-2 mb-2 mb-sm-0">Add Product<i class="bi bi-plus-lg ms-2"></i></button>
                                    <button class="btn btn-primary mb-2 mb-sm-0">Save Product<i class="bi bi-download ms-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

<?php $content = ob_get_clean(); ?>
<!-- This code is useful for content -->

<!-- This code is useful for internal scripts  -->
<?php ob_start(); ?>
        
        <!-- Date & Time Picker JS -->
        <script src="<?php echo $baseUrl; ?>/assets/libs/flatpickr/flatpickr.min.js"></script>

        <!-- Quill Editor JS -->
        <script src="<?php echo $baseUrl; ?>/assets/libs/quill/quill.js"></script>

        <!-- Filepond JS -->
        <script src="<?php echo $baseUrl; ?>/assets/libs/filepond/filepond.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/libs/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/libs/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/libs/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/libs/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/libs/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js"></script>

        <!-- Internal Add Products JS -->
        <script src="<?php echo $baseUrl; ?>/assets/js/add-products.js"></script>

<?php $scripts = ob_get_clean(); ?>
<!-- This code is useful for internal scripts  -->

<!-- This code use for render base file -->
<?php include 'layouts/base.php'; ?>
<!-- This code use for render base file -->
