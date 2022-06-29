<body>

  <!-- <nav class="navbar navbar-expand fixed-top" style="background-color: #FFE5B4;">
    <div class="container-fluid ">
      <a class="navbar-brand" href="home/index"><img src="<?= base_url() ?>assets/img/logo.png" alt="Go Check-In" width="85%" height="100%"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-3">
          <li class="nav-item">
            <a class="nav-link btn btn-primary" style="color:#FFE5B4; background-color:#1F4690;" href="https://docs.google.com/forms/d/e/1FAIpQLScA7vw95xNWYpv0YRamjKtMHxAGPsr6KOz-Vo6N3A4lPwuMSA/viewform">HAZOB CARD</a>
          </li>

          <li class="nav-item">
            <a class="mt-1 nav-link active" aria-current="page" style="color: #1F4690;" href="#" id="nav_kontak">Home</a>
          </li>
          <li class="nav-item">
            <a class="mt-1 nav-link montserrat-semibold" style="color: #1F4690;" href="#" id="">Tentang</a>
          </li>
          <li class="nav-item dropdown-center">
            <a class="nav-link dropdown-toggle btn btn-primary" style="background-color: #1F4690; color:#FFE5B4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Masuk
            </a>
            <ul class="dropdown-menu" style="background-color: #1F4690;" aria-labelledby="navbarDropdown">
              <li><a class="text-center dropdown-item text-primary" data-bs-target="#loginOffcanvasSuperint" data-bs-toggle="offcanvas" href="#loginSuperint">Superintendent</a></li>
              <li><a class="text-center dropdown-item text-primary" data-bs-target="#loginOffcanvasSupervisor" data-bs-toggle="offcanvas" href="#loginSupervisor">Supervisor</a></li>
              <li><a class="text-center dropdown-item text-primary" data-bs-target="#loginOffcanvasOperator" data-bs-toggle="offcanvas" href="#loginOperator">Operator</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="ms-1 btn btn-outline-primary px-3 nav-link text-secondary" href="#" data-bs-toggle="modal" data-bs-target="#">Daftar</a>
          </li>

        </ul>
      </div>
    </div>
  </nav> -->

  <!-- <section id="loginUtama">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
          <div class="wrap d-md-flex">
            <h1 class="text-center">Hallo</h1>
            <h1 class="text-center">Pilih Role</h1>
            <a class="btn btn-primary" data-bs-target="#loginOffcanvasSuperint" data-bs-toggle="offcanvas" href="#loginSuperint"><span>Superintendent</span></a>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- <div class="container">
    <h1>Login</h1>
    <form>
      <div class="form-control">
        <input type="text" required />
        <label>Username</label>
      </div>
      <div class="form-control">
        <input type="password" required />
        <label>Password</label>
      </div>
      <button class="btn">Submit</button>
    </form>
  </div> -->
  <section id="loginSuperint">
    <div class="offcanvas offcanvas-start" tabindex="-1" id="loginOffcanvasSuperint" aria-labelledby="loginOffcanvaslLabel" aria-hidden="true" data-bs-backdrop="static">
      <div class="offcanvas-header bg-secondary ">
        <h5 class="text-primary offcanvas-title" id="offcanvasLabel">Superintendent Login</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-secondary">
        <form action="<?= base_url() ?>home/loginSuperint" method="POST">
          <div class="mb-3">
            <label class="text-primary form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
          </div>
          <div class="mb-3">
            <label class="text-primary form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
          </div>

          <div class="mt-4 d-flex">
            <input type="submit" class="btn btn-success" value="Login" id="login">
          </div>
        </form>
      </div>
    </div>
  </section>


  <section id="loginSupervisor">
    <div class="offcanvas offcanvas-start" tabindex="-1" id="loginOffcanvasSupervisor" aria-labelledby="loginOffcanvaslLabel" aria-hidden="true" data-bs-backdrop="static">
      <div class="offcanvas-header bg-secondary ">
        <h5 class="text-primary offcanvas-title" id="offcanvasLabel">Supervisor Login</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-secondary">
        <form action="" method="POST">
          <div class="mb-3">
            <label class="text-primary form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
          </div>
          <div class="mb-3">
            <label class="text-primary form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
          </div>

          <div class="mt-4 d-flex">
            <input type="submit" class="btn btn-success" value="Login" id="login">
          </div>
        </form>
      </div>
    </div>
  </section>
  <section id="loginOperator">
    <div class="offcanvas offcanvas-start" tabindex="-1" id="loginOffcanvasOperator" aria-labelledby="loginOffcanvaslLabel" aria-hidden="true" data-bs-backdrop="static">
      <div class="offcanvas-header bg-secondary ">
        <h5 class="text-primary offcanvas-title" id="offcanvasLabel">Operator Login</h5>
        <button type="button" class="btn-close bg-light" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-secondary">
        <form action="" method="POST">
          <div class="mb-3">
            <label class="text-primary form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
          </div>
          <div class="mb-3">
            <label class="text-primary form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
          </div>

          <div class="mt-4 d-flex">
            <input type="submit" class="btn btn-success" value="Login" id="login">
          </div>
        </form>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">Login #04</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-10">
          <div class="wrap d-md-flex">
            <div class="img-fluid" style="background-image:url('assets/img/budi-field-1.jpg')">
            </div>
            <div class="login-wrap p-4 p-md-5">
              <div class="d-flex">
                <div class="w-100">
                  <h3 class="mb-4">Sign In</h3>
                </div>
                <div class="w-100">
                  <p class="social-media d-flex justify-content-end">
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                  </p>
                </div>
              </div>
              <form action="#" class="signin-form">
                <div class="form-group mb-3">
                  <label class="label" for="name">Username</label>
                  <input type="text" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group mb-3">
                  <label class="label" for="password">Password</label>
                  <input type="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                </div>
                <div class="form-group d-md-flex">
                  <div class="w-50 text-left">
                    <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                      <input type="checkbox" checked>
                      <span class="checkmark"></span>
                    </label>
                  </div>
                  <div class="w-50 text-md-right">
                    <a href="#">Forgot Password</a>
                  </div>
                </div>
              </form>
              <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>