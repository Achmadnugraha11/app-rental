<div class="container">
   <div class="main-content my-5">
      <section class="section">
         <div class="section-header">
            <h2><?= $title;?></h2>
         </div>

         <span class="mt-2 p-2"><?= $this->session->flashdata('pesan');?></span>

         <table class="table-responsive table table-hover table-bordered table-striped mt-3">
            <tr class="bg-primary text-light">
               <th>No</th>
               <th>Customer</th>
               <th>Mobil</th>
               <th>Tgl. Rental</th>
               <th>Tgl. Kembali</th>
               <th>Harga/Hari</th>
               <th>Total Harga</th>
               <th>Denda/Hari</th>
               <th>Total denda</th>
               <th>Tgl Dikembalikan</th>
               <th>Status pengembalian</th>
               <th>Status rental</th>
               <th>Cek Pembayaran</th>
               <th>action</th>
            </tr>

          

            <?php 
            $no=1;
            foreach ($transaksi as $tr):?>
               <tr>
                  <td><?=  $no++;?></td>
                  <td><?=  $tr->nama;?></td>
                  <td><?=  $tr->merek;?></td>
                  <td><?=  date('d/m/Y', strtotime($tr->tanggal_rental));?></td>
                  <td><?=  date('d/m/Y', strtotime($tr->tanggal_kembali));?></td>
                  <td>Rp.<?= number_format($tr->harga, 0,',','.') ?></td>
                  
                  <td>
                     <?php 
                        $x= strtotime($tr->tanggal_kembali);
                        $y= strtotime($tr->tanggal_rental);
                        $jmlHari= abs(($x - $y)/(60*60*24));
                     ?>
                     Rp. <?= number_format($tr->harga * $jmlHari,0,',','.');?></td>
                  <td>Rp.<?= number_format($tr->denda, 0,',','.') ?></td>
                  <td>Rp.<?= $tr->total_denda, 0,',','.' ?></td>

                  <td>
                     <?php 
                        if($tr->tanggal_pengembalian == "0000-00-00") {
                           echo "-";
                        }else{
                           echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
                        }
                     ?>
                  </td>

                  <td>
                     <?php
                        echo $tr->status_pengembalian
                     ?>
                  </td>

                  <td>
                     <?php
                        echo $tr->status_rental
                     ?>
                  </td>

                  <td>
                     <center>
                        <?php
                           if(empty($tr->bukti_pembayaran)) { ?>
                              <button class="btn btn-sm btn-danger">
                                 <i class="fas fa-times-circle"></i>
                              </button>
                           <?php }else { ?>
                              <a 
                                 class="btn btn-sm btn-success"
                                 href="<?= base_url('admin/transaksi/pembayaran/'.$tr->id_rental);?>">
                                 <i class="fas fa-check-circle"></i>
                              </a>
                           <?php } ?>
                     </center>
                  </td>

                  <td>
                     <?php 
                        if($tr->status == "1") {
                           echo "-";
                        }else { ?>
                           <div class="row">  
                              <a class="btn btn-sm btn-success" 
                                 href="<?php echo base_url('admin/transaksi/transaksi_selesai/'.$tr->id_rental);?>">
                                 <i class="fas fa-check"></i>
                              </a>
                              <a class="btn btn-sm btn-danger" 
                                 href="<?php echo base_url('admin/transaksi/batal_transaksi/'.$tr->id_rental);?>">
                                 <i class="fas fa-times"></i>
                              </a>
                           </div>
                        <?php } ?>
                  </td>
               </tr>
            <?php endforeach;?>
         </table>
      </section>
   </div>
</div>

<!--  VIDIO 24 TRANSAKSI SELESAI -->