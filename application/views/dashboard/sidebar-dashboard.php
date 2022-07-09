<title><?php echo $judul ?></title>

</head>

<body class="wrapper">

    <section id="sideMenu" class="collapse collapse-horizontal show" style="background: #212529;">
        <nav id="sidebar">
            <div class="sidebar-header text-center">
                <h3>Welcome<br><span class="fs-5"><?php
                                                    if ($_SESSION['status'] == 'login') {
                                                        echo $_SESSION["role_user"];
                                                    } else {
                                                        echo "admin";
                                                    } ?></span></h3>
            </div>

            <div class="d-flex flex-wrap text-white min-vh-100 sticky-top ms-2">
                <a href="<?= base_url('dashboard/dashboardSuperint') ?>" class="navbar-brand d-flex align-items-center pb-3 mt-auto text-white text-decoration-none">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start " id="sideBarDash">
                        <li class="nav-item">
                            <a href="<?= base_url('dashboard/dashboardSuperint') ?>" class="text-light nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-0 align-start text-light" href="<?= base_url() ?>production/productionData" type="button"><i class="fs-4 bi-file-bar-graph-fill"></i> <span class="ms-1 d-none d-sm-inline">Production Data</span></a>
                        </li>
                        <li>
                            <a class="nav-link px-0 align-start text-light" href=""><i class="fs-4 bi-clipboard-data-fill"></i> <span class="ms-1 d-none d-sm-inline">Production Calculation</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-0 align-start text-light" href="<?= base_url() ?>datareading/index" type="button"><i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Data Reading</span></a>
                        </li>
                        <li>

                            <a href="#" class="nav-link px-0 align-middle text-light">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-primary ">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Bootstrap</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-primary">
                                <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> </a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0 text-primary"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 text-primary"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 text-primary"> <span class="d-none d-sm-inline">Product</span> 3</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 text-primary"> <span class="d-none d-sm-inline">Product</span> 4</a>
                                </li>
                            </ul>
                        </li>
                        <div class="fixed-bottom " style="padding-right: 90%;">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fs-4 bi bi-person-circle" alt="hugenerd" width="30" height="30" class="rounded-circle"></i>
                                <span class="d-none d-sm-inline mx-1"><?php
                                                                        if ($_SESSION['status'] == 'login') {
                                                                            echo $_SESSION["nama_user"];
                                                                        } else {
                                                                            echo "admin";
                                                                        } ?></span>

                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
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