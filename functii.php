<?php
function conectare()
{
$rezultat = new mysqli('localhost', 'ANA', 'ABC', 'filme');
if (!$rezultat)
return false;
return $rezultat;
}



function AfisareFilm($result)
{
	if(mysqli_num_rows($result))
{
	echo "<table><tr>  <th>TITLU</th>  <th> AN </th>  <th> DURATA </th>  <th> GEN </th>  <th> STUDIO </th>  <th> ID PRODUCATOR </th> </tr>";	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td> ".$row["titlu"]." </td><td> ".$row["an"]." </td><td> ".$row["durata"]." </td><td> ".$row["gen"]." </td><td> ".$row["studio"]." </td><td> ".$row["id_producator"]." </td></tr> ";
  }
  echo "</table>";
} else {
  echo "Nu a fost gasit niciun rezultat!";
}
}


function AfisarePersoana($result)
{
if(mysqli_num_rows($result))
{
	echo "<table><tr>  <th>ID</th>  <th> NUME </th>  <th> ADRESA </th>  <th> SEX </th>  <th> DATA NASTERII </th>  <th> CASTIG NET </th>  <th> MONEDA </th> </tr>";	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td> ".$row["id_persoana"]." </td><td> ".$row["nume"]." </td><td> ".$row["adresa"]." </td><td> ".$row["sex"]." </td><td> ".$row["data_nasterii"]." </td><td> ".$row["castig_net"]." </td><td> ".$row["moneda"]." </td></tr> ";
  }
  echo "</table>";
} else {
  echo "Nu a fost gasit niciun rezultat";
}
}

function AfisareStudio($result)
{
if(mysqli_num_rows($result))
{
	echo "<table><tr>   <th> NUME </th>  <th> ADRESA </th>  <th> ID PRESEDINTE </th> </tr>";	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td> ".$row["nume"]." </td><td> ".$row["adresa"]." </td><td> ".$row["id_presedinte"]." </td></tr> ";
  }
  echo "</table>";
} else {
  echo "Nu a fost gasit niciun rezultat";
}
}



function Afisaredistributie($result)
{
if(mysqli_num_rows($result))
{
	echo "<table><tr>   <th> FILM </th>  <th> AN </th>  <th> ID ACTOR </th> </tr>";	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td> ".$row["titlu_film"]." </td><td> ".$row["an_film"]." </td><td> ".$row["id_actor"]." </td></tr> ";
  }
  echo "</table>";
} else {
  echo "Nu a fost gasit niciun rezultat";
}


}

?>


