<html>
<head>
<title>3A</title>
<link rel="stylesheet"  href="tabel.css">
</head>
<body ><br><br><br>
<h1><center><u>3.a) Detaliile filmelor pentru copii ordonate crescător după an și titlu:</u> </center></h1><br>
<?php
include ('functii.php');
$connect = conectare();
$query = "SELECT * from film WHERE gen = 'copii' ORDER BY an, titlu";
$result = mysqli_query($connect, $query);
AfisareFilm($result);
mysqli_close($connect);
?>
</body>
</html>