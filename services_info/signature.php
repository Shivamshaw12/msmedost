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

    .btn-split {
    display: inline-flex;
    align-items: center;
    border-radius: 40px;
    padding-top: 6px;
    padding-bottom: 6px;
    padding-right: 6px;
}
.btn {
    padding: 8px 24px;
}
.btn-primary {
    color: #fff;
    background-color: #6C55F9;
    border-color: transparent;
}
</style>



<div class="container" style="padding-top:80px">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">Digirtal Signature</h1>
            <p class="text-lg text-grey mb-5">A digital signature is a mathematical technique used to validate the authenticity and integrity of a message, software or digital document. It's the digital equivalent of a handwritten signature or stamped seal, but it offers far more inherent security.</p>
            <a href="https://fb.watch/cG7hiWzoNi/" target="_blank" class="btn btn-primary btn-split">Watch Video <div class="fab"><span class="mai-play"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="images/social.jpeg" alt="">
            </div>
          </div>
        </div>
        
      </div>
    </div>



    


  <?php include "../service_carousel.php" ?>
<?php include "inc/footer.php" ?>