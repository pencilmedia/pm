<?php
		//Connect To Database
		$hostname='10.0.13.135';
		$username='inventoryapp';
		$password='Summer40';
		$dbname='inventoryapp';
		$usertable='inventory';
		$imgtable='photos';
		$yourfield = 'Year';
		
		mysql_connect($hostname,$username, $password) OR DIE ('Unable to connect to database.');
		mysql_select_db($dbname);
?>