<div class="container mt-5">
   <div class="main-content">
      <section class="section mt-5">
         <div class="section-header mt-5">
            <h2>Data Transaksi</h2>
         </div>
      </section>
      <div class="card mt-5">
         <div class="card-header">
            Data Transaksi Anda
         </div>
         <span class="mt-2 p-2"><?= $this->session->flashdata('pesan');?></span>
         <div class="card-body">
            <table class=" table table-striped table-bordered">
               <tr>
                  <th>No</th>
                  <th>Nama Customer</th>
                  <th>Merek Mobil</th>
                  <th>No Plat</th>
                  <th>Harga Sewa</th>
                  <th>Denda</th>
                  <th>Action</th>
                  <th>Batal</th>
               </tr>
   
               <?php $no=1; foreach($transaksi as $tr):?>
                  <tr>
                     <td><?= $no++ ?></td>
                     <td><?= $tr->nama?></td>
                     <td><?= $tr->merek?></td>
                     <td><?= $tr->no_plat?></td>
                     <td>Rp. <?= number_format($tr->harga,0,',','.') ?></td>
                     <td>Rp. <?= number_format($tr->denda,0,',','.') ?></td>
                     <td>
                        <?php if($tr->status_rental == "Selesai") { ?>
                           <button class="btn btn-sm btn-danger">Rental selesai</button>
                        <?php }else{ ?>
                           <a href="<?= base_url('customer/transaksi/pembayaran/'.$tr->id_rental); ?>" 
                              class="btn btn-sm btn-success">Cek Pembayaran</a><?php } ?>
                     </td>

                     <td>
                        <?php 
                           if($tr->status_rental == 'Belum selesai') { ?>
                              <a onclick="return confirm('Anda Yakin Ingin Membatalkan?')"
                                 href="<?= base_url('customer/transaksi/batal_transaksi/'.$tr->id_rental);?>"
                                 class="btn btn-sm btn-danger">
                                 Batal
                              </a> 
                           <?php } else{?>
                              <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                 Batal
                              </button>
                         
                           <?php }?>
                     </td>
                  </tr>
               <?php endforeach;?>
            </table>
         </div>
      </div>
   </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Batal Transaksi</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         Transaksi Sudah Selesai, Tidak Bisa Dibatalkan.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<!-- batal transaksi 25 -->