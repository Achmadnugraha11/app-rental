<!-- Header-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <img src="" alt="">
            <h1 class="display-4 fw-bolder">MB Rent Car</h1>
            <p class="lead fw-normal text-white-50 mb-0">Rental Mobil Terbaik</p>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg">
            <div class="text-center m-4">
                <h3>Mengapa memilih MB Rent Car?</h3>
                <p>MB Rent Car memberikan kenyamanan terhadap pelanggan dengan berbagai mobil yang tersedia <br>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam quos accusamus quo expedita quas aperiam, neque unde alias eaque corrupti quae optio officiis, temporibus in qui molestias sint ab obcaecati dignissimos quis? Quisquam, impedit. Alias natus earum dignissimos ut consequatur voluptates officia corporis facere, quia iusto sequi aliquid delectus expedita repudiandae eligendi praesentium odit inventore cum est amet. Necessitatibus, ducimus ipsa. Nesciunt dignissimos laudantium voluptas cumque quam molestiae sit corporis sint sapiente voluptatum consequatur dolorem error, totam ipsum ab rerum modi nobis deserunt. Nostrum asperiores atque ut, earum sapiente tempore consequatur exercitationem deserunt corrupti enim eos, molestias praesentium velit laboriosam.
                </p>
            </div>

            <div class="col-lg">
                <img src="" alt="">
            </div>
        </div>
    </div>
</div>
    <!-- Section-->

<div class="container">
    <h2 class="text-center">Buruan Order mobilnya sekarang</h2>
</div>

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
    
        