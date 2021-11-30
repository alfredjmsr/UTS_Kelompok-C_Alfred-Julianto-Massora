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
            <li class="breadcrumb-item active">Transaksi</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-10">
                        <i class="fa fa-table"></i> Data Table Transaksi
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
                                <th>Nama</th>
                                <th>Nomor Telpon</th>
                                <th>Jenis</th>
                                <th>Berat</th>
                                <th>Harga</th>
                                <th>Tanggal</th>

                                <th width="100">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $no = 1;
                            $data = mysqli_query($con, "select * from transaksi");
                            while ($d = mysqli_fetch_assoc($data)) {

                                //////selesai disni  
                            ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $d['nama']; ?></td>
                                    <td><?php echo $d['no_telp']; ?></td>
                                    <td><?php echo $d['jenis_barang']; ?></td>
                                    <td><?php echo $d['berat']; ?></td>
                                    <td><?php echo $d['harga']; ?></td>
                                    <td><?php echo $d['tanggal']; ?></td>




                                    <td>
                                        <center>
                                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalHapus<?php echo $d['id_transaksi']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modalEdit<?php echo $d['id_transaksi']; ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></button>


                                        </center>

                                    </td>
                                </tr>

                                <!-- Modal Edit-->

                                <div class="modal fade" id="modalEdit<?php echo $d['id_transaksi']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalEditLabel" aria-hidden="true">
                                    <?php
                                    $id = $d['id_transaksi'];

                                    $result = mysqli_query($con, "SELECT * FROM transaksi WHERE id_transaksi='$id'");
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
                                                <form method="POST" action="proses_admin/pesan.php" role="form" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label class="control-label" for="id_user"> ID Transaksi </label>
                                                            <input type="text" value="<?php echo $row['id_transaksi'] ?>" name="id_transaksi" class="form-control" id="id_user" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="username"> Nama </label>
                                                            <input type="text" value="<?php echo $row['nama'] ?>" name="nama" class="form-control" id="nama_user" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="nama_lengkap"> Nomor Telepon</label>
                                                            <input type="number" name="telp" value="<?php echo $row['no_telp'] ?>" class="form-control" id="nama_lengkap" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="email_user"> Jenis Barang </label>
                                                            <input type="text" name="jenis" value="<?php echo $row['jenis_barang'] ?>" class="form-control" id="email_user" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="notelp"> Berat Barang/Kg</label>
                                                            <input type="number" name="berat" value="<?php echo $row['berat'] ?>" class="form-control" id="telp_user" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="notelp"> Tanggal</label>
                                                            <input type="date" name="tanggal" value="<?php echo $row['tanggal'] ?>" class="form-control" id="telp_user" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label" for="notelp"> Harga</label>
                                                            <input type="number" value="<?php echo $row['harga'] ?>" class="form-control" id="telp_user" readonly>
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

                                <div class="modal fade" id="modalHapus<?php echo $d['id_transaksi']; ?>" tabindex="-1" role="dialog" aria-labelledby="modalTHapusLabel" aria-hidden="true">
                                    <?php
                                    $id = $d['id_transaksi'];

                                    $result = mysqli_query($con, "SELECT * FROM transaksi WHERE id_transaksi='$id'");
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
                                                <form method="POST" action="proses_admin/pesan.php" role="form" enctype="multipart/form-data">
                                                    <div class="modal-body">


                                                        <input type="hidden" value="<?php echo $row['id_transaksi'] ?>" name="id_transaksi" class="form-control" id="id_user" readonly>

                                                        <p> Yakin menghapus data dengan id <?php echo $row['id_transaksi']; ?> </p>
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
                <form method="POST" action="proses_admin/pesan.php" role="form" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label class="control-label" for="username"> Nama </label>
                            <input type="text" name="nama" class="form-control" id="nama_user" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="nama_lengkap"> Nomor Telepon</label>
                            <input type="number" name="telp" class="form-control" id="nama_lengkap" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email_user"> Jenis Barang </label>
                            <input type="text" name="jenis" class="form-control" id="email_user" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="notelp"> Berat Barang/Kg</label>
                            <input type="number" name="berat" class="form-control" id="telp_user" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="notelp"> Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" id="telp_user" required>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <input type="reset" class="btn btn-danger" value="Reset">
                        <input type="submit" class="btn btn-success" name="add" value="Update">
                    </div>
                </form>
            </div>
        </div>
    </div>