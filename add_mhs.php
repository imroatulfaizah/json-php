<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
	$npm = $_POST['npm'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];

	$sql = 'insert into tbl_mhs values($npm, $nama, $alamat)';

	if(mysqli_query($con,$sql)){
		echo "sukses";
	}else{
		echo "could not save";
	}
}else{
	echo 'eror';
}


?>