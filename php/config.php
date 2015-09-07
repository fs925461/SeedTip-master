<?php

  //Strato
    //   $database_host    = "rdbms.strato.de";
    //   $database_name    = "DB2009906";
    //   $database_user    = "U2009906";
    //   $database_pass    = "2008rwth";
    //   $database_table   = "job_list";
    //
    // 	try{
    // 		$db = new PDO('mysql:host='.$database_host.';dbname='.$database_name.';charset=utf8', $database_user, $database_pass); //neues db(database) handler Objekt
    // 		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	// } catch(PDOException $e) {
    // 		echo $e->getMessage();
    // 		die();
    // 	}


  //Localhost


  	$database_host		= "localhost";
  	$database_name		= "vitamintb";
  	$database_user		= "felix";
  	$database_pass		= "2008rwth";
  	$database_table		= "comp_list";

  	try{
  		$db = new PDO('mysql:host='.$database_host.';dbname='.$database_name.';charset=utf8', $database_user, $database_pass); //neues db(database) handler Objekt
  		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
  		echo $e->getMessage();
  		die();
  	}

?>
