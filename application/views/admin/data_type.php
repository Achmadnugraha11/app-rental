<div class="container-fluid">
   <div class="main-content">
      <div class="row">
         <div class="col-lg">
            <div class="section">
               <div class="section-header">
                  <h2><?= $title;?></h2>
               </div>
            </div>
         </div>
      </div>
      
      <?= $this->session->flashdata('pesan');?>

      <div class="col-lg">
         <a 
            href="<?= base_url('admin/data_type/form_tambah_type');?>" 
            class="btn btn-primary my-3">
            Tambah Type
         </a>

         <table class="table table-bordered table-striped table-hover">
            <thead class="bg-primary text-light">
               <th>No</th>
               <th>Kode Tipe</th>
               <th>Nama Tipe</th>
               <th>Aksi</th>
            </thead>

            <tbody>
               <?php 
               $no= 1;
               foreach($type as $tp):?>
                  <tr>
                     <td><?= $no++;?></td>
                     <td><?= $tp->kode_type;?></td>
                     <td><?= $tp->nama_type;?></td>
                     <td>
                     <a href="<?= base_url('admin/data_type/delete_type/').$tp->id_type;?>" 
                        class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i> 
                         Hapus
                     </a>
                  </td>
                  </tr>
               <?php endforeach;?>
            </tbody>
         </table>
      </div>
      
   </div>
</div>
