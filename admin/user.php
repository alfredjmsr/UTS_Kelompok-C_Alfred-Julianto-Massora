<?php

include("index.php");
include("../config.php");

?>


<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">User</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-10">
                        <i class="fa fa-table"></i> Data Table User
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalTambah">Tambah</button>

                    </div>
                </div>

            </div>
            <div class="card-body">

                <div class=" table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-dark">


                            <tr>
                                <th>No</th>
                                <th>Nama User</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>No.Telpon</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th width="100">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            $data = mysqli_query($con, "select * from users");
                            while ($d = mysqli_fetch_assoc($data)) {

                                //////selesai disni  
                            ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['username']; ?></td>
                                    <td><?php echo $d['nama_lengkap']; ?></td>
                                    <td><?php echo $d['email']; ?></td>
                                    <td><?php echo $d['no_telp']; ?></td>
                                    <td><?php echo $d['alamat']; ?></td>
                                    <?php

                                    if ($d['status'] == 0) {
                                        $status = "Nonaktif";
                                    } else {
                                        $status = "Aktif";
                                    } ?>
                                    <td><?php echo $status ?></td>



                                    <td>
                                        <center>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalHapus<?php echo $d['id_user']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalEdit<?php echo $d['id_user']; ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></button>


                                        </center>

                                    </td>
                                </tr>

                                <!-- Modal Edit-->

                                <div class="modal fade" id="modalEdit<?php echo $d['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
                                    <?php
                                    $id = $d['id_user'];

                                    $result = mysqli_query($con, "SELECT * FROM users WHERE id_user='$id'");
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>

                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"></button>
                                                    <h5 class="modal-title" id="modalEditLabel">Edit Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="proses_admin/user.php" role="form" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label class="control-label" for="id_user"> ID User </label>
                                                            <input type="text" value="<?php echo $row['id_user'] ?>" name="id_user" class="form-control" id="id_user" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="username"> Username </label>
                                                            <input type="text" value="<?php echo $row['username'] ?>" name="username" class="form-control" id="nama_user" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="nama_lengkap"> Nama Lengkap </label>
                                                            <input type="text" name="nama" value="<?php echo $row['nama_lengkap'] ?>" class="form-control" id="nama_lengkap" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="email_user"> Email User </label>
                                                            <input type="text" name="email" value="<?php echo $row['email'] ?>" class="form-control" id="email_user" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="notelp"> Nomor Telp </label>
                                                            <input type="number" name="notelp" value="<?php echo $row['no_telp'] ?>" class="form-control" id="telp_user" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="notelp"> Alamat</label>
                                                            <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" class="form-control" id="telp_user" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="jenis"> Status</label>
                                                            <select name="status" id="status" class="form-control" required>
                                                                <?php
                                                                if ($row['status'] == 0) {
                                                                    $isi = 'NonAktif';
                                                                } else {
                                                                    $isi = 'Aktif';
                                                                }

                                                                ?>
                                                                <option value="<?php echo $row['status'] ?>"><?php echo $isi ?></option>

                                                                <option value="0">NonAktif</option>
                                                                <option value="1">Aktif</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label" for="notelp"> Password</label>
                                                            <input type="password" name="password" value="<?php echo $row['password'] ?>" class="form-control" id="telp_user" required>
                                                        </div>



                                                    </div>
                                                    <div class="modal-footer">
                                                        <input type="reset" class="btn btn-danger" value="Reset">
                                                        <input type="submit" class="btn btn-success" name="edit" value="Update">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <!-- End  Edit-->
                                <!-- Modal Hapus-->

                                <div class="modal fade" id="modalHapus<?php echo $d['id_user']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalTHapusLabel" aria-hidden="true">
                                    <?php
                                    $id = $d['id_user'];

                                    $result = mysqli_query($con, "SELECT * FROM users WHERE id_user='$id'");
                                    while ($row = mysqli_fetch_array($result)) {
                                    ?>

                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"></button>
                                                    <h5 class="modal-title" id="modalTambahLabel">Hapus Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="proses_admin/user.php" role="form" enctype="multipart/form-data">
                                                    <div class="modal-body">


                                                        <input type="hidden" value="<?php echo $row['id_user'] ?>" name="id_user" class="form-control" id="id_user" readonly>

                                                        <p> Yakin menghapus data dengan user <?php echo $row['username']; ?> </p>
                                                    </div>
                                                    <div class="modal-footer">

                                                        <input type="submit" class="btn btn-success" name="hapus" value="Hapus">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <!-- End  Hapus-->
                                <!-- Modal Large-->


                                <!-- End  Large-->

                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Tambah, Edit, dan Hapus-->
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="modalTambahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"></button>
                    <h5 class="modal-title" id="modalTambahLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="proses_admin/user.php" role="form" enctype="multipart/form-data">
                    <div class="modal-body">
                        <form action="proses/registerProses.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input class="form-control" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomor Telepon</label>
                                <input class="form-control" name="notelp" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                <input class="form-control" name="alamat" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input class="form-control" name="email" type="email" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input class="form-control" name="password" type="password" required>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-danger" value="Reset">
                        <input type="submit" class="btn btn-success" name="add" value="Tambah">
                    </div>
                </form>
            </div>
        </div>
    </div>