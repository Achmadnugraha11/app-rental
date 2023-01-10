<div class="container">
   <div class="main-content">
      <div class="row">
         <div class="col-lg">
            <section class="section">
               <div class="section-header">
                  <h2>Tujuan</h1>
               </div>

               <?= $this->session->flashdata('pesan');?>

                  <div class="col-lg">
                     <a href="<?= base_url('admin/tujuan/tambah_tujuan');?>" class="btn btn-primary my-3">Tambah Tujuan</a>
                     <table class="table table-hover table-striped  table-border ">
                        <thead class="bg-primary text-light">
                           <tr>
                              <th>No</th>
                              <th>Tujuan</th>
                              <th>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $no=1;
                              foreach ($tujuan as $mb):?>
                              <tr>
                                 <td><?= $no++?></td>
                                 
                                 ef="<?= base_url('admin/data_mobil/detail_mobil/').$mb->id_mobil;?>" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
                                    <a href="<?= base_url('admin/data_mobil/update_mobil/').$mb->id_mobil;?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                    <a href="<?= base_url('admin/data_mobil/delete_mobil/').$mb->id_mobil;?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                                 </td>
                              </tr>
                           <?php endforeach;?>
                        </tbody>
                     </table>
                  <!-- </div>
               </div> -->
            </section>
         <!-- </div>
      </div> -->
   </div>
</div>