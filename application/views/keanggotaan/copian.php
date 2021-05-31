<div class="container">
   <div class="row mt-3">
      <div class="col-md-6">
         <h2>Daftar Anggota Copy</h2>
         <table class="table">
            <thead class="thead-dark">
               <tr>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Pekerjaan</th>
                  <th scope="col">Action</th>
               </tr>
            </thead>

            <tbody>
            <?php $no = 1; foreach($user as $u){ ?>
            <tr>
               <td scope="row"><?php echo $no++ ?></td>
               <td><?php echo $u->nama ?></td>
               <td><?php echo $u->alamat ?></td>
               <td><?php echo $u->pekerjaan ?></td>
               <td>
                  <?php echo anchor('keanggotaan/edit/'.$u->id,'Edit'); ?>
                  <?php echo anchor('keanggotaan/hapus/'.$u->id,'Hapus'); ?>
			      </td>
            </tr>
            <?php } ?>
            </tbody>
         </table>
      </div>
   </div>
</div>