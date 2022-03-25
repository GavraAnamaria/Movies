<!DOCTYPE html>
<html>
    <head>
        <title>Exercitiul 3.b</title>
        <style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #f44336;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #f44336}

.button:active {
  background-color: #f44336;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
div {
    width: 1200px;
    padding: 15px;
    border: 25px groove;
    margin: 30px;
    text-align: center;
}
p {
    font-family: "Times New Roman", Times, serif;
    font-size: 30px;
}
body {
    background-color: whitesmoke;
}
table {
    text-align:center;
    margin: auto;
    border: solid 3px;
    border-color: black;
}
th {
    background-color: #f44336;
    color: black;
}
</style>
    </head>
<body>

    <div> 
    <?php
echo "<table>";
echo "<tr><th>ID</th><th>Data Introducere</th><th>Aparat</th><th>Simptome</th><th>Defect</th><th>Data Constatare</th><th>Data finalizare</th><th>Durata</th><th>Manopera/Ora</th><th>Total</th><th>ID Client</th><th>ID Depanator</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
     function __construct($it) { 
         parent::__construct($it, self::LEAVES_ONLY); 
     }

     function current() {
         return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
     }

     function beginChildren() { 
         echo "<tr style='text-align:center'>"; 
     } 

     function endChildren() { 
         echo "</tr>" . "\n";
     } 
} 
include "/connection.php";
try {
     $conn = new PDO("mysql:host=$db_host;dbname=$dbname", $db_username, $db_pass);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $conn->prepare("SELECT * 
                            FROM Deviz 
                            WHERE EXTRACT(MONTH FROM data_finalizare)='03' AND EXTRACT(YEAR FROM data_finalizare)='2013'"); 
     $stmt->execute();
     $result2 = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
         echo $v;
     }
}
catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>  
        <br><br>
        <a href="index.html" class="button">Inapoi</a>
    </div>
</body>
</html>




