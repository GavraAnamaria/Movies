<html>
<head>
<title>PERSOANE</title>
<link rel="stylesheet"  href="tabel.css">
</head>
<body ><br><br>
<?php
include ('functii.php');
$connect = conectare();
$query = "SELECT * from persoana";
$result = mysqli_query($connect, $query);
AfisarePersoana($result);
mysqli_close($connect);
?>
</body>
</html>