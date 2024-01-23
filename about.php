<?php require("./partials/header.php"); ?>
<?php require("./partials/navbar.php"); ?>
<?php require("./db_connect.php"); 

$show=false;
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $q="insert into contactus(name,email,phone,subject,message) values('$name','$email','$phone','$subject','$message')";
    mysqli_query($conn,$q);
    $show=true;
}
?>

<?php
$q = "select * from team order by id limit 4";
$team = mysqli_query($conn,$q);



?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-4 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInUp">About Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="./project.php">Project</a></li>
                <li class="breadcrumb-item text-primary" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            
            <h1 class="display-6">The Best Marketing Agency to Improve Your Business</h1>
            </div>
<div class="container-xxl about mb-5 my-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6">
                <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                    <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-white rounded-top p-5 mt-lg-5">
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                        diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="img/icon/icon-5.png" alt="">
                            <h5 class="mb-3">Managed Services</h5>
                            <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="img/icon/icon-2.png" alt="">
                            <h5 class="mb-3">Dedicated Experts</h5>
                            <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                        </div>
                    </div>
                    <a class="btn btn-primary rounded-pill py-3 px-5" href="">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->

<!-- something new -->
<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium text-primary">About Us</p>
            <h1 class="display-8 mb-5">Why our company is Popular Some Point Mention Below!</h1>
        </div>
<div class="container">
    <div class="row my-5">
        <div class="col-md-6 ">
            <h4 class="text-primary"> 1. Establish a mission statement.</h4>
            <p style="height: 100px; margin-bottom:50px;">Your about page can and will be more comprehensive than a single mission statement. However, to draw people in, you need to succinctly state your goal in the industry up front.

What is your business here to do? Why should your website visitors care? This information will give the reader something to remember about your company long after they leave your website.</p>
       <h4 class="text-primary">3.Our Story (History)</h4>
       <p style="height: 100px; ">Every business has an origin story worth telling, and usually, one that justifies why you even do business and have clients.

Some centennial enterprises have pages of content that can fit in this section, while startups can tell the story of how the company was born, its challenges, and its vision for the future.</p>
</div>
        <div class="col-md-6 ">
            <h4 class="text-primary">2. Outline your company story.</h4>
            <p style="height: 100px; margin-bottom:50px;">Every business has a story to tell. Even if you’re running a startup with a brief history, you’ll want to share your company’s progress. Talk about how you got to where you are today on your about page.

</p>  
       <h4 class="text-primary">4.Your Services (And Benefits)
</h4>
       <p style="height: 100px;">Of course, you have a homepage and dedicated pages for your products, but summarizing your offerings on the About Us page is crucial to tie them in with brand values in your messaging.

Highlight the benefits and showcase what you do (and why it is unique).

</p>
        </div>
    </div>
</div>
<!-- end -->

<!-- Team Start -->
<div class="container-xxl ">
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

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            
            
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5 mb-5">If You Have Any Query, Please Contact Us</h1>
                <?php
                if($show){?>
                   <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
  <strong>Thank You!</strong> Your Query Has Been Recieved. Our Team Will Contact You Soon. 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
                <?php } ?>
                <form action="" method="post">
                    <div class="row g-3">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="phone" class="form-control" name="phone" placeholder="Your phone Number">
                                <label for="name">Your Phone Number</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" name="message" style="height: 200px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary rounded-pill py-3 px-5 w-100"
                             type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h3 class="mb-4">Contact Details</h3>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Our Office</h6>
                        <span>123 Street,Noida,India</span>
                    </div>
                </div>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Call Us</h6>
                        <span><a href="tel:9045041670">9045041670</a></span>
                    </div>
                </div>
                <div class="d-flex border-bottom-0 pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                        <i class="fa fa-envelope text-white"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Mail Us</h6>
                        <span><a href="mailto:vimleshdax@gmail.com">vimleshdax@gmail.com</a></span>
                    </div>
                </div>
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="100%" height="350px"
                     id="gmap_canvas" src="https://maps.google.com/maps?q=a-43%20sector%2016%20noida&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                     frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
                
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



<?php require("./partials/footer.php"); ?>