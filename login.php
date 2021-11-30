<?php
include('header.php');
?>

<style>
    body {
        background-color: #cccccc;
    }
</style>
<div class="container" style="margin-bottom:100px;">
    <div class="row" style="margin-top: 10px;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <center>

                        <h4 class="panel-title">Alfref Parcel </h4>
                        <p>Silahkan Login.</p>
                    </center>
                </div>
                <div class="panel-body">
                    <form action="proses/loginProses.php" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input class="form-control" name="email" type="email" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input class="form-control" name="password" type="password" required>
                        </div>

                        <center>
                            <div class="form-group">

                                <button type="submit" class="btn btn-default" name="login">Sign in</button>
                            </div>

                            <br>
                            <a class="d-block small mt-3" href="register.php">Register</a>
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