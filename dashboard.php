<?php include "assets/inc/header.php" ?>

<style>
	img{
		height: 100px;
		width: 100px;
	}

	.set{
		height: fit-content;
	}
</style>

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

<div class="page-section">
	<div class="container">
		<div class="text-center wow fadeInUp">
			<h2 class="title-section">Dashboard</h2>
			<div class="divider mx-auto"></div>
		</div>


		<!-- ***** Section Title Start ***** -->
		<div class="row page-banner home-banner " style="height: fit-content;">
			<div class="col-lg-12">
				<div class="center-heading">
					<h2 class="section-title">Registration and Compliance Services</h2>
				</div>


				
				
				<table class="table">
					<thead>
						<tr>
							
							<th scope="col">Name</th>
							<th scope="col">Icon</th>
							<th><a href="reg_form.php"><button type="button" class="btn btn-primary">Add</button></a></th>
							
						</tr>
					</thead>
				<?php while ($rows = mysqli_fetch_assoc($reg_result)) {
                ?>
					<tbody>
						<tr>
							
							<td><?php echo $rows['name']; ?></td>
							<td><?php echo '<img src="data:image;base64,' . base64_encode($rows['icon']) . ' " alt="image" >' ?></td>
							<td><a href="reg_delete.php?id=<?php echo $rows['id']; ?>"> <button type="button" class="btn btn-danger">Delete</button></a> </td>
							
						</tr>
					
				
				<?php
                }
                ?>
				</tbody>
				</table>
			</div>

		</div>
		<!-- ***** Section Title End ***** -->

		<!-- ***** Section Title Start ***** -->
		<div class="row page-banner home-banner " style="height: fit-content;">
			<div class="col-lg-12">
				<div class="center-heading">
					<h2 class="section-title">Business Development Services</h2>
				</div>

				<table class="table">
					<thead>
						<tr>
							
							<th scope="col">Name</th>
							<th scope="col">Icon</th>
							<th><a href="busi_form.php"><button type="button" class="btn btn-primary">Add</button></a></th>
							
							
						</tr>
					</thead>
				<?php while ($rows = mysqli_fetch_assoc($busi_result)) {
                ?>
					<tbody>
						<tr>
							
							<td><?php echo $rows['name']; ?></td>
							<td><?php echo '<img src="data:image;base64,' . base64_encode($rows['icon']) . ' " alt="image" >' ?></td>
							<td><a href="busi_delete.php?id=<?php echo $rows['id']; ?>"> <button type="button" class="btn btn-danger">Delete</button></a> </td>
						</tr>
					
				
				<?php
                }
                ?>
				</tbody>
				</table>
			</div>

		</div>
		<!-- ***** Section Title End ***** -->

		<!-- ***** Section Title Start ***** -->
		<div class="row page-banner home-banner " style="height: fit-content;">
			<div class="col-lg-12">
				<div class="center-heading">
					<h2 class="section-title">Maintenance Services</h2>
				</div>
				<table class="table">
					<thead>
						<tr>
							
							<th scope="col">Name</th>
							<th scope="col">Icon</th>
							<th><a href="main_form.php"><button type="button" class="btn btn-primary">Add</button></a></th>
							
							
						</tr>
					</thead>
				<?php while ($rows = mysqli_fetch_assoc($main_result)) {
                ?>
					<tbody>
						<tr>
							
							<td><?php echo $rows['name']; ?></td>
							<td><?php echo '<img src="data:image;base64,' . base64_encode($rows['icon']) . ' " alt="image" >' ?></td>
							<td><a href="main_delete.php?id=<?php echo $rows['id']; ?>"> <button type="button" class="btn btn-danger">Delete</button></a> </td>
						</tr>
					
				
				<?php
                }
                ?>
				</tbody>
				</table>
			</div>

		</div>
		<!-- ***** Section Title End ***** -->

		<!-- ***** Section Title Start ***** -->
		<div class="row page-banner home-banner " style="height: fit-content;">
			<div class="col-lg-12">
				<div class="center-heading">
					<h2 class="section-title">Celebrations Services</h2>
				</div>
				<table class="table">
					<thead>
						<tr>
							
							<th scope="col">Name</th>
							<th scope="col">Icon</th>
							<th><a href="cele_form.php"><button type="button" class="btn btn-primary">Add</button></a></th>
							
							
						</tr>
					</thead>
				<?php while ($rows = mysqli_fetch_assoc($cele_result)) {
                ?>
					<tbody>
						<tr>
							
							<td><?php echo $rows['name']; ?></td>
							<td><?php echo '<img src="data:image;base64,' . base64_encode($rows['icon']) . ' " alt="image" >' ?></td>
							<td><a href="cele_delete.php?id=<?php echo $rows['id']; ?>"> <button type="button" class="btn btn-danger">Delete</button></a> </td>
						</tr>
					
				
				<?php
                }
                ?>
				</tbody>
				</table>
			</div>

		</div>
		<!-- ***** Section Title End ***** -->

		<!-- ***** Section Title Start ***** -->
		<div class="row page-banner home-banner " style="height: fit-content;">
			<div class="col-lg-12">
				<div class="center-heading">
					<h2 class="section-title">Other Services</h2>
				</div>
				<table class="table">
					<thead>
						<tr>
							
							<th scope="col">Name</th>
							<th scope="col">Icon</th>
							<th><a href="other_form.php"><button type="button" class="btn btn-primary">Add</button></a></th>
							
						</tr>
					</thead>
				<?php while ($rows = mysqli_fetch_assoc($other_result)) {
                ?>
					<tbody>
						<tr>
							
							<td><?php echo $rows['name']; ?></td>
							<td><?php echo '<img src="data:image;base64,' . base64_encode($rows['icon']) . ' " alt="image" >' ?></td>
							<td><a href="other_delete.php?id=<?php echo $rows['id']; ?>"> <button type="button" class="btn btn-danger">Delete</button></a> </td>
						</tr>
					
				
				<?php
                }
                ?>
				</tbody>
				</table>
			</div>

		</div>
		<!-- ***** Section Title End ***** -->
	</div>
</div>

<?php include "assets/inc/footer.php" ?>