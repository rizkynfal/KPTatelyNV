<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/font.css">

    <title>Tately NV</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFE5B4;">
            <div class="container-fluid">
                <a class="navbar-brand" href="home"><img src="assets/img/logo.png" alt="Go Check-In" width="85%" height="100%"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse" id="navbarRightAlignExample">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link border-top border-bottom border-tes border-5 " style="color:#FFE5B4; background-color:#1F4690;" aria-current="page" href="#tentang" id="nav_tentang">HAZOB CARD</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link montserrat-semibold" href="#kontak" id="nav_kontak">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link montserrat-semibold text-success" href="mitra/tambahMitraHome" id="mitra">Tentang</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn btn-primary" role="button" style="background-color: #3A5BA0; color:#FFE5B4;" href="#" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                Masuk
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Superintendent</a></li>
                                <li><a class="dropdown-item" href="#">Supervisior</a></li>
                                <li><a class="dropdown-item" href="#">Operator</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-success px-3 nav-link text-white nav_button" href="#login" data-bs-toggle="modal" data-bs-target="#loginModal">Daftar</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="login">
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="home/login" method="POST">
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
    <main>
s
    </main>
    <footer class="text-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: #1F4690;">
            Tately NV.
        </div>
    </footer>
</body>

</html>