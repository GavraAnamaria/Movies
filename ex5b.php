<html>
<head>
<title>5B</title>
<link rel="stylesheet"  href="tabel.css">
</head>
<body ><br><br>
<h1><center><u>5.b) Filme cu durata mai mare decât durata filmului Bohemian Rhapsody:</u> </center></h1><br>
<?php
include ('functii.php');
$connect = conectare();
$query = "SELECT titlu, an, durata
   FROM film
   WHERE durata > (SELECT durata 
                   FROM film 
                   WHERE titlu = 'Bohemian Rhapsody' AND an = 2018) 
   ORDER BY durata";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result))
{
	echo "<table><tr>  <th>FILM</th>  <th> AN </th>  <th> DURATA </th></tr>";	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td> ".$row["titlu"]." </td><td> ".$row["an"]." </td><td> ".$row["durata"]." </td></tr> ";
  }
  echo "</table>";
} else {
  echo "Nu a fost gasit niciun rezultat";
}
mysqli_close($connect);
?>
</body>
</html>