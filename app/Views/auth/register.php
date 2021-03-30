<?= $this->extend('auth/templates/index');?>

<?= $this->section('content');?>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                
                <div class="row">
                    <div class="col-6">
                    </div>
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <?= $validate->listErrors() ?> 
                        <form class="user" method="post" action="auth/register">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="username"
                                    placeholder="Username" name="nama_user">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email_user"
                                    placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="jabatan"
                                    placeholder="Jabatan" name="jabatan_user">
                            </div>
                            <div class="form-group">
                                    <input type="password" class="form-control form-control-user" name="password"
                                        id="exampleInputPassword" placeholder="Password">
                            </div>
                            <div class="input-group">
                            <select class="form-select" aria-label="Default select example" name="level">
                                <option selected>Role Id User</option>
                                <option value="admin">Admin</option>
                                <option value="operator">Operator</option>
                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                            
                        </form>
                        
                                </div>
                            </div>
                        </div>
                </div>

                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
<?= $this->endSection();?>
