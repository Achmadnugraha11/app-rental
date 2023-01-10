<div class="container m-3">
   <div class="card shadow">
      <div class="card-body">
         <?php foreach($detail as $dt) :?>
            <div class="row">
               <div class="col-md-6">
                  <img src="<?= base_url('assets/upload/'.$dt->gambar);?>">
               </div>

               <div class="col-md-6">
                  <table class="table ">
                     <tr>
                        <th>Merek</th>
                        <td><?= $dt->merek;?></td>
                     </tr>
                     <tr>
                        <th>No Plat</th>
                        <td><?= $dt->no_plat;?></td>
                     </tr>
                     <tr>
                        <th>Warna</th>
                        <td><?= $dt->warna;?></td>
                     </tr>
                     <tr>
                        <th>Tahun</th>
                        <td><?= $dt->tahun;?></td>
                     </tr>
                     
                     <tr>
                        <th>Harga</th>
                        <td>Rp. <?= number_format($dt->harga,0,',','.');?>/ hari</td>
                     </tr>
                     
                     <tr>
                        <th>Denda</th>
                        <td>Rp. <?= number_format($dt->denda,0,',','.');?>/ hari</td>
                     </tr>
                     
                     <tr>
                        <th>Supir</th>
                        <td><?= $dt->supir;?></td>
                     </tr>
                     <tr>
                        <th>Status</th>
                        <td>
                           <?php 
                              if($dt->status == "1") {
                                 echo "Tersedia";
                              }else{
                                 echo "Tidak Tersedia/Sedang di Rental";
                              }
                           ;?>
                        </td>
                     </tr>
                     <tr>
                        <td></td>
                        <td>
                        <?php 
                           if($dt->status == "0") {
                              echo "<span class='btn btn-danger btn-sm' disable>Telah di Rental</span>";
                           }else{
                              echo anchor('customer/rental/tambah_rental/'.$dt->id_mobil, 
                              '<button class="btn btn-success btn-sm">Rental</button>');
                           }
                        ?>
                        </td>
                     </tr>
                  </table>
               </div>
            </div>
         <?php endforeach;?>
      </div>
   </div>
</div>