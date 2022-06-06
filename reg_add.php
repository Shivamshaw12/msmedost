
<?php


$con= mysqli_connect('localhost', 'root');
$db=mysqli_select_db($con,'msmedost');



	if(isset($_POST['submit']))
	{

		$name=$_POST['name'];
		// $filename =addslashes(file_get_contents($_FILES["image"]["tmp_name"])) ;
		if(!empty($_FILES['image']['name'][0])){
			$filename = $_FILES['image']['name']; 
		  move_uploaded_file($_FILES['image']['tmp_name'], "upload/$filename");
		}else{
		$filename = $_POST['icon'];
		}

		$query="INSERT INTO `registration` (`name`,`icon`) VALUES ('$name','$filename')";
		$query_run= mysqli_query($con,$query);

		if($query_run)
		{
			echo '<script>alert("success!");</script>';
			header('location:dashboard.php');
		}
		else
		{
			echo 'not successfull';
		}
	}
?>
