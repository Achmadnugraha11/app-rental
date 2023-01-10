<div class="container-fluid">
   <div class="main-content">
      <div class="row">
         <div class="col-lg">
            <section class="section">
               <div class="section-header">
                  <h1><?= $title;?></h1>
               </div>
            </section>

            <form 
               method="post"
               action="<?= base_url('admin/data_customer/tambah_customer_aksi');?>   ">
               <div class="form-group">
                  <label >Nama</label>
                  <input type="text" name="nama" class="form-control">
                  <?= form_error('nama','<span class="text-small text-danger">','</span>')?>
               </div>
               <div class="form-group">
                  <label >Username</label>
                  <input type="text" name="username" class="form-control">
                  <?= form_error('username','<span class="text-small text-danger">','</span>')?>
               </div>
               <div class="form-group">
                  <label >Alamat</label>
                  <input type="text" name="alamat" class="form-control">
                  <?= form_error('alamat','<span class="text-small text-danger">','</span>')?>
               </div>
               <div class="form-group">
                  <label >Gender</label>
                  <select name="gender" class="form-control">
                     <option value="" ><--Jenis Kelamin--></option>
                     <option value="Laki-laki" >Laki-laki</option>
                     <option value="Perempuan">Perempuan</option>
                  </select>
                  <?= form_error('gender','<span class="text-small text-danger">','</span>')?>
               </div>
               <div class="form-group">
                  <label >No Telepon</label>
                  <input type="text" name="no_telepon" class="form-control">
                  <?= form_error('no_telepon','<span class="text-small text-danger">','</span>')?>
               </div>
               <div class="form-group">
                  <label >No KTP</label>
                  <input type="text" name="no_ktp" class="form-control">
                  <?= form_error('no_ktp','<span class="text-small text-danger">','</span>')?>
               </div>
               <div class="form-group">
                  <label >Password</label>
                  <input type="password" name="password" class="form-control">
                  <?= form_error('password','<span class="text-small text-danger">','</span>')?>
               </div>

               <button 
                  type="submit"
                  class="btn btn-sm btn-primary">
                  Kirim
               </button>
               <button 
                  type="reset"
                  class="btn btn-sm btn-danger">
                  Hapus
               </button>
            </form>
         </div>
      </div>
   </div>
</div>
