<!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Informasi Parkiran Masuk</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>#</th>
                <th>Nama Petugas</th>
                <th>Kode Parkir</th>
                <th>Plat Nomor</th>              
                <th>Nama Kendaraan</th>
                <th>Waktu Masuk</th>
                <th>Total Harga</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              
              <?php $i = 1; ?>
              <?php foreach ($data_mobil as $mobil): ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $mobil['nama_petugas'] ?></td>
                  <td><?= $mobil['kode_parkir'] ?></td>
                  <td><?= $mobil['plat'] ?></td>
                  <td><?= $mobil['nama_kendaraan'] ?></td>
                  <td><?= $mobil['waktu_masuk'] ?></td>
                  <?php $tarif = get_harga($mobil['waktu_masuk']) ?>
                  <td class="text-danger">Rp. <?= $mobil['tarif'] * $tarif ?></td>
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