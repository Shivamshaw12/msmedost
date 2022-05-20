<?php include "assets/inc/header.php" ?>



<div class="container" style="padding-top: 80px;">
    <div class="page-banner " style="background-image: url(assets/images/join.png);">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-6">
                <nav aria-label="Breadcrumb">
                    <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Join Us</li>
                    </ul>
                </nav>
                <h1 class="text-center">Join Us</h1>
            </div>
        </div>
    </div>
</div>



<!-- ***** Contact Us Start ***** -->
<section class="section colored" id="contact-us">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">Join Us</h2>
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
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="contact-form">
                    <form id="contact" action="resume.php" method="post">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name *" required>
                                    
                                </fieldset>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <fieldset>
                                    <input name="number" type="number" class="form-control" id="phone" placeholder="Phone Number *" required>
                                    
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <fieldset>
                                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email id">
                                </fieldset>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <fieldset>
                                    <input type="text" name="exp" class="form-control" id="exp" aria-describedby="emailHelp" placeholder="Your Expertise">
                                </fieldset>
                            </div>

                            <div class="col-lg-12 ">
                                <fieldset>
                                    <textarea name="message" class="form-control" id="message" rows="6" placeholder="Tell us about Yourself"></textarea>
                                </fieldset>
                            </div>

                            <div class="col-lg-12 ">
                                <fieldset>
                                    <label for="file" style="font-weight: 300;">Upload your Resume</label>

                                    <input type="file" name="attach" id="file" class="form-control" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" />
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button" >Submit</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ***** Contact Form End ***** -->
        </div>
    </div>
</section>
<!-- ***** Contact Us End ***** -->

<?php include "assets/inc/footer.php" ?>