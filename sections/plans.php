<link rel="stylesheet" href="css/plans.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<section id="pricing" class="pricing-content section-padding" >
	<div class="container" id="plans">					
		<div class="section-title text-center" >
			<h1>Pricing Plan</h1>
			<p>19 Litre Bottle for Office / School / Hospital or any other organization</p>
		</div>					
		<div class="row text-center">
            
        <?php 
            include 'components/navbar.php';
            foreach ($pricePlan as $plan){;
        ?>

			<div class="col-lg-4 col-sm-4 col-xs-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
				<div class="single-pricing">
					<div class="price-head">								
						<h2><?php echo $plan['planName']?></h2>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
					<strike><h3>Rs. <?php echo $plan['planPriceCross']?></h3></strike>
					<h1 class="price">Rs. <?php echo $plan['planPrice']?></h1>
					<h5><?php echo $plan['planDuration']?></h5>
					<br><hr>
					<p><?php echo $plan['adv1']?></p>
					<p><?php echo $plan['adv2']?></p>

					<a href="#">Grab Now</a>
				</div>
			</div><!--- END COL -->	
            <?php };?>
            
		</div><!--- END ROW -->
	</div><!--- END CONTAINER -->
</section>