<div class="container" id="keanggotaan">

	<?php if($this->session->flashdata('flash')): ?>
		<div class="row mt-3">
			<div class="col-md-6">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					Data Anggota <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>keanggotaan/tambah" class="btn btn-primary">Tambah Data Anggota</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
		<h2>Daftar Anggota</h2>
		<table class="table table-striped" style="margin:25px 5px;" border="1">
		<thead class="thead-dark">
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama</th>
				<th scope="col">Alamat</th>
				<th scope="col">Pekerjaan</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
			<?php $no = 1; foreach($user as $u){ ?>
			<tr>
				<td id="no"><?php echo $no++ ?></td>
				<td><?php echo $u->nama ?></td>
				<td><?php echo $u->alamat ?></td>
				<td><?php echo $u->pekerjaan ?></td>
				<td id="action">
					<?php echo anchor('keanggotaan/edit/'.$u->id,'Edit'); ?>
					<?php echo anchor('keanggotaan/hapus/'.$u->id,'Hapus'); ?>
				</td>
			</tr>
			<?php } ?>
		</table>
		</div>
	</div>

</div>