<div class="container">
   <div class="main-content">
      <div class="row">
         <div class="col-lg">
            <section class="section">
               <div class="section-header">
                  <h2><?= $title;?></h1>
               </div>

               <?= $this->session->flashdata('pesan');?>

                  <div class="col-lg">
                     <a href="<?= base_url('admin/data_mobil/tambah_mobil');?>" class="btn btn-primary my-3">Tambah Data</a>
                     <table class="table table-hover table-striped  table-border ">
                        <thead class="bg-primary text-light">
                           <tr>
                              <th>No</th>
                              <th>Gambar</th>
                              <th>Type</th>
                              <th>Merek</th>
                              <th>No. Plat</th>
                              <th>Status</th>
                              <th>Harga</th>
                              <th>Denda</th>
                              <th>Supir</th>
                              <th>Aksi</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $no=1;
                              foreach ($mobil as $mb):?>
                              <tr>
                                 <td><?= $no++?></td>
                                 <td>
                                    <img width="70px" src="<?= base_url().'assets/upload/'.$mb->gambar;?>" alt="">
                                 </td>
                                 <td><?= $mb->kode_type?></td>
                                 <td><?= $mb->merek?></td>
                                 <td><?= $mb->no_plat?></td>
                                 <td>
                                 <?php
                                    if($mb->status == "0") {
                                       echo "<span class='badge badge-danger'>Tidak tersedia</span>";
                                    } else {
                                       echo "<span class='badge badge-success'>Tersedia</span>";
                                    }
                                 ?>
                                 </td>
                                 <td>Rp. <?= number_format($mb->harga,0,',','.');?>/ hari</td>
                                 <td>Rp. <?= number_format($mb->denda,0,',','.');?></td>
                                 <td><?= $mb->supir;?></td>
                                 <td>
                                    <a href="<?= base_url('admin/data_mobil/detail_mobil/').$mb->id_mobil;?>" class="btn btn-sm btn-primary"><i class="fas fa-eye"></i></a>
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