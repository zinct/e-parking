<body class="bg-login bg-info">
  <div class="container" style="position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);">

      <!-- Outer Row -->
      <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-login-box"></div>
                <div class="col-lg-6">

                  <div class="p-4">

                    <div class="flashdatadanger" data-flashdatadanger="<?= $this->session->flashdata('danger') ?>"></div>
                    <div class="flashdatasuccess" data-flashdatasuccess="<?= $this->session->flashdata('success') ?>"></div>

                                 
                  
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">E - Parking Triple Six
                    </div>
                    <form class="user" action="" method="post">
                      <div class="form-group">
                        <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Username" value="<?= set_value('username') ?>">
                        <?= form_error('username', '<small class="text-danger ml-2">', '</small>'); ?>
                      </div>

                      <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" value="">
                         <?= form_error('password', '<small class="text-danger ml-2">', '</small>'); ?>
                      </div>
                      <div class="form-group">
                        <div class="custom-control custom-checkbox small">
                          <input type="checkbox" class="custom-control-input" id="customCheck">
                          <label class="custom-control-label" for="customCheck">Ingatkan Saya</label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-info btn-user btn-block">
                        Masuk
                      </button>
                    </form>
                    <hr>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>


