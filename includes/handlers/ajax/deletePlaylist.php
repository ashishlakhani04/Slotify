<?php
	include("../../config.php");

	if(isset($_POST['playlistId'])){

		$playlistId = $_POST['playlistId'];

		$playlistQuery = mysqli_query($con, "DELETE FROM playlists WHERE id='$playlistId'");
		$songQuery = mysqli_query($con, "DELETE FROM playlistSongs WHERE playlistId='$playlistId'");



	}else{
		echo "Playlist id is not sent properly!";
	}

	

?>