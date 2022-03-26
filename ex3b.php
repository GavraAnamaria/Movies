<html>
<head>
<title>3B</title>
<link rel="stylesheet"  href="tabel.css">
</head>
<body ><br><br>
<h1><center><u>3.b) Detaliile persoanelor cu câștig net peste 1000000 USD:</u> </center></h1><br>
<?php
include ('functii.php');

$connect = conectare();
$query = "CALL PersCastigMare();";
$result = mysqli_query($connect, $query);
AfisarePersoana($result);
mysqli_close($connect);
?>
</body>
</html>