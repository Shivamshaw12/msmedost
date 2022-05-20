<?php include "assets/inc/header.php" ?>


<?php
include_once('connection.php');
$busi_query = "SELECT * FROM `business`";
$cele_query = "SELECT * FROM `celebration`";
$main_query = "SELECT * FROM `maintenance`";
$other_query = "SELECT * FROM `other`";
$reg_query = "SELECT * FROM `registration`";



$busi_result = mysqli_query($con, $busi_query);
$cele_result = mysqli_query($con, $cele_query);
$main_result = mysqli_query($con, $main_query);
$other_result = mysqli_query($con, $other_query);
$reg_result = mysqli_query($con, $reg_query);
?>
<style>
    video {
        width: 95%;
        height: 70%;
    }

    .form-check-inline .form-check-input {
        position: absolute;
    }

    .fle {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        margin: auto;
    }

    .call,
    .book1,
    .btnshow,
    .btnshow1,
    .add,
    #other,
    .category {
        display: none;
    }

    .left-text p{
        text-align: justify;
    }
</style>

<!-- banner -->
<div id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>

        </ol>

        <div class="carousel-inner">

            <a href="index.php#contact-us">

                <div class="carousel-item active">
                    <img src="assets/images/6.png" class="d-block w-100" alt="..." style="height: 70vh;">

                </div>

                <div class="carousel-item">
                    <img src="assets/images/7.png" class="d-block w-100" alt="..." style="height: 70vh;">

                </div>


                <div class="carousel-item">
                    <img src="assets/images/8.png" class="d-block w-100" alt="..." style="height: 70vh;">

                </div>


                <div class="carousel-item">
                    <img src="assets/images/10.png" class="d-block w-100" alt="..." style="height: 70vh;">


                </div>


                <div class="carousel-item">
                    <img src="assets/images/12.png" class="d-block w-100" alt="..." style="height: 70vh;">

                </div>


                <div class="carousel-item">
                    <img src="assets/images/11.png" class="d-block w-100" alt="..." style="height: 70vh;">


                </div>
            </a>


        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev" style="opacity: 0;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next" style="opacity: 0;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>




    </div>
</div>



<!-- ***** Features Small Start ***** -->
<section class="section home-feature">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="assets/images/expert.jpg" alt=""></i>
                            </div>
                            <h5 class="features-title">Expert Professionals</h5>
                            <p>Expert Professionals are dedicated to providing best guidance</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="assets/images/nvm.png" alt=""></i>
                            </div>
                            <h5 class="features-title">No Middle Vendor</h5>
                            <p>We directly connect customer and vendor to minimize cost</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="assets/images/guidance.jpg" alt=""></i>
                            </div>
                            <h5 class="features-title">Ultimate guidance</h5>
                            <p>You just have to tell your problem we will provide you the servivces required</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Small End ***** -->



<div class="container">
    <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
            <!-- <div class="col-md-6 py-5 wow fadeInLeft"> -->
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                <div class="left-heading">
                    <h2 class="section-title">Let’s get the work done</h2>
                </div>
                <div class="left-text">
                    <p>We have all kinds of solutions to your problem. Lets us know what you want by filling the form below.</p>
                </div>
                <div class="left-heading">
                    <h2 class="section-title">We can help you with all kinds of services</h2>
                </div>
                <div class="left-text">
                    <p>Services like AC service & repair, computer/ laptop repair, CCTV installation, T-shirt manufacturing, florist, cake shop, Ro service, website, software, graphic design, etc.</p>
                </div>
            </div>
            <!-- </div> -->
            <div class="col-md-6 py-5 wow zoomIn">
                <video controls id="myvideo" autoplay>
                    <source src="services_info/videos/msmedost.mp4" type="video/mp4">
                    <source src="movie.ogg" type="video/ogg">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

    </div>
</div>

<!-- ***** Features Big Item Start ***** -->
<!-- <section class="section padding-top-70 padding-bottom-0" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                <div class="left-heading">
                    <h2 class="section-title">Let’s get the work done</h2>
                </div>
                <div class="left-text">
                    <p>We have all kinds of solutions to your problem. Lets us know what you want by filling the form below.</p>
                </div>

                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hr"></div>
            </div>
        </div>
    </div>
