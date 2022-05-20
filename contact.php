<?php include "assets/inc/header.php" ?>
    





    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Contact Us</h2>
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
                        <form id="contact" action="only_contact.php" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 ">
                                    <fieldset>
                                    
                                        <input name="name" type="text" class="form-control" id="name" placeholder="Full Name *" required>
                                       
                                    </fieldset>
                                </div>
                                
                                <div class="col-lg-6 col-md-12 col-sm-12 ">
                                    <fieldset>
                                        <input name="phone" type="number" class="form-control" id="phone" placeholder="Phone Number *" required>
                                        
                                    </fieldset>
                                </div>
                                
                                <div class="col-lg-12 ">
                                    <fieldset>
                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Any instructions for us"></textarea>
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