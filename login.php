<?php require("./partials/header.php"); ?>
<?php require("./partials/navbar.php"); ?>
<?php require("./db_connect.php");?>
<?php

$show = false;
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $q= "select * from users where username='$username' and password='$password'";
    $result=mysqli_query($conn,$q);
    if(mysqli_num_rows($result)==1){
        $row= $result->fetch_assoc();
      $_SESSION['login']=true;
      $_SESSION['name']=$row['username'];
      echo "<script>location.replace('admin/index.php');</script>";
    }
    else{
        $show=true;
    }
}
?>

<div class="container">
    <h5 class="text-light bg-primary text-center p-2"><span class="text-warning">Login </span> to Your Account</h5>
    <?php
                if($show){?>
                   <div class="alert alert-warning text-center alert-dismissible fade show" role="alert">
                    <strong>Fail</strong>Invalid Username or Password
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
                <?php } ?>
   
    <form action="" method="post">
        <div class="mb-3">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="user name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="password" class="form-control">
        </div>
        <div class="mb-3 btn-group w-100">
            <!-- <a href="signup.php" class="btn btn-primary">Signup</a> -->
            <button class="btn btn-warning w-100" type="submit">Login</button>
        </div>
        <a href="forget-password-1" >Forget Password?</a>
    </form>
</div>

<?php require("./partials/footer.php"); ?>