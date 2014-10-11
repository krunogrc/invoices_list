<?php

echo "<table border='1' style='font-family:arial; font-size: 15px; border-collapse: collapse' align=center>";

echo "<tr style='font-weight: bold'>
		<td width=110>Invoice ID</td>	
		<td width=110>Invoice Date</td>
		<td width=110>Customer Name</td>
		<td width=110>Total invoice sum</td>
		<td width=110> </td>	
	 </tr>";
	 foreach($Invoice_all as $invoice){
 echo "<tr>
		<td width=110>".$invoice->id."</td>	
		<td width=110>".convertDate($invoice->invoice_date)."</td>
		<td width=110>".checkName($invoice->customer_id, $Customer_all)."</td>
		<td width=110>$ ".calculateSum($invoice->id, $Invoice_line_all)."</td>
		<td width=110><a href='index.php?details=true&id=".$invoice->id."'>Details</a> </td>	
	 </tr>";
	 
	 }
	
echo "</table>";
?>