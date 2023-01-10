<div class="container">
   <div class="main-content">
      <div class="row">
         <div class="col-lg">
            <section class="section">
               <div class="section-header">
                  <h2><?= $title;?></h2>
               </div>
            </section>

            <form method="post" action="<?= base_url('owner/laporan')?>"> 
            <div class="form-group">
               <label>Dari Tanggal</label>
               <input type="date" name="dari" class="form-control">
               <?= form_error('dari','<span class="text-small text-danger">','</span>')?>
            </div>

            <div class="form-group">
               <label>Sampai Tanggal</label>
               <input type="date" name="sampai" class="form-control">
               <?= form_error('sampai','<span class="text-small text-danger">','</span>')?>
            </div>

            <button type="submit" class="btn btn-sm btn-warning">
               <i class="fas fa-eye">
                  Tampilkan Data
               </i>
            </button>

            <table class="table-responsive table table-hover table-bordered table-striped mt-3">
            <tr class="bg-primary text-light">
               <th>No</th>
               <th>Customer</th>
               <th>Mobil</th>
               <th>Tgl. Rental</th>
               <th>Tgl. Kembali</th>
               <th>Harga/Hari</th>
               <th>Denda/Hari</th>
               <th>Total denda</th>
               <th>Tgl Dikembalikan</th>
               <th>Status pengembalian</th>
               <th>Status rental</th>
               <!-- <th>Cek Pembayaran</th>
               <th>action</th> -->
            </tr>

            <?php $no=1;
            foreach ($lapor as $l):?>
               <tr>
                  <td><?=  $no++;?></td>
                  <td><?= $l->nama;?></td>
                  <td><?= $l->merek;?></td>
                  <td><?=  date('d/m/Y', strtotime($l->tanggal_rental));?></td>
                  <td><?=  date('d/m/Y', strtotime($l->tanggal_kembali));?></td>
                  <td>Rp.<?= number_format($l->harga, 0,',','.') ?></td>
                  <td>Rp.<?= number_format($l->denda, 0,',','.') ?></td>
                  <td>Rp.<?=$l->total_denda, 0,',','.' ?></td>
                  <td>
                     <?php 
                        if($l->tanggal_pengembalian == "0000-00-00") {
                           echo "-";
                        }else{
                           echo date('d/m/Y', strtotime($l->tanggal_pengembalian));
                        }
                     ?>
                  </td>

                  <td>
                     <?php
                        echo $l->status_pengembalian
                     ?>
                  </td>

                  <td>
                     <?php
                        echo $l->status_rental
                     ?>
                  </td>
               </tr>
            <?php endforeach;?>
         </table>
            </form>
         </div>
      </div>
   </div>
</div>