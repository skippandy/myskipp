<?php
	include_once('connect.php');

	$ID = (isset($_GET['ID'])) ? $_GET['ID']: NULL;
	if(isset($_GET['ID'])){
		$id = $_GET['ID'];
	}else{
		$ID = NULL;
	}

	$sql = "DELETE FROM SCB1 WHERE ID='$ID'";
	$num = mysqli_query($connect,$sql);
	if($num== 1){
		header('Location: basic_table.php');
		// echo "one row deleted";
	}else{
		echo "couldnt delete";
	}
?>