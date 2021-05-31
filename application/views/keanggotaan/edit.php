<div class="container" id="edit">

	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			<div class="card-header">Form Edit Data Anggota</div>
				<div class="card-body">
				<?php foreach($user as $u){ ?>
					<form action="<?php echo base_url(). 'keanggotaan/update'; ?>" method="POST">
						<div class="form-group">
							<label for= "nama">Nama</label>
							<input type="hidden" name="id" class="form-control" id="id" value="<?php echo $u->id ?>">
							<input type="text" name="nama" class="form-control" id="nama" value="<?php echo $u->nama ?>">
						</div>
						<div class="form-group">
							<label for= "alamat">Alamat</label>
							<input type="text" name="alamat" class="form-control" id="alamat" value="<?php echo $u->alamat ?>">
						</div>
						<div class="form-group">
							<label for= "pekerjaan">Pekerjaan</label>
							<input type="text" name="pekerjaan" class="form-control" id="pekerjaan" value="<?php echo $u->pekerjaan ?>">
						</div>
						<button type="submit" name="Simpan" class="btn btn-primary float-right">Simpan</button>
					</form>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

</div>
