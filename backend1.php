<html>
<body bgcolor="white">	
<?php
$dbh=mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($dbh,'netbanking1') or die(mysqli_error());
$fn=$_REQUEST['Account_holder'];
$ln=$_REQUEST['Balance_amount'];
$ln1=$_REQUEST['Type_of_account'];
$mn=$_REQUEST['Account_no'];
$ln3=$_REQUEST['last_transaction'];
$query="INSERT INTO account_details VALUES('$fn','$ln','$ln1','$mn','$ln3')";
$result=mysqli_query($dbh,$query)or die(mysqli_error($dbh));
echo"data entered successfully:";
$var=mysqli_query($dbh,"SELECT * FROM account_details");
echo"<table border_size=20>";
	
echo " <tr> <th>Account_holder</th> <th>Balance_amount</th> <th>Type_of_account</th> 
<th> Account_no</th> <th>last_transaction</th> </tr>";
while($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> 
	<td>$arr[4]</td> </tr>";
}
echo"</table>";
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
