<?php
session_start();



if(isset($_SESSION['id'])){
  $fullname= isset($_SESSION['username']) ? $_SESSION['username'] : false;}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Pricing example · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/pricing/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <?php
      include "include/header.php";
    ?>
    


  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>
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
<div class="container py-3">
  <header>


    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Daftar Harga Master Laundry</h1>
      <hr>
    </div>
  </header>

  <main>
    <div class="container text-center">
    <div class="row">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">	Kilo Laundry Premium</h4>
          </div>
          <div class="card-body">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Jenis</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Self Service CKL (5 KG)</td>
      <td>	30.000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Cuci Kering Lipat (3 KG)</td>
      <td>	25.000</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Cuci Kering Lipat (5 KG)</td>
      <td>35.000</td>
    </tr>
    
  </tbody>
</table>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">	Laundry Satuan</h4>
          </div>
          <div class="card-body">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Jenis</th>
      <th scope="col">Harga</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Bed Cover</td>
      <td>	35.000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Bed Cover Jumbo</td>
      <td>	45.000</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Selimut</td>
      <td>25.000</td>
    </tr>
  </tbody>
</table>
          </div>
        </div>
      </div>
      </div>

      <div class="container text-center">
    <div class="row">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Laundry/Cuci Karpet</h4>
          </div>
          <div class="card-body">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Jenis</th>
      <th scope="col">Total</th>

    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Karpet Rumah/Meter2</td>
      <td>25.000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Karper Masjid/Meter2</td>
      <td>17.500</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Karpet Kantor Tanam/Meter2</td>
      <td>25.000</td>
    </tr>
  </tbody>
</table>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">	Laundry Furniture</h4>
          </div>
          <div class="card-body">
          <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Jenis</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Sofa 1 Dudukan</td>
      <td>100.000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Bantal Sofa</td>
      <td>50.000</td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Sofa Minimalis</td>
      <td>300.000</td>
    </tr>
  </tbody>
</table>
          </div>
        </div>
      </div>
      </div>

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


    
  </body>
</html>

