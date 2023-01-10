
<body class="bg-gradient-primary">

<div class="container">
    <div class="card o- col-lg-7 mx-auto shadow-lg my-5">
         <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('daftar/daftar');?>">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama">
                                    <?= form_error('nama', '<div class="text-small text-danger">','</div>');?>
                                </div>
                                <div class="col-sm-6">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username">
                                    <?= form_error('username', '<div class="text-small text-danger">','</div>');?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" name="alamat">
                                <?= form_error('alamat', '<div class="text-small text-danger">','</div>');?>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                <label>Gender</label>
                                    <select class="form-control "name="gender">
                                        <option value="" class="form-group"><--Pilih Gender--></option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                    <?= form_error('gender', '<div class="text-small text-danger">','</div>');?>
                                </div>
                                <div class="col-sm-6">
                                    <label for="no_telepon">No telepon</label>
                                    <input type="text" class="form-control" name="no_telepon"> 
                                    <?= form_error('no_telepon', '<div class="text-small text-danger">','</div>');?>
                                </div>
                                <div class="col-sm-6">
                                    <label for="no_telepon">No KTP</label>
                                    <input type="text" class="form-control" name="no_ktp">
                                    <?= form_error('no_telepon', '<div class="text-small text-danger">','</div>');?>
                                </div>
                                <div class="col-sm-6">
                                    <label for="no_telepon">Password</label>
                                    <input type="password" class="form-control" name="password">
                                    <?= form_error('password', '<div class="text-small text-danger">','</div>');?>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-user btn-block">
                                Daftar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
         </div>
    </div>

</div>
