<html>
<body bgcolor="white">	
<?php
$dbh=mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($dbh,'netbanking1') or die(mysqli_error());
$fn=$_REQUEST['branch_id'];
$ln=$_REQUEST['bank_name'];
$ln1=$_REQUEST['state'];
$mn=$_REQUEST['district'];
$mn1=$_REQUEST['IFSC_code'];

$query="INSERT INTO branch_details VALUES('$fn','$ln','$ln1','$mn','$mn1')";
$result=mysqli_query($dbh,$query)or die(mysqli_error($dbh));
echo"Data entered successfully:";
$var=mysqli_query($dbh,"SELECT * FROM branch_details");
echo"<table border_size=20>";
	
echo " <tr> <th>branch_id</th><th>bank_name</th> <th>state</th><th>district</th><th>IFSC_code</th></tr>";
while($arr=mysqli_fetch_row($var))
{
	echo"<tr><td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td><td>$arr[4]</td></tr>";
}
echo"</table>";
?>
</html>
</body>
<form>
<p><a href="qwe.html"> click here:(Home page)</a></p>
</form>


</html>
</body>
<form>
<p><a href="delete.html"> click here:(To delete)</a></p>
</form>

<form>
<p><a href="update.html"> Click here :(To update)</a></p>
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
