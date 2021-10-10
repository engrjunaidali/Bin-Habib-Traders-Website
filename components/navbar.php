<?php include('includes/array.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE?></title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

    <link rel="stylesheet" href="css/style.css">


    <?php include 'links.php'; ?>

    <link rel="stylesheet" href="components/navbar.css">
    
    
</head>
<body>
<a href="#" id="backtotop"></a>
<!-- Navbar  -->
<div class="myNav">
<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top" id="navbar" style="background-color: var(--themeColor) !important;">
        <div class="container">
            <a href="index.php" class="navbar-brand"><?php echo $portfolio['title'];?><small><sub> <?php echo $portfolio['tagline'];?></sub></small></a>

            <button class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target='#navmenu'>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto smooth-scroll">

                    <?php //include "includes/nav.php"?>

                    <li class="nav-item">
                        <a href="#hero" class="nav-link">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#products" class="nav-link">Products</a>
                    </li>

                    <li class="nav-item">
                        <a href="#plans" class="nav-link">Plans</a>
                    </li>

                    <li class="nav-item">
                        <a href="#team" class="nav-link">Team</a>
                    </li>




                    <li class="nav-item">
                        <a href="#aboutus" class="nav-link">Contact</a>
                    </li>
</ul>
            </div>
        </div>
        
    </nav>
</div>


<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Bin Habib Traders</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

  <?php //include('includes/nav.php');?>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> -->


