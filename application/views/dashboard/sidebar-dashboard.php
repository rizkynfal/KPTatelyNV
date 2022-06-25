<title><?php echo $judul ?></title>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-primary border border-3 border-dark fixed-top">
            <div class="container-fluid">
                <a href="" class="navbar-brand text-secondary">
                    Welcome !
                </a>
                <button class="ms-2 me-auto btn btn-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </a>

            </div>
        </nav>
    </header>
    <section id="sidebar" class="collapse show">
        <div class="container-fluid position-absolute">
            <div class="row flex-nowrap">
                <div class="col-auto col-xl-2 px-sm-2 mb-auto bg-secondary">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 sticky-top">

                        <a href="<?= base_url('dashboard/dashboardSuperint') ?>" class="navbar-brand d-flex align-items-center pb-3 mt-auto text-white text-decoration-none">


                            <span class="fs-5"><?php
                                                                    if ($_SESSION['status'] == 'login') {
                                                                        echo $_SESSION["name"];
                                                                    } else {
                                                                        echo "admin";
                                                                    } ?></span></a>

                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start " id="sideBarDash">
                            <li class="nav-item">
                                <a href="<?= base_url('dashboard/dashboardSuperint') ?>" class=" text-primary nav-link align-middle px-0">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                                </a>
                            </li>
                            <li>
                                <a class="nav-link px-0 align-start text-primary" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-controls="subproduc1 subproduc2"><i class="fs-4 bi-file-bar-graph-fill"></i> <span class="ms-1 d-none d-sm-inline">Production</span></a>
                                <ul class="collapse multi-collapse flex-column ms-1" id="subproduc1">
                                    <li class="w-100">
                                        <a href="<?= base_url() ?>production/productionData" class="nav-link px-0 text-primary"> <span class="d-none d-sm-inline">Production</span> Data</a>
                                    </li>

                                </ul>
                                <ul class="collapse multi-collapse  flex-column ms-1" id="subproduc2">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0 text-primary"> <span class="d-none d-sm-inline">Produc.</span>Calculation</a>
                                    </li>

                                </ul>
                            </li>
                            <li>

                                <a href="#" class="nav-link px-0 align-middle text-primary">
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
                            <li>
                                <a href="#" class="nav-link px-0 align-middle text-primary">
                                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                            </li>
                        </ul>


                        <hr>

                        <div class="container-fluid dropdown p-2 mb-4 bg-dark mt-auto">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1"><?php
                                                                        if ($_SESSION['status'] == 'login') {
                                                                            echo $_SESSION["username"];
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
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>