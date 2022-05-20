<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body{
        color: black;
        font-family: 'Roboto', sans-serif;
        }

h2 {
	color: #000;
	font-size: 26px;
	font-weight: 300;
	text-align: center;
	text-transform: uppercase;
	position: relative;
	margin: 150px 0 5px;
}
h2 b {
	color: #ff589e;
}
/* h2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 4px;
	background: rgba(0, 0, 0, 0.2);
	left: 0;
	right: 0;
	bottom: -20px;
} */
.carousel {
	margin: 50px auto;
	padding: 0 70px;
}
.carousel .carousel-item {
	min-height: 330px;
	text-align: center;
	overflow: hidden;
}
.carousel .carousel-item .img-box {
	height: 160px;
	width: 100%;
	position: relative;
}
.carousel .carousel-item img {	
	max-width: 70%;
	max-height: 60%;
	display: inline-block;
	position: absolute;
	bottom: 0;
	margin: 0 auto;
	left: 0;
	right: 0;
}
.carousel .carousel-item h4 {
	font-size: 18px;
	margin: 10px 0;
}
.carousel .carousel-item .btn {
	color: #333;
	border-radius: 0;
	font-size: 11px;
	text-transform: uppercase;
	font-weight: bold;
	background: none;
	border: 1px solid #ccc;
	padding: 5px 10px;
	margin-top: 5px;
	line-height: 16px;
}
.carousel .carousel-item .btn:hover, .carousel .carousel-item .btn:focus {
	color: #fff;
	background: #ff589e;
	border-color: #000;
	box-shadow: none;
}
.carousel .carousel-item .btn i {
	font-size: 14px;
	font-weight: bold;
	margin-left: 5px;
}
.carousel .thumb-wrapper {
	text-align: center;
}
.carousel .thumb-content {
	padding: 15px;
}
.carousel-control-prev, .carousel-control-next {
	height: 100px;
	width: 40px;
	background: none;
	margin: auto 0;
	background: rgba(0, 0, 0, 0.2);
}
.carousel-control-prev i, .carousel-control-next i {
	font-size: 30px;
	position: absolute;
	top: 50%;
	display: inline-block;
	margin: -16px 0 0 0;
	z-index: 5;
	left: 0;
	right: 0;
	color: rgba(0, 0, 0, 0.8);
	text-shadow: none;
	font-weight: bold;
}
.carousel-control-prev i {
	margin-left: -3px;
}
.carousel-control-next i {
	margin-right: -3px;
}
.carousel .item-price {
	font-size: 13px;
	padding: 2px 0;
}
.carousel .item-price strike {
	color: #999;
	margin-right: 5px;
}
.carousel .item-price span {
	color: #86bd57;
	font-size: 110%;
}	
.carousel .carousel-indicators {
	bottom: -50px;
}
.carousel-indicators li, .carousel-indicators li.active {
	width: 10px;
	height: 10px;
	margin: 4px;
	border-radius: 50%;
	border-color: transparent;
	border: none;
}
.carousel-indicators li {	
	background: rgba(0, 0, 0, 0.2);
}
.carousel-indicators li.active {	
	background: rgba(0, 0, 0, 0.6);
}
.star-rating li {
	padding: 0;
}
.star-rating i {
	font-size: 14px;
	color: #ffc000;
}

.carousel-item{
  padding-top: 0;

}
</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Related <b>Services</b></h2>
			<div class="divider mx-auto"></div>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../assets/images/ac.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Air Conditioner Services & Repair</h4>
									
									
									<a href="ac.php" class="btn btn-primary">Know More</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../assets/images/cctv.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>CCTV Installation</h4>
									
									<a href="cctv.php" class="btn btn-primary">Know More</a>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../assets/images/florist.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Florist</h4>
									
									<a href="flower.php" class="btn btn-primary">Know More</a>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../assets/images/copyright.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Copyright</h4>
									
									<a href="copyright.php" class="btn btn-primary">Know More</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../assets/images/graphic.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Graphic Design</h4>
									
									<a href="graphic.php" class="btn btn-primary">Know More</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../assets/images/insurance.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Insurance</h4>
									
									<a href="insurance.php" class="btn btn-primary">Know More</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../assets/images/iso.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>ISO</h4>
									
									<a href="iso.php" class="btn btn-primary">Know More</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../assets/images/lawyer.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Lawyer</h4>
									
									<a href="lawyer.php" class="btn btn-primary">Know More</a>
								</div>						
							</div>
						</div>						
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../assets/images/loan.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Loan</h4>
									
									<a href="loan.php" class="btn btn-primary">Know More</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../assets/images/manpower.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Man Power Hiring</h4>
									
									<a href="man_power.php" class="btn btn-primary">Know More</a>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../assets/images/msme.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>MSME</h4>
									
									<a href="msme.php" class="btn btn-primary">Know More</a>
								</div>						
							</div>
						</div>	
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="../assets/images/nsic.png" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>NSIC</h4>
									
									<a href="nsic.php" class="btn btn-primary">Know More</a>
								</div>						
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev" type="button" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next"  type="button"  href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div>
</body>
</html>                                		