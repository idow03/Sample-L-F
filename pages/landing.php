
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
	
            <!-- Start:: Section-1 -->
            <div class="landing-banner" id="home">
                <section class="section">
                    <div class="container main-banner-container pb-lg-0">
                        <div class="row pt-5 mt-2 justify-content-between">
                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-8">
                                <div class="pt-lg-5 pb-4">
                                    <div class="mb-3">
                                        <h6 class="fw-medium text-fixed-white op-9">Optimized and Accessible</h6>
                                    </div>
                                    <p class="landing-banner-heading mb-3 text-fixed-white">Refined Design, Elevated User Experience: 
                                        Explore <span class="fw-semibold text-warning">Meno</span> Template.</p>
                                    <div class="fs-16 mb-5 text-fixed-white op-7">An intuitive admin template designed for efficiency, featuring a clean and modern interface that simplifies management tasks and enhances productivity.
                                    </div>
                                    <a href="index.php" class="m-1 btn btn-lg btn-primary">
                                        View Demos
                                        <i class="ri-eye-line ms-2 align-middle"></i>
                                    </a>
                                    <a href="index.php"
                                        class="m-1 btn btn-lg btn-secondary btn-wave waves-effect waves-light">
                                        Discover More
                                        <i class="ri-arrow-right-line ms-2 align-middle"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-4 my-auto">
                                <div class="text-end landing-main-image landing-heading-img p-5 bg-white-transparent">
                                    <img src="<?php echo $baseUrl; ?>/assets/images/media/landing/1.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- End:: Section-1 -->

            <!-- Start:: Section-2 -->
            <section class="section" id="about">
                <div class="container position-relative">
                    <div class="text-center">
                        <p class="fs-12 fw-medium text-success mb-1"><span class="landing-section-heading text-pink">GLANCE</span>
                        </p>
                        <h4 class="fw-semibold mb-1 mt-3">Why you choose us ?</h4>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-14 mb-5 fw-normal">Our mission is to support you in achieving
                                    your goals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card mb-lg-0 hover-card features-card overflow-hidden custom-card reveal">
                                <div class="card-body text-center p-5">
                                        <span class="svg-gradient mx-auto svg-container">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="Finance"><path fill="var(--primary-color)" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;white-space:normal;isolation:auto;mix-blend-mode:normal;" d="M-432.873 1359.588a.5.5 0 0 0-.227.059l-8.212 4.355.468.885 7.772-4.123 2.746 5.18.883-.469-2.98-5.621a.5.5 0 0 0-.45-.266z" color="#000" transform="translate(456.5 -1353.371)" class="color2b79c2 svgShape"></path><path fill="var(--primary-color)" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;white-space:normal;isolation:auto;mix-blend-mode:normal;" d="M-436.693 1357.387a.5.5 0 0 0-.346.144l-4.941 4.94.707.709 4.587-4.586 2.403 2.402.707-.707-2.756-2.756a.5.5 0 0 0-.361-.146z" color="#000" transform="translate(456.5 -1353.371)" class="color2b79c2 svgShape"></path><path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;white-space:normal;isolation:auto;mix-blend-mode:normal;" d="M-440.936 1365.371v1h11.436c.563 0 1 .437 1 1v13c0 .563-.437 1-1 1h-19c-.563 0-1-.437-1-1v-10.76h-1v10.76c0 1.1.9 2 2 2h19c1.1 0 2-.9 2-2v-13c0-1.1-.9-2-2-2h-11.436z" color="#000" transform="translate(456.5 -1353.371)" fill="rgba(var(--secondary-rgb), 1)" class="color000000 svgShape"></path><path style="isolation:auto;mix-blend-mode:normal;" d="M-440.5 1367.37h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm0 2h1v1h-1zm0 8h1v1h-1zm0 2h1v1h-1zm-2 0h1v1h-1zm-16-8h1v1h-1zm0 2h1v1h-1zm0 2h1v1h-1zm0 2h1v1h-1zm0 2h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1zm2 0h1v1h-1z" color="#000" transform="translate(456.5 -1353.371)" fill="rgba(var(--secondary-rgb), 1)" class="color000000 svgShape"></path><path style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;white-space:normal;isolation:auto;mix-blend-mode:normal;" d="M-434 1371.371a2.506 2.506 0 0 0-2.5 2.5c0 1.376 1.124 2.5 2.5 2.5h6a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 0-.5-.5h-6zm0 1h5.5v3h-5.5c-.84 0-1.5-.66-1.5-1.5s.66-1.5 1.5-1.5z" color="#000" transform="translate(456.5 -1353.371)" fill="rgba(var(--secondary-rgb), 1)" class="color000000 svgShape"></path><path style="isolation:auto;mix-blend-mode:normal" d="M-434.5 1373.37h1v1h-1z" color="#000" transform="translate(456.5 -1353.371)" fill="rgba(var(--secondary-rgb), 1)" class="color000000 svgShape"></path><path fill="var(--primary-color)" style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;white-space:normal;isolation:auto;mix-blend-mode:normal;" d="M-446.5 1359.37c-3.308 0-6 2.691-6 6 0 3.307 2.692 6 6 6s6-2.693 6-6c0-3.309-2.692-6-6-6zm0 1c2.767 0 5 2.232 5 5 0 2.766-2.233 5-5 5s-5-2.234-5-5c0-2.768 2.233-5 5-5z" color="#000" transform="translate(456.5 -1353.371)" class="color2b79c2 svgShape"></path><path fill="var(--primary-color)" d="M11.21 13.538q0-.19-.066-.35-.066-.16-.216-.299-.144-.139-.383-.256-.233-.118-.566-.228-.443-.122-.799-.282-.349-.164-.599-.383-.244-.219-.377-.505-.127-.287-.127-.661 0-.346.11-.632.117-.286.328-.497.216-.21.521-.345.305-.135.683-.181v-.926h.782v.93q.776.105 1.198.602.427.493.427 1.348h-.97q0-.283-.073-.518-.066-.236-.2-.409-.133-.172-.332-.27-.2-.096-.455-.096-.266 0-.46.071-.195.072-.328.203-.127.126-.194.307-.061.18-.061.4 0 .202.061.366.067.16.216.295.15.135.389.257.244.118.599.231.455.13.804.295.35.16.588.375.239.215.36.497.123.282.123.652 0 .362-.128.653-.128.286-.36.497-.233.21-.566.337-.333.126-.75.168v.808h-.77v-.808q-.35-.037-.677-.156-.327-.118-.582-.34-.25-.224-.4-.56-.15-.342-.15-.818h.977q0 .358.105.594t.277.375q.172.139.383.193.211.055.422.055.294 0 .521-.067.233-.071.388-.198.161-.13.245-.311.083-.185.083-.413z" class="color2b79c2 svgShape"></path></svg>
                                        </span>
                                    <h5 class="mt-4 fw-semibold">Planning Finances</h5>
                                    <p class="card-main-content px-3 mb-0">Magna dolore elitr ut et labore stet  dolor tempor at ipsum elitr ut et,
                                        amet quis nostrum exercitationem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card mb-lg-0 hover-card features-card overflow-hidden custom-card reveal">
                                <div class="card-body text-center p-5">
                                    <span class="svg-gradient mx-auto svg-container">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128" id="IdeaConcept"><path fill="var(--primary-color)" d="M64 13.481a2 2 0 0 0 2-2V8.5a2 2 0 0 0-4 0v2.981a2 2 0 0 0 2 2zM73.941 15.487a2 2 0 0 0 2.62-1.064l1.161-2.747a2 2 0 0 0-3.685-1.557l-1.161 2.747a2.001 2.001 0 0 0 1.065 2.621zM83.472 21.545a1.99 1.99 0 0 0 1.414-.586l2.108-2.108a2 2 0 1 0-2.828-2.828l-2.108 2.108a2 2 0 0 0 1.414 3.414zM87.531 29.074a2 2 0 0 0 2.62 1.064l2.747-1.161a2 2 0 1 0-1.557-3.685l-2.747 1.161a2.002 2.002 0 0 0-1.063 2.621zM89.538 39.012a2 2 0 0 0 2 2h2.981a2 2 0 0 0 0-4h-2.981a2 2 0 0 0-2 2zM51.439 14.423a2 2 0 1 0 3.684-1.557l-1.16-2.747a2 2 0 1 0-3.685 1.557l1.161 2.747zM43.114 20.959c.391.39.902.585 1.414.585s1.024-.195 1.415-.586a2 2 0 0 0 0-2.829l-2.108-2.108a2 2 0 0 0-2.829 2.829l2.108 2.109zM35.101 28.978l2.748 1.161a2 2 0 1 0 1.556-3.685l-2.748-1.161a2 2 0 1 0-1.556 3.685zM33.481 41.012h2.982a2 2 0 0 0 0-4h-2.982a2 2 0 0 0 0 4zM51.075 55.369a3.886 3.886 0 0 1 1.497 3.063v.965a2 2 0 0 0 2 2H64a2 2 0 0 0 2-2v-12.18c3.492-.894 6.084-4.057 6.084-7.822 0-4.457-3.626-8.083-8.084-8.083s-8.084 3.626-8.084 8.083c0 3.766 2.593 6.929 6.084 7.822v10.18h-5.502a7.863 7.863 0 0 0-2.944-5.168 16.743 16.743 0 0 1-6.41-13.217c0-4.782 2.046-9.357 5.613-12.553 3.617-3.24 8.292-4.729 13.163-4.192 7.858.866 14.255 7.473 14.88 15.368.449 5.66-1.938 11.125-6.385 14.617a7.796 7.796 0 0 0-2.988 6.172v6.728c0 .559-.458 1.013-1.02 1.013h-1.521a2 2 0 0 0-2 2 2.89 2.89 0 0 1-2.887 2.886 2.89 2.89 0 0 1-2.887-2.886 2 2 0 0 0-2-2h-4.541a2 2 0 0 0 0 4h2.837c.859 2.825 3.489 4.886 6.591 4.886 3.109 0 5.74-2.071 6.594-4.905 2.68-.1 4.834-2.293 4.834-4.994v-6.728a3.82 3.82 0 0 1 1.459-3.026 20.835 20.835 0 0 0 7.901-18.079C84 27.383 76.249 19.381 66.358 18.291c-5.932-.655-11.86 1.238-16.27 5.188a20.883 20.883 0 0 0-6.944 15.532c0 6.418 2.891 12.38 7.931 16.358zm8.841-15.973A4.089 4.089 0 0 1 64 35.313c2.252 0 4.084 1.832 4.084 4.083S66.252 43.479 64 43.479s-4.084-1.832-4.084-4.083z" class="color1ac6bd svgShape"></path><path fill="rgba(var(--secondary-rgb), 1)" d="M96.027 94.564a2 2 0 0 0-2 2v5.777L66 116.272V97.087a2 2 0 0 0-4 0v19.173l-27.896-13.984V96.63a2 2 0 0 0-4 0v6.881c0 .04.009.077.012.117.004.072.01.143.022.214.011.064.026.125.043.186.017.062.034.124.057.184.023.061.05.12.079.178a1.842 1.842 0 0 0 .326.477c.043.046.089.089.136.13.049.043.098.086.151.124.056.041.116.077.177.112.035.02.065.046.102.065l31.896 15.989c.017.008.035.011.052.019.096.045.196.079.299.108.037.011.073.026.111.034.14.031.285.05.434.05.149 0 .293-.019.433-.05.037-.008.071-.023.108-.033.104-.029.205-.063.302-.108.016-.007.033-.01.048-.017l32.027-15.919c.037-.018.067-.044.102-.064.062-.036.124-.072.182-.114.053-.038.1-.08.148-.122a1.907 1.907 0 0 0 .373-.439c.034-.055.063-.112.092-.169.029-.058.056-.116.079-.177s.041-.123.058-.186c.016-.061.032-.121.043-.183.012-.072.018-.144.022-.218.002-.04.012-.077.012-.117v-7.017a2.005 2.005 0 0 0-2.003-2.001z" class="color5277a3 svgShape"></path><path fill="rgba(var(--secondary-rgb), 1)" d="m115.301 75.97-14.739-4.841L115.785 61l.011-.009c.014-.009.025-.022.039-.032a2.017 2.017 0 0 0 .439-.432c.11-.147.201-.304.266-.472.003-.008.009-.013.012-.021.017-.045.023-.092.036-.138.02-.07.042-.138.055-.21.012-.065.015-.13.02-.195.005-.064.012-.127.011-.191-.001-.066-.01-.131-.018-.196-.007-.064-.013-.127-.027-.19-.014-.064-.035-.126-.055-.189-.019-.061-.037-.121-.063-.181-.029-.068-.067-.132-.104-.196-.023-.04-.039-.083-.065-.122l-.02-.025c-.043-.063-.095-.12-.146-.178-.037-.042-.07-.088-.11-.126-.043-.042-.094-.077-.141-.115-.056-.045-.109-.093-.169-.131-.039-.025-.083-.043-.124-.066-.076-.041-.151-.083-.23-.114-.009-.003-.016-.009-.025-.012l-25.304-9.436a2 2 0 0 0-1.398 3.748l21.633 8.067-14.426 9.598-13.023-6.473a2 2 0 0 0-1.78 3.582l10.455 5.197-27.53 13.685-27.421-13.746 10.332-5.134a2 2 0 1 0-1.78-3.582l-12.881 6.4-14.361-9.628 21.431-7.965a2 2 0 0 0-1.393-3.749l-25.093 9.326a2 2 0 0 0-.417 3.536l15.172 10.171-14.897 4.914a2.001 2.001 0 0 0-.264 3.691L44.459 95.58a1.995 1.995 0 0 0 1.514.109l18.023-5.92 17.943 5.958a2.002 2.002 0 0 0 1.52-.107l32.107-15.959a1.997 1.997 0 0 0 1.104-1.935 1.994 1.994 0 0 0-1.369-1.756zM45.505 91.632 18.57 78.244l13.376-4.413 26.82 13.445-13.261 4.356zm36.913.039-13.183-4.377L96.182 73.9l13.24 4.349-27.004 13.422z" class="color5277a3 svgShape"></path></svg>
                                    </span>
                                    <h5 class="mt-4 fw-semibold">Corporate Ideas</h5>
                                    <p class="card-main-content px-3 mb-0">Blanditiis praesentium voluptatum deleniti atque corrupti quos
                                        dolores rerum hic tenetur reprehenderitlit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="card mb-lg-0 hover-card features-card overflow-hidden custom-card reveal">
                                <div class="card-body text-center p-5">
                                    <span class="svg-gradient mx-auto svg-container">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 512 512" id="services"><path fill="rgba(var(--secondary-rgb), 1)" d="M347.73 266.36c-3.31 0-6-2.69-6-6l0-18.31c0-47.28-38.46-85.74-85.73-85.74-47.28 0-85.74 38.46-85.74 85.74l0 18.31c0 3.31-2.68 6-6 6-3.31 0-6-2.69-6-6l0-18.31c0-53.89 43.85-97.74 97.74-97.74 53.89 0 97.73 43.85 97.73 97.74l0 18.31c0 3.31-2.68 6-6 6zM289.3 354.14c-3.2 0-5.86-2.53-5.99-5.75-.14-3.32 2.43-6.11 5.74-6.25 29.56-1.23 33.76-25.21 33.93-26.23.52-3.26 3.59-5.49 6.84-4.99 3.26.51 5.51 3.53 5.02 6.8-1.79 12.01-13.56 35.09-45.29 36.41-.08 0-.17.01-.25.01z" class="color5a5a5a svgShape"></path><path fill="rgba(var(--secondary-rgb), 1)" d="M268.43 367.69c-15.07 0-26.88-8.59-26.88-19.55 0-10.97 11.81-19.55 26.88-19.55 15.07 0 26.87 8.58 26.87 19.55 0 10.96-11.81 19.55-26.87 19.55zm0-27.1c-8.38 0-14.88 4.06-14.88 7.55 0 3.49 6.5 7.55 14.88 7.55 8.37 0 14.87-4.06 14.87-7.55 0-3.49-6.5-7.55-14.87-7.55zM347.73 322.83l-18.82 0c-3.31 0-6-2.69-6-6l0-56.47c0-3.32 2.69-6 6-6l18.82 0c18.88 0 34.24 15.36 34.24 34.23 0 18.88-15.36 34.24-34.24 34.24zm-12.82-12l12.82 0c12.26 0 22.24-9.98 22.24-22.24 0-12.26-9.98-22.23-22.24-22.23l-12.82 0 0 44.47zM183.09 322.83l-18.82 0c-18.88 0-34.24-15.36-34.24-34.24 0-18.87 15.36-34.23 34.24-34.23l18.82 0c3.31 0 6 2.69 6 6l0 56.47c0 3.32-2.69 6-6 6zm-18.82-56.47c-12.27 0-22.24 9.97-22.24 22.23 0 12.26 9.97 22.24 22.24 22.24l12.82 0 0-44.47-12.82 0 0 0z" class="color5a5a5a svgShape"></path><path fill="var(--primary-color)" d="M256 460.6c-0.82,0 -1.63,-0.17 -2.4,-0.5 -72.15,-31.47 -111.87,-69.94 -132.49,-96.67 -22.66,-29.38 -27.95,-51.26 -28.16,-52.18 -0.11,-0.44 -0.16,-0.9 -0.16,-1.36l0 -191.33c0,-2.48 1.52,-4.7 3.82,-5.6l157.21 -61.15c1.4,-0.55 2.96,-0.55 4.35,0l157.22 61.15c2.3,0.9 3.82,3.12 3.82,5.6l0 191.33c0,0.46 -0.05,0.91 -0.16,1.36 -0.21,0.92 -5.5,22.8 -28.16,52.18 -20.62,26.73 -60.34,65.19 -132.49,96.67 -0.77,0.33 -1.58,0.5 -2.4,0.5zm-151.21 -151.49c0.99,3.55 7,22.79 26.35,47.66 19.53,25.13 57.01,61.22 124.86,91.28 67.85,-30.06 105.33,-66.15 124.86,-91.28 19.33,-24.84 25.34,-44.07 26.35,-47.66l0 -186.45 -151.21 -58.82 -151.21 58.82 0 186.45z" class="colorcced00 svgShape"></path><path fill="var(--primary-color)" d="M256 512c-0.82,0 -1.63,-0.17 -2.4,-0.5 -90.52,-39.49 -140.33,-87.71 -166.17,-121.22 -28.32,-36.71 -34.9,-63.94 -35.17,-65.08 -0.11,-0.45 -0.16,-0.91 -0.16,-1.36l0 -240.86c0,-2.47 1.52,-4.69 3.83,-5.59l197.9 -76.98c1.39,-0.54 2.95,-0.54 4.35,0l197.89 76.98c2.31,0.9 3.83,3.12 3.83,5.59l0 240.86c0,0.45 -0.06,0.91 -0.16,1.36 -0.27,1.14 -6.85,28.37 -35.17,65.08 -25.84,33.51 -75.65,81.73 -166.17,121.22 -0.77,0.33 -1.58,0.5 -2.4,0.5zm-191.9 -188.93c1.13,4.08 8.6,28.68 33.36,60.56 24.76,31.89 72.32,77.75 158.54,115.81 86.67,-38.26 134.31,-84.39 159.06,-116.49 24.47,-31.72 31.73,-55.81 32.84,-59.88l0 -235.98 -191.9 -74.65 -191.9 74.65 0 235.98z" class="colorcced00 svgShape"></path></svg>
                                        </span>
                                    <h5 class="mt-4 fw-semibold"> Business Services</h5>
                                    <p class="card-main-content px-3 mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                        quidem rerum facilis reprehenderit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-2 -->

            <!-- Start:: Section-3 -->
            <section class="section section-bg" id="expectations">
                <div class="container">
                    <div class="row gx-5 align-items-center mx-0">
                        <div class="col-xl-7 my-auto">
                            <div class="heading-section text-start mb-4">
                                <p class="fs-12 fw-medium text-start text-success mb-1"><span
                                        class="landing-section-heading text-fixed-white">ABOUT US</span>
                                </p>
                                <h4 class="mt-3 fw-semibold mb-2 text-warning">Our Commitment!</h4>
                                <div class="heading-description fs-14 text-fixed-white op-7">Welcome to Meno,  our commitment is more than a statement; it's the cornerstone of everything we do.We are dedicated to design, ensuring that every interaction, project, and outcome reflects.</div>
                            </div>
                            <div class="row gy-3 mb-0">
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-arrow-right-double-line fs-20 align-middle text-fixed-white lh-1 d-inline-block rtl-r"></i>
                                        </div>
                                        <div>
                                            <strong class="text-fixed-white">Years of Experience and Reputation:</strong>
                                            <span class="fs-14 text-fixed-white op-8"> 
                                                We bring 4+ years of experience, backed by a solid reputation for excellence.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-arrow-right-double-line fs-20 align-middle text-fixed-white lh-1 d-inline-block rtl-r"></i>
                                        </div>
                                        <div>
                                            <strong class="text-fixed-white fs-15">Professional Team:</strong>
                                            <span class="fs-14 text-fixed-white op-8">
                                                 Our team consists of experienced and professional individuals dedicated to delivering top-notch service.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-arrow-right-double-line fs-20 align-middle text-fixed-white lh-1 d-inline-block rtl-r"></i>
                                        </div>
                                        <div>
                                            <strong class="text-fixed-white fs-15">Client-Centric Approach:</strong>
                                            <span class="fs-14 text-fixed-white op-8">
                                                 We understand that every client is unique, so we tailor our services to meet your specific needs and preferences.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="d-flex align-items-top">
                                        <div class="me-2 home-prove-svg">
                                            <i class="ri-arrow-right-double-line fs-20 align-middle text-fixed-white lh-1 d-inline-block rtl-r"></i>
                                        </div>
                                        <div>
                                            <strong class="text-fixed-white fs-15">24/7 Support:</strong>
                                            <span class="fs-14 text-fixed-white op-8">
                                                 We provide round-the-clock support, 365 days a year, ensuring that assistance is always available when you need it most.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="home-proving-image">
                                <img src="<?php echo $baseUrl; ?>/assets/images/media/landing/2.png" alt="" class="img-fluid rounded-5 about-image d-none d-xl-block">
                            </div>
                            <div class="proving-pattern-1"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-3 -->

            <!-- Start:: Section-4 -->
            <section class="section" id="services">
                <div class="container">
                    <div class="text-center">
                        <p class="fs-12 fw-medium text-success mb-1"><span
                                class="landing-section-heading text-pink">SERVICES</span>
                        </p>
                        <h4 class="fw-semibold mt-3 mb-2">What You Get</h4>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-14 mb-5 fw-normal">Nemo enim ipsam voluptatem quia voluptas sit
                                    aspernatur</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="card custom-card landing-services-card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-lg avatar-rounded bg-primary svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path></svg>
                                        </span>
                                    </div>
                                    <h6 class="fw-semibold">Responsive Design</h6>
                                    <p class="text-muted mb-0">Ensures the template is optimized for various screen sizes and devices, enhancing usability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-services-card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="mb-4">
                                            <span class="avatar avatar-lg avatar-rounded bg-secondary svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path></svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="fw-semibold">Pre-built Components</h6>
                                    <p class="text-muted mb-0">Ready-made UI components such as buttons, badges,input groups, forms, tables, charts, and modals.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-services-card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="mb-4">
                                            <span class="avatar avatar-lg avatar-rounded bg-success svg-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path></svg>
                                            </span>
                                        </div>
                                    </div>
                                    <h6 class="fw-semibold">Customization Options</h6>
                                    <p class="text-muted mb-0">Ability to customize colors, fonts, layouts, and other visual elements to match your brand.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-services-card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-lg avatar-rounded bg-pink svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path></svg>
                                        </span>
                                    </div>
                                    <h6 class="fw-semibold">Documentation</h6>
                                    <p class="text-muted mb-0">Comprehensive documentation that guides you through installation, theme, customization.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-services-card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-lg avatar-rounded bg-warning svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path></svg>
                                        </span>
                                    </div>
                                    <h6 class="fw-semibold">Support</h6>
                                    <p class="text-muted mb-0">Access to support forums, ticket systems, or direct support from the template provider.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-services-card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-lg avatar-rounded bg-info svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path></svg>
                                        </span>
                                    </div>
                                    <h6 class="fw-semibold">Updates and Maintenance</h6>
                                    <p class="text-muted mb-0">Regular updates to ensure compatibility with the latest web technologies and bug fixes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-services-card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-lg avatar-rounded bg-orange svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path></svg>
                                        </span>
                                    </div>
                                    <h6 class="fw-semibold">Multiple Layout</h6>
                                    <p class="text-muted mb-0">Different layout styles (sidebar navigation, top navigation) to suit different types of applications.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card custom-card landing-services-card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="avatar avatar-lg avatar-rounded bg-danger svg-white">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" viewBox="0 0 256 256"><path d="M224,200h-8V40a8,8,0,0,0-8-8H152a8,8,0,0,0-8,8V80H96a8,8,0,0,0-8,8v40H48a8,8,0,0,0-8,8v64H32a8,8,0,0,0,0,16H224a8,8,0,0,0,0-16ZM160,48h40V200H160ZM104,96h40V200H104ZM56,144H88v56H56Z"></path></svg>
                                        </span>
                                    </div>
                                    <h6 class="fw-semibold">Performance Optimization</h6>
                                    <p class="text-muted mb-0">Code optimized for performance, including lazy loading of assets, CSS or SCSS and JS files.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-4 -->

            <!-- Start:: Section-5 -->
            <section class="section section-bg" id="features">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="heading-section text-center mb-0">
                                <p class="fs-12 fw-medium text-success mb-1"><span
                                        class="landing-section-heading landing-section-heading-dark text-fixed-white">FEATURES</span>
                                </p>
                                <h4 class="text-fixed-white text-center mt-3 fw-medium">Our Features</h4>
                                <div class="fs-14 text-fixed-white text-center op-8 mb-4">Ullamco ea commodo.Sed ut
                                    perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                    laudantium, totam rem aperiam.perspiciatis unde omnis.</div>
                            </div>
                        </div>
                        <div class="col-xl-10 my-auto">
                            <div
                                class="d-flex align-items-center justify-content-center trusted-companies sub-card-companies flex-wrap mb-3 mb-xl-0 gap-4">
                                <div class="trust-img"><img src="<?php echo $baseUrl; ?>/assets/images/media/landing/web/1.png" alt="img"
                                        class="border-0 shadow-sm"></div>
                                <div class="trust-img"><img src="<?php echo $baseUrl; ?>/assets/images/media/landing/web/2.png" alt="img"
                                        class="border-0 shadow-sm"></div>
                                <div class="trust-img"><img src="<?php echo $baseUrl; ?>/assets/images/media/landing/web/4.png" alt="img"
                                        class="border-0 shadow-sm"></div>
                                <div class="trust-img"><img src="<?php echo $baseUrl; ?>/assets/images/media/landing/web/5.png" alt="img"
                                        class="border-0 shadow-sm"></div>
                                <div class="trust-img"><img src="<?php echo $baseUrl; ?>/assets/images/media/landing/web/6.png" alt="img"
                                        class="border-0 shadow-sm"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-5 -->

            <!-- Start:: Section-6 -->
            <section class="section" id="team">
                <div class="container">
                    <div class="text-center">
                        <p class="fs-12 fw-medium text-success mb-1"><span
                                class="landing-section-heading text-pink">OUR TEAM</span>
                        </p>
                        <h4 class="fw-semibold mt-3 mb-2">The people who make our organization Successful</h4>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-muted fs-14 mb-5 fw-normal">Our team is made up of real people who are
                                    passionate about what they do.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="card-body p-4">
                                    <div class="mb-4 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-primary">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/faces/1.jpg" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-2 fw-semibold">Hadley Kylin</h6>
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
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="card-body p-4">
                                    <div class="mb-4 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-teal">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/faces/8.jpg" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-2 fw-semibold">Owen Foster</h6>
                                        <p class="mb-3 text-pink fw-semibold">Board Director</p>
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
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="card-body p-4">
                                    <div class="mb-4 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-success">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/faces/11.jpg" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-2 fw-semibold">Stephen Roy</h6>
                                        <p class="mb-3 text-pink fw-semibold">Creative Director</p>
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
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="card custom-card team-member text-center">
                                <div class="card-body p-4">
                                    <div class="mb-4 lh-1 d-flex gap-2 justify-content-center">
                                        <span class="avatar avatar-xl avatar-rounded bg-orange">
                                            <img src="<?php echo $baseUrl; ?>/assets/images/faces/4.jpg" alt="...">
                                        </span>
                                    </div>
                                    <div class="">
                                        <h6 class="mb-2 fw-semibold">Jasmine Della</h6>
                                        <p class="mb-3 text-pink fw-semibold">Board Director</p>
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
                    </div>
                </div>
            </section>
            <!-- End:: Section-6 -->

            <!-- Start:: Section-7 -->
            <section class="section section-bg" id="pricing">
                <div class="container">
                    <div class="text-center">
                        <p class="fs-12 fw-medium text-success mb-1"><span
                                class="landing-section-heading text-fixed-white">PRICING</span>
                        </p>
                        <h4 class="fw-semibold mt-3 mb-2 text-fixed-white">Plans that flex with your needs.</h4>
                        <div class="row justify-content-center">
                            <div class="col-xl-7">
                                <p class="text-fixed-white op-7 fs-14 mb-5 fw-normal">Stay agile with plans that seamlessly adjust to your changing requirements, ensuring you always have the flexibility you need.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12" id="convertable-pricing">
                            <div class="d-flex justify-content-center mb-4">
                                <div class="switcher-box align-items-center">
                                    <span class="pricing-time-span text-fixed-white">Monthly</span>
                                    <div class="switcher-pricing text-center">
                                      <input type="checkbox" class="pricing-toggle">
                                    </div>
                                    <span class="pricing-time-span text-fixed-white">Annually </span>
                                </div>
                            </div>
                            <div class="tab-content show" id="monthly1">
                                <div class="row d-flex align-items-center justify-content-center mb-5">
                                    <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                                        <div class="card custom-card pricing-card">
                                            <div class="card-body p-4">
                                                <div class="text-center p-3 mb-3 bg-light">
                                                    <h4 class="fw-medium mb-1">Basic</h4>
                                                    <span class="mb-1 text-muted d-block">Essential features for a magical start</span>
                                                    <h2 class="mb-0 fw-bold d-block text-primary">$9.99/<span class="fs-12 text-default fw-medium ms-1">Price Per Month</span></h2>
                                                </div>
                                                <ul class="list-unstyled pricing-body mb-3 px-3">
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Unicorn Support
                                                            </span>
                                                            <span class="badge bg-secondary rounded-pill">Email</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Teleportation Technology
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Gravity-Defying Speed
                                                            </span>
                                                            <span class="badge bg-light text-default rounded-pill border">
                                                                <i class="ri-flashlight-fill text-warning me-1"></i>Standard
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                Quantum Leap Security
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                Infinite Updates
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Free Trial
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">7 Days</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Money-Back Guarantee
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">30 Days</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <button type="button" class="btn btn-lg btn-primary-light d-grid w-100 btn-wave">
                                                    <span class="ms-4 me-4">Get Started Now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                                        <div class="card custom-card pricing-card hover">
                                            <div class="card-body p-4">
                                                <div class="text-center p-3 mb-3 bg-primary rounded-3 position-relative">
                                                    <div class="badge bg-orange pricing-badge">Best</div>
                                                    <h4 class="fw-medium mb-1 text-fixed-white">Pro</h4>
                                                    <span class="mb-1 d-block text-fixed-white op-8">Next-level tools for advanced users</span>
                                                    <h2 class="mb-0 fw-bold d-block text-fixed-white">$19.99/<span class="fs-12 text-fixed-white op-6 fw-medium ms-1">Price Per Month</span></h2>
                                                </div>
                                                <ul class="list-unstyled pricing-body mb-3 px-3">
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Unicorn Support
                                                            </span>
                                                            <span class="badge bg-success rounded-pill">Live Chat</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Teleportation Technology
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Gravity-Defying Speed
                                                            </span>
                                                            <span class="badge bg-light text-default rounded-pill border">
                                                                <i class="ri-flashlight-fill text-warning me-1"></i>Turbo
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                Quantum Leap Security
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                Infinite Updates
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Free Trial
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">14 Days</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Money-Back Guarantee
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">60 Days</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <button type="button" class="btn btn-lg btn-primary d-grid w-100 btn-wave">
                                                    <span class="ms-4 me-4">Get Started Now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                                        <div class="card custom-card pricing-card">
                                            <div class="card-body p-4">
                                                <div class="text-center p-3 mb-3 bg-light">
                                                    <h4 class="fw-medium mb-1">Premium</h4>
                                                    <span class="mb-1 text-muted d-block">Pinnacle excellence, VIP support.</span>
                                                    <h2 class="mb-0 fw-bold d-block text-primary">$29.99/<span class="fs-12 text-default fw-medium ms-1">Price Per Month</span></h2>
                                                </div>
                                                <ul class="list-unstyled pricing-body mb-3 px-3">
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Unicorn Support
                                                            </span>
                                                            <span class="badge bg-orange rounded-pill">24/7 Support</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Teleportation Technology
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Gravity-Defying Speed
                                                            </span>
                                                            <span class="badge bg-light text-default rounded-pill border">
                                                                <i class="ri-flashlight-fill text-warning me-1"></i>Quantum
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                Quantum Leap Security
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                             <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                             </span>
                                                            <span class="ms-2 my-auto">
                                                                Infinite Updates
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Free Trial
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">30 Days</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                               <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Money-Back Guarantee
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">90 Days</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <button type="button" class="btn btn-lg btn-primary-light d-grid w-100 btn-wave">
                                                    <span class="ms-4 me-4">Get Started Now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content" id="yearly1">
                                <div class="row d-flex align-items-center justify-content-center mb-5">
                                    <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                                        <div class="card custom-card pricing-card">
                                            <div class="card-body p-4">
                                                <div class="text-center p-3 mb-3 bg-light">
                                                    <h4 class="fw-medium mb-1">Basic</h4>
                                                    <span class="mb-1 text-muted d-block">Essential features for a magical start</span>
                                                    <h2 class="mb-0 fw-bold d-block text-primary">$99.99/<span class="fs-12 text-default fw-medium ms-1">Price Per Year</span></h2>
                                                </div>
                                                <ul class="list-unstyled pricing-body mb-3 px-3">
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Unicorn Support
                                                            </span>
                                                            <span class="badge bg-secondary rounded-pill">Email</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Teleportation Technology
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Gravity-Defying Speed
                                                            </span>
                                                            <span class="badge bg-light text-default rounded-pill border">
                                                                <i class="ri-flashlight-fill text-warning me-1"></i>Standard
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Quantum Leap Security
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Infinite Updates
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Free Trial
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">7 Days</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Money-Back Guarantee
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">30 Days</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <button type="button" class="btn btn-lg btn-primary-light d-grid w-100 btn-wave">
                                                    <span class="ms-4 me-4">Get Started Now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                                        <div class="card custom-card pricing-card hover">
                                            <div class="card-body p-4">
                                                <div class="text-center p-3 mb-3 bg-primary rounded-3 position-relative">
                                                    <div class="badge bg-orange pricing-badge">Best</div>
                                                    <h4 class="fw-medium mb-1 text-fixed-white">Pro</h4>
                                                    <span class="mb-1 d-block text-fixed-white op-8">Next-level tools for advanced users</span>
                                                    <h2 class="mb-0 fw-bold d-block text-fixed-white">$199.99/<span class="fs-12 text-fixed-white op-6 fw-medium ms-1">Price Per Year</span></h2>
                                                </div>
                                                <ul class="list-unstyled pricing-body mb-3 px-3">
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Unicorn Support
                                                            </span>
                                                            <span class="badge bg-success rounded-pill">Live Chat</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Teleportation Technology
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Gravity-Defying Speed
                                                            </span>
                                                            <span class="badge bg-light text-default rounded-pill border">
                                                                <i class="ri-flashlight-fill text-warning me-1"></i>Turbo
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Quantum Leap Security
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Infinite Updates
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Free Trial
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">14 Days</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Money-Back Guarantee
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">60 Days</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <button type="button" class="btn btn-lg btn-primary d-grid w-100 btn-wave">
                                                    <span class="ms-4 me-4">Get Started Now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-xl-4 col-xxl-4 col-md-8 col-sm-12">
                                        <div class="card custom-card pricing-card">
                                            <div class="card-body p-4">
                                                <div class="text-center p-3 mb-3 bg-light">
                                                    <h4 class="fw-medium mb-1">Premium</h4>
                                                    <span class="mb-1 text-muted d-block">Pinnacle excellence, VIP support.</span>
                                                    <h2 class="mb-0 fw-bold d-block text-primary">$299.99/<span class="fs-12 text-default fw-medium ms-1">Price Per Year</span></h2>
                                                </div>
                                                <ul class="list-unstyled pricing-body mb-3 px-3">
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Unicorn Support
                                                            </span>
                                                            <span class="badge bg-orange rounded-pill">24/7 Support</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Teleportation Technology
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Gravity-Defying Speed
                                                            </span>
                                                            <span class="badge bg-light text-default rounded-pill border">
                                                                <i class="ri-flashlight-fill text-warning me-1"></i>Quantum
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Quantum Leap Security
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto">
                                                                Infinite Updates
                                                            </span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Free Trial
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">30 Days</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center">
                                                            <span class="avatar avatar-xs svg-success">
                                                                <i class="ti ti-checks text-success fs-18"></i>
                                                            </span>
                                                            <span class="ms-2 my-auto flex-fill">
                                                                Money-Back Guarantee
                                                            </span>
                                                            <span class="text-muted fs-12 fw-medium">90 Days</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <button type="button" class="btn btn-lg btn-primary-light d-grid w-100 btn-wave">
                                                    <span class="ms-4 me-4">Get Started Now</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-7 -->

            <!-- Start:: Section-8 -->
            <section class="section" id="faqs">
                <div class="container text-center">
                    <p class="fs-12 fw-medium text-success mb-1"><span
                            class="landing-section-heading text-pink">F.A.Q 's</span>
                    </p>
                    <h4 class="fw-semibold mt-3 mb-2">Frequently asked questions ?</h4>
                    <div class="row justify-content-center">
                        <div class="col-xl-7">
                            <p class="text-muted fs-14 mb-5 fw-normal">We have shared some of the most frequently asked
                                questions to help you out.</p>
                        </div>
                    </div>
                    <div class="row text-start">
                        <div class="col-xl-12">
                            <div class="row gy-2">
                                <div class="col-xl-6">
                                    <div class="accordion  accordion-solid-primary accordions-items-seperate" id="accordionFAQ1">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon2One">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsecustomicon2One" aria-expanded="true"
                                                    aria-controls="collapsecustomicon2One">
                                                     Where can I subscribe to your newsletter?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2One" class="accordion-collapse collapse show"
                                                aria-labelledby="headingcustomicon2One"
                                                data-bs-parent="#accordionFAQ1">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon2Two">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Two"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2Two">
                                                    Where can in edit my address?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2Two" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon2Two"
                                                data-bs-parent="#accordionFAQ1">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon2Three">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Three"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2Three">
                                                    What are your opening hours?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2Three" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon2Three"
                                                data-bs-parent="#accordionFAQ1">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon2Four">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Four"
                                                    aria-expanded="false" aria-controls="collapsecustomicon2Four">
                                                    Do I have the right to return an item?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon2Four" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon2Four"
                                                data-bs-parent="#accordionFAQ1">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div> 
                                <div class="col-xl-6">
                                    <div class="accordion  accordion-solid-primary accordions-items-seperate" id="accordionFAQ">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon1One">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapsecustomicon1One" aria-expanded="false"
                                                    aria-controls="collapsecustomicon1One">
                                                    When can we get started?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1One" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon1One"
                                                data-bs-parent="#accordionFAQ">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon1Two">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two"
                                                    aria-expanded="false" aria-controls="collapsecustomicon1Two">
                                                    What services are provided by you?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1Two" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon1Two"
                                                data-bs-parent="#accordionFAQ">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon1Three">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three"
                                                    aria-expanded="false" aria-controls="collapsecustomicon1Three">
                                                    What types of companies use your services?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1Three" class="accordion-collapse collapse"
                                                aria-labelledby="headingcustomicon1Three"
                                                data-bs-parent="#accordionFAQ">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingcustomicon1Four">
                                                <button class="accordion-button" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Four"
                                                    aria-expanded="true" aria-controls="collapsecustomicon1Four">
                                                    Do you provide 24/7 social media support?
                                                </button>
                                            </h2>
                                            <div id="collapsecustomicon1Four" class="accordion-collapse collapse show"
                                                aria-labelledby="headingcustomicon1Four"
                                                data-bs-parent="#accordionFAQ">
                                                <div class="accordion-body">
                                                    <strong>This is the first item's accordion body.</strong> It is shown by
                                                    default, until the collapse plugin adds the appropriate classes that we
                                                    use to style each element
                                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-8 -->

            <!-- Start:: Section-9 -->
            <section class="section section-bg py-4" id="testimonials">
                <div class="container">
                    <div class="row justify-content-center pb-3">
                        <div class="col-xl-10">
                            <div class="text-center mb-0 mt-4 heading-section">
                                <p class="fs-12 fw-medium text-success mb-1"><span
                                    class="landing-section-heading landing-section-heading-dark text-fixed-white">TESTIMONALS</span>
                               </p>
                                <h4 class="mt-3 text-fixed-white mb-1">Discover What People Are Saying About Us</h4>
                                <div class="fs-14 text-fixed-white mb-4 op-8"> Customer reviews, social media and testimonials to discover how is our products or services.</div>
                            </div>
                        </div>
                        <div class="col-xl-10">
                            <div class="swiper pagination-dynamic testimonialSwiperService">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body text-center">
                                                <div>
                                                    <div class="text-center mb-4 mt-2">
                                                        <i class="bi bi-quote fs-30 px-2 p-1 bg-pink-transparent text-pink rounded-circle lh-1"></i>
                                                    </div>
                                                    <span class="px-3">
                                                        Customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.
                                                        <a href="javascript:void(0);" class="fw-semibold fs-11 text-primary" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="Customer service at this company is outstanding. They were quick to respond to my inquiry and resolved my issue within hours.">Read More</a>
                                                    </span>
                                                </div>
                                                
                                                <span class="avatar avatar-xl rounded-circle my-3">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/faces/6.jpg" alt="" class="img-fluid rounded-circle border border-primary shadow-sm border-3">
                                                </span>
                                                <div>
                                                    <p class="mb-0 fw-semibold">Katherin Oslo</p>
                                                    <p class="mb-0 fs-11 fw-normal text-muted">katherin12@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body text-center">
                                                <div>
                                                    <div class="text-center mb-4 mt-2">
                                                        <i class="bi bi-quote fs-30 px-2 p-1 bg-pink-transparent text-pink rounded-circle lh-1"></i>
                                                    </div>
                                                    <span class="px-3">
                                                        The product quality exceeded my expectations! I received exactly what I was looking for and the customer support was exceptional
                                                        <a href="javascript:void(0);" class="fw-semibold fs-11 text-primary" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="The product quality exceeded my expectations! I received exactly what I was looking for and the customer support was exceptional">Read More</a>
                                                    </span>
                                                </div>
                                                
                                                <span class="avatar avatar-xl rounded-circle my-3">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/faces/11.jpg" alt="" class="img-fluid rounded-circle border border-primary shadow-sm border-3">
                                                </span>
                                                <div>
                                                    <p class="mb-0 fw-semibold">John Doe</p>
                                                    <p class="mb-0 fs-11 fw-normal text-muted">johndoe@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body text-center">
                                                <div>
                                                    <div class="text-center mb-4 mt-2">
                                                        <i class="bi bi-quote fs-30 px-2 p-1 bg-pink-transparent text-pink rounded-circle lh-1"></i>
                                                    </div>
                                                    <span class="px-3">
                                                        I had an amazing experience! The team was so helpful and guided me through the entire process. The product was delivered on time.
                                                        <a href="javascript:void(0);" class="fw-semibold fs-11 text-primary" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="I had an amazing experience! The team was so helpful and guided me through the entire process. The product was delivered on time.">Read More</a>
                                                    </span>
                                                </div>
                                                
                                                <span class="avatar avatar-xl rounded-circle my-3">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/faces/8.jpg" alt="" class="img-fluid rounded-circle border border-primary shadow-sm border-3">
                                                </span>
                                                <div>
                                                    <p class="mb-0 fw-semibold">Sarah Williams</p>
                                                    <p class="mb-0 fs-11 fw-normal text-muted">sarah.williams@example.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card custom-card overflow-hidden">
                                            <div class="card-body text-center">
                                                <div>
                                                    <div class="text-center mb-4 mt-2">
                                                        <i class="bi bi-quote fs-30 px-2 p-1 bg-pink-transparent text-pink rounded-circle lh-1"></i>
                                                    </div>
                                                    <span class="px-3">
                                                        This is by far the best service I've had. The staff was extremely professional, and they made sure I was completely satisfied with my purchase.
                                                        <a href="javascript:void(0);" class="fw-semibold fs-11 text-primary" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-placement="top" data-bs-title="This is by far the best service I've had. The staff was extremely professional, and they made sure I was completely satisfied with my purchase.">Read More</a>
                                                    </span>
                                                </div>
                                                
                                                <span class="avatar avatar-xl rounded-circle my-3">
                                                    <img src="<?php echo $baseUrl; ?>/assets/images/faces/13.jpg" alt="" class="img-fluid rounded-circle border border-primary shadow-sm border-3">
                                                </span>
                                                <div>
                                                    <p class="mb-0 fw-semibold">Michael Carter</p>
                                                    <p class="mb-0 fs-11 fw-normal text-muted">michael.carter@example.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-9 -->

            <!-- Start:: Section-10 -->
            <section class="section" id="contact">
                <div class="container text-center">
                    <p class="fs-12 fw-medium text-success mb-1"><span
                            class="landing-section-heading text-pink">CONTACT US</span>
                    </p>
                    <h4 class="fw-semibold mt-3 mb-2">Need Help? Find Your Answers Here!</h4>
                    <div class="row justify-content-center">
                        <div class="col-xl-9">
                            <p class="text-muted fs-14 mb-5 fw-normal"> Explore Our Comprehensive Support Resources! Get answers to your queries and find solutions.</p>
                        </div>
                    </div>
                    <div class="row justify-content-center text-start">
                        <div class="col-xl-9">
                            <div class="row">
                                <div class="col-xxl-3 col-xl-6 col-md-6">
                                    <div class="card border custom-card">
                                        <div class="card-body m-1 bg-primary-transparent">
                                            <div class="d-flex gap-2 align-items-center">
                                                <span class="avatar avatar-md bg-primary"><i class="fe fe-map-pin"></i></span>
                                                <div>
                                                    <h6 class="mb-1 fw-semibold">Main Branch</h6>
                                                    <p class="mb-0">San Francisco, CA </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-md-6">
                                    <div class="card border custom-card">
                                        <div class="card-body m-1 bg-secondary-transparent">
                                            <div class="d-flex gap-2 align-items-center">
                                                <span class="avatar avatar-md bg-secondary"><i class="fe fe-phone"></i></span>
                                                <div>
                                                    <h6 class="mb-1 fw-semibold">Phone</h6>
                                                    <p class="mb-0">+125 254 3562 </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-md-6">
                                    <div class="card border custom-card">
                                        <div class="card-body m-1 bg-success-transparent">
                                            <div class="d-flex gap-2 align-items-center">
                                                <span class="avatar avatar-md bg-success"><i class="fe fe-at-sign"></i></span>
                                                <div>
                                                    <h6 class="mb-1 fw-semibold">Email</h6>
                                                    <p class="mb-0">georgeme@abc.com </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-6 col-md-6">
                                    <div class="card border custom-card">
                                        <div class="card-body m-1 bg-pink-transparent">
                                            <div class="d-flex gap-2 align-items-center">
                                                <span class="avatar avatar-md bg-pink"><i class="fe fe-clock"></i></span>
                                                <div>
                                                    <h6 class="mb-1 fw-semibold">Working Hours</h6>
                                                    <p class="mb-0">Mon - Fri : 9am - 6pm</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card custom-card">
                                <div class="card-body">
                                    <div class="row gy-3 text-start">
                                        <div class="col-xl-12">
                                            <label class="form-label" for="contact-address-firstname">First Name :</label> <input class="form-control bg-light bg-opacity-50" id="contact-address-firstname" placeholder="Enter Name" type="text">
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="form-label" for="contact-address-email">Email Id :</label> <input class="form-control bg-light bg-opacity-50" id="contact-address-email" placeholder="Enter Email Id" type="email">
                                        </div>
                                        <div class="col-xl-12">
                                            <label class="form-label" for="contact-mail-message">Message :</label> 
                                            <textarea class="form-control bg-light bg-opacity-50" id="contact-mail-message" rows="2" placeholder="Write Here"></textarea>
                                        </div>
                                    </div>
                                    <div class=" mt-4">
                                        <button class="btn btn-primary btn-wave btn-w-lg waves-effect waves-light">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-10 -->

            <!-- Start:: Section-11 -->
            <section class="section landing-footer text-fixed-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12">
                            <div class="px-4">
                                <h6 class="fw-medium text-fixed-white">CONTACT</h6>
                                <ul class="list-unstyled fw-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white op-6"><i
                                                class="ri-home-4-line me-1 align-middle"></i> New York, NY 10012, US</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white op-6"><i
                                                class="ri-mail-line me-1 align-middle"></i> info@fmail.com</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white op-6"><i
                                                class="ri-phone-line me-1 align-middle"></i> +(555)-1920 1831</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white op-6"><i
                                                class="ri-printer-line me-1 align-middle"></i> +(123) 1293 123</a>
                                    </li>
                                    <li class="mt-3">
                                        <p class="mb-2 fw-medium op-8">FOLLOW US ON :</p>
                                        <div class="mb-0">
                                            <div class="btn-list">
                                                <button
                                                    class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-facebook-line fw-bold"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                    <i class="ri-twitter-x-line fw-bold"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-pink-light btn-wave waves-effect waves-light">
                                                    <i class="ri-instagram-line fw-bold"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-success-light btn-wave waves-effect waves-light">
                                                    <i class="ri-github-line fw-bold"></i>
                                                </button>
                                                <button
                                                    class="btn btn-sm btn-icon btn-info-light btn-wave waves-effect waves-light">
                                                    <i class="ri-youtube-line fw-bold"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-12">
                            <div class="px-4">
                                <h6 class="fw-medium mb-3 text-fixed-white">PAGES</h6>
                                <ul class="list-unstyled op-6 fw-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Email</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Profile</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Projects</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Contacts</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Portfolio</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-12">
                            <div class="px-4">
                                <h6 class="fw-medium text-fixed-white">INFO</h6>
                                <ul class="list-unstyled op-6 fw-normal landing-footer-list">
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Our Team</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Contact US</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">About</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Services</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Blog</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="text-fixed-white">Terms & Conditions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6 col-12 mb-md-0 mb-3">
                            <div class="px-4">
                                <p class="fw-medium mb-3"><a href="index.php"><img
                                            src="<?php echo $baseUrl; ?>/assets/images/brand-logos/desktop-dark.png" alt="" class="landing-footer-logo"></a></p>
                                <p class="mb-2 op-6 fw-normal">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit et magnam,
                                    fuga est mollitia eius, quo illum illo inventore optio aut quas omnis rem. Dolores
                                    accusantium aspernatur minus ea incidunt.
                                </p>
                                <p class="mb-0 op-6 fw-normal">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Autem ea esse ad</p>
                                <div class="input-group mt-3 me-3">
                                    <input type="text" class="form-control" placeholder="Email Here" aria-label="email" aria-describedby="subscribe">
                                    <button class="btn btn-primary btn-wave" type="button" id="subscribe">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End:: Section-11 -->

            <div class="text-center landing-main-footer py-3">
                <span class="text-muted">
                    Copyright &copy; <span id="year"></span> 
                    <a href="javascript:void(0);" class="text-primary fw-medium">
                        <u>Meno</u>
                    </a>.
                    Designed with <i class="fa fa-heart text-danger"></i> by 
                    <a href="https://spruko.com/" target="_blank" class="text-primary fw-medium">
                        <u>Spruko</u>
                    </a>. All rights reserved.
                </span>
            </div>

<?php $content = ob_get_clean(); ?>
<!-- This code is useful for content -->

<!-- This code is useful for internal scripts  -->
<?php ob_start(); ?>
	


<?php $scripts = ob_get_clean(); ?>
<!-- This code is useful for internal scripts  -->

<!-- This code use for render base file -->
<?php include 'layouts/landing-base.php'; ?>
<!-- This code use for render base file -->
