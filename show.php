
<?php
include('../inc.php');
$sql="SELECT `customer_id` 'Customer ID', `cus_name`  'Customer Name', `cus_address`'Customer Address', 
`cus_phone`'Customer Phone', `user_password` 'Password' FROM `customer_info`";

		$rs = mysqli_query($db,$sql);
		$column = mysqli_field_count($db);
		$result = "<table class='table table-striped table-hover' border='1px solid'>\n";
		$result .= "\t<tr>";
        $result .= "\t<th>Sl</th>";
		while($colName = mysqli_fetch_field($rs))
		    {
			$result .= "\t<th>".$colName->name."</th>";
			}
		    $result .= "\t</tr>\n";
            $i=0;
		while($row = mysqli_fetch_row($rs))
		{
			
			$rowdata=$row[0].'~'.$row[1].'~'.$row[2].'~'.$row[3].'~'.$row[4];
		/*	print $rowdata;
			print '<hr>';*/
			
			$result .= "\t<tr>";
			$result .= "<td><input type='radio' name='btn_id[]' id='rr".$i++."' onClick=show(this.value) value='".$rowdata."' ></td>";
			$result.="<td>".$row[0]."</td>";
			$result .= "<td>".$row[1]."</td>";	
			$result.="<td>".$row[2]."</td>";
			$result .= "<td>".$row[3]."</td>";	
			$result.="<td>".$row[4]."</td>";
				
			$result .= "\t</tr>\n";
			}
		    $result .= "</table>\n";
		print $result;


?>
show.php
Displaying show.php.