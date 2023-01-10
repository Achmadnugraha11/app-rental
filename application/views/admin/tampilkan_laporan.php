<div class="container">
   <div class="main-content">
      <div class="row">
         <div class="col-lg">
            <section class="section">
               <div class="section-header">
                  <h2><?= $title;?></h2>
               </div>
            </section>

            <form method="post" action="<?= base_url('admin/laporan')?>"> 
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
            foreach ($laporan as $tr):?>
               <tr>
                  <td><?=  $no++;?></td>
                  <td><?=  $tr->nama;?></td>
                  <td><?=  $tr->merek;?></td>
                  <td><?=  date('d/m/Y', strtotime($tr->tanggal_rental));?></td>
                  <td><?=  date('d/m/Y', strtotime($tr->tanggal_kembali));?></td>
                  <td>Rp.<?= number_format($tr->harga, 0,',','.') ?></td>
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
               </tr>
            <?php endforeach;?>
         </table>
            </form>
         </div>
      </div>
   </div>
</div>