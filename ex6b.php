<html>
<head>
<title>6B</title>
<link rel="stylesheet"  href="tabel.css">
</head>
<body ><br><br>
<h1><center><u>6.b) Câștigul minim și câștigul maxim pentru președinții de studiouri:</u> </center></h1><br>
<?php
include ('functii.php');
$connect = conectare();
$query = "CALL 6b();";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result))
{
	echo "<table><tr>    <th> CASTIG MAXIM </th>  <th> CASTIG MINIM </th></tr>";	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td> ".$row["Castig Maxim"]." </td><td> ".$row["Castig Minim"]." </td></tr> ";
  }
  echo "</table>";
} else {
  echo "Nu a fost gasit niciun rezultat";
}
mysqli_close($connect);
?>
</body>
</html>