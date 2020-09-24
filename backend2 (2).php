<html>
<body bgcolor="white">	
<?php
$dbh=mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($dbh,'netbanking1') or die(mysqli_error());
$fn=$_REQUEST['Loan_no'];
$ln=$_REQUEST['Loan_amount'];
$ln1=$_REQUEST['Type_of_loan'];
$mn=$_REQUEST['Due_date'];
$mn1=null;

$query="INSERT INTO loan_details VALUES('$fn','$ln','$ln1','$mn','$mn1')";
$result=mysqli_query($dbh,$query)or die(mysqli_error($dbh));
echo"Data entered successfully:";
$var=mysqli_query($dbh,"SELECT * FROM loan_details");
echo"<table border_size=20>";
	
echo " <tr> <th>Loan_no</th> <th>Loan_amount</th> <th>Type_of_loan</th> 
<th>Due_date</th><th>Loan_intrest_rate</th></tr>";
while($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td><td>$arr[4]</td></tr>";
}
echo"</table>";
?>
<?php

$db_host="localhost";

$db_name="netbanking1";

$db_user="root";

$db_pass="";


$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());

mysqli_select_db($dbh,'netbanking1') or die(mysqli_error());

$p0=mysqli_query($dbh,"call lofe(@out);");

$rs=mysqli_query($dbh,'select @out');


while($arr=mysqli_fetch_row($rs))

{

	
 
echo 'LOAN INTREST RATE IS:'.$arr[0];

echo 'rs';


}

mysqli_close($dbh);


?>


</html>
</body>
<form>
<p><a href="qwe.html"> click here:(Home page)</a></p>
</form>



<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>



<table style="width:100%">
  
</table>

</body>
</html>



