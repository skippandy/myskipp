<?php
	$severname = "localhost";
	$username ="root";
	$password = "";
	$dbname   = "scb";

	$connect = mysqli_connect($severname,$username,$password,$dbname) or die ('connection error'.mysqli_connect_error());



?>