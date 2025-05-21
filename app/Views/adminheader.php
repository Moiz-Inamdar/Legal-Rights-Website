<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="KnowYourRights" content="KnowYourRights">
    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url() ?>admin_assets/logo/logo.png" type="image/x-icon"
        style="border-radius:30px" />
    <!-- Title -->
    <title>
        KnowYourRights
    </title>
    <!-- Bootstrap css-->
    <link href="<?php echo base_url() ?>admin_assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Icons css-->
    <link href="<?php echo base_url() ?>admin_assets/css/icons.css" rel="stylesheet" />

    <!-- Style css-->
    <link href="<?php echo base_url() ?>admin_assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>admin_assets/css/dark-boxed.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>admin_assets/css/boxed.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>admin_assets/css/skins.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>admin_assets/css/dark-style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>admin_assets/css/hide.css">
    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="<?php echo base_url() ?>admin_assets/css/colors/color.css">
    <!-- Select2 css -->
    <link href="<?php echo base_url() ?>admin_assets/plugins/select2/css/select2.min.css" rel="stylesheet">
    <!-- Internal DataTables css-->
    <link href="<?php echo base_url() ?>admin_assets/plugins/datatable/dataTables.bootstrap4.min.css"
        rel="stylesheet" />
    <link href="<?php echo base_url() ?>admin_assets/plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>admin_assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css"
        rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Sidemenu css-->
    <link href="<?php echo base_url() ?>admin_assets/css/sidemenu/sidemenu.css" rel="stylesheet">
    <!-- Bootstrap Validations -->
    <script src="<?php echo base_url() ?>admin_assets/validations/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>admin_assets/validations/bootstrap.min.js"></script>
    <!-- Internal Sweet-Alert css-->
    <link href="<?php echo base_url() ?>admin_assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet">

    <script src="<?php echo base_url() ?>admin_assets/plugins/sweet-alert/sweetalert.min.js"></script>
    <script src="<?php echo base_url() ?>admin_assets/plugins/sweet-alert/jquery.sweet-alert.js"></script>

    <link href="<?php echo base_url() ?>admin_assets/custom.css" rel="stylesheet" />
    <script src="<?php echo base_url() ?>admin_assets/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/PrintArea/2.4.1/jquery.PrintArea.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>admin_assets/css/gallery.css">

    <style type="text/css">
        .help-block {
            color: red;
        }

        .has-success .help-block {
            color: green;
        }

        .zoom {
            transition: transform .2s;
            /* Animation */
            max-width: 100px;
            margin: 0 auto;
        }

        .zoom:hover {
            transform: scale(1.5);
            /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
    </style>
</head>

<body class="main-body leftmenu light-theme light-leftmenu">


    <!-- Page -->
    <div class="page">

        <div id="loader">
            <img src="<?php echo base_url() ?>admin_assets/images/loading.gif"
                style="width:30px; vertical-align: middle" />
        </div>
        <Style>
            #loader {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                z-index: 10000;
                background: rgba(0, 0, 0, 0.75) no-repeat center center;
                justify-content: center;
                align-items: center;
            }

            .autocomplete {
                position: relative;
                /* width: 300px; */
                margin: 0 auto;
                /* text-align: center; */
            }

            .autocomplete-dropdown {
                display: none;
                position: absolute;
                width: 100%;
                border: 1px solid #ccc;
                border-top: none;
                border-radius: 0 0 5px 5px;
                background-color: #fff;
                z-index: 100;
                max-height: 300px;
                overflow-y: auto;
            }

            .autocomplete-dropdown div {
                padding: 10px;
                cursor: pointer;
                transition: background-color 0.2s;
                white-space: pre-wrap;
                content: "\25BC";
            }

            .autocomplete-dropdown div:hover {
                background-color: #f0f0f0;
            }
        </style>
        <script>
            function showLoader() {
                $('#loader').show().css('display', 'flex');
            }

            function hideLoader() {
                $('#loader').show().css('display', 'none');
            }

            function autoResize(element) {
                element.style.height = 'auto';
                element.style.height = (element.scrollHeight) + 'px';
            }
        </script>
        <!-- End loading Gif -->

        <!-- Sidemenu -->
        <div class="main-sidebar main-sidebar-sticky side-menu">
            <div class="sidemenu-logo">
                <a class="main-logo" href="<?php echo base_url('admin/rights') ?>">
                    <img src="<?php echo base_url() ?>admin_assets/logo/logo.png" class="header-brand-img desktop-logo"
                        alt="logo" style="max-width: 80px;">
                    <img src="<?php echo base_url() ?>admin_assets/logo/logo.png" class="header-brand-img icon-logo"
                        alt="logo">
                    <img src="<?php echo base_url() ?>admin_assets/logo/logo.png"
                        class="header-brand-img desktop-logo theme-logo" alt="logo" style="max-width: 80px;">
                    <img src="<?php echo base_url() ?>admin_assets/logo/logo.png"
                        class="header-brand-img icon-logo theme-logo" alt="logo">
                </a>
            </div>
            <div class="main-sidebar-body">
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link with-sub" href="<?php echo base_url('admin/rights') ?>"><i
                                class="fe fe-check-square sidemenu-icon"></i><span
                                class="sidemenu-label">Rights</span></a>
                    </li>

                    <!-- <li class="nav-item ">
                        <a class="nav-link with-sub" href="<?php echo base_url('laws') ?>">
                            <i class="fa fa-database sidemenu-icon"></i>
                            <span class="sidemenu-label">Laws</span></a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link with-sub" href="<?php echo base_url('categories') ?>"><i
                                class="fa fa-cube sidemenu-icon">
                            </i><span class="sidemenu-label">Categories</span></a>
                    </li> -->
                    <li class="nav-item ">
                        <a class="nav-link with-sub" href="<?php echo base_url('admin/articles') ?>"><i
                                class="fa fa-users sidemenu-icon">
                            </i><span class="sidemenu-label">Articles</span></a>
                    </li>
            </div>
        </div>
        <!-- End Sidemenu -->

        <!-- Main Header-->
        <div class="main-header side-header sticky">
            <div class="container-fluid">
                <!-- <div class="main-header-left">
                    <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
                </div> -->
                <a class="main-logo" href="<?php echo base_url('dashboard') ?>">
                    <div class="main-header-center ml-4">
                        <div class="responsive-logo">
                            <a class="main-logo" href="<?php echo base_url('dashboard') ?>">
                                <img src="<?php echo base_url() ?>admin_assets/logo/logo.png"
                                    class="header-brand-img desktop-logo" alt="logo" style="max-width: 80px;">
                                <img src="<?php echo base_url() ?>admin_assets/logo/logo.png"
                                    class="header-brand-img icon-logo" alt="logo" style="max-width: 80px;">
                                <img src="<?php echo base_url() ?>admin_assets/logo/logo.png"
                                    class="header-brand-img desktop-logo theme-logo" alt="logo"
                                    style="max-width: 80px;">
                                <img src="<?php echo base_url() ?>admin_assets/logo/logo.png"
                                    class="header-brand-img icon-logo theme-logo" alt="logo" style="max-width: 80px;">
                            </a>
                        </div>
                    </div>
                </a>
                <div class="main-header-right">

                    <div class="dropdown main-profile-menu">
                        <a class="d-flex" href="#">
                            <span class="main-img-user"><i class="fe fe-user" style="font-size:24px"></i></span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <h6 class="tx-12">
                                    <?= session()->get('name') ?>
                                </h6>
                            </div>

                            <a class="dropdown-item" href="<?php echo base_url('reset-password') ?>">
                                <i class="fe fe-settings"></i> Change Password
                            </a>
                            <a class="dropdown-item" href="<?php echo base_url('logout') ?>">
                                <i class="fe fe-power"></i> Sign Out
                            </a>
                        </div>
                    </div>
                    <button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                    </button><!-- Navresponsive closed -->
                </div>
            </div>
        </div>
        <!-- End Main Header-->

        <!-- Mobile-header -->
        <div class="mobile-main-header">
            <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="dropdown main-profile-menu">
                            <a class="d-flex" href="#">
                                <span class="main-img-user"><i class="fe fe-user" style="font-size:24px"></i></span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="header-navheading">
                                    <h6 class="main-notification-title">Admin</h6>
                                </div>
                                <a class="dropdown-item" href="<?php echo base_url('reset-password') ?>">
                                    <i class="fe fe-settings"></i> Change Password
                                </a>
                                <a class="dropdown-item" href="<?php echo base_url('logout') ?>">
                                    <i class="fe fe-power"></i> Sign Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile-header closed -->


        <?php if (session()->getFlashdata('error')) { ?>
            <script>
                swal({
                    title: 'Error!',
                    text: '<?php echo session()->getFlashdata('error') ?>',
                    type: 'error',
                    timer: 3000,
                    showConfirmButton: false
                });
            </script>
        <?php } ?>
        <?php if (session()->getFlashdata('success')) { ?>
            <script>
                swal({
                    title: 'Well Done!',
                    text: '<?php echo session()->getFlashdata('success') ?>',
                    type: 'success',
                    timer: 3000,
                    showConfirmButton: false
                });
            </script>
        <?php } ?>