<?php
 echo "<table frame='box'  width= 567 style='margin-top:10; font-size: 15px; font-weight: bold; font-family:arial' align=center>";
 	 echo "<tr>
			<td height=30  font size=11>Rami Osama Selim<br><a href='#'>rs@shopbox.com</a></td>	
		</tr>
		<tr>
			<td height=20></td>	
		</tr>
		<tr>
			<td>Customer ID ".$_GET['id']."</td>	
		</tr>
			<tr >
			<td colspan=3 style='text-align:right'  height=30>Invoice date: ".getDateOfInvoice($_GET['id'], $Invoice_all)."</td>	
		</tr>
		<tr >
			<td colspan=2  height=30></td>	
		</tr>
			".getArticles($_GET['id'], $Invoice_line_all)."
		<tr>
			<td height=30>Total<td/><td>    $ ".calculateSum($_GET['id'], $Invoice_line_all)."</td>	
		</tr>";
 echo "</table>";


?>