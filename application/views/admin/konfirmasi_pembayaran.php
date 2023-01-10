<div class="container">
   <div class="main-content">
      <section class="section">
         <div class="section-header">
            <h2>Konfirmasi Pembayaran</h2>
         </div>
   
         <div class="card" style="width: 50%;">
            <div class="card-header">
               Konfirmasi Pembayaran
            </div>
   
            <div class="card-body">
               <form method="post" action="<?= base_url('admin/transaksi/cek_pembayaran');?>">
                  <?php foreach($pembayaran as $pmb) : ?>
                     <a class="btn btn-sm btn-success"
                         href="<?= base_url('admin/transaksi/download_pembayaran/'.$pmb->id_rental);?>">
                        <i class="fas fa-download">Download Bukti Pembayaran</i>   
                     </a>

                     <div class="form-check form-switch pt-3">
                        <input class="form-check-input" type="hidden" role="switch"
                        value="<?= $pmb->id_rental;?>" name="id_rental">

                        <input class="form-check-input" type="checkbox" role="switch"
                        value="1" name="status_pembayaran">

                        <label class="form-check-label" for="flexSwitchCheckChecked">Konfirmasi Pembayaran</label>
                     </div>
                     <hr>
                     <button class="btn btn-sm btn-primary">Simpan</button>
                  <?php endforeach;?>
               </form>
            </div>
         </div>
      </section>
   </div>
</div>

<!-- vidio ke 22 menit 23.13 -->