<?php 
    include('includes/array.php');
    include "includes/config.php";
    
    if(!isset($_SESSION)){ 
        session_start(); 
    } 


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE;?></title>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">

    <link rel="stylesheet" href="css/style.css">


    <?php include 'links.php'; ?>

    <link rel="stylesheet" href="components/navbar.css">


</head>

<body>
    <a href="#" id="backtotop"></a>
    <!-- Navbar  -->
    <div class="myNav">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top" id="navbar"
            style="background-color: var(--themeColor) !important;">
            <div class="container">
                <a href="index.php" class="navbar-brand"><?php echo $portfolio['title'];?><small><sub>
                            <?php echo $portfolio['tagline'];?></sub></small></a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target='#navmenu'>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">


                    <?php 
                        
                        if(isset($_SESSION["login"])){        
                    ?>
                    <ul class="navbar-nav mr-auto  smooth-scroll">
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

                    <ul class="navbar-nav">
                        <!-- <a href="#" class="btn btn-outline-primarybtn btn-p"></a> -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $_SESSION["name"];?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item " href="#">
                                    Profile</a>
                                <a class="dropdown-item" href="#">My Orders</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="includes/logout.php">Log Out</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            
                            <!-- <button class="btn btn-outline-primary text-light" name="logout"><a class="nav-link"><?php echo $_SESSION["name"];?></a></button> -->
                        </li>
                        <!-- <li class="nav-item">
                            <button class="btn btn-dark text-light" name="logout"><a class="nav-link"
                                    href="includes/logout.php">Logout</a></button>
                        </li> -->


                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li> -->
                    </ul>

                    <?php
                        } else{  
                    ?>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">Register</a>
                        </li>
                    </ul>

                    <?php                         
                        }
                    ?>

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