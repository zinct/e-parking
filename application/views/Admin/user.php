<!-- Begin Page Content -->
  <div class="container-fluid">

    <div class="flashdatadanger" data-flashdatadanger="<?= $this->session->flashdata('danger') ?>"></div>
    <div class="flashdatasuccess" data-flashdatasuccess="<?= $this->session->flashdata('success') ?>"></div>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between">
      <h1 class="h3 mb-0 text-gray-800"><?= $title ?></h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="btn-insert" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-tie fa-sm text-white-50"></i> Tambah Petugas</a>
    </div>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Informasi Petugas</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama Petugas</th>
                <th>Username</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              
              <?php $i = 1; ?>
              <?php foreach ($data_user as $user): ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $user['nama_user'] ?></td>
                  <td><?= $user['username'] ?></td>
                  <td>
                    <a href="<?= BASE_URL('pdf_test/') ?>" class="badge badge-secondary "><i class="fas fa-edit"></i></a>
                    <a href="<?= BASE_URL('Petugas/nota') ?>" class="badge badge-danger "><i class="fas fa-trash"></i></a>
                  </td>
                </tr>
              <?php endforeach ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<form action="" method="post" id="form-petugas">
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class='error_msg'></div>
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Petugas</label>
            <input type="text" class="form-control" name="nama_user" value="<?= set_value('nama_user') ?>" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Username</label>
            <input type="Username" class="form-control username" name="username" value="<?= set_value('nama_user') ?>" required>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control password"  required>
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="tombol-tambah" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>
</form>