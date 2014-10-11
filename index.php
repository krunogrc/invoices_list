<?php
	include("include/classes.php");
	include("include/connect_mysql.php");
		
	$Customer_all=array();
	$xml=simplexml_load_file("customers.xml");
	foreach($xml->children() as $child) {
		$customer = new Customer($child->id, $child->name, $child->email); 
		array_push($Customer_all,$customer);
	}
	include("include/functions.php");

	echo "<html><body>";
	include("include/main_table.php");

	if(isset($_GET['details'])) {
		include("include/detail_table.php");
	}
	echo "</body></html>";
?>