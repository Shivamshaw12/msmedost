<?php include "assets/inc/header.php" ?>


<style>
    .page-banner {
        height: 400px !important;
        padding-top: 80px;
    }



    video {
        width: 93%;
        height: 500px;
    }

    @media only screen and (max-width: 600px) {
        video {
            height: 200px;
            padding: 10px;
        }

        .page-banner {
            height: 250px !important;
            padding-top: 0;
        }
    }
</style>



<!-- ***** Contact Us Start ***** -->
<section class="section colored" id="contact-us" style="padding-top: 80px;">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h1 class="section-title">Add a service</h1>
                </div>
            </div>

        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">

            <!-- ***** Contact Form Start ***** -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="contact-form">
                    <form id="contact" action="other_add.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 ">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Name of the service *" required>

                                </fieldset>
                            </div>



                            <div class="col-lg-12 ">
                                <fieldset>
                                    <label for="image" style="font-weight: 300;">Upload the logo</label>

                                    <input type="file" name="image" id="image" class="form-control" accept="image/png, image/gif, image/jpeg" />
                                </fieldset>
                            </div>


                            <div class="col-lg-12 ">
                                <fieldset>
                                    <button type="submit" id="form-submit" name="submit" class="main-button">Submit</button>
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