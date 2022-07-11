<body class="home">

  <?php if ($this->session->flashdata('flash')) : ?>
    <script>
      alert('<?php echo $this->session->flashdata('flash') ?>');
    </script>
  <?php $this->session->unset_userdata('flash');
  endif; ?>

  <section id="loginPage" class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">

        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="assets/img/draw2.webp" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <div class="shadow-lg p-3 mb-5 rounded-5 mt-4">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-center ">
              <h1 class="mb-3 text-light" style="font-size: 40px;">Login</h1>

            </div>
            <hr class="text-light mb-5">
            <!-- Pilih role -->
            <div class="p-4 mb-3">
              <div class="d-grid gap-2 mb-3">
                <a class="text-center btn p-4 fs-3 btn-outline-light" data-bs-target="#loginCollapseSuperint" data-bs-toggle="collapse">Superintendent</a>
              </div>
              <div class="collapse" id="loginCollapseSuperint">
                <div class="container-fluid border-light border border-1 rounded p-2 mb-3">
                  <h5 class="text-light text-center fw-bold">Superintendent Login</h5>
                  <hr class="text-light">
                  <form action="<?= base_url() ?>home/loginSuperint" method="POST">
                    <div class="mb-3 shadow rounded p-2">
                      <label class="text-light form-label fs-5">Username</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                    </div>

                    <div class="mb-3 shadow rounded p-2">
                      <label class="text-light form-label fs-5">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                    </div>

                    <div class="mt-4 d-flex justify-content-center ">
                      <input type="submit" class="btn btn-primary px-4 fs-4 mb-3 shadow rounded" value="Login" id="login">
                    </div>
                  </form>
                </div>
              </div>

              <div class="d-grid gap-2 mb-3">
                <a class="text-center btn p-4 fs-3 btn-outline-light" data-bs-target="#loginCollapseSupervisor" data-bs-toggle="collapse">Supervisor</a>
              </div>
              <div class="collapse" id="loginCollapseSupervisor">
                <div class="container-fluid border-light border border-1 rounded p-2 mb-3">
                  <h5 class="text-light text-center fw-bold">Supervisor Login</h5>
                  <hr class="text-light">
                  <form action="<?= base_url() ?>home/loginSupervisor" method="POST">
                    <div class="mb-3 shadow rounded p-2">
                      <label class="text-light form-label fs-5">Username</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                    </div>

                    <div class="mb-3 shadow rounded p-2">
                      <label class="text-light form-label fs-5">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                    </div>

                    <div class="mt-4 d-flex justify-content-center ">
                      <input type="submit" class="btn btn-primary px-4 fs-4 mb-3 shadow rounded" value="Login" id="login">
                    </div>
                  </form>
                </div>
              </div>
              <div class="d-grid gap-2 mb-3">
                <a class="text-center btn p-4 fs-3 btn-outline-light" data-bs-target="#loginCollapseOperator" data-bs-toggle="collapse">Operator</a>
              </div>
              <div class="collapse" id="loginCollapseOperator">
                <div class="container-fluid border-light border border-1 rounded p-2 mb-3">
                  <h5 class="text-light text-center fw-bold">Operator Login</h5>
                  <hr class="text-light">
                  <form action="<?= base_url() ?>home/loginOperator" method="POST">
                    <div class="mb-3 shadow rounded p-2">
                      <label class="text-light form-label fs-5">Username</label>
                      <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                    </div>

                    <div class="mb-3 shadow rounded p-2">
                      <label class="text-light form-label fs-5">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="********" required>
                    </div>

                    <div class="mt-4 d-flex justify-content-center ">
                      <input type="submit" class="btn btn-primary px-4 fs-4 mb-3 shadow rounded" value="Login" id="login">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>
<footer class="container-fluid bg-secondary fixed-bottom">
  <div class=" flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 ">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright ©Tately NV. 2020. All rights reserved.
    </div>
  </div>
</footer>

</html>