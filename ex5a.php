<html>
<head>
<title>5A</title>
<link rel="stylesheet"  href="tabel.css">
</head>
<body ><br><br>
<h1><center><u>5.a) Actrița cel mai puțin plătită:</u> </center></h1><br>
<?php
include ('functii.php');
$connect = conectare();
$query = "SELECT nume, castig_net
   FROM persoana
   WHERE sex = 'F' AND castig_net <= ALL(SELECT castig_net 
                                         FROM persoana 
                                         WHERE sex='F')";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result))
{
	echo "<table><tr>  <th>NUME</th>  <th> CASTIG </th> </tr>";	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td> ".$row["nume"]." </td><td> ".$row["castig_net"]." </td></tr> ";
  }
  echo "</table>";
} else {
  echo "Nu a fost gasit niciun rezultat";
}
mysqli_close($connect);
?>
</body>
</html>