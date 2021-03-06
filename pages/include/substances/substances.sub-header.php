<!-- begin:: Subheader -->
<div class="kt-subheader kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid">
        <div class="kt-subheader__main">
            <!-- Start Create New button -->
            <div class="dropdown">
                <button type="button" 
                        class="btn dropdown-toggle btn-lg btn-primary" 
                        data-toggle="dropdown"
                        aria-haspopup="true">
                    Create New
                </button>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md">
                    <ul class="kt-nav kt-nav--bold kt-nav--md-space">
                        <li class="kt-nav__item">
                            <a class="kt-nav__link active" href="/sevron/pages/maintenance.php">
                                <span class="kt-nav__link-icon"><i class="flaticon2-user"></i></span>
                                <span class="kt-nav__link-text">Human Resources</span>
                            </a>
                        </li>
                        <li class="kt-nav__item">
                            <a class="kt-nav__link" href="/sevron/pages/maintenance.php">
                                <span class="kt-nav__link-icon"><i class="flaticon-feed"></i></span>
                                <span class="kt-nav__link-text">Relationship</span>
                            </a>                                                 
                        </li>
                        <li class="kt-nav__item">
                            <a class="kt-nav__link" href="/sevron/pages/maintenance.php">
                                <span class="kt-nav__link-icon"><i class="flaticon2-settings"></i></span>
                                <span class="kt-nav__link-text">Order Processing</span>
                            </a>                                                 
                        </li>
                        <li class="kt-nav__item">
                            <a class="kt-nav__link" href="/sevron/pages/maintenance.php">
                                <span class="kt-nav__link-icon"><i class="flaticon2-chart2"></i></span>
                                <span class="kt-nav__link-text">Accounting</span>
                            </a>
                        </li>
                        <li class="kt-nav__separator"></li>
                        <li class="kt-nav__item">
                            <a class="kt-nav__link" href="/sevron/pages/maintenance.php">
                                <span class="kt-nav__link-icon"><i class="flaticon-security"></i></span>
                                <span class="kt-nav__link-text">Finance</span>
                            </a>                                                 
                        </li>
                        <li class="kt-nav__item">
                            <a class="kt-nav__link" href="/sevron/pages/maintenance.php">
                                <span class="kt-nav__link-icon"><i class="flaticon2-cup"></i></span>
                                <span class="kt-nav__link-text">Administration</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <button type="button" class="btn btn-default">
                Downloads
            </button>

            <button type="button" class="btn btn-default">
                Substance Inventory
            </button>

            <div class="dropdown">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    SDS
                </button>
            </div>

            <a href="/sevron/pages/about.php" class="btn btn-default dopti">
                About
            </a>
            
            <!-- End Create New Button -->
        </div>
        <?php include('./global/link.user-guide.php') ?>
    </div>
</div>
<!-- end:: Subheader -->