<html>
<head>
<title>4B</title>
<link rel="stylesheet"  href="tabel.css">
</head>
<body ><br><br>
<h1><center><u>4.b) Perechile de actori de sex diferit ce au jucat în același film:</u> </center></h1><br>
<?php
include ('functii.php');
$connect = conectare();
$query = "CALL 4b();";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result))
{
	echo "<table><tr>  <th>FILM</th>  <th> ACTOR1 </th>  <th> ACTOR2 </th> </tr>";	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td> ".$row["film"]." </td><td> ".$row["nume1"]." </td><td> ".$row["nume2"]." </td></tr> ";
  }
  echo "</table>";
} else {
  echo "Nu a fost gasit niciun rezultat";
}
mysqli_close($connect);
?>
</body>
</html>