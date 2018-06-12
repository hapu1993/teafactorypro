<html>
<head>
	<style type="text/css">
		.table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}

	</style>
</head>
<body>
<form action="" method="POST">
<select name="month" value="month">
	<option value="01">january</option>
	<option value="02">february</option>

</select>
<button type="submit" name="submit">Submit</button>
</form>
<?php
include ('connection.php');
mysqli_select_db($con,'teafactory');
extract($_POST);
if (isset($submit)){
$sql="SELECT customer_id,weight,MONTH(date) as month FROM dailytea WHERE MONTH(date)=$month";
$result=mysqli_query($con,$sql);
echo "<h2 align='center'>Customer Discription:</h2>";



echo "<table style='width:50%' align='center'>";


	echo "<tr>";
	echo "<th>Month:</th>";
   	echo "<th>Customer ID:</th>"; 

  echo "</tr>";
  while($arr=mysqli_fetch_array($result)){
  echo "<tr>";
  	echo "<td>".$arr['weight']."</td>";
    echo "<td>".$arr['customer_id']."</td>";
  echo "</tr>";
}
echo "</table>";
}
?>
</body>
</html>