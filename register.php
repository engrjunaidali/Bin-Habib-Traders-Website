<?php 
define('TITLE','Register | AutoWash');
include 'components/navbar.php';

// if(isset($_SESSION["login"])){
//     header("location:index.php");
// }
$message = "";
if(isset($_POST["regiter_submit"])){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["name"];
    $role = "member";

	$q = " select * from users where email = '$email'";

	$result = mysqli_query($con, $q);

	$num = mysqli_num_rows($result);

	if($num==1){
		echo 'duplicate data';
		$message = "Email is not available";
	}else{
		$qy = " insert into users(name,email,phone,password,role) values ('$name','$email','$phone','$password','$role')";
		mysqli_query($con,$qy);
		// $message = "Logged in successfully";
		// echo "<script>setTimeout(\"location.href = 'login.php';\",3000);</script>";
		header("location:login.php");
	}

	//  header('location:register.php');

}
?>
<br><br>
<div class="container mt-3 mb-3">
	<div class="row d-flex justify-content-center align-items-center">
		<div class="col-md-6 .d-sm-none">
			<img width="450" height="450" src="img/register.png" class="img-fluid login" alt="login">
		</div>

		<div class="col-md-6">
		<div class="card bg-light py-5">
		<article class="card-body mx-auto" style="max-width: 400px;">
			<h4 class="card-title  text-center">Create Account</h4>
			<p class="text-center mb-5  message"><?php echo $message;?></p>
			<!-- <p class="text-center message">Get started with your free account</p>
			<p>
				<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Register via Twitter</a>
				<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Register via
					Facebook</a>
			</p>
			<p class="divider-text">
				<span class="bg-light text-center">OR</span>
			</p> -->
			<form action="" method="POST">
				<!-- Name -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-user"></i> </span>
					</div>
					<input name="name" class="form-control" placeholder="Full name" type="text" required>
				</div>
				<!-- Email -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
					</div>
					<input name="email" class="form-control" placeholder="Email address" type="email">
				</div>
				<!-- Phone -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-phone"></i> </span>
					</div>

					<input name="phone" class="form-control" placeholder="Phone number" type="text">
				</div>

				<!-- Password -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					</div>
					<input class="form-control" placeholder="Create password" type="password" name="password">
				</div>
				<!-- Repeat Password -->
				<div class="form-group input-group">
					<div class="input-group-prepend">
						<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
					</div>
					<input class="form-control" placeholder="Repeat password" type="password" name="cpassword">
				</div>
				<!-- Button -->
				<div class="form-group">
					<button type="submit" name="regiter_submit" class="btn btn-primary btn-block"> Create Account
					</button>
				</div> <!-- form-group// -->
				<p class="text-center">Have an account? <a href="login.php">Log In</a> </p>
			</form>
		</article>
	</div> <!-- card.// -->
		</div>
	</div>


</div>
<!--container end.//-->

<?php include 'components/footer.php';?>