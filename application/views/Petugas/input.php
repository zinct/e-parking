<!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- Form Input -->
    <form action="" method="post">
    	<div class="row">
    		<div class="col-6">
    			<div class="card">
				  <div class="card-header">
				  	Form Input
				  </div>
				  <div class="card-body">
				      <div class="form-group">
				      	<div class="row">
				      		<div class="col">
						    	<label for="exampleInputPassword1">Plat Nomor</label>
						    </div>
						</div>
						<div class="row">
						    <div class="col-2 ">
						    	<select class="form-control" name="plat-daerah" id="" required>
						    		<option value="D">D</option>
						    		<option value="B">B</option>						    		
						    		<option value="F">F</option>
						    		<option value="T">T</option>
						    		<option value="E">E</option>
						    		<option value="Z">Z</option>
						    		<option value="H">H</option>
						    		<option value="G">G</option>
						    		<option value="R">R</option>
						    		<option value="L">L</option>
						    		<option value="W">W</option>
						    		<option value="N">N</option>
						    		<option value="P">P</option>
						    		<option value="S">S</option>
						    		<option value="M">M</option>
						    	</select>
						    </div>
						    <div class="col-3 px-0">
						    	<input type="text" class="form-control" name="plat-kode" style="text-transform: uppercase;" required>
						    </div>
						    <div class="col-2 px-3">
						    	<input type="text" class="form-control" name="plat-alpha" style="text-transform: uppercase;" required>
						    </div>
						</div>					    
					  </div>
					  <div class="form-group">
					  	<label for="exampleInputPassword1">Jenis Kendaraan</label>
					    <select class="form-control jenis-kendaraan" name="jenis_kendaraan" required>
							<option value="">Pilih Jenis...</option>
							<?php foreach ($data_jenis as $jenis): ?>
								<option value="<?= $jenis['kendaraan_id'] ?>"><?= $jenis['nama_jenis'] ?></option>
							<?php endforeach ?>
					    </select>
					  </div>
					  <div class="form-group">
					  	<label>Nama Kendaraan</label>
					  	<input type="text" class="form-control" name="nama_kendaraan" placeholder="Nama Kendaraan..."required>
					  </div>
					  <hr>
					  <div class="form-group">
					  	<button class="btn btn-primary px-4" name="tombol-input">Simpan</button>
					  	<a href="<?= BASE_URL('Petugas/index') ?>" class="btn btn-secondary px-4">Kembali</a>
					  </div>
				  </div>
				</div>
    		</div>
    		<div class="col">
    			<div class="card">
				  <div class="card-header">
				  	Form Keterangan
				  </div>
				  <div class="card-body">
				  	  <div class="form-group">
					  	<label for="exampleInputPassword1">Nama Petugas</label>
					  	<input class="form-control" name="nama_petugas" type="text" readonly value="<?= $user_data['nama_user'] ?>" required>
					  </div>
					  <div class="form-group">
					  	<label for="exampleInputPassword1">Waktu Masuk</label>
					  	<input class="form-control" name="waktu_masuk" type="text" readonly value="Pukul <?= date('H.i') ?> WIB" placeholder="Pukul <?= date('H.i') ?> WIB" required>
					  </div>
					  <div class="form-group">
					  	<label for="exampleInputPassword1">Tarif</label>
					  	<div class="row">
					  		<div class="col-8">
					  			<input class="form-control tarif" name="tarif" type="text" readonly value="0" required>
					  		</div>
					  		<div class="col">
					  			<h5 class="mt-1"><b>/ Hours</b></h5>
					  		</div>
					  	</div>
					  	
					  </div>
				  </div>
				</div>
    		</div>
    	</div>
	    
	</form>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content