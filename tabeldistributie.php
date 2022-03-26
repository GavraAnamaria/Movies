<html>
<head>
<title>DISTRIBUTIE</title>
<link rel="stylesheet"  href="tabel.css">
</head>
<body ><br><br><br><br><br>
<?php
include ('functii.php');
$connect = conectare();
$query = "SELECT * from distributie";
$result = mysqli_query($connect, $query);
AfisareDistributie($result);
mysqli_close($connect);
?>
</body>
</html>