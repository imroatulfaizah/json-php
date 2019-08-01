<?php 

	function jsonData($query, $title){
		require 'connect.php';

		$res = mysqli_query($con, $query);
		$temp_array=array();

		while($row=mysqli_fetch_assoc($res)){
			$temp_array[]=$row;
		}

		return json_encode(array($title=>$temp_array));
	}