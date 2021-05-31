<div class="container" id="input">

	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
			<div class="card-header">Form Tambah Data Anggota</div>
				<div class="card-body">
					<?php if( validation_errors() ): ?>
						<div class="alert alert-danger" role="alert">
							<?= validation_errors(); ?>
						</div>
					<?php endif; ?>
					<form action="" method="POST">
						<div class="form-group">
							<label for= "nama">Nama</label>
							<input type="text" name="nama" class="form-control" id="nama">
						</div>
						<div class="form-group">
							<label for= "alamat">Alamat</label>
							<input type="text" name="alamat" class="form-control" id="alamat">
						</div>
						<div class="form-group">
							<label for= "pekerjaan">Pekerjaan</label>
							<input type="text" name="pekerjaan" class="form-control" id="pekerjaan">
						</div>
						<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>