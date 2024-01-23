<?php require("./partials/header.php"); ?>
<?php require("./partials/navbar.php"); ?>
<?php require("./db_connect.php");?>
<?php
$show = false;
$message = "";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $conpassword=$_POST['conpassword'];

    if($password==$conpassword){
     $q = "select * from users where username = '$username'";
     $result = mysqli_query($conn,$q);
     if(mysqli_num_rows($result)==1){
        $show = true;
        $message = "Username Already Taken!!!";
 
     }
     else{
        $q="insert into users(username,email,phone,password) values('$username','$email','$phone','$password')";
        mysqli_query($conn,$q);
       echo "<script>location.replace(index.php);</script>";
    }
    }
    else{
        $show = true;
        $message = "Password And Confirm Password Doesn't Match";
    }
}
?>

<div class="container">
    <h5 class="text-light bg-primary text-center p-2"><span class="text-warning">Create </span> an Account</h5>
    <?php
                if($show){?>
                   <div class="alert alert-warning text-center alert-dismissible fade show" role="alert">
  <?php echo $message; ?> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
                <?php } ?>
   
    <form action="" method="post">
        <div class="row">
        <div class="col-md-6 mb-3">
            <label for="fname">First Name</label>
            <input type="text" name="username" placeholder="first name" class="form-control">
        </div>
        
        </div>
        <div class="row">
        <div class="col-md-6 mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="email" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label for="phone">Phone</label>
            <input type="phone" name="phone" placeholder="phone number" class="form-control">
        </div>
        </div>
        <div class="row">
        <div class="col-md-6 mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="password" class="form-control">
        </div>
        <div class="col-md-6 mb-3">
            <label for="conpassword">Confirm Password</label>
            <input type="password" name="conpassword" placeholder="confirm password" class="form-control">
        </div>
        </div>
        <div class="mb-3 btn-group w-100">
            <a href="login.php" class="btn btn-warning">Login</a>
            <button class="btn btn-primary" type="submit">SignUP</button>
        </div>
       
    </form>
</div>

<?php require("./partials/footer.php"); ?>