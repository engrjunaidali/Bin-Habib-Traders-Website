<?php 
define('TITLE','Order Now | AutoWash');
include 'components/navbar.php';?>
<div class="container my-5">
    <div class="row"></div>
</div>
<div class="container mt-5 mb-3">
    <div class="card bg-light my-5 px-5">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-2 text-center">Order Now</h4>
            <p class="text-center message">Change your life today.</p>
            <!-- <p>
                <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
                <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via
                    Facebook</a>
            </p> -->
            <!-- <p class="divider-text">
                <center><span class="bg-light text-center">OR</span></center>
            </p> -->
            <form action="includes/insertOrder.php" method="POST">
                <!-- Name -->
                <!-- <div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="username" class="form-control" placeholder="Full name" type="text" required>
    </div>  -->
                <!-- Email -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email address" type="email">
                </div>
                <!-- Name of Purchaser -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-plus"></i> </span>
                    </div>
                    <input name="nameOfPurchaser" class="form-control" placeholder="Name of Purchaser" type="text">
                </div>
                <!-- Delivery Address -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-address-card"></i> </span>
                    </div>
                    <input name="deliveryAddress" class="form-control" placeholder="Delivery Address" type="text">
                </div>
                <!-- Contact Person -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-address-card"></i> </span>
                    </div>
                    <input name="contectPerson" class="form-control" placeholder="Contact Person" type="text">
                </div>
                <!-- Choose Bottle -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-cubes"> Choose Bottle </i> </span>
                    </div>
                    <select class="form-control" name="chooseBottle" id="">
                        <option>19 liter</option>
                        <option>1.5 liter</option>
                        <option>600 milli liter</option>
                        <option>Plastics</option>
                    </select>
                    <!-- <input name="contectPerson" class="form-control" placeholder="Choose Bottle" type="text"> -->
                </div>
                <!-- Quantity -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-cubes"></i> </span>
                    </div>
                    <!-- <select class="form-control" name="" id="">
                        <option>19 liter</option>
                        <option>1.5 liter</option>
                        <option>600 milli liter</option>
                        <option>Plastics</option>
                    </select> -->
                    <input name="quantity" class="form-control" placeholder="Quantity" type="text">
                </div>

                <!-- Password -->
                <!-- <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="Create password" type="password" name="password">
                </div> -->

                <!-- Button -->
                <div class="form-group">
                    <button type="submit" name="submit_order" class="btn btn-success btn-block"> Submit Order </button>
                </div> <!-- form-group// -->
                <!-- <p class="text-center">Don't have an account? <a href="register.php">Register Now</a> </p> -->
            </form>
        </article>
    </div> <!-- card.// -->
</div>
<!--container end.//-->

<?php include 'components/footer.php';?>