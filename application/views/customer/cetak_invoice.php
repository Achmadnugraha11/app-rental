               <h2>Invoice pembayaran</h2>

               <table style="width: 60%; margin: 50px;">

                  <?php foreach($transaksi as $tr):?>
                     <tr>
                        <td>Nama Customer</td>
                        <td>:</td>
                        <td><?= $tr->nama;?></td>
                     </tr>
                     <tr>
                        <td>Merek mobil</td>
                        <td>:</td>
                        <td><?= $tr->merek;?></td>
                     </tr>

                     <tr>
                        <td>Tanggal Rental</td>
                        <td>:</td>
                        <td><?= $tr->tanggal_rental;?></td>
                     </tr>

                     <tr>
                        <td>Tanggal Kembali</td>
                        <td>:</td>
                        <td><?= $tr->tanggal_kembali;?></td>
                     </tr>

                     <tr>
                        <td>Biaya sewa/hari</td>
                        <td>:</td>
                        <td>Rp. <?= number_format($tr->harga,0,',','.');?></td>
                     </tr>

                     <tr>
                        <?php 
                           $x= strtotime($tr->tanggal_kembali);
                           $y= strtotime($tr->tanggal_rental);
                           $jmlHari= abs(($x - $y)/(60*60*24));
                        ?>
                        <td>Jumlah Hari sewa</td>
                        <td>:</td>
                        <td><?= $jmlHari;?>  Hari</td>
                     </tr>

                     <tr>
                        <td>Status Pembayaran</td>
                        <td>:</td>
                        <td>
                           <?php if($tr->status_pembayaran == "0") {
                                 echo "Belum lunas";
                              }else{
                                 echo "Lunas";
                              }
                           ;?>
                        </td>
                     </tr>

                     <tr>
                        <td>Rekening Pembayaran</td>
                        <td>:</td>
                        <td>
                           <ul style="text-decoration: none; ">
                              <li>Mandiri 120898982981</li>
                              <li>BNI 99200199929</li>
                              <li>BCA  98298900110</li>
                              <li>OVO 66667777722</li>
                           </ul>
                        </td>
                     </tr>

                     <tr style="font-weight: bold; color: red;">
                        <td>Jumlah Pembayaran</td>
                        <td>:</td>
                        <td>
                           Rp. <?= number_format($tr->harga * $jmlHari,0,',','.');?>
                        </td>
                     </tr>

                  <?php endforeach;?> 
               </table>

               <script>
                  window.print();
               </script>