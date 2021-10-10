<link rel="stylesheet" href="css/hero.css">
<link rel="stylesheet" href="css/products.css">
<link rel="stylesheet" href="css/plans.css">
<link rel="stylesheet" href="css/team.css">

<?php
    define('TITLE','Home | Bin Habib');

    include 'components/navbar.php'; 

    include 'sections/hero.php';

    include "sections/products.php";

    include "sections/plans.php";
    
    include "sections/team.php";

    include 'components/footer.php';
?>