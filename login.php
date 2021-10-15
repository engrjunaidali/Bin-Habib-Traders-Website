<?php 
define('TITLE','Login | AutoWash');
include 'components/navbar.php';
include 'includes/config.php';

$message = ""; $class="";
if(isset($_POST["login_submit"])){

    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $q = " select * from users where email = '$email' && password ='$password' ";

    $result = mysqli_query($con, $q);

    $num = mysqli_num_rows($result);

    if($num==1){
        
        while($row = mysqli_fetch_assoc($result)){
            $name = $row["name"];
        }
        $_SESSION["name"]=$name;

        $_SESSION["login"] = "1";
        // header("location:index.php");
        $message = "Logged in successfully";
        $class="success";
		echo "<script>setTimeout(\"location.href = 'index.php';\",1000);</script>";

        
    }else{
        $message = "Please try again.";
        $class="danger";
        echo "<script>setTimeout(\"location.href = 'login.php';\",1000);</script>";

    }

}


?>

<link rel="stylesheet" href="css/login.css">
<div class="container my-5">
    <br>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-6 .d-md-none">
            <img width="450" height="450" src="img/login.png" class="img-fluid login" alt="login">
        </div>
        <div class="col-md-6" >
            <div class="card bg-light py-5 ">
                <article class="card-body mx-auto" style="max-width: 400px;">
                    <h4 class="card-title mb-5 text-center">Login</h4>
                    <div class="alert alert-<?php echo $class;?>" role="alert">
                        <?php echo $message;?>
                    </div>
                    <!-- <p>
                <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
                <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via
                    Facebook</a>
            </p>
            <p class="divider-text">
                <center><span class="bg-light text-center">OR</span></center>
            </p> -->
                    <form action="login.php" method="POST">

                        <!-- Email -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="email" class="form-control" placeholder="Email address" type="email">
                        </div>

                        <!-- Password -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input class="form-control" placeholder="Create password" type="password" name="password">
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <button type="submit" name="login_submit" class="btn btn-primary btn-block"> Login </button>
                        </div> <!-- form-group// -->
                        <p class="text-center">Don't have an account? <a href="register.php">Register Now</a> </p>
                    </form>
                </article>
            </div> <!-- card.// -->

        </div>
    </div>

</div>
<!--container end.//-->

<?php include 'components/footer.php';?>