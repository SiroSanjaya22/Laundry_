<?php
session_start();



if(isset($_SESSION['id'])){
  $fullname= isset($_SESSION['username']) ? $_SESSION['username'] : false;
?>
<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/index.css">
    <title>Aplikasi Laundry</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/footers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/product/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <?php
      include "include/header.php";
    ?>


  </head>
  <body>


    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
      <a class="navbar-brand" href="#">Laundry</a>
    </div>
  <ul class="nav col-md-5 justify-content-end">
     <?php
        if($_SESSION['id'] == 1){  include "include/list.php";}else{ include "include/list-user.php";} 
      ?>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
    </ul>
  </div>
</nav>
<section class="hero">
      <div class="hero-inner">
        <h1>Silahkan memilih jasa kami </h1>
        <h2>Selamat Datang <?php if($_SESSION['id'] == 1){ echo "Admin";}else{ echo $fullname;} ?></h2>

     </div>
     <div>

  </div>
  </section
  
<div class="container">
    <div class="AboutUs text-center" style="padding:50px;">
  <h1></h1>About Us</h1>
 
  </div>
  <P class="text-center"style="padding-bottom:50px;">Kami adalah Laundry-Master jasa Laundry terpercaya yang terjamin kualitasnya, dengan menawarkan pelayanan-pelayanan yang dirasa efisien untuk pelanggan <br>
    dan memberikan kesan baru dalam memakai jasa laundry, mari kunjungi dan juga bershikan pakaian anda tanpa perlu repot2 datang ke gerai terdekat <br>usaha laundry adalah usaha yang bergerak di bidang jasa cuci dan setrika. Laundry dapat juga diartikan sebagai kegiatan mencuci pakaian
     <br>atau bahan tekstil lainnya dan juga sebagai sebuah tempat untuk mencuci pakaian atau bahan tekstil lainnya.<br>Dry Cleaning. Dry cleaning (cuci kering) adalah metode pencucian tanpa menggunakan air sama sekali.</p>
</div>

</div>

</div>
<main>
 
    <div class="AboutUs text-center">
      <h1 class="display-4 fw-normal">Layanan Kami</h1>
      <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.<br>
      Dry Cleaning. Dry cleaning (cuci kering) adalah metode pencucian tanpa menggunakan air sama sekali.</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
  </div>

  </div>
<main>
<div class="container text-center">
  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Laundry Kiloan</h2>
        <p class="lead">Jasa laundry baju kiloan di ciputat dan sekitarnya, cocok untuk pakaian sehari-hari. Sudah termasuk cuci, gosok dan lipat. Bisa antar-jemput</p>
        <img src="Home.jpg" class="d-block w-100" alt="..."style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      </div>
    </div>
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Laundry Satuan</h2>
        <p class="lead">Jasa laundry satuan seperti kemeja, jas dll.  Sangat cocok untuk pakaian spesial anda. Pengerjaan yang detail, bersih  dengan harga terjangkau.</p>
        <img src="1.png" class="d-block w-100" alt="..."style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
      </div>

    </div>
  </div>
  </div>

  <div class="container text-center">
  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 p-3">
        <h2 class="display-5">Jasa Cuci Karpet</h2>
        <p class="lead">Kami mengerjakan cuci karpet rumah, masjid dan cuci karpet kantor wilayah Jabodetabek, kami siap datang ke lokasi.</p>
      </div>
      <img src="2.jpg" class="d-block w-100" alt="..."style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
    </div>
    <div class="text-bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
      <div class="my-3 py-3">
        <h2 class="display-5">Cuci Sofa & Spring Bed</h2>
        <p class="lead">Kami mengerjakan cuci sofa, kursi kantor, spring bed dll. Khusus jabodetabek kami menerima order laundry panggilan.</p>
      </div>
      <img src="4.jpg" class="d-block w-100" alt="..."style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
    </div>
  </div>
  </div>

</main>



<hr>
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0 text-muted">&copy; 2022 Company, Inc</p>
    

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link  text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link  text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link text-muted">About</a></li>
    </ul>
  </footer>
</div>


</body>
</html>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<?php
}else{
	header("location:login/index.php");
}
