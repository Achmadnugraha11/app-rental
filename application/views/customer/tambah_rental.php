<div class="container">
   <div class="row my-5 justify-content-center">
      <div class="col-lg-6 ">
         <div class="card my-5">
            <div class="card-header">
               Form Rental Mobil
            </div>

            <div class="card-body shadow">
               <?php foreach($detail as $dt) : ?>
      
                  <form method="post" action="<?= base_url('customer/rental/tambah_rental_aksi');?>">
                     <div class="form-group mt-2">
                        <label>Harga Sewa/Hari</label>
                        <input type="hidden" name="id_mobil" value="<?= $dt->id_mobil;?>">
                        <input type="text" name="harga" class="form-control"
                           value="Rp. <?= number_format($dt->harga,0,',','.');?>" readonly>
                     </div>
                     
                     <div class="form-group mt-3">
                        <label>Denda/Hari</label>
                        <input type="text" name="denda" class="form-control"
                           value="Rp. <?= number_format($dt->denda,0,',','.');?>" readonly>
                     </div>

                     <div class="form-group mt-3">
                        <label>Tanggal Rental</label>
                        <input type="date" name="tanggal_rental" class="form-control"> 
                     </div>

                     <div class="form-group mt-3">
                        <label>Tanggal Kembali</label>
                        <input type="date" name="tanggal_kembali" class="form-control"> 
                     </div>

                     <button type="submit" class="btn btn-sm btn-warning my-3">Rental</button>
                  </form>
               <?php endforeach;?>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- vidio 18 -->