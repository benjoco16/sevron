<!DOCTYPE html>

<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
        <?php include('./global/head.php') ?>
    </head>
     <!-- begin::Body -->
<<<<<<< HEAD
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
                    <?php include('template/assessment-process/a_sub-header.php'); ?>
                    <div class="kt-container--fluid  kt-grid__item kt-grid__item--fluid overflow-hidden">
                        <div class="pl-4 pb-4 pr-4">
                            <?php include('template/assessment-process/a_table-filters.php'); ?>
                            <?php include('template/assessment-process/a_table.php'); ?>
                        </div>
=======
    <body class="kt-page-content-white kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed"  >
        <?php include('./global/header.php') ?>
        <div class="kt-container pl-0 kt-container--fluid  kt-grid kt-grid--ver">
            <!--begin::Aside -->
            <?php include('./global/sidebar.php') ?>   

            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                <?php include('template/assessment-process/a_sub-header.php'); ?>
                <div class="kt-container--fluid  kt-grid__item kt-grid__item--fluid overflow-hidden">
                    <div class="pl-4 pb-4">
                        <?php include('template/assessment-process/a_table-filters.php'); ?>
                        <?php include('template/assessment-process/a_table.php'); ?>
>>>>>>> 749107855f157b531b246d1a5295a0397af4e6a1
                    </div>
                </div>
            </div>
        </div>
        <?php include('template/assessment-process/modal/a_modal-container.php'); ?>
        <?php include('template/assessment-process/a_vendors.php'); ?>
    </body>
    <!-- end::Body -->
</html>