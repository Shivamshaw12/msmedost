<?php include "assets/inc/header.php" ?>


<style>
    .page-banner{
        height:400px !important;
        padding-top: 80px;
    }
    
    

    video{
        width: 93%;
      height: 500px;
    }
    @media only screen and (max-width: 600px) {
        video{
      height: 200px;
      padding: 10px;
        }
        .page-banner{
        height:250px !important;
        padding-top:0;
    }
}
    

</style>
<div class="container" style="padding-top: 80px;">
    <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100 below">
        <video  controls autoplay>
            <source src="services_info/videos/service_partner.mp4" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
            Your browser does not support the video tag.
        </video>
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
                    <h1 class="section-title">SERVICE PARTNER REGISTRATION FORM</h1>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p>Become a partner of MSME DOST! (* marked are compulsory field)</p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">


            <!-- ***** Contact Form Start ***** -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="contact-form">
                    <form id="contact" action="partner_form.php" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 ">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Full Name *" required>

                                </fieldset>
                            </div>

                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="phone" type="number" class="form-control" id="phone" placeholder="Mobile Number *" required>

                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <fieldset>
                                    <input name="entity" type="text" class="form-control" id="entity" placeholder="Your Bussiness Entity name">
                                </fieldset>
                            </div>
                            <div class="col-12 ">
                                <fieldset>
                                    <input name="address" type="text" class="form-control" id="address" placeholder="Your organisation/ residential address">
                                </fieldset>
                            </div>
                            <div class="col-4 ">
                                <fieldset>
                                    <input name="locality" type="text" class="form-control" id="locality" placeholder="Locality/ City">
                                </fieldset>
                            </div>
                            <div class="col-4 ">
                                <fieldset>
                                    <input name="pincode" type="number" class="form-control" id="pincode" placeholder="Pincode">
                                </fieldset>
                            </div>
                            <div class="col-4 ">
                                <fieldset>
                                    <input name="post_office" type="text" class="form-control" id="post_office" placeholder="Post Office">
                                </fieldset>
                            </div>
                            <div class="col-12 ">
                                <fieldset>
                                    <input name="services" type="text" class="form-control" id="services" placeholder="Services you want to partner for">
                                </fieldset>
                            </div>
                            <div class="col-12">
                                <fieldset>
                                    <input name="service_area" type="text" class="form-control" id="service_area" placeholder="Service area (Locality or Zone)">
                                </fieldset>
                            </div>
                            <!-- <div class="col-12">
                                <fieldset>
                                    <div class="form-check">
                                        <label class="form-check-label" for="radio1">
                                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked>Option 1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="radio2">
                                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Option 2
                                        </label>
                                    </div>
                                </fieldset>
                            </div> -->

                            <div class="col-6 ">
                                <fieldset>
                                    <input name="webiste" type="text" class="form-control" id="website" placeholder="Website">
                                </fieldset>
                            </div>

                            <div class="col-6">
                                <fieldset>
                                    <input name="alt-phone" type="text" class="form-control" id="alt-phone" placeholder="Alternate mobile number">
                                </fieldset>
                            </div>

                            <div class="col-lg-12 ">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Submit</button>
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