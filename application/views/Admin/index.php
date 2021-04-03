        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="flashdatadanger" data-flashdatadanger="<?= $this->session->flashdata('danger') ?>"></div>
          <div class="flashdatasuccess" data-flashdatasuccess="<?= $this->session->flashdata('success') ?>"></div>

          <div class="motor" data-motor="<?= $data_motor ?>"></div>
          <div class="mobil" data-mobil="<?= $data_mobil ?>"></div>
          <?php foreach ($petugas as $petugas): ?>
            <div class="petugas" data-petugas="<?= $petugas['nama_user'] ?>"></div>
          <?php endforeach ?>

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
          </div>

          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Petugas</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_petugas ?> Petugas</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Kendaraan Masuk</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_masuk ?> Kendaraan</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-road fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Motor Masuk</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_motor ?> Motor</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-motorcycle fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Mobil Masuk</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data_mobil ?> Mobil</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-car fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="row">
                <div class="col">
                  <!-- Bar Chart -->
                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Hasil Pendapatan Para Petugas</h6>
                    </div>
                    <div class="card-body">
                      <div class="chart-bar">
                        <canvas id="myBarChart"></canvas>
                      </div>
                      <hr>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam dolore quasi nam explicabo
                    </div>
                  </div>
                </div>

                <div class="col">
                  <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Perbandingan Mobil Dengan Motor</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                      <div class="chart-pie pt-4">
                        <canvas id="myPieChart"></canvas>
                      </div>
                      <hr>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam dolore quasi nam explicabo
                    </div>
                  </div>
                </div>
                </div>
              

            </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->