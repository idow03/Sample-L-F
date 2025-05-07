
<!-- This code generates the base URL for the website by combining the protocol, domain name, and directory path -->
<?php
    $rootFolder = basename($_SERVER['DOCUMENT_ROOT']);
    $baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . str_replace('/pages', '', dirname($_SERVER['SCRIPT_NAME']));
?>
<!-- This code generates the base URL for the website by combining the protocol, domain name, and directory path -->

<!-- This code is useful for internal styles  -->
<?php ob_start(); ?>

        <!-- Prism CSS -->
        <link rel="stylesheet" href="<?php echo $baseUrl; ?>/assets/libs/prismjs/themes/prism-coy.min.css">

<?php $styles = ob_get_clean(); ?>
<!-- This code is useful for internal styles  -->

<!-- This code is useful for content -->
<?php ob_start(); ?>
	
                    <!-- Page Header -->
                    <div class="my-4 page-header-breadcrumb d-flex align-items-center justify-content-between flex-wrap gap-2">
                        <div>
                            <h1 class="page-title fw-medium fs-18 mb-2">Images & Figures</h1>
                            <div class="">
                                <nav>
                                    <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Ui Elements</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Images & Figures</li>
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
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Responsive image
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-title mb-3">Use <code> .img-fluid </code>class to the img tag to get responsive image.</p>
                                    <div class="text-center">
                                        <img src="<?php echo $baseUrl; ?>/assets/images/media/media-48.jpg" class="img-fluid" alt="...">
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="<?php echo $baseUrl; ?>/assets/images/media/media-48.jpg" class="img-fluid" alt="..."&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Image With Radius
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-title mb-3">Use <code>.rounded</code> class along with <code>.img-fluid</code> to get border radius.</p>
                                    <div class="text-center">
                                        <img src="<?php echo $baseUrl; ?>/assets/images/media/media-49.jpg" class="img-fluid rounded" alt="...">
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="<?php echo $baseUrl; ?>/assets/images/media/media-49.jpg" class="img-fluid rounded" alt="..."&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Rounded Image
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-title mb-3">Use <code>.rounded-pill</code> class to <code>img</code> tag to get rounded image.</p>
                                    <div class="text-center">
                                        <img src="<?php echo $baseUrl; ?>/assets/images/media/media-50.jpg" class="img-fluid rounded-pill" alt="...">
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="<?php echo $baseUrl; ?>/assets/images/media/media-50.jpg" class="img-fluid rounded-pill" alt="..."&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                           </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Image Left Align</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-title mb-3">Use <code>.float-start</code> class to <code>img</code> tag to get image to left.</p>
                                    <img class="rounded float-start" src="<?php echo $baseUrl; ?>/assets/images/media/media-53.jpg" alt="...">
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;img class="rounded float-start" src="<?php echo $baseUrl; ?>/assets/images/media/media-53.jpg" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Image Center Align</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <img class="rounded mx-auto d-block" src="<?php echo $baseUrl; ?>/assets/images/media/media-55.jpg" alt="...">
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;img class="rounded mx-auto d-block" src="<?php echo $baseUrl; ?>/assets/images/media/media-55.jpg" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Image Right Align</div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <img class="rounded float-end" src="<?php echo $baseUrl; ?>/assets/images/media/media-54.jpg" alt="...">
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;img class="rounded float-end" src="<?php echo $baseUrl; ?>/assets/images/media/media-54.jpg" alt="..."&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Rounded Thumbnail
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-title mb-3">Use <code> .rounded-pill </code>along with <code> .img-thummbnail </code> to get radius.</p>
                                    <div class="text-center">
                                        <img src="<?php echo $baseUrl; ?>/assets/images/media/media-52.jpg" class="img-thumbnail rounded-pill" alt="...">
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="<?php echo $baseUrl; ?>/assets/images/media/media-52.jpg" class="img-thumbnail rounded-pill" alt="..."&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Image Thumbnail
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-title mb-3">Use <code> .img-thumbnail </code>to give an image a rounded 1px border.</p>
                                    <div class="text-center">
                                        <img src="<?php echo $baseUrl; ?>/assets/images/media/media-51.jpg" class="img-thumbnail" alt="...">
                                    </div>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="text-center"&gt;
    &lt;img src="<?php echo $baseUrl; ?>/assets/images/media/media-51.jpg" class="img-thumbnail" alt="..."&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Figures
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="btn btn-sm btn-primary-light">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="card-body d-flex justify-content-between gap-2">
                                    <figure class="figure">
                                        <img class="bd-placeholder-img figure-img img-fluid rounded card-img" src="<?php echo $baseUrl; ?>/assets/images/media/media-56.jpg" alt="...">
                                        <figcaption class="figure-caption mt-4">A caption for the above image.
                                        </figcaption>
                                    </figure>
                                    <figure class="figure float-end">
                                        <img class="bd-placeholder-img figure-img img-fluid rounded card-img" src="<?php echo $baseUrl; ?>/assets/images/media/media-57.jpg" alt="...">
                                        <figcaption class="figure-caption text-end mt-4">A caption for the above image.
                                        </figcaption>
                                    </figure>
                                </div>
                                <div class="card-footer d-none border-top-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;figure class="figure"&gt;
    &lt;img class="bd-placeholder-img figure-img img-fluid rounded card-img" src="<?php echo $baseUrl; ?>/assets/images/media/media-56.jpg" alt="..."&gt;
    &lt;figcaption class="figure-caption"&gt;A caption for the above image.
    &lt;/figcaption&gt;
&lt;/figure&gt;
&lt;figure class="figure float-end"&gt;
    &lt;img class="bd-placeholder-img figure-img img-fluid rounded card-img" src="<?php echo $baseUrl; ?>/assets/images/media/media-57.jpg" alt="..."&gt;
    &lt;figcaption class="figure-caption text-end"&gt;A caption for the above image.
    &lt;/figcaption&gt;
&lt;/figure&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

<?php $content = ob_get_clean(); ?>
<!-- This code is useful for content -->

<!-- This code is useful for internal scripts  -->
<?php ob_start(); ?>
	
        <!-- Prism JS -->
        <script src="<?php echo $baseUrl; ?>/assets/libs/prismjs/prism.js"></script>
        <script src="<?php echo $baseUrl; ?>/assets/js/prism-custom.js"></script>

<?php $scripts = ob_get_clean(); ?>
<!-- This code is useful for internal scripts  -->

<!-- This code use for render base file -->
<?php include 'layouts/base.php'; ?>
<!-- This code use for render base file -->
