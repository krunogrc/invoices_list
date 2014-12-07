<?php

//define some contstant
//	   define( "DB_DSN", "mysql:host=localhost;dbname=dump" );
//	   define( "DB_USERNAME", "root" );
//	   define( "DB_PASSWORD", "" );
//connect
try {

    $con = new PDO('mysql:host=localhost;dbname=dump', 'root', ''); //our new PDO Object
} catch (PDOException $e) {

    echo $e->getMessage(); //catch and show the error
}
# creating the statement
$STH = $con->query('SELECT line_id, invoice_id, line_description, quantity, price from invoice_lines');
# setting the fetch mode
$STH->setFetchMode(PDO::FETCH_OBJ);
# showing the results
while ($row = $STH->fetch()) {
    $Invoice_line_all[] = new Invoice_line($row->line_id, $row->invoice_id, $row->line_description, $row->quantity, $row->price);
}
# creating the statement
$STH = $con->query('SELECT id, customer_id, invoice_date from invoices');
# setting the fetch mode
$STH->setFetchMode(PDO::FETCH_OBJ);
# showing the results
while ($row = $STH->fetch()) {
    $Invoice_all[] = new Invoice($row->id, $row->customer_id, $row->invoice_date);
}
?>