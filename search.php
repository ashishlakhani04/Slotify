<?php

	include "includes/includedFiles.php";

	if(isset($_GET['term'])){
		$term = urldecode($_GET['term']);
	}else{
		$term = "";
	}

?>
<div class="searchContainer">
	
	<h4>Search for an artist,album or song</h4>
	<input type="text" class="searchInput" placeholder="Start typing..." value="<?php echo $term; ?>" >

</div>