<html>
<body bgcolor="white">
	
<?php
$dbh=mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($dbh,'netbanking1') or die(mysqli_error());
$fn=$_REQUEST['NAME'];
$ln=$_REQUEST['email'];
$ln1=$_REQUEST['date-of-birth'];
$mn=$_REQUEST['Account-no'];
$ln3=$_REQUEST['Phone-no'];
$ln4=$_REQUEST['Address'];
$query="INSERT INTO user_details VALUES('$fn','$ln','$ln1','$mn','$ln3','$ln4')";
$result=mysqli_query($dbh,$query)or die(mysqli_error($dbh));
echo"";
$var=mysqli_query($dbh,"SELECT * FROM user_details");
echo"<table border_size=20>";
	
echo " <tr> <th> NAME </th> <th> email</th> <th>date-of-birth</th> <th>Account-no</th> 
<th> Phone-no</th> <th>Address</th> </tr>";
while($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> 
	<td>$arr[4]</td> <td>$arr[5]</td> </tr>";
}
echo"</table>";
?>

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
