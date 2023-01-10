<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
    <?php echo $this->session->flashdata('pesan');?>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach($mobil as $mb):?>
                <div class="col-lg col-mb-6 p-4">
                    <div class="card h-100 ">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?= base_url('assets/upload/'.$mb->gambar);?>" alt="mobil" />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?= $mb->merek;?></h5>
                                <p class="text-secondary small">Rp. <?= number_format($mb->harga,0,',','.');?>/ hari</p>
                                <p class="fw-bolder"><?= $mb->supir;?></p>
    
                                <lead class="fw-bolder"><?= $mb->no_plat;?></lead>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer text-center">
                            <?php 
                                if($mb->status == "1") {
                                    echo anchor('customer/rental/tambah_rental/'.$mb->id_mobil,
                                    '<button class="btn btn-success btn-sm">Rental</button>');
                                }else{
                                    echo '<button class="btn btn-danger btn-sm">Tidak Tersedia</button>';
                                }
                            ?>
    
                            <a href="<?= base_url('dashboard/detail_mobil/').$mb->id_mobil;?>" 
                                class="btn btn-sm btn-warning ml-2">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
    </section>