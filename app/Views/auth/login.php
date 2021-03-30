<?= $this->extend('auth/templates/index');?>

<?= $this->section('content');?>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                
                <div class="row">
                    <div class="col-8">
                    </div>
                        <div class="col-4">
                            <div class="card">
                                <div class="card-body">
                                <?= session()->get('pesan');?>
                                <div class="card-header">
                                    <h2 class="card-title text-center">Sign In</h2>
                                </div>
                                <?php echo form_open('home/cek_login');?>
                                    <div class="mb-3">
                                        <label for="InputForEmail" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="InputForEmail">
                                    </div>
                                    <div class="mb-3">
                                        <label for="InputForPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="InputForPassword">
                                    </div>
                                    <button type="submit" class="btn btn-primary float-left">Login</button>
                                <?php echo form_close();?>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
<?= $this->endSection();?>