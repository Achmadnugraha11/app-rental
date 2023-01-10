<div class="container">
   <div class="main-content">
      <div class="row">
         <div class="col-lg">
            <section class="section">
               <div class="section-header">
                  <h1>Detail Mobil</h1>
               </div>
            </section>
            
            <?php foreach($detail as $d):?>
               <div class="card shadow">
                  <div class="card-body">
                     <div class="row">
                        <div class="col-md-5">
                           <img src="<?= base_url().'assets/upload/'.$d->gambar;?>" alt="">
                        </div>
                        <div class="col-md-7">
                           <table class="table">
                              <tr>
                                 <td>Type Mobil</td>
                                 <td>
                                    <?php
                                       if($d->kode_type == "SUV"){
                                          echo "SUV";
                                       }elseif($d->kode_type == "MPV"){
                                          echo "MPV";
                                       }elseif($d->kode_type == "HTB"){
                                          echo "Hatcback";
                                       }elseif($d->kode_type == "SDN"){
                                          echo "Sedan";
                                       }else{
                                          echo "<span class='text-danger'>Tipe Belum Terdaftar</span>";
                                       }
                                    ?>
                                 </td>
                              </tr>
                                       
                              <tr>
                                 <td>Merek</td>
                                 <td><?php echo $d->merek ?></td>
                              </tr>

                              <tr>
                                 <td>No Plat</td>
                                 <td><?php echo $d->no_plat ?></td>
                              </tr>

                              <tr>
                                 <td>Warna</td>
                                 <td><?php echo $d->warna ?></td>
                              </tr>

                              <tr>
                                 <td>Tahun</td>
                                 <td><?php echo $d->tahun ?></td>
                              </tr>

                              <tr>
                                 <td>Harga</td>
                                 <td>Rp. <?= number_format($d->harga,0,',','.');?>/ hari</td>
                              </tr>

                              <tr>
                                 <td>Denda</td>
                                 <td>Rp. <?= number_format($d->denda,0,',','.');?>/ hari</td>
                              </tr>
                              <tr>
                                 <td>Supir</td>
                                 <td><?php echo $d->supir?></td>
                              </tr>

                              <tr>
                                 <td>Status</td>
                                 <td>
                                    <?php 
                                       if($d->status == "0"){
                                          echo "<span class='badge badge-danger'>
                                             Tidak Tersedia
                                          </span>";
                                       }else{
                                          echo "<span class='badge badge-success'>
                                             Tersedia
                                          </span>";
                                       }
                                       ?>
                                    </td>
                              </tr>
                              
                           </table>

                           <a href="<?= base_url('admin/data_mobil');?>"
                              class="btn btn-sm btn-danger ml-2">
                              Kembali
                           </a>
                           <a href="<?= base_url('admin/data_mobil/update_mobil/'.$d->id_mobil);?>"
                              class="btn btn-sm btn-primary ml-">
                              Update
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            <?php endforeach;?>
   </div>
</div>