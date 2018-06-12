<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');
$output='';
$sql="SELECT * FROM customer WHERE customer_id LIKE '%".$_POST["search"]."%'";
$result=mysqli_query($con,$sql);
if (mysqli_num_rows($result) >0)
{
	$output .= '<h4 align="center">Search Result</h4>';
	$output .= '<div class="table-responsive">
			<table class="table table bordered">
				<tr>
					<th>Customer ID</th>
					<th>Customer_Name</th>
					<th>Customer Address</th>
					<th>Mobile No</th>
				</tr>';
	while($row=mysqli_fetch_array($result))
	{
		$output .= '
		<tr>
			<td>'.$row["customer_id"].'</td>
			<td>'.$row["customer_name"].'</td>
			<td>'.$row["customer_address"].'<td>
			<td>'.$row['mobile_no'].'</td>
			</tr>
			';
		}
		echo $output;
	}			

else
{
	echo "Data Not Found";
}
?>