<html>
<head>
<title>4A</title>
<link rel="stylesheet"  href="tabel.css">
</head>
<body ><br><br>
<h1><center><u>4.a) Detaliile studioului și producătorului ce au produs filmul Barry:</u> </center></h1><br>
<?php
include ('functii.php');
$connect = conectare();
$query = "CALL 4a();";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result))
{$row = mysqli_fetch_assoc($result);
	echo "<table><tr><th>PRODUCATOR<TH></tr><tr><td>ID:</td><td>".$row["id_persoana"]."</td></tr><tdr><td> NUME </td><td>" .$row["nume"]."</td></tr><tr><td>ADRESA: </td><td>" .$row["adr_pers"]. "</td></tr><tr><td> SEX:</td><td>".$row["sex"]."</td></tr> <tr><td>DATA NASTERII:</td><td>" .$row["data_nasterii"]."</td></tr><tr><td>CASTIG NET:</td><td>" .$row["castig_net"]."</td></tr><tr><td> MONEDA:</td><td>".$row["moneda"]. " </td></tr><tr><th>STUDIO<TH></tr><tr><td>NUME: </td><td>".$row["studio"]."</td></tr><tr><td>ADRESA</td><td> ".$row["adr_st"]."</td></tr><tr><td> ID PRESEDINTE:</td><td>".$row["id_presedinte"]."</td></tr></table>";	

} else {
  echo "Nu a fost gasit niciun rezultat";
}
mysqli_close($connect);
?>
</body>
</html>