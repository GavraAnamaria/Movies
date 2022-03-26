<html>
<head>
<title>DISTRIBUTIE</title>
<link rel="stylesheet"  href="tabel.css">
</head>
<body><br><br><br>
<h1><center>DISTRIBUTIE</center></h1>
<?php

$titlu=$_POST['titlu'];
$titlu= trim($titlu);
$an=$_POST['an'];
$an= trim($an);

if (!$titlu ||  !$an)
{
echo 'Nu ati introdus datele.';
exit;
}

include ('functii.php');
$connect = conectare();
$query = "SELECT * from distributie WHERE lower(titlu_film) = lower('".$titlu."') and an_film='".$an."'";
$result = mysqli_query($connect, $query);
AfisareDistributie($result);
mysqli_close($connect);
?>
</body>
</html>