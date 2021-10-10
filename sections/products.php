<div class="container my-5" id="products">
    <div class="section-title text-center mt-5 ">
        <h1>Products</h1>
        <p>The way to get started is to quit talking and begin doing.</p>
    </div>
	<div class="row equal">

	<?php 
            include 'components/navbar.php';
            foreach ($products as $product=>$item){;
        ?>

		<div class="col-md-3 col-sm-6">
			<div class="product-grid">
				<div class="product-image">
					<a href="productTemplate.php?item=<?php echo $product;?>" class="image">
						<img class="pic-1" src="img/<?php echo $item['productImg'];?>">
					</a>
					<ul class="product-links">
						<!-- <li><a href="#"><i class="fa fa-shopping-bag"></i> Add to cart</a></li> -->
						<li><a href="productTemplate.php?item=<?php echo $product;?>" ><i class="fa fa-search"></i> Quick View</a></li>
					</ul>
				</div>
				<div class="product-content">
					<h3 class="title"><a href="productTemplate.php?item=<?php echo $product;?>" ><?php echo $item['productName'];?></a></h3>
					<div class="price"><?php echo $item['productPrice']?></div>
					<div class="price"><?php echo $item['productPriceEmpty']?></div>
				</div>
				
			</div>
		</div>
		<?php };?>
		
		<!-- <div class="col-md-3 col-sm-6">
			<div class="product-grid">
				<div class="product-image">
					<a href="#" class="image">
						<img class="pic-1" src="images/img-2.jpg">
					</a>
					<span class="product-sale-label">Sale!</span>
					<ul class="product-links">
						<li><a href="#"><i class="fa fa-shopping-bag"></i> Add to cart</a></li>
						<li><a href="#"><i class="fa fa-search"></i> Quick View</a></li>
					</ul>
				</div>
				<div class="product-content">
					<h3 class="title"><a href="#">Women's T-Shirt</a></h3>
					<div class="price"><span>$85.55</span> $71.11</div>
				</div>
			</div>
		</div> -->
	</div>
</div>