</section> -->
<!-- ***** Features Big Item End ***** -->

<!-- ***** Features Big Item Start ***** -->
<!-- <section class="section padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                <div class="left-heading">
                    <h2 class="section-title">We can help you with all kinds of services</h2>
                </div>
                <div class="left-text">
                    <p>Services like AC service & repair, computer/ laptop repair, CCTV installation, T-shirt manufacturing, florist, cake shop, Ro service, website, software, graphic design, etc.</p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <img src="assets/images/right-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
        </div>
    </div>
</section> -->
<!-- ***** Features Big Item End ***** -->



<i class="fa-solid fa-album"></i>

<!-- ***** Home Parallax Start ***** -->
<section class="mini" id="work-process">
    <div class="mini-content">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <div class="info">
                        <h1>Registration and Compliance Services</h1>
                    </div>
                </div>
            </div>



            <!-- ***** Mini Box Start ***** -->
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/identity.jpg" alt=""></i>
                        <strong>FORMATION/ REGISTRATION OF ENTITY</strong>

                        <a href="services_info/entity.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/trademark.jpg" alt=""></i>
                        <strong>TRADEMARK</strong>

                        <a href="services_info/trademark.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/roc.png" alt=""></i>
                        <strong>ROC/ LLP (MCA) SERVICES</strong>

                        <a href="services_info/roc.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>

                    </div>
                </div>





                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/accounting.png" alt=""></i>
                        <strong>ACCOUNTS OUTSOURCING</strong>

                        <a href="services_info/account.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/gst.png" alt=""></i>
                        <strong>GST SERVICES</strong>

                        <a href="services_info/gst.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/tax.jpg" alt=""></i>
                        <strong>INCOME TAX SERVICES</strong>

                        <a href="services_info/tax.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>




                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/msme.png" style="width: 200px; background:transparent;" alt=""></i>
                        <strong>MSME</strong>

                        <a href="services_info/msme.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/dgft.jpg" style="width: 200px;" alt=""></i>
                        <strong>Import Export Code</strong>

                        <a href="services_info/import_code.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/gem.png" style="width: 250px; " alt=""></i>
                        <strong>GEM</strong>

                        <a href="services_info/gem.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>




                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/nsic.png" alt=""></i>
                        <strong>NSIC</strong>

                        <a href="services_info/nsic.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/lawyer.png" alt=""></i>
                        <strong>LAWYER</strong>

                        <a href="services_info/lawyer.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/iso.jpg" alt=""></i>
                        <strong>ISO</strong>

                        <a href="services_info/iso.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>





                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/loan.png" alt=""></i>
                        <strong>LOAN</strong>

                        <a href="services_info/loan.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/copyright.jpg" alt=""></i>
                        <strong>COPYRIGHT</strong>

                        <a href="services_info/copyright.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/payroll.png" alt=""></i>
                        <strong>PAYROLL PROCESSING</strong>

                        <a href="services_info/payroll.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/patent.jpg" alt=""></i>
                        <strong>PATENT</strong>

                        <a href="services_info/patent.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/license.jpg" alt=""></i>
                        <strong>TRADE LICENSE</strong>

                        <a href="services_info/trade.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/tally.png" alt=""></i>
                        <strong>TALLY</strong>

                        <a href="services_info/tally.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/professional_tax.png" alt=""></i>
                        <strong>PROFESSIONAL TAX</strong>

                        <a href="services_info/professional_tax.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/drug.jpg" alt=""></i>
                        <strong>DRUG LICENSE</strong>

                        <a href="services_info/drug.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/fssai.png" alt=""></i>
                        <strong>FSSAI/ FOOD LICENSE</strong>

                        <a href="services_info/fssai.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/liquor.jpg" alt=""></i>
                        <strong>LIQUOR LICENSE</strong>

                        <a href="services_info/liquor.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/signature.png" alt=""></i>
                        <strong>DIGITAL SIGNATURE</strong>

                        <a href="services_info/signature.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>


                <?php while ($rows = mysqli_fetch_assoc($reg_result)) {
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div href="#contact-us" class="mini-box">
                            <i><?php echo '<img src="data:image;base64,' . base64_encode($rows['icon']) . ' " alt="image" >' ?></i>
                            <strong><?php echo $rows['name']; ?></strong>

                            <a href="services_info/insurance.php" class="btn btn-primary">Read More</a>
                            <a href="#contact-us" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                <?php
                }
                ?>


            </div>
            <!-- ***** Mini Box End ***** -->








            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <div class="info">
                        <h1>Business Development Services</h1>
                    </div>
                </div>
            </div>

            <!-- ***** Mini Box Start ***** -->


            <div class="row ">
                <div class="col-lg-4 col-md-4 col-sm-12 " style="margin: auto;">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/manpower.jpg" alt=""></i>
                        <strong>MAN POWER HIRING</strong>

                        <a href="services_info/man_power.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/website.jpg" alt=""></i>
                        <strong>WEBSITE</strong>

                        <a href="services_info/website.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/graphic.jpg" alt=""></i>
                        <strong>GRAPHIC DESIGN</strong>

                        <a href="services_info/graphic.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/video.png" alt=""></i>
                        <strong>VIDEO EDITOR</strong>

                        <a href="services_info/video.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>

                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/social.png" alt=""></i>
                        <strong>SOCIAL MEDIA MANAGEMENT</strong>

                        <a href="services_info/social.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>

                    </div>
                </div>


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/software.jpg" alt=""></i>
                        <strong>SOFTWARE</strong>

                        <a href="services_info/software.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

                <?php while ($rows = mysqli_fetch_assoc($busi_result)) {
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div href="#contact-us" class="mini-box">
                            <i><?php echo '<img src="data:image;base64,' . base64_encode($rows['icon']) . ' " alt="image" >' ?></i>
                            <strong><?php echo $rows['name']; ?></strong>

                            <a href="services_info/insurance.php" class="btn btn-primary">Read More</a>
                            <a href="#contact-us" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                <?php
                }
                ?>



            </div>










            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <div class="info">
                        <h1>Maintenance Services</h1>
                    </div>
                </div>
            </div>




            <!-- ***** Mini Box Start ***** -->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="mini-box">
                        <i><img src="assets/images/ac.jpg" alt=""></i>
                        <strong>AC SERVICE & REPAIR </strong>

                        <a href="services_info/ac.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>

                    </div>



                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/computer.jpg" alt=""></i>
                        <strong>COMPUTER/ LAPTOP REPAIR</strong>
                        <a href="services_info/computer.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/cctv.jpg" alt=""></i>
                        <strong>CCTV INSTALLATION</strong>

                        <a href="services_info/cctv.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>



                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/chair.png" alt=""></i>
                        <strong>CHAIR REPAIR</strong>

                        <a href="services_info/chair.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/ro.png" alt=""></i>
                        <strong>RO SERVICE</strong>

                        <a href="services_info/ro.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>

                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/biometric.jpg" alt=""></i>
                        <strong>BIOMETRIC DEVICE</strong>

                        <a href="services_info/biometric.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>

                    </div>
                </div>

                <?php while ($rows = mysqli_fetch_assoc($main_result)) {
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div href="#contact-us" class="mini-box">
                            <i><?php echo '<img src="data:image;base64,' . base64_encode($rows['icon']) . ' " alt="image" >' ?></i>
                            <strong><?php echo $rows['name']; ?></strong>

                            <a href="services_info/insurance.php" class="btn btn-primary">Read More</a>
                            <a href="#contact-us" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                <?php
                }
                ?>



            </div>
            <!-- ***** Mini Box End ***** -->








            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <div class="info">
                        <h1>Celebrations Services</h1>
                    </div>
                </div>
            </div>





            <!-- ***** Mini Box Start ***** -->
            <div class="row">


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/florist.jpg" alt=""></i>
                        <strong>FLORIST</strong>

                        <a href="services_info/flower.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/cake.jpg" alt=""></i>
                        <strong>CAKE SHOP</strong>

                        <a href="services_info/cake.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/tshirt.jpg" alt=""></i>
                        <strong>PROMO T-SHIRT</strong>

                        <a href="services_info/tshirt.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/uniform.png" alt=""></i>
                        <strong>UNIFORM MANUFACTURE</strong>

                        <a href="services_info/uniform.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/photographer.png" alt=""></i>
                        <strong>PHOTOGRAPHER</strong>

                        <a href="services_info/photographer.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/interior_design.jpg" alt=""></i>
                        <strong>INTERIOR DESIGNER</strong>

                        <a href="services_info/interior.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>

                    </div>
                </div>



                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/event.png" alt=""></i>
                        <strong>EVENT PLANNER</strong>

                        <a href="services_info/event.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>

                    </div>
                </div>


                <?php while ($rows = mysqli_fetch_assoc($cele_result)) {
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div href="#contact-us" class="mini-box">
                            <i><?php echo '<img src="data:image;base64,' . base64_encode($rows['icon']) . ' " alt="image" >' ?></i>
                            <strong><?php echo $rows['name']; ?></strong>

                            <a href="services_info/insurance.php" class="btn btn-primary">Read More</a>
                            <a href="#contact-us" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                <?php
                }
                ?>


            </div>
            <!-- ***** Mini Box End ***** -->







            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <div class="info">
                        <h1>Other Services</h1>
                    </div>
                </div>
            </div>


            <!-- ***** Mini Box Start ***** -->
            <div class="row">


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/pf_logo.png" alt=""></i>
                        <strong>PF WITHDRAWAL</strong>

                        <a href="services_info/pf.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/insurance_dis.png" alt=""></i>
                        <strong>INSURANCE DISPUTE</strong>

                        <a href="services_info/insurance_dis.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>

                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div href="#contact-us" class="mini-box">
                        <i><img src="assets/images/insurance.png" alt=""></i>
                        <strong>INSURANCE</strong>

                        <a href="services_info/insurance.php" class="btn btn-primary">Read More</a>
                        <a href="#contact-us" class="btn btn-primary">Book Now</a>
                    </div>
                </div>

                <?php while ($rows = mysqli_fetch_assoc($other_result)) {
                ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div href="#contact-us" class="mini-box">
                            <i><?php echo '<img src="data:image;base64,' . base64_encode($rows['icon']) . ' " alt="image" >' ?></i>
                            <strong><?php echo $rows['name']; ?></strong>

                            <a href="services_info/insurance.php" class="btn btn-primary">Read More</a>
                            <a href="#contact-us" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                <?php
                }
                ?>
















            </div>
            <!-- ***** Mini Box End ***** -->











        </div>
    </div>
</section>
<!-- ***** Home Parallax End ***** -->

<!-- ***** Testimonials Start ***** -->
<!-- <section class="section" id="testimonials">
        <div class="container"> -->
<!-- ***** Section Title Start ***** -->
<!-- <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">What do our customers says?</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>One of the best all-in-one service platform</p>
                    </div>
                </div>
            </div> -->
<!-- ***** Section Title End ***** -->

<!-- <div class="row"> -->
<!-- ***** Testimonials Item Start ***** -->
<!-- <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i class="fa-solid fa-circle-user"></i>
                            <p>One of the best all-in-one service platform in india. Every service under one umbrella is a great to have thing. But there must be a standard price.</p>
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">Pankaj Sharma</h3>
                                <span>Managing Director</span>
                            </div>
                        </div>
                    </div>
                </div> -->
<!-- ***** Testimonials Item End ***** -->

<!-- ***** Testimonials Item Start ***** -->
<!-- <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i class="fa-solid fa-circle-user"></i>
                            <p>Thank you brand for Given me a amazing service. I am completely satisfied with your service. The vendor has come and The issue was resolved.</p>
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">sahil shekhar</h3>
                                <span>Digital Marketer</span>
                            </div>
                        </div>
                    </div>
                </div> -->
<!-- ***** Testimonials Item End ***** -->

