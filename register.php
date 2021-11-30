<?php
include('header.php');
?>

<style>
  body {
    background-color: #cccccc;
  }
</style>
<div class="container">
  <div class="row" style="margin-top: 10px;">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="panel">
        <div class="panel-heading">
          <center>

            <h4 class="panel-title">Alfref Parcel </h4>
            <p>Silahkan mengisi data untuk mendaftar.</p>
          </center>
        </div>
        <div class="panel-body">
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
            <center>
              <button class="btn btn-primary" type="submit" name="register">Register</button>
              <br>
              <a class="d-block small mt-3" href="login.php">Login</a>
              <br>
              <a class="d-block small mt-3" href="index.php">Kembali</a>
            </center>

          </form>



        </div>
      </div>
    </div>
    <div class="col-md-3"></div>

  </div>


</div>


<?php

include('./footer.php');
?>