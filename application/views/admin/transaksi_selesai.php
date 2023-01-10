<div class="container" >
   <section class="section">
      <div class="main-section">
         <div class="section-header">
            <h2><?= $title;?></h2>
         </div>
      </div>
   </section>

   <?php foreach($transaksi as $tr) :?>
      <form method="post" action="<?= base_url('admin/transaksi/transaksi_selesai_aksi');?>" style="width: 60%;">

         <input type="hidden" name="id_rental" value="<?= $tr->id_rental;?>"> 
         <input type="hidden" name="tanggal_kembali" value="<?= $tr->tanggal_kembali;?>"> 
         <input type="hidden" name="denda" value="<?= $tr->denda;?>" > 

         <div class="form-group">
            <label>Tanggal Pengembalian</label>
            <input type="date" name="tanggal_pengembalian" class="form-control"
               value="<?= $tr->tanggal_pengembalian;?>">
         </div>

         <div class="form-group">
            <label>Status Pengembalian</label>
            <select name="status_pengembalian" class="form-control">
               <option value="<?= $tr->status_pengembalian;?>"><?= $tr->status_pengembalian;?></option>
               <option value="Kembali">Kembali</option>
               <option value="Belum Kembali">Belum Kembali</option>
            </select>
         </div>

         <div class="form-group">
            <label>Status Rental</label>
            <select name="status_rental" class="form-control">
               <option value="<?= $tr->status_rental;?>">
                  <?= $tr->status_rental;?>
               </option>
               <option value="Selesai">Selesai</option>
               <option value="Belum selesai">Belum selesai</option>
            </select>
         </div>

         <button type="submit" class="btn btn-sm btn-success">Simpan</button>
      </form>

   <?php endforeach;?>
</div>