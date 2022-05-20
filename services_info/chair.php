<?php include "inc/header.php" ?>

<style>
    .text-center img{
        height: 400px;
    }

    @media only screen and (max-width: 400px) {
  .text-center img {
        height: 300px !important;
  }
}

    .header img{
        height: 70px;
    }

    .body{
        padding: 5px;
        
    }
    .body h5{
        padding-bottom: 20px;
    }
</style>



<div class="container" style="padding-top:80px">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">Chair Repair</h1>
            <p class="text-lg text-grey mb-5">If the lift mechanism in your office chair needs repair but the upholstery portion is still in good shape, don't toss the chair. </p>
            <a href="https://fb.watch/czuvBmswyo/" target="_blank" class="btn btn-primary btn-split">Watch Video <div class="fab"><span class="mai-play"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="images/chair.jpeg" alt="">
            </div>
          </div>
        </div>
        
      </div>
    </div>



    <?php include "../service_carousel.php" ?>

<?php include "inc/footer.php" ?>