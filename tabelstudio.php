<html>
<head>
<title>STUDIO</title>
<link rel="stylesheet"  href="tabel.css">
</head>
<body ><br><br><br><br><br>
<?php
include ('functii.php');
$connect = conectare();
$query = "SELECT * from studio";
$result = mysqli_query($connect, $query);
AfisareStudio($result);
mysqli_close($connect);
?>
</body>
</html>