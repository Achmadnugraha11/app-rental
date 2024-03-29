<div class="container">
   <div class="main-content">
      <section class="section">
         <div class="section-header">
            <h2>Form Input Mobil</h2>
         </div>

         <div class="card">
            <div class="card-body">
               <form action="<?= base_url('admin/data_mobil/tambah_mobil_aksi');?>" 
                  method="POST" enctype="multipart/form-data">
               
                  <div class="row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Type Mobil</label>
                           <select name="kode_type" class="form-control">
                              <option >--Pilih Type Mobil--</option>
                              <?php foreach($type as $tp):?>
                                 <option value="<?= $tp->kode_type;?>">
                                    <?= $tp->nama_type;?>
                                 </option>
                              <?php endforeach;?>
                           </select>
                           <?= form_error('kode_type', '<div class="text-small text-danger">','</div>');?>
                        </div>

                        <div class="form-group">
                           <label>Merek</label>
                           <input type="text" name="merek" class="form-control">
                           <?= form_error('merek', '<div class="text-small text-danger">','</div>');?>
                        </div>

                        <div class="form-group">
                           <label>No Plat</label>
                           <input type="text" name="no_plat" class="form-control">
                           <?= form_error('no_plat', '<div class="text-small text-danger">','</div>');?>
                        </div>

                        <div class="form-group">
                           <label>Warna</label>
                           <input type="text" name="warna" class="form-control">
                           <?= form_error('warna', '<div class="text-small text-danger">','</div>');?>
                        </div>  
                        
                        <div class="form-group">
                              <label>Tahun</label>
                              <input type="text" name="tahun" class="form-control">
                              <?= form_error('tahun', '<div class="text-small text-danger">','</div>');?>
                           </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-group">
                           <label>Status</label>
                           <select name="status" class="form-control">
                              <option value="">--Pilih Status--</option>
                              <option value="1">Tersedia</option>
                              <option value="0">Tidak Tersedia</option>
                           </select>
                           <?= form_error('status', '<div class="text-small text-danger">','</div>');?>
                        </div>

                        <div class="form-group">
                           <label>Harga</label>
                           <input type="text" name="harga" class="form-control">
                           <?= form_error('harga', '<div class="text-small text-danger">','</div>');?>
                        </div>

                        <div class="form-group">
                           <label>Denda</label>
                           <input type="text" name="denda" class="form-control">
                           <?= form_error('denda', '<div class="text-small text-danger">','</div>');?>
                        </div>

                        <div class="form-group">
                           <label>Supir</label>
                           <input type="text" name="supir" class="form-control">
                           <?= form_error('supir', '<div class="text-small text-danger">','</div>');?>
                        </div>

                        <div class="form-group">
                           <label>Gambar</label>
                           <input type="file" name="gambar" class="form-control">
                           <?= form_error('gambar', '<div class="text-small text-danger">','</div>');?>
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary mt-4">Simpan</button>
                        <button type="reset" class="btn btn-sm  btn-danger mt-4">Reset</button>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </section>
   </div>
</div>