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
                <th>Jenis Kendaraan</th>                
                <th>Nama Kendaraan</th>
                <th>Waktu Masuk</th>
                <th>Harga</th>
                <th>Total Harga</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              
              <?php $i = 1; ?>
              <?php foreach ($data_masuk as $masuk): ?>
                <tr>
                  <td><?= $i++; ?></td>
                  <td><?= $masuk['nama_petugas'] ?></td>
                  <td><?= $masuk['kode_parkir'] ?></td>
                  <td><?= $masuk['plat'] ?></td>
                  <td><?= $masuk['nama_jenis'] ?></td>
                  <td><?= $masuk['nama_kendaraan'] ?></td>
                  <td><?= $masuk['waktu_masuk'] ?></td>
                  <td>Rp. <?= $masuk['harga'] ?></td>
                  <?php $tarif = get_harga($masuk['waktu_masuk']) ?>
                  <td class="text-danger">Rp. <?= $masuk['harga'] * $tarif ?></td>
                  <td>
                    <a href="<?= BASE_URL('Petugas/print') ?>/<?= $masuk['id'] ?>" class="badge badge-secondary "><i class="fas fa-barcode"></i></a>
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