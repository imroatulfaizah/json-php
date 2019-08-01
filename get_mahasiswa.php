<?php
	
	require_once 'json.php';
	//$nama = $_POST['nama'];
	//$nama = "Faizah";
	//$query = "select * from tbl_mhs where nama='$nama'";
	$query = "select * from tbl_mhs";
	echo jsonData($query, "mobile");

?>