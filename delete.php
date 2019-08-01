<?php
	
	require_once 'connect.php';
	$npm = $_POST['npm'];
	//$nama = $_POST['nama'];
	//$nama = "Faizah";
	//$query = "select * from tbl_mhs where nama='$nama'";
	$query = "delete * from tbl_mhs where npm='npm'";
	$execusi = $con->query($query);

	if($execusi){
		echo "ok";
	}else{
		echo "fail";
	}

?>