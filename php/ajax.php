<?php

// if (isset($_POST['email']) === true && empty($_POST['email']) === false && isset($_POST['productname']) === true && empty($_POST['productname']) === false && isset($_POST['size']) === true && empty($_POST['size']) === false) {
if(true){
	// $comp_industry = $_POST['comp_industry'];
	// $comp_size = $_POST['comp_size'];
	// $comp_location = $_POST['comp_location'];


	require 'config.php'; //"../" pünktchen pünktchen, goes back one directory! connect to database
	global $db;
	global $database_name;
	global $database_table;


	//Definition der Query
	$sql = "SELECT * FROM `$database_name`.`$database_table`";
	//Durchführen der Query
	$query = $db->query($sql);
	//Empfangen der Response
	$r = $query->fetchAll(PDO::FETCH_ASSOC); //OBJ
	//Aufbereiten und Senden der Response
	$json=json_encode($r);
	echo $json;


} else {

	echo "Scheinbar ist im PHP was schief gelaufen.";
}

?>
