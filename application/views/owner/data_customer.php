<div class="container">
   <div class="main-content">
      <div class="row">
         <div class="col-lg">
            <section class="section">
               <div class="section-header">
                  <h2><?= $title;?></h2>
               </div>
            </section>

            <div class="col-lg">
               <!-- <?= $this->session->flashdata('pesan');?>
               <a href="<?= base_url('owner/data_customer/tambah_customer');?>" class="btn btn-primary my-3">Tambah Customer</a> -->

               <table class="table table-sriped table-hover table-responsive table-bordered ">
                  <tr class="bg-primary text-light">
                     <th>No</th>
                     <th>Nama</th>
                     <th>Username</th>
                     <th>Alamat</th>
                     <th>Jenis Kelamin</th>
                     <th>No. Telepon</th>
                     <th>No. KTP</th>
                     <!-- <th>Password</th>
                     <th>Aksi</th> -->
                  </tr>

                  <?php
                     $no =1;
                     foreach($customer as $cs) :?>
                     <tr>
                        <td><?= $no++;?></td>
                        <td><?= $cs->nama;?></td>
                        <td><?= $cs->username;?></td>
                        <td><?= $cs->alamat;?></td>
                        <td><?= $cs->gender;?></td>
                        <td><?= $cs->no_telepon;?></td>
                        <td><?= $cs->no_ktp;?></td>
                        <!-- <td><?= $cs->password;?></td>
                        <td>
                           <div class="row">
                              <a 
                                 href="<?= base_url('owner/data_customer/update_customer/').$cs->nama;?>"
                                 class="btn btn-sm btn-primary">
                                 <i class="fas fa-edit"></i>
                              </a>
                           
                              <a 
                                 href="<?= base_url('owner/data_customer/delete_customer/').$cs->nama;?>"
                                 class="btn btn-sm btn-danger ">
                                 <i class="fas fa-trash"></i>
                              </a>
                           </div>
                        </td> -->
                     </tr>
                  <?php endforeach;?>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