<!-- ***** Testimonials Item Start ***** -->
<!-- <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-item">
                        <div class="team-content">
                            <i class="fa-solid fa-circle-user fa-10x"></i>
                            <p>Happy that we could get the vendors contact numbers immediately with your service. Also ve ndors themselves call us as they also get our details.</p>
                            <div class="user-image">
                                <img src="http://placehold.it/60x60" alt="">
                            </div>
                            <div class="team-info">
                                <h3 class="user-name">Abhishek Shaw</h3>
                                <span>Website Manager</span>
                            </div>
                        </div>
                    </div>
                </div> -->
<!-- ***** Testimonials Item End ***** -->
</div>
</div>
</section>
<!-- ***** Testimonials End ***** -->



<!-- ***** Counter Parallax Start ***** -->
<!-- <section class="counter">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="count-item decoration-bottom">
                            <strong>63</strong>
                            <span>Projects</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="count-item decoration-top">
                            <strong>126</strong>
                            <span>Happy Clients</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="count-item">
                            <strong>8</strong>
                            <span>Awards Wins</span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section> -->
<!-- ***** Counter Parallax End ***** -->



<!-- ***** Contact Us Start ***** -->
<section class="section colored" id="contact-us">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">Book a service</h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p>Fill out this form and our team will connect with you as soon as possible.(* marked are compulsory field)</p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">


            <!-- ***** Contact Form Start ***** -->






            <div class="fle">
                <div class="form-check " onclick="call()" style="padding-right: 20px;">
                    <input class="form-check-input " type="radio" name="radio" id="inlineRadio1" value="call">
                    <label class="form-check-label" for="exampleRadios1">
                        Request a call
                    </label>
                </div>
                <div class="form-check " onclick="book1()">
                    <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="book">
                    <label class="form-check-label" for="exampleRadios2">
                        Book a service
                    </label>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="contact-form">


                    <form action="to_customer.php " method="post" id="contact">
                        <div class="row">


                            <div class="col-lg-12 col-md-12 col-sm-12  call">
                                <fieldset>
                                    <input name="name1" type="text" class="form-control" id="name" placeholder="Full Name *" required>

                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12  call">
                                <fieldset>
                                    <input name="email1" type="email" class="form-control" id="email" placeholder="E-Mail Address">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12  call">
                                <fieldset>
                                    <input name="phone1" type="number" class="form-control" id="phone" placeholder="Phone Number *" required>

                                </fieldset>
                            </div>
                            <div class="col-12 call">
                                <fieldset>
                                    <input name="city1" type="text" class="form-control" id="city" placeholder="Locality/ City">
                                </fieldset>
                            </div>

                            <div class="col-lg-12 btnshow">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Submit</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>










                    <form action="submit.php" method="post" id="contact">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12  book1">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name *" required>

                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12  book1">
                                <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail Address">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12  book1">
                                <fieldset>
                                    <input name="phone" type="number" class="form-control" id="phone" placeholder="Phone Number *" required>

                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 book1">
                                <fieldset>
                                    <input name="alt-phone" type="number" class="form-control" id="alt-phone" placeholder="Alternate Phone Number">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 book1">
                                <fieldset>
                                    <select name="city_select" class="selectpicker" onchange="yesnoCheck(this);">

                                        <option value="select">Select Locality/ City</option>
                                        <option value="kolkata">KOLKATA</option>
                                        <option value="other">OTHER</option>

                                    </select>
                                </fieldset>

                            </div>




                            <div class="col-12" id="other">
                                <fieldset>
                                    <input name="city" type="text" class="form-control" id="city" placeholder="Locality/ City">
                                </fieldset>
                            </div>

                            <div class="col-12 add">
                                <fieldset>
                                    <input name="address" type="text" class="form-control" id="address" placeholder="Full  Address">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 add">
                                <fieldset>
                                    <input name="landmark" type="text" class="form-control" id="landmark" placeholder="Landmark">
                                </fieldset>
                            </div>


                            <div class="col-lg-6 col-md-12 col-sm-12 add">
                                <fieldset>

                                    <select name="service_category" class="selectpicker" title="Select service category" style="width: 100px;" onchange="yesnoCheck1(this);">
                                        <option value="select">Select service category</option>
                                        <option value="rcs">Registration and Compliance Services</option>
                                        <option value="bds">Business Development Services</option>
                                        <option value="ms">Maintenance Services</option>
                                        <option value="cs">Celebrations Services</option>
                                        <option value="other">Others</option>

                                    </select>

                                </fieldset>
                            </div>





                            <div class="col-lg-12 col-md-12 col-sm-12 category">
                                <fieldset>

                                    <select name="service-cat1" class="selectpicker" title="Select service you need" style="width: 100px;">
                                        <option>FORMATION/ REGISTRATION OF ENTITY</option>
                                        <option>TRADEMARK</option>
                                        <option>ROC/ LLP (MCA) SERVICES</option>
                                        <option>ACCOUNTS OUTSOURCING</option>
                                        <option>GST SERVICES</option>
                                        <option>INCOME TAX SERVICES</option>
                                        <option>MSME</option>
                                        <option>Import Export Code</option>
                                        <option>GEM</option>
                                        <option>NSIC</option>
                                        <option>LAWYER</option>
                                        <option>ISO</option>
                                        <option>LOAN</option>
                                        <option>COPYRIGHT</option>
                                        <option>PAYROLL PROCESSING</option>
                                        <option>PATENT</option>
                                        <option>TRADE LICENSE</option>
                                        <option>TALLY</option>
                                        <option>PROFESSIONAL TAX</option>
                                        <option>DRUG LICENSE</option>
                                        <option>FSSAI/ FOOD LICENSE</option>
                                        <option>LIQUOR LICENSE</option>
                                        <option>DIGITAL SIGNATURE</option>

                                    </select>

                                </fieldset>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 category">
                                <fieldset>

                                    <select name="service-cat2" class="selectpicker" title="Select service you need" style="width: 100px;">


                                        <option>MAN POWER HIRING</option>

                                        <option>WEBSITE</option>

                                        <option>GRAPHIC DESIGN</option>
                                        <option>VIDEO EDITOR</option>
                                        <option>SOCIAL MEDIA MANAGEMENT</option>

                                        <option>SOFTWARE</option>
                                    </select>

                                </fieldset>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 category">
                                <fieldset>

                                    <select name="service-cat3" class="selectpicker" title="Select service you need" style="width: 100px;">

                                        <option>AC SERVICE & REPAIR</option>
                                        <option>COMPUTER/ LAPTOP REPAIR</option>
                                        <option>CCTV INSTALLATION</option>
                                        <option>CHAIR REPAIR</option>
                                        <option>RO SERVICE</option>
                                        <option>BIOMETRIC DEVICE</option>

                                    </select>

                                </fieldset>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 category">
                                <fieldset>

                                    <select name="service-cat4" class="selectpicker" title="Select service you need" style="width: 100px;">


                                        <option>FLORIST</option>
                                        <option>CAKE SHOP</option>
                                        <option>PROMO T-SHIRT</option>
                                        <option>UNIFORM MANUFACTURE</option>


                                        <option>PHOTOGRAPHER</option>
                                        <option>INTERIOR DESIGNER</option>
                                        <option>EVENT PLANNER</option>

                                    </select>

                                </fieldset>
                            </div>


                            <div class="col-lg-12 col-md-12 col-sm-12 category">
                                <fieldset>

                                    <select name="service-cat5" class="selectpicker" title="Select service you need" style="width: 100px;">

                                        <option>PF WITHDRAWAL</option>
                                        <option>INSURANCE DISPUTE</option>
                                        <option>INSURANCE</option>



                                    </select>

                                </fieldset>
                            </div>
                            <div class="col-lg-12 add">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Any instructions for us"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12 btnshow1">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Submit</button>
                                </fieldset>
                            </div>
                        </div>

                    </form>
                </div>
            </div>





        </div>
        <!-- ***** Contact Form End ***** -->
    </div>
</section>
<!-- ***** Contact Us End ***** -->





<?php include "assets/inc/footer.php" ?>