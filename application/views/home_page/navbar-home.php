<title><?php echo $judul ?></title>

</head>

<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg " style="background-color: #FFE5B4;">
        <div class="container-fluid">
            <a class="navbar-brand" href="home/index"><img src="<?= base_url() ?>assets/img/logo.png" alt="Go Check-In" width="85%" height="100%"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-3">
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" style="color:#FFE5B4; background-color:#1F4690;" href="https://docs.google.com/forms/d/e/1FAIpQLScA7vw95xNWYpv0YRamjKtMHxAGPsr6KOz-Vo6N3A4lPwuMSA/viewform" >HAZOB CARD</a>
                    </li>

                    <li class="nav-item">
                        <a class="mt-1 nav-link active"aria-current="page" style="color: #1F4690;" href="#" id="nav_kontak">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="mt-1 nav-link montserrat-semibold" style="color: #1F4690;" href="#" id="">Tentang</a>
                    </li>
                    <li class="nav-item dropdown-center">
                        <a class="nav-link dropdown-toggle btn btn-primary" style="background-color: #1F4690; color:#FFE5B4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Masuk
                        </a>
                        <ul class="dropdown-menu" style="background-color: #1F4690;" aria-labelledby="navbarDropdown">
                            <li><a class="text-center dropdown-item text-primary" data-bs-target="#loginModalSuperint" data-bs-toggle="modal" href="#loginSuperint">Superintendent</a></li>
                            <li><a class="text-center dropdown-item text-primary" data-bs-target="#loginModalSupervisor" data-bs-toggle="modal" href="#loginSupervisor">Supervisor</a></li>
                            <li><a class="text-center dropdown-item text-primary" data-bs-target="#loginModalOperator" data-bs-toggle="modal" href="#loginOperator">Operator</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="ms-1 btn btn-outline-primary px-3 nav-link text-secondary" href="#" data-bs-toggle="modal" data-bs-target="#">Daftar</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    
    <section id="loginSuperint">
        <div class="modal fade " id="loginModalSuperint" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content bg-secondary">
                    <form action="home/loginSuperint" method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title text-primary" id="loginModalLabel">Superintendent Login</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="text-primary form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                            </div>
                            <div class="mb-3">
                                <label class="text-primary form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-success" value="Login" id="login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="loginSupervisor">
        <div class="modal fade" id="loginModalSupervisor" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="home/loginSupervisor" method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginModalLabel">Login</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="example" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-success" value="Login" id="login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="loginOperator">
        <div class="modal fade" id="loginModalOperator" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="<?= base_url('home/loginOperator')?>" method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginModalLabel">Login</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="example" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                            <input type="submit" class="btn btn-success" value="Login" id="login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>