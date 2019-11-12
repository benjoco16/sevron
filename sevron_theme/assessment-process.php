<!DOCTYPE html>
<html lang="en">
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
        <?php include('./global/head.php') ?>
        <link href="./assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
        <?php include('./global/head-global-styles.php') ?>
    </head>
     <!-- begin::Body -->
    <body  class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed"  >
        <!--begin::Header -->
        <?php include('./global/header.php') ?>
        <!--end::Header -->
        <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
			<div class="kt-container pl-0 kt-container--fluid  kt-grid kt-grid--ver">
                <!--begin::Aside -->
                <?php include('./global/sidebar.php') ?>
                <!--end::Aside -->
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <?php include('template/assessment-process/ap.sub-header.php'); ?>
                    <div class="kt-container--fluid  kt-grid__item kt-grid__item--fluid overflow-hidden">
                        <div class="pl-4 pb-4 pr-4">
                            <?php include('template/assessment-process/ap.table-filters.php'); ?>
                            <?php include('template/assessment-process/ap.table.php'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('template/assessment-process/modal/ap.modal.php'); ?>
        <?php include('./global/vendors.php') ?>
        <script src="./assets/js/custom/assessment-process.js" type="text/javascript"></script>
    </body>
    <!-- end::Body -->
</html>