<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    
    <link rel="icon" type="image/png" sizes="16x16" href="../manager/img/favicon.png">
    <title>Autospace - Manager</title>

    <!-- Custom CSS -->
    <!--<link href="manager/assets/libs/flot/css/float-chart.css" rel="stylesheet">-->
    <?= $this->Html->css('Manager.float-chart.css'); ?>
    <!-- Custom CSS -->
    <?= $this->Html->css('Manager.style.min.css'); ?>
    <?= $this->Html->css('Manager.multicheck.css'); ?>
    <?= $this->Html->css('Manager.dataTables.bootstrap4.css'); ?>
    <?= $this->Html->css('Manager.select2.min.css'); ?>
    <?= $this->Html->css('Manager.jquery.minicolors.css'); ?>
    <?= $this->Html->css('Manager.bootstrap-datepicker.min.css'); ?>
    <?= $this->Html->css('Manager.quill.snow.css'); ?>
    
    <!--<link rel="stylesheet" type="text/css" href="./manager/assets/extra-libs/multicheck/multicheck.css">
    <link href="./manager/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">-->
    
    <!--<link href="../../dist/css/style.min.css" rel="stylesheet">
     HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="<?= $this->Url->build(['controller' => 'Commandes', 'action' => 'index']); ?>">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="/autospace/manager/img/logo-icon.png" alt="homepage" class="light-logo" />
                           
                        </b>
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="/autospace/manager/img/logo-text.png" alt="homepage" class="light-logo" />
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="manager/assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <span class="d-none d-md-block">Créer <i class="fa fa-angle-down"></i></span>
                             <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>   
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search position-absolute">
                                <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                            </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="">
                                             <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Event today</h5> 
                                                        <span class="mail-desc">Just a reminder that event</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Settings</h5> 
                                                        <span class="mail-desc">You can customize this template</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Pavan kumar</h5> 
                                                        <span class="mail-desc">Just see the my admin!</span> 
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)" class="link border-top">
                                                <div class="d-flex no-block align-items-center p-10">
                                                    <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                                    <div class="m-l-10">
                                                        <h5 class="m-b-0">Luanch Admin</h5> 
                                                        <span class="mail-desc">Just see the my new admin!</span> 
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="manager/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= $this->Url->build(['controller' => 'Commandes', 'action' => 'index']); ?>" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Tableau de bord</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= $this->Url->build(['controller' => 'Voitures', 'action' => 'index']); ?>" aria-expanded="false"><i class="mdi mdi-car"></i><span class="hide-menu">Voitures</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= $this->Url->build(['controller' => 'Pieces', 'action' => 'index']); ?>" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Pièces détachées</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= $this->Url->build(['controller' => 'Clients', 'action' => 'index']); ?>" aria-expanded="false"><i class="mdi mdi-human-male-female"></i><span class="hide-menu">Clients</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?= $this->Url->build(['controller' => 'Concessionnaires', 'action' => 'index']); ?>" aria-expanded="false"><i class="mdi mdi-home-modern"></i><span class="hide-menu">Concessionnaires</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Paramètres </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="<?= $this->Url->build(['controller' => 'Categories', 'action' => 'index']); ?>" class="sidebar-link"><i class="mdi mdi-database"></i><span class="hide-menu"> Données </span></a></li>
                                <li class="sidebar-item"><a href="<?= $this->Url->build(['controller' => 'Countries', 'action' => 'index']); ?>" class="sidebar-link"><i class="mdi mdi-map-marker"></i><span class="hide-menu"> Localisation </span></a></li>
                                <li class="sidebar-item"><a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'index']); ?>" class="sidebar-link"><i class="mdi mdi-account-multiple"></i><span class="hide-menu"> Utilisateurs </span></a></li>
                            </ul>
                        </li>
                        
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>


            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                Tous droits réservés par autospace.ci. Site propulsé par <a href="https://kenlo.ci">KENLO</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <!--<script src="./manager/assets/libs/jquery/dist/jquery.min.js"></script>-->
    <!-- Bootstrap tether Core JavaScript -->
    <!--<script src="./manager/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="./manager/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./manager/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="./manager/assets/extra-libs/sparkline/sparkline.js"></script>-->

    <?= $this->Html->script('Manager.jquery.min.js'); ?>
    <?= $this->Html->script('Manager.popper.min.js'); ?>
    <?= $this->Html->script('Manager.bootstrap.min.js'); ?>
    <?= $this->Html->script('Manager.perfect-scrollbar.jquery.min.js'); ?>
    <?= $this->Html->script('Manager.sparkline.js'); ?>
    <!--Wave Effects -->
    <?= $this->Html->script('Manager.waves.js'); ?>
    
    <!--Menu sidebar -->
    <?= $this->Html->script('Manager.sidebarmenu.js'); ?>
    
    <!--Custom JavaScript -->
    <?= $this->Html->script('Manager.custom.min.js'); ?>
    
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <!--<script src="./manager/assets/libs/flot/excanvas.js"></script>
    <script src="./manager/assets/libs/flot/jquery.flot.js"></script>
    <script src="./manager/assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="./manager/assets/libs/flot/jquery.flot.time.js"></script>
    <script src="./manager/assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="./manager/assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="./manager/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    
    <script src="./manager/js/pages/chart/chart-page-init.js"></script>

    <script src="./manager/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="./manager/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="./manager/assets/extra-libs/DataTables/datatables.min.js"></script>-->

    <?= $this->Html->script('Manager.dashboard1.js'); ?>
    <?= $this->Html->script('Manager.excanvas.js'); ?>
    <?= $this->Html->script('Manager.jquery.flot.js'); ?>
    <?= $this->Html->script('Manager.jquery.flot.pie.js'); ?>
    <?= $this->Html->script('Manager.jquery.flot.time.js'); ?>
    <?= $this->Html->script('Manager.jquery.flot.stack.js'); ?>
    <?= $this->Html->script('Manager.jquery.flot.crosshair.js'); ?>
    <?= $this->Html->script('Manager.jquery.jquery.flot.tooltip.min.js'); ?>
    <?= $this->Html->script('Manager.chart-page-init.js'); ?>
    <?= $this->Html->script('Manager.datatable-checkbox-init.js'); ?>
    <?= $this->Html->script('Manager.jquery.multicheck.js'); ?>
    <?= $this->Html->script('Manager.datatables.min.js'); ?>
    <?= $this->Html->script('Manager.select2.min.js'); ?>
    <?= $this->Html->script('Manager.jquery.inputmask.bundle.min.js'); ?>
    <?= $this->Html->script('Manager.mask.init.js'); ?>
    <?= $this->Html->script('Manager.select2.full.min.js'); ?>
    <?= $this->Html->script('Manager.jquery-asColor.min.js'); ?>
    <?= $this->Html->script('Manager.jquery-asGradient.js'); ?>
    <?= $this->Html->script('Manager.jquery-asColorPicker.min.js'); ?>
    <?= $this->Html->script('Manager.jquery.minicolors.min.js'); ?>
    <?= $this->Html->script('Manager.bootstrap-datepicker.min.js'); ?>
    <?= $this->Html->script('Manager.quill.min.js'); ?>


    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>


    <script>
        //***********************************//
        // For select 2
        //***********************************//
        $(".select2").select2();

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>

</body>

</html>