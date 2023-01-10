<div class="container-fluid">
   <div class="main-content">
      <div class="section">
         <div class="section-header">
            <h2><?= $title;?></h2>
         </div>
      </div>
   </div>

   <div class="row">
      <div class="col-lg-6">
         <form class=" form-group"
            action="<?= base_url('admin/data_type/tambah_type_aksi');?>"
            method="post">

            <div class="form-group">
               <label>Kode Type</label>
               <input type="text" name="kode_type" class="form-control">
               <?= form_error('kode_type', '<div class="text-small text-danger">','</div>');?>
            </div>

            <div class="form-group">
               <label>Nama Type</label>
               <input type="text" name="nama_type" class="form-control">
               <?= form_error('nama_type', '<div class="text-small text-danger">','</div>');?>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
         </form>
      </div>
   </div>
   
</div>
