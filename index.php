<?php
include('./header.php');
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="https://photo.jpnn.com/arsip/watermark/2021/07/26/ilustrasi-wanita-foto-pixabay-2.jpg" alt="Image">
      <div class="carousel-caption">
        <h3>PENGIRIMAN AMAN</h3>
        <p>aman dan terpercaya</p>
      </div>
    </div>

    <div class="item">
      <img src="https://blog.pinjammodal.id/wp-content/uploads/2020/04/8869-scaled.jpg" alt="Image" sizes="10px">
      <div class="carousel-caption">
        <h3>SANTUN DAN HALUS</h3>
        <p>santun dan halus adalah slogan kami</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container text-center">
  <h3>KERJA SAMA</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <div class="well">
        <img src="https://cf.shopee.co.id/file/5f20e3135128f35db4d92718b209a764" class="img-responsive" style="width:100%;" alt="Image">
        <br>
        <br>
        <p>Shoppy Food</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="well">
        <img src="https://cf.shopee.co.id/file/01fe42217e98d5c0b406cad49bce22ba_tn" class="img-responsive" style="width:100%" alt="Image">
        <br>
        <br>
        <p>Shoppy cod</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="well">
        <img src="https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,f_auto,q_auto:eco,dpr_1/hitobajlkseeivcjy22b" class="img-responsive" style="width:100%" alt="Image">
        <br>
        <br>
        <p>GOBOX</p>
      </div>
    </div>
  </div>
</div><br>

<?php
include('./footer.php');
?>