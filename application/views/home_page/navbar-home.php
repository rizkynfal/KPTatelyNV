<title><?php echo $judul ?></title>

</head>

<body>
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
                        <a class="mt-1 nav-link montserrat-semibold" style="color: #1F4690;" href="#" id="mitra">Tentang</a>
                    </li>
                    <li class="nav-item dropdown-center">
                        <a class="nav-link dropdown-toggle btn btn-primary" style="background-color: #1F4690; color:#FFE5B4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Masuk
                        </a>
                        <ul class="dropdown-menu" style="background-color: #1F4690;" aria-labelledby="navbarDropdown">
                            <li><a class="text-center dropdown-item text-primary"  href="#">Superintendent</a></li>
                            <li><a class="text-center dropdown-item text-primary"  href="#">Supervisor</a></li>
                            <li><a class="text-center dropdown-item text-primary"  href="#">Operator</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="ms-1 btn btn-outline-primary px-3 nav-link text-secondary" href="#" data-bs-toggle="modal" data-bs-target="#">Daftar</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>