<?php include "assets/inc/header.php" ?>
    





    <!-- ***** Contact Us Start ***** -->
    <section class="section colored" id="contact-us" style="padding-top: 80px;">
        <div class="container">
            <!-- ***** Section Title Start ***** -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Log In!</h2>
                    </div>
                </div>
                
            </div>
            <!-- ***** Section Title End ***** -->

            <div class="row">


                <!-- ***** Contact Form Start ***** -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="contact-form">
                        <form id="contact" action="admin.php" method="post">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12 ">
                                    <fieldset>
                                    
                                        <input name="username" type="text" class="form-control" id="username" placeholder="Username *" required>
                                       
                                    </fieldset>
                                </div>
                                
                                <div class="col-lg-6 col-md-12 col-sm-12 ">
                                    <fieldset>
                                        <input name="pass" type="text" class="form-control" id="pass" placeholder="Password *" required>
                                        
                                    </fieldset>
                                </div>
                                
                                
                                <div class="col-lg-12 ">
                                    <fieldset>
                                        <button type="submit" id="form-submit"  class="main-button">Log In</button>
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