<?php
        define('TITLE','Home | AutoWash');
        include 'components/navbar.php';
        include 'includes/array.php';
        if(isset($_GET['item'])){
            $productItem = $_GET['item'];
            $product = $products[$productItem];
        }
    ?>

<link href="css/productTemplate.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<section>
    <div class="container mt-4 pt-1">
        <div class="section-title text-center mt-5 ">
            <h1>Product</h1>
            <p>The way to get started is to quit talking and begin doing.</p>
        </div>
        <br>
        <div class="row">
                <div class="col-md-6">
                    <a href="#" class="image">
                        <img class="pic-1" src="img/product-2.jpg">
                    </a>
                </div>
                
                <div class="col-md-6">
                    <h1 class="productName"><?php echo $product['productName'];?></h1>
                    <br>
                    <h4><strong><?php echo $product['productPrice'];?></strong> /-</h4>
                    <hr>
                    <em><h6><?php echo nl2br($product['productDes']);?></h6></em>
                    <a href="index.php#product" class="btn btn-primary my-2 px-5">Back</a>
                </div>
                

            
        </div>
    </div>
</section>

<?php
        include 'components/footer.php';
    ?>