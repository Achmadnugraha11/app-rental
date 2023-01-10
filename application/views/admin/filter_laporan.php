<div class="container">
   <div class="main-content">
      <div class="row">
         <div class="col-lg-7">
            <section class="section">
               <div class="section-header">
                  <h2><?= $title;?></h2>
               </div>
            </section>

            <form method="post" action="<?= base_url('admin/laporan')?>"> 
            <div class="form-group">
               <label>Dari Tanggal</label>
               <input type="date" name="dari" class="form-control">
               <?= form_error('dari','<span class="text-small text-danger">','</span>')?>
            </div>

            <div class="form-group">
               <label>Sampai Tanggal</label>
               <input type="date" name="sampai" class="form-control">
               <?= form_error('sampai','<span class="text-small text-danger">','</span>')?>
            </div>

            <button type="submit" class="btn btn-sm btn-warning">
               <i class="fas fa-eye">
                  Tampilkan Data
               </i>
            </button>
            </form>
         </div>
      </div>
   </div>
</div>
