<html>
<body bgcolor="white">	
<?php
$dbh=mysqli_connect('localhost', 'root','') or die(mysqli_error());
mysqli_select_db($dbh,'netbanking1') or die(mysqli_error());
$fn=$_REQUEST['card_no'];
$ln=$_REQUEST['card_type'];
$ln1=$_REQUEST['Expiry_date'];
$mn=$_REQUEST['Account_no'];
$query="INSERT INTO card_details VALUES('$fn','$ln','$ln1','$mn')";
$result=mysqli_query($dbh,$query)or die(mysqli_error($dbh));
echo"data entered successfully:";
$var=mysqli_query($dbh,"SELECT * FROM card_details");
echo"<table border_size=20>";
	
echo " <tr><th>card_no</th><th>card_type</th><th>Expiry_date</th> 
<th>Account_no</th> </tr>";
while($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> 
	 </tr>";
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
	