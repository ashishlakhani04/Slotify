<?php
	include("../../config.php");

	if(isset($_POST['name']) && isset($_POST['username'])){

		$name = $_POST['name'];
		$username = $_POST['username'];
		$date = date("Y-m-d");

		$query = mysqli_query($con, "INSERT INTO playlists VALUES ('','$name','$username','$date')");


	}else{
		echo "username or name are not given accurately!";
	}

	

?>