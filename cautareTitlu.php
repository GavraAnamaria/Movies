<html>
<head>
<title>CAUTARE</title>
<link rel="stylesheet"  href="tabel.css">
</head>
<body><br><br><br>
<h1><center>Cautare film</center></h1>
<?php

$titlu=$_POST['titlu'];
$titlu= trim($titlu);

if (!$titlu)
{
echo 'Nu ati introdus datele.';
exit;
}
if (!get_magic_quotes_gpc())
{
$titlu = addslashes($titlu);
}
include ('functii.php');
$connect = conectare();
$query = "SELECT * from film WHERE lower(titlu) = lower('".$titlu."')";
$result = mysqli_query($connect, $query);
AfisareFilm($result);
mysqli_close($connect);
?>
</body>
</html>