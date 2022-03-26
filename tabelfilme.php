<html>
<head>
<title>FILME</title>
<link rel="stylesheet"  href="tabel.css">
</head>
<body ><br><br><br>
<?php
include ('functii.php');
$connect = conectare();
$query = "SELECT * from film";
$result = mysqli_query($connect, $query);
AfisareFilm($result);
mysqli_close($connect);
?>
</body>
</html>