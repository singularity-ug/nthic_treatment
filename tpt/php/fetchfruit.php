<?php

	$conn = new mysqli("localhost", "root", "", "angular");

	$out = array();

	$sql = "SELECT * FROM fruits";
	$query = $conn->query($sql);

	while($row=$query->fetch_array()){
	    $out[] = $row;
	}

	echo json_encode($out);

?>