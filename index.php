<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
    $name=$_POST['fullname'];
    $email=$_POST['emailid'];
    $mobileno=$_POST['mobileno'];
    $dscrption=$_POST['description'];
    $query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
    echo "<script>alert('Your information successfully submitted');</script>";
    echo "<script>window.location.href ='index.php'</script>";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HDIMS - Homepage</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>
<body>

<!-- ################# Header #######################--->
<header id="menu-jk">
    <div id="nav-head" class="header-nav wow fadeInDown" data-wow-duration="1s">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-12" style="color:#000;font-weight:bold;font-size:42px;margin-top:1%;">HDIMS
                    <a data-toggle="collapse" data-target="#menu" href="#menu">
                        <i class="fas d-block d-md-none small-menu fa-bars"></i>
                    </a>
                </div>
                <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#about_us">About Us</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#contact_us">Contact Us</a></li>
                        <li><a href="#logins">Logins</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 d-none d-lg-block appoint wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <a class="btn btn-success" href="hms/user-login.php">Book an Appointment</a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- ################# Slider #######################--->
<div class="slider-detail">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item ">
                <img class="d-block w-100" src="assets/images/slider/slider_4.jpg" alt="Second slide">
                <div class="carousel-cover"></div>
                <div class="carousel-caption vdg-cur d-none d-md-block wow fadeInUp" data-wow-duration="1s">
                    <h5 class="animated bounceInDown wow" data-wow-duration="1s" data-wow-delay="0.5s">
                        Health Data Information and Management System
                    </h5>
                </div>
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/slider/slider_5.jpg" alt="Third slide">
                <div class="carousel-cover"></div>
                <div class="carousel-caption vdg-cur d-none d-md-block wow fadeInUp" data-wow-duration="1s">
                    <h5 class="animated bounceInDown wow" data-wow-duration="1s" data-wow-delay="0.5s">
                        Health Data Information and Management System
                    </h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<!-- ################# Logins #######################--->
<section id="logins" style="min-height:70vh; display:flex; align-items:center; background: linear-gradient(to right, #e0f7fa, #ffffff); position:relative; padding:50px 0;">
    <div class="container text-center">

        <!-- Heading -->
        <div class="wow fadeInDown" data-wow-duration="1s">
            <h2 style="font-weight:bold; margin-bottom:10px;">Welcome to HDIMS</h2>
            <p style="font-size:16px; color:#555;">Please login to access your dashboard</p>
        </div>

        <!-- Optional subtle background icon -->
        <div style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); font-size:300px; opacity:0.03; color:#000; z-index:0;">
            <i class="fas fa-hospital"></i>
        </div>

        <!-- Login Card -->
        <div class="row justify-content-center w-100" style="position:relative; z-index:1; margin-top:30px;">
            <div class="col-sm-4 blog-smk wow bounceIn" data-wow-duration="1s">
                <div class="blog-single text-center shadow" style="background:#fff; padding:20px; border-radius:8px;">
                    <img src="assets/images/patient4.jpg" alt="Login" class="img-fluid" style="border-radius:8px;">
                    <div class="blog-single-det" style="margin-top:15px;">
                        <h6 style="font-weight:bold; margin-bottom:10px;">Login</h6>
                        <a href="hms/user-login.php" target="_blank">
                            <button class="btn btn-success btn-sm wow pulse" data-wow-iteration="infinite">Click Here</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ################# Services #######################--->
<section id="services" class="key-features department">
    <div class="container">
        <div class="inner-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>Our Services</h2>
            <p>Take a look at some of our key features</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="single-key">
                    <i class="fas fa-heartbeat"></i>
                    <h5>Cardiology</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.4s">
                <div class="single-key">
                    <i class="fas fa-ribbon"></i>
                    <h5>Orthopaedic</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="single-key">
                    <i class="fab fa-monero"></i>
                    <h5>Neurologist</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="single-key">
                    <i class="fas fa-capsules"></i>
                    <h5>Pharma Pipeline</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="1s">
                <div class="single-key">
                    <i class="fas fa-prescription-bottle-alt"></i>
                    <h5>Pharma Team</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-duration="1s" data-wow-delay="1.2s">
                <div class="single-key">
                    <i class="far fa-thumbs-up"></i>
                    <h5>High Quality treatments</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ################# About Us #######################--->
<section id="about_us" class="about-us">
    <div class="row no-margin">
        <div class="col-sm-6 image-bg no-padding wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s"></div>
        <div class="col-sm-6 abut-yoiu wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.3s">
            <h3>About Our System</h3>
            <?php
            $ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
            while ($row=mysqli_fetch_array($ret)) {
            ?>
                <p><?php echo $row['PageDescription'];?>.</p>
            <?php } ?>
        </div>
    </div>
</section>

<!-- ################# Gallery #######################--->
<div id="gallery" class="gallery">
    <div class="container">
        <div class="inner-title wow fadeInUp" data-wow-duration="1s">
            <h2>Our Gallery</h2>
            <p>View Our Gallery</p>
        </div>
        <div class="row">
            <div class="gallery-filter d-none d-sm-block wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <button class="btn btn-default filter-button" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="hdpe">Dental</button>
                <button class="btn btn-default filter-button" data-filter="sprinkle">Cardiology</button>
                <button class="btn btn-default filter-button" data-filter="spray">Neurology</button>
                <button class="btn btn-default filter-button" data-filter="irrigation">Laboratory</button>
            </div>
            <br/>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                <img src="assets/images/gallery/dental.jpg" class="img-responsive wow zoomIn" data-wow-duration="1s" data-wow-delay="0.4s">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <img src="assets/images/gallery/cardiology.jpg" class="img-responsive wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                <img src="assets/images/gallery/gallery_03.jpg" class="img-responsive wow zoomIn" data-wow-duration="1s" data-wow-delay="0.8s">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">
                <img src="assets/images/gallery/kabir.jpg" class="img-responsive wow zoomIn" data-wow-duration="1s" data-wow-delay="1s">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                <img src="assets/images/gallery/gallery_05.jpg" class="img-responsive wow zoomIn" data-wow-duration="1s" data-wow-delay="1.2s">
            </div>
            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.2s">
                <img src="assets/images/gallery/gallery_06.jpg" class="img-responsive wow zoomIn" data-wow-duration="1s" data-wow-delay="1.4s">
            </div>
        </div>
    </div>
</div>

<!-- ################# Contact Us #######################--->
<section id="contact_us" class="contact-us-single wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
    <div class="row no-margin">
        <div class="col-sm-12 cop-ck wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <form method="post">
                <h2>Contact Form</h2>
                <div class="row cf-ro wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.6s">
                    <div class="col-sm-3"><label>Enter Name :</label></div>
                    <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required></div>
                </div>
                <div class="row cf-ro wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.7s">
                    <div class="col-sm-3"><label>Email Address :</label></div>
                    <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm" required></div>
                </div>
                <div class="row cf-ro wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.8s">
                    <div class="col-sm-3"><label>Mobile Number:</label></div>
                    <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required></div>
                </div>
                <div class="row cf-ro wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.9s">
                    <div class="col-sm-3"><label>Enter Message:</label></div>
                    <div class="col-sm-8">
                        <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                    </div>
                </div>
                <div class="row cf-ro wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                        <button class="btn btn-success btn-sm wow tada" data-wow-iteration="1" type="submit" name="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- ################# Footer #######################--->
<footer class="footer wow fadeInUp" data-wow-duration="1s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <h2>Useful Links</h2>
                <ul class="list-unstyled link-list">
                    <li><a href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#services">Services</a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#logins">Logins</a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                    <li><a href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-12 map-img">
                <h2>Contact Us</h2>
                <address class="md-margin-bottom-40">
                    <?php
                    $ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
                    while ($row=mysqli_fetch_array($ret)) {
                    ?>
                        <?php echo $row['PageDescription'];?> <br>
                        Phone: <?php echo $row['MobileNumber'];?> <br>
                        Email: <a href="mailto:<?php echo $row['Email'];?>" class=""><?php echo $row['Email'];?></a><br>
                        Timing: <?php echo $row['OpenningTime'];?>
                    <?php } ?>
                </address>
            </div>
        </div>
    </div>
</footer>
<div class="copy">
    <div class="container">
        <center>Health Data Information and Management System</center>
    </div>
</div>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="assets/js/script.js"></script>
</body>
</html>
