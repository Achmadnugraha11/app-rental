<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $title;?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('assets/assets_shop');?>/css/styles.css" rel="stylesheet" />
            <link rel="website icon" href="<?= base_url('assets/assets_sb-admin');?>/img/mb.jpg">
    </head>
    
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm mb-5">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('customer/dashboard');?>">
                <img src="<?= base_url('assets/assets_sb-admin');?>/img/mb.jpg" alt="Mb Rent Car"
                    style="width: 35px;">
            <?= $logo;?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="<?= base_url('dashboard');?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('dashboard/data_mobil');?>">Mobil</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('customer/transaksi');?>">Transaksi</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="<?= base_url('customer/dashboard/syarat');?>">Syarat</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('daftar/daftar');?>">Daftar</a></li>
                    <li class="nav-item">
                        <?php if($this->session->userdata('nama')) {?>
                            <a class="nav-link" href="<?= base_url('auth/logout');?>">Hai
                                <?= $this->session->userdata('nama');?>
                                <span class="btn btn-sm btn-warning">Logout</span>
                            </a>

                            <!-- <a class="nav-link" href="<?= base_url('auth/ganti_password');?>">
                                <span class="btn btn-sm btn-primary">Ganti password</span>
                            </a> -->

                        <?php }else{?>
                        <a class="nav-link" href="<?= base_url('auth/login');?>">
                            <span class="btn btn-sm btn-success">Login</span>
                        </a>
                        <?php } ?>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    