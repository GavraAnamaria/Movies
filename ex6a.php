<html>
<head>
<title>6A</title>
<link rel="stylesheet"  href="tabel.css">
</head>
<body ><br><br>
<h1><center><u>6.a) Numarul de filme de gen SF produse de fiecare producator:</u> </center></h1><br>
<?php
include ('functii.php');
$connect = conectare();
$query = "CALL 5a();";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result))
{
	echo "<table><tr>    <th> ID PRODUCATOR </th>  <th> NUMAR FILME </th></tr>";	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td> ".$row["id_producator"]." </td><td> ".$row["nr"]." </td></tr> ";
  }
  echo "</table>";
} else {
  echo "Nu a fost gasit niciun rezultat";
}
mysqli_close($connect);
?>
</body>
</html>