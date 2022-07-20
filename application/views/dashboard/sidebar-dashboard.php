<title><?php echo $judul ?></title>

</head>

<body class="wrapper">

    <section id="sideMenu" class="collapse collapse-horizontal show " style="background: #212529;">
        <nav id="sidebar">
            <div class="sidebar-header text-center">
                <h3>Welcome<br><span class="fs-5"><?php
                                                    if ($_SESSION['status'] == 'login') {
                                                        echo $_SESSION["role_user"];
                                                    } else {
                                                        echo "admin";
                                                    } ?></span></h3>
            </div>

            <div class="d-flex flex-wrap text-white min-vh-100  ms-2">
                <a href="<?= base_url('dashboard/dashboardSuperint') ?>" class="navbar-brand d-flex align-items-center pb-3 mt-auto text-white text-decoration-none">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start " id="sideBarDash">
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/dashboardSuperint') ?>" class="text-light nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-0 align-start text-light" href="<?= base_url() ?>productiondata/index" type="button"><i class="fs-4 bi-file-bar-graph-fill"></i> <span class="ms-1 d-none d-sm-inline">Production Data</span></a>
                        </li>
                        <li>
                            <a class="nav-link px-0 align-start text-light" href="<?= base_url()?>producalcul/index"><i class="fs-4 bi-clipboard-data-fill"></i> <span class="ms-1 d-none d-sm-inline">Production Calculation</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-0 align-start text-light" href="<?= base_url() ?>datareading/index" type="button"><i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Data Reading</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-0 align-start text-light" href="<?= base_url() ?>SummaryReport/index" type="button"><i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Daily Summary Report</span></a>
                        </li>
                      
                        <div class="mt-auto">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fs-4 bi bi-person-circle" alt="hugenerd" width="30" height="30" class="rounded-circle"></i>
                                <span class="d-none d-sm-inline mx-1"><?php
                                                                        if ($_SESSION['status'] == 'login') {
                                                                            echo $_SESSION["nama_user"];
                                                                        } else {
                                                                            redirect('home/logout');
                                                                        } ?></span>

                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="<?= base_url('home/logout') ?>">Sign out</a></li>
                            </ul>
                        </div>

                    </ul>
            </div>
        </nav>
    </section>