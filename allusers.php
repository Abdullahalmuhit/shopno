<?php 
$connect=mysqli_connect('localhost','root','','user');
$query="SELECT * FROM user";
$result=mysqli_query($connect,$query);
echo "<table border=1>
<tr>
<th>fid</th>
<th>email</th>
<th>user name</th>
<th>Gender</th>
<th>Phone</th>
<th>Country</th>

</tr>"
;

while($row=mysqli_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row["fid"] . "</td>";
	echo "<td>" . $row["email"] . "</td>";
	echo "<td>" . $row["user_name"] . "</td>";
	echo "<td>" . $row["gender"] . "</td>" ;
	echo "<td>" . $row["phone"] . "</td>" ;
	echo "<td>" . $row["country"] . "</td>" ;
	
	echo "</tr>";
	
	
}
echo "</table>";
?>