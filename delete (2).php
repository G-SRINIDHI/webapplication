<html>
<body>
<table>
<?php
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());
mysqli_select_db($dbh,'netbanking1') or die(mysqli_error( $dbh));
$mn1=$_REQUEST['IFSC_code'];
$query="DELETE FROM branch_details WHERE IFSC_code = '$mn1'";
$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
echo "data deleted SUCCESFULLY!!!!!!!!!!!";




$var=mysqli_query($dbh,"SELECT * FROM branch_details");

echo"<table border size=1>";
echo "<tr> <th>branch_id</th> <th>bank_name</th> <th>state</th> <th>district</th> <th>IFSC_code</th> </th></tr>";
while ($arr=mysqli_fetch_row($var))
{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td>  </tr>";
}
echo "</table>";
?>

</html>
</body>
<form>
<p><a href="qwe.html"> click here:(Home page)</a></p>
</form>



<table style="width:100%">
  
</table>

</body>
</html>