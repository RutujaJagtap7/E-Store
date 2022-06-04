<?php

	$server="sqlXXX.epizy.com";
	$username="	epiz_31883456";
	$password="Z4GLTMANb70KBXn";
	$dbname="epiz_31883456_XXX";
	
	$conn=mysql_connect($server,$username,$password,$dbname);
	
	if(!conn){
	
		die("Connection failed:".mysql_connect_error());
	}
	
	
?>