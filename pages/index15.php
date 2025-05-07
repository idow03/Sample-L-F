
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
                            <h1 class="page-title fw-medium fs-18 mb-2">School</h1>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="javascript:void(0);">
                                        Dashboards
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">School</li>
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
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-top gap-3 flex-wrap">
                                        <div class="main-card-icon primary">
                                            <div class="avatar avatar-lg avatar-rounded bg-primary-transparent border border-primary border-opacity-10">
                                                <div class="avatar avatar-md avatar-rounded bg-primary">
                                                    <i class="ri-user-3-line fs-18"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-fill">
                                            <span class="d-block mb-1 fw-medium">Students</span>
                                            <div class="d-flex gap-2 justify-content-between align-items-end">
                                                <h4 class="mb-0 fw-semibold mb-1">12,765</h4>
                                                <div class="fs-11 text-muted mb-0"><span class="fw-semibold badge bg-success me-2">0.25%<i class="ri-arrow-up-s-line align-middle ms-1"></i></span> Last Month</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-top gap-3 flex-wrap">
                                        <div class="main-card-icon secondary">
                                            <div class="avatar avatar-lg avatar-rounded bg-secondary-transparent border border-secondary border-opacity-10">
                                                <div class="avatar avatar-md avatar-rounded bg-secondary">
                                                    <i class="ri-award-line fs-18"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-fill">
                                            <span class="d-block mb-1 fw-medium">Awards</span>
                                            <div class="d-flex gap-2 justify-content-between align-items-end">
                                                <h4 class="mb-0 fw-semibold">45+</h4>
                                                <div class="fs-11 text-muted mb-0"><span class="fw-semibold badge bg-success me-2">0.25%<i class="ri-arrow-up-s-line align-middle ms-1"></i></span> Last Month</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-top gap-3 flex-wrap">
                                        <div class="main-card-icon success">
                                            <div class="avatar avatar-lg avatar-rounded bg-success-transparent border border-success border-opacity-10">
                                                <div class="avatar avatar-md avatar-rounded bg-success">
                                                    <i class="ri-hand-coin-line fs-18"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-fill">
                                            <span class="d-block mb-1 fw-medium">Revenue</span>
                                            <div class="d-flex gap-2 justify-content-between align-items-end">
                                                <h4 class="mb-0 fw-semibold">$39.5k</h4>
                                                <div class="fs-11 text-muted mb-0"><span class="fw-semibold badge bg-danger me-2">0.25%<i class="ri-arrow-down-s-line align-middle ms-1"></i></span> Last Month</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-top gap-3 flex-wrap">
                                        <div class="main-card-icon pink">
                                            <div class="avatar avatar-lg avatar-rounded bg-pink-transparent border border-pink border-opacity-10">
                                                <div class="avatar avatar-md avatar-rounded bg-pink">
                                                    <i class="ri-group-line fs-18"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-fill">
                                            <span class="d-block mb-1 fw-medium">Total Teachers</span>
                                            <div class="d-flex gap-2 justify-content-between align-items-end">
                                                <h4 class="mb-0 fw-semibold">2892</h4>
                                                <div class="fs-11 text-muted mb-0"><span class="fw-semibold badge bg-danger me-2">0.25%<i class="ri-arrow-up-s-line align-middle ms-1"></i></span> Last Month</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Revenue Report</div>
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
                                    <div id="school-earnings"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Upcoming Assignments
                                    </div>
                                    <a href="javascript:void(0);" class="fs-12 text-muted"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled upcoming-assignments-list">
                                        <li>
                                            <div class="d-flex align-items-start justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="fw-medium d-block mb-1">
                                                        Assignment-4
                                                    </a>
                                                    <span class="text-muted fs-12 d-flex align-items-center gap-3">1,Jul 2024 - 24,Jul 2024<span class="badge bg-danger">3 Days Left</span></span>
                                                </div>
                                                <div>
                                                    <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-arrow-right-s-line rtl-rotate"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="fw-medium d-block mb-1">
                                                        Class Test-3
                                                    </a>
                                                    <span class="text-muted fs-12 d-flex align-items-center gap-3">14,Aug 2024 - 20,Aug 2024<span class="badge bg-danger">10 Days Left</span></span>
                                                </div>
                                                <div>
                                                    <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-arrow-right-s-line rtl-rotate"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="fw-medium d-block mb-1">
                                                        Unit Test-1
                                                    </a>
                                                    <span class="text-muted fs-12 d-flex align-items-center gap-3">20,Sep 2024 - 30,Sep 2024<span class="badge bg-success">2 Months Left</span></span>
                                                </div>
                                                <div>
                                                    <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-arrow-right-s-line rtl-rotate"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="fw-medium d-block mb-1">
                                                        Assignment-5
                                                    </a>
                                                    <span class="text-muted fs-12 d-flex align-items-center gap-3">1,Nov 2024 - 10,Nov 2024<span class="badge bg-success">3 Months Left</span></span>
                                                </div>
                                                <div>
                                                    <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-arrow-right-s-line rtl-rotate"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start justify-content-between">
                                                <div>
                                                    <a href="javascript:void(0);" class="fw-medium d-block mb-1">
                                                        Class Test-4
                                                    </a>
                                                    <span class="text-muted fs-12 d-flex align-items-center gap-3">2,Jan 2025 - 12,Jan 2024<span class="badge bg-success">4 Months Left</span></span>
                                                </div>
                                                <div>
                                                    <button class="btn btn-primary-light btn-icon btn-sm"><i class="ri-arrow-right-s-line rtl-rotate"></i></button>
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
                        <div class="col-xxl-3">
                            <div class="card custom-card">
                                <div class="card-header">
                                    <div class="card-title">
                                        Fee Details
                                    </div>
                                </div>
                                <div class="card-body p-0 pt-1">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="">ID</th>
                                                    <th>Student</th>
                                                    <th class="text-end">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">#1116</td>
                                                    <td class="">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <span class="avatar avatar-sm">
                                                                    <img src="<?php echo $baseUrl; ?>/assets/images/faces/2.jpg" alt="img">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-semibold lh-1 mb-1">Studar Little</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-success fs-13 fw-semibold">Paid</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">#8547</td>
                                                    <td class="">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <span class="avatar avatar-sm">
                                                                    <img src="<?php echo $baseUrl; ?>/assets/images/faces/4.jpg" alt="img">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-semibold lh-1 mb-1">Ion Somer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-success fs-13 fw-semibold">Paid</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">#7564</td>
                                                    <td class="">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <span class="avatar avatar-sm">
                                                                    <img src="<?php echo $baseUrl; ?>/assets/images/faces/6.jpg" alt="img">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-semibold lh-1 mb-1">Shakira</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-danger fs-13 fw-semibold">Not Paid</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">#1254</td>
                                                    <td class="">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <span class="avatar avatar-sm">
                                                                    <img src="<?php echo $baseUrl; ?>/assets/images/faces/8.jpg" alt="img">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-semibold lh-1 mb-1">Thomas Shelby</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-success fs-13 fw-semibold">Paid</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">#7458</td>
                                                    <td class="">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <div>
                                                                <span class="avatar avatar-sm">
                                                                    <img src="<?php echo $baseUrl; ?>/assets/images/faces/10.jpg" alt="img">
                                                                </span>
                                                            </div>
                                                            <div>
                                                                <span class="d-block fw-semibold lh-1 mb-1">Stefan U</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <span class="text-success fs-13 fw-semibold">Paid</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">Today's Attendence</div>
                                    <a href="javascript:void(0);" class="fs-12 text-muted"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                </div>
                                <div class="card-body p-0">
                                    <div id="overall-attendance" class="pb-1"></div>
                                    <ul class="list-group list-group-flush border-top p-2 px-3">
                                        <li class="list-group-item border-bottom-0 boys">
                                            <div class="d-flex align-items-center gap-3 justify-content-between">
                                                <i class="ri-circle-fill text-primary"></i>
                                                <span class="fw-medium">Boys</span>
                                                <span class="fs-16 fw-semibold ms-auto">72%</span>
                                            </div>
                                        </li>
                                        <li class="list-group-item border-bottom-0 girls">
                                            <div class="d-flex align-items-center gap-3 justify-content-between">
                                                <i class="ri-circle-fill text-secondary"></i>
                                                <span class="fw-medium">Girls</span>
                                                <span class="fs-16 fw-semibold ms-auto">84%</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Notice Board
                                    </div>
                                    <a href="javascript:void(0);" class="fs-12 text-muted"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                </div>
                                <div class="card-body">
                                    <ul class="list-unstyled notice-board-list">
                                        <li>
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-md bg-primary svg-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="144" r="40" opacity="0.2"/><circle cx="64" cy="88" r="32" opacity="0.2"/><circle cx="192" cy="88" r="32" opacity="0.2"/><path d="M192,120a59.91,59.91,0,0,1,48,24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M16,144a59.91,59.91,0,0,1,48-24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="128" cy="144" r="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M72,216a65,65,0,0,1,112,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M161,80a32,32,0,1,1,31,40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M64,120A32,32,0,1,1,95,80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="text-primary fw-medium fs-12">04:24PM</span>
                                                    <span class="fw-medium d-block my-1 lh-1">Office Meeting</span>
                                                    <div class="fs-12 d-flex text-muted align-items-center justify-content-between">
                                                        <span>By Jhon Doe</span>
                                                        <span><i class="ri-time-line me-1"></i>45 Mins ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-md bg-secondary svg-secondary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="128" r="96" opacity="0.2"/><circle cx="128" cy="128" r="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="92" cy="108" r="12"/><circle cx="164" cy="108" r="12"/><path d="M168,152c-8.3,14.35-22.23,24-40,24s-31.7-9.65-40-24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="text-secondary fw-medium fs-12">24 Feb 2024</span>
                                                    <span class="fw-medium d-block my-1 lh-1">Holiday</span>
                                                    <div class="fs-12 d-flex text-muted align-items-center justify-content-between">
                                                        <span>By Jhon Doe</span>
                                                        <span><i class="ri-time-line me-1"></i>2 Hrs ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-md bg-success svg-success">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M152,208V160a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v48a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V115.54a8,8,0,0,1,2.62-5.92l80-75.54a8,8,0,0,1,10.77,0l80,75.54a8,8,0,0,1,2.62,5.92V208a8,8,0,0,1-8,8H160A8,8,0,0,1,152,208Z" opacity="0.2"/><path d="M152,208V160a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v48a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V115.54a8,8,0,0,1,2.62-5.92l80-75.54a8,8,0,0,1,10.77,0l80,75.54a8,8,0,0,1,2.62,5.92V208a8,8,0,0,1-8,8H160A8,8,0,0,1,152,208Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="text-success fw-medium fs-12">15 Apr 2024 - 05 Jun 2024</span>
                                                    <span class="fw-medium d-block my-1 lh-1">Summer Holiday</span>
                                                    <div class="fs-12 d-flex text-muted align-items-center justify-content-between">
                                                        <span>By Jhon Doe</span>
                                                        <span><i class="ri-time-line me-1"></i>8 Days ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-start gap-3">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-md bg-orange svg-orange">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M101.11,197.11,58.89,154.89l-18.4,50.63a7.79,7.79,0,0,0,10,10Z" opacity="0.2"/><path d="M78.09,102.09l75.82,75.82,41-14.9a7.79,7.79,0,0,0,2.85-12.84L105.83,58.29A7.79,7.79,0,0,0,93,61.14Z" opacity="0.2"/><path d="M40.49,205.52,93,61.14a7.79,7.79,0,0,1,12.84-2.85l91.88,91.88A7.79,7.79,0,0,1,194.86,163L50.48,215.51A7.79,7.79,0,0,1,40.49,205.52Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M168,72s0-24,24-24,24-24,24-24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="144" y1="16" x2="144" y2="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="216" y1="112" x2="232" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="216" y1="80" x2="240" y2="72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="78.09" y1="102.09" x2="153.91" y2="177.91" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="101.11" y1="197.11" x2="58.89" y2="154.89" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <span class="text-orange fw-medium fs-12">19 Dec 2024</span>
                                                    <span class="fw-medium d-block my-1 lh-1">School Anniversary</span>
                                                    <div class="fs-12 d-flex text-muted align-items-center justify-content-between">
                                                        <span>By Jhon Doe</span>
                                                        <span><i class="ri-time-line me-1"></i>12 Days ago</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Attendence Overview
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
                                    <div id="attendance-overview"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Teachers List
                                    </div>
                                    <a href="javascript:void(0);" class="fs-12 text-muted"> View All<i class="ti ti-arrow-narrow-right ms-1"></i> </a>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-start gap-3 justify-content-between">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo $baseUrl; ?>/assets/images/faces/11.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fw-medium">
                                                        John Smith
                                                    </a>
                                                    <span class="fs-12 text-muted d-block">M.Ed</span>
                                                </div>
                                                <div class="text-primary fw-medium">
                                                    Mathematics
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-start gap-3 justify-content-between">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo $baseUrl; ?>/assets/images/faces/3.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fw-medium">
                                                        Mary Johnson
                                                    </a>
                                                    <span class="fs-12 text-muted d-block">B.A. in English</span>
                                                </div>
                                                <div class="text-secondary fw-medium">
                                                    English
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-start gap-3 justify-content-between">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo $baseUrl; ?>/assets/images/faces/14.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fw-medium">
                                                        Robert Davis
                                                    </a>
                                                    <span class="fs-12 text-muted d-block">Ph.D. in Science</span>
                                                </div>
                                                <div class="text-warning fw-medium">
                                                    Physics
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-start gap-3 justify-content-between">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo $baseUrl; ?>/assets/images/faces/7.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fw-medium">
                                                        Sarah Thompson
                                                    </a>
                                                    <span class="fs-12 text-muted d-block">M.A. in History</span>
                                                </div>
                                                <div class="text-info fw-medium">
                                                    History
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-start gap-3 justify-content-between">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo $baseUrl; ?>/assets/images/faces/9.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fw-medium">
                                                        Michael Brown
                                                    </a>
                                                    <span class="fs-12 text-muted d-block">B.Ed</span>
                                                </div>
                                                <div class="text-success fw-medium">
                                                    Chemistry
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-start gap-3 justify-content-between">
                                                <div class="lh-1">
                                                    <span class="avatar avatar-sm">
                                                        <img src="<?php echo $baseUrl; ?>/assets/images/faces/2.jpg" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-fill">
                                                    <a href="javascript:void(0);" class="fw-medium">
                                                        Emily Wilson
                                                    </a>
                                                    <span class="fs-12 text-muted d-block">M.A. in Geography</span>
                                                </div>
                                                <div class="text-orange fw-medium">
                                                    Geography
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-9">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title">
                                        Students Marks
                                    </div>
                                    <div class="d-flex align-items-center gap-2 flex-wrap">
                                        <div>
                                            <select class="form-control form-control-sm select2 m-0" data-trigger>
                                                <option value="all_class" selected>All Classes</option>
                                                <option value="class_x">Class-X</option>
                                                <option value="class_ix">Class-IX</option>
                                            </select>
                                        </div>
                                        <div>
                                            <select class="form-control form-control-sm select2 m-0" data-trigger>
                                                <option value="all_sections" selected>All Sections</option>
                                                <option value="section_a">Section-A</option>
                                                <option value="section_b">Section-B</option>
                                                <option value="section_c">Section-C</option>
                                            </select>
                                        </div>
                                        <div>
                                            <select class="form-control form-control-sm select2 m-0" data-trigger>
                                                <option value="maths" selected>Maths</option>
                                                <option value="physics">Physics</option>
                                                <option value="chemistry">Chemistry</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0 pt-2 mt-1">
                                    <div class="table-responsive">
                                        <table class="table text-nowrap">
                                            <thead>
                                                <tr>
                                                    <td class="text-center">S.No</td>
                                                    <td>Student</td>
                                                    <td class="text-center">ID</td>
                                                    <td class="text-center">Class</td>
                                                    <td class="text-center">Section</td>
                                                    <td class="text-center">Marks In %</td>
                                                    <td class="text-center">Marks In GPA</td>
                                                    <td class="text-center">Status</td>
                                                    <td class="text-center">Actions</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td class="text-center">
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="<?php echo $baseUrl; ?>/assets/images/faces/2.jpg" alt="img">
                                                            </a>
                                                            <a href="javascript:void(0);">Studar Little</a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">#1116</td>
                                                    <td class="text-center">IX</td>
                                                    <td class="text-center">B</td>
                                                    <td class="text-center">75%</td>
                                                    <td class="text-center">7.5</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-success rounded-pill">Pass</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light btn-wave" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Action</a></li>
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Another Action</a></li>
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Something Else Here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">2</td>
                                                    <td class="text-center">
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="<?php echo $baseUrl; ?>/assets/images/faces/4.jpg" alt="img">
                                                            </a>
                                                            <a href="javascript:void(0);">Ion Somer</a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">#8547</td>
                                                    <td class="text-center">X</td>
                                                    <td class="text-center">A</td>
                                                    <td class="text-center">65%</td>
                                                    <td class="text-center">6.5</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-success rounded-pill">Pass</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light btn-wave" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Action</a></li>
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Another Action</a></li>
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Something Else Here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">3</td>
                                                    <td class="text-center">
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="<?php echo $baseUrl; ?>/assets/images/faces/6.jpg" alt="img">
                                                            </a>
                                                            <a href="javascript:void(0);">Shakira</a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">#7564</td>
                                                    <td class="text-center">X</td>
                                                    <td class="text-center">B</td>
                                                    <td class="text-center">25%</td>
                                                    <td class="text-center">2.5</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-danger rounded-pill">Fail</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light btn-wave" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Action</a></li>
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Another Action</a></li>
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Something Else Here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">4</td>
                                                    <td class="text-center">
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="<?php echo $baseUrl; ?>/assets/images/faces/8.jpg" alt="img">
                                                            </a>
                                                            <a href="javascript:void(0);">Thomas Shelby</a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">#1254</td>
                                                    <td class="text-center">IX</td>
                                                    <td class="text-center">A</td>
                                                    <td class="text-center">95%</td>
                                                    <td class="text-center">9.5</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-success rounded-pill">Pass</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light btn-wave" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Action</a></li>
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Another Action</a></li>
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Something Else Here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">5</td>
                                                    <td class="text-center">
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="<?php echo $baseUrl; ?>/assets/images/faces/10.jpg" alt="img">
                                                            </a>
                                                            <a href="javascript:void(0);">Stefan U</a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">#7458</td>
                                                    <td class="text-center">IX</td>
                                                    <td class="text-center">B</td>
                                                    <td class="text-center">62%</td>
                                                    <td class="text-center">6.2</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-success rounded-pill">Pass</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light btn-wave" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Action</a></li>
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Another Action</a></li>
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Something Else Here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">6</td>
                                                    <td class="text-center">
                                                        <div class="d-flex align-items-center">
                                                            <a href="javascript:void(0);" class="avatar avatar-xs avatar-rounded me-2">
                                                                <img src="<?php echo $baseUrl; ?>/assets/images/faces/12.jpg" alt="img">
                                                            </a>
                                                            <a href="javascript:void(0);">Michael Shreff</a>
                                                        </div>
                                                    </td>
                                                    <td class="text-center">#6325</td>
                                                    <td class="text-center">X</td>
                                                    <td class="text-center">A</td>
                                                    <td class="text-center">15%</td>
                                                    <td class="text-center">1.5</td>
                                                    <td class="text-center">
                                                        <span class="badge bg-danger rounded-pill">Fail</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light btn-wave" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Action</a></li>
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Another Action</a></li>
                                                                <li><a href="javascript:void(0);" class="dropdown-item">Something Else Here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

<?php $content = ob_get_clean(); ?>
<!-- This code is useful for content -->

<!-- This code is useful for internal scripts  -->
<?php ob_start(); ?>
        
        <!-- Apex Charts JS -->
        <script src="<?php echo $baseUrl; ?>/assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- School dashboard -->
        <script src="<?php echo $baseUrl; ?>/assets/js/school-dashboard.js"></script>

<?php $scripts = ob_get_clean(); ?>
<!-- This code is useful for internal scripts  -->

<!-- This code use for render base file -->
<?php include 'layouts/base.php'; ?>
<!-- This code use for render base file -->
