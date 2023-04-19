<?php
session_start();



if(isset($_SESSION['id'])){
  $fullname= isset($_SESSION['username']) ? $_SESSION['username'] : false;}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="57x57" href="home/img/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="home/img/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="home/img/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="home/img/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="home/img/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="home/img/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="home/img/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="home/img/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="home/img/favicon/apple-touch-icon-180x180.png">
<link rel="icon" type="home/image/png" href="home/img/favicon/favicon-32x32.png" sizes="32x32">


<link rel="stylesheet" type="text/css" href="./asset/css/dataTables.bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="./asset/sweetalert/dist/sweetalert.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <link rel="stylesheet" href="styles/index.css">
    
    <title>Outlet</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/blog/">

    
    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
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

<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>

  

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
      Kontak
      </h3>

      <article class="blog-post">
        <h2 class="blog-post-title mb-1">Laundry Master</h2>
        <h5 class="blog-post-meta">Operasional </h5>
        <h5 class="blog-post-meta">Libur Setiap Hari Jum’at </h5>
        <h5 class="blog-post-meta">Jam 08:00 sd 18:00 </h5>
        <h5 class="blog-post-meta">WhatsApp: 087878-373600</h5>
        <hr>
        <h2>Matahari Laundry Drop Point Aria Putra</h2>
        <blockquote class="blockquote">
        <h5 class="blog-post-meta">Jl. Aria Putra No.14, Serua Indah</h5>
        <h5 class="blog-post-meta">Whatsapp 0812-1060-0505</h5>
        <hr>
        </blockquote>
        <h2 class="blog-post-title mb-1">Laundry Master</h2>
        <h5 class="blog-post-meta">Operasional </h5>
        <h5 class="blog-post-meta">Libur Setiap Hari Jum’at </h5>
        <h5 class="blog-post-meta">Jam 08:00 sd 18:00 </h5>
        <h5 class="blog-post-meta">WhatsApp: 087878-373600</h5>
        <hr>
        <h2 class="blog-post-title mb-1">Laundry Master</h2>
        <h5 class="blog-post-meta">Operasional </h5>
        <h5 class="blog-post-meta">Libur Setiap Hari Jum’at </h5>
        <h5 class="blog-post-meta">Jam 08:00 sd 18:00 </h5>
        <h5 class="blog-post-meta">WhatsApp: 087878-373600</h5>
        <hr>
        <h2 class="blog-post-title mb-1">Laundry Master</h2>
        <h5 class="blog-post-meta">Operasional </h5>
        <h5 class="blog-post-meta">Libur Setiap Hari Jum’at </h5>
        <h5 class="blog-post-meta">Jam 08:00 sd 18:00 </h5>
        <h5 class="blog-post-meta">WhatsApp: 087878-373600</h5>
        <hr>
        <h2 class="blog-post-title mb-1">Laundry Master</h2>
        <h5 class="blog-post-meta">Operasional </h5>
        <h5 class="blog-post-meta">Libur Setiap Hari Jum’at </h5>
        <h5 class="blog-post-meta">Jam 08:00 sd 18:00 </h5>
        <h5 class="blog-post-meta">WhatsApp: 087878-373600</h5>
        <hr>
        <h2 class="blog-post-title mb-1">Laundry Master</h2>
        <h5 class="blog-post-meta">Operasional </h5>
        <h5 class="blog-post-meta">Libur Setiap Hari Jum’at </h5>
        <h5 class="blog-post-meta">Jam 08:00 sd 18:00 </h5>
        <h5 class="blog-post-meta">WhatsApp: 087878-373600</h5>
        <hr>

   

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>



    
  </body>
</html>
