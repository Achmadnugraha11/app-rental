<div class="container mt-5 mb-5">  
   <div class="row">
      <div class="col-md-8 mt-5">
         <div class="card">
            <div class="card-header text-light bg-success">
               Invoice Pembayaran
            </div>

            <div class="card-body shadow">
               <table class="table ">
                  <?php foreach($transaksi as $tr):?>
                     <tr>
                        <th>Merek mobil</th>
                        <td>:</td>
                        <td><?= $tr->merek;?></td>
                     </tr>

                     <tr>
                        <th>Tanggal Rental</th>
                        <td>:</td>
                        <td><?= $tr->tanggal_rental;?></td>
                     </tr>

                     <tr>
                        <th>Tanggal Kembali</th>
                        <td>:</td>
                        <td><?= $tr->tanggal_kembali;?></td>
                     </tr>

                     <tr>
                        <th>Biaya sewa/hari</th>
                        <td>:</td>
                        <td>Rp. <?= number_format($tr->harga,0,',','.');?></td>
                     </tr>

                     <tr>
                        <?php 
                           $x= strtotime($tr->tanggal_kembali);
                           $y= strtotime($tr->tanggal_rental);
                           $jmlHari= abs(($x - $y)/(60*60*24));
                        ?>
                        <th>Jumlah Hari sewa</th>
                        <td>:</td>
                        <td><?= $jmlHari;?>  Hari</td>
                     </tr>

                     <tr class="text-success">
                        <th>Jumlah Pembayaran</th>
                        <td>:</td>
                        <td>
                           <button class="btn btn-success btn-sm">
                           Rp. <?= number_format($tr->harga * $jmlHari,0,',','.');?>
                           </button>
                        </td>
                     </tr>

                     <tr>
                        <td></td>
                        <td></td>
                        <td>
                           <a href="<?= base_url('customer/transaksi/cetak_invoice/'.$tr->id_rental);?>"
                              class="btn btn-sm btn-secondary">
                              Print Invoice
                           </a>
                        </td>
                     </tr>
                  <?php endforeach;?> 
               </table>
            </div>
         </div>
      </div>
      <div class="col-md-4 mt-5  ">
         <div class="card shadow">
            <div class="card-header bg-success text-light">
               Informasi Pembayaran
            </div>
            
            <div class="card-body">
               <p class="px-3">Silahkan Melakukan Pembayaran Melalui Nomor Rekening Dibawah ini</p>

               <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                     <img src="https://statik.tempo.co/data/2018/02/06/id_682386/682386_720.jpg" style="width: 45px;">
                     120898982981
                  </li>
                  <li class="list-group-item">
                     <img src="https://dip.fisip.unair.ac.id/wp-content/uploads/2021/08/bni.jpg" style="width: 45px;">
                     99200199929
                  </li>
                  <li class="list-group-item">
                     <img src="https://image.cermati.com/v1428073854/brands/avqoa9rfng8bklutfhm6.jpg" style="width: 45px;">
                     98298900110
                  </li>
                  <li class="list-group-item">
                     <img src="https://blogpictures.99.co/cara-menggunakan-ovo.jpg" style="width: 45px;">
                     66667777722
                  </li>
               </ul>

               <?php 
                  if(empty($tr->bukti_pembayaran)) { ?>
                     <!-- Button trigger modal -->
                     <button type="button" class="btn btn-primary btn-sm w-100 m-1 bg-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                       Upload Bukti Pembayaran
                     </button>
                  <?php }elseif($tr->status_pembayaran == '0'){ ?>
                     <button class="btn btn-warning w-100 btn-sm">Menunggu konfirmasi</button> 
                     <?php }elseif($tr->status_pembayaran == '1') { ?>
                        <button class="btn btn-success btn-sm w-100">
                           <i class="fa fa-check"></i> 
                           Pembayaran selesai</button> 
                     <?php } ?>
            </div>
         </div>
      </div>
   </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Upload Bukti Pembayaran</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form method="post" action="<?= base_url('customer/transaksi/pembayaran_aksi')?>" enctype="multipart/form-data">
         <div class="modal-body">
            <div class="form-group">
               <label >Upload Bukti Pembayaran</label>
               <input type="hidden" name="id_rental" class="form-control" value="<?= $tr->id_rental;?>">
               <input type="file" name="bukti_pembayaran" id="bukti_pembayaran" class="form-control">
            </div>
         </div>
         <div class="modal-footer">
            <button type="submit" class="btn btn-sm btn-primary">Upload</button>
         </div>
      </form>
      </div>
    </div>
  </div>
</div>