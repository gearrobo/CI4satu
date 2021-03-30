<div class="container-fluid">
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Setting</h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- <button type="button" class="btn btn-outline-info"><a href="<?= base_url()?>/register">Tambah</a></button> -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Jabatan</th>
                                <th>Role</th>
                                <th ></th>
                            </tr>
                        </thead>
                        <?php
                             $no = 0;
                             foreach ($data as $user) 
                             {
                                $nama = $user['nama_user'];
                                $email = $user['email_user'];
                                $jabatan = $user['jabatan_user'];
                                $level = $user['level'];
                                $no++;
                            
                        ?>
                        <tbody class="rack-table">
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $nama;?></td>
                                <td><?= $email;?></td>
                                <td><?= $jabatan;?></td>
                                <td><?= $level;?></td>
                                <td class="float-right">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- <button type="submit" class="btn btn-outline-info"><a href="<?= base_url()?>/addLocation">Tambah</a></button> -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Lokasi</th>
                                <th>IP</th>
                                <th>Rack Tersedia</th>
                                <th>latitude</th>
                                <th >longtitude</th>
                            </tr>
                        </thead>
                        <?php
                             $no = 0;
                             foreach ($dcim as $dcim) 
                             {
                                $nama = $dcim['lokasi'];
                                $email = $dcim['IP'];
                                $jabatan = $dcim['rack_available'];
                                $latitude = $dcim['latitude'];
                                $longtitude = $dcim['longtitude'];
                                $no++;
                            
                        ?>
                        <tbody class="rack-table">
                            <tr>
                                <td><?= $no;?></td>
                                <td><?= $nama;?></td>
                                <td><?= $email;?></td>
                                <td><?= $jabatan;?></td>
                                <td><?= $latitude;?></td>
                                <td><?= $longtitude;?></td>
                                <td class="float-right">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
    </div>

    <!-- Awal List Add Crud User-->
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0"><i class="fa fa-fw fa-plus-circle"></i>
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Add Role User
                    </button>
                </h5>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <div class="col-sm-12">
                    <h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
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
    </div>
    <!-- Akhir List Crud User -->
    <!-- Awal List Add Crud Lokasi -->
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0"><i class="fa fa-fw fa-plus-circle"></i>
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Add Role Location
                    </button>
                </h5>
            </div>

            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <div class="col-sm-12">
                    <h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
                        <form method="post">
                            <div class="form-group">
                            <label>Location Data Center<span class="text-danger">*</span></label>
                                <input type="text" name="username" id="username" class="form-control" placeholder="Nusantara" required>
                            </div>
                            <div class="form-group">
                            <label>IP Data Center<span class="text-danger">*</span></label>
                                <input type="text" name="useremail" id="useremail" class="form-control" placeholder="172.20.10.xx" required>
                            </div>
                            <div class="form-group">
                            <label>Latitude<span class="text-danger">*</span></label>
                                <input type="text" name="latitude" id="useremail" class="form-control" placeholder="-6.1234567" required>
                            </div>
                            <div class="form-group">
                            <label>Longtitude<span class="text-danger">*</span></label>
                                <input type="text" name="longtitude" id="useremail" class="form-control" placeholder="106.123456" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" name="submit" value="submit" id="submit" class="btn btn-primary btn-user btn-block">Add Data Center Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir List Crud Lokasi -->

</div>
                