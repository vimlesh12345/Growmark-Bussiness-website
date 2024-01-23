<?php require("./partials/header.php"); ?>
<?php require("./partials/navbar.php"); ?>
<?php require("./db_connect.php");?>

<?php
$q = "select * from team order by id limit 4";
$team = mysqli_query($conn,$q);



?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5  wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Our Team</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="./project.php">Project</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">Our Team</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">Our Team</p>
            <h1 class="display-5 mb-5">Our Expert People Ready to Help You</h1>
        </div>
        <div class="row g-4">
        <?php while($row=$team->fetch_assoc()) {?>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="./uploads/team/<?php echo $row['pic'] ?>"
                         style="height: 300px; width:100%"  alt="">
                        <h5><?php echo $row['name'] ?></h5>
                        <span class="text-primary"><?php echo $row['profile'] ?></span>
                        
                    </div>
                </div>
                <?php }?>
            
        </div>
    </div>
</div>
<!-- Team End -->


<?php require("./partials/footer.php"); ?>