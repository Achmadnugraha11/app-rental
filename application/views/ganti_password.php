<body>
    <div class="container">
        <div class="row justify-content-center ">
        
            <div class="col-xl-10 col-lg-12 col-md-9 ">
        
                <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 ">
                    <div class="card-body p-0 ">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Ganti Password</h1>
                                        <span><?= $this->session->flashdata('message');?></span>
                                        <span><?= $this->session->flashdata('pesan');?></span>
                                    </div>
                                    <form  action="<?= base_url('Auth/ganti_password_aksi');?>" method="post">
                                        <div class="form-group">
                                            <input type="password" class="form-control"
                                                id="pass_baru" name="pass_baru" placeholder="Password Baru">
                                            <?= form_error('pass_baru', '<div class="text-danger text-small">','</div>');?>
                                        </div>
        
                                        <div class="form-group">
                                            <input type="password" class="form-control"
                                                id="ulang_pass" name="ulang_pass" placeholder="Ulangi Password">
                                            <?= form_error('ulang_pass', '<div class="text-danger text-small">','</div>');?>
                                        </div>

                                        <button class="btn btn-primary btn-user btn-block">
                                            Ganti Pssword
                                        </button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        
        </div>

<!-- Outer Row -->

</div>
