<?php
function convertDate($miliseconds){
	return date('F d, Y', strtotime(date("d-m-Y", $miliseconds)));
}
	
function checkName($customer_id, $Customer_all){
	$name="";
	foreach($Customer_all as $customer){
		if($customer_id==$customer->id) $name=$customer->name;
		}
	return $name;	
}
		
function calculateSum($invoice_id, $Invoice_line_all){
	$sum=0;
	foreach($Invoice_line_all as $invoice_line){
		if($invoice_id==$invoice_line->invoice_id){
			$sum+=($invoice_line->price * $invoice_line->quantity);
		}
	}
	return $sum;
}
	
function getDateOfInvoice($invoice_id, $Invoice_all){
	$date;
	 foreach($Invoice_all as $invoice){
		if($invoice_id==$invoice->id){
			$date=convertDate($invoice->invoice_date);
		}
	}
	return $date;
}

function getArticles($invoice_id, $Invoice_line_all){
	$all_description_artical="<td width=300>";
	$all_other_artical="<td   width=80>";
	$all_sum="<td >";
	foreach($Invoice_line_all as $invoice_line){
		if($invoice_id==$invoice_line->invoice_id){
			$all_description_artical=$all_description_artical."".$invoice_line->line_description ."<br>";
			$all_other_artical=$all_other_artical." ".$invoice_line->quantity." x ".$invoice_line->price." =<br>";
			$all_sum=$all_sum." $ ".($invoice_line->price * $invoice_line->quantity)."<br>";
		}
	}
	return "<tr>".$all_description_artical."</td>".$all_other_artical."</td>".$all_sum."</td></tr>";
}
?>