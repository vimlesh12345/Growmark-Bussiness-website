<?php require("./partials/header.php"); ?>
<?php require("./partials/navbar.php"); ?>
<?php require("./db_connect.php"); ?>

<?php 
if(isset($_GET['id'])){
    $id= $_GET['id'];
    $q = "select * from services where id='$id'";
    $result = mysqli_query($conn,$q);
    $data = $result->fetch_assoc();   
}
else{
  echo "<script>location.replace('index.php');</script>" ;
}
?>



<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Service</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="./service.php">Services</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page"><?php echo $data['name'] ?></li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->
 <div class="container my-2">
    <h5 class="text-center fs-3 text-primary mb-4"><?php echo $data['name'] ?></h5>
    <img src="./uploads/services/<?php echo $data['cover'] ?>" height="400px" width="100%" alt="">
    <p class="my-2 " style="text-align:justify;"><?php echo $data['short_description'] ?></p>
    <hr>
    <div class="text-center"><?php echo $data['long_description'] ?> 
    <a href="quote.php" class="btn btn-primary" > Get Quotation</a>
 </div>
 </div>

<?php require("./partials/footer.php"); ?